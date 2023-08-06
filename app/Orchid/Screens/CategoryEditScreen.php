<?php

namespace App\Orchid\Screens;

use App\Models\Category;
use Illuminate\Http\Client\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CategoryEditScreen extends Screen
{

    /**
     * @var Category
     */
    public $category;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): array
    {
        $category->load('attachment');

        return [
            'categories' => Category::filters()->defaultSort('id')->paginate()
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->category->exists ? 'Edit Category' : 'Creating a new Category';
    }


    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Categories";
    }


    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create category')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->category->exists),
                

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->category->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->category->exists),
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
                Input::make('category.Cat')
                    ->title('Cat'),

                 Input::make('category.cat_description')
                    ->title('Cat Description')

            ])
        ];
    }

    /**
     * @param Category    $category
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Category $category, Request $request)
    {
        $category->fill($request->get('category'))->save();

        $category->attachment()->syncWithoutDetaching(
            $request->input('category.attachment', [])
        );

        Alert::info('You have successfully created a category.');

        return redirect()->route('platform.category.list');
    }

    /**
     * @param Category $category
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Category $category)
    {
        $category->delete();

        Alert::info('You have successfully deleted the category.');

        return redirect()->route('platform.category.list');
    }
}
