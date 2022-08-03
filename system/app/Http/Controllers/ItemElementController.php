<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ItemAttributes;
use App\Models\ItemAttributesValues;
use Illuminate\Support\Str;
use DB;
 
class ItemElementController extends Controller
{
    function item_element_list(){
    	$itemelement_data = ItemAttributes::all();
    	return view("item.element.list",['item_element_list'=>$itemelement_data,]);
    }
    function edit_item_element($id){
    	$itemelement = ItemAttributes::find($id);
    	return view("item.element.edit",['item_element'=>$itemelement,]);
    }
    function add_item_element(){
    	return view("item.element.add");
    }
    function create_item_element(Request $req){
        $itemelement = new ItemAttributes;
        $itemelement->name         = $req->name;
        $itemelement->save();
        return redirect('/item_element_list')->with('success','Item element Created Successfully!');
    }
    function update_item_element(Request $req){
        $itemelement                            = ItemAttributes::find($req->id);
        $itemelement->name         = $req->name;
        $itemelement->save();
        return redirect('/item_element_list')->with('success','Item element Details Updated Successfully!');
    }
    public function delete_item_element($id) {
        if(ItemAttributes::where('id', $id)->exists()) {
            $itemelement= ItemAttributes::where('id', $id)->delete();
            return redirect('/item_element_list')->with('success','Item element Details Deleted Successfully!');
        }else{
            return redirect('/item_element_list')->with('error','Item element Not Found');
        }
    }
    function get_element_detail(Request $request){
        $element       = ItemAttributes::find($request->customer_id);
        return response()->json(['element'=>$element->element_name,]);
    }
    
    
    public function item_element_value_list($id) {
        $values = ItemAttributesValues::where("attribute_parent_id",$id)->get();
        return view("item.values.list",['values'=>$values,'id'=>$id]);
    }
    function add_item_element_value($id){
    	return view("item.values.add",['id'=>$id]);
    }
    function create_item_element_value(Request $req){
        $itemelement = new ItemAttributesValues;
        $itemelement->value         = $req->value;
        $itemelement->attribute_parent_id         = $req->attribute_parent_id;
        $itemelement->save();
        return redirect('/item_element_value_list/'.$req->attribute_parent_id)->with('success','Item element value Created Successfully!');
    }
    function edit_item_element_value($id){
    	$itemelement = ItemAttributesValues::find($id);
    	return view("item.values.edit",['value'=>$itemelement,]);
    }
    function update_item_element_value(Request $req){
        $itemelement                = ItemAttributesValues::find($req->id);
        $itemelement->value         = $req->value;
        $itemelement->save();
        return redirect('/item_element_value_list/'.$req->parent_id)->with('success','Item element value Details Updated Successfully!');
    }
    public function delete_item_element_value($id,$parent) {
        if(ItemAttributesValues::where('id', $id)->exists()) {
            $itemelement  = ItemAttributesValues::where('id', $id)->delete();
            return redirect('/item_element_value_list/'.$parent)->with('success','Item element value Details Deleted Successfully!');
        }
    }
}
