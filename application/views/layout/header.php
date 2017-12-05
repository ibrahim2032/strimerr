<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>strimerr | Web Application</title>
    <meta name="description" content="strimerr, Nigeria's no.1 music streaming application" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url('js/jPlayer/jplayer.flat.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('css/app.v1.css" type="text/css'); ?>" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->


    <!--dynamic table-->
     <script src="<?php  echo base_url('js/jquery.min.js'); ?>"></script>
    
    <link rel="stylesheet" href="<?php  echo base_url('assets/datatable/datatables.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>

    <!-- facebook -->
      <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Your Website Title" />
      <meta property="og:description"   content="Your description" />
      <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
   


</head>

<body class="">

 <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
<script>
  (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

    <section class="vbox">
        <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
            <div class="navbar-header aside bg-info nav-xs">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="icon-list"></i> </a>
                <a data-page="<?php echo base_url('home/explore'); ?>"  class="navbar-brand text-lt link"> <img src="images/logosign.png" alt="."> <span class="hidden-nav-xs"> <img src="images/logotext.png" alt="."> </span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="icon-settings"></i> </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> <i class="fa fa-indent text"></i> <i class="fa fa-dedent text-active"></i> </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button> </span>
                        <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, channels, people"> </div>
                </div>
            </form>
            <div class="navbar-right ">
                <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown"> <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> <img src="<?php echo($user->user_image)? base_url('uploads/profile/'.$user->user_image) : base_url('uploads/profile/no-image.png'); ?>" alt="..."> </span> <?php echo $this->session->userdata('name'); ?> <b class="caret"></b> </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <li> <span class="arrow top"></span> <a class="link" data-page="<?php echo base_url('user/setting'); ?>" >Settings</a> </li>
                            <li> <a class="link" data-page="<?php echo base_url('user/profile'); ?>" >Profile</a> </li>
                            <li>
                                <a class="link" data-page="<?php echo base_url('channel/analysis'); ?>" > Dashboard </a>
                            </li>
                            <li> <a> Support</a> </li>
                            <li class="divider"></li>
                            <li> <a href="<?php echo base_url('logout'); ?>">Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black dk nav-xs aside hidden-print" id="nav">
                    <section class="vbox">
                        <section class="w-f-md scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav bg clearfix">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Explore </li>
                                        <li>
                                            <a class="link" data-page="<?php echo base_url('home/explore'); ?>" > <i class="icon-disc icon text-success"></i> <span class="font-bold">Explore</span> </a>
                                        </li>
                                        <li>
                                            <a class="link" data-page="<?php echo base_url('home/top'); ?>"> <i class="icon-badge icon text-info"></i> <span class="font-bold">Top Rated</span> </a>
                                        </li>
                                        <li>
                                            <a class="link" data-page="<?php echo base_url('home/newsongs'); ?>"> <i class="icon-music-tone-alt icon text-primary-lter"></i> <span class="font-bold">New Songs</span> </a>
                                        </li>
                                        <li class="m-b hidden-nav-xs"></li>
                                    </ul>
                                    <ul class="nav" data-ride="collapse">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Dashboard </li>
                                        <li>
                                            <a class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-user icon"> </i> <span>Profile</span> </a>
                                            <ul class="nav dk text-sm">
                                                <li>
                                                    <a class="link" data-page="<?php echo base_url('user/profile'); ?>" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Profile</span> </a>
                                                </li>
                                                <li>
                                                    <a class="link" data-page="<?php echo base_url('user/setting'); ?>" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Setting</span> </a>
                                                </li>
                                                <li>
                                                    <a class="link" data-page="<?php echo base_url('user/playlist'); ?>" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Playlists</span> </a>
                                                </li>
                                                <li>
                                                    <a class="link" data-page="<?php echo base_url('user/following'); ?>" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Following</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="auto link" data-page="channel"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-screen-desktop icon"> </i> <span>Channel</span> </a>
                                            <ul class="nav dk text-sm">
                                                <li>
                                                    <a class="auto link" data-page="<?php echo base_url('channel/overview'); ?>" > <i class="fa fa-angle-right text-xs"></i> <span>Channel</span> </a>
                                                </li>
                                                <li>
                                                    <a class="auto link" data-page="<?php echo base_url('channel/setting'); ?>"> <i class="fa fa-angle-right text-xs"></i> <span>Setting</span> </a>
                                                </li>
                                                <li>
                                                    <a class="auto link" data-page="<?php echo base_url('channel/monetize'); ?>"> <i class="fa fa-angle-right text-xs"></i> <span>Monetize</span> </a>
                                                </li>
                                                <li>
                                                    <a class="auto link" data-page="<?php echo base_url('channel/campaign'); ?>"> <i class="fa fa-angle-right text-xs"></i> <span>Campaign</span> </a>
                                                </li>
                                                <li>
                                                    <a class="auto link"  data-page="<?php echo base_url('channel/analysis'); ?>"> <i class="fa fa-angle-right text-xs"></i> <span>Analysis</span> </a>
                                                </li>
                                                <li>
                                                    <a class="auto link"  data-page="<?php echo base_url('channel/follower'); ?>"> <i class="fa fa-angle-right text-xs"></i> <span>followers</span> </a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav bg text-sm">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> <span class="pull-right"><a href="#"><i class="icon-plus i-lg"></i></a></span> Playlist </li>
                        <?php foreach($playlists as $playlist){ ?>
                                        <li>
                                            <a > <i class="icon-playlist icon text-success-lter"></i> <span><?php echo $playlist->name?></span> </a>
                                        </li>
                        <?php } ?>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="hbox stretch">
                    
                        <section>
                            <section class="vbox">
                                <section class="scrollable padder-lg w-f-md" id="content_area"> 