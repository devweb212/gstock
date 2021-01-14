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
                                    <div>AJOUTER UN ARTICLE
                                     
                                        
                                        
                                    </div>
                                </div>
                                <div class="page-title-actions">
                               
                                    <div class="d-inline-block dropdown">
                                        <a href="/home" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                               
                                            </span>
                                           Listes des articles
                                        </a>
                                       
									</div>
                                </div>    </div>
                        </div>            <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Ajouter un article</h5>
                              
								<form action="/addpiecesc" method="post" class="needs-validation" novalidate>
								@csrf
								<meta name="csrf-token" content="{{ csrf_token() }}">
                                    <div class="form-row">
                                         <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">
											
											Article
											
											</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nom d'article" value=""  name="name_piece" required>
                                           
                                        </div>
                                        <input type="hidden" class="form-control" id="validationCustom02" value="0" name="quantite" >
                                        
									   <div class="col-md-3 mb-3">
                                            <label for="validationCustomUsername">Référence</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Référence" aria-describedby="inputGroupPrepend" name="refer" required>
                                               
                                            </div>
                                        </div>
						 <div class="col-md-3 mb-3">
        <label for="validationCustomUsername">Quantité Initiale</label>
                                            <div class="input-group">
       
        <input type="number" class="form-control" id="validationCustomUsername" placeholder="Quantité Initiale" aria-describedby="inputGroupPrepend" name="inventaire" required>
                                               
                                            </div>
                          </div>				
					    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Unite</label>
                                            
                      <select class="mb-2 form-control" name="unite" required>
								<option value="U">U</option>                                                 
								 <option value="Kg">Kg</option>
								 <option value="L">L</option>
								 <option value="M">M</option>
								 <option value="M">M2</option>
								 <option value="M3">M3</option>
								 <option value="PQT">PQT</option>
								 <option value="Boite">Boite</option>
								 <option value="RLX">RLX</option>
								 <option value="SAC">SAC</option>
								 <option value="Seau">Seau</option>
								 <option value="KIT">KIT</option>
								 <option value="JEU">JEU</option>
								 <option value="Cm">Cm</option>
								 <option value="Mm">Mm</option>
								 <option value="Gr">Gr</option>
								 <option value="Baril">Baril</option>   
                       </select>
						</div>
						<div class="col-md-4 mb-3">
								<label for="validationCustom044">Famille</label>										
								<select  data-live-search="true"  id="id_famille" name="id_famille" title="Please select fruit" data-live-search-placeholder="Recherche "  class="form-control selectpicker" required>
								<option value="" selected>....</option>									   
								  @foreach ($famille as $item)
									 <option value="{{ $item->id }}">{{$item->famille}}</option>
									 @endforeach
								</select>       

				  
							</div>
						
	 <div class="col-md-4 mb-3">
		<div id="msgsfmaille">								
			<label for="validationCustom044">Sous Famille</label>								
			<select  data-live-search="true"  name="id_sfamille" title="Sous Famille" data-live-search-placeholder="Recherche "  class="form-control selectpicker sfamille" required>
			
			</select> 
		</div>						
				</div>	

	   <div class="col-md-4 mb-3">
						<label for="validationCustom044">Equivalent</label>									
						<select  data-live-search="true"  name="equiv" title="Please select fruit" data-live-search-placeholder="Recherche "  class="form-control selectpicker" required>
						<option value="" selected>....</option>									   
						@foreach ($listeInvpieces as $ajouterpieces)
						 <option value="{{ $ajouterpieces->id }}">{{$ajouterpieces->name_piece}}- {{$ajouterpieces->ref}}</option>
						@endforeach
						</select>
					
                         </div>				
							
				 </div>
				<button class="btn btn-primary" type="submit">Ajouter un article</button>
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
                                    <div class="card-body"><h5 class="card-title">LISTE DES PIÈCES</h5>
                                        <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             
                                                <th>Date Ajouter</th>
                                                <th>Article</th>
                                                <th>Quantité</th>
                                                <th>Référence</th>
												<th>Unite</th>
											
												<th>Famille </th>
												<th>Sous Famille </th>
												
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
										@endforeach	</td>
					
					
										
												
<td><?php echo '<a href="data:image/png;base64,' . DNS1D::getBarcodePNG(request()->id, "C39+",3,70) . '"  download="CodeBar_'.$listepiec->name_piece.'_'.$listepiec->ref.'"><i class="fa fa-download icon-gradient bg-malibu-beach"> </i> </a>';?>
	<a href="/addpieces/{{$listepiec->id}}"> 
	<i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>
	</a>                                                                                            			
							
								
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
