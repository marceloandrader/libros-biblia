@extends('layout')

@section ('content')
<h1>Libros de la Biblia</h1>
<div class="row">
    <div class="col-md-12">
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
    </div>
</div>

<h2>Leyenda</h2>

<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="book pentateuco col-md-4 col-md-offset-2">
                <span class="no_mss">Mss</span>
                <span class="chapters"># of Cap.</span><br>
                <span class="verses"># of Vers.</span>
                <br>
                <span class="abbr">
                    Gn
                </span>
                <span class="name">
                    Génesis
                </span>
                <br>
                <span class="number">No. Libro</span>
                <span class="pages">Pag</span>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="row legend">
            <div class="col-md-4">
                <span class="pentateuco">
                    Pentateuco</span>
                <span class="historia">
                    Historia</span>
                <span class="sapiencial">
                    Literatura Sapiencial</span>
            </div>
            <div class="col-md-4">
                <span class="profetas-mayores">
                    Profetas Mayores</span>
                <span class="profetas-menores">
                    Profetas Menores</span>
                <span class="evangelios">
                    Evangelios</span>
            </div>
            <div class="col-md-4">
                <span class="cartas-paulinas">
                    Cartas Paulinas</span>
                <span class="cartas-generales">
                    Cartas Generales</span>
                <span class="apocaliptica">
                    Apocalíptica</span>
            </div>
        </div>
   </div>
</div>

@stop
