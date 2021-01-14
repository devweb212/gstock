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
                                    <div>
									Listes des sorties
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                    <a href="/vers-chantier-ou-harbil" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                               
                                            </span>
                                          Ajouter sortie
                                        </a>
                                      
								   </div>
                                </div>    </div>
                        </div>          
							
							      <div class="card-body">
                                <h5 class="card-title">Accueil</h5>
                        
							
							
				
                    <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Listes des sorties</h5>
                                        <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             




												<th>Date BS</th>
												 <th>N° BS</th>
                                            
                                                <th>Quantité</th>
                                                <th>Matériel</th>
                                                <th>Destinataire</th>
                                                <th>Envoyé par</th>
                                                <th>Chauffeur</th>
                                                <th>Réceptionné par</th>
                                                <th>Provenance</th>                                         
                                            <th style="min-width: 100px;">Action</th>
                                             </tr>
                                            </thead>
                                            <tbody>
															
								
									
							

@foreach ($ajoutersortiesall as $listepiec)
 

 <tr>
												<th scope="row">{{ $listepiec->updated_at }}</th>
												<th scope="row">0000{{ $listepiec->id }}</th>
                                           
                                                <td>{{$listepiec->quan}}</td>
                                                <td>{{$listepiec->code_mat}}</td>
                                                <td>{{$listepiec->dest}}</td>
                                                <td>{{$listepiec->envoye}}</td>
                                                <td>{{$listepiec->chauf}}</td>
                                                <td>{{$listepiec->rec}}</td>
                                         
                                                <td>{{$listepiec->proo}}</td>
                                           
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



