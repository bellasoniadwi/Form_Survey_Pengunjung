<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('survey', ['title' => 'Survey']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('survey');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'instansi' => 'required',
            'no_hp' => 'required|min:11|max:13',
            'saran' => 'required'
        ]);

        $survey = new Survey();
        $survey->nama = $request->get('nama');
        $survey->instansi = $request->get('instansi');
        $survey->no_hp = $request->get('no_hp');
        $survey->saran = $request->get('saran');
        $survey->save();
        
        Alert::success('Masukan anda berhasil direkam');
        return redirect()->route('survey.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
