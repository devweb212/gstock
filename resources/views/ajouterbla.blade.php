
<div id="msgs" style="@if ($count==1) 
	border: 2px solid #3f6ad8;
    padding: 10px;
    background: #3f6ad8;
    color: #fff;
    margin-top: 20px; @endif
	@if ($count==2) border: 2px solid #3f6ad8;
    padding: 10px;
    background: #fff; @endif">
   <input type="hidden" class="form-control" name='id[]' value="{{$ajouterpieces->id}}" >
   <div class="form-row">
      <div class="col-md-3 mb-3">
         <label for="validationCustom01">
         Article 
         </label>
         <input type="text" class="form-control" id="validationCustom02" placeholder="Désignation" value="{{$ajouterpieces->name_piece}}" name="name_piece" required disabled>
         
      </div>
      <div class="col-md-3 mb-3">
         <label for="validationCustom02">Stock</label>
         <input type="number" class="form-control" id="stock"  placeholder="Stock" value="{{$ajouterpieces->inventaire}}"  required disabled>
      
      </div>
      <div class="col-md-3 mb-3">
         <label for="validationCustomUsername">Référence</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Référence" value="{{$ajouterpieces->ref}}" aria-describedby="inputGroupPrepend" name="refer" required disabled>
           
         </div>
      </div>
	   <div class="col-md-3 mb-3">
         <label for="validationCustom04">Unite</label>
<input type="text" class="form-control" id="validationCustom04" placeholder="Unite" name="unite" value="{{$ajouterpieces->unite}}" required disabled>
        
      </div>
	  
   </div>
   <div class="form-row">
     <div class="col-md-4 mb-3">
         <label for="validationCustom02">Quantité</label>
         <input type="number" class="form-control" id="quan" placeholder="Quantité" value=""  name="quantite[]" required>
        
      </div>
      <input type="hidden" class="form-control" id="validationCustom02" placeholder="Equivalent" value="0" name="equiv"  disabled>
   </div>
</div>

<hr style="  border-top: 1px dashed #000;">