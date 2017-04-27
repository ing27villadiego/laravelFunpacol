<?php

namespace App\Http\Controllers\Godfather;

use App\Adviser;
use App\City;
use App\Department;
use App\Dokumenttyp;
use App\Godchildren;
use App\Godfather;
use App\Http\Requests\Godchildren\GodchildrenRequest;
use App\Http\Requests\Godfather\GodfatherRequest;
use App\Paymentperiod;
use App\Paymenttype;
use App\Promoter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GodfatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $godfathers = Godfather::all();

        return View('godfather/index')
            ->with('godfathers', $godfathers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $advisers = Adviser::orderBy('first_name', 'ASC')->pluck('first_name','id');
        $promoters = Promoter::orderBy('first_name', 'ASC')->pluck('first_name','id');
        $cities = City::orderBy('name', 'ASC')->pluck('name','id');
        $dokumenttyps = Dokumenttyp::orderBy('name', 'ASC')->pluck('name','id');

        $departments = Department::orderBy('name', 'ASC')->pluck('name','id');
        $godchildrens = Godchildren::orderBy('first_name', 'ASC')->pluck('first_name','id');
        $paymentperiods = Paymentperiod::orderBy('name', 'ASC')->pluck('name','id');
        $paymenttypes = Paymenttype::orderBy('name', 'ASC')->pluck('name','id');



        return View('godfather/create')
            ->with('advisers', $advisers)
            ->with('promoters', $promoters)
            ->with('departments', $departments)
            ->with('cities', $cities)
            ->with('godchildrens', $godchildrens)
            ->with('paymenttypes', $paymenttypes)
            ->with('paymentperiods', $paymentperiods)
            ->with('dokumenttyps', $dokumenttyps);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GodfatherRequest $request)
    {
        Godfather::create($request->all());
        return redirect(url('godfather'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $godfather = Godfather::find($id);
        $promoters = Promoter::orderBy('first_name', 'DESC')->pluck('first_name', 'id');
        $advisers = Adviser::orderBy('first_name', 'DESC')->pluck('first_name', 'id');
        $dokumenttyps = Dokumenttyp::orderBy('name', 'DESC')->pluck('name','id');
        $departments = Department::orderBy('name', 'DESC')->pluck('name', 'id');
        $cities = City::orderBy('name', 'DESC')->pluck('name','id');
        $godchildrens = Godchildren::orderBy('first_name', 'DESC')->pluck('first_name','id');
        $paymenttypes = Paymenttype::orderBy('name', 'DESC')->pluck('name','id');
        $paymentperiods = Paymentperiod::orderBy('name', 'DESC')->pluck('name','id');

        return view('godfather/edit')
            ->with('promoters', $promoters)
            ->with('advisers', $advisers)
            ->with('dokumenttyps', $dokumenttyps)
            ->with('departments', $departments)
            ->with('cities', $cities)
            ->with('godchildrens', $godchildrens)
            ->with('paymenttypes', $paymenttypes)
            ->with('paymentperiods', $paymentperiods)
            ->with('godfather',$godfather);
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

        $godfather = Godfather::find($id);
        $godfather-> fill($request->all());
        $godfather->save();

        return redirect()->route('godfather.index');

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
