//js Functions

//get http Request
function getHttp(){

	var xmlhttp=false;
	try
	{
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e)
	{
		try
		{ 
			// Creacion del objet AJAX para IE
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp=new XMLHttpRequest(); }

	return xmlhttp;
}


//Get element by 
function $(id,tipo){
			
	switch(tipo){
	
		case 1:
		return document.getElementById(id);
		break;
		
		case 2:
		return document.getElementsByTagName(id);
		break;
		
		case 3:
		return document.getElementsByName(id);
		break;
		
	}
}

function login(login,pass){

	httpRequest = getHttp();
	
	httpRequest.open("GET","php/login.php?usuario="+$(login,1).value+"&password="+$(pass,1).value,true);
	
	prompt("","php/login.php?usuario="+$(login,1).value+"&password="+$(pass,1).value);
	
	$("msg",1).innerHTML="<img src='img/loader.gif'>";
	
	httpRequest.onreadystatechange = function(){
	
		if(httpRequest.readyState==4 && httpRequest.status==200){
		
			if(httpRequest.responseText=="Fail"){
			
				$("msg",1).innerHTML="<font color='red'>Datos Incorrectos</font>";
			
			}else{
			
					datos = eval(" ("+ httpRequest.responseText +" )");
					
					console.log(datos);
					
					window.location = "php/redirecion.php?usuario="+ datos.usuario +"&privilegio="+datos.privilegio;
					
				}
		
		}
	
	}
	
	httpRequest.send(null);

}
