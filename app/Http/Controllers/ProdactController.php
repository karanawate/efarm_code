<?php
namespace App\Http\Controllers;
use App\Product;
use App\cart;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Str;
class ProdactController extends Controller
{
   public function index()
   {
       $product_data = DB::table('products')->get();
        return view('product.index', compact('product_data'));
   }

    public function details(Request $request, $id)
    {
           $product_details = DB::table('products')->where('id', $id)->get();
           return view('product.detail', compact('product_details'));
    }

   public function addtocart(Request $request)
   {
     //dd($request->all());
    $session_id = Str::random(20);
    session::put('session_id', $session_id);
    cart::create([
        'product_id' => $request->product_id,
        'product_name' => $request->product_name,
        'price' => $request->price,
        'session_id' =>$session_id
    ]);
    //    return redirect()->back();
    return view('user_register');

}
public function add_list()
{
    $cart_data = DB::table('cart')->get();
    return view('product.cart-list', compact('cart_data'));
}

}
