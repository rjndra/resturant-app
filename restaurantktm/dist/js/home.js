(function($) {
    $.fn.blink = function(options) {
        var defaults = {
            delay: 500
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            var obj = $(this);
            setInterval(function() {
                if ($(obj).animate({	opacity: '1'	}) ){
                    $(obj).animate({	opacity: '0.5'	});
                }
                else {
                    $(obj).animate({	opacity: '1'	});
                }
            }, options.delay);
        });
    }
}(jQuery)) 

function Printpopup(data) {
	var mywindow = window.open('');
	mywindow.document.write('<html><head><title>my div</title>');
	/*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
	mywindow.document.write('</head><body >');
	mywindow.document.write(data);
	mywindow.document.write('</body></html>');

	mywindow.print();
	mywindow.close();

	return true;
}

/*function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}*/
		
$( "[id^=newOrder_]" ).click(function() {
	
	var currentId = $(this).attr('id');
	var newOrderId = currentId.replace(/[^0-9]/g, '');
	
	var newId = "#newOrder_" + newOrderId;
	var start = "#started_"  + newOrderId;
		                                                                 
		$(newId).hide();
		$(start).removeClass("hidden");
	});
	$( "[id^=started_]" ).click(function() {
		var currentId = $(this).attr('id');
		var newOrderId = currentId.replace(/[^0-9]/g, '');
		
		var start = "#started_"  + newOrderId;
		var finish = "#finished_" + newOrderId;
	
		$(start ).hide();
		$(finish).removeClass("hidden");
	});
	
/*	$( "[id^=finished_]" ).click(function() {
		var currentId = $(this).attr('id');
		var newOrderId = currentId.replace(/[^0-9]/g, '');
		
		var finish = "#finished_" + newOrderId;
		var close = "#close_" + newOrderId;
	
		$(finish).hide();
		$(close).removeClass("hidden");
	});
	$( "[id^=close_]" ).click(function() {
		var currentId = $(this).attr('id');
		var newOrderId = currentId.replace(/[^0-9]/g, '');
		
		var orderNo = "#orderNo_" + newOrderId;
		
		$(orderNo).hide();
		
	});
*/

var totaltables = 1000;	
$( "[id^=button_]" ).click(function() {
	
	var button_id = $(this).attr('id');
	var button = button_id.replace(/[^0-9]/g, '');
	
	for (i=1; i<=totaltables; i++) {
		var tableid = "#tableinfo_" + i;
		if ( i == button) {
			$(tableid).removeClass("hidden");
		}
		else {
			$(tableid).addClass("hidden");
		}
	}
});

$( "[id^=payment_]" ).click(function() {
	var payment_id = $(this).attr('id');
	var button = payment_id.replace(/[^0-9]/g, '');
	var confirmation = confirm("Are you sure to pay the bill?");
	if (confirmation == true) {
		$("#reviewinfo_"+button).removeClass("hidden");
		$("#tableinfo_"+button).addClass("hidden");
		$("#reviewinfo_"+button).removeClass("hidden");
	}		
});
	
$( "[id^=print_]" ).click(function() {
	var print_id = $(this).attr('id');
	var button = print_id.replace(/[^0-9]/g, '');
	
	$("#button_"+button).removeClass('btn-danger').addClass('btn-success');
	var print_id = $(this).attr('id');
	var button = print_id.replace(/[^0-9]/g, '');	
	Printpopup($("#printme_"+button).html());
});

$( "[id^=cancelpayment_]" ).click(function() {
	var cancelpayment_id = $(this).attr('id');
	var button = cancelpayment_id.replace(/[^0-9]/g, '');
	$("#tableinfo_"+button).removeClass("hidden");
	$("#reviewinfo_"+button).addClass("hidden");
		
});

$( "[id^=confirmpayment_]" ).click(function() {
	var payment_id = $(this).attr('id');
	var button = payment_id.replace(/[^0-9]/g, '');
	console.log(button);
	var confirmation = confirm("Are you sure to pay the bill?");
	if (confirmation == true) {
		console.log("clicked");
		
		// JQuery.ajax for the action here
		$.ajax({
			type  : 'POST',
			url : 'home.php',
			data : { id : button , action:"ajax_payment" },
			success : function(results) {
				console.log('finished');
			}	
		}); 
 	}	
	$("#reviewinfo_"+button).addClass("hidden");
	$("#paidinfo").removeClass('hidden');
	 window.location.href = "home.php";
});



/*
$( "#button_1" ).click(function() {
	$( "#button_1" ).clearInterval(function() {
                
                    $(obj).animate({	opacity: '1'	});
                
            });
});
function blinker1(selector){
$(selector).addClass('btn btn-danger');	
$(selector).fadeOut('slow', function(){
    $(this).fadeIn('slow', function(){
        blinker1(this);
    });
});
}

function blinkerstop(selector){
$(selector).animate({
		opacity: '1'
	});
}


// Blinker through CSS.
 function startBlink(selector){
    window.blinker = setInterval(function(){
    	if(window.blink){
    	   $(selector).css('color','blue');
		   $(selector).addClass('btn btn-danger');
    	   window.blink=false;
    	 }
    	else{
    		$(selector).css('color','white');
    		window.blink = true;
    	}
    },500);
  }

  function stopBlink(selector){
    if(window.blinker) {
		if(window.blink){
    	   $(selector).css('color','white');
		   $(selector).addClass('btn btn-info');
    	   window.blink=false;
    	 }
		 clearInterval(window.blinker);
  }}
  
  // End of function for Blinker through CSS.
  
*/
