




$(document).ready(function(){
  var closed1 = true;
  $("#first, #bloc1, #petitechasse").click(function(){
    if (closed1 == true) {
      closed1 = false;
      $("#bloc1").animate({height:'200px'});
      document.getElementById('audio1').play();
      setTimeout(function(){ $("#bloc1").animate({height:'0px'}); }, 7500);
    } else {
      closed1 = true;
      // $("#bloc1").animate({height:'0px'});
    }
  });
});

$(document).ready(function(){
  var closed2 = true;
  $("#second, #bloc2, #grandechasse").click(function(){
    if (closed2 == true) {
      closed2 = false;
      $("#bloc2").animate({height:'200px'});
      document.getElementById('audio1').play();
      setTimeout(function(){ $("#bloc2").animate({height:'0px'}); }, 7500);
    } else {
      closed2 = true;
      // $("#bloc2").animate({height:'0px'});
    }
  });
});


