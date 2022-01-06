<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{

  // public function __construct()
  // {
  //     $this->authorizeResource(User::class,'user');
  // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('viewAny',User::class);

        return view('dashboard.user_management.index',[
            'users' => User::all(),
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
        return view('dashboard.user_management.create',
      [
        'data' => Roles::all(),
      ]);
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
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_active' => '',
            'role_id' => '',
            'img' => '',
        ]);

        $validatedData['img'] = "https://ui-avatars.com/api/?name=".urlencode($request->username)."&color=random&background=random";

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        User::create($validatedData);

        return redirect('/dashboard/user-management')->with('success', 'New User has been added');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // $this->authorize('update', User::class);
      // dd(RoleAuthoration('um-delete'));

        return view('dashboard.user_management.edit',[
            'data' => User::firstWhere('id',$id),
            'role' => Roles::all()
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
        //
        $validatedData = $request->validate([
          'username' => 'required',
          'email' => 'required',
          'password' => 'required',
          'is_active' => '',
          'role_id' => '',
          'img' => '',
      ]);

      $validatedData['img'] = "https://ui-avatars.com/api/?name=".urlencode($request->username)."&color=random&background=random";

      $validatedData['password'] = Hash::make($validatedData['password']);

      // dd($validatedData);

      User::where('id', $id)
      ->update($validatedData);

      return redirect('/dashboard/user-management')->with('success', 'New User has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd($id);
        User::destroy($id);

        return redirect('/dashboard/user-management')->with('success', 'User has been deleted');
    }
}
