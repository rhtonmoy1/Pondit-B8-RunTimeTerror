<?php
 
namespace App\View\Composers;

use App\Models\Category;
use Illuminate\View\View;
 
class FrontendComposer
{
    
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::all();
        $view->with([
            'categories' => $categories
        ]);
    }
   
}