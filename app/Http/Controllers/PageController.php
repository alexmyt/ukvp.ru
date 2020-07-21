<?php

namespace ukvp\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $page
     * @return \Illuminate\Http\Response
     */
    public function show($page = 'index')
    {
        return view('layouts.pages.'.$page);
    }
   
}
