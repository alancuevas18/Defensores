<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Los Defensores</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="shortcut icon" href="assets/header/icon.ico" />
    </head>
    <body>
          
    <div class="container wrap">
        <div class="row advertisements">
            <div class="col-md-12 translate-middle-x">
                <center>
                    <a href="http://ngmedia.com.do/" target="_blank">
                        <img src="{{ asset('assets/header/anuncio.png') }}"" class="img-fluid" alt="">
                    </a>
                </center>
            </div>
        </div>
            <hr>
            <div id="fecha">
            </div>
        <div class="row header">
            
            <div class="col-md-3 d-none d-md-block">
                <div id="TT_FitArBYBYD1ccFGUjAqzjDDjzWl1LUWFrdEY1Zi5KED"></div>
                    <script type="text/javascript" src="{{ asset('js/tiempo.js') }}"></script>
            </div>

            <div class="col-md-6 col-xs-12 col-sm-12 click-to-top">
                <center>
                    <img src="assets/header/logo.png" class="img-fluid w-50" alt="Los Defensores">
                    <span>Sábado a las 4 PM</span>
                </center>
            </div>

            <div class="col-md-3 d-none d-md-block">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="">
                        <button type="button" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </button>
                    </div>
                    
                  </div>
            </div>
        </div>

        <div class="row menu mx-auto">
            <div class="col-md-12">
                
                    <hr/ class="hrBold">
                    <center>
                        <div class="menu">
                    <div class="menu-items">
                        <a href="#"> Portada </a>
                        <a href="#">    Opinión </a>
                        <a href="#">    Deportes </a>
                        <a href="#">    Salud </a>
                        <a href="#">    Economía </a>
                        <a href="#">    Mundiales </a>
                        <a href="#">    Medioambiente</a> 
                        <a href="#">   Tecnología</a>
                        <a href="#">    Farándula</a>
                   
                    </div>   
                </div>
                </center> 
                    <hr/>
                
            </div>
        </div>
            
        <div class="row main-new">
            <div class="col-md-6 descripcion">
               <span class="lastMin">Último Minuto</span> 
                    <br>
                    <br>
               <span class="MainNewTitle">Presidente Abinader otorga la Orden al mérito de Duarte, Sánchez y Mella a embajadora de EE.UU.</span>
                    <br>
                    <br>

               <span class="MainExtract" >
                   <p>
                    Santo Domingo.- El presidente Luis Abinader, al condecorar con la Orden al mérito de Duarte, Sánchez y Mella, a la embajadora de Estados Unidos en el país, Robin Bernstein,  destacó este martes sus cualidades diplomáticas y profesionales, a la que calificó como una amiga de la República Dominicana.
                   </p>

               </span>
               
               <p class="text-right"><a href="#">Continuar Leyendo</a></p>
            </div>
            <div class="col-md-6 imagen">
                <img src="assets/news/presidente.jpg" class="img-fluid" alt="">
                <p class="text-muted small">Momento otorgam la Orden al mérito de Duarte, Sánchez y Mella a embajadora de EE.UU.</p>
            </div>
        </div>
            <hr>
        <div class="row news">
            <div class="col-md-9 news">
                <div class="row">
                    <div class="col-md-6 category">
                        <span class="categoryTitle">Salud</span>    
                        <img src="assets/news/casos.jpg" class="img-fluid" alt="">  
                        <br> 
                        <br> 
                        <span class="categoryArticle">Casos globales de covid-19 suben a 84 millones, sin un gran repunte postnavideño</span> 
                    </div>

                    <div class="col-md-6 category separador">
                        <span class="categoryTitle">Mundiales</span>    
                        <img src="assets/news/bomba.jpg" class="img-fluid" alt="">  
                        <br> 
                        <br> 
                        <span class="categoryArticle">Amenaza de bomba en NY tras encontrar paquete sospechoso dentro de automóvil</span> 
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-md-6">       
                        <div class="row">
                            <div class="col-md-12 category ">
                                <hr>
                                <span class="categoryTitle">Economia</span>    
                                <img src="assets/news/donde.jpeg" class="img-fluid" alt="">   
                                <br> 
                                <br>
                                <span class="categoryArticle">¿Dónde y a quiénes ha afectado más la pobreza provocada por la pandemia en República Dominicana?</span> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 category">
                                <hr>
                                <span class="categoryTitle">Deportes</span>   
                                
                                <img src="assets/news/jose.jpeg" class="img-fluid" alt="">   
                                <br> 
                                <br> 
                                <span class="categoryArticle">José Sirí guía a Gigantes del Cibao a su tercera victoria en la serie semifinal "A"</span> 
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-md-6 separador">
                        <div class="othernews ">
                            <hr>
                            <span class="categoryTitle">Más Noticias</span>
                            <div class="row">
                                    <div class="col-md-4 imgOtherNew">
                                        <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8 align-middle">
                                        <span class="timeAgo text-muted">hace 2 horas</span><br>
                                        <span class="othernewtitle">
                                            Intrant utilizará simuladores de autos para examen de licencias
                                        </span>
                                    </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4 imgOtherNew">
                                    <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                                </div>
                                <div class="col-md-8 align-middle">
                                    <span class="timeAgo text-muted">hace 2 horas</span><br>
                                    <span class="othernewtitle">
                                        Intrant utilizará simuladores de autos para examen de licencias
                                    </span>
                                </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-4 imgOtherNew">
                                <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                            </div>
                            <div class="col-md-8 align-middle">
                                <span class="timeAgo text-muted">hace 2 horas</span><br>
                                <span class="othernewtitle">
                                    Intrant utilizará simuladores de autos para examen de licencias
                                </span>
                            </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4 imgOtherNew">
                            <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                        </div>
                        <div class="col-md-8 align-middle">
                            <span class="timeAgo text-muted">hace 2 horas</span><br>
                            <span class="othernewtitle">
                                Intrant utilizará simuladores de autos para examen de licencias
                            </span>
                        </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-4 imgOtherNew">
                        <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                    </div>
                    <div class="col-md-8 align-middle">
                        <span class="timeAgo text-muted">hace 2 horas</span><br>
                        <span class="othernewtitle">
                            Intrant utilizará simuladores de autos para examen de licencias
                        </span>
                    </div>
            </div>
            <hr>

                <div class="row">
                    <div class="col-md-4 imgOtherNew">
                        <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                    </div>
                    <div class="col-md-8 align-middle">
                        <span class="timeAgo text-muted">hace 2 horas</span><br>
                        <span class="othernewtitle">
                            Intrant utilizará simuladores de autos para examen de licencias
                        </span>
                    </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4 imgOtherNew">
                    <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
                </div>
                <div class="col-md-8 align-middle">
                    <span class="timeAgo text-muted">hace 2 horas</span><br>
                    <span class="othernewtitle">
                        Intrant utilizará simuladores de autos para examen de licencias
                    </span>
                </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-4 imgOtherNew">
                <img src="assets/news/intrant.jpg" class=" img-fluid" alt="">
            </div>
            <div class="col-md-8 align-middle">
                <span class="timeAgo text-muted">hace 2 horas</span><br>
                <span class="othernewtitle">
                    Intrant utilizará simuladores de autos para examen de licencias
                </span>
            </div>
    </div>
    <hr>
                          
                            
                                                
                     </div>
                    </div>
                </div> 

            </div>

            <div class="col-md-3 aside separador">
                <div class="col-md-12 ">
                    <div class="row ">
                        <span class="categoryTitle">Opinión</span>
                    <hr>
                    </div>

                </div>

                <div class="row ">
                    <div class="col-md-4" style="margin-right: -20px;">
                        <img src="assets/opinion/leonelcloseup.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-8">
                        <span class="tituloOpinion">
                            LEONEL FERNÁNDEZ:<br>
                        </span>
                       <b class="antetitulo">Es tiempo de unidad nacional</b> 
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-md-4" style="margin-right: -20px;">
                        <img src="assets/opinion/juanlopez.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-8">
                        <span class="tituloOpinion">
                            REFLEXIONES:<br>
                        </span>
                       <b class="antetitulo">Cuidado con esta crisis economica!</b> 
                    </div>
                </div>  
                    <br>
                <div class="row">
                    <div class="col-md-4" style="margin-right: -20px;">
                        <img src="assets/opinion/ng.png" class="img-fluid" alt="">
                    </div>
                        <br>
                    <div class="col-md-8">
                        <span class="tituloOpinion">
                            LITERATURA:<br>
                        </span>
                       <b class="antetitulo">Los vesos crudos de César Vallejo</b> 
                    </div>
                </div>

                
                <hr>


                <div class="row">  
                    
                    <div class="col-md-12">  
                        <span class="categoryTitle">
                            Sondeos 
                         </span> <br>
                    <b>¿Se pondria usted la vacuna contra el corona virus?</b>   <br>
                    <b>Si</b> <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                      </div>

                     <b>No</b>  <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                    </div>
                    
                </div>
                <br>
                <hr>
                <div class="row">
                    
                    <div class="col-md-12">
                        <span class="categoryTitle">Moneda</span><br>
                        <p class="underline"><b>Dolar:</b> Venta 57.70 Compra 58.50</p>
                        
                        <p class="underline"><b>Euro:</b> &nbsp; Venta 60.10 Compra 63.20</p>
                    </div>
                </div>
                <hr>
                <div class="row ">
                   
                    <div class="col-md-12">
                        <span class="categoryTitle">Combustible</span>
                        <br>

                            

                        <div class="row fuel">
                            <div class="col-md-6 align-middle "><b class="">Gasolina Premiun:</b> </div>
                            <div class="col-md-4"> <span class="">RD$216.20</span> </div>
                            <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/sube.jpeg" class=" img-fluid" alt=""></div>
                        </div>
                        <hr class="hrFuel">
                        <div class="row fuel">
                            <div class="col-md-6"><b class="">Gasolina Regular:</b> </div>
                            <div class="col-md-4"><span class="">RD$216.20</span></div>
                            <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/baja.jpg" class=" img-fluid" alt=""></div>
                        </div>
                        <hr class="hrFuel">
                        <div class="row fuel">
                            <div class="col-md-6"><b class="">Diesel Premiun:</b> </div>
                            <div class="col-md-4"><span class="">RD$216.20</span></div>
                            <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/igual.jpg" class="  img-fluid" alt=""></div>
                        </div>
                        <hr class="hrFuel">
                        <div class="row fuel">  
                            <div class="col-md-6"><b class="">Diesel Regular:</b> </div>
                            <div class="col-md-4"><span class="">RD$216.20</span></div>
                            <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/sube.jpeg" class="  img-fluid" alt=""></div>
                        </div>
                            <hr class="hrFuel">
                        <div class="row fuel">
                            <div class="col-md-6"><b class="">Gas Propano:</b> </div>
                            <div class="col-md-4"><span class="">RD$216.20</span></div>
                            <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/baja.jpg" class=" img-fluid" alt=""></div>
                        </div>
                            <hr class="hrFuel">
                        <div class="row fuel">
                            <div class="col-md-6"><b class="">Gas Natural:</b> </div>
                            <div class="col-md-4"><span class="">RD$216.20</span></div>
                            <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/igual.jpg" class=" img-fluid" alt=""></div>
                        </div>
                        <hr class="hrFuel">
                        
                    </div>
                </div>
                    <hr>
                <div class="row">
                   
                        <div class="col-md-12">
                            
                        <span class="categoryTitle">
                            Humor
                            </span> <br>
                            <img src="assets/humor/humor1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

                

           
        </div>

    </div>
    <br>
    <div class="container-fluid footer">
        <div class="row ">               
              <div class="col-md-6"><h3> Lo mas buscado</h3></div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </body>
</html>
