   <table class="mb-0 table table-hover" style="text-align:center">
                                            <thead>
                                            <tr>
                                             
                                             <th>Quantite</th>
                                             <th>Unite</th>
                                             <th>Article</th>
                                             <th>Description</th>
												
                                             </tr>
                                            </thead>
                                            <tbody>
											
										
											<?php
									
									foreach($interne as $item){
									foreach($item as $key){	?>
									
									  <tr>
                                           
                                             <th><?php echo $key['quantite']; ?></th>
                                             <th><?php echo $key['unite_']; ?></th>
                                             <th><?php echo $key['article_']; ?></th>
                                             <th><?php echo $key['description']; ?></th>
												
                                             </tr>
									<?php }} ?>	
	



								</tbody>
                                        </table>
										
					
