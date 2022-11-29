<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\destinasi;

class AdminDestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['destinasi'] = Destinasi::all();
        return view('destinasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destinasi = new destinasi;
        $destinasi->fill($request->all());
        $destinasi->save();
        return redirect('admin/destinasi');
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
        $data['destinasi']= Destinasi::find($id);
        return view('destinasi.edit',$data);
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
        $this->validate($request,[
        'nama'=>'required',
        'slug'=>'required',
        'gambar'=>'required',
        'diskrisi'=>'required'
        ]);

        $destinasi = Destinasi::findOrFail($id);

        $destinasi->update([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'gambar' => $request->gambar,
            'diskripsi' => $request->diskripsi
        ]);

        if ($destinasi) {
            return redirect()
                ->route('destinasi.index')
                ->with([
                    'success' => 'Data destinasi berhasil di-update!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data destinasi gagal di-update.'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinasi=Destinasi::find($id)->delete();
        return redirect('destinasi');
    }
}
