<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addproducts;
use App\Models\orderDetails;
use App\Models\customerquery;



class mushroomProduct extends Controller
{
    public function addProductForm(){
        return view('/addProductForm/addProductForm');
    }
    
    public function save(Request $request){
    
        $validateData = $request->validate([
            'Category'=> 'required',
            'productName' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
        ]);
    $addproducts = new addproducts;
    $addproducts->Category = $request->Category;
    $addproducts->productName = $request->productName;
    $addproducts->weight = $request->weight;
    $addproducts->price = $request->price;
    $addproducts->discount = $request->discount;
    $addproducts->description = $request->description;
    // $addproducts->mobile_no = $request->mobile_no;

    if($request->hasFile('image1')){
        $validatedData = $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('image1');
        $new_image_name=date('y-m-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/images');
        $image->move($destination_path,$new_image_name);
        $addproducts->image_url1="onlineAuction/images/".$new_image_name;
    
    // 'image2' => 'required',
    if($request->hasFile('image2')){
        $validatedData = $request->validate([
            'image2' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('image2');
        $new_image_name=date('y-md-d').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/images');
        $image->move($destination_path,$new_image_name);
        $addproducts->image_url2="onlineAuction/images/".$new_image_name;
    
    // 'image3' => 'required',
    if($request->hasFile('image3')){
        $validatedData = $request->validate([
            'image3' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $image=$request->file('image3');
        $new_image_name=date('y-md-md').time().".".$image->extension();
        $destination_path= public_path('/onlineAuction/images');
        $image->move($destination_path,$new_image_name);
        $addproducts->image_url3="onlineAuction/images/".$new_image_name;
        // return $validatedData;
    }}}
    // $addproducts->status = $request->status;
    $addproducts->save();
  
// Auth::login($addproducts);
// return redirect('home');    

// return $addproduct;
// return $addproducts;
return redirect('addProductForm');

}
public function orderPage($id){
    $datas=addproducts::find($id);
    // echo $datas;
    
    return view('/orderPage/orderPage',compact('datas'));
    // return view('/orderPage/orderPage');
}
public function orderSave(Request $request){
    
    $validateData = $request->validate([
        'name'=> 'required',
        'mobile' => 'required',
        'email' => 'required',
        'address' => 'required',
        // 'productName' => 'required',
        // 'weight' => 'required',
        'packSize' => 'required',
    ]);
$orderDetails = new orderDetails;
$orderDetails->name = $request->name;
$orderDetails->mobile = $request->mobile;
$orderDetails->email = $request->email;
$orderDetails->address = $request->address;
$orderDetails->productName = $request->productName;
$orderDetails->weight = $request->weight;
$orderDetails->packSize = $request->packSize;
$orderDetails->save();
// return $orderDetails;
return back();
}

public function index(){
    return view('/homePage/homePage');
}

public function customerquery(Request $request){
    
    $validateData = $request->validate([
        'customerName'=> 'required',
        'email' => 'required',
        'contactNo' => 'required',
        'websiteRating' => 'required',
        // 'productName' => 'required',
        // 'weight' => 'required',
        'customerComment' => 'required',
    ]);
$customerquery = new customerquery;
$customerquery->customerName = $request->customerName;
$customerquery->email = $request->email;
$customerquery->contactNo = $request->contactNo;
$customerquery->websiteRating = $request->websiteRating;
$customerquery->customerComment = $request->customerComment;

$customerquery->save();
// return $customerquery;
return redirect('homepage');
}

public function allProducts(){
    $datas=addproducts::get();
    // echo $datas;
    return view('/allProducts',compact('datas'));
}

public function oysterMushroom(){
    $datas=addproducts::where('Category','Oyster Mushroom')->get();
    // echo $datas;
    return view('/oysterMushroom',compact('datas'));
}

public function buttomMushroom(){
    $datas=addproducts::where('Category','Button Mushroom')->get();
    // echo $datas;
    return view('/buttonMushroom',compact('datas'));
}

public function productDetails($id){
    // $datas=addproduct::where('selectcategory','Diamond Category')->get();
    $datas=addproducts::find($id);
    
    return view('/productDetails/productDetails',compact('datas'));
}


// adminDashboard
public function adminDashboard(){
    return view('/adminDashboard/adminDashboard');
}

public function viewUploadProduct(){

    $datas=addproducts::get();
    // echo $datas;
    return view('/viewUploadProduct/viewUploadProduct',compact('datas'));
}
// orderDetails
public function orderDetails(){
    $datas=orderDetails::get();
    // echo $datas;
    return view('/orderDetails/orderDetails',compact('datas'));
}
// customerQueryView
public function customerQueryView(){
    $datas=customerquery::get();
    // echo $datas;
    return view('/customerQueryView/customerQueryView',compact('datas'));
}
// addFormEdit
public function addFormEdit($id){
    $datas=addproducts::find($id);
    echo $datas;
    return view('/addProductForm/editAddProductForm',compact('datas'));
    // return view('/customerQueryView/customerQueryView',compact('datas'));
}
public function addFormUpdate(Request $request,$id)
{
    $datas=addproducts::find($id);
    
}
}