@extends('dashboard.master')


@section('content')
<a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">
    Crear
</a>
<table class="table">
    <thead>
    </thead>
    <tr>
        <td>
        Id
        </td>
        <td>
            Título
            </td>
            <td>
                Posteado
                </td>
                <td>
                    Creación
                </td>
                <td>
                    Actualización
                </td>
                <td>
                    Acciones
                </td>
        <tr>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>
            {{ $post -> id}}
            </td>
            <td>
                {{ $post -> title}}
                </td>
                <td>
                    {{ $post -> posted}}
                    </td>
                    <td>
                        {{ $post -> created_at->format('d-m-Y')}}
                    </td>
                    <td>
                        {{ $post -> updated_at->format('d-m-Y')}}
                    </td>
                    <td>
                      
                    </td>
            <tr>
        @endforeach
    </tbody>
</table>
  
@endsection









