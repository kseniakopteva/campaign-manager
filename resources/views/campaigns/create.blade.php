<x-form-layout>
    <h2 class="text-2xl/9 font-bold tracking-tight text-white">Create new campaign</h2>
    <hr class="my-3 text-lime-800">

    <form action="{{ route('campaign.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-sm/6 font-medium text-gray-100">Enter the name of the campaign below:</label>
            <div class="mt-1">
                <input id="name" type="text" name="name" required autocomplete="name" value="{{ old('name') }}"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6" />
            </div>
            @if ($errors->get('name'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('name') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="description" class="block text-sm/6 font-medium text-gray-100">What will the campaign be about?</label>
            </div>
            <div class="mt-1">
                <textarea id="description" type="text" name="description"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6"></textarea>

            </div>
            @if ($errors->get('description'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('description') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="setting" class="block text-sm/6 font-medium text-gray-100">What will be the setting?</label>
            </div>
            <div class="mt-1">
                <input id="setting" type="text" name="setting"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6">

            </div>
            @if ($errors->get('setting'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('setting') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>


        <div>
            <div class="flex items-center justify-between">
                <label for="levels" class="block text-sm/6 font-medium text-gray-100">At what level do the players start and end?</label>
            </div>
            <div class="mt-1">
                <input id="levels" type="text" name="levels" placeholder="1-5"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-lime-800 sm:text-sm/6">

            </div>
            @if ($errors->get('levels'))
                <ul class='text-sm text-red-600 dark:text-red-400 space-y-1'>
                    @foreach ((array) $errors->get('levels') as $message)
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
        <a href="{{ route('profile') }}" class="inline-block mt-5 text-[13px] underline tracking-tight text-[#605f5c]">Take me back.</a>
    </form>
</x-form-layout>
