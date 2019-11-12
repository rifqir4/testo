<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lapor;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ktp' => 'image|nullable|max:1999',
            'foto1' => 'image|nullable|max:1999',
            'foto2' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('ktp')){
            // Get filename with the extension
            $filenameWithExt = $request->file('ktp')->getClientOriginalName();
            // get just filename
            $filename = 'ktp';
            // Get just ext
            $extension = $request->file('ktp')->getClientOriginalExtension();
            // Filename to store
            $ktpNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('ktp')->storeAs('public/lapor/ktp',$ktpNameToStore);
        } else {
            $ktpNameToStore = 'noimage.jpg';
        }

        if($request->hasFile('foto1')){
            // Get filename with the extension
            $filenameWithExt = $request->file('foto1')->getClientOriginalName();
            // get just filename
            $filename = 'foto1';
            // Get just ext
            $extension = $request->file('foto1')->getClientOriginalExtension();
            // Filename to store
            $foto1NameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto1')->storeAs('public/lapor/foto',$foto1NameToStore);
        } else {
            $foto1NameToStore = 'noimage.jpg';
        }

        if($request->hasFile('foto2')){
            // Get filename with the extension
            $filenameWithExt = $request->file('foto2')->getClientOriginalName();
            // get just filename
            $filename = 'foto2';
            // Get just ext
            $extension = $request->file('foto2')->getClientOriginalExtension();
            // Filename to store
            $foto2NameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto2')->storeAs('public/lapor/foto',$foto2NameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Lapor
        $post = new Lapor;
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
        $post->ktp = $ktpNameToStore;
        $post->pesan= $request->input('pesan');
        $post->subjek= $request->input('subjek');
        $post->foto1 = $foto1NameToStore;
        $post->foto2 = $foto2NameToStore;
        $post->save();

        return redirect('/laporki');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
