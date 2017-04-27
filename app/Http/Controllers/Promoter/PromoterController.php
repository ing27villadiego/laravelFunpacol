<?php

namespace App\Http\Controllers\Promoter;


use App\City;
use App\Dokumenttyp;
use App\Http\Requests\Promoter\PromoterRequest;
use App\Promoter;
use App\Zone;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PromoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promoters = Promoter::all();
        return view('promoter/index')
            ->with('promoters', $promoters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promoters = Promoter::all();
        $dokumenttyps = Dokumenttyp::orderBy('name', 'ASC')->pluck('name','id');
        $cities = City::orderBy('name', 'ASC')->pluck('name','id');

        return View('promoter/create')
            ->with('dokumenttyps', $dokumenttyps)
            ->with('cities', $cities)
            ->with('promoters', $promoters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromoterRequest $request)
    {
        Promoter::create($request->all());
        return redirect(url('promoter'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promoter = Promoter::find($id);

        $advisers = DB::table('advisers')->where('promoter_id', '=', $id)->get();



        return view('promoter.show')
            ->with('promoter', $promoter)
            ->with('advisers', $advisers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promoter = Promoter::find($id);

        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');
        $cities = City::orderBy('name', 'DESC')->pluck('name','id');
        $zones = Zone::orderBy('name', 'DESC')->pluck('name','id');

        return view('promoter.edit')
            ->with('cities', $cities)
            ->with('zones', $zones)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('promoter',$promoter);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromoterRequest $request, $id)
    {
        $promoter = Promoter::find($id);
        $promoter-> fill($request->all());
        $promoter->save();

        return redirect()->route('promoter.index');
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
