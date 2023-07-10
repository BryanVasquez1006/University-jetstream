@extends('adminlte::page')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
@section('title', 'Permisos')

@section('content_header')

@stop

@section('content')

    <div class="">
        <div class="px-3 py-4 flex-col">

            <div>
                <div class="flex h-screen bg-gray-100">
                    <div class="m-auto">
                        <div>
                            {{-- FORMULARIO --}}
                            <form action="POST" action="">
                                <div class="mt-5 bg-white rounded-lg shadow">
                                    <div class="flex">
                                        <div class="flex-1 py-5 pl-5 overflow-hidden">
                                            <svg class="inline align-text-top" height="24px" viewBox="0 0 24 24"
                                                width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                <g>
                                                    <path d="m4.88889,2.07407l14.22222,0l0,20l-14.22222,0l0,-20z"
                                                        fill="none" id="svg_1" stroke="null"></path>
                                                    <path
                                                        d="m7.07935,0.05664c-3.87,0 -7,3.13 -7,7c0,5.25 7,13 7,13s7,-7.75 7,-13c0,-3.87 -3.13,-7 -7,-7zm-5,7c0,-2.76 2.24,-5 5,-5s5,2.24 5,5c0,2.88 -2.88,7.19 -5,9.88c-2.08,-2.67 -5,-7.03 -5,-9.88z"
                                                        id="svg_2"></path>
                                                    <circle cx="7.04807" cy="6.97256" r="2.5" id="svg_3">
                                                    </circle>
                                                </g>
                                            </svg>
                                            <h1 class="inline text-2xl font-semibold leading-none">Agregar usuario</h1>

                                            <h5 class="inline text-2xl font-semibold leading-none">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-5">
                                        <input type="email"
                                            class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"
                                            value="">


                                        {{-- ACCESS DROP-DOWN STARTS HERE --}}
                                        <div class="mt-2">

                                            <!-- This is an example component -->
                                            <div class="max-w-lg mx-auto">

                                                <button
                                                    class="text-white bg-zinc-950 hover:bg-zinc-800 focus:ring-4 focus:bg-zinc-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                                                    type="button" data-dropdown-toggle="dropdown">Seleccione permiso <svg
                                                        class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                    </svg></button>

                                                <!-- Dropdown menu -->
                                                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-1"
                                                    id="dropdown">

                                                    <ul class="py-1" aria-labelledby="dropdown">
                                                        <li>
                                                            <a href="#"
                                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Administrador</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Maestro</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Estudiante</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                            <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

                                        </div>










                                        {{-- STATUS DROP-DOWN STARTS HERE --}}
                                        <div class="mt-2">

                                            <!-- This is an example component -->
                                            <div class="max-w-lg mx-auto">

                                                <button
                                                    class="text-white bg-zinc-950 hover:bg-zinc-800 focus:ring-4 focus:bg-zinc-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                                                    type="button" data-dropdown-toggle="dropdown">Seleccione estado <svg
                                                        class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                    </svg></button>

                                                <!-- Dropdown menu -->
                                                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-1"
                                                    id="status-dropdown">

                                                    <ul class="py-1" aria-labelledby="status-dropdown">
                                                        <li>
                                                            <a href="#"
                                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Activo</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Inactivo</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Pendiente</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>



                                        </div>


















                                        <div class="px-5 pb-5">
                                            <hr class="mt-4">
                                            <div class="flex flex-row-reverse p-3">
                                                <div class="flex-initial pl-3">
                                                    <button type="button"
                                                        class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                            <path
                                                                d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z"
                                                                opacity=".3"></path>
                                                            <path
                                                                d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z">
                                                            </path>
                                                        </svg>
                                                        <span class="pl-2 mx-1">Save</span>
                                                    </button>
                                                </div>
                                                <div class="flex-initial">
                                                    <button type="button"
                                                        class="flex items-center px-5 py-2.5 font-medium tracking-wide text-black capitalize rounded-md  hover:bg-red-200 hover:fill-current hover:text-red-600  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 0 24 24" width="24px">
                                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                            <path d="M8 9h8v10H8z" opacity=".3"></path>
                                                            <path
                                                                d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z">
                                                            </path>
                                                        </svg>
                                                        <span class="pl-2 mx-1">Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
