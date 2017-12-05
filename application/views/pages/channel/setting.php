<?php if($this->session->userdata('login')){ ?>
<?php $this->load->view('layout/channel_header'); ?>
                        
                              <div class="row">
                                <div class="col-sm-6">
                                
                                <div id="add_music_section">
                                    <?php $this->load->view('pages/channel/_form_add_music'); ?>
                                </div>
                                <div id="privacy_section">
                                    <?php $this->load->view('pages/channel/_form_privacy'); ?>
                                </div>
                                <div id="channel_name_section">
                                    <?php $this->load->view('pages/channel/_form_channel_name'); ?>
                                </div>
									  <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Channel Picture</header>
                                        <div class="panel-body">
											<form class="bs-example form-horizontal">
												<div class="form-group">
													<label class="col-sm-2 control-label">Upload Picture</label>
													<div class="col-sm-10">
														<input type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
														<div class="bootstrap-filestyle" style="display: inline;">
															<input type="text" class="form-control inline v-middle input-s" disabled="">
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
                                </div>
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">All Songs </header>
                                        <table class="table table-striped m-b-none">
                                            <thead>
                                                <tr>
                                                    <th>Song Title</th>
                                                    <th>Price</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
            <?php foreach($musics as $music){ ?>
                                                <tr>
                                                    <td><?php echo $music->name; ?></td>
                                                    <td>&#8358; <?php echo $music->price; ?></td>
                                                    <td>
                                                        <a class="btn btn-rounded btn-sm btn-info" style="padding:2% 6%" title="Edit"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-rounded btn-sm btn-default" style="padding:2% 6%" title="Delete"><i class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
            <?php } ?>
                                            </tbody>
                                        </table>
                                    </section>
           
                                </div>
                            </div>
                                   		   
						</section>
<script>
$(document).ready(function() {
    
    $('#privacy').click(function(){
        var privacy = $("#privacy").val();
        var new_privacy = Math.abs(privacy - 1);
        $("#privacy").val(new_privacy);
    });
    
    $("#change_privacy").click(function() {
        var privacy = $("#privacy").val();
        var dataString = 'privacy=' + privacy;
        if (privacy == <?php echo $header->channel->privacy; ?>){
            $('#privacy_error').removeClass('hide');
        } else{
            $('#privacy_error').addClass('hide');
            $('#loading').show();
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('channel/change_privacy'); ?>",
              data: dataString,
              cache: false,
              success: function(result) {
                  alert(result);
              }
          });
          }
        return false;
    });
});
</script>
<?php } ?>