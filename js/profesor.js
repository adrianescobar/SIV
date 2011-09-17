window.load = function(){
	var table = document.getElementById("estudiantes");
	
	function setEstudiante(datoEstudiante)
	{
		var tr = document.createElement("tr");
		for(var ind = 0; ind <= 3; ind++)
		{
			var td = document.createElement("td");
			td.innnerHTML += datoEstudiante[ind];
			tr.appendChild(tr);
		}
	}
	
	var dato = {"20092090","Adrian", "Escobar"};
	setEstudiante(dato);
}