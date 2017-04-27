<?php

namespace App\Http\Controllers\Godchildren;

use App\City;
use App\Datafamily;
use App\Dokumenttyp;
use App\Godchildren;
use App\Godfather;
use App\Http\Requests\Godchildren\GodchildrenRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GodchildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $godchildrens = Godchildren::all();

        return View('godchildren/index')
            ->with('godchildrens', $godchildrens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokumenttyps = Dokumenttyp::orderBy('name', 'ASC')->pluck('name','id');

        $cities = City::orderBy('name', 'ASC')->pluck('name','id');
        $datafamilies = Datafamily::orderBy('first_name', 'DESC')->pluck('first_name', 'id');

        return View('godchildren/create')
            ->with('dokumenttyps',$dokumenttyps)
            ->with('datafamilies',$datafamilies)
            ->with('cities', $cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GodchildrenRequest $request)
    {
        Godchildren::create($request->all());
        return redirect(url('godchildren'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $godchildren = Godchildren::find($id);

        $godfathers = DB::table('godfathers')->where('godchildren_id', '=', $id)->get();



        return view('godchildren.show')
            ->with('godchildren', $godchildren)
            ->with('godfathers', $godfathers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $godchildren = Godchildren::find($id);

        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');

        $cities = City::orderBy('name', 'DESC')->pluck('name','id');
        $datafamilies = Datafamily::orderBy('first_name', 'DESC')->pluck('first_name', 'id');

        return view('godchildren.edit')
            ->with('cities', $cities)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('datafamilies', $datafamilies)
            ->with('godchildren',$godchildren);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GodchildrenRequest $request, $id)
    {
        $godchildren = Godchildren::find($id);
        $godchildren->  fill($request->all());

        $godchildren->save();

        return redirect()->route('godchildren.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
