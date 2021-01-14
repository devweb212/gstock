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
                                            AJOUTER UNE Articles
                                        </a>
                                     

								  </div>
                                </div>    </div>
                        </div>           

						<div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Accueil</h5>
                        
							
							
				
                    <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">LISTE DES ARTICLES</h5>
                                        <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             




												<th>Date BL</th>
                                                <th>Article</th>
                                                <th>Quantité</th>
                                                <th>Référence</th>
                                                <th>N° BL</th>
                                               
                                                <th>Fournisseur</th>
                                                <th>Unite</th>
                                                <th>Equivalent</th>
                                                <th>Observation</th>
                                                <th>Type</th>
                                            <th style="min-width: 100px;">Action</th>
                                             </tr>
                                            </thead>
                                            <tbody>
											
											@foreach ($listepieces as $listepiec)
 

 <tr>
												<th scope="row">{{ $listepiec->created_at->format('Y-m-d') }}</th>
                                                <th scope="row">  {{$listepiec->name_piece}}</th>
                                                <td>{{$listepiec->quantite}}</td>
                                                <td>{{$listepiec->refer}}</td>
                                                <td>{{$listepiec->bl}}</td>
											
                                                <td>{{$listepiec->forn}}</td>
                                                <td>{{$listepiec->unite}}</td>
                                                <td>{{$listepiec->equiv}}</td>
												<td>{{$listepiec->obser}}</td>
                                                <td>{{$listepiec->typeb}}</td>
<td><?php echo '<a href="data:image/png;base64,' . DNS1D::getBarcodePNG(request()->id, "C39+",3,70) . '"  download="CodeBar_'.$listepiec->name_piece.'_'.$listepiec->refer.'"><i class="fa fa-download icon-gradient bg-malibu-beach"> </i> </a>';?>

	<i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>                                                                                            			
<a href="/print-pdf/{{$listepiec->id}}"><i class="fa fa-fw" aria-hidden="true" title="Copy to use print"></i></a>                                                          
							
								
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
