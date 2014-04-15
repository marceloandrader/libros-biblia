@extends('layout')

@section ('content')

<table class="book-table">
    <tbody>
        @for ($i=1; $i<=6; $i++)
        <tr>
            @for ($j=1; $j<=16; $j++)
            <td>
                @foreach ( $books as $book)
                @if ($book['position_x'] == $j && $book['position_y'] == $i)
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
                @endif
                @endforeach
            </td>
            @endfor
        </tr>
        @endfor
    </tbody>
</table>

@stop
