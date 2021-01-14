<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajouterpieces;
use App\Invpieces;
use PDF;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
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
		
		$ajoutersortiesall = DB::table('ajouterpieces')
        ->join('invpieces', 'ajouterpieces.id_piece', '=', 'invpieces.id')
        ->select('ajouterpieces.id','ajouterpieces.updated_at','ajouterpieces.quantite', 'ajouterpieces.bl','ajouterpieces.forn','ajouterpieces.equiv','ajouterpieces.obser','ajouterpieces.typeb', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
        ->orderBy('id','desc')
		->get();
		 return view('home',['listepieces'=>$listeInvpieces,'ajoutersortiesall'=>$ajoutersortiesall]);
    }
	
	
public function store(Request $request){
		
			$id = $request->id;
			$i=0;
			foreach ($id as $v1) {
			$newAjouterpieces = new Ajouterpieces();
			$newAjouterpieces->id_piece=$v1;
			$newAjouterpieces->quantite=$request->quantite[$i];
			$newAjouterpieces->bl=$request->bl;
			$newAjouterpieces->obser=$request->obser;
			$newAjouterpieces->forn=$request->forn;
			$newAjouterpieces->typeb=$request->typeb;
			$newAjouterpieces->code_bar='codebar';
			$newAjouterpieces->save();
			$getInvpieces = Invpieces::where('id',"=", $v1)->first();
			if(isset($getInvpieces->inventaire) and !empty($getInvpieces->inventaire)){
				$quan=$getInvpieces->inventaire;
			}else{
					$quan=0;
			}

			$inventaire =$quan+$request->quantite[$i];


			$newInvpieces = DB::table('invpieces')
						->where('id', $v1)
						->update(['inventaire' => $inventaire]);
						$i++;
}			

//Ajouterpieces::where('id',$newAjouterpieces->id)->update(['code_bar'=>$image]);

		
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
		$ajoutersortiesall = DB::table('ajouterpieces')
        ->join('invpieces', 'ajouterpieces.id_piece', '=', 'invpieces.id')
        ->select('ajouterpieces.id','ajouterpieces.updated_at','ajouterpieces.quantite', 'ajouterpieces.bl','ajouterpieces.forn','ajouterpieces.equiv','ajouterpieces.obser','ajouterpieces.typeb', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
        ->orderBy('id','desc')       
	    ->get();
		 
       
					 
        return view('create',['listepieces'=>$listeInvpieces,'ajoutersortiesall'=>$ajoutersortiesall]);
	
		
    }
	
	
	public function createretour()
    {
		
		 @$json = file_get_contents('http://staport.dyndns.org/walidbentaleb/get_my_chantiers_by_npemploy/0');

        if (isset($json) and !empty($json))
        {
            $data = json_decode($json, true);
        }
        else
        {
            $data = '';
        }
		
		
		$listeInvpieces = Invpieces::orderBy('id', 'desc')->get();
		$ajoutersortiesall = DB::table('ajouterpieces')
        ->join('invpieces', 'ajouterpieces.id_piece', '=', 'invpieces.id')
        ->select('ajouterpieces.id','ajouterpieces.updated_at','ajouterpieces.quantite', 'ajouterpieces.bl','ajouterpieces.forn','ajouterpieces.equiv','ajouterpieces.obser','ajouterpieces.typeb', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite', 'ajouterpieces.typeb')
        ->orderBy('id','desc')       
	    ->get();
		 
       		 
        return view('retourentree',['listepieces'=>$listeInvpieces,'ajoutersortiesall'=>$ajoutersortiesall,'data'=>$data]);
	
		
    }
	
	
	public function edit()
    {
		
    }
	
    public function update()
    {
		
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
	
	


	

}
