$(document).ready(function(){
	

	// make a fixed elmt move with the scroll 
	$("#statsElt").scroll(function(event){
		var $top = $("#statsElt").scrollTop();
		$("#statsElt-normal-bg p").css({
			"-webkit-transform":"translateY(-"+$top+"px)"
		});
	});



// --------------------------------
// 
//  GESTION MOVEMENT - LINK IN APP.
//  BY SK - 2014 - UIXperts - iLab
// 
// --------------------------------

	// set variable
	var $login = $("#login"), $signIn = $("#signIn"), 
	$rapport=$("#rapport"), $rapportDet=$("#rapportDetail"),
	$stat=$("#stat"), $statsElt=$("#statsElt"), $param=$("#parametres"),
	$header=$("header"),$footer=$("footer"),
	$titre=$("header h2"), $btnParam=$("header #btnParam"),
	$btnParamLink=$("header #btnParam a");
	$btnBack=$("header #btnBack"), $btnBackLink=$("header #btnBack a");

	var hash = window.location.hash;
	hash = hash.split("#")[1];

	checkPos(hash);



	// check hash changing
	$(window).bind("hashchange", function(){
		var hash = window.location.hash;
		hash = hash.split("#")[1];
		checkPos(hash);
	});



	// check position of every page 
	function checkPos(hash){
		if(hash=="rapport"){
			$login.removeClass().addClass("hideLeft");
			$stat.removeClass().addClass("hideRight");
			$statsElt.removeClass().addClass("hideRight");
			$rapportDet.removeClass().addClass("hideRight");
			$param.removeClass().addClass("hideRight");
			$signIn.removeClass().addClass("hideLeft");
			$rapport.removeClass();
			$header.removeClass();
			$footer.removeClass("hide stats");

			$titre.text("mes rapports");
			$btnParamLink.attr("href","#param");
			$btnParam.removeClass("hide");
			$btnBack.removeClass("hide").addClass("hide");

		}
		else if(hash=="rapportDetail"){
			$login.removeClass().addClass("hideLeft");
			$stat.removeClass().addClass("hideRight");
			$statsElt.removeClass().addClass("hideRight");
			$param.removeClass().addClass("hideRight");
			$signIn.removeClass().addClass("hideLeft");

			$rapport.removeClass();
			$rapportDet.removeClass();
			$header.removeClass();
			$footer.removeClass("hide stats");
			$btnParamLink.attr("href","#param");
			$btnParam.removeClass("hide");
			$btnBackLink.attr("href","#rapport");
			$btnBack.removeClass("hide");
		}
		else if(hash=="stats"){
			$login.removeClass().addClass("hideLeft");
			$param.removeClass().addClass("hideRight");
			$signIn.removeClass().addClass("hideLeft");
			$rapport.removeClass().addClass("hideRight");
			$rapportDet.removeClass().addClass("hideRight");
			$statsElt.removeClass().addClass("hideRight");
			$stat.removeClass();
			$header.removeClass();
			$footer.removeClass("hide stats").addClass("stats");
			$btnParamLink.attr("href","#param");
			$btnParam.removeClass("hide");
			$btnBack.removeClass("hide").addClass("hide");

			$titre.text("mes stats");
		}
		else if(hash=="statsElt"){
			$login.removeClass().addClass("hideLeft");
			$param.removeClass().addClass("hideRight");
			$signIn.removeClass().addClass("hideLeft");
			$rapport.removeClass().addClass("hideRight");
			$rapportDet.removeClass().addClass("hideRight");
			$statsElt.removeClass();
			$stat.removeClass();
			$header.removeClass();
			$footer.removeClass("hide stats").addClass("stats");
			$btnParamLink.attr("href","#param");
			$btnParam.removeClass("hide");
			$btnBackLink.attr("href","#stats");
			$btnBack.removeClass("hide");			
		}
		else if(hash=="param"){
			$login.removeClass().addClass("hideLeft");
			$signIn.removeClass().addClass("hideLeft");
			$rapport.removeClass().addClass("hideRight");
			$rapportDet.removeClass().addClass("hideRight");
			$statsElt.removeClass().addClass("hideRight");
			$stat.removeClass().addClass("hideRight");
			$param.removeClass();
			$header.removeClass();
			$footer.removeClass("hide stats").addClass("hide");
			$btnParamLink.attr("href","#rapport");
			$btnParam.removeClass("hide");
			$btnBack.removeClass("hide").addClass("hide");
		}
		else if(hash=="signin"){
			$login.removeClass().addClass("hideLeft");
			$rapport.removeClass().addClass("hideRight");
			$rapportDet.removeClass().addClass("hideRight");
			$statsElt.removeClass().addClass("hideRight");
			$stat.removeClass().addClass("hideRight");
			$param.removeClass().addClass("hideRight");
			$signIn.removeClass();
			$header.removeClass();
			$footer.removeClass().addClass("hide");
			$btnParam.removeClass("hide").addClass("hide");
		}
		else {
			$rapport.removeClass().addClass("hideRight");
			$rapportDet.removeClass().addClass("hideRight");
			$statsElt.removeClass().addClass("hideRight");
			$stat.removeClass().addClass("hideRight");
			$param.removeClass().addClass("hideRight");
			$signIn.removeClass().addClass("hideLeft");
			$login.removeClass();
			$header.removeClass().addClass("hide");
			$footer.addClass("hide");
			$btnParam.removeClass("hide").addClass("hide");
			$btnBack.removeClass("hide").addClass("hide");
		}
	}


	// enable submit form and active 
	$("#login input[type=submit]").click(function(){
		event.preventDefault();
		$(location).attr('href',"#rapport");
	});
	$("#signIn input[type=submit]").click(function(){
		event.preventDefault();
		$(location).attr('href',"#rapport");
	});




})