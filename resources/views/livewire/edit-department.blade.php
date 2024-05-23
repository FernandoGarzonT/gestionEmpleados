<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <form action="{{route('Departments.update', $Department)}}" method="post">
            @csrf
            @method('put')
            <div class="py-12">
                <div class="text-3xl gap-2 mx-20 sm:px-10 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col my-10">
                        <label class="text-center text-5xl mb-10">Datos Departamento</label>

                        <label class="text-x1">Nombre Departamento</label>
                        <x-input type="text" name="nombreDepartamento" value="{{$Department->nombreDepartamento}}" /><br>
                        @error('nombreDepartamento')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Nombre Puesto</label>
                        <x-input type="text" name="nombrePuesto" value="{{$Department->nombrePuesto}}" /><br>
                        @error('nombrePuesto')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Descripcion</label>
                        <x-input type="text" name="descripcion" value="{{$Department->descripcion}}" /><br>
                        @error('descripcion')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                    </div>
                    <x-button type="submit" class="mb-16">Guardar</x-button>
                    <x-button href="{{route('dashboard')}}" class="mb-16 bg-yellow-600">Volver</x-button>
                </div>
            </div>
        </form>
    </x-app-layout>
</div>

