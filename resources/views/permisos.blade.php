@extends('adminlte::page')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
@section('title', 'Permisos')

@section('content_header')
    <h1>Lista de permisos</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="">
        <form action="permisos.update" method="POST">
            @csrf
            <div class="px-3 py-4 flex-col">
                <div class="btn-container flex justify-between">

                    <div class="botones">
                        <button class="rounded bg-gray-500 text-white hover:bg-gray-400 w-24 p-2 mb-2">Copy</button>

                        <button class="rounded bg-gray-500 text-white hover:bg-gray-400 w-24 p-2 mb-2">Excel</button>

                        <button class="rounded bg-gray-500 text-white hover:bg-gray-400 w-24 p-2 mb-2">PDF</button>

                        <a class="rounded bg-gray-500 text-white hover:bg-gray-400 w-auto p-2 mb-2" type="button"
                            href="{{ route('permisos.create') }}">Agregar nuevo usuario</a>
                    </div>

                    <div class="mb-3">
                        <form action="">
                            <label for="FiltroData">Search</label>
                            <input type="text" class="text-black w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-stone-900 rounded-lg  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400" name="filtro" value="{{ $filtro }}">
                        </form>
                    </div>
                </div>

                <div>
                    <table class="w-100 text-md bg-white shadow-md rounded mb-4">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">ID</th>
                                <th class="text-left p-3 px-5">Email / Usuario</th>
                                <th class="text-left p-3 px-5">Permiso</th>
                                <th class="text-left p-3 px-5">Estado</th>
                                <th class="text-left p-3 px-5">Acciones</th>
                            </tr>
                            @foreach ($permisos as $permiso)
                            @if ($filtro == '' || str_contains($permiso->correo, $filtro) || 
                            str_contains($permiso->permiso, $filtro) || 
                            str_contains($permiso->estado, $filtro))
                                
                            @endif
                                <tr class="border-b hover:bg-slate-100">
                                    <td class="p-3 px-5">{{ $permiso->id }}</td>
                                    <td class="p-3 px-5">{{ $permiso->correo }}</td>
                                    <td class="p-3 px-5">
                                        <p class="bg-amber-300 font-semibold w-max p-1 rounded">{{ $permiso->permiso }}</p>
                                    </td>
                                    <td class="p-3 px-5">
                                        <p class="bg-green-400 w-max p-1 font-semibold rounded">{{ $permiso->estado }}</p>
                                    </td>
                                    <td class="p-3 px-5 flex justify-start">
                                        <a type="button" href="{{ route('permisos.edit', $permiso->id) }}"
                                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                            Edit
                                        </a>

                                        {{-- AQUI SE MANDA UNA SOLICITUD PARA ELIMINAR USUARIOS --}}
                                        <form id="deleteForm{{ $permiso->id }}"
                                            action="{{ route('permisos.destroy', $permiso->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $permiso->id }})"
                                                class="text-sm bg-red-500 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                Delete
                                            </button>
                                        </form>
                                        <script>
                                            function confirmDelete(permisoId) {
                                                if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
                                                    document.getElementById("deleteForm" + permisoId).submit();
                                                }
                                            }
                                        </script>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
