<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Image::make('Product Image', 'image')->disk('public')->dir('products_images'),
                Text::make('Product Title', 'title')->sortable(),
                Text::make('Product Description', 'description'),
                Number::make('Product Price', 'price')->sortable()->step(0.01)
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
