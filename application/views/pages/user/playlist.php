 <?php if($this->session->userdata('login')){ ?>
    <section class="hbox stretch" style="padding-top: 10px;">
        <?php $this->load->view('layout/profile_side'); ?>
                                <aside>
                                    <section class="vbox">
                                        <section class="scrollable">
                                            <div class="col-lg-12" style="padding-top: 15px;">
												<div class="row row-sm">
					<?php foreach($user->playlist as $playlist){ ?>
													<div class="col-sm-12">
														<section class="panel panel-default">
															<header class="panel-heading"><?php echo $playlist->name; ?> </header>
															<table class="table table-striped m-b-none">
																<thead>
																	<tr>
																		<th>Song Title</th>
																		<th>by</th>
                                <?php if($this->session->userdata('user_id')== $user->user->user_id){ ?>
																		<th>Option</th>
                                <?php } ?>
																	</tr>
																</thead>
																<tbody> 
								<?php foreach($playlist->musics as $music){ ?>
																	<tr>
																		<td><?php echo $music->name; ?></td>
																		<td><?php echo $music->artists; ?></td>
                                <?php if($this->session->userdata('user_id')== $user->user->user_id){ ?>
																		<td>
																			<a style="padding:0 5%" title="Play"><i class="icon-control-play"></i></a>
																			<a style="padding:0 5%" title="Remove"><i class="icon-close"></i></a>
																		</td>
                                <?php } ?>
																	</tr>
								<?php } ?>
																</tbody>
															</table>
														</section>
													</div>
					<?php } ?>
												</div>
										   </div>
										   
                                        </section>
                                    </section>
                                </aside>
                                
                                <?php if($this->session->userdata('user_id')== $user->user->user_id){ ?>
                                <aside class="col-lg-3 b-l">
                                    <section class="vbox">
                                        <section class="scrollable padder-v">
                                            
										   <div style="padding-top: 15px;" >
											  <section class="panel panel-default">
												<header class="panel-heading font-bold">Create Playlist</header>
												<div class="panel-body">
													<form class="bs-example form-horizontal" local="<?php echo base_url('user/playlist'); ?>"  method="post" action="<?php echo base_url('playlist/add'); ?>">
													
						<?php
						 if($this->session->flashdata('playlist_error')){
							echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('playlist_error'). '</div>' ;
						}
						 ?>
													<p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
													<div class="form-group">
															<label class="col-lg-2 control-label">Title</label>
															<div class="col-lg-10">
																<input type="text" class="form-control" placeholder="Playlist Title" name="name"/> 
															</div>
														</div>
														<div class="form-group">
															<div class="col-lg-offset-2 col-lg-10">
															 <button class="btn btn-sm btn-default change_setting">Create Playlist</button>
															</div>
														</div>
													</form>
												 </div>
											</section>
										   </div>
                                        </section>
                                    </section>
                                </aside>
                            <?php } ?>
                            </section>
                        </section>
<?php } ?> 