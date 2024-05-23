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
                        <x-input type="text" name="nombres" /><br>
                        @error('nombres')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Apellidos</label>
                        <x-input type="text" name="apellidos" /><br>
                        @error('apellidos')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Cedula</label>
                        <x-input type="text" name="cedula" /><br>
                        @error('cedula')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Email</label>
                        <x-input type="email" name="email" /><br>
                        @error('email')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Nro Celular</label>
                        <x-input type="text" name="numeroCelular" /><br>
                        @error('numeroCelular')
                            <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label class="text-x1">Fecha Contratacion</label>
                        <x-input type="date" name="fechaContratacion" /><br>
                        @error('celular')
                        <p style="color:red">{{$message}}</p>
                        @enderror<br>

                        <label for="department_id">Departamento</label>
                        <Select id="department_id" name="department_id" required>
                         {{--    @foreach ($Department as $department)
                                <option value="{{$department->id}}">{{$department->nombreDepartamento}}</option>
                            @endforeach --}}
                        </Select>

                    </div>
                    <x-button type="submit" class="mb-16">Crear Empleado</x-button>
                    <x-button href="{{route('dashboard')}}" class="mb-16 bg-yellow-600">Volver</x-button>
                </div>
            </div>
        </form>
    </x-app-layout>
</div>
