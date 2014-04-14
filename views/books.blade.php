@extends('layout')

@section ('content')

<table>
    <tbody>
        @for ($i=1; $i<=6; $i++)
        <tr>
            @for ($j=1; $j<=16; $j++)
            <td>
                @foreach ( $books as $book)
                @if ($book['position_x'] == $j && $book['position_y'] == $i)
                    {{$book['name']}}
                @endif
                @endforeach
            </td>
            @endfor
        </tr>
        @endfor
    </tbody>
</table>

@stop
