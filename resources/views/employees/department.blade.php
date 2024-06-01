<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="text-3xl gap-2 mx-20 sm:px-10 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col my-10">
                <label class="text-center text-5xl mb-10">{{__('Datos Departamentos')}}</label>

                <label class="text-x1">{{__('Departamento')}}</label>
                <h1 class="text-right mb-5 text-blue-600">{{$Department->nombreDepartamento}}</h1>

                <label class="text-x1">{{__('Puesto de Trabajo')}}</label>
                <p class="text-right mb-5 text-blue-600"> {{$Department->nombrePuesto}}</p>

                <label class="text-x1">{{__('Descripcion')}}</label>
                <p class="text-right mb-5 text-blue-600">{{$Department->descripcion}}</p>
            </div>

            <a href="{{route('Departments.edit', $Department)}}"
                class="mb-16 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50
                transition ease-in-out duration-150 ">
              Editar</a>
            <a href="{{route('Departments.destroy', $Department)}}"
                class="mb-16 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md
                font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50
                transition ease-in-out duration-150 ">
                Delete</a>
        </div>
    </div>
</x-app-layout>
