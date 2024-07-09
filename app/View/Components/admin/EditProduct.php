<?php

namespace App\View\Components\admin;

use App\Models\Category;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories;
    public function __construct(Category $categories)
    {
        $data = $categories->all();
        $this->categories = $data;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.edit-product');
    }
}
