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
            <div>AJOUTER UNE FAMILLE
            </div>
         </div>
         <div class="page-title-actions">
            <div class="d-inline-block dropdown">
               <a href="/listefamille" class="btn-shadow dropdown-toggle btn btn-info">
               <span class="btn-icon-wrapper pr-2 opacity-7">
               </span>
               Listes des familles
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="main-card mb-3 card">
      <div class="card-body">
         <h5 class="card-title">Ajouter une sous Famille</h5>
         <form action="/newFamille" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-row">
               <div class="col-md-12 mb-12">
                  <label for="validationCustom01">
                  Nom de sous Famille
                  </label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Nom de sous Famille" value=""  name="famille" required>
                  <div class="valid-feedback">
                     Looks good!
                  </div>
               </div>
            </div>

			</br>
            <button class="btn btn-primary" type="submit">AJOUTER UNE SOUS FAMILLE</button>
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
                  <h5 class="card-title">LISTE DES PIÈCES</h5>
                  <table class="mb-0 table table-hover" style="text-align:center">
                     <thead>
                       
                           <th>Date Ajouter</th>
                           <th>Famille</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
        @foreach ($famille as $item)     
			<tr>		
						   <td>{{ $item->created_at->format('Y-m-d') }}</td>
                           <td>{{ $item->famille }}</td>
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