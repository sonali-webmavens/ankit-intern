<?php

namespace App\Livewire\Product;

use App\Models\product;
use App\Models\productimages;
use Livewire\Component;

class ProductComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = product::where('id', $id)->first();
        $product->delete();

        //Delete Multiple Images
        $images = productimages::where('product_id', $id)->get();
        foreach($images as $image){
            $image->delete();
        }

        session()->flash('message', 'Product has been deleted successfully');
    }

    public function render()
    {
        $products = Product::get();

        return view('livewire.product.product-component', ['products'=>$products])->layout('livewire.layouts.base');
    }
}
