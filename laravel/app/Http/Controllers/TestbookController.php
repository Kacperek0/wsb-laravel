<?php

namespace App\Http\Controllers;

use App\Models\testbook;
use Illuminate\Http\Request;

class TestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = testbook::select('*')
            ->get();
        return view('books', ['data' => $data]);
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
     * @param  \App\Models\testbook  $testbook
     * @return \Illuminate\Http\Response
     */
    public function show(testbook $testbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testbook  $testbook
     * @return \Illuminate\Http\Response
     */
    public function edit(testbook $testbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testbook  $testbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testbook $testbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testbook  $testbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(testbook $testbook)
    {
        //
    }
}
