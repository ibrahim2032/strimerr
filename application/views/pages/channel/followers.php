<?php if($this->session->userdata('login')){ ?>
<?php $this->load->view('layout/channel_header'); ?>
                            <div class="row row-sm">
                                <div class="col-sm-12">
                                    <section>
									
						<?php foreach($followers as $follower){ ?>
										
                                                <div class="col-xs-4 col-sm-3">
                                                    <section class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="clearfix text-center m-t">
                                                                <a class="link" data-page="<?php echo base_url('user/profile/'.$follower->user_id); ?>" class="auto">
                                                                    <div class="thumb-lg"> <img src="<?php echo($follower->user_image)? base_url('uploads/profile/'.$follower->user_image) : base_url('uploads/profile/no-image.png'); ?>"  alt="..." style="height:80px !important" class="img-circle"/> </div>
                                                                    <div class="h4 m-t m-b-xs"><small class="text-muted m-b"><?php echo $follower->name; ?></small></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                        <?php } ?>                        
										
										
                                    </section>
                                </div>
                            </div>
                                        
						</section>
<?php } ?>