<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <form action="{{route('employee.store')}}" method="post">
            @csrf
            <div class="py-12">
                <div class="text-3xl gap-2 mx-20 sm:px-10 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col my-10">
                        <label class="text-center text-5xl mb-10">Datos Empleado</label>

                        <label class="text-x1">Nombres</label>
                        <x-input type="text" name="nombres" value="{{old('nombres')}}"/><br>
                        @error('nombres')
                            {{$message}}
                        @enderror

                        <label class="text-x1">Apellidos</label>
                        <x-input type="text" name="apellidos" value="{{old('apellidos')}}" /><br>
                        @error('apellidos')
                            {{$message}}
                        @enderror

                        <label class="text-x1">Cedula</label>
                        <x-input type="text" name="cedula"  value="{{old('cedula')}}"/><br>
                        @error('cedula')
                            {{$message}}
                        @enderror

                        <label class="text-x1">Email</label>
                        <x-input type="email" name="email"  value="{{old('email')}}"/><br>
                        @error('email')
                            {{$message}}
                        @enderror

                        <label class="text-x1">Nro Celular</label>
                        <x-input type="text" name="numeroCelular"  value="{{old('numeroCelular')}}"/><br>
                        @error('numeroCelular')
                            {{$message}}
                        @enderror

                        <label class="text-x1">Fecha Contratacion</label>
                        <x-input type="date" name="fechaContratacion"  value="{{old('fechaContratacion')}}"/><br>
                        @error('fechaContratacion')
                            {{$message}}
                        @enderror

                        <label for="department_id">Departamento</label>
                        <Select id="department_id" name="department_id" required>
                            @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->nombreDepartamento}}</option>
                            @endforeach
                        </Select>

                    </div>
                    <x-button type="submit" class="mb-16">Crear Empleado</x-button>
                    <x-button href="{{route('dashboard')}}" class="mb-16 bg-yellow-600">Volver</x-button>
                </div>
            </div>
        </form>
    </x-app-layout>
</div>
