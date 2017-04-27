<?php

namespace App\Http\Controllers\Postmen;

use App\Adviser;
use App\City;
use App\Dokumenttyp;
use App\Godfather;
use App\Http\Requests\Postmen\PostmenRequest;
use App\Postmen;
use App\Postmenportfolio;
use App\Promoter;
use App\Zone;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postmens = Postmen::all();
        return view('postmen/index')
            ->with('postmens', $postmens);
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
        $zones = Zone::orderBy('name', 'ASC')->pluck('name','id');
        $advisers = Adviser::orderBy('first_name', 'ASC')->pluck('first_name','id');

        $promoters = Promoter::select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

        $godfathers = Godfather::select('id', DB::raw('CONCAT(code_godfather, " | ",first_name," ",last_name) as full_name'))
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

        return View('postmen/create')
            ->with('dokumenttyps', $dokumenttyps)
            ->with('cities',$cities)
            ->with('zones',$zones)
            ->with('promoters',$promoters)
            ->with('godfathers',$godfathers)
            ->with('advisers',$advisers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostmenRequest $request)
    {

        Postmen::create($request->all());
        return redirect(url('postmen'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $postmen = Postmen::find($id);

        $results = DB::table('postmenportfolios')
            ->join('godfathers', 'godfathers.id', '=', 'postmenportfolios.godfather_id')
            ->where('postmenportfolios.postmen_id', '=', $id)
            ->select('postmenportfolios.*', 'godfathers.code_godfather', 'godfathers.first_name', 'godfathers.last_name')
            ->get();

        return view('postmen.show')
            ->with('postmen',$postmen )
            ->with('results', $results);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postmen = Postmen::find($id);

        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');
        $cities = City::orderBy('name', 'ASC')->pluck('name','id');
        $zones = Zone::orderBy('name', 'ASC')->pluck('name','id');


        return view('postmen.edit')
            ->with('cities',$cities)
            ->with('zones',$zones)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('postmen', $postmen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostmenRequest $request, $id)
    {
        $postment = Postmen::find($id);
        $postment-> fill($request->all());
        $postment->save();

        return redirect()->route('postment.index');


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
