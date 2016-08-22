(function() {
$(".headContents").css("margin-top", "8px");
$(".headContents").css("opacity", "0");
rise();
// function fade(){
// 	$(".headContents").hide().fadeIn(1500);
// }
function rise(){
	$(".headContents").animate({"opacity":"1","margin-top":"-=15px"}, 800);
}
})();