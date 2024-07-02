<div class="text-center text-2xl py-1">
    <form action="{{route('Employees.index')}}" method="get">
        <div class="bg-white shadow-xl rounded-lg py-2">
            <input type="date" name="search-date" class="rounded-xl px-20 py-2 text-center" placeholder="search here...">
            <input type="submit" value="search"
                    class="px-10 py-1 rounded-xl border border-green-300 hover:bg-lime-500 hover:text-white">
        </div>
    </form>
</div>
