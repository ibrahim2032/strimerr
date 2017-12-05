                                <aside class="aside-lg bg-light lter b-r">
                                    <section class="vbox">
                                        <section class="scrollable">
                                            <div class="wrapper">
                                                <div class="text-center m-b m-t">
                                                    <a class="thumb-lg"> <img src="<?php echo($user->user->user_image)? base_url('uploads/profile/'.$user->user->user_image) : base_url('uploads/profile/no-image.png'); ?>" class="img-circle" /> </a>
                                                    <div>
                                                        <div class="h3 m-t-xs m-b-xs"><?php  echo $user->user->name; ?></div></div>
                                                </div>
                                                <div class="panel wrapper">
                                                    <div class="row text-center">
                                                        <div class="col-xs-6">
                                                            <a class="link" data-page="<?php echo base_url('user/playlist/'.$user->user->user_id); ?>" > <span class="m-b-xs h4 block"><?php echo count($user->playlist); ?></span> <small class="text-muted">Playlist</small> </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="link" data-page="<?php echo base_url('user/following/'.$user->user->user_id); ?>" > <span class="m-b-xs h4 block"><?php echo count($user->following); ?></span> <small class="text-muted">Following</small> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </section>
                                    </section>
                                </aside>