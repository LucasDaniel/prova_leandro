<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookStore = BookStore::all();
        return $bookStore;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookStore = BookStore::create($request->all());
        return $bookStore;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookStore  $bookStore
     * @return \Illuminate\Http\Response
     */
    public function show(BookStore $bookStore)
    {
        return $bookStore;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookStore  $bookStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookStore $bookStore)
    {
        $bookStore->update($request->all());
        return $bookStore;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookStore  $bookStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookStore $bookStore)
    {
        //
    }
}
