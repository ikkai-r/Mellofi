

$(document).ready(function(){
    $("#gcash").click(function() { 
       $("#payment-final").html("GCash.");
       $("#payment-final").val("GCash");
       $("a#update").prop("href", "https://www.gcash.com/");
    }); 
});

$(document).ready(function(){
    $("#gcash-ud").click(function() { 
       $("#payment-update").html("GCash.");
       $("#payment-update").val("GCash");
       $("a#payout-update").prop("href", "https://www.gcash.com/");
    }); 
});

$(document).ready(function(){
    $("#paypal").click(function() { 
       $("#payment-final").html("Paypal.");
       $("#payment-final").val("Paypal");
        $("a#purchase").prop("href", "https://www.paypal.com/us/home");
    }); 
});

$(document).ready(function(){
    $("#paypal-ud").click(function() { 
       $("#payment-update").html("Paypal.");
       $("#payment-update").val("Paypal");
        $("a#payout-update").prop("href", "https://www.paypal.com/us/home");
    }); 
});

$(document).ready(function(){
    $("#paymaya").click(function() { 
       $("#payment-final").html("Paymaya.");
       $("#payment-final").val("Paymaya");
       $("a#purchase").prop("href", "https://www.paymaya.com/");
    }); 
});

$(document).ready(function(){
    $("#paymaya-ud").click(function() { 
       $("#payment-update").html("Paymaya.");
       $("#payment-update").val("Paymaya");
       $("a#payout-update").prop("href", "https://www.paymaya.com/");
    }); 
});

$(document).ready(function(){
    $("#7eleven").click(function() { 
       $("#payment-final").html("7 Eleven.");
       $("#payment-final").val("7 Eleven");
       $("a#purchase").prop("href", "https://www.7-eleven.com.ph/");
    }); 
});


$(document).ready(function(){
    $("#7eleven-ud").click(function() { 
       $("#payment-update").html("7 Eleven.");
       $("#payment-update").val("7 Eleven");
       $("a#payout-update").prop("href", "https://www.7-eleven.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#bpi").click(function() { 
       $("#payment-final").html("BPI.");
       $("#payment-final").val("BPI");
       $("a#purchase").prop("href", "https://www.bpi.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#bpi-ud").click(function() { 
       $("#payment-update").html("BPI.");
       $("#payment-update").val("BPI");
       $("a#payout-update").prop("href", "https://www.bpi.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#bdo").click(function() { 
       $("#payment-final").html("BDO.");
       $("#payment-final").val("BDO");
       $("a#purchase").prop("href", "https://www.bdo.com.ph/personal");
    }); 
});


$(document).ready(function(){
    $("#bdo-ud").click(function() { 
       $("#payment-update").html("BDO.");
       $("#payment-update").val("BDO");
       $("a#payout-update").prop("href", "https://www.bdo.com.ph/personal");
    }); 
});


$(document).ready(function(){
    $("#mastercard").click(function() { 
       $("#payment-final").html("MasterCard.");
        $("#payment-final").val("MasterCard");
       $("a#purchase").prop("href", "https://www.mastercard.com/global/en.html");
    }); 
});

$(document).ready(function(){
    $("#mastercard-ud").click(function() { 
       $("#payment-update").html("MasterCard.");
        $("#payment-update").val("MasterCard");
       $("a#payout-update").prop("href", "https://www.mastercard.com/global/en.html");
    }); 
});

$(document).ready(function(){
    $("#visa").click(function() { 
       $("#payment-final").html("Visa.");
       $("#payment-final").val("Visa");
       $("a#purchase").prop("href", "https://www.visa.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#visa-ud").click(function() { 
       $("#payment-update").html("Visa.");
       $("#payment-update").val("Visa");
       $("a#payout-update").prop("href", "https://www.visa.com.ph/");
    }); 
});

$(document).ready(function(){
    $("#grabpay").click(function() { 
       $("#payment-final").html("GrabPay.");
       $("#payment-final").val("GrabPay");
       $("a#purchase").prop("href", "https://www.grab.com/ph/");
    }); 
});

$(document).ready(function(){
    $("#grabpay-ud").click(function() { 
       $("#payment-update").html("GrabPay.");
       $("#payment-update").val("GrabPay");
       $("a#payout-update").prop("href", "https://www.grab.com/ph/");
    }); 
});


$(document).ready(function(){
    $("#dragonpay").click(function() { 
       $("#payment-final").html("DragonPay.");
       $("#payment-final").val("DragonPay");
       $("a#purchase").prop("href", "https://www.dragonpay.ph/");
    }); 
});


$(document).ready(function(){
    $("#dragonpay-ud").click(function() { 
       $("#payment-update").html("DragonPay.");
       $("#payment-update").val("DragonPay");
       $("a#payout-update").prop("href", "https://www.dragonpay.ph/");
    }); 
});

$(document).ready(function(){
    $(".payment-methods").click(function() {
      $('.payment-methods').removeClass('selected-payment');
      $(this).addClass('selected-payment');
        $('#submit-payment').prop("disabled", false);
         $('#update-payment').prop("disabled", false);
    }); 
});



