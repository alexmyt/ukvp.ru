<?php

namespace ukvp\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param int @id
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        return view('layouts.pages.news.'.$id);
    }
}
