<div class="flex gap-2 py-5 lg:grid-cols-2 m-0">
    @if (Route::has('login'))
        <nav class="mx-8 flex flex-1 justify-end">
            <a href="{{ route('welcome') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent
            transition hover:text-black/70 focus:outline-none
             focus-visible:ring-[#FF2D20]"
            >{{ __('Home') }}</a>
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent
                    transition hover:text-black/70 focus:outline-none
                     focus-visible:ring-[#FF2D20]"
                >{{ __('Dashboard') }}</a>
            @else
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent
                    transition hover:text-black/70 focus:outline-none
                     focus-visible:ring-[#FF2D20]"
                >{{__('Log in')}}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent
                        transition hover:text-black/70 focus:outline-none
                         focus-visible:ring-[#FF2D20]"
                    >{{__('Register')}}</a>
                @endif
            @endauth
        </nav>
    @endif
</div>
