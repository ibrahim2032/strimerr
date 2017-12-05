

 $(document).on("click", "#change_setting_file", function(e)  
{
    e.preventDefault();	//STOP default action
	
    
    var formSubmitted = $(this).parents("form");
    var loadingDiv = $(formSubmitted).find(".update_loading");
  

		$(loadingDiv).html("loading...");
		var postData = new FormData(this);
		var formURL = $(formSubmitted).attr("localaction");
        var fileData = $('#userfile').prop('file');
        formData.append('userfile', fileData);
        
       $.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			mimeType:"multipart/form-data",
			success:function(data, textStatus, jqXHR) 
			{
                if(data == 'success'){
                    $(loadingDiv).html("Operation Successfull");
                 //   $( "#content_area" ).load(local);
                }else{
				    $(loadingDiv).html(data);
                 //   $( "#content_area" ).load(local);
                }

			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$(loadingDiv).html('<div class="errors">Unable to carryout this function <br /> Please retry or contact the admin...</div>');
			},
             cache: false,
        contentType: false,
        processData: false
		});  
        
        


});
