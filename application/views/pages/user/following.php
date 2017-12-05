 <?php if($this->session->userdata('login')){ ?>
    <section class="hbox stretch" style="padding-top: 10px;">
        <?php $this->load->view('layout/profile_side'); ?>
                                <aside>
                                    <section class="vbox">
                                        <section class="scrollable">
                                            <div class="col-lg-12" style="padding-top: 15px;">
                                           

												<div class="row row-sm">
													<div class="col-sm-12">
														<section class="panel panel-default">
															<header class="panel-heading">Following</header>
															<table class="table table-striped m-b-none">
																<thead>
																	<tr>
																		<th>Channel</th>
																		<th>handle</th>
                                <?php if($this->session->userdata('user_id')== $user->user->user_id){ ?>
																		<th>Unfollow</th>
                                <?php } ?>
																	</tr>
																</thead>
																<tbody> 
								<?php foreach($following as $channel){ ?>
																	<tr>
																		<td><?php echo $channel->name; ?></td>
																		<td><a class="auto link" data-page="<?php echo base_url('channel/overview/'.$channel->channel_id); ?>">@<?php echo $channel->channel; ?></a></td>
                                <?php if($this->session->userdata('user_id')== $user->user->user_id){ ?>
																		<td>
                                                    <form class="bs-example form-horizontal" local="<?php echo base_url('user/following'); ?>"  method="post" action="<?php echo base_url('follow/follow/'.$channel->channel_id); ?>">
											          <input type="hidden" name="follow" value="0" /><button class="btn btn-md btn-default change_setting"> Unfollow</button>
                                                    </form>
																		</td>
                                <?php } ?>
																	</tr>
								<?php } ?>
																</tbody>
															</table>
														</section>
													</div>
												</div>

										   </div>
                                        </section>
                                    </section>
                                </aside>
                            </section>
                        </section>
<?php } ?> 