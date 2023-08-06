<?php

namespace App\Orchid\Screens;

use App\Models\Ward;
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

class WardEditScreen extends Screen
{

    /**
     * @var Ward
     */
    public $ward;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Ward $ward): array
    {
        $ward->load('attachment');

        return [
            'wards' => Ward::filters()->defaultSort('id')->paginate()
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        //dd($this->ward);
        return $this->ward->exists ? 'Edit Ward' : 'Creating a new ward';
    }


    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Wards";
    }


    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create ward')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->ward->exists),
                

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->ward->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->ward->exists),
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
                Input::make('ward.Ccode')
                    ->title('Ccode'),

                Input::make('ward.County')
                    ->title('County'),

                Input::make('ward.Sub_County')
                    ->title('Sub County'),


                Input::make('ward.Wcode')
                    ->title('Wcode'),

                Input::make('ward.Ward')
                    ->title('Ward'),


            ])
        ];
    }

    /**
     * @param Ward    $ward
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Ward $ward, Request $request)
    {
        $ward->fill($request->get('ward'))->save();

        $ward->attachment()->syncWithoutDetaching(
            $request->input('ward.attachment', [])
        );

        Alert::info('You have successfully created a ward.');

        return redirect()->route('platform.ward.list');
    }

    /**
     * @param Ward $ward
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Ward $ward)
    {
        $ward->delete();

        Alert::info('You have successfully deleted the ward.');

        return redirect()->route('platform.ward.list');
    }
}