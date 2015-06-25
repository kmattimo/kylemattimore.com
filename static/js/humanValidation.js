$(document).ready(function() {

  $("#humanInput").keyup(validateInput);
});

function validateInput() {
	var typed = $("#humanInput").val();
	
	//decided to match the input box client-side instead of using a billion ajax calls
	var match = /i am ?$|yes/i;
 
    if(match.test(typed)) {
       $("#inputDiv").addClass("has-success");  
	   $("#human-android").attr('class', 'fa fa-user fa-lg');
	   $("#humanInput").off('keyup');
	   
	   $.ajax({
		  url: "/contact/info",
		  //cache: false
		  dataType: "text",
			success: function( data, typed ) {
				$("#contactinfo").html(decrypt(data,"robots_suck"));
			}
		})

	   
    }
    else {
     //   $("#inputDiv").removeClass("has-success");
	//	$("#titleLabel").text("Title");
    }
}
