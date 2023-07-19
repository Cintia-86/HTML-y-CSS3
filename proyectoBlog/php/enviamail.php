
<!DOCTTYPE html>
<html>
  <head manifest="/manifiesto/manifiesto.cache">
		  	<title>Weblog de Jose Vicente Carratala</title>
		  	<meta name="description" content="Weblog">
		  	<meta name="keywords" content="weblog">
		  	<meta http-equiv="refresh" content="500">
		  	<link rel=stylesheet href="../css/estilos.css">
  </head>
  <body>
		<div id="cajaheader"></div>
		<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/Person">
			<header>
				<div id="logo"></div>
				<nav>
					<ul>
						<li><a href="index.html"><canvas id="iconoinicio" width="50" height="50"></canvas><br/>Inicio</a></li>
						<li><a href="noticias.html"><canvas id="icononoticias" width="50" height="50"></canvas><br/>Noticias</a></li>
						<li><a href="sobremi.html"><canvas id="iconosobreMi" width="50" height="50"></canvas><br/>Sobre mi</a></li>
						<li><a href="contacto.html"><canvas id="iconocontacto" width="50" height="50"></canvas><br/>Contacto</a></li>
					</ul>
				</nav>

				<h1>
					<span itemprop="name">
						Jose Vicente Carratala
					</span>
				</h1>
				<h2>
					<span itemprop="title">
						Creativo Multimedia
					</span>
				</h2>
			</header>
			<div id="contenido">
			  <?php

//Recibo las variabes del formulario

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Te muestro las variables


echo "<h3>El mensaje que has enviado es:</h3>";
echo "<br />";
echo "<p>Nombre: ";
echo $nombre;
echo "<br />";
echo "Email:";
echo $mail;
echo "<br />";
echo "Mensaje: ";
echo $mensaje;
echo "</p>";

//Envio un email
/*
$aquien = "info@jocarsa.com";
$asunto ="Has recibido un corre del Blog";
$mensajemail = $nombre." con el email ".$mail." te ha enviado un mensaje que dice ".$mensaje;

if(mail($aquien,$asunto;$mesaje)){

echo "Tu mail se ha enviado correctamente";

}else{
	echo "El envio del mail ha fallado";
}
*/

?>
			</div>
			
			<footer>
				<h6>
					<div class="vcard">
						<div> <span class="name">Jose Vicente Carratala</span>
							<div>
								<span class="tel">96 000 00 00</span>-<span class="email">info@jocarsa.com</span>
							</div>
						</div>
					</div>
				</h6>
			</footer>
			</div>
		</div>
	</body>
</html>


<script type="text/javascript">
		 if(localStorage.pagecount){localStorage.pagecount = Number(localStorage.pagecount)+1;
		 }else{localStorage.pagecount = 1;}
		  document.write("has visitado mi página " + localStorage.pagecount + "veces");
		  if(sessionStorage.pagecount){sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;
		 }else{sessionStorage.pagecount = 1;}
		  document.write("En esta sesión, has visitado mi página :" + sessionStorage.pagecount + "veces");
</script>

<script type="text/javascript">

					var micolor = "Black";
					var miotrocolor = "White";
					var mitercercolor = "Black";
					var escala = 0.5;


					//Dibujo el ícono SobreMi

 				var c=document.getElementById("iconosobreMi");
 				var ctx=c.getContext("2d");

					ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*25,escala*20,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill(); 

	    ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*90,escala*40,Math.PI,Math.PI*2,false);
	    ctx.closePath;
	    ctx.fill(); 

	    //Dibujo el ícono Contacto

	    var c=document.getElementById("iconocontacto");
 				var ctx=c.getContext("2d");

					ctx.fillStyle=(miotrocolor);
					ctx.beginPath();
					ctx.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill(); 

	    ctx.fillStyle=(miotrocolor);
					ctx.beginPath();
					ctx.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	    ctx.closePath;
	    ctx.fill(); 

	    ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill(); 

	    ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	    ctx.closePath;
	    ctx.fill(); 

	    //Dibujo el ícono Inicio

	    var c=document.getElementById("iconoinicio");
 				var ctx=c.getContext("2d");

					ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill(); 

	    ctx.fillStyle=(mitercercolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill()

					ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill(); 

	    //Dibujo el ícono Noticias

 				var c=document.getElementById("icononoticias");
 				var ctx=c.getContext("2d");

					ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	    ctx.closePath;
	    ctx.fill(); 

	    ctx.fillStyle=(micolor);
					ctx.beginPath();
					ctx.arc(escala*50,escala*50,escala*40,Math.PI,Math.PI*2,false);
	    ctx.closePath;
	    ctx.fill();
	    
</script>