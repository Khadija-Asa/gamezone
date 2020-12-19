<?php

namespace App\Http\Controllers;

use App\Product;
use App\CartItem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::paginate(9);
      return view('Product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'name'=>'required',
          'description'=>'required',
          'price'=>'required',
          'image'=>'required'
      ]);

      $image_url = $request->file('image')->store('public/products');
      $image_url = substr($image_url, 7);

      $product = new Product([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
          'image_url' => $image_url
      ]);
      $product->save();

      return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::all()->find($id);
        return view('Product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->fill([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
        ]);
        if ($request->hasFile('image')) {
          $image_url = $request->file('image')->store('public/products');
          $image_url = substr($image_url, 7);
          $product->fill([
            'image_url' => $image_url
          ]);
        }
        $product->save();
        return redirect()->route('Product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartItem = CartItem::where('product_id', $id)->delete(); // On supprime d'abord l'article de tous les paniers
        $product = Product::find($id); //Puis on supprime le produit
        $product->delete();
  
        return redirect()->route('Product.index');
    }
}
