<?php if($this->session->userdata('login')){ ?>
<?php $this->load->view('layout/channel_header'); ?>
                        
                              <div class="row">
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Share Channel</header>
                                        <div class="panel-body">
                                        <!-- facebook -->
											<div class="fb-share-button" data-href="http://www.strimerr.com.ng/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore btn btn-primary" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.strimerr.com.ng&amp;src=sdkpreparse">Share Channel on Facebook</a></div>
                                            <div class="clearfix"></div>
                                        <!-- twitter -->
                                            <a class="twitter-share-button btn btn-default" target="twitter" style="padding-top: 12px; background-color: #1b95e0 !important; color: white !important;" href="https://twitter.com/intent/tweet?text=Strimmer%20music%20app" data-size="large">Tweet Channel on Twitter</a>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
										<header class="panel-heading font-bold">
											Promote Song
										</header>
										<div class="panel-body">
                                            
											<form class="bs-example form-horizontal">
                                            	<div class="form-group">
													<label class="col-lg-2 control-label">Song ID</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter Song ID" name="song_id" /> </div>
												</div>
                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Select Plan</label>
                                                    <div class="col-sm-10">
                                                        <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" name="duration" value="1" checked=""> <i></i>One day @ &#8358; 300 </label>
                                                        </div>
                                                        <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" name="duration" value="3"> <i></i> Three days @ &#8358; 700 </label>
                                                        </div>
                                                        <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" name="duration" value="7"> <i></i> Seven days @ &#8358; 1,500  </label>
                                                        </div>
                                                        <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" name="duration" value="30"> <i></i> Thirty days @ &#8358; 5,500  </label>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
														<button type="submit" class="btn btn-sm btn-default">Promote Song</button>
													</div>
												</div>
											</form>
                                       
                                        
                                        </div>
									</section>
           
                                </div>
                            </div>
                                         
										   
										   
						</section>
<?php } ?>