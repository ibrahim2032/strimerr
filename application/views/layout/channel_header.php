
                            <div class="row" style="padding: 10px 0 40px 0;">
                                <div class="col-lg-12">
                                    <section class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="clearfix text-center m-t">
                                                <div class="inline">
                                                    <div>
                                                        <div class="thumb-lg"> <img src="<?php echo($header->channel->picture)? base_url('uploads/channel/'.$header->channel->picture) : base_url('uploads/channel/no-image.png'); ?>" class="img-circle" alt="..."> </div>
                                                    </div>
                                                    
                                                    <div class="h4 m-t m-b-xs"><?php echo $header->channel->name; ?></div> <small class="text-muted m-b">@<?php echo $header->channel->channel; ?></small> </div>
                                                    <div class="clearfix"></div>
                                                    <form class="bs-example form-horizontal" local="<?php echo base_url('channel/overview'); ?>"  method="post" action="<?php echo base_url('follow/follow/'.$header->channel->channel_id); ?>">
											          <?php echo($header->follow == 1)? '<input type="hidden" name="follow" value="0" /><button class="btn btn-md btn-default change_setting"> Unfollow</button>' : '<input type="hidden" name="follow" value="1" /><button class="btn btn-md btn-info change_setting"> Follow</button>' ?>
                                                    </form>
                                                    
                                            </div>
                                        </div>
                                        <footer class="panel-footer bg-info text-center">
                                            <div class="row pull-out">
                                                <div class="col-xs-4">
                                                    <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php echo $header->music_count; ?></span> <small class="text-muted">Songs</small> </div>
                                                </div>
                                                <div class="col-xs-4 dk">
                                                    <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php echo $header->follower_count; ?></span> <small class="text-muted">Followers</small> </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php echo($header->stream_count[0]->hit != '')? $header->stream_count[0]->hit : '0'; ?></span> <small class="text-muted">Streams</small> </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>
                            </div>
                        