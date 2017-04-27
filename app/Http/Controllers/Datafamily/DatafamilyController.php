<?php

namespace App\Http\Controllers\Datafamily;

use App\City;
use App\Datafamily;
use App\Dokumenttyp;
use App\Http\Requests\Datafamily\DatafamilyRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatafamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafamiliries = Datafamily::all();

        return view('datafamily/index', compact('datafamiliries'));
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

        return View('datafamily/create')
            ->with('dokumenttyps',$dokumenttyps)
            ->with('cities', $cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatafamilyRequest $request)
    {
        Datafamily::create($request->all());
        return redirect(url('datafamily'));
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
        $datafamily = Datafamily::find($id);

        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');

        $cities = City::orderBy('name', 'DESC')->pluck('name','id');


        return view('datafamily.edit')
            ->with('cities', $cities)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('datafamily',$datafamily);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DatafamilyRequest $request, $id)
    {
        $datafamily = Datafamily::find($id);
        $datafamily->  fill($request->all());

        $datafamily->save();

        return redirect()->route('datafamily.index');
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
