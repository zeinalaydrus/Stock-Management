<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        $data   = Rekap::all();
        return view('rekap', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('dokumen')) {
            $destination = 'public/dokumen';
            $dokumen = $request->file('dokumen');
            $dokumen_name = $dokumen->getClientOriginalName();
            $path = $request->file('dokumen')->storeAs($destination, $dokumen_name);

            $input['dokumen'] = $dokumen_name;
        }
        Rekap::create($input);


        return redirect()->back();
    }

    public function destroy($id)
    {
        $rekap = Rekap::find($id);
        $rekap->delete();

        return redirect()->back();
    }
}
