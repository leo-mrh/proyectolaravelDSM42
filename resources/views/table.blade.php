@extends('layouts.app')
@section('content')
<div class="conyainer">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Existencias</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <body>
            @foreach ($prod as $pro )
                <tr>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->description}}</td>
                    <td>{{$pro->stock}}</td>
                    <td>{{$pro->price}}</td>
                </tr>
            @endforeach
        </body>
    </table>
    {{$prod->links()}}
</div>
@endsection