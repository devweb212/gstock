<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sous_famille;
use App\Famille;


use PDF;
use Illuminate\Support\Facades\DB;
use Response;


class SousFamilleController extends Controller
{
	
	  public function __construct()
    {
       $this->middleware('auth');
    }
	

public function addsfamille(Request $request){
		
		$sous_famille = new Sous_famille();
		$sous_famille->sousfamille=$request->sousfamille;
		$sous_famille->id_famille=$request->id_famille;
		$sous_famille->save();
		return \Redirect::back();
		
}
	
	
   
    public function index()
    {
		$famille = Famille::orderBy('id', 'desc')->get();
		
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('addsfamille',['sous_famille'=>$sous_famille,'famille'=>$famille]);
    
	
	}
	
	
	   public function listeFamille()
    {
		$famille = Famille::orderBy('id', 'desc')->get();
		
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('listefamille',['sous_famille'=>$sous_famille,'famille'=>$famille]);
    
	
	}
	
	
	 public function sortieprint()
    {
		
	}
	
	
	
	
 public function printPDF($id)
    {
		
         // This  $data array will be passed to our PDF blade
			
         // $pdf = PDF::loadView('sortie_print',['data'=>$ajoutersortiesall,'data2'=>$ajoutersorties]);
		 // return $pdf->download('sortie.pdf');
    }
	
	
   
	   
}
