<div id="msgs" style="@if ($count==1) 
	border: 2px solid #3f6ad8;
    padding: 10px;
    background: #3f6ad8;
    color: #fff;
    margin-top: 20px; @endif
	@if ($count==2) border: 2px solid #3f6ad8;
    padding: 10px;
    background: #fff; @endif">
<div class="form-row">
<input type="hidden" class="form-control" name='id[]' value="{{$ajouterpieces->id}}" >
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">
											
									Article
											
											</label>
                                          
										 <input type="text" class="form-control" id="validationCustom02" placeholder="Nom de pièces " value="{{$ajouterpieces->name_piece}}" name="ref" disabled>
                                          
                                        </div>
										
										
									 <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Référence</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="référence" value="{{$ajouterpieces->ref}}" name="ref" disabled>
                                           
                                        </div>
										
										 <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Stock</label>
<input type="text" class="form-control" id="validationCustom02" placeholder="Quantité" value="{{$ajouterpieces->inventaire}}" name="quantite" disabled>
                                          
                                        </div>
									 <div class="col-md-3 mb-3">
                                          
											
											 <label for="validationCustom04">Unite</label>
<input type="text" class="form-control" id="validationCustom04" placeholder="Unite" name="unite"  value="{{$ajouterpieces->unite}}" disabled>
                                            
                                        </div>
                                    </div>
                                    <div class="form-row">
									
									<div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Quantité </label>
<input type="number" class="form-control" id="validationCustom02" placeholder="Quantité" value="" name="quan[]" max="{{$ajouterpieces->inventaire}}" required>

                                  
										 <div class="invalid-feedback" >
                                                 Merci de verifier la quantité?
                                         </div>	
                                        </div>

										
									 
                                       
                                      
                                    </div>
                                    </div>
									<hr style="  border-top: 1px dashed #000;">
									

			