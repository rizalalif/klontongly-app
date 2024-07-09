<?php

namespace App\View\Components\admin;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminAddProduct extends Component
{
    /**
     * Create a new component instance.
     */

     public $categories;
    public function __construct()
    {
        $data = Category::all();
        $this->categories = $data;
        // dd($this->categories);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.admin-add-product');
    }
}
