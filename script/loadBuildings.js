$(document).ready(function()
{
	
	$.ajax({

		type: "GET",
		url: "http://localhost/Projects/Maintenance-Request-Tracker/getBuildings.php", 
		success: function(data)
		{
			var parsed_json = JSON.parse(data); 
			var buildingsArray = parsed_json.result; 

			var text = ""; 

			for(i=0; i<buildingsArray.length; i++)
			{
				var buildingelement = buildingsArray[i]
				text += "<option>" + buildingelement.building_name + "</option>"; 
			}

			$("#buildings").append(text);

		},
		error: function()
		{
			alert("Error");
		}

	});

}); 