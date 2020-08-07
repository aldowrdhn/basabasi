<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Recentorder;
use Illuminate\Http\Request;

class RecentorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recents = Recentorder::all();
        return view('admin.dashboard.transaction.index',compact('recents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recentorder  $recentorder
     * @return \Illuminate\Http\Response
     */
    public function show(Recentorder $recentorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recentorder  $recentorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Recentorder $recentorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recentorder  $recentorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recentorder $recentorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recentorder  $recentorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recentorder $recentorder)
    {
        //
    }
}
