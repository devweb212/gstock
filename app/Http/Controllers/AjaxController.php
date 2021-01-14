<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Invpieces;
use App\Famille;
use App\Sous_famille;


use Illuminate\Support\Facades\DB;


class AjaxController extends Controller {
	
	 public function __construct()
    {
       $this->middleware('auth');
    }
	
	
	
public function index(Request $request) {   
			$id=$request->all();
			$listeInvpieces = Invpieces::all()->sortBy('id');
				$count=1;
			foreach ($id as $v1) {
				foreach ($v1 as $v2) {
					if ($count%2 == 1)
					$count1=1;
				else
				$count1=2;
					$ajouterpieces = Invpieces::where('id',"=", $v2)->first();
					echo view('welcome',['ajouterpieces'=>$ajouterpieces,'listepieces'=>$listeInvpieces,'count'=>$count1]);
					$count++;
				}
			}
}


   
   public function ajouterbla(Request $request) {
	   
		$id=$request->all();
		$listeInvpieces = Invpieces::all()->sortBy('id');
		$count=1;
		foreach ($id as $v1) {
			foreach ($v1 as $v2) {
				if ($count%2 == 1)
					$count1=1;
				else
				$count1=2;
			
				$ajouterpieces = Invpieces::where('id',"=", $v2)->first();
				echo view('ajouterbla',['ajouterpieces'=>$ajouterpieces,'listepieces'=>$listeInvpieces,'count'=>$count1]);
				$count++;
			}
		}


}

 


 public function ajaxinventaire(Request $request)
    {
		
		$id=$request->all();
		
		$count=1;
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		
		
		
		foreach ($id as $v1) {
			/*foreach ($v1 as $v2) {*/
				if ($count%2 == 1)
					$count1=1;
				else
				$count1=2;
			
				$listeInvpieces = Invpieces::where('id',"=", $v1)->get();
				
				echo view('ajaxinventaire',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille,'count'=>$count1]);
				$count++;
			/*}*/
		}
		
		
    }
	
	
	
 public function ajaxinventairef(Request $request)
    {
		
		$id=$request->all();
		
		$count=1;
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		
		foreach ($id as $v1) {
			/*foreach ($v1 as $v2) {*/
				if ($count%2 == 1)
					$count1=1;
				else
				$count1=2;
			
				$listeInvpieces = Invpieces::where('id_famille',"=", $v1)->get();
				
				echo view('ajaxinventaire',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille,'count'=>$count1]);
				$count++;
			/*}*/
		}
		
		
    }
	
	
	 public function ajaxinventairesf(Request $request)
    {
		
		$id=$request->all();
		
		$count=1;
		$famille = Famille::orderBy('id', 'desc')->get();
		$sous_famille = Sous_famille::orderBy('id', 'desc')->get();
		
		foreach ($id as $v1) {
		/*foreach ($v1 as $v2) {*/
				if ($count%2 == 1)
					$count1=1;
				else
				$count1=2;
			
				$listeInvpieces = Invpieces::where('id_sfamille',"=", $v1)->get();
				
				echo view('ajaxinventaire',['listeInvpieces'=>$listeInvpieces,'sous_famille'=>$sous_famille,'famille'=>$famille,'count'=>$count1]);
				$count++;
			/*}*/
		}
		
		
    }
	

		public function getsfamille(Request $request) { 
			$id=$request->id_famille;
			$sous_famille = Sous_famille::where('id_famille',"=", $id)->get();
			
			return view('ajaxsousfamille',['sous_famille'=>$sous_famille]);
			
						
		}
		
		

    public function detailbti(Request $request) {
	  
		$id=$request->id;
		
		
		@$IDBC_interne = file_get_contents('http://staport.dyndns.org/walidbentaleb/get_details_bci_by_IDBC_interne/'.$id);

		if(isset($IDBC_interne) and !empty($IDBC_interne)){
				$interne = json_decode($IDBC_interne,true);
		}else{
			$interne = '';	
		}
		
		echo view('detailbti',['interne'=>$interne]);


}
   
}

