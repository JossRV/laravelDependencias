@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tabla de base de datos</h1>
           <table class="table">
            <thead>
                <th>ID</th>
                <th>nombre</th>
            </thead>
            <tbody>
                <tr>
                    @foreach ($categorias as $item)
                        <td>{{$item -> id_categoria}}</td>
                        <td>{{$item -> nombre}}</td>    
                    @endforeach
                </tr>
            </tbody>
           </table>
        </div>
    </div>
</div>
@endsection