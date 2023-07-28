<?php

namespace App\Http\Controllers;

use App\Http\Requests\tellyRequest;
use App\Models\telly;
use Illuminate\Http\Request;

class TellyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(tellyRequest $request)
    {

        $status = telly::create([
            'link' => $request['link'],
            'name' => $request['name'],
        ]);
        if ($status) {
            return redirect()->back()->with('status', $status->slug);
        }
        return redirect()->back()->with('status', $status);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $url = telly::where('slug', $slug)->firstOrFail();
        return redirect($url->link);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(telly $telly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, telly $telly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(telly $telly)
    {
        //
    }
}
