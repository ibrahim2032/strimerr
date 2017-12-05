  
<script>

$(document).ready(function(){

 $(document).on("click", ".change_setting", function(e)
{
    $(this).addClass('disabled');
    var formSubmitted = $(this).parents("form");
    var loadingDiv = $(formSubmitted).find(".update_loading");
  
	$(formSubmitted).submit(function(sub)
	{
		$(loadingDiv).html("loading...");
		var postData = $(this).serializeArray(); 
		var formURL = $(formSubmitted).attr("action");
        var local = $(formSubmitted).attr("local");   
                       
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
                if(data == 'success'){
                    $(loadingDiv).html("Operation Successfull");
                    $( "#content_area" ).load(local);
                }else{
				    $(loadingDiv).html(data);
                    $( "#content_area" ).load(local);
                }

			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$(loadingDiv).html('<div class="errors">Unable to carryout this function <br /> Please retry or contact the admin...</div>');
			}
		});  
        
	    e.preventDefault();	//STOP default action
	    e.unbind();
        e.stopPropagation();
		return False;
	});

	$(formSubmitted).submit(); //SUBMIT FORM
});

});

</script>
  
   </section>
		<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
		</section>
            </section>
        </section>
    </section>
    '<span class="musicbar animate inline m-l-sm" style="width:60px;height:30px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span></span>';
    <!-- Bootstrap -->
    <!-- App -->
    <script src="<?php echo base_url('js/app.v1.js'); ?>"></script>
    <script src="<?php echo base_url('js/app.plugin.js'); ?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('js/jPlayer/jquery.jplayer.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jPlayer/add-on/jplayer.playlist.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/datepicker/bootstrap-datepicker.js'); ?>"></script>
    
    <script type="text/javascript" src="<?php  echo base_url('assets/datatable/datatables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php  echo base_url('js/strimerr.js'); ?>"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

    
    
    
    
    
    <script>
	
$(document).ready(function(){

    $('#myTable').DataTable();
   
   $(document).on("click", ".link", function(){
        var page = $(this).data('page');
        $( "#content_area" ).load(page);
   });


  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, [
    {
      title:"Music1",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(1).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 2",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(2).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 3",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(3).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 4",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(4).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music5",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(5).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 6",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(6).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music7",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(7).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 8",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(8).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 9",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(9).mp3'); ?>",
      poster: "images/m0.jpg"
    },
    {
      title:"Music 10",
      artist:"Artist",
      mp3: "<?php echo base_url('uploads/music/olamide(10).mp3'); ?>",
      poster: "images/m0.jpg"
    }
  ], {
    playlistOptions: {
      enableRemoveControls: true,
      autoPlay: true
    },
    swfPath: "js/jPlayer",
    supplied: "webmv, ogv, m4v, oga, mp3",
    smoothPlayBar: true,
    keyEnabled: true,
    audioFullScreen: false
  });
  
  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').addClass('animate');
  });

  $(document).on('click', '.jp-play-me', function(e){
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if( !$this.hasClass('active') ){
      myPlaylist.pause();
    }else{
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }
    
  });
});
</script>
</body>

</html>