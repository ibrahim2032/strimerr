<?php if($this->session->userdata('login')){ ?>
    <section class="hbox stretch" style="padding-top: 10px;">
    <?php $this->load->view('layout/profile_side'); ?>
                                <aside>
                                    <section class="vbox">
                                        <section class="scrollable">
                                            <div class="col-lg-12" style="padding-top: 15px;">
                                            
									  <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Profile Picture</header>
                                        <div class="panel-body">
											<form class="bs-example form-horizontal">
												<div class="form-group">
													<label class="col-sm-2 control-label">Upload Picture</label>
													<div class="col-sm-10">
														<input type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
														<div class="bootstrap-filestyle" style="display: inline;">
															<input type="text" class="form-control inline v-middle input-s" disabled="" />
															<label for="filestyle-0" class="btn btn-default"><span>Select New Picture</span></label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
														<button type="submit" class="btn btn-sm btn-default">Change Picture</button>
													</div>
												</div>
											</form>
                                       
									  </div>
                                    </section>
                                     
									  <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Contact Setting</header>
                                        <div class="panel-body">
                                      
											<form class="bs-example form-horizontal" local="<?php echo base_url('user/setting'); ?>"  method="post" action="<?php echo base_url('user/change_contact'); ?>">
                <?php
                 if($this->session->flashdata('contact_error')){
                    echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('contact_error'). '</div>' ;
                }
                 ?>
                                            <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
												<div class="form-group">
													<label class="col-lg-2 control-label">Email</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php  echo $user->user->email; ?>" readonly="readonly" /> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Phone</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter phone" name="phone" value="<?php  echo $user->user->phone; ?>" /> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">City</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter city" name="city" value="<?php  echo $user->user->city; ?>" /> </div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Country</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" placeholder="Enter country" name="country" value="<?php  echo $user->user->country; ?>" /> </div>
												</div>
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
    											     <button class="btn btn-sm btn-default change_setting">Update Contact</button>
													</div>
												</div>
											</form>
									  </div>
                                    </section>
                                    
                                        <section class="panel panel-default">
                                            <header class="panel-heading font-bold">Personal Setting</header>
                                            <div class="panel-body">
    											               
    											<form class="bs-example form-horizontal" local="<?php echo base_url('user/setting'); ?>"  method="post" action="<?php echo base_url('user/change_personal'); ?>">
                    <?php
                     if($this->session->flashdata('personal_error')){
                        echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('personal_error'). '</div>' ;
                    }
                     ?>
                                                <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Name</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="Enter Name" name="name"  value="<?php  echo $user->user->name; ?>"/> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Username</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="Enter Username" name="username"  value="@<?php  echo $user->user->username; ?>" readonly="readonly" /> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">A.K.A</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="Also Known As" name="stage_name"  value="<?php  echo $user->user->stage_name; ?>"/> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Place of Origin</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="e.g Abuja" name="origin"  value="<?php  echo $user->user->origin; ?>"/> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Birthday</label>
    													<div class="col-lg-8">
                                                            <input type="text" class="form-control" placeholder="DD - MM - YYYY" name="birthday" value="<?php  echo $user->user->birthday; ?>"/> </div>
                                                    </div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Gender</label>
    													<div class="col-lg-10">
    														
                                                            <div class="radio i-checks">
                                                                <label>
                                                                    <input type="radio" name="gender" value="male" <?php  echo($user->user->gender == 'male')? 'checked' : ''; ?> /> <i></i> Male </label>
                                                            </div>
                                                            <div class="radio i-checks">
                                                                <label>
                                                                    <input type="radio" name="gender" value="female"  <?php  echo($user->user->gender == 'female')? 'checked' : ''; ?> /> <i></i> Female </label>
                                                            </div>
    													</div>
    												</div>
    												<div class="form-group">
    													<div class="col-lg-offset-2 col-lg-10">
        											     <button class="btn btn-sm btn-default change_setting">Update Personal Setting</button>
    													</div>
    												</div>
    											</form>
                                           
                                            </div>
                                        </section>
									       
                                        <section class="panel panel-default">
                                            <header class="panel-heading font-bold">Career Set-Up</header>
                                            <div class="panel-body">
                                            
    											<form class="bs-example form-horizontal" local="<?php echo base_url('user/setting'); ?>"  method="post" action="<?php echo base_url('user/career_set'); ?>">
                    <?php
                     if($this->session->flashdata('career_error')){
                        echo '<div style="color: #4cb6cb; font-size: 11px;" align="center">'. $this->session->flashdata('career_error'). '</div>' ;
                    }
                     ?>
                                                <p style="color: #4cb6cb; font-size: 11px;" align="center" class="update_loading"></p>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Genre</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="Enter genre" name="genre"  value="<?php  echo $user->user->genre; ?>"/> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Occupation</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="e.g Music Producer/Director" name="occupation"  value="<?php  echo $user->user->occupation; ?>" /> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Instruments</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="e.g Drums, Sax, Vocal" name="instrument"  value="<?php  echo $user->user->instrument; ?>"/> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Active Years</label>
    													<div class="col-lg-10">
    														<input type="text" class="form-control" placeholder="e.g 2001 - 2012" name="active_time"  value="<?php  echo $user->user->active_time; ?>"/> </div>
    												</div>
    												<div class="form-group">
    													<label class="col-lg-2 control-label">Company</label>
    													<div class="col-lg-8">
                                                            <input type="text" class="form-control" placeholder="e.g Strimerr Music Label" name="company" value="<?php  echo $user->user->company; ?>"/> </div>
                                                    </div>
    												<div class="form-group">
    													<div class="col-lg-offset-2 col-lg-10">
        											     <button class="btn btn-sm btn-default change_setting">Setup Career</button>
    													</div>
    												</div>
    											</form>
                                           
                                            </div>
                                        </section>
									       
                                            </div>
                                        </section>
                                    </section>
                                </aside>
                            </section>
                        </section>
<?php } ?>