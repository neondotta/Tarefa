
var imgload = "<img src='ajax-loader.gif' />";

function Ajax(arq, div){

		
		var objdiv = document.getElementById(div);
		objdiv.innerHTML = imgload;
		// objeto que representa o canal http
		//alert(http);
		
		// ver o estado 
		//alert(http.readyState);
		
		// metodo que abre a comunicação com alguem no servidor
		// se eu quiser enviar parametros para a pagina PHP:
		//		- por GET os parametros vão junto com o nome do arquivo (arq.php?par=123)
		//		- por POST os paramentros vão no método send()
		
		var http = new XMLHttpRequest();
				
		http.open("GET",arq);
		
		// método que envia parametros para a pagina do servidor se for por POST
		http.send(null);
		// cada troca de estado executa uma função
		http.onreadystatechange = function(){
		
			// Estado 4 - completado, a comunicação foi realizada.
			if(http.readyState == 4){
			
				if(http.status == 200){
				
					objdiv.innerHTML = http.responseText;
				
				}else{
				
					objdiv.innerHTML = "Bug:"+http.status;
				
				}
				
			}
		}
}