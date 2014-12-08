$(document).ready(function() {
  $("#humanInput").keyup(validateInput);
});

function validateInput() {
	var typed = $("#humanInput").val();
	
	var match = /i am ?$/i;
 
    if(match.test(typed)) {
       $("#inputDiv").addClass("has-success");  
	   $("#human-android").attr('class', 'fa fa-user fa-lg');
	   
	   
	   $.ajax({
		  url: "/contact/info",
		  //cache: false
		  dataType: "text",
			success: function( data, typed ) {

				console.log(data);
				$("#contactinfo").html(decrypt(data,"robots_suck"));

			}
		})

	  
	   
    }
    else {
     //   $("#inputDiv").removeClass("has-success");
	//	$("#titleLabel").text("Title");
    }
}

//simple encryption from http://www.trans4mind.com/personal_development/encryption/xor.htm
//for obfuscation from web crawlers
function encrypt(s,pw)
{
var a=0;
var myString='';
var textLen=s.length;
var pwLen=pw.length;

for (i=0;i<textLen;i++) 
{
a=parseInt(s.charCodeAt(i));

a=a^(pw.charCodeAt(i%pwLen));
a=a+"";
while (a.length<3)
a='0'+a;

myString+=a;
}
return myString;
}

function decrypt(s,pw){
var myString='';
var a=0;
var pwLen=pw.length;
var textLen=s.length;
var i=0;
var myHolder="";
while(i<s.length-2) 
{
myHolder=s.charAt(i)+s.charAt(i+1)+s.charAt(i+2);
if (s.charAt(i)=='0') {
myHolder=s.charAt(i+1)+s.charAt(i+2);
}
if ((s.charAt(i)=='0')&&(s.charAt(i+1)=='0')) {
myHolder=s.charAt(i+2);
}
a=parseInt(myHolder);
a=a^(pw.charCodeAt(i/3%pwLen));
myString+=String.fromCharCode(a);
i+=3;
}//end of while i
return myString;
}
