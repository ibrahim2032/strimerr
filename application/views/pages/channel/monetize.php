<?php if($this->session->userdata('login')){ ?>
<?php $this->load->view('layout/channel_header'); ?>

                              <div class="row">
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Update Account</header>
                                        <div class="panel-body">
											<form class="bs-example form-horizontal" local="<?php echo base_url('channel/monetize'); ?>"  method="post" action="<?php echo base_url('channel/update_account'); ?>">									
                <?php
                 if($this->session->flashdata('account_error')){
                    echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('account_error'). '</div>' ;
                }
                 ?>
                                            <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
                                            <input type="hidden" name="new" value="<?php echo(isset($account->account_id))? $account->account_id : '' ;?>" />
												<div class="form-group">
													<label class="col-lg-2 control-label">Bank Name</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter Bank" name="bank_name" value="<?php echo $account->bank_name?>" /> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Account Holder</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter Account Name" name="account_name" value="<?php echo $account->account_name?>" /> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Account Name</label>
													<div class="col-lg-10">
														<input type="number" class="form-control" placeholder="Enter Account Number" name="account_number" value="<?php echo $account->account_number?>"  /> </div>
												</div>
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
														<button class="btn btn-sm btn-default change_setting">Update Account</button>
													</div>
												</div>
											</form>
                                       
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
										<header class="panel-heading font-bold">
											Financial
										</header>
										<div class="panel-body">
                                            <div class="clearfix">
                                                <div class="h3 m-t-xs m-b-xs"> &#8358; 75,000 <a class="btn btn-md btn-default pull-right">Cash Out</a> </div> <small class="text-muted">Total Earning</small> 
                                            </div>
                                        </div>
									</section>
           
                                </div>
                            </div>
                                         
										   
										   
						</section>
<?php } ?>