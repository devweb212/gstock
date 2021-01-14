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
                                    <div>BON DE TRANSFERT INTERNE</div>
                                </div>
                                <div class="page-title-actions">
                               
                                    <div class="d-inline-block dropdown">
									 <a href="/newBtinetrene" class="btn-shadow dropdown-toggle btn btn-warning">
  <span class="btn-icon-wrapper pr-2" style="font-weight: bold;">
                                               Synchronisation les Bon de Transfert
                                            </span>
                                         
                                        </a>
										
										
                                        <a href="#" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2" >
                                               Nombre de Bon de Transfert:
											   <div class="box bounce-2">
											   	<?php	
			$i=0;								
 foreach($bti_materiel as $item){
			if($item['valider']==0){
						$i++;	
			}
								}
				echo $i;
?>	
											   </div>
											    
                                            </span>
                                         
                                        </a>
										
									
									
                                       
									</div>
                                </div>    </div>
                        </div>         

						<div class="main-card mb-3 card">
                          
                       <div class="card-body">
                                <h5 class="card-title">Accueil</h5>
                        
							
							
				
                    <div class="col-lg-12">
                                <div class="main-card mb-3 card">
     <div class="card-body"><h5 class="card-title">LISTE LES BON DE TRANSFERT INTERNE</h5>
	<form action="/detailbti" method="post" class="needs-validation" novalidate>
								@csrf
<meta name="csrf-token" content="{{ csrf_token() }}">
							
                                        <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             




									
                                                <th>Date Enregistrement</th>
                                           
                                                <th>Numero Bon de Transfert</th>
                                                <th>Proprietaire</th>
                                                <th>Destination</th>
                                                <th>Détail</th>
                                            
												
                                             </tr>
                                            </thead>
                                            <tbody>
											
														
									
											
 @foreach($bti_materiel as $item)
			
					
<tr @if($item->valider==0) style="background: #e0f3ff;color: #000;" @endif >
		<th scope="row">{{$item->date_enregistrement}}</th>
		
		<th scope="row">{{$item->numero}} </th>
		<th scope="row" style="text-transform: uppercase;">{{$item->proprietaire}}	</th>
		<th scope="row"> 
				<button type="button" style="border: 0px;background: transparent;" data-toggle="tooltip" data-placement="top" title="{{$item->destination}}">
                    {{$item->destination}}
                </button>
		</th>
		<th scope="row"> 
				<button type="button" class="btn mr-2 mb-2 btn-primary dos_id" data-toggle="modal" data-target="#exampleModal" data-datac="{{$item->code}}">
                    Détail
                </button>
				
		</th>		
	@if($item->valider==0)									
	<th scope="row"> 
				<a href="/valideBtinetrene/{{$item->id}}" class="btn mr-2 mb-2 btn-primary" >
                    Valider
                </button>
				
		</th>	
     @endif                               

    </tr>		
				
@endforeach



								</tbody>
                                        </table>
								</form>		
									


<div class="modal fade bd-example-modal-lg"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Détail de BTI </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="rangeDetails">
			
               
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              
            </div>
        </div>
    </div>
</div>					
                                    </div>
                                </div>
                   </div>
				   </div>
				   </div>
                   </div>



@endsection
