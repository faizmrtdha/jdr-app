<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slideshow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class slideshowController extends Controller
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




    public function uploadImage($params, $request){
      $name = $params['name'];
      $category = $params['category'];
      $folder = $params['folder'];

      if($request->file($name)){
        $originalName = $request->file($params['name'])->getClientOriginalName();
        $imageName = time().'-'.$originalName;
        $path = 'storage/'.$category.'/'.$folder.'/'.$imageName;
        // dd($path);
        $request->img->move(public_path('storage/'.'/'.$category.'/'.$folder), $imageName);
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
      $this->authorize('create',Slideshow::class);

      return view('dashboard.conten_management.Home.slideshow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->authorize('create',Slideshow::class);

        $validatedData = $request->validate([
          'title' => 'required|max:255',
          'desc' => 'required',
          'img' => 'required',
      ]);



      $validatedData['img'] = $this->uploadImage([
        'name' => 'img',
        'folder' => 'slideshow',
        'category' => 'images',
      ],$request);

      Slideshow::create($validatedData);

      return redirect('/dashboard/home')->with('success', 'New Profile has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function show(Slideshow $slideshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Slideshow $slideshow)
    {
        $this->authorize('update',Slideshow::class);

        return view('dashboard.conten_management.Home.slideshow.edit',[
          'data' => $slideshow,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slideshow $slideshow)
    {
      $this->authorize('update',Slideshow::class);

      $validatedData = $request->validate([
        'title' => 'required|max:255',
        'desc' => 'required',
        'img' => '',
        // 'oldImg' => '',
      ]);


      if($request->hasFile('img')){
        if(\File::exists($request->oldImg)) {
          \File::delete($request->oldImg);
        }
        $validatedData['img'] = $this->uploadImage([
          'name' => 'img',
          'folder' => 'slideshow',
          'category' => 'images',
        ],$request);
      } else{
        $validatedData['img'] = $request->oldImg;
      }

        // if($request->hasFile('img')){
        //   $validatedData['img'] = $request->file('img')->store('slideshow');
        // } else {
        //   $validatedData['img'] = $request->oldImg;
        // }

        Slideshow::where('id', $slideshow->id)
                ->update($validatedData);

        return redirect('/dashboard/home')->with('success', 'Slideshow has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slideshow $slideshow)
    {
      $this->authorize('delete',Slideshow::class);

      if(\File::exists($slideshow->img)) {
        \File::delete($slideshow->img);
      }

      Slideshow::destroy($slideshow->id);

      return redirect('/dashboard/home')->with('success', 'Slideshow has been deleted');
    }
}
