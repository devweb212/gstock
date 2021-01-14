@extends('layouts.app')

@section('content')






  <div class="app-main__inner">
                        <div class="app-page-title" style="padding: 0px;margin: 0px 0px 30px;">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="lnr-picture text-danger">
                                        </i>
                                    </div>
                                    <div>Les sorties
                                     
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                    <div class="d-inline-block dropdown">
                                    <a href="/sortieprint" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                               
                                            </span>
                                          Listes des sorties
                                        </a>
                                      
								   </div>
                                       
									
									</div>
                                </div>    </div>
                        </div>            <div class="main-card mb-3 card">
                            <div class="card-body">
                       


	<form action="/savesortie" method="post" class="needs-validation" novalidate>
								@csrf
<meta name="csrf-token" content="{{ csrf_token() }}">
								  <div class="form-row">
									
<div class="col-md-4 mb-3">
<label for="validationCustom01"><h5 class="card-title"> SÉLECTIONNER UN ARTICLE</h5></label>  

 <select  id="sortie" name="name_piece" data-placeholder="selectionner un article..." class="chosen-select sortie "    multiple tabindex="4" required>							   
@foreach ($listeinvpieces as $ajouterpieces)
 <option value="{{ $ajouterpieces->id }}">{{$ajouterpieces->name_piece}}- {{$ajouterpieces->ref}}</option>
@endforeach
</select>






                                       
									  </div>
									  </div>
									  
									  <div id="msgsortie">
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">
											
											Article  
											
											</label>
                                          
										 <input type="text" class="form-control" id="validationCustom02" placeholder="Nom de pièces " value="" name="ref" disabled>
                                           
                                        </div>
										
										
										 <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Référence</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="référence" value="" name="ref" disabled>
                                            
                                        </div>
										
										 <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Stock</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Quantité" value="" name="quantite" disabled>
                                         
                                        </div>
										
											 <div class="col-md-3 mb-3">
                                          
											
											 <label for="validationCustom04">Unite</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Unite" name="unite" disabled>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
										
                                     
                                    </div>
                                    <div class="form-row">
									
									
                                      
										
										<div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Quantité </label>
<input type="text" class="form-control" id="validationCustom02" placeholder="Quantité" value="" name="quan[]" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										
                                    </div>
				<hr style="  border-top: 1px dashed #000;">
								</div>
							
				      <div class="form-row">				
			 <div class="col-md-4 mb-3">
            <label for="validationCustom02">Affectation Matériel </label>
           
			<select  name="code_m" data-placeholder="Selectionner un code Matériel..." class="chosen-select select2 mb-2 form-control-lg form-control"    tabindex="4" required>							   
									<?php
									$i=0;
									foreach($materielarray as $item){
									foreach($item as $key){
										if(!empty($key['Code'])){
									echo '<option value="'.$key['Code'].'">'.$key['Code'].'</option>';
									}
									}
									$i++;
									}
									?>
									</select>
			</div>
									
									<div class="col-md-4 mb-3">
									<label for="validationCustom03">Destinataire</label>
	<input type="text" class="form-control" id="validationCustom02" placeholder="Raison sociale" value="" name="des" required>
	
	
											</div>	
										
								       <input type="hidden" class="form-control" id="validationCustom03" placeholder="Provenance" name="pro" value="Dépôt Harbil">	
										
									 <input type="hidden" class="form-control" id="validationCustom03" placeholder="Envoyé par" name="envoye" value="{{ Auth::user()->name }}">
                                         
 <div class="col-md-4 mb-3">
            <label for="validationCustom02">Transport </label>
           
			<select  name="transport" data-placeholder="Selectionner Transport..." class="chosen-select select2 mb-2 form-control-lg form-control"  id="changematr"  tabindex="4" required>							   
									<?php
									$i=0;
									foreach($materielarray as $item){
									foreach($item as $key){
										if(!empty($key['Code'])){
									echo '<option value="'.$key['Code'].'">'.$key['Code'].'--'.$key['Designation'].'</option>';
									}
									}
									$i++;
									}
									?>
									<option value="50151010">Autre</option>
									</select>
									 <div id="hidden_div">
                        
  <input type="text" name="chant_auter" id="chant_auter" class="form-control" placeholder="Autre" value="empty">

   </div>   
									   </div>
									   
										<div class="col-md-4 mb-3">
                                            <label for="validationCustom03">Chauffeur</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="Chauffeur" name="chauf" required>
                                            
                                        </div>	
										
										<div class="col-md-4 mb-3">
										  <label for="validationCustom05">Observation</label>
										  <textarea name="obser" id="exampleText" class="form-control"></textarea>
										 
									   </div>
										
                                           <input type="hidden" name="rec" value="Réceptionné par">
                                         <input type="hidden" name="type_sortie" value="Vers Vente">
										
                                        </div>					
                                
		<button class="btn btn-primary" type="submit" >Ajouter un sortie</button>
                                </form>
                </div>
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>
							
							      <div class="card-body">
                                <h5 class="card-title">Accueil</h5>
                        
							
							
				
                    <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">LISTE DES PIÈCES</h5>
                                        <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             




												<th>Date BS</th>
												 <th>N° BS</th>
                                                <th>Article</th>
                                                <th>Quantité</th>
                                                <th>Référence</th>
                                                <th>Destinataire</th>
                                               
												<th>Unite</th>
                                          
                                            <th style="min-width: 100px;">Action</th>
                                             </tr>
                                            </thead>
                                            <tbody>
															
								

											
							

@foreach ($ajoutersortiesall as $listepiec)
 

 <tr>
												<th scope="row">{{ $listepiec->updated_at }}</th>
												<th scope="row">0000{{ $listepiec->id }}</th>
                                                <th scope="row">  {{$listepiec->name_piece}}</th>
                                                <td>{{$listepiec->quan}}</td>
                                                <td>{{$listepiec->ref}}</td>
                                                <td>{{$listepiec->dest}}</td>
                                                <td>{{$listepiec->unite}}</td>
                                           
<td>

	<i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>                                                                                            			
<a href="/print-sortie/{{$listepiec->id}}"><i class="fa fa-fw" aria-hidden="true" title="Copy to use print"></i></a>                                                          
							
								
										</td>
                                            </tr>

@endforeach


											
								</tbody>
                                        </table>
										
	
                                    </div>
                                </div>
                   </div>
				   </div>
				   
				   
                        </div>
                     
                   

				   </div>


     

@endsection



