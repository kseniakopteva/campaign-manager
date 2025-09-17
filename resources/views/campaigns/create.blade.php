<x-layout-nobox>
    <h2 class="text-2xl/9 font-bold tracking-tight text-white">Create new campaign</h2>
    <hr class="my-3 text-lime-800">

    <form action="{{ route('register') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="username" class="block text-sm/6 font-medium text-gray-100">Enter the name of the campaign below:</label>
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
                <label for="password" class="block text-sm/6 font-medium text-gray-100">Description</label>
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
            <button type="submit"
                class="cursor-pointer flex w-full justify-center rounded-md bg-lime-800 mt-6 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Create
                campaign</button>
        </div>
        <a href="/" class="inline-block mt-5 text-[13px] underline tracking-tight text-[#605f5c]">Take me back.</a>
    </form>
</x-layout-nobox>
