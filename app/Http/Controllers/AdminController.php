<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Order;
use PDF;

class AdminController extends Controller
{
  // Category Admin Panel
    public function category(){
      $category = Category::all();
      return view('admin.category',compact('category'));
    }

    public function add_category(Request $request){
      $category = new Category;

      $category->name = $request->name;
      $category->slug = $request->slug;
      $category->description = $request->description;
      $category->status = $request->status == True?'1':'0';
      $category->popular = $request->popular == True?'1':'0';
      $category->meta_title = $request->meta_title;
      $category->meta_description = $request->meta_description;
      $category->meta_keyword = $request->meta_keyword;

      $image = $request->image;
      $imagename = Time().'.'.$image->getClientOriginalExtension();
      $request->image->move('CategoryImage',$imagename);
      $category->image = $imagename;

      $category->save();
      return redirect()->back();
    }

    public function show_category(){
      $category = Category::all();
      return view('admin.show_category',compact('category'));
    }

    public function delete_category($id){
      $category = Category::find($id);
      $category->delete();
      return redirect()->back();

    }

    // End Category Admin Panel

    // Slider
    public function slider(){
      $slider = Slider::all();
      return view('admin.slider',compact('slider'));
    }

    public function add_slider(Request $request){
      $slider = new Slider;

      $image = $request->image;
      $imagename = Time().'.'.$image->getClientOriginalExtension();
      $request->image->move('SliderImage',$imagename);
      $slider->image = $imagename;

      $slider->save();
      return redirect()->back();
    }

    public function delete_slider($id){
      $slider = Slider::find($id);

      $slider->delete();

      return redirect()->back();
    }
    // End Slider

    // Banner
    public function banner(){
      return view('admin.banner');
    }

    public function add_banner(Request $request){
      $banner = new Banner;

      $banner->header = $request->header;
      $banner->details = $request->details;

      $image = $request->image;
      $imagename = Time().'.'.$image->getClientOriginalExtension();
      $request->image->move('BannerImage',$imagename);

      $banner->image = $imagename;

      $banner->save();

      return redirect()->back();
    }

    public function show_banner(){
      $banner = Banner::all();
      return view('admin.show_banner',compact('banner'));
    }

    public function delete_banner($id){
      $banner = Banner::find($id);
      $banner->delete();
      return redirect()->back();
    }

    public function update_banner($id){
      $banner = Banner::find($id);
      return view('admin.edit_banner',compact('banner'));
    }

    public function edit_banner(Request $request, $id){
      $banner = Banner::find($id);

      $banner->header = $request->header;
      $banner->details = $request->details;

      $image = $request->image;
      if($image){
        $imagename = Time().'.'.$image->getClientOriginalExtension();
        $request->image->move('BannerImage',$imagename);
        $banner->image = $imagename;
      }


      $banner->save();

      return redirect('show_banner');
    }
    // // End Banner

    // // Product

    public function add_product(){
      $category = Category::all();
      return view('admin.add_product',compact('category'));
    }

    public function plus_product(Request $request){
      $product = new Product;

      $product->title = $request->title;
      $product->description = $request->description;
      $product->category = $request->category;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->discount_price = $request->discount_price;

      $image = $request->image;
      $imagename = Time().'.'.$image->getClientOriginalExtension();
      $request->image->move('ProductImage',$imagename);

      $product-> image = $imagename;

      $product->save();

      return redirect()->back();
    }

    public function show_product(){
      $product = Product::all();
      return view('admin.show_product',compact('product'));
    }

    public function update_product($id){
      $product = Product::find($id);
      $category = Category::all();
      return view('admin.edit_product',compact('product','category'));
    }

    public function edit_product(Request $request, $id){
      $product = Product::find($id);
      $product->title = $request->title;
      $product->description = $request->description;
      $product->category = $request->category;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->discount_price = $request->discount_price;

      $image = $request->image;
      if($image){
        $imagename = Time().'.'.$image->getClientOriginalExtension();
        $request->image->move('ProductImage',$imagename);
        $product->image = $imagename;
      }

      $product->save();

      return redirect('show_product');
    }

    public function delete_product($id){
      $product = Product::find($id);
      $product->delete();

      return redirect()->back();
    }


    // End Product

    // // Order
    public function show_order(){
      $order = Order::all();
      return view('admin.show_order',compact('order'));
    }

    public function order_delivered($id){
      $order = Order::find($id);
      $order->delivery_status = 'Deliverd';
      $order->payment_status = 'Paid';

      $order->save();
      return redirect()->back();
    }

    public function print_pdf($id){
      $order = Order::find($id);
      $pdf = PDF::loadView('admin.pdf',compact('order'));
      return $pdf->download('order_details.pdf');
    }
    // End Order
}
