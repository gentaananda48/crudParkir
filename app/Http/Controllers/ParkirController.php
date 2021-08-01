<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkir;
use Illuminate\Support\Facades\DB;

class ParkirController extends Controller
{

    public function index()
    {
        $parkir = Parkir::all();
    	return view('index', compact('parkir'));
    }


    public function create()
    {
        $data = new Parkir;
        return view('formInput', compact('data'));
    }


    public function store(Request $request)
    {

        $data = new Parkir;
        $data->plat_no = $request->plat_no;
        $data->j_kend = $request->j_kend;
        $data->biaya = $request->biaya;

        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('assets/images/parking', $nama_file);
            $data->image = $nama_file;
        }
        $data->save();

        return redirect('parkir')->with('success', "Data berhasil disimpan");
    }


    public function show(Parkir $parkir)
    {
        return view('detail', compact('parkir'));
    }


    public function edit(Parkir $parkir)
    {
        return view('edit', compact('parkir'));
    }


    public function update(Request $request, Parkir $parkir)
    {

        $parkir->update($request->all());

        return redirect()->route('parkir.index')->with('success', 'Data berhasil terupdate!');
    }


    public function destroy(Parkir $parkir)
    {
        $parkir->delete();
        return redirect()->route('parkir.index');
    }

   

    public function search(Request $request)
    {
        $search = $request->get('search');
        $parkir = Parkir::where('plat_no', 'like', "%".$search."%")->paginate(5);
        return view('index', compact('parkir'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

   

   
}
