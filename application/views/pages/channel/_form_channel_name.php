
									  <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Channel Name</header>
                                        <div class="panel-body">
									       	<form class="bs-example form-horizontal" local="<?php echo base_url('channel/setting'); ?>"  method="post" action="<?php echo base_url('channel/change_name'); ?>">
											
                <?php
                 if($this->session->flashdata('name_error')){
                    echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('name_error'). '</div>' ;
                }
                 ?>
                                            <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
											<div class="form-group">
													<label class="col-lg-2 control-label">Channel Name</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter Channel Name" name="name" value="<?php echo $header->channel->name; ?>" /> 
                                                    </div>
												</div>
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
    											     <button class="btn btn-sm btn-default change_setting">Change Name</button>
													</div>
												</div>
											</form>
                                         </div>
                                    </section>
                                    
