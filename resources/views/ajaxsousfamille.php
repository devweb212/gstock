<div id="msgsfmaillee">	
<label for="validationCustom044">Sous Famille</label>	
						
			<select  data-live-search="true"  name="id_sfamille" title="Please select fruit" data-live-search-placeholder="Recherche "  class="form-control selectpicker sfamille" required>
		<?php
		foreach ($sous_famille as $item){?>
		 <option value="<?php echo $item["id"]; ?>"><?php echo $item["sousfamille"]; ?></option>;
		<?php }	?>		
			</select>                                    
		</div>	