<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect(){
      $user = Auth::user()->usertype;

      if($user == '0'){
        return view('home.index',);
      }else{
        $data['total_product'] = Product::all()->count();
        $data['total_order'] = Order::all()->count();
        $data['total_user'] = User::all()->count();
        $order = Order::all();
        return view('admin.home',$data);
      }
    }

    public function index(){
      $slider = Slider::all();
      $category = Category::all();
      $banner = Banner::all();
      $product = Product::paginate(4);
      return view('home.index',compact('slider','category','banner','product'));
    }

    public function view_category($slug){
      if(Category::where('slug', $slug)->exists()){
        $category = Category::where('slug',$slug)->first();
        $product = Product::where('category',$category->name)->where('status','0')->get();
        return view('home.category_product',compact('category','product'));
      }else{
        return redirect('/')->with('status','slug does not exists');
      }
    }

    public function product_details($id){
      $product = Product::find($id);
      return view('home.product_details',compact('product'));
    }

    public function product(){
      $product = Product::all();
      $category = Category::all();
      return view('home.product',compact('product','category'));
    }

    public function add_to_cart(Request $request, $id){
      if(Auth::id()){
        $user = Auth::user();
        $userId = $user->id;
        $product = Product::find($id);
        $product_exist_id = Cart::where('product_id', '=', $id)->where('user_id', '=', $userId)->get('id')->first();

        if($product_exist_id){
          $cart = Cart::find($product_exist_id)->first();
          $quantity = $cart->quantity;
          $cart->quantity = $quantity + $request->quantity;
          if($product->discount_price != null){
            $cart->price = $product->discount_price * $cart->quantity;
          }else{
            $cart->price = $product->price * $cart->quantity;
          }

          $cart->save();
          return redirect('product');
        }else{
          $cart = new Cart;
          $cart->name = $user->name;
          $cart->email = $user->email;
          $cart->phone = $user->phone;
          $cart->address = $user->address;
          $cart->product_title = $product->title;
          if($product->discount_price != null){
            $cart->price = $product->discount_price * $request->quantity;
          }else{
            $cart->price = $product->price * $request->quantity;
          }

          $cart->image = $product->image;
          $cart->product_id = $product->id;
          $cart->user_id = $user->id;
          $cart->quantity = $request->quantity;

          $cart->save();

          return redirect()->back();
        }
      }else{
        return redirect('login');
      }
    }

    public function show_cart(){
      if(Auth::id()){
        $id = Auth::user()->id;
        $cart = Cart::where('user_id', '=', $id)->get();
        return view('home.show_cart',compact('cart'));
      }
    }

    public function remove_cart($id){
      $cart = Cart::find($id);
      $cart->delete();
      return redirect()->back();
    }

    public function cash_on_delivery(){
      $user = Auth::user();
      $userId = $user->id;
      $data = Cart::where('user_id','=',$userId)->get();

      foreach($data as $data){
        $order = new Order;
        $order->name = $data->name;
        $order->email = $data->email;
        $order->phone = $data->phone;
        $order->address = $data->address;
        $order->user_id = $data->user_id;
        $order->product_title = $data->product_title;
        $order->quantity = $data->quantity;
        $order->price = $data->price;
        $order->image = $data->image;
        $order->product_id = $data->product_id;
        $order->payment_status = 'Cash On Delivery';
        $order->delivery_status = 'Processing';

        $order->save();

        $cart_id = $data->id;
        $cart = Cart::find($cart_id);
        $cart->delete();
      }
      return redirect()->back();
    }

    public function orders(){
      if(Auth::id()){
        $user = Auth::user();
        $userid = $user->id;
        $order = Order::where('user_id', '=', $userid)->get();
        return view('home.order',compact('order'));
      }else{
        return redirect('login');
      }
    }

    public function cancel_order($id){
      $order = Order::find($id);
      $order->delete();
      return redirect()->back();
    }

}
