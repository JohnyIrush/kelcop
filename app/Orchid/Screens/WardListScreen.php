<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\WardListLayout;
use App\Models\Ward;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class WardListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'wards' => Ward::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Ward';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All Wards";
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
                ->route('platform.ward.edit')
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
            WardListLayout::class
        ];
    }
}