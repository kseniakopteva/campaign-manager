<x-layout-nobox>
    <h2 class="text-2xl/9 font-bold tracking-tight text-white">Hello, the new one.</h2>
    <h3 class="text-lg text-[#A1A09A]">Your heart feels the call, too?</h3>
    <hr class="my-3 mb-5 text-lime-800">

    <form action="{{ route('register') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="username" class="block text-sm/6 font-medium text-gray-100">What should I call you? It should be unique.</label>
            <div class="mt-1">
                <input id="username" type="username" name="username" required autocomplete="username" value="{{ old('username') }}"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6" />
            </div>
            @if ($errors->get('username'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('username') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-100">I will ask you for a secret code the next time I see you, to know it's the real you. What should it
                    be?</label>
            </div>
            <div class="mt-1">
                <input id="password" type="password" name="password" required
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6" />
            </div>
            @if ($errors->get('password'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('password') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-100">Now whisper the secret phrase to me again:</label>
            </div>
            <div class="mt-1">
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6" />
            </div>
            @if ($errors->get('password_confirmation'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('password_confirmation') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <button type="submit"
                class="cursor-pointer flex w-full justify-center rounded-md bg-lime-800 mt-6 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Commit
                me to memory, the wise one</button>
        </div>
        <a href="/login" class="mt-10 text-[13px] underline tracking-tight text-[#A1A09A]">I've already introduced myself to you.</a><br>
        <a href="/" class="inline-block mt-5 text-[13px] underline tracking-tight text-[#605f5c]">Take me back.</a>
    </form>
</x-layout-nobox>
