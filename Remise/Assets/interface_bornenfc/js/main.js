


$(function() {
	var clicked = "a";
	$('#container').click(function(){
		if (clicked == "a") {
			clicked == "c";
			$("#stepB").css("opacity",1);
			setTimeout(function(){ $("#stepA, #stepB").css("opacity",0); }, 2000);
			setTimeout(function(){ $("#stepC").css("opacity",1); }, 2000);
			setTimeout(function(){ clicked = "b"; }, 2000);
			setTimeout(function(){ $("#stepB, #stepC").css("opacity",0); }, 60000);
			setTimeout(function(){ $("#stepA").css("opacity",1); }, 60000);
			setTimeout(function(){ clicked = "a"; }, 60000);
		} else if (clicked == "b") {
			$("#stepB, #stepC").css("opacity",0);
			$("#stepA").css("opacity",1);
			clicked = "a";
		}
	});
});

