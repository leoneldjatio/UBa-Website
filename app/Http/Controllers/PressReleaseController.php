<?php

namespace App\Http\Controllers;

use App\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PressReleaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        if($request->file('file')) {
            $file = $request->file('file');
            $originalname = $file->getClientOriginalName();
            $path = $file->move('documents', $originalname);


            $docs = new PressRelease();
            $docs->title = $request->input('title');
            $docs->file = $path;
            $docs->save();
        }
        session()->flash('success', 'Your press release has been created successfully');
        return redirect('/press');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function show(PressRelease $pressRelease)
    {
        
        //return view("home")->with('newReleases', $newRelease);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function edit(int $pressId)
    {
        $pressRelease = PressRelease::findOrFail($pressId);
        return view('press.edit')->withPress($pressRelease);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title' => 'required|string',
            'file' => 'required|file|max:2000',
        ]);
        if($request->file('file')) {
            $file = $request->file('file');
            $originalname = $file->getClientOriginalName();
            $path = $file->move('documents', $originalname);


            $docs = PressRelease::find($id);
            $docs->title = $request->input('title');
            $docs->file = $path;
            $docs->save();
        }


        session()->flash('success', 'Press release has been updated successfully');
        return redirect('/press');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $pressId)
    {
        $pressRelease = PressRelease::findOrFail($pressId);
        Storage::delete($pressRelease->file);
        $pressRelease->delete();

        session()->flash('success', 'Press release has deleted updated successfully');
        return redirect()->route('press.index');
    }
}