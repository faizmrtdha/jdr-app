<?php

namespace App\Http\Controllers\Backend;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\TemporaryFile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = DB::table('profiles')->select('category')->distinct()->get();
        // $data = DB::table('Profiles')->get();

        // print_r($data[0]->category);
        // var_dump($data);

        return view('dashboard.conten_management.profile.index',
        [
            'category' => $category,
            'data' => Profile::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.conten_management.profile.create');
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
        // ddd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:profiles',
            'category' => 'required',
            'content' => '',
            'img' => '',
        ]);

        // $checkImg = DB::table('temporary_files')->select('path')->orderByDesc('id')->limit(1)->get();
        // dd($checkImg);
        // if($checkImg) {
        //     // dd($checkImg[0]->path);
        //     // print_r($checkImg[0]);
        //     $validatedData['img'] = $checkImg[0]->path;
        // } else {
        //     $validatedData['img'] = '';
        // }
        // $validatedData['img'] =

        // if($request->hasFile('img')){
        //     $validatedData['img'] = $request->file('img')->store('img/profile');
        // }
        Profile::create($validatedData);

        return redirect('/dashboard/profile')->with('success', 'New Profile has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        return view('dashboard.conten_management.profile.edit',[
            'profile' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:profiles',
            'category' => 'required',
            'content' => '',
            'img' => '',
        ]);
        Profile::where('id', $profile->id)
                ->update($validatedData);

        return redirect('/dashboard/profile')->with('success', 'Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //

        Profile::destroy($profile->id);

        return redirect('/dashboard/profile')->with('success', 'Profile has been deleted');
    }
}
