<?php

namespace App\Orchid\Layouts;

use App\Models\Ward;
use App\Models\Center;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class WardListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'wards';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
                       TD::make('Ccode', 'Ccode')
                            ->sort()
                            ->filter(Input::make())
                            ->render(function (Ward $ward) {
                                return Link::make($ward->Ccode)
                                    ->route('platform.ward.edit', $ward);
                            }),
                        TD::make('County', 'County'),
                        TD::make('Sub_County', 'Sub_County'),
                        TD::make('Wcode', 'Wcode'),
                        TD::make('Ward', 'Ward'),
                        TD::make('created_at', 'Created')->sort()->filter(Input::make()),
                        TD::make('updated_at', 'Last edit')->sort()->filter(Input::make()),
                    ];
    }
}
