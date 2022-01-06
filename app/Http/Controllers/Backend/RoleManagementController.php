<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Http\Controllers\Controller;

class RoleManagementController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Roles::class, 'role');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $this->authorize('viewAny',Roles::class);

      return view('dashboard.role_management.index',[
        'data' => Roles::all(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->authorize('create',Roles::class);

        return view('dashboard.role_management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->authorize('create',Roles::class);

      $validatedData = $request->validate([
        'role-name' => 'required',
        'is_active' => 'required',
        'rm-view' => '',
        'rm-create' => '',
        'rm-update' => '',
        'rm-delete' => '',
        'cm-view' => '',
        'cm-create' => '',
        'cm-update' => '',
        'cm-delete' => '',
        'um-view' => '',
        'um-create' => '',
        'um-update' => '',
        'um-delete' => '',
      ]);

      // dd($id);

      Roles::create($validatedData);

      return redirect('/dashboard/role')->with('success', 'Role has been Create');
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
      $this->authorize('update',Roles::class);

        return view('dashboard.role_management.edit',[
          'data'=>Roles::firstWhere('id',$id),
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
      $this->authorize('update',Roles::class);

      $validatedData = $request->validate([
        'role-name' => 'required',
        'is_active' => 'required',
        'rm-view' => '',
        'rm-create' => '',
        'rm-update' => '',
        'rm-delete' => '',
        'cm-view' => '',
        'cm-create' => '',
        'cm-update' => '',
        'cm-delete' => '',
        'um-view' => '',
        'um-create' => '',
        'um-update' => '',
        'um-delete' => '',
      ]);


      Roles::where('id', $id)
              ->update($validatedData);

      return redirect('/dashboard/role')->with('success', 'Role has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->authorize('delete',Roles::class);

      Roles::destroy($id);

      return redirect('/dashboard/role')->with('success', 'Quote has been deleted');
    }
}
