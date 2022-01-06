<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
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
      $imageNew = time() . '-' . $originalName;
      $path = 'storage/' . $category . '/' . $folder . '/' . $imageNew;
      $request->img->move(public_path('storage/' . '/' . $category . '/' . $folder), $imageNew);
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
    //
    $this->authorize('create', Client::class);

    return view('dashboard.conten_management.Home.client.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    $this->authorize('create', Client::class);

    $validatedData = $request->validate([
      'name' => 'required|max:255',
      'img' => 'required',
    ]);

    $validatedData['img'] = $this->uploadImage([
      'name' => 'img',
      'folder' => 'client',
      'category' => 'images',
    ], $request);

    Client::create($validatedData);

    return redirect('dashboard/home')->with('success', 'New Client Profile has been added');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Client $client)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $this->authorize('update', Client::class);

    return view('dashboard.conten_management.Home.client.edit', [
      'client' => Client::firstWhere('id', $id),
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Client $client)
  {
    //
    $this->authorize('update', Client::class);

    $validatedData = $request->validate([
      'name' => 'required|max:255',
      'img' => '',
    ]);

    if ($request->hasFile('img')) {
      if (\File::exists($request->oldImg)) {
        \File::delete($request->oldImg);
      }
      $validatedData['img'] = $this->uploadImage([
        'name' => 'img',
        'folder' => 'client',
        'category' => 'images',
      ], $request);
    } else {
      $validatedData['img'] = $request->oldImg;
    }


    Client::where('id', $client->id)->update($validatedData);

    return redirect('/dashboard/home#client')->with('success', 'Client Profile has beed updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Responseg
   */
  public function destroy(Client $client)
  {
    //
    $this->authorize('delete', Client::class);

    if (\File::exists($client->img)) {
      \File::delete($client->img);
    }

    Client::destroy($client->id);

    return redirect('dashboard/home#client')->with('success', 'Client Profile has been deleted');
  }
}
