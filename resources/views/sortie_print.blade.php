<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<body>
 <style>
 
:root {
	
	--font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
	--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace

}

html {
	font-family: sans-serif;
	line-height: 1.15;
	-webkit-text-size-adjust: 100%;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
}
	
	</style>


<div style="height:350px">
	
 <table class="mb-0 table table-hover" width="100%" style="width:100%;margin-bottom: 30px;" border="0">
	  <thead><tr>
        <td width="33.33%"><img src="images/avatars/logo.png" style="width: 160px;"/></td>
         <td width="33.33%" style="text-align:center"> 
		<h1 style=" margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 400;
    line-height: 1.2;
    color: inherit;
    color: #3f6ad8;
    font-weight: bold;
    font-size: 22px;
    border-bottom: 4px solid;
    width: 180px;
    border-top: 2px solid;    margin: 0 auto;">BON DE SORTIE</h1></br>
	<span style="color: #000;font-weight: bold;
    font-size: 16px;border-bottom: 4px solid;
    border-top: 0px solid;text-align:center;margin-top:20px">0000{{$data2->id}}</span>
	</td>
        <td width="33.33%">
		<div> <?php echo '<src="data:image/png;base64,' . DNS1D::getBarcodePNG(request()->id, "C39+",3,70).'/> ';?>
		</div>
		<div  style="height:15px;font-size: 12px;"><strong>Le: 
		
		{{$data2->updated_at}}</strong>
	
		</div>
		<div style="height:15px;font-size: 12px;"><strong>Provenance: {{$data2->proo}}</strong></div>
		<div style="height:15px;font-size: 12px;"><strong>Destinataire: {{$data2->dest}} </strong></div>
		<div style="height:15px;font-size: 12px;"><strong>Affectation: {{$data2->code_mat}} </strong></div>
		<div style="height:15px;font-size: 12px;"><strong>Transport: </strong></div>
		
		</td>
      </tr>
	  </thead>
	  </table>

	<table  width="100%" style="width:100%;    font-size: 12px;" border="1" cellspacing="0" cellpadding="3"> 

        <tr style="background: #3f6ad8;color: #fff;">
	    <th>Quantité</th>
        <th>Article</th>
        <th>Référence</th>
       
        <th>Observation</th>
        </tr>
	  
		<tbody style="text-align: left;border: 1px solid #3f6ad8; ">
@foreach ($data as $listepiec)
		<tr>
	    <th>{{$listepiec->quan}}</th>
        <th>{{$listepiec->name_piece}}</th>
        <th>{{$listepiec->ref}}</th>
       
        <th>{{$listepiec->obser}}</th>
        </tr>
	@endforeach
</tbody>	
 <tr  style="
text-align: left;
">
	    <th colspan="2" style="
text-align: left;
">Envoyé par: {{$data2->envoye}}</th>
       
        <th style="
text-align: left;
">Chauffeur: {{$data2->chauf}}</th>
       
        <th style="
text-align: left;
">Réceptionné par: </th>
        </tr>
		
	 
		
    </table>


</div>
 <table  width="100%" style="width:100%;" border="0" cellspacing="0" cellpadding="3"> 

	<tr>
	<th  border="0" style="text-align: center;font-size: 15px;height: 60px;color: #3f6ad8;
    font-weight: bold;border:0px">
	Siège Social: quartier Beausite, rés. Al Badr imm. 105 - Ain Sebaa - 20250 Casablanca<br>
	FAX:  0522 351 787 Tél:  0522 344 663 
	</th>	
	  
	  </tr>	
	
	</table>



<div style="height:350px">
	
 <table class="mb-0 table table-hover" width="100%" style="width:100%;margin-bottom: 30px;" border="0">
	  <thead><tr>
        <td width="33.33%"><img src="images/avatars/logo.png" style="width: 160px;"/></td>
        <td width="33.33%" style="text-align:center"> 
		<h1 style=" margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 400;
    line-height: 1.2;
    color: inherit;
    color: #3f6ad8;
    font-weight: bold;
    font-size: 22px;
    border-bottom: 4px solid;
    width: 180px;
    border-top: 2px solid;    margin: 0 auto;">BON DE SORTIE</h1>
	<span style="color: #000;font-weight: bold;
    font-size: 16px;border-bottom: 4px solid;
    border-top: 0px solid;text-align:center;margin-top:20px">0000{{$data2->id}}</span>
	</td>
        <td width="33.33%">
		<div> <?php echo '<src="data:image/png;base64,' . DNS1D::getBarcodePNG(request()->id, "C39+",3,70).'/> ';?>
		</div>
		<div  style="height:15px;font-size: 12px;"><strong>Le: 
		
		{{$data2->updated_at}}</strong>
	
		</div>
		<div style="height:15px;font-size: 12px;"><strong>Provenance: {{$data2->proo}}</strong></div>
		<div style="height:15px;font-size: 12px;"><strong>Destinataire: {{$data2->dest}} </strong></div>
		<div style="height:15px;font-size: 12px;"><strong>Affectation: {{$data2->code_mat}} </strong></div>
		<div style="height:15px;font-size: 12px;"><strong>Transport: </strong></div>
		
		</td>
      </tr>
	  </thead>
	  </table>

	<table  width="100%" style="width:100%;    font-size: 12px;" border="1" cellspacing="0" cellpadding="3"> 

        <tr style="background: #3f6ad8;color: #fff;">
	    <th>Quantité</th>
        <th>Article</th>
        <th>Référence</th>
       
        <th>Observation</th>
        </tr>
	  
		<tbody style="text-align: left;border: 1px solid #3f6ad8; ">
@foreach ($data as $listepiec)
		<tr>
	    <th>{{$listepiec->quan}}</th>
        <th>{{$listepiec->name_piece}}</th>
        <th>{{$listepiec->ref}}</th>
       
        <th>{{$listepiec->obser}}</th>
        </tr>
	@endforeach
</tbody>	
 <tr  style="
text-align: left;
">
	    <th colspan="2" style="
text-align: left;
">Envoyé par: {{$data2->envoye}}</th>
       
        <th style="
text-align: left;
">Chauffeur: {{$data2->chauf}}</th>
       
        <th style="
text-align: left;
">Réceptionné par: </th>
        </tr>
		
	 
		
    </table>


</div>
 <table  width="100%" style="width:100%;" border="0" cellspacing="0" cellpadding="3"> 

	<tr>
	<th  border="0" style="text-align: center;font-size: 15px;height: 60px;color: #3f6ad8;
    font-weight: bold;border:0px">
	Siège Social: quartier Beausite, rés. Al Badr imm. 105 - Ain Sebaa - 20250 Casablanca<br>
	FAX:  0522 351 787 Tél:  0522 344 663 
	</th>	
	  
	  </tr>	
	
	</table>
</body>

</html>

