var csv;

$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "contract.csv",
        dataType: "text",
        success: function(data) {
			processData(data);
		}
     });
});

function processData(csv) {
	var lines = $.csv.toArrays(csv);


$( "[id^=button_]" ).click(function() {
	
	var button_id = $(this).attr('id');
	var button = button_id.replace(/[^0-9]/g, '');
	
	// for highlighting current selection
	for ( var x = 1; x <=10; x++) {
		var buttone = "#button_"+x;
		if ( x == button) {
			$(buttone).removeClass("btn-default").addClass("btn-info");
		} else {
			$(buttone).addClass("btn-default").removeClass("btn-info");
		}
	}
	
	//for map
	function initialize(location1) {
		
		var mapCanvas = document.getElementById('map_canvas');
		var mapLatlng = new google.maps.LatLng(28.000000,84.316667);
		var mapOptions = {
			center: mapLatlng,
			zoom: 6,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		
		var map = new google.maps.Map(mapCanvas, mapOptions);
		
		
		var location = $.csv.toArray(location1);
		var myLatlng = new google.maps.LatLng(location[0],location[1]);
		var marker =  new google.maps.Marker({
			position: myLatlng,
			map: map
		});
    }
	
	
	// define variables to display
	for ( var x =1; x<= 10; x++) {
		if( x == button) {
			var status = lines[x][1];
			var purchase = lines[x][2];
			var submission = lines[x][3];
			var opening = lines[x][4];
			var tender = lines[x][5];
			var publication = lines[x][6];
			var published = lines[x][7];
			var contract = lines[x][8];
			var completion = lines[x][9];
			var award = lines[x][10];
			var location = lines[x][11];
			var latlon = lines[x][12];
			var amount = lines[x][13];
			
			
			// append text to the desired location.
			$("#table-info").removeClass("hidden");
			$(".status").html("Status: ").append(status);
			$(".purchase").html("Bid Purchase Deadline: ").append(purchase);
			$(".submission").html("Bid Submission Deadline: ").append(submission);
			$(".opening").html("Bid Opening Date: ").append(opening);
			$(".tender").html("Tender Id: ").append(tender);
			$(".publication").html("Publication Date: ").append(publication);
			$(".published").html("Published In: ").append(published);
			
			
			if (contract == "") {
				$(".contract").addClass("hidden");
				$(".completion").addClass("hidden");
				$(".award").addClass("hidden");
				$(".location").addClass("hidden");
				$(".amount").addClass("hidden");
				$(".latlon").addClass("hidden");
			} else {
				$(".contract").removeClass("hidden").html("Contract Date: ").append(contract);
				$(".completion").removeClass("hidden").html("Completion Date: ").append(completion);
				$(".award").removeClass("hidden").html("Awardee: ").append(award);
				$(".location").removeClass("hidden").html("Awardee Location: ").append(location);
				$(".amount").removeClass("hidden").html("Awardee Amount: ").append(amount);
				
				// for map
				$(".latlon").removeClass("hidden");
				google.maps.event.addDomListener(window, 'load', initialize(latlon));				
			}
		}
	}	
});
}


