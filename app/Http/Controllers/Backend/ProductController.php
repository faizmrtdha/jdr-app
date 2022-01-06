<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }


  public function uploadImage($params, $request)
  {
    $name = $params['name'];
    $category = $params['category'];
    $folder = $params['folder'];

    if ($request->file($name)) {
      $originalName = $request->file($params['name'])->getClientOriginalName();
      $imageName = time() . '-' . $originalName;
      $path = 'storage/' . $category . '/' . $folder . '/' . $imageName;
      // dd($path);
      $request->img->move(public_path('storage/' . '/' . $category . '/' . $folder), $imageName);
      return $path;
    }
  }



  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $this->authorize('create', Product::class);

    return view('dashboard.conten_management.Home.product.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->authorize('create', Product::class);

    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'category' => 'required',
      'desc' => '',
      'img' => 'required',
    ]);

    // if($request->file('img')){
    //   $validatedData['img'] = $request->file('img')->store('product');
    // }

    $validatedData['img'] = $this->uploadImage([
      'name' => 'img',
      'folder' => 'product',
      'category' => 'images',
    ], $request);

    Product::create($validatedData);

    return redirect('/dashboard/home#product')->with('success', 'New Product has been added');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {
    $this->authorize('update', Product::class);

    return view('dashboard.conten_management.Home.product.edit', [
      'product' => $product,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    $this->authorize('update', Product::class);

    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'category' => 'required',
      'desc' => '',
      'img' => '',
    ]);

    if ($request->hasFile('img')) {
      if (\File::exists($request->oldImg)) {
        \File::delete($request->oldImg);
      }

      $validatedData['img'] = $this->uploadImage([
        'name' => 'img',
        'folder' => 'product',
        'category' => 'images',
      ], $request);
    } else {
      $validatedData['img'] = $request->oldImg;
    }

    Product::where('id', $product->id)
      ->update($validatedData);

    return redirect('/dashboard/home#product')->with('success', 'Product has been updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    $this->authorize('delete', Product::class);

    if (\File::exists($product->img)) {
      \File::delete($product->img);
    }

    Product::destroy($product->id);

    return redirect('/dashboard/home#product')->with('success', 'Product has been deleted');
  }
}
