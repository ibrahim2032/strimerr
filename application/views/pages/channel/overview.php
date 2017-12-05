<?php if($this->session->userdata('login')){ ?>
<?php $this->load->view('layout/channel_header'); ?>
                            <div class="row row-sm">
<?php foreach($albums as $album){ ?>
                                <div class="col-sm-12">
                                    <section class="panel panel-default">
                                        <header class="panel-heading">Album Name: <?php echo $album->album; ?> </header>
                                        <table class="table table-striped m-b-none">
                                            <thead>
                                                <tr>
                                                    <th>Song Title</th>
                                                    <th>Price</th>
                                                    <th>by</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
            <?php foreach($album->musics as $music){ ?>
                                                <tr>
                                                    <td><?php echo $music->name; ?></td>
                                                    <td>&#8358; <?php echo $music->price; ?></td>
                                                    <td><?php echo $music->artists; ?></td>
                                                    <td>
                                                        <a style="padding:0 5%" title="Play"><i class="icon-control-play"></i></a>
                                                        <a style="padding:0 5%" title="Download"><i class="icon-cloud-download"></i></a>
                                                        <a style="padding:0 5%" title="Add to Playlist"><i class="icon-plus"></i></a>
                                                    </td>
                                                </tr>
            <?php } ?>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
<?php } ?>
                            </div>
                                        
						</section>
<?php } ?>