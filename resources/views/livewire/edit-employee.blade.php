<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <form action="{{route('Employees.update', $Employee)}}" method="post">
            @csrf
            @method('put')
            <div class="py-12">
                <div class="text-3xl gap-2 mx-20 sm:px-10 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col my-10">
                        <label class="text-center text-5xl mb-10">Datos Empleado</label>

                        <label class="text-x1">Nombres y Apellidos</label>
                        <x-input type="text" name="nombres" value="{{old('nombres', $Employee->nombres)}}" /><br>
                        @error('nombres')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>
                        <x-input type="text" name="apellidos" value="{{$Employee->apellidos}}" /><br>
                        @error('apellidos')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Cedula</label>
                        <x-input type="text" name="cedula" value="{{$Employee->cedula}}" /><br>
                        @error('cedula')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Email</label>
                        <x-input type="email" name="email" value="{{$Employee->email}}" /><br>
                        @error('email')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Nro Celular</label>
                        <x-input type="text" name="numeroCelular" value="{{$Employee->numeroCelular}}" /><br>
                        @error('numeroCelular')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Fecha Contratacion</label>
                        <x-input type="date" name="fechaContratacion" value="{{$Employee->fechaContratacion}}" /><br>
                        @error('celular')
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

