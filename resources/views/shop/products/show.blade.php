@extends ('layouts.app')

@section ('content')
<table>
    <tr>
        <td> {{$item->id}}</td>
        <td> {{$item->name}}</td>
        <td> {{$item->price}}</td>
        <td> {{$item->created_at}}</td>
</tr>
</table>
@endsection