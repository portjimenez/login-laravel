@extends('layouts.plantilla')

@section('title', 'Registrate')

@section('content')


    <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24">
      <div class="mx-auto mb-4">
            @if (session('confirm'))
            <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>{{session('confirm')}}</p>
              </div>
            @endif
        </div>
        <h1 class="text-4xl lg:text-6xl text-center font-mono ">¡Bienvenido!</h1>
        <br>
        <h3 class="text-center lg:text-xl font-serif italic ">Registrate en nuestro sitio web</h3>
    <form action="{{route('guardar.name')}}" method="POST">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            @csrf
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                Nombres: 
            </label>
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="nombre" value="{{old('nombre')}}">    
            <br>
            @error('nombre')
                <small class="text-red-600">*{{$message}}</small>
            @enderror
            <br>
        </div>
    <div class="md:w-1/2 px-3">
        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
            Apellidos:
        </label>
        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="apellido" value="{{old('apellido')}}">
        <br>
        @error('apellido')
            <small class="text-red-600">*{{$message}}</small>
        @enderror
        <br>
    </div>
</div>

        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                    Nivel academico:
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="nivel_academico" value="{{old('nivel_academico')}}">
                <br>
                @error('nivel_academico')
                    <small class="text-red-600">*{{$message}}</small>
                @enderror
                <br>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Usuario:
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"  type="text" name="usuario" value="{{old('usuario')}}">
                <br>
                @error('usuario')
                    <small class="text-red-600">*{{$message}}</small>
                @enderror
                <br>
            </div>
        <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Contraseña:   
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="password" name="contrasena" value="{{old('contrasena')}}">
                <br>
                @error('contrasena')
                    <small class="text-red-600">*{{$message}}</small>
                @enderror
                <br>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                    Correo electronido:
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="email" name="correo" value="{{old('correo')}}">
                <br>
                @error('correo')
                    <small class="text-red-600">*{{$message}}</small>
                @enderror
                <br>
            </div>
        </div>
        <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3">
                    <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full" type="submit" class="">Registrate</button>
                </div>
            </div>
        </div>

    </form>
</div>

@endsection
    