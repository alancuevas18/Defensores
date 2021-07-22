<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Los Defensores</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
        <link rel="shortcut icon" href="assets/header/icon.ico" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        @yield('OG')
    </head>
    <body>
        <div class="container wrap">
            <div class="row advertisements">
                <div class="col-md-12 translate-middle-x">
                    @yield('advert')
                    
                </div>
            </div>
                <hr>
                <div id="fecha">
                </div>
            <div class="row header">
                
                <div class="col-md-3 d-none d-md-block">
                    <div id="TT_FitArBYBYD1ccFGUjAqzjDDjzWl1LUWFrdEY1Zi5KED"></div>
                        <script type="text/javascript" src="{{ asset('/js/tiempo.js') }}"></script>
                </div>
    
                <div class="col-md-6 col-xs-12 col-sm-12 click-to-top">
                    <center>
                        <a href="/">
                        <img src="/assets/header/logo.png" class="img-fluid w-50" alt="Los Defensores">
                        <span>Sábado a las 4 PM</span>
                        </a>
                    </center>
                </div>
    
                <div class="col-md-3 d-none d-md-block">
                    <div class="input-group mb-3">
                        <form action="buscar" method="get">
                        <div class="input-group-prepend">
                            <input type="text" name="name" class="form-control" placeholder="Buscar" aria-label="">
                            <button type="submit" class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </button>
                        
                        </div>
                    </form>
                      </div>
                </div>
            </div>
    
            <div class="row menu mx-auto">
                <div class="col-md-12">
                    
                        <hr/ class="hrBold">
                        <center>
                            <div class="menu">
                        <div class="menu-items">
                            <a href="/categoria/"> Portada </a>
                            <a href="/categoria/opinion">    Opinión </a>
                            <a href="/categoria/deportes">    Deportes </a>
                            <a href="/categoria/salud">    Salud </a>
                            <a href="/categoria/economia">    Economía </a>
                            <a href="/categoria/mundiales">    Mundiales </a>
                            <a href="/categoria/medioambiente">    Medioambiente</a> 
                            <a href="/categoria/tecnologia">   Tecnología</a>
                            <a href="/categoria/farandula">    Farándula</a>
                       
                        </div>   
                    </div>
                    </center> 
                        <hr/>
                    
                </div>
            </div>
        
          
        @yield('content')
    <br>
</div>

    <div class="container-fluid footer">
        <div class="row ">               
            <div class="col-md-6"><h3> Ultimas Publicaciones</h3>
                @yield('last3')
            </div>
              <div class="col-md-6"><h3>Redes Sociales</h3>
                <div class="socialmedia">
                    <i class="fab social fa-whatsapp"></i>
                    <i class="fab social fa-facebook"></i>
                    <i class="fab social fa-instagram"></i>
                    <i class="fab social fa-twitter-square"></i>
                    <i class="fab social fa-youtube"></i>
                </div> 
             </div>
              

               
        </div>
        <center>
            <div class="copyright text-center mt-3">
                <h5>
              Copyright &copy; 2020 <span>Los Defensores</span>.
            </h5>
          </div>
           </center>
    </div>
    <script>
        var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        var f=new Date();
        date = diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
        document.getElementById("fecha").innerHTML = date;
    </script>
    <script type="text/javascript" src="{{ asset('/js/share.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/lightbox.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>