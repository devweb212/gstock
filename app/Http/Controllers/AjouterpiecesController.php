<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Invpieces;
use App\Sous_famille;
use App\Famille;
use PDF;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AjouterpiecesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	 

	  public function index()
    {
		
		$listeInvpieces = Invpieces::orderBy('id', 'desc')->get();
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('addpiece',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille]);
    
	}
	
	
	 public function inventaires()
    {
		
		$listeInvpieces = Invpieces::orderBy('id', 'desc')->get();
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('inventaires',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille]);
    
    }
	
	 public function inventaires_initial()
    {
		
		$listeInvpieces = Invpieces::orderBy('id', 'desc')->get();
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('inventaires_initial',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille]);
    
    }
	
	 public function inventaires_final()
    {
		
		$listeInvpieces = Invpieces::orderBy('id', 'desc')->get();
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('inventaires_final',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille]);
    
    }
	
	
	

	public function addpiecec(Request $request){
			$newInvpieces = new Invpieces();	
			$newInvpieces->name_piece=$request->name_piece;
			$newInvpieces->inventaire=$request->quantite;
			$newInvpieces->ref=$request->refer;
			$newInvpieces->equiv=$request->equiv;
			$newInvpieces->unite=$request->unite;
			$newInvpieces->id_famille=$request->id_famille;
			$newInvpieces->id_sfamille=$request->id_sfamille;
			$newInvpieces->inventaire=$request->inventaire;
			$newInvpieces->save();			
			return \Redirect::back();
	}
	
	
	
	
	

		public function generateBarcode(Request $request){
			$id = $request->get('id');
			$ajouterpieces = Ajouterpieces::find($id);
			return view('barcode')->with('ajouterpieces',$ajouterpieces);
		}

	
	public function create()
    {
		
	$listeInvpieces = Invpieces::orderBy('id', 'desc')->get();
    return view('listallpiece',['listeInvpieces'=>$listeInvpieces]);
		
    }
	
	public function edit($id){
		$edit = Invpieces::orderBy('id', 'desc')
		->where('id', '=', $id)
		->first();
		$listeInvpieces = Invpieces::orderBy('id', 'desc')
		->get();
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		return view('addpiece_edit',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille,'edit'=>$edit]);
		
	}
	
	
    public function update(Request $request)
    {
		$newInvpieces = new Invpieces();	
			$newInvpieces->name_piece=$request->name_piece;
			$newInvpieces->inventaire=$request->quantite;
			$newInvpieces->ref=$request->refer;
			$newInvpieces->equiv=$request->equiv;
			$newInvpieces->unite=$request->unite;
			$newInvpieces->id_famille=$request->id_famille;
			$newInvpieces->id_sfamille=$request->id_sfamille;
			$newInvpieces->inventaire=$request->inventaire;
			$newInvpieces->save();		
			Ajouterpieces::where('id',$newAjouterpieces->id)->update(['code_bar'=>$image]);			
			return \Redirect::back();
    }
	
	public function destory()
    {
		
    }
	
	
	public function barcode( Request $request ) {
	
	$id = md5($request->get('id'));
	
	return view('barcode',['id'=>$id]);


}


 public function printPDF($id)
    {
		
			$ajouterpieces = Ajouterpieces::where('id',"=", $id)->first();
		
	


       // This  $data array will be passed to our PDF blade
       $data = [
          'title' => $ajouterpieces->name_piece,
          'heading' => $ajouterpieces->quantite,
          'content' => $ajouterpieces->equiv       
            ];
        
        $pdf = PDF::loadView('pdfi', $data);  
        return $pdf->download('medium.pdf');
    }
	
	
	
	
	 public function inventaire_actuel(Request $request)
    {
	
	
	$famille = Famille::orderBy('id', 'desc')->get();
	$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		
		
	$invslect =  $request->invslect;
	$famillefilter =  $request->famillefilter;
	$sfamillefilter =  $request->sfamillefilter;
	
	if($invslect!=0){
		$id = $invslect;
	 $inventaire_actuel = DB::table('invpieces')->select('*')
            ->where('id', '=', $id)->get();
	}

	if($famillefilter!=0){
		$id = $famillefilter;
	 $inventaire_actuel = DB::table('invpieces')->select('*')
            ->where('id_famille', '=', $id)->get();
	}
	
	if($sfamillefilter!=0){
		$id = $sfamillefilter;
	 $inventaire_actuel = DB::table('invpieces')->select('*')
            ->where('id_sfamille', '=', $id)->get();
	}

	if($invslect==0 and $famillefilter==0 and $sfamillefilter==0){
		$inventaire_actuel = DB::table('invpieces')->select('*')
		->get();
	}

	

   

        $pdf = PDF::loadView('inventaire_actuel', ['data' => $inventaire_actuel,'famille' => $famille,'sous_famille' => $sous_famille,'famillefilter' => $famillefilter,'sfamillefilter' => $sfamillefilter]);
        return $pdf->download('inventaire_actuel.pdf');
        //return view('inventaire_actuel',['data' => $inventaire_actuel,'famille' => $famille,'sous_famille' => $sous_famille]);
        
    }


	

}
