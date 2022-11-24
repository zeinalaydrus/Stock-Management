<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('pengeluarans')->get();
        return view('Pengeluaran.keluar', compact('data'));
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
        $validateData = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'tanggal_keluar' => 'required',
            'bukti' => 'required|file',
            'description' => 'required',
        ]);

        $keluar = new Pengeluaran();
        $keluar->product_id = $request->product_id;
        $keluar->quantity = $request->quantity;
        $keluar->tanggal_keluar = $request->tanggal_keluar;
        $keluar->description = $request->description;

        if($request->bukti){

            $img = $request->file('bukti');
            $filename = $img->getClientOriginalName();
            if ($request->hasFile('bukti')) {
                $request->file('bukti')->storeAs('/bukti',$filename);
            }
            $keluar->bukti = $request->file('bukti')->getClientOriginalName();

        }
        $keluar->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        //
    }
}
