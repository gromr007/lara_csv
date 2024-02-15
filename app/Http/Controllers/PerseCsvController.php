<?php

namespace App\Http\Controllers;

use App\Contracts\ParseCsv;

/**
 *
 */
class PerseCsvController extends Controller
{

    /**
     * Show the form for editing
     */
    public function edit()
    {
        return view('upload')->with('activePage', 'upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParseCsv $parser)
    {
        $parser->parseInBase();
        return redirect()->back();
    }
}
