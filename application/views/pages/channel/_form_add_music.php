
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Add Music</header>
                                        <div class="panel-body">
									       	<form class="bs-example form-horizontal" enctype="multipart/form-data" local="<?php echo base_url('channel/setting'); ?>"  method="post" localaction="<?php echo base_url('music/add'); ?>">
											
                <?php
                 if($this->session->flashdata('add_music_error')){
                    echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('add_music_error'). '</div>' ;
                }
                 ?>
                                            <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
											
												<div class="form-group">
													<label class="col-lg-2 control-label">Song Title</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter Title" name="title" required="" /> </div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Album</label>
													<div class="col-sm-5">
                                                            <select class="form-control" id="album_id" name="album_id">
                                    <?php foreach($albums as $album){ ?>
                                                                <option value="<?php echo $album->album_id; ?>"><?php echo $album->album; ?></option>
                                    <?php } ?>
                                                            </select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Upload Audio</label>
													<div class="col-sm-10">
                                                    <input type="file" id="userfile" class="form-control" name="userfile" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Artists</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter All Artists" name="artists" required=""/> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Song Genre</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter Genre" name="genre" required=""/> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Set Price</label>
													<div class="col-lg-5">
														<input type="number" class="form-control" placeholder="Enter Price" name="price" required=""/> </div>
												</div>
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
    											     <button class="btn btn-sm btn-default" id="change_setting_file">Add Audio</button>
													</div>
												</div>
											</form>
                                       
                                        </div>
                                    </section>
									