<?php

namespace App\Orchid\Screens;

use App\Models\Financing;
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

class FinancingEditScreen extends Screen
{

    /**
     * @var Financing
     */
    public $financing;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Financing $financing): array
    {
        $financing->load('attachment');

        return [
            'financings' => Financing::filters()->defaultSort('id')->paginate()
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        //dd($this->financing);
        return $this->financing->exists ? 'Edit Financing' : 'Creating a new financing';
    }


    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Financing";
    }


    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create financing')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->financing->exists),
                

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->financing->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->financing->exists),
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
                Input::make('financing.Donor')
                    ->title('Donor'),

                Input::make('financing.Description')
                    ->title('Description'),


            ])
        ];
    }

    /**
     * @param Financing    $financing
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Financing $financing, Request $request)
    {
        $financing->fill($request->get('financing'))->save();

        $financing->attachment()->syncWithoutDetaching(
            $request->input('financing.attachment', [])
        );

        Alert::info('You have successfully created a financing.');

        return redirect()->route('platform.financing.list');
    }

    /**
     * @param Financing $financing
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Financing $financing)
    {
        $financing->delete();

        Alert::info('You have successfully deleted the financing.');

        return redirect()->route('platform.financing.list');
    }
}