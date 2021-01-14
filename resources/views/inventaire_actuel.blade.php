<table class="mb-0 table table-hover" width="100%" style="width:100%;margin-bottom: 30px;" border="0">
   <thead>
      <tr>
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
               border-top: 2px solid;    margin: 0 auto;">L'INVENTAIRES </h1>
            </br>
		
			
            <span style="color: #000;font-weight: bold;
               font-size: 16px;border-bottom: 4px solid;
               border-top: 0px solid;text-align:center;margin-top:20px"></span>
         </td>
         <td width="33.33%">
            <div style="height:15px;font-size: 12px;text-align: right;"><strong>{{ date('Y-m-d H:i:s') }}</strong></div>
         </td>
      </tr>
   </thead>
</table>
<table  width="100%" style="width:100%;    font-size: 12px;" border="1" cellspacing="0" cellpadding="3">
   <tr>
      <th>Article</th>
      <th>Quantité</th>
      <th>Référence</th>
      <th>Unite</th>
	 
   </tr>
   <tbody style="text-align: left;border: 1px solid #3f6ad8; ">
      @foreach ($data as $listepiec)
      <tr>
         <th>{{$listepiec->name_piece}}</th>
         <th>{{$listepiec->inventaire}}</th>
         
         <th>{{$listepiec->ref}}</th>
		 <th>{{$listepiec->unite}}</th>
		 
		   
      </tr>
      @endforeach
   </tbody>
  
</table>
<table  width="100%" style="width:100%;" border="0" cellspacing="0" cellpadding="3">
   <tr>
      <th  border="0" style="text-align: center;font-size: 15px;height: 60px;color: #3f6ad8;
         font-weight: bold;border:0px">
         Siège Social: quartier Beausite, rés. Al Badr imm. 105 - Ain Sebaa - 20250 Casablanca<br>
         FAX:  0522 351 787 Tél:  0522 344 663 
      </th>
   </tr>
</table>