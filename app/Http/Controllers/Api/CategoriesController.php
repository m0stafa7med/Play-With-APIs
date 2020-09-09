<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    use GeneralTrait;
    public function index()
    {
       $categories= Category::select('id','name_'.app()->getLocale().' as name')->get();
       
       //return response()->json($categories);
       return $this->returnData('categories',$categories,'success');
    }
    
    public function getCategoryById(Request $request)
    {

       $category= Category::select()->find($request->id);
       if(!$category)
       {
        return $this->returnError('011','errror');
       }
     
       return $this->returnData('category',$category,'success');
    }
    
    public function changeStatus(Request $request)
    {
        Category::where('id',$request->id)->update(['active'=> $request->active]);
        return $this->returnSuccessMessage('status activated');

    }
}
