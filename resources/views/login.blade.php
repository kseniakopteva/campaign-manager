<x-layout-main>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-2xl/9 font-bold tracking-tight text-white">Hello, friend.</h2>
            <h3 class="text-lg text-[#A1A09A]">Glad to see you again.</h3>
            <hr class="my-3 text-lime-800">
        </div>

        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm sm:min-w-sm">
            <form action="{{ route('login') }}" method="POST" class="space-y-2">
                @csrf
                <div>
                    <label for="username" class="block text-sm/6 font-medium text-gray-100">What was your unique name?</label>
                    <div class="mt-2">
                        <input id="username" type="username" name="username" required autocomplete="username" value="{{ old('username') }}"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-100">What was the secret phrase?</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6" />
                    </div>
                </div>

                @if ($errors->any())
                    <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                        @foreach ((array) $errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif

                <div>
                    <button type="submit"
                        class="cursor-pointer flex w-full justify-center rounded-md bg-lime-800 mt-6 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Let
                        me in, the wise one</button>
                </div>

                <a href="/register" class="mt-10 text-[13px] underline tracking-tight text-[#A1A09A]">You don't know me yet.</a><br>
                <a href="/" class="inline-block mt-5 text-[13px] underline tracking-tight text-[#605f5c]">Take me back.</a>
            </form>
        </div>
    </div>


</x-layout-main>
