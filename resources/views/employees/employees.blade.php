<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="text-3xl gap-2 mx-20 sm:px-10 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col my-10">
                <label class="text-center text-5xl mb-10">Datos Empleado</label>

                <label class="text-x1">{{__('Nombres y Apellidos')}}</label>
                <h1 class="text-right mb-5 text-blue-600">{{$Employee->nombres}} {{$Employee->apellidos}}</h1>

                <label class="text-x1">{{__('Cedula')}}</label>
                <p class="text-right mb-5 text-blue-600"> {{$Employee->cedula}}</p>

                <label class="text-x1">{{__('Email')}}</label>
                <p class="text-right mb-5 text-blue-600">{{$Employee->email}}</p>

                <label class="text-x1">{{__('Nro Celular')}}</label>
                <p class="text-right mb-5 text-blue-600">{{$Employee->numeroCelular}}</p>

                <label class="text-x1">{{__('Fecha Contratacion')}}</label>
                <p class="text-right mb-5 text-blue-600">{{$Employee->fechaContratacion}}</p>
            </div>

            <a href="{{route('Employees.edit', $Employee )}}" class="mb-16 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 ">Editar</a>
            <a href="{{route('Employees.destroy', $Employee )}}" class="mb-16 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 ">Delete</a>
        </div>
    </div>
</x-app-layout>
