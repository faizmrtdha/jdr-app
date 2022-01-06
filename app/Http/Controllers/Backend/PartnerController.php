<?php

namespace App\Http\Controllers\Backend;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->authorize('create', Partner::class);

      return view('dashboard.conten_management.Home.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->authorize('create', Partner::class);

      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'img' => 'required',
      ]);

      $validatedData['img'] = $this->uploadImage([
        'name' => 'img',
        'folder' => 'partner',
        'category' => 'images',
      ], $request);

      Partner::create($validatedData);

      return redirect('dashboard/home#partner')->with('success', 'New Partner Profile has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
      $this->authorize('update', Partner::class);

      return view('dashboard.conten_management.Home.partner.edit', [
        'partner' => Partner::firstWhere('id', $id),
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->authorize('update', Partner::class);

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
          'folder' => 'partner',
          'category' => 'images',
        ], $request);
      } else {
        $validatedData['img'] = $request->oldImg;
      }


      Partner::where('id', $id)->update($validatedData);

      return redirect('/dashboard/home#partner')->with('success', 'Partner Profile has beed updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
      $this->authorize('delete', Partner::class);

      // dd($partner);
      if (\File::exists($partner->img)) {
        \File::delete($partner->img);
      }

      Partner::destroy($partner->id);

      return redirect('dashboard/home#partner')->with('success', 'Partner Profile has been deleted');
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
}
