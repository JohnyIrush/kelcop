<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\CenterListLayout;
use App\Models\Center;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CenterListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'centers' => Center::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Centre';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All Centers";
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
                ->route('platform.centre.edit')
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
            CenterListLayout::class
        ];
    }
}