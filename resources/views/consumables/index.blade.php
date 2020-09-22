@extends('layouts.app')   <!-- Extender plantilla blade -->

@section('content')     <!-- Invocar sección content -->
<!-- Lo que se escriba aquí se verá en el index -->
<div class="text-center">
    <h1>Consumibles</h1>
</div>
<br><br>

<div>
    <a href="{{ route('consumables.create') }}">
        <button class="btn btn-primary">Agregar</button>
    </a>
</div>

<table class="table table-responsive-md">
    <thead>
    <th>ID</th>
    <th>Artículo</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Acciones</th>
    </thead>
    <tbody>
    @forelse ($consumables as $consumable)

        <tr>
            <td>{{ $consumable->id }}</td>
            <td>{{ $consumable->name }}</td>
            <td>{{ $consumable->price }}</td>
            <td>{{ $consumable->quantity }}</td>
            <td>view - edit - delete</td>
        </tr>
    @empty
        <div class="text-center">
            <p>No hay datos</p>
            <a href="{{ route('consumables.create') }}">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
    @endforelse
    </tbody>
</table>

@endsection
