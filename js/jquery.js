$(function() {
    console.log("JS Success");
    $(".themeCSS").hide();

    $(".showCSS").click(function(){
    	$(".showCSS span").toggle();
    	$(".themeCSS").toggle();
    	return false;
    });

});
