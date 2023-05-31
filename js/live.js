

var clickedPayment = false;
var clickedPlan = false;
$(document).ready(function(){
    $(".payment-methods").click(function() {
      $('.payment-methods').removeClass('selected-payment');
      $(this).addClass('selected-payment');
      clickedPayment = true;
       if (clickedPlan == true && clickedPayment == true) {
        $('#submit-payment').prop("disabled", false);
      }

    }); 
});

$(document).ready(function(){
    $(".renewal-div").click(function() { 
      $('.renewal-div').removeClass('renewal-active');
      $(this).addClass('renewal-active');
      clickedPlan = true;

      if (clickedPlan == true && clickedPayment == true) {
        $('#submit-payment').prop("disabled", false);
      }
    }); 
});



$(document).ready(function(){
    $("#monthly").click(function() { 
       $("#payment-desc").html("Monthly recurring charge starting:");
       $("#total-payment").html("PHP 199.99");
    }); 
});

$(document).ready(function(){
    $("#three-months").click(function() { 
       $("#payment-desc").html("Charged every 3 months starting:");
       $("#total-payment").html("PHP 664.99");
    }); 
});

$(document).ready(function(){
    $("#six-months").click(function() { 
       $("#payment-desc").html("Charged every 6 months starting:");
       $("#total-payment").html("PHP 1,274.99");
    }); 
});

$(document).ready(function(){
    $("#gcash").click(function() { 
       $("#payment-final").html("GCash.");
       $("a#purchase").prop("href", "https://www.gcash.com/");
    }); 
});

$(document).ready(function(){
    $("#paypal").click(function() { 
       $("#payment-final").html("Paypal.");
        $("a#purchase").prop("href", "https://www.paypal.com/us/home");
    }); 
});

$(document).ready(function(){
    $("#paymaya").click(function() { 
       $("#payment-final").html("Paymaya.");
       $("a#purchase").prop("href", "https://www.paymaya.com/");
    }); 
});

$(document).ready(function(){
    $("#7eleven").click(function() { 
       $("#payment-final").html("7 Eleven.");
       $("a#purchase").prop("href", "https://www.7-eleven.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#bpi").click(function() { 
       $("#payment-final").html("BPI.");
       $("a#purchase").prop("href", "https://www.bpi.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#bdo").click(function() { 
       $("#payment-final").html("BDO.");
       $("a#purchase").prop("href", "https://www.bdo.com.ph/personal");
    }); 
});

$(document).ready(function(){
    $("#mastercard").click(function() { 
       $("#payment-final").html("MasterCard.");
       $("a#purchase").prop("href", "https://www.mastercard.com/global/en.html");
    }); 
});

$(document).ready(function(){
    $("#visa").click(function() { 
       $("#payment-final").html("Visa.");
       $("a#purchase").prop("href", "https://www.visa.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#grabpay").click(function() { 
       $("#payment-final").html("GrabPay.");
       $("a#purchase").prop("href", "https://www.grab.com/ph/");
    }); 
});

$(document).ready(function(){
    $("#dragonpay").click(function() { 
       $("#payment-final").html("DragonPay.");
       $("a#purchase").prop("href", "https://www.dragonpay.ph/");
    }); 
});


var today = new Date();

var date = today.getFullYear()+"-"+(today.getMonth()+1)+"-"+today.getDate();

 document.getElementById("date").innerHTML = date;