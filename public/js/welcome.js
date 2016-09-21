(function() {

////////////////rise and fade in header//////////////////////////////////

	$(".headContents").css("margin-top", "30px");
	$(".headContents").css("opacity", "0");
	rise();

	function rise(){
		$(".headContents").animate({"opacity":"1","margin-top":"-=30px"}, 1000);
	}


// $("#firstAnimation").hide(); // hide the fixed navbar initially

// var topofDiv = $("#aboutMeHeader").offset().top; //gets offset of header
// var height = $("#aboutMeHeader").outerHeight(); //gets height of header

// $(window).scroll(function(){
//     if($(window).scrollTop() > (topofDiv + height)){
//        $("#firstAnimation").show();
//        $("#firstAnimation").addClass("option animated slideInRight");
//     }
//     else{
//        $("#firstAnimation").hide();
//     }
// });

// $("#firstAnimation").hide();
// // $("#secondAnimation").hide();
// $(window).on('scroll', function() {
//     var y_scroll_pos = window.pageYOffset;
//     var scroll_pos_test = 200;             // set to whatever you want it to be

//     if(y_scroll_pos > scroll_pos_test) {
//     	$("#firstAnimation").show();
//         $("#firstAnimation").addClass("option animated slideInRight");
//     }
// });
// $(window).on('scroll', function() {
//     var y_scroll_pos = window.pageYOffset;
//     var scroll_pos_test = 900;             // set to whatever you want it to be

//     if(y_scroll_pos > scroll_pos_test) {
//     	$("#secondAnimation").show();
//         $("#secondAnimation").addClass("option animated slideInRight");
//     }
// });

///////////////smooth scrolling//////////////////////////////////////////

	$('#nameLink').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
	});

	$('#link').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
	});

	$('#secondLink').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
	});

	$('#thirdLink').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
	});

$("#myCarousel").carousel({interval: 2700});

// $(function(){
 

//     $('#ghapidata').html('<div id="loader"><img src="http://i.imgur.com/UqLN6nl.gif" alt="loading..."></div>');
    
//     var username = 'jphearse';
//     var requri   = 'https://api.github.com/users/'+username;
//     var repouri  = 'https://api.github.com/users/'+username+'/repos';
    
//     requestJSON(requri, function(json) {
//       if(json.message == "Not Found" || username == '') {
//         $('#ghapidata').html("<h2>No User Info Found</h2>");
//       }
      
//       else {
//         // else we have a user and we display their info
//         console.log(json);
//         var fullname   = json.name;
//         var username   = json.login;
//         var aviurl     = json.avatar_url;
//         var profileurl = json.html_url;
//         var location   = json.location;
//         var followersnum = json.followers;
//         var followingnum = json.following;
//         var reposnum     = json.public_repos;
        
//         if(fullname == undefined) { fullname = username; }
        
//         var outhtml = '<h2>'+fullname+' <span class="smallname">(@<a href="'+profileurl+'" target="_blank">'+username+'</a>)</span></h2>';
//         outhtml = outhtml + '<div class="ghcontent"><div class="avi"><a href="'+profileurl+'" target="_blank"><img src="'+aviurl+'" width="80" height="80" alt="'+username+'"></a></div>';
//         outhtml = outhtml + '<p>Followers: '+followersnum+' - Following: '+followingnum+'<br>Repos: '+reposnum+'</p></div>';
//         outhtml = outhtml + '<div class="repolist clearfix">';
        
//         var repositories;
//         $.getJSON(repouri, function(json){
//           repositories = json;   
//           outputPageContent();                
//         });          
        
//         function outputPageContent() {
//           if(repositories.length == 0) { outhtml = outhtml + '<p>No repos!</p></div>'; }
//           else {
//             outhtml = outhtml + '<p><strong>Repos List:</strong></p> <ul>';
//             $.each(repositories, function(index) {
//               outhtml = outhtml + '<li><a href="'+repositories[index].html_url+'" target="_blank">'+repositories[index].name + '</a></li>';
//             });
//             outhtml = outhtml + '</ul></div>'; 
//           }
//           $('#ghapidata').html(outhtml);
//         } // end outputPageContent()
//       } // end else statement
//     }); // end requestJSON Ajax call

  
//   function requestJSON(url, callback) {
//     $.ajax({
//       url: url,
//       complete: function(xhr) {
//         callback.call(null, xhr.responseJSON);
//       }
//     });
//   }
// });


})();