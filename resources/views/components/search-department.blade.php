<div class="d-flex text-center text-2xl sm:px-40 sm:block py-1 mx-auto">
    <form action="{{route('Departments.index')}}" method="get">
        <div class="bg-white shadow-xl rounded-lg px-5 py-2">
            <input type="search" name="search" class="rounded-xl w-96 mx-5 py-2 " placeholder="search here...">
            <input type="submit" value="search"
                    class="px-10 py-1 rounded-xl border border-green-300 hover:bg-lime-500 hover:text-white">
        </div>
    </form>
</div>
