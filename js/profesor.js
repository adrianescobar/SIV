	
	
	
	function llamar()
	{
		alert("hola");
	}
	function setEstudiante(datoEstudiante)
	{
		var table = document.getElementById("estudiantes");
		var tr = document.createElement("tr");
		for(var ind = 0; ind < 4; ind++)
		{
			var td = document.createElement("td");
			if(ind == 3){
				td.innerHTML = "<select id = 'notaEstudiante'>"+
					"<option value = 'I'>I</option>"+ 
					"<option value = 'A'>A</option>"+ 
					"<option value = 'B'>B</option>"+ 
					"<option value = 'C'>C</option>"+
					"<option value = 'F'>F</option>"+ 
				"</select>";
			}
			else{
				td.innerHTML = datoEstudiante[ind];
			}
			tr.appendChild(td);
		}
		table.appendChild(tr);
	}
	function prueba()
	{
		var datos = Array();
		var datos2 = Array();
		var datos3 = Array();
		var datos4 = Array();
		
		var estu = Array();
		
		datos[0] = "20092090";
		datos[1] = "Adrian";
		datos[2] = "Escobar";
		
		datos2[0] = "20099039";
		datos2[1] = "Juan";
		datos2[2] = "Melao";
		
		datos3[0] = "20102090";
		datos3[1] = "Meojosejuan";
		datos3[2] = "Milloon";
		
		datos4[0] = "20091234";
		datos4[1] = "Trujiloo mongoto";
		datos4[2] = "Josenumongo";
		
		estu[0] = datos;
		estu[1] = datos2;
		estu[2] = datos3;
		estu[3] = datos4;
		for(var ind = 0; ind < 5; ind++){
			setEstudiante(estu[ind]);
		}
	}
