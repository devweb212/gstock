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
                                    <div>LISTE DES ARTICLES
                                     
                                        
                                        
                                    </div>
                                </div>
                                <div class="page-title-actions">
                               
                                    <div class="d-inline-block dropdown">
                                        <a href="/addpieces" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                               
                                            </span>
                                          Ajouter un Article 
                                        </a>
                                       
									</div>
                                </div>    </div>
                        </div>         

						<div class="main-card mb-3 card">
                            <div class="card-body">
                        
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
                                    <div class="card-body"><h5 class="card-title">LISTE DES ARTICLES</h5>
                                        <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             




									
                                                <th>Date Ajouter</th>
                                                <th>Désignation</th>
                                                <th>Quantité</th>
                                                <th>Référence</th>
												<th>Unite</th>
												<th>Action</th>
                                             
                                             </tr>
                                            </thead>
                                            <tbody>
											
											@foreach ($listeInvpieces as $listepiec)
 

 <tr>
												<th scope="row">{{ $listepiec->created_at->format('Y-m-d') }}</th>
                                                <th scope="row">  {{$listepiec->name_piece}}</th>
                                                <td>{{$listepiec->inventaire}}</td>
                                                <td>{{$listepiec->ref}}</td>
 <td>
 {{$listepiec->unite}}

 </td>
       <td><?php echo '<a href="data:image/png;base64,' . DNS1D::getBarcodePNG(request()->id, "C39+",3,70) . '"  download="CodeBar_'.$listepiec->name_piece.'_'.$listepiec->ref.'"><i class="fa fa-download icon-gradient bg-malibu-beach"> </i> </a>';?>

	<i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>                                                                                            			
							
								
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
