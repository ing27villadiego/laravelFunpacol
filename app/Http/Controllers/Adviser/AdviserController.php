<?php

namespace App\Http\Controllers\Adviser;

use App\Adviser;
use App\City;
use App\Dokumenttyp;
use App\Godfather;
use App\Http\Requests\Adviser\AdviserRequest;
use App\Promoter;
use App\Zone;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdviserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $advisers = Adviser::all();

        return View('adviser/index')
            ->with('advisers', $advisers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advisers = Adviser::all();
        $promoters = Promoter::orderBy('first_name', 'ASC')->pluck('first_name','id');
        $cities = City::orderBy('name', 'ASC')->pluck('name','id');
        $dokumenttyps = Dokumenttyp::orderBy('name', 'ASC')->pluck('name','id');


        return View('adviser.create')
            ->with('advisers', $advisers)
            ->with('promoters',$promoters)
            ->with('cities',$cities)
            ->with('dokumenttyps', $dokumenttyps);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdviserRequest $request)
    {
        Adviser::create($request->all());
        return redirect(url('adviser'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $godfathers = DB::table('godfathers')->where('adviser_id', '=', $id)->get();

        return view('adviser.show')
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
        $adviser = Adviser::find($id);

        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');
        $cities = City::orderBy('name', 'ASC')->pluck('name','id');
        $zones = Zone::orderBy('name', 'ASC')->pluck('name','id');

        $promoters = Promoter::orderBy('first_name', 'DESC')->pluck('first_name','id');

        return view('adviser.edit')
            ->with('promoters', $promoters)
            ->with('cities',$cities)
            ->with('zones',$zones)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('adviser',$adviser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdviserRequest $request, $id)
    {
        $adviser = Adviser::find($id);
        $adviser-> fill($request->all());
        $adviser->save();

        return redirect()->route('adviser.index');
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
