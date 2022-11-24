<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('pemasukans')->get();
        return view('Pemasukan.masuk', compact('data'));
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
            'tanggal_masuk' => 'required',
            'bukti' => 'required|file',
            'description' => 'required',
        ]);

        $masuk = new Pemasukan();
        $masuk->product_id = $request->product_id;
        $masuk->quantity = $request->quantity;
        $masuk->tanggal_masuk = $request->tanggal_masuk;
        $masuk->description = $request->description;

        if ($request->bukti) {

            $img = $request->file('bukti');
            $filename = $img->getClientOriginalName();
            if ($request->hasFile('bukti')) {
                $request->file('bukti')->storeAs('/bukti', $filename);
            }
            $masuk->bukti = $request->file('bukti')->getClientOriginalName();
        }
        $masuk->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemasukan $pemasukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemasukan $pemasukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemasukan $pemasukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemasukan $pemasukan)
    {
        //
    }
}
