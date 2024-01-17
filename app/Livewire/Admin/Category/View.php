<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class View extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cat_id;

    public function deleteCategory($id){
        // dd($id);
        $this->cat_id = $id;
        
    }

    public function destroyCategory(){
        
      
        $cat = Category::findOrFail($this->cat_id);

        $path = public_path('image/category/'.$cat->image);
        if(File::exists($path)){
            File::delete($path);
        }

        $cat->delete();
        session()->flash('status','Category deleted successfully');

        $this->dispatchBrowserEvent('close-modal');

    }

    public function render()
    {
        $category = Category::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.category.view',compact('category'));
    }

 
}
