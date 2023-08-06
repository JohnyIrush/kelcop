<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use App\Models\Center;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
                       TD::make('Cat', 'Cat')
                            ->sort()
                            ->filter(Input::make())
                            ->render(function (Category $category) {
                                return Link::make($category->Cat)
                                    ->route('platform.category.edit', $category);
                            }),
                        TD::make('cat_description', 'Description'),
                        TD::make('created_at', 'Created')->sort()->filter(Input::make()),
                        TD::make('updated_at', 'Last edit')->sort()->filter(Input::make()),
                    ];
    }
}
