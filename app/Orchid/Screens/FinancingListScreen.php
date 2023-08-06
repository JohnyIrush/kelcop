<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\FinancingListLayout;
use App\Models\Financing;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class FinancingListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'financings' => Financing::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Financing';
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
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.financing.edit')
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
            FinancingListLayout::class
        ];
    }
}