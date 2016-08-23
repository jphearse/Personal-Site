(function() {
	$(".headContents").css("margin-top", "30px");
	$(".headContents").css("opacity", "0");
	rise();
	// function fade(){
	// 	$(".headContents").hide().fadeIn(1500);
	// }
	function rise(){
		$(".headContents").animate({"opacity":"1","margin-top":"-=30px"}, 1000);
	}
})();