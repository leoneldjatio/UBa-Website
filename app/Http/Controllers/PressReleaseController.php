<?php

namespace App\Http\Controllers;

use App\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('press.index')->withPressReleases(PressRelease::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'file' => 'required|file|max:2000',
        ]);

        PressRelease::create($data);
        session()->flash('success', 'Your press release has been created successfully');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function show(PressRelease $pressRelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function edit(PressRelease $pressRelease)
    {
        return view('press.edit', compact($pressRelease));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PressRelease $pressRelease)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'file' => 'nullable|file|max:2000',
        ]);
        if ($request->hasFile('file')) {
            Storage::delete($pressRelease->file);
            $data['file'] = $request->file('file')->move('press');
        }

        $pressRelease->update($data);

        session()->flash('success', 'Press release has been updated successfully');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(PressRelease $pressRelease)
    {
        Storage::delete($pressRelease->file);
        $pressRelease->delete();

        session()->flash('success', 'Press release has deleted updated successfully');
        return redirect()->route('home');
    }
}