<?php

namespace App\Orchid\Screens;

use App\Models\Center;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

use Orchid\Screen\Fields\Cropper;

class CenterEditScreen extends Screen
{

    /**
     * @var Center
     */
    public $center;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Center $center): array
    {
        $center->load('attachment');

        return [
            'centers' => Center::filters()->defaultSort('id')->paginate()
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->center->exists ? 'Edit Center' : 'Creating a new center';
    }


    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Centers";
    }


    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create center')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->center->exists),
                

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->center->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->center->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('center.Center')
                    ->title('Centre'),
                    
                Input::make('center.Dscription')
                    ->title('Dscription'),

                Input::make('center.Area')
                    ->title('Area')


            ])
        ];
    }

    /**
     * @param Center    $center
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Center $center, Request $request)
    {
        $center->fill($request->get('center'))->save();

        $center->attachment()->syncWithoutDetaching(
            $request->input('center.attachment', [])
        );

        Alert::info('You have successfully created a center.');

        return redirect()->route('platform.center.list');
    }

    /**
     * @param Center $center
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Center $center)
    {
        $center->delete();

        Alert::info('You have successfully deleted the center.');

        return redirect()->route('platform.center.list');
    }
}