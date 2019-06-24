<?php

namespace App\Http\Controllers;
use App\tugas;
use Illuminate\Http\Request;

class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas = tugas::latest()->paginate(5);
        return view('tugas.index', compact('tugas'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'telpon' => 'required',
            'alamat' => 'required'
          ]);
  
          tugas::create($request->all());
          return redirect()->route('tugas.index')
                          ->with('success', 'new biodata created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tugas = tugas::find($id);
        return view('tugas.detail', compact('tugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas = tugas::find($id);
        return view('tugas.edit', compact('tugas'));
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
        $request->validate([
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'telpon' => 'required',
            'alamat' => 'required'
          ]);
          $tugas = tugas::find($id);
          $tugas->nama = $request->get('nama');
          $tugas->ttl= $request->get('ttl');
          $tugas->jenis_kelamin = $request->get('jenis_kelamin');
          $tugas->agama = $request->get('agama');
          $tugas->status = $request->get('status');
          $tugas->telpon = $request->get('telpon');
          $tugas->alamat = $request->get('alamat');
          $tugas->save();
          return redirect()->route('tugas.index')
                          ->with('success', 'Biodata updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tugas = tugas::find($id);
        $tugas->delete();
        return redirect()->route('tugas.index')
                        ->with('success', 'Biodata deleted successfully');
    }
}
