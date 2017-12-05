
									  <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Privacy</header>
                                        <div class="panel-body">
                                          <form class="bs-example form-horizontal" local="<?php echo base_url('channel/setting'); ?>"  method="post" action="<?php echo base_url('channel/change_privacy'); ?>">
										  <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
											<div class="form-group">
    											<label class="col-sm-2 control-label">Lock Channel</label>
    											<div class="col-sm-6">
    												<label class="switch">  
    													<input id="privacy" name="privacy" value="<?php echo $header->channel->privacy; ?>" type="checkbox" <?php echo($header->channel->privacy == 1)? 'checked="checked"' : '' ?>/> <span></span>
                                                    </label>
    											</div>
    											<div class="col-sm-4">
    											     <button class="btn btn-sm btn-default change_setting">Change Privacy</button>
    											</div>
    										</div>
                                        </form>
									  </div>
                                    </section>
                                    
                                    