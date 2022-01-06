<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Quotes;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
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
        //
        $this->authorize('create',Quotes::class);

        return view('dashboard.conten_management.Home.quote.create');
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
        $this->authorize('create',Quotes::class);

        $validatedData = $request->validate([
          'name' => 'required|max:255',
          'position' => 'required',
          'quote' => 'required',
        ]);

        Quotes::create($validatedData);

        return redirect('/dashboard/home')->with('success', 'New Quote has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(Quotes $quotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotes $quotes, $id)
    {
      $this->authorize('update',Quotes::class);

        // ddd(Quotes::firstWhere('id',$id));
        return view('dashboard.conten_management.Home.quote.edit',[
          'data' => Quotes::firstWhere('id',$id),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->authorize('update',Quotes::class);

        $validatedData = $request->validate([
          'name' => 'required|max:255',
          'position' => 'required',
          'quote' => 'required',
        ]);

        Quotes::where('id', $id)
                ->update($validatedData);

        return redirect('/dashboard/home')->with('success', 'Quote has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->authorize('delete',Quotes::class);
        //
        // ddd($quotes->id);
        Quotes::destroy($id);

        return redirect('/dashboard/home')->with('success', 'Quote has been deleted');
    }
}
