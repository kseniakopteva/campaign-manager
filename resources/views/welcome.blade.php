<x-layout-main>
    <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-xl lg:flex-row">
        <div
            class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
            <h1 class="mb-3 text-2xl font-bold">D&D Campaign Manager</h1>
            <hr class="my-3 text-lime-800">
            <p class="mb-3 text-sm/6 font-medium text-gray-100">@auth Take the mighty pen in your hand, <span class="text-red-400">{{ auth()->user()->username }}</span>.
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

                @endguest
        </div>
    </main>
</x-layout-main>
{{-- text-[#706f6c] dark:text-[#A1A09A] --}}
