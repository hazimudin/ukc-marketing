<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filter_hari){
            $filter_hari = $request->filter_hari;
            $users = User::orderBy('desa', 'ASC')->where('kelompok', $filter_hari )->get();
        }else{
            $users = User::orderBy('desa', 'ASC')->get();
        }

        $data = [
            'title' => 'test',
            'users' => $users,
        ];

        return view('list-user', $data);
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
        $foto_ktp = $request->file('foto_ktp')->store('ktp-nasabah');
        $foto_selfy = $request->file('foto_selfy')->store('selfy-nasabah');
        $foto_rumah = $request->file('foto_rumah')->store('rumah-nasabah');

        User::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'titipan'  => $request->titipan,
            'desa' => $request->desa,
            'koordinat' => $request->koordinat,
            'keterangan'  => $request->keterangan,
            'kelompok' => $request->kelompok,
            'foto_selfy' => $foto_selfy,
            'foto_ktp' => $foto_ktp,
            'foto_rumah' => $foto_rumah,
            'email' => $request->nama . '@test.test',
            'password' => '12345678',
        ]);

        return "berhasil di Kirim";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->first();

        
        $data = [
            'title' => 'test',
            'user' => $user,
        ];

        return view('detail-user', $data);
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
