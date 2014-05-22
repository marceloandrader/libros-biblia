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
                            <div class="book {{$book['class']}}" data-bind='book: {{json_encode($book)}}'>
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
                            <span class="pages">&nbsp;</span>
                            <?php /* {{$book['page_start']}}-{{$book['page_end']}} */ ?>
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
            <div class="book pentateuco" style="width: 136px; height: 124px; margin-left: 27px;">
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
                <span class="pages"></span>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="row legend">
            <div class="col-md-4">
                <a>
                    <span class="pentateuco">
                        Pentateuco</span>
                </a>
                <a>
                    <span class="historia">
                        Historia</span>
                </a>
                <a>
                    <span class="sapiencial">
                        Literatura Sapiencial</span>
                </a>
            </div>
            <div class="col-md-4">
                <a>
                    <span class="profetas-mayores">
                        Profetas Mayores</span>
                </a>
                <a>
                    <span class="profetas-menores">
                        Profetas Menores</span>
                </a>
                <a>
                    <span class="evangelios">
                        Evangelios</span>
                </a>
            </div>
            <div class="col-md-4">
                <a>
                    <span class="cartas-paulinas">
                        Cartas Paulinas</span>
                </a>
                <a>
                    <span class="cartas-generales">
                        Cartas Generales</span>
                </a>
                <a>
                    <span class="apocaliptica">
                        Apocalíptica</span>
                </a>
            </div>
        </div>
   </div>
</div>

@stop
