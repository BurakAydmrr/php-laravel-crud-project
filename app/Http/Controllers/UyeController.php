<?php

namespace App\Http\Controllers;

use App\Models\Uye;
use Illuminate\Http\Request;

class UyeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $list = Uye::all();
        return view('Uye', compact('list'));

        return view('Uye');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Uye_Ekle');

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
            'ad' => 'required',
            'soyad' => 'required',
            'email' => 'required',
        ]);


        $uye = Uye::create($request->post());

        if($uye){
            return redirect()->route('uye.index')->with('success', 'Üye başariyla eklendi.');
        }else{
            return redirect()->route('uye.index')->with('error', 'Üye eklenemedi.');

        }
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
        $edit = Uye::find($id);
        return view('Uye_Edit', compact('edit'));
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
        $uye = Uye::find($id);
    $uye->ad = $request->get('ad');
        $uye->soyad = $request->get('soyad');;
        $uye->email = $request->get('email');;
        $uye->save();
        return redirect()->route('uye.index')->with('success', 'Üye başariyla güncellendi.');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete = Uye::find($id);
        $delete->delete();
        return redirect()->route('uye.index')->with('success', 'Üye başariyla silindi.');
    }
}
