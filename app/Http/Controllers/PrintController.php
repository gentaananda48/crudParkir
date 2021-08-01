<?php
  
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use PDF;
  use App\Models\Parkir;
  
class PrintController extends Controller
{
    public function index($id)
    {
    
        $parkir = Parkir::where('id', $id)->get();
        $pdf = PDF::loadView('cetak', compact('parkir'));
        return $pdf->stream();
    
    }
}