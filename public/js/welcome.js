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