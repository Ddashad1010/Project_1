@extends ('layouts.app')

@section ('content')
<table>
    @foreach($items as $item)
    <tr>
        <td> {{$item->id}}</td>
        <td><a href="{{ route('products.show',$item->id)}}">{{$item->name}}</a></td>
        <td> {{$item->price}}</td>
        <td> {{$item->created_at}}</td>
</tr>
@endforeach
</table>
@endsection