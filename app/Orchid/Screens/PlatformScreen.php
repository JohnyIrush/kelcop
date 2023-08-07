<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PlatformScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Get Started';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Welcome to your Kelcop application.';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            //Layout::view('platform::partials.update-assets'),
            //Layout::view('platform::partials.welcome'),

            Layout::tabs([
                'Planning Data Entry' => [

                ],
                'Target Data Entry'      => [
                    Layout::rows([
                        Input::make('address')
                            ->type('text')
                            ->required(),
                    ]),
                ],
                'Detailed by Component'      => [
                    Layout::rows([
                        Input::make('address')
                            ->type('text')
                            ->required(),
                    ]),
                ],

                'Summary by Component'      => [
                    Layout::rows([
                        Input::make('address')
                            ->type('text')
                            ->required(),
                    ]),
                ],

                'Summary by Categories and Financing'      => [
                    Layout::rows([
                        Input::make('address')
                            ->type('text')
                            ->required(),
                    ]),
                ],

                'Summary by Subitems'      => [
                    Layout::rows([
                        Input::make('address')
                            ->type('text')
                            ->required(),
                    ]),
                ],
            ]),
        ];
    }
}
