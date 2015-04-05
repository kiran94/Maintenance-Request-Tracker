$(document).ready(function()
{
	//Load data from the server. 
	loadData();

	//Function loads data from the server. 
	function loadData()
	{
		$.ajax({
		type: "GET",
		url: "http://localhost/Projects/Maintenance-Request-Tracker/getRequests.php",
		success: function(data)
		{

			$("td").remove(); 

			//Parse data into JSON object. 
			var parsed_json = JSON.parse(data); 
			
			//Parse results array. 
			parsed_json = parsed_json.result;
			var allText = ""; 

			//For each item in the array. 
			for(var i=0; i<parsed_json.length; i++)
			{	
				//Get the current object element in the array.
				var row = parsed_json[i]; 
				allText += "<tr>" + "<td>" + row.reqtimestamp + "</td>" 
							+ "<td>" + row.reqlabel + "</td>" 
							+ "<td>" + row.building_id + "</td>" 
							+ "<td>" + row.room_id + "</td>" 
							+ "</tr>"; 

				
				
			}

			//Append the text to the element. 
			$("#requests").append(allText); 
		},
		error: function()
		{
			alert("error"); 
		}
		});
	}

	//Bind load data method to the refresh element. 
	$("#refresh").on("click", function()
	{
		loadData(); 
	})
});