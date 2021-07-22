@extends('layouts.desing')

@section('advert')
<center>
    <a href=" {{$advert->url}} " target="_blank">
        <img src=" {{$advert->file}} " alt="alternative text" title="{{$advert->name}}" class="img-fluid" alt="">
    </a>
</center>
@endsection



@section('content')

<div class="row main-new">
    <div class="col-md-6 descripcion">
       <a href="categoria/{{$postCat1->category->slug}}"><span class="lastMin">{{$postCat1->category->name}}</span></a> 
            <br>
            <br>
       <span class="MainNewTitle"><a href="noticia/{{$postCat1->slug}}">{{$postCat1->name}}</a></span>
            <br>
            <br>

       <span class="MainExtract" >
           <p>
            {{$postCat1->excerpt}} </p>
            <b>Etiquetas:</b>
            @foreach ($postCat1->tags as $tag)
    
            <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}}</a>
            @endforeach
       </span>
       
       <p class="text-right"><a href="noticia/{{$postCat1->slug}}">Continuar Leyendo</a></p>
    </div>
    <div class="col-md-6 imagen">
        <a href="/noticia/{{$postCat1->slug}}">
           <div class="card-image" style="width:100%; height:300px; background-size: cover;  background-image:url('{{$postCat1->file}}');">
                    </div>
        </a>
        <p class="text-muted small">{{$postCat1->foot}}</p>
    </div>
</div>

    <hr>
<div class="row news">
    <div class="col-md-9 news">
        {{-- Anuncio --}}
        <div class="row">
            <div class="col-md-12">
                @if ($anuncio)
                <div class="card-image hover-shadow" alt="{{$anuncio->name}}" onclick="openModal();currentSlide(2)" style="cursor: pointer; width:100%; height:250px; background-size: cover;  background-image:url('{{$anuncio->file}}');">
                </div>
                @endif
               
            </div>
            {{-- Anuncio Fin --}}
            <div class="col-md-6 category">
                <a href="categoria/{{$postCat2->category->slug}}"><span class="categoryTitle">{{$postCat2->category->name}}</span></a>
                <a href="/noticia/{{$postCat2->slug}}">
                    <div class="card-image" style="width:100%; height:250px; background-size: cover;  background-image:url('{{$postCat2->file}}');">
                    </div>
                {{-- <img src="{{$postCat2->file}}" class="img-fluid" alt=""> --}}
                </a>  
                <p></p> 
                <span class="categoryArticle"><a href="noticia/{{$postCat2->slug}}">{{$postCat2->name}}</a></span> 
                <br>
                @foreach ($postCat2->tags as $tag)
                <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}}</a>
                @endforeach
            </div>

            <div class="col-md-6 category separador">
                <a href="categoria/{{$postCat3->category->slug}}"><span class="categoryTitle">{{$postCat3->category->name}}</span></a>    
                <a href="/noticia/{{$postCat3->slug}}">
                    <div class="card-image" style="width:100%; height:250px; background-size: cover;  background-image:url('{{$postCat3->file}}');">
                    </div>
                {{-- <img src="{{$postCat3->file}}" class="img-fluid w-100 img-thumbnail" alt="">   --}}
                </a>
                <p></p> 
                <span class="categoryArticle"><a href="noticia/{{$postCat3->slug}}">{{$postCat3->name}}</a></span> 
                <br>
                    @foreach ($postCat3->tags as $tag)
                    <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}}</a>
                    @endforeach
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-md-6">       
                <div class="row">
                    <div class="col-md-12 category ">
                        <hr>
                        <a href="categoria/{{$postCat4->category->slug}}"><span class="categoryTitle">{{$postCat4->category->name}}</span></a>    
                        <a href="/noticia/{{$postCat4->slug}}">
                        <div class="card-image" style="width:100%; height:250px; background-size: cover;  background-image:url('{{$postCat4->file}}');">
                            </div>
                        {{-- <img src="{{$postCat4->file}}" class="img-fluid" alt="">   --}}
                        </a> 
                        <p></p> 
                        <span class="categoryArticle"><a href="noticia/{{$postCat4->slug}}">{{$postCat4->name}}</a></span> 
                        <br>
                        @foreach ($postCat4->tags as $tag)
                    <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}}</a>
                    @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 category">
                        <hr>
                        <a href="categoria/{{$postCat5->category->slug}}"><span class="categoryTitle">{{$postCat5->category->name}}</span></a>   
                        <a href="/noticia/{{$postCat5->slug}}">
                            <div class="card-image" style="width:100%; height:250px; background-size: cover;  background-image:url('{{$postCat5->file}}');">
                            </div>
                        {{-- <img src="{{$postCat5->file}}" class="img-fluid " alt="">    --}}
                        </a>
                        <p></p> 
                        <span class="categoryArticle"><a href="noticia/{{$postCat5->slug}}">{{$postCat5->name}}</a></span> 
                        <br>
                        @foreach ($postCat5->tags as $tag)
                        <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
              
            <div class="col-md-6 separador">
                <div class="othernews ">
                    <hr>
                    <span class="categoryTitle">Otras Noticias</span> 
                    @foreach ($postOthers as $post)
                    <hr>
                    <div class="row">
                            <div class="col-md-4 imgOtherNew">
                                <div class="card-image d-none d-md-block" style="width:100%; height:80px; background-size: cover;  background-image:url('{{$post->file}}');">
                                </div>
                               <img src="{{$post->file}}" class="d-block d-sm-block d-md-none img-fluid" alt="">
                            </div>
                            <div class="col-md-8 align-middle">
                                <span class="othernewtitle">
                                    <a href="{{route('post', $post->slug)}}">{{$post->name}}</a>
                                </span><br>
                                <span class="timeAgo text-muted">{{$post->created_at->diffforhumans()}}</span><br>
                            </div>
                    </div>
                    @endforeach   
                                        
             </div>
            </div>
        </div> 

    </div>

    <div class="col-md-3 aside separador">
        <div class="col-md-12 ">
            <div class="row ">
                <span class="categoryTitle">Opini贸n</span>
            <hr>
            </div>

        </div>

        @foreach ($postOpinion as $post)   
        <div class="row aling-opinion-block">
            <div class="col-md-4" style="margin-right: -20px;">
                <div class="card-image d-none d-md-block" style="width:100%; height:70px; background-size: cover;  background-image:url('{{$post->file}}');">
                </div>
                 <img src="{{$post->file}}" class="d-block d-sm-block d-md-none img-fluid" alt=""> 
            </div>

            <div class="col-md-8">
                <span class="tituloOpinion">
                    <a href="{{route('post', $post->slug)}}">{{$post->name}}</a><br>
                </span>
               <b class="antetitulo">{{$post->excerpt}}</b> 
            </div>
        </div>
        @endforeach
           

        
        <hr>


        <div class="row">  
            
            <div class="col-md-12">  
                <span class="categoryTitle">
                    Sondeos 
                 </span> <br>
            <b>驴Se pondria usted la vacuna contra el corona virus?</b>   <br>
            <b>Si<input type="radio" name="respuesta" value="si"> <div class="progress"></b> 
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>

             <b>No</b>  <input type="radio" name="respuesta" value="no"> <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <buttom class="btn btn-primary pull-right btn-small" onclick="swal('Muchas gracias por su voto');">Votar</buttom>
            </div>
            
        </div>
        <hr>
        <div class="row">
            
            <div class="col-md-12">
                <span class="categoryTitle">Moneda</span><br>
                <div class="fuel">
                        <p class="underline"><b>Dolar Venta:</b> {{$dollarV->price}}</p>
                        <p class="underline"><b>Dolar Compra:</b> {{$dollarC->price}}</p>
                        <p class="underline"><b>Euro Venta:</b> {{$euroV->price}}</p>
                        <p class="underline"><b>Euro Compra:</b> {{$euroC->price}}</p>
                </div>
            
            </div>
        </div>
        <hr>
        <div class="row ">
           
            <div class="col-md-12">
                <span class="categoryTitle">Combustible</span>
                <br>   

                <div class="row fuel">
                    <div class="col-md-6 align-middle "><b class="">Gasolina Premiun:</b> </div>
                    <div class="col-md-4"> <span class="">RD${{$gp->price}}</span> </div>
                    <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/{{$gp->estatus}}.jpg" class=" img-fluid" alt=""></div>
                </div>
                <hr class="hrFuel">
                <div class="row fuel">
                    <div class="col-md-6"><b class="">Gasolina Regular:</b> </div>
                    <div class="col-md-4"><span class="">RD${{$gr->price}}</span></div>
                    <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/{{$gr->estatus}}.jpg" class=" img-fluid" alt=""></div>
                </div>
                <hr class="hrFuel">
                <div class="row fuel">
                    <div class="col-md-6"><b class="">Diesel Premiun:</b> </div>
                    <div class="col-md-4"><span class="">RD${{$dp->price}}</span></div>
                    <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/{{$dp->estatus}}.jpg" class="  img-fluid" alt=""></div>
                </div>
                <hr class="hrFuel">
                <div class="row fuel">  
                    <div class="col-md-6"><b class="">Diesel Regular:</b> </div>
                    <div class="col-md-4"><span class="">RD${{$dr->price}}</span></div>
                    <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/{{$dr->estatus}}.jpg" class="  img-fluid" alt=""></div>
                </div>
                    <hr class="hrFuel">
                <div class="row fuel">
                    <div class="col-md-6"><b class="">Gas Propano:</b> </div>
                    <div class="col-md-4"><span class="">RD${{$gasp->price}}</span></div>
                    <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/{{$gasp->estatus}}.jpg" class=" img-fluid" alt=""></div>
                </div>
                    <hr class="hrFuel">
                <div class="row fuel">
                    <div class="col-md-6"><b class="">Gas Natural:</b> </div>
                    <div class="col-md-4"><span class="">RD${{$gasn->price}}</span></div>
                   
                    <div class="col-md-2 d-none d-md-block"><img src="assets/fuel/{{$gasp->estatus}}.jpg" class=" img-fluid" alt=""></div>
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
                    <div class="row">
                        <div class="column">
                          <img src="{{$fun->file}}"  style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                    </div>
                    {{-- <div class="card-image" style="width:100%; height:270px; background-size: cover;  background-image:url('{{$fun->file}}');">
                    </div> --}}
                    {{-- <img src="assets/humor/humor1.jpg" class="img-fluid" alt=""> --}}
            </div>
        </div>
    </div>

 
    
    
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
    
        <div class="mySlides">
            {{-- Humor --}}
          <div class="numbertext">1 / 4</div>
          <img src="{{$fun->file}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            {{-- Anuncio 2 --}}
            @if ($anuncio)
                
            <img src="{{$anuncio->file}}" style="width:100%">
            @endif
          </div>
        
    
        <div class="caption-container">
          <p id="caption"></p>
        </div>
    
    
      </div>
    </div>   

   
</div>

</div>
<br>
@endsection


@section('last3')
    @include('web.last')
@endsection