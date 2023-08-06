<?php

namespace App\Orchid\Layouts;

use App\Models\Center;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CenterListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'centers';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
                       TD::make('Center', 'Centre')
                            ->sort()
                            ->filter(Input::make())
                            ->render(function (Center $center) {
                                return Link::make($center->Center)
                                    ->route('platform.centre.edit', $center);
                            }),
                        TD::make('Description', 'Description'),
                        TD::make('created_at', 'Created')->sort()->filter(Input::make()),
                        TD::make('updated_at', 'Last edit')->sort()->filter(Input::make()),
                    ];
    }
}
