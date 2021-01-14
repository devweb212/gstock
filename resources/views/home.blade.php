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
            <div>Les Entrées
            </div>
         </div>
         <div class="page-title-actions">
            <div class="d-inline-block dropdown">
               <a href="/piece/create" class="btn-shadow dropdown-toggle btn btn-info">
               <span class="btn-icon-wrapper pr-2 opacity-7">
               <i class="fa fa-plus fa-w-20"></i>
               </span>
               AJOUTER UN ENTRÉE
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="main-card mb-3 card">
      <div class="card-body">
         <h5 class="card-title">Accueil</h5>
         <div class="col-lg-12">
            <div class="main-card mb-3 card">
               <div class="card-body">
                  <h5 class="card-title">LISTE DES PIÈCES</h5>
                  <table class="mb-0 table table-hover" style="text-align:center">
                     <thead>
                        <tr>
                           <th>Date BL</th>
                           <th>N° BL</th>
                           <th>Désignation</th>
                           <th>Quantité</th>
                           <th>Référence</th>
                           <th>Unite</th>
                           <th>Fournisseur</th>
                           <th>Equivalent</th>
                           <th>Observation</th>
                  
                           <th style="min-width: 100px;">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <tbody>
                        @foreach ($ajoutersortiesall as $listepiec)
                        <tr>
                           <th scope="row">{{ $listepiec->updated_at }}</th>
                           <th scope="row">{{ $listepiec->bl }}</th>
                           <th scope="row">  {{$listepiec->name_piece}}</th>
                           <td>{{$listepiec->quantite}}</td>
                           <td>{{$listepiec->ref}}</td>
                           <td>
                              @if ($listepiec->unite==1)
                              Unite 
                              @endif
                              @if ($listepiec->unite==2)
                              Centimètre
                              @endif
                              @if ($listepiec->unite==3)
                              Litre 
                              @endif
                              @if ($listepiec->unite==4)
                              Gramme
                              @endif
                           </td>
                           <td>{{$listepiec->forn}}</td>
                           <td>{{$listepiec->equiv}}</td>
                           <td>{{$listepiec->obser}}</td>
    
                           <td>
                              <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>                                                                                            			
                                                                                     
                           </td>
                        </tr>
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