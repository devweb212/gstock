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
            <div>Stock Initial 2021
            </div>
         </div>
         <div class="page-title-actions">
          
         </div>
      </div>
   </div>
   <div class="main-card mb-3 card">
      <div class="card-body">
			 <div class="row">
	   <div class="col-md-6 mb-6">
         <h5 class="card-title">Accueil</h5>
		 </div>
		 <div class="col-md-6 mb-6" style="text-align: right;padding-right: 28px;padding-bottom: 20px;">
       <a href="/inventaires_initial" class="btn-shadow dropdown-toggle btn btn-info">Stock Initial 2021</a>	
		<a href="/inventaires_final" class="btn-shadow dropdown-toggle btn btn-info">Stock Final 2020</a>
        </div>
					</div>	
         <div class="col-lg-12">
            <div class="main-card mb-3 card">
               <div class="card-body">
                  <h5 class="card-title">LISTE DES ARTICLES</h5>
                  <div class="form-row">
<form action="/inventaire_actuel" method="post" class="needs-validation" novalidate style="width: 100%;">
                        @csrf
                        <meta name="csrf-token" content="{{ csrf_token() }}">
						    <div class="form-row">	
                       
					 <div class="col-md-3 mb-3">
                           <label for="validationCustom01" style="display: block;">
                            FAMILLE
                           </label>
              <select  id="famillefilter" name="famillefilter" data-placeholder="selectionner un article..." class="chosen-select sortie "  tabindex="-1" required>
						        <option value="0" selected="selected">...</option>
                              @foreach ($famille as $item)
                              <option value="{{ $item->id }}">{{$item->famille}}</option>
                              @endforeach
                           </select>
                        </div>
					 <div class="col-md-3 mb-3">
                              <label for="validationCustom01" style="display: block;">
                              SOUS FAMILLE
                           </label>
                           <select  id="sfamillefilter" name="sfamillefilter" data-placeholder="selectionner un article..." class="chosen-select sfamille " tabindex="-1" required>
						        <option value="0" selected="selected">...</option>
                              @foreach ($sous_famille as $item)
                              <option value="{{ $item->id }}">{{$item->sousfamille}}</option>
                              @endforeach
                           </select>
                        </div>
						 <div class="col-md-3 mb-3">                        
		<label for="validationCustom01" style="display: block;"> ARTICLE </label>
       <select name="invslect"  class="chosen-select form-control " style="width: 100%;" id="invslect">
						  <option value="0" selected="selected">...</option>
							 @foreach ($listeInvpieces as $ajouterpieces)
                              <option value="{{ $ajouterpieces->id }}">{{$ajouterpieces->name_piece}}- {{$ajouterpieces->ref}}</option>
                              @endforeach
                           </select>
                        </div>
<div class="col-md-3 mb-3" style=" text-align: right;padding-top: 28px;">
        <input type="submit" id="btn" value="Imprimer" class="btn-shadow dropdown-toggle btn btn-info"> 
                        </div>
						
						
						  
					
                      </div>
					</form>
                  </div>
           

<div id='DivIdToPrint'>
<table class="mb-0 table table-hover" style="text-align:center" border="1">
                        <thead>
                           <tr>
                              <th>Date Ajouter</th>
                              <th>Article</th>
                              <th>Quantité</th>
                              <th>Référence</th>
                              <th>Unite</th>
                              <th>Famille </th>
                              <th>Sous Famille </th>
                            
                           </tr>
                        </thead>
                        <tbody id="inventaire">
                           @foreach ($listeInvpieces as $listepiec)
                           <tr>
                              <th scope="row">{{ $listepiec->created_at->format('Y-m-d') }}</th>
                              <th scope="row">  {{$listepiec->name_piece}}</th>
                              <td>{{$listepiec->inventaire}}</td>
                              <td>{{$listepiec->ref}}</td>
                              <td>
                                 {{$listepiec->unite}}
                              </td>
                              <td>
                                 @foreach ($famille as $item)			
                                 @if ($item->id==$listepiec->id_famille )
                                 {{$item->famille}}
                                 @endif	 
                                 @endforeach	
                              </td>
                              <td>@foreach ($sous_famille as $item)			
                                 @if ($item->id==$listepiec->id_sfamille )
                                 {{$item->sousfamille}}
                                 @endif	 
                                 @endforeach	
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
</div>
@endsection