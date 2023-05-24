<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\DB;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //arahkan ke view
        $ulasan = Ulasan::join('pengunjung', 'ulasan.pengunjung_id_pengunjung', '=', 'pengunjung.id_pengunjung')
        ->join('tmpt_wisata', 'ulasan.tmpt_wisata_id', '=', 'tmpt_wisata.id')
        ->select('ulasan.*', 'pengunjung.nama_pengunjung as pengunjung', 'tmpt_wisata.nama_tmpt_wisata as tmpt_wisata')
        ->get();
        return view ('admin.ulasan.index', compact('ulasan'));
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
    public function store(Request $request)
    {
        //
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