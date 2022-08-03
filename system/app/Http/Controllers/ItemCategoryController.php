<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ItemCategory;
use Illuminate\Support\Str;
use DB;
 
class ItemCategoryController extends Controller
{
    function item_category_list(){
    	$itemCategory_data = ItemCategory::all();
    	return view("item.category.list",['item_category_list'=>$itemCategory_data,]);
    }
    function edit_item_category($id){
    	$itemCategory = ItemCategory::find($id);
    	return view("item.category.edit",['item_category'=>$itemCategory,]);
    }
    function add_item_category(){
    	return view("item.category.add");
    }
    function create_item_category(Request $req){
        $itemCategory = new ItemCategory;
        $itemCategory->category_name         = $req->category_name;
        if ($req->hasFile('category_image')) {
            $itemCategoryPic             = time().'.'.$req->category_image->extension();  
            $req->category_image->move(public_path('image'), $itemCategoryPic);
            $itemCategory->category_image = $itemCategoryPic;
        }
        $itemCategory->category_description        = $req->category_description;
        $itemCategory->save();
        return redirect('/item_category_list')->with('success','Item Category Created Successfully!');
    }
    function update_item_category(Request $req){
        $itemCategory                            = ItemCategory::find($req->id);
        $itemCategory->category_name         = $req->category_name;
        if ($req->hasFile('category_image')) {
            $itemCategoryPic             = time().'.'.$req->category_image->extension();  
            $req->category_image->move(public_path('image'), $itemCategoryPic);
            $itemCategory->category_image = $itemCategoryPic;
        }
        $itemCategory->category_description        = $req->category_description;
        $itemCategory->save();
        return redirect('/item_category_list')->with('success','Item Category Details Updated Successfully!');
    }
    public function delete_item_category($id) {
        if(ItemCategory::where('id', $id)->exists()) {
            $itemCategory= ItemCategory::where('id', $id)->delete();
            return redirect('/item_category_list')->with('success','Item Category Details Deleted Successfully!');
        }else{
            return redirect('/item_category_list')->with('error','Item Category Not Found');
        }
    }
    function get_category_detail(Request $request){
        $category       = ItemCategory::find($request->customer_id);
        return response()->json(['category'=>$category->category_name,]);
    }
}
