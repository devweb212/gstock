<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Famille;

use App\Ajoutersorties;
use App\Ajouterpiecessorties;

use App\Invpieces;

use PDF;
use Illuminate\Support\Facades\DB;
use Response;


class FamilleController extends Controller
{
	
	  public function __construct()
    {
       $this->middleware('auth');
    }
	

public function newFamille(Request $request){
		
		$famille = new Famille();
		$famille->famille=$request->famille;
		$famille->save();
		return \Redirect::back();
		
}
	
	
   
    public function index()
    {
		$famille = Famille::orderBy('id', 'desc')->get();
		
		return view('addfamille',['famille'=>$famille]);
    
	
	}
	
	
	 public function sortieprint()
    {
		$listeSortie = Ajoutersorties::all();
		
		$listeInvpieces = Invpieces::all();
		
		$ajoutersortiesall = DB::table('ajoutersorties')
        ->select('*')
		->orderBy('id', 'desc')
        ->get();
		
	
        return view('printsortie',['listesortie'=>$listeSortie,'listeinvpieces'=>$listeInvpieces,'ajoutersortiesall'=>$ajoutersortiesall]);
    
	
	}
	
	
	
	
 public function printPDF($id)
    {
		
	$ajoutersortiesall = DB::table('ajoutersorties')
        ->join('ajouterpiecessorties', 'ajouterpiecessorties.id_sortie', '=', 'ajoutersorties.id')
		 ->join('invpieces', 'ajouterpiecessorties.id_piece', '=', 'invpieces.id')
		->where('ajoutersorties.id', '=', $id)
        ->select('ajoutersorties.id','ajoutersorties.updated_at','ajoutersorties.code_mat', 
		'ajoutersorties.dest','ajouterpiecessorties.quan','ajoutersorties.proo','ajoutersorties.envoye',
		'ajoutersorties.chauf','ajoutersorties.rec',
		'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
        ->get();
		
		$ajoutersorties = DB::table('ajoutersorties')
        ->select('*')
		->where('id', '=', $id)
        ->first();
		
	
	
       // This  $data array will be passed to our PDF blade
			
         $pdf = PDF::loadView('sortie_print',['data'=>$ajoutersortiesall,'data2'=>$ajoutersorties]);
		 return $pdf->download('sortie.pdf');
    }
	
	
   
	   
}
