@extends('layout')

@section ('content')
<h1>Libros de la Biblia</h1>
<table class="book-table">
    <tbody>
        @for ($i=1; $i<=6; $i++)
        <tr>
            @for ($j=1; $j<=16; $j++)
            <td>
                @foreach ( $books as $book)
                @if ($book['position_x'] == $j && $book['position_y'] == $i)
                <a href="javascript:void;">
                <div class="book {{$book['class']}}">
                    <span class="no_mss">{{$book['mss']}}</span>
                    <span class="chapters">{{$book['chapters']}}</span><br/>
                    <span class="verses">{{$book['verses']}}</span>
                    <br/>
                    <span class="abbr">
                        {{$book['abbr']}}
                    </span>
                    <span class="name">
                        {{$book['name']}}
                    </span>
                    <br/>
                    <span class="number">{{$book['number']}}</span>
                    <span class="pages">{{$book['page_start']}}-{{$book['page_end']}}</span>
                    <br/>
                </div>
                </a>
                @endif
                @endforeach
            </td>
            @endfor
        </tr>
        @endfor
    </tbody>
</table>

<h2>Leyenda</h2>

<ul class="legend">
    <li>
        <span class="pentateuco">
        Pentateuco</span>
    </li>
    <li>
        <span class="historia">
        Historia</span>
    </li>
    <li>
        <span class="sapiencial">
        Literatura Sapiencial</span>
    </li>
    <li>
        <span class="profetas-mayores">
        Profetas Mayores</span>
    </li>
    <li>
        <span class="profetas-menores">
        Profetas Menores</span>
    </li>
    <li>
        <span class="evangelios">
        Evangelios</span>
    </li>
    <li>
        <span class="cartas-paulinas">
        Cartas Paulinas</span>
    </li>
    <li>
        <span class="cartas-generales">
        Cartas Generales</span>
    </li>
    <li>
        <span class="apocaliptica">
        Apocalíptica</span>
    </li>
</ul>

@stop
