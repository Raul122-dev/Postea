<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   

<style>
header a:hover {
    background:red;
    color:white;
    box-shadow: inset 0 0 0 2px black;
    border-radius: 7px;
}

.navbar-brand img{
    width: 100px;
    height: 50px;
    padding: 5px;
}

body{
    background: #F8F8F8;
}

.container{
    
    height: 2450px;
    width: 100%;
}

.contenido{
    box-shadow: 2px 2px 10px #666;
    padding-left: 10px;
    padding-right: 10px;
    height: 100%;
    width: 60%; 
    float: left;

} 

.noticia{
    border-top: 5rem;    
}

.noticia a{
    text-decoration: none;
    color: red;
}

.Stadia{
    padding-right: 20px;
    padding-left: 20px;
    width: 100%;
}

.Stadia:hover{
    color: white;
}

.nota1{
    padding-right: 20px;
    padding-left: 20px; 
    color:black;
}

.datos{
    padding-left: 20px;
}

.News{
    padding-top: 20px;
}

.News a{
    text-decoration: none;
    color:black;
    
}

.News a:hover{
    color:red;
}

.populares{
    height: 100%;
    width: 40%;
    float: left;
    padding-left: 20px;
    padding-top: 20px;
    padding-right: 20px; 
    
}

.pupular2{
    padding-top: 30px;
}

.popular3{
    padding-top: 30px;
}

.social{
    padding-top: 30px;
}

.redes{
    padding-top: 30px;
    display: inline-flex;
    width: 100%;
}

.red{

    padding: 10px;
    padding-top: 30px;
    background: white;
    height: 130px;
}

.redes img:hover{
    width: 75px;
    height: 75px;
}

.pop{
    padding-top: 10px;
}

.pop a{
    text-decoration: none;
    color:black;
}

.pop a:hover{
    color:red;
}

.footer{
    background:black;
    height: 150px;
    width: 100%;

}

.titulos{
    height: 40%;
    box-shadow: 2px 2px 10px #666;
}

.titulo{
    width: 70%;
    height: 100%;
    float: left;
    padding-top: 15px;
}

.titulo a{
    text-decoration: none;
    color: white;
    padding-left: 50px;
    
}

.titulo a:hover{
    color: red;
}

.informacion{
    height: 60%;

}

.logofooter{
    width: 30%;
    height: 100%;
    float: right;
    padding: 5px;
    padding-left: 190px 
}

.copy{
    width: 20%;
    float: left;
    padding-left: 50px
}

.texto{

    height: 100%;
    width: 60%;
    float: left;
    padding-top: 10px;
}

.texto b{
    color:white;
}

.redesfooter{

    float: right;
    height: 100%;
    width: 20%;
    display: inline-flex;
    
}

.redfooter{
    padding-left: 30px;
    padding-top: 30px;
}


.popular2 h3:before {
    content: '';
    width: 4rem;
    height: 3px;
    background-color: #ffc300;
    position: absolute;
    left: 0;
    bottom: 0;
}
</style>
</head>

<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="imagenes/logo1.gif" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Noticias</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mas!
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Esports</a>
                <a class="dropdown-item" href="#">Juegos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Reseñas-blogs</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Fan-Page</a>
            </li>
          </ul>
          <button type="button" class="btn btn-outline-danger">Login</button>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="google.com" >Buscar</button>
          </form>
        </div>
      </nav>
    </header>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/E3 2019.jpeg" height="500px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/cyberpunk 2077.gif" height="500px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          
          <video src="videos/Sequel to The Legend of Zelda- Breath of the Wild - First Look Trailer - Nintendo E3 2019.mp4" height="500px" class="d-block w-100" alt="..." autoplay></video>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container">
        <div class="contenido">
          <div class="News">
            <h1><a href="#">ULTIMAS NEWS <img src="iconos/aprobacion.png" height="40px" width="40px" alt=""></a> </h1>
          </div>
          <div class="noticia"><a href="#">
            <img src="imagenes/google_stadia.jpg" width="100%" alt="">
            <div class="Stadia"><h4><b>Los juegos de Stadia tendrán el mismo precio que en otras plataformas "PS4 - Xbox One - Swhitch"</b></h4></div>
            <div class="datos"><img src="imagenes/calendario.png" width="17px" height="17px"  alt=""> 30/06/2019 <img src="imagenes/usuario.png" width="17px" height="17px" alt=""> <a href="#">Giovanni Jiménez</a></div>
            <div class="nota1"><p>"En teoría, la versión de Stadia de un juego va a tener la mejor calidad de innovación y sofisticación en lo que respecta al motor del juego", defiende Harrison. No parece que aspectos como la latencia vayan a afectar al precio de los juegos en absoluto. Aclarado esto, parece que Google no impondrá precios sobre aquellos que elijan los propios editores de juegos.</p></div>
          </a></div>
          <div class="noticia"><a href="#">
            <img src="imagenes/nintendo-noticia.jpg" width="100%" alt="">
            <div class="Stadia"><h4><b>Nintendo y su fiesta particular</b></h4></div>
            <div class="datos"><img src="imagenes/calendario.png" width="17px" height="17px"  alt=""> 30/06/2019 <img src="imagenes/usuario.png" width="17px" height="17px" alt=""> <a href="#">Giovanni Jiménez</a></div>
            <div class="nota1"><p>Desde que inició la tradición de dar a conocer sus novedades a través de Nintendo Direct, la compañía comandada por Shuntaro Furukawa dejó claro que tenía planes bien definidos y que ya no consideraba redituable ni memorable el tener una gran conferencia de prensa para mostrarle al mundo sus novedades en uno de los mejores escaparates de gaming que existen: el E3. Estos breves segmentos dejan de lado casi por completo la ................</p></div>
          </a></div>
          <div class="noticia"><a href="pagina 1- enlace pagina principal .html">
            <img src="imagenes/zelda breath of the wild.jpg" width="100%" alt="">
            <div class="Stadia"><h4><b>La secuela de The Legend Of Zelda: Breath of The Wild ya esta en desarrollo</b></h4></div>
            <div class="datos"><img src="imagenes/calendario.png" width="17px" height="17px"  alt=""> 30/06/2019 <img src="imagenes/usuario.png" width="17px" height="17px" alt=""> <a href="#">Giovanni Jiménez</a></div>
            <div class="nota1"><p>Desde hace tiempo sabemos que un nuevo juego de The Legend of Zelda está en desarrollo. Por el momento no se sabe casi nada sobre él, pero la comunidad espera que esté relacionado o sea bastante parecido a The Legend of Zelda: Breath of The Wild</p></div>
          </a></div>
          <div class="noticia"><a href="#">
            <img src="imagenes/titanfall reseña.jpg" width="100%" alt="">
            <div class="Stadia"><h4><b>RESEÑA-TitanFall 2 "Un nuevo mundo"</b></h4></div>
            <div class="datos"><img src="imagenes/calendario.png" width="17px" height="17px"  alt=""> 30/06/2019 <img src="imagenes/usuario.png" width="17px" height="17px" alt=""> <a href="#">Giovanni Jiménez</a></div>
            <div class="nota1"><p>Han pasado más de dos años desde que jugamos Titanfall, producto del estudio de Respawn formado por ex veteranos Infinity Ward que trabajaron en la serie de Call of Duty.  Hasta la fecha, el juego continúa siendo sumamente activo en línea con cientos de miles de jugadores.</p></div>
          </a></div>
        </div>
        <div class="populares">
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Buscar</button>
          </form>
          <div class="pop">
              <h1><a href="#">Populares <img src="iconos/podio.png" height="30px" width="30px" alt=""></a> </h1>
          </div>
          <div class="popular1"><a href="#"><img src="imagenes/popular1.jpg" width="100%" alt=""></a></div>
          <div class="pupular2">
            <h3 class="Title">Clash Royale Temporada 1</h3>
          </div>
          <div class="popular3">
            <h3 class="Title">Las nuevas Targetas Graficas de AMD Y Nvidia</h3>
            <img src="imagenes/popular3.jpg" width="100%" alt="">
          </div>
          <div class="social">
            <h3 class="Title">Nuestras Redes Sociales</h3>
            <div class="redes">
              <div class="red"><img src="imagenes/facebook.png" width="70px" height="70px" alt=""></div>
              <div class="red"><img src="imagenes/gorjeo.png" width="70px" height="70px" alt=""></div>
              <div class="red"><img src="imagenes/google-plus.png" width="70px" height="70px" alt=""></div>
              <div class="red"><img src="imagenes/instagram.png" width="70px" height="70px" alt=""></div>
            </div>
          </div>
          <div class="facebook">
              <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
          </div>
        </div>
    </div>

    <footer class="footer">
      <div class="titulos">
        <div class="titulo"><b>
          <a href="">¡APOYA A GNEWS!</a>
          <a href="">PUBLICIDAD</a>
          <a href="">CONTACTO</a>
          <a href="">ULTIMOS LANZAMIENTOS</a></b>
        </div>
        <div class="logofooter">
          <img src="imagenes/logo1.gif" alt="" width="130px" height="60px">
        </div>
      </div>
      <div class="informacion">
        <div class="copy">
          <img src="imagenes/tecsup.png" alt="" width="200px" height="90px">
        </div>   
        <div class="redesfooter">
            <div class="redfooter"><img src="imagenes/facebook.png" width="25px" height="25px" alt=""></div>
            <div class="redfooter"><img src="imagenes/gorjeo.png" width="25px" height="25px" alt=""></div>
            <div class="redfooter"><img src="imagenes/google-plus.png" width="25px" height="25px" alt=""></div>
            <div class="redfooter"><img src="imagenes/instagram.png" width="25px" height="25px" alt=""></div>
        </div>
      </div>
    </footer>

    
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>