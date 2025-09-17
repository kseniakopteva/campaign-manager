<x-box-layout>
    <h1 class="mb-3 text-2xl font-bold">D&D Campaign Manager</h1>
    <hr class="my-3 text-lime-800">
    <p class="mb-3 text-sm/6 font-medium text-gray-100">@auth Take the mighty pen in your hand, <a href="{{ route('profile') }}" class="text-red-400">{{ auth()->user()->username }}</a>.
        @else
        Take the mighty pen in your hand. @endauth <br>
        Create the path great heroes will walk.</p>

    @guest
        <a href="{{ route('show.login') }}"
            class="cursor-pointer flex w-full justify-center rounded-md bg-lime-800 mt-6 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Login</a>
        <a href="{{ route('show.register') }}"
            class="cursor-pointer flex w-full justify-center rounded-md bg-lime-800 mt-3 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Register</a>
    @else
        <form action="{{ route('logout') }}" method="POST">@csrf
            <button type="submit"
                class="cursor-pointer flex w-full justify-center rounded-md bg-lime-800 mt-6 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Logout</button>
        </form>
    @endguest
</x-box-layout>
