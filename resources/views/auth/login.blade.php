@extends('layouts.app') @section('titulo')
    Inicia sesión en DevStagram
    @endsection @section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img class="border-sm" src="{{ asset('img/login.jpg') }}" alt="Imagen login usuarios" />
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="">
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="text" placeholder="Tu email de registro"
                        class="border p-3 w-full rounded-lg" />
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input id="password" name="password" type="password" placeholder="Tu contraseña de registro"
                        class="border p-3 w-full rounded-lg" />
                </div>
                <input type="submit" value="Iniciar sesión"
                    class="bg-sky-600 hover:bg-sky-700 cursor-pointer uppercase font-bold w-full '-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
@endsection
