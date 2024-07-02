<div>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="flex text-right text-2xl px-10 py-5 mx-auto">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg px-5 py-2">
                <a href="{{route('Departments.create')}}">Crear Departamento</a>
            </div>
        </div>

        <x-search-department />

        <div class="mt-0 py-2">
            <div class="text-center text-5xl gap-2 mx-auto sm:px-10 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @foreach ($Department as $departments)
                        <div class="my-10">
                            <a href="{{route('Departments.show', $departments)}}">
                                {{$departments->nombreDepartamento}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-4">
            {{ $Department->links() }}
        </div>
    </x-app-layout>

</div>
