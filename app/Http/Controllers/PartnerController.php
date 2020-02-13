<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partners.index',[
            'partners' => Partner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
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

            'title' => 'bail|min:4|required|max:100',
            'delivery' => 'required',
            'slug' => 'required',

        ]);

        $partner = new Partner();

        $partner->title = $request->input('title');
        $partner->delivery = $request->input('delivery');
        $partner->slug = $request->input('slug');


        $partner->save();

        return redirect('partners');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('partners.edit',['partner'=> $partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $partner = Partner::findOrfail($id);

        $partner->title = $request->input('title');
        $partner->delivery = $request->input('delivery');
        $partner->slug = $request->input('slug');


        $partner->save();

        return redirect('partners');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $partner = Partner::find($id);

        $partner->delete();

        return redirect('partners');


    }
}
