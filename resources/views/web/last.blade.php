<ul>
    @foreach ($last3 as $last)
            <li><a href="noticia/{{$last->slug}}"><h4 class="pl-2 media-heading">{{$last->name}}</h4></a></li>
    @endforeach
</ul>