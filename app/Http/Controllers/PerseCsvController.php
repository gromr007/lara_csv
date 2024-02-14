<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 *
 */
class PerseCsvController extends Controller
{

    /**
     *
     */
    public function index()
    {
        return view('upload')
            ->with('activePage', 'upload');
    }

    /**
     *
     */
    public function store()
    {

    }
}
