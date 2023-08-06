<?php

namespace App\Orchid\Layouts;

use App\Models\Financing;
use App\Models\Center;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class FinancingListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'financings';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
                       TD::make('Donor', 'Donor')
                            ->sort()
                            ->filter(Input::make())
                            ->render(function (Financing $financing) {
                                return Link::make($financing->Donor)
                                    ->route('platform.financing.edit', $financing);
                            }),
                        TD::make('Description', 'Description'),
                        TD::make('created_at', 'Created')->sort()->filter(Input::make()),
                        TD::make('updated_at', 'Last edit')->sort()->filter(Input::make()),
                    ];
    }
}
