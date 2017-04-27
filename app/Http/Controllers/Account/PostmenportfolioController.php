<?php

namespace App\Http\Controllers\Account;

use App\Godfather;
use App\Http\Requests\Account\Postmenportfolio\PostmenportfolioRequest;
use App\Postmen;
use App\Postmenportfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostmenportfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postmenPortfolios = Postmenportfolio::all();

        return view('account/postmen_portfolio/index')
            ->with('postmenPortfolios', $postmenPortfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $godfathers = Godfather::select('id', DB::raw('CONCAT(code_godfather, " | ",first_name," ",last_name) as full_name'))
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

        $postmens = Postmen::select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

        return view('account/postmen_portfolio/create')
            ->with('postmens', $postmens)
            ->with('godfathers', $godfathers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostmenportfolioRequest $request)
    {
        Postmenportfolio::create($request->all());
        return redirect(url('postmenPortfolio'));
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
        $postmenportfolio = Postmenportfolio::find($id);

        $godfathers = Godfather::select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

        $postmens = Postmen::select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

        return view('account/postmen_portfolio/edit')
            ->with('postmens', $postmens)
            ->with('godfathers', $godfathers)
            ->with('postmenportfolio', $postmenportfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostmenportfolioRequest $request, $id)
    {
        $postmenportfolio = Postmenportfolio::find($id);
        $postmenportfolio->  fill($request->all());

        $postmenportfolio->save();

        return redirect(url('postmenPortfolio'));
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
