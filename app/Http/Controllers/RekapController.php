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
        $validateData = $request->validate([
            'judul' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
        ]);

        if ($request->file('dokumen')) {
            $validateData['dokumen'] = $request->file('dokumen')->store('post-dokumen');
        }

        Rekap::create($validateData);


        return redirect()->back();
    }

    public function destroy($id)
    {
        $rekap = Rekap::find($id);
        $rekap->delete();

        return redirect()->back();
    }
}
