<?php

namespace App\Http\Controllers;

use App\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faqs.index')->withFaqs(Faqs::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
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
            "question" => "required|string",
            "response" => "required|string"
        ]);

        Faqs::create($data);
        session()->flash('success', 'New question created');
        return redirect()->route('admin.faqs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faqs)
    {
        return view('faqs.show')->withFaqs($faqs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $faqs = Faqs::findOrFail($id);
        return view('faqs.edit')->withFaqs($faqs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $faqs = Faqs::findOrFail($id);

        $data = $request->validate([
            "question" => "required|string",
            "response" => "required|string"
        ]);

        $faqs->update($data);
        session()->flash('success', 'Question has been updated');
        return redirect()->route('admin.faqs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $faqs = Faqs::findOrFail($id);
        $faqs->delete();
        session()->flash('success', 'This question has been removed from the faqs list');
        return redirect()->route('admin.faqs');
    }
}