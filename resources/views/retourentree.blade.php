@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div class="page-title-icon">
               <i class="lnr-picture text-danger">
               </i>
            </div>
            <div>Ajouter un Entrée
            </div>
         </div>
         <div class="page-title-actions">
            <div class="d-inline-block dropdown">
               <a href="/home" class="btn-shadow dropdown-toggle btn btn-info">
               <span class="btn-icon-wrapper pr-2 opacity-7">
               </span>
               Listes des Entrées
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="main-card mb-3 card">
      <div class="card-body">
         <h5 class="card-title">Sélectionner un Article</h5>
         <form action="/savepieces" method="post" class="needs-validation" novalidate>
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="form-row">
               <div class="col-md-12 mb-12">
                  <select  id="fruitList" name="id_piece" data-placeholder="selectionner  un Article..." class="chosen-select selectCategory"    multiple tabindex="4" required>
                     @foreach ($listepieces as $ajouterpieces)
                     <option value="{{ $ajouterpieces->id }}">{{$ajouterpieces->name_piece}}- {{$ajouterpieces->ref}}</option>
                     @endforeach
                  </select>
                  
               </div>
            </div>
            <div id="msg">
               <div class="form-row">
                  <div class="col-md-3 mb-3">
                     <label for="validationCustom01">
                     Article
                     </label>
                     <input type="number" class="form-control" id="validationCustom02" placeholder="Article" value="" name="name_piece" disabled>
                   
                  </div>
                  <div class="col-md-3 mb-3">
                     <label for="validationCustom02">Stock</label>
                     <input type="number" class="form-control" id="stock" placeholder="stock" value=""  disabled>
                  
                  </div>
                  <div class="col-md-3 mb-3">
                     <label for="validationCustomUsername">Référence</label>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Référence" aria-describedby="inputGroupPrepend" name="refer" disabled>
                      
                     </div>
                  </div>
				  
				   <div class="col-md-3 mb-3">
                     <label for="validationCustom04">Unite</label>
                     <input type="text" class="form-control" id="validationCustom04" placeholder="Unite" name="unite" disabled>
                  
                  </div>
               </div>
               <div class="form-row">
                 
                  <div class="col-md-4 mb-3">
                     <label for="validationCustom02">Quantité</label>
                     <input type="number" class="form-control" id="quan" placeholder="Quantité" value=""   name="quantite[]" required>
                   
                  </div>
                  <input type="hidden"  value="" name="equiv"  disabled>
               </div>
               <hr style="  border-top: 1px dashed #000;">
            </div>
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationCustom03">N° BR</label>
                  <input type="text" class="form-control" id="validationCustom03" placeholder="N° BR" name="bl" required>
                 
               </div>
             
			   
			   <div class="col-md-4 mb-3">
	<label for="validationCustom03">Retour</label>
	<select  id="sortie" name="forn" data-placeholder="selectionner une Destinataire..." class="chosen-select select2 mb-2 form-control-lg form-control"    tabindex="4" required>							   
									<?php
									$i=0;
									foreach($data as $item){
									foreach($item as $key){
									echo '<option value="'.$key['code'].'">'.$key['code'].'</option>';
									}
									$i++;
									}
									?>
		</select>
											</div>	
											
               <div class="col-md-4 mb-3">
                  <label for="validationCustom05">Observation</label>
                  <textarea name="obser" id="exampleText" class="form-control"  name="obser"></textarea>
                 
               </div>
               <div class="col-md-4 mb-3">
                  <div class="card-body">
                     <fieldset class="position-relative form-group">
                      
						<input name="typeb" type="hidden" value="2"> 
                   
                     </fieldset>
                  </div>
               </div>
            </div>
            <button class="btn btn-primary" type="submit">Ajouter un Retour</button>
         </form>
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
               <div class="card-body">
                  <h5 class="card-title">LISTE DES Entrées</h5>
                  <table class="mb-0 table table-hover" style="text-align:center">
                     <thead>
                        <tr>
                           <th>Date BR</th>
                           <th>N° BR</th>
                           <th>Désignation</th>
                           <th>Quantité</th>
                           <th>Référence</th>
                           <th>Unite</th>
                           <th>Retour</th>
                           <th>Equivalent</th>
                           <th>Observation</th>
                           
                           <th style="min-width: 100px;">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <tbody>
                    @foreach ($ajoutersortiesall as $listepiec)
					@if($listepiec->typeb==2)	
                        <tr>
					
                           <th scope="row">{{ $listepiec->updated_at }}</th>
                           <th scope="row">{{ $listepiec->bl }}</th>
                           <th scope="row">  {{$listepiec->name_piece}}</th>
                           <td>{{$listepiec->quantite}}</td>
                           <td>{{$listepiec->ref}}</td>
                           <td>
						   {{$listepiec->unite}}
                              
                           </td>
                           <td>{{$listepiec->forn}}</td>
                           <td>{{$listepiec->equiv}}</td>
                           <td>{{$listepiec->obser}}</td>
                         
                           <td>
                              <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>                                                                                            			
                                                                                     
                           </td>
                        </tr>
                      @endif
					  @endforeach
                     </tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection