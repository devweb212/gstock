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
            <div>
            </div>
         </div>
         <div class="page-title-actions">
            <div class="d-inline-block dropdown">
               <a href="/addsousfamille" class="btn-shadow dropdown-toggle btn btn-info">
               <span class="btn-icon-wrapper pr-2 opacity-7">
               </span>
              AJOUTER UNE SOUS FAMILLE
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
						
						
                           <th>Date Ajouter</th>
                           <th>Sous Famille</th>
                           <th>Famille</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
					
                         @foreach ($sous_famille as $item)     
			<tr>		
						   <td>{{ $item->created_at->format('Y-m-d') }}</td>
                           <td>{{ $item->sousfamille }}</td>
                           <td>@foreach ($famille as $itemf) @if($item->id_famille==$itemf->id) {{ $itemf->famille }} @endif @endforeach</td>
                           <td><i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i></td>   
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