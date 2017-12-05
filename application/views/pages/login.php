<!DOCTYPE html>
<html lang="en" class="bg-info">

<head>
    <meta charset="utf-8" />
    <title>Strimerr | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url('js/jPlayer/jplayer.flat.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/app.v1.css'); ?>" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>


<body class="bg-info">
    <section id="content" class="wrapper-md animated fadeInUp">
        <div class="container"> 
			<span style="float:left; padding-left:20px"><img src="images/logo1.png" height="50px"></span>
            <section class="m-b-lg">
                <form class="form-inline"  action="<?php echo base_url('login'); ?>" method="post" style="float:right; padding:10x">
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="login" required="required"> 
					</div>
					<div class="form-group">
						<label class="sr-only" for="exampleInputPassword2">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"  name="password" required="required"> 
					</div>
					<button type="submit"  name="submit" class="btn btn-default">Sign in</button> 
				</form>
				<div class="clearfix"></div>
				<?php
					if($errors){
						echo '<div style="float:right; padding-right:10%; color:red; font-size:10px">'. $errors. '</div>' ;
					}
				?>
            </section>
        </div>
		<div class="container">
			<div class="container aside-xl" style="float:left; margin-top:20%;">
								
			
				<div id="jp_container_N">
					<div class="jp-type-playlist">
						<div id="jplayer_N" class="jp-jplayer hide"></div>
						<div class="jp-gui">
							<div class="jp-video-play hide"> <a class="jp-video-play-icon">play</a> </div>
							<div class="jp-interface">
								<div class="jp-controls">
									<div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
									<div> <a class="jp-play"><i class="icon-control-play i-2x"></i></a> <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a> </div>
									<div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
									<div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
									<div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
									<div class="jp-progress hidden-xs">
										<div class="jp-seek-bar dk">
											<div class="jp-play-bar bg-info"> </div>
											<div class="jp-title text-lt">
												<ul>
													<li></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
									<div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
									<div class="hidden-xs hidden-sm"> <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a> <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a> </div>
									<div class="hidden-xs hidden-sm jp-volume">
										<div class="jp-volume-bar dk">
											<div class="jp-volume-bar-value lter"></div>
										</div>
									</div>
									<div> <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a> <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a> </div>
									<div> <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a> <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a> </div>
									<div class="hide"> <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a> <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a> </div>
								</div>
							</div>
						</div>
						<div class="jp-playlist dropup" id="playlist">
							<ul class="dropdown-menu aside-xl dker">
								<!-- The method Playlist.displayPlaylist() uses this unordered list -->
								<li class="list-group-item"></li>
							</ul>
						</div>
					</div>
				</div>
								
			</div>
			<div class="container aside-xl" style="float:right; margin-top:40px; border: 2px #fff solid">
				<section class="m-b-lg" style="opacity:1">
					<header class="wrapper text-center"> <strong>Sign up now!!</strong> </header>
				<?php
					if($register_errors){
						echo '<div align="center" style="padding-right:10%; color:red; font-size:12px">'. $register_errors. '</div>' ;
					}
                    echo ($this->session->flashdata('register_success'))? '<div align="center" class="alert alert-success">'.$this->session->flashdata('register_success').'</div>' : '';
            	?>
					<form action="<?php echo base_url('register'); ?>" method="post">
						<div class="form-group">
							<input type="text" name="name" placeholder="Name" class="form-control input-lg text-center no-border" required="requred" /> </div>
						<div class="form-group">
                            <span class="input-group-addon">@</span>
							<input type="text" name="username" placeholder="Username" class="form-control input-lg text-center no-border" required="requred" /> </div>
						<div class="form-group">
							<input type="email" name="email" placeholder="Email" class="form-control input-lg text-center no-border" required="requred" /> </div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Password" class="form-control input-lg text-center no-border" required="requred" /> </div>
						<div class="form-group">
							<input type="password" name="password2" placeholder="Confirm Password" class="form-control input-lg text-center no-border" required="requred" /> </div>
						<div class="checkbox i-checks m-b">
							<label class="m-l">
								<input type="checkbox" checked="" required="required" /><i></i> Agree the <a href="#">terms and policy</a> </label>
						</div>
						<button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
						<div class="line line-dashed"></div>
					</form>
					<h4 class="text-center" style="margin-top:10px">OR</h4>
					<a href="#" class="btn btn-primary btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> 
					<a href="#" class="btn btn-info btn-block m-b-sm b-white b-1x"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a> 
					<a href="#" class="btn btn-danger btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google+</a> 
				</section>
			</div>
		</div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">
            <p> <small>Designed by jimadosh group <br>&copy; 2017</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jPlayer/jquery.jplayer.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jPlayer/add-on/jplayer.playlist.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jPlayer/demo.js'); ?>"></script>
</body>


</html>