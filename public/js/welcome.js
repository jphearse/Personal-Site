(function() {

////////////////rise and fade in header//////////////////////////////////

	$(".headContents").css("margin-top", "30px");
	$(".headContents").css("opacity", "0");
	rise();
	// function fade(){
	// 	$(".headContents").hide().fadeIn(1500);
	// }
	function rise(){
		$(".headContents").animate({"opacity":"1","margin-top":"-=30px"}, 1000);
	}




$("#firstAnimation").hide();
// $("#secondAnimation").hide();
$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 200;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
    	$("#firstAnimation").show();
        $("#firstAnimation").addClass("option animated bounceInLeft");
    }
});
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

	$('#Link').click(function(){
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
})();