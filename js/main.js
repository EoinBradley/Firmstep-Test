$(document).ready(function(){
	getQueue();
	$("#submit-btn").click(function(){
		var customerType = $("input[name='customer-type']:checked").val();
		var service = $("input[name='service']:checked").val();
		if(customerType == "Citizen") {
			var title = $("#customer-title").val();
			var firstName = $("#first-name").val();
			var lastName = $("#last-name").val();
			$.post("input.php", {type: customerType, service: service, title: title, firstName: firstName, lastName: lastName}, function(data){
	            if(data){
	            	alert(data);
	            }
	            getQueue();
	        });
		} else if (customerType == "Organisation") {
			var name = $("#name").val();
			$.post("input.php", {type: customerType, service: service, name: name}, function(data){
	            if(data){
	            	alert(data);
	            }
	            getQueue();
	        });
		} else {
			$.post("input.php", {type: customerType, service: service}, function(data){
	            if(data){
	            	alert(data);
	            }
	            getQueue();
	        });
		}
	});

	$("input[name='customer-type']").on('change', function(){
		var customerType = $("input[name='customer-type']:checked").val();

		if(customerType == "Anonymous"){
			$("#requiredData").html("");
		} else if(customerType == "Organisation") {
			$("#requiredData").html("Organisation Name<br /><input type='text' name='name' id='name' placeholder='Organisation Name' class='input'>");
		} else {
			$("#requiredData").html("Title<br /><select class='input' id='customer-title'><option value='Mr.''>Mr.</option><option value='Mrs.''>Mrs.</option><option value='Ms.''>Ms.</option><option value='Dr.''>Dr.</option></select>First Name<br /><input type='text' name='first-name' id='first-name' placeholder='First Name' class='input'>Last Name<br /><input type='text' name='last-name' id='last-name' placeholder='Last Name' class='input'>");
		}
	});
});

function getQueue(){
	$.post("output.php", function(data){
        $("#QueueData").html(data);
    });
}