$(document).ready(function()
{
	$.ajax({
		type: "GET",
		url: "http://localhost/Projects/Maintenance-Request-Tracker/getRequests.php",
		success: function(data)
		{
			//Parse data into JSON object. 
			var parsed_json = JSON.parse(data); 
			
			//Parse results array. 
			parsed_json = parsed_json.result;

			//For each item in the array. 
			for(var i=0; i<parsed_json.length; i++)
			{	
				//Get the current object element in the array. 
				var row = parsed_json[i]; 
				//Append element to the list. 
				$("#requests").append("<li>" + row.reqlabel + "</li>"); 
			}
		},
		error: function()
		{
			alert("error"); 
		}
	});

});