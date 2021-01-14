<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajoutersorties;
use App\Ajouterpiecessorties;

use App\Invpieces;
use App\Btinetrenes;
use PDF;
use Illuminate\Support\Facades\DB;
use Response;

class AjoutersortieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function newAjoutersortie(Request $request)
    {

        $id = $request->id;
        $i = 0;
        $quan = 0;
        foreach ($id as $v1)
        {
            $quan += $request->quan[$i];
            $i++;
        }

        $newAjoutersortie = new Ajoutersorties();

        $newAjoutersortie->quan = $quan;
        $newAjoutersortie->code_mat = $request->code_m;
        $newAjoutersortie->dest = $request->des;
        $newAjoutersortie->proo = $request->pro;
        $newAjoutersortie->envoye = $request->envoye;
        $newAjoutersortie->chauf = $request->chauf;
        $newAjoutersortie->rec = $request->rec;
        $newAjoutersortie->obser = $request->obser;
        $newAjoutersortie->type_sortie = $request->type_sortie;
        $newAjoutersortie->date_sortie = date("Y-m-d H:i:s");
        $newAjoutersortie->save();
        /* Foreach lie entre table pieces et table sortie la quantite */
        $id_sortie = $newAjoutersortie->id;
        $i = 0;
        foreach ($id as $v1)
        {
            $new_ajouterpiecessorties = new Ajouterpiecessorties();
            $new_ajouterpiecessorties->id_piece = $v1;
            $new_ajouterpiecessorties->id_sortie = $id_sortie;
            $new_ajouterpiecessorties->quan = $request->quan[$i];
            $new_ajouterpiecessorties->save();
            $i++;
        }
        /* Fin Foreach lie entre table pieces et table sortie la quantite */

        /* Foreach update la quantite */
        $i = 0;
        foreach ($id as $v1)
        {
            $getInvpieces = Invpieces::where('id', "=", $v1)->first();
            if (isset($getInvpieces->inventaire) and !empty($getInvpieces->inventaire))
            {
                $quan = $getInvpieces->inventaire;
            }
            else
            {
                $quan = 0;
            }
            $inventaire = $quan - $request->quan[$i];
            $newInvpieces = DB::table('invpieces')->where('id', $v1)->update(['inventaire' => $inventaire]);
            $i++;
        }

        /* Fin Foreach update la quantite */

        return \Redirect::back();

    }

    public function index()
    {
        $listeSortie = Ajoutersorties::orderBy('id', 'desc')->get();

        $listeInvpieces = Invpieces::orderBy('id', 'desc')->get();

        $ajoutersortiesall = DB::table('ajoutersorties')->join('ajouterpiecessorties', 'ajouterpiecessorties.id_sortie', '=', 'ajoutersorties.id')
            ->join('invpieces', 'ajouterpiecessorties.id_piece', '=', 'invpieces.id')
            ->select('ajoutersorties.id', 'ajoutersorties.updated_at', 'ajoutersorties.code_mat', 'ajoutersorties.dest', 'ajouterpiecessorties.quan', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
            ->orderBy('id', 'desc')
            ->where('ajoutersorties.type_sortie', '=', 'Vers Chantier ou Harbil')
            ->get();

        @$json = file_get_contents('http://staport.dyndns.org/walidbentaleb/get_my_chantiers_by_npemploy/0');

        if (isset($json) and !empty($json))
        {
            $data = json_decode($json, true);
        }
        else
        {
            $data = '';
        }

        @$materiel = file_get_contents('http://staport.dyndns.org/walidbentaleb/parc_materiel_production_json');

        if (isset($materiel) and !empty($materiel))
        {
            $materielarray = json_decode($materiel, true);
        }
        else
        {
            $materielarray = '';
        }

        return view('sortie', ['listesortie' => $listeSortie, 'listeinvpieces' => $listeInvpieces, 'ajoutersortiesall' => $ajoutersortiesall, 'data' => $data, 'materielarray' => $materielarray]);
    }

    public function vente()
    {

        $listeSortie = Ajoutersorties::orderBy('id', 'desc')->get();

        $listeInvpieces = Invpieces::orderBy('id', 'desc')->get();

        $ajoutersortiesall = DB::table('ajoutersorties')->join('ajouterpiecessorties', 'ajouterpiecessorties.id_sortie', '=', 'ajoutersorties.id')
            ->join('invpieces', 'ajouterpiecessorties.id_piece', '=', 'invpieces.id')
            ->select('ajoutersorties.id', 'ajoutersorties.updated_at', 'ajoutersorties.code_mat', 'ajoutersorties.dest', 'ajouterpiecessorties.quan', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
            ->where('ajoutersorties.type_sortie', '=', 'Vers Vente')
            ->orderBy('id', 'desc')
            ->get();

        @$materiel = file_get_contents('http://staport.dyndns.org/walidbentaleb/parc_materiel_production_json');

        if (isset($materiel) and !empty($materiel))
        {
            $materielarray = json_decode($materiel, true);
        }
        else
        {
            $materielarray = '';
        }

        return view('sortie_vente', ['listesortie' => $listeSortie, 'listeinvpieces' => $listeInvpieces, 'ajoutersortiesall' => $ajoutersortiesall, 'materielarray' => $materielarray]);

    }

    public function sortiereparation()
    {

        $listeSortie = Ajoutersorties::orderBy('id', 'desc')->get();

        $listeInvpieces = Invpieces::orderBy('id', 'desc')->get();

        $ajoutersortiesall = DB::table('ajoutersorties')->join('ajouterpiecessorties', 'ajouterpiecessorties.id_sortie', '=', 'ajoutersorties.id')
            ->join('invpieces', 'ajouterpiecessorties.id_piece', '=', 'invpieces.id')
            ->select('ajoutersorties.id', 'ajoutersorties.updated_at', 'ajoutersorties.code_mat', 'ajoutersorties.dest', 'ajouterpiecessorties.quan', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
            ->orderBy('id', 'desc')
            ->where('ajoutersorties.type_sortie', '=', 'Vers Réparation')
            ->get();

        @$materiel = file_get_contents('http://staport.dyndns.org/walidbentaleb/parc_materiel_production_json');

        if (isset($materiel) and !empty($materiel))
        {
            $materielarray = json_decode($materiel, true);
        }
        else
        {
            $materielarray = '';
        }

        return view('sortie_reparation', ['listesortie' => $listeSortie, 'listeinvpieces' => $listeInvpieces, 'ajoutersortiesall' => $ajoutersortiesall, 'materielarray' => $materielarray]);

    }

    public function conformite()
    {

        $listeSortie = Ajoutersorties::orderBy('id', 'desc')->get();

        $listeInvpieces = Invpieces::orderBy('id', 'desc')->get();

        $ajoutersortiesall = DB::table('ajoutersorties')->join('ajouterpiecessorties', 'ajouterpiecessorties.id_sortie', '=', 'ajoutersorties.id')
            ->join('invpieces', 'ajouterpiecessorties.id_piece', '=', 'invpieces.id')
            ->select('ajoutersorties.id', 'ajoutersorties.updated_at', 'ajoutersorties.code_mat', 'ajoutersorties.dest', 'ajouterpiecessorties.quan', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite')
            ->orderBy('id', 'desc')
            ->where('ajoutersorties.type_sortie', '=', 'Retour  non conformité')
            ->get();

        @$materiel = file_get_contents('http://staport.dyndns.org/walidbentaleb/parc_materiel_production_json');

        if (isset($materiel) and !empty($materiel))
        {
            $materielarray = json_decode($materiel, true);
        }
        else
        {
            $materielarray = '';
        }

        return view('sortie_confirmter', ['listesortie' => $listeSortie, 'listeinvpieces' => $listeInvpieces, 'ajoutersortiesall' => $ajoutersortiesall, 'materielarray' => $materielarray]);

    }

    public function btintern()
    {
        $bti_materiel = Btinetrenes::orderBy('date_enregistrement', 'desc')->get();
        return view('bti', ['bti_materiel' => $bti_materiel]);
    }

    public function sortieprint()
    {
        $listeSortie = Ajoutersorties::orderBy('id', 'desc')->get();

        $listeInvpieces = Invpieces::orderBy('id', 'desc')->get();

        $ajoutersortiesall = DB::table('ajoutersorties')->select('*')
            ->orderBy('id', 'desc')
            ->get();

        return view('printsortie', ['listesortie' => $listeSortie, 'listeinvpieces' => $listeInvpieces, 'ajoutersortiesall' => $ajoutersortiesall]);

    }

    public function printPDF($id)
    {

        $ajoutersortiesall = DB::table('ajoutersorties')->join('ajouterpiecessorties', 'ajouterpiecessorties.id_sortie', '=', 'ajoutersorties.id')
            ->join('invpieces', 'ajouterpiecessorties.id_piece', '=', 'invpieces.id')
            ->where('ajoutersorties.id', '=', $id)->select('ajoutersorties.id', 'ajoutersorties.updated_at', 'ajoutersorties.code_mat', 'ajoutersorties.dest', 'ajouterpiecessorties.quan', 'ajoutersorties.proo', 'ajoutersorties.envoye', 'ajoutersorties.chauf', 'ajoutersorties.rec', 'invpieces.name_piece', 'invpieces.ref', 'invpieces.unite', 'ajoutersorties.obser')
            ->get();

        $ajoutersorties = DB::table('ajoutersorties')->select('*')
            ->where('id', '=', $id)->first();

        // This  $data array will be passed to our PDF blade
        $customPaper = array(
            0,
            0,
            420.00,
            595.00
        );
        $pdf = PDF::loadView('sortie_print', ['data' => $ajoutersortiesall, 'data2' => $ajoutersorties])->setPaper($customPaper, 'landscape');
        return $pdf->download('sortie.pdf');
        //return view('sortie_print',['data'=>$ajoutersortiesall,'data2'=>$ajoutersorties]);
        
    }

    public function newBtinetrene()
    {

        @$bti_materiel = file_get_contents('http://staport.dyndns.org/walidbentaleb/get_liste_bti_materiel');

        if (isset($bti_materiel) and !empty($bti_materiel))
        {
            $bti_materiel = json_decode($bti_materiel, true);
        }
        else
        {
            $bti_materiel = '';
        }

        foreach ($bti_materiel as $v1)
        {
            foreach ($v1 as $key)
            {
                $btinetrene = new Btinetrenes();
                $idbti = $key['IDBC_interne'];

                $isExist = DB::table('btinetrenes')->select('*')
                    ->where('code', '=', $key['IDBC_interne'])->first();

                if (empty($isExist))
                {
                    $btinetrene->code = $key['IDBC_interne'];
                    $destination = $key['Destination'];
                    $destinationa = explode("-", $destination);
                    $btinetrene->destination = $destinationa[0];
                    $btinetrene->proprietaire = $key['Propriétaire'];
                    $btinetrene->numero = $key['numero'];
                    $btinetrene->date_enregistrement = $key['date_enregistrement'];
                    $btinetrene->reference = '';
                    $btinetrene->valider = '0';
                    $btinetrene->save();
                }

            }

        }

        /* Fin Foreach lie entre table pieces et table sortie la quantite */
        /* Fin Foreach update la quantite */

        return \Redirect::back();

    }

	
	  public function valideBtinetrene(Request $request)
    {
		$id = $request->id;
		$Btinetrenes = Btinetrenes::find($id);

		$Btinetrenes->valider = '1';

		$Btinetrenes->save();
		
		$bti_materiel = Btinetrenes::orderBy('date_enregistrement', 'desc')->get();
        return view('bti', ['bti_materiel' => $bti_materiel])->withStatus('Successfully modified customer.');
	
    }
}

