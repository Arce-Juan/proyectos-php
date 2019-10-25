@extends('layouts.app')

@section('content')
<div class="containet">
    <div class="row">
        <div class="col">
            <h1>Usuarios</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($usuarios as $item)
                <tr>
                    <td scope="row">{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
