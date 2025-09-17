<x-page-layout>
    <div class="h-full flex flex-col">
        <div class="flex-1">
            <h1 class="text-2xl/9 font-bold tracking-tight text-white">My Campaigns</h1>

            <ul role="list" class="divide-y divide-white/5 mt-5  grid grid-cols-2 gap-4">
                @foreach ($campaigns as $campaign)
                    <li class="flex justify-between gap-x-6 p-5 w-full rounded-md bg-white/5 text-base text-white outline-1 -outline-offset-1 outline-white/10 sm:text-sm/6">


                        <div class="min-w-0 flex-auto">
                            <div class="flex min-w-0 justify-between">
                                <p class="text-base/6 font-semibold text-white">{{ $campaign->name }} <span class="text-sm/6 text-gray-400">({{ $campaign->status }})</span></p>
                                <p class="mt-1 text-xs/5 text-gray-400"><time datetime="{{ $campaign->last_updated }}">{{ \Carbon\Carbon::parse($campaign->last_updated)->diffForHumans() }}</time>
                                </p>
                            </div>
                            <hr class="my-3 text-lime-800">
                            @if ($campaign->description)
                                <p class="mt-1 text-xs/5 text-gray-400 text-justify"><span class="font-semibold text-white">About:</span> {{ $campaign->description }}</p>
                            @endif
                            @if ($campaign->setting)
                                <p class="mt-1 text-xs/5 text-gray-400"><span class="font-semibold text-white">Setting:</span> {{ $campaign->setting }}</p>
                            @endif
                            @if ($campaign->levels)
                                <p class="mt-1 text-xs/5 text-gray-400"><span class="font-semibold text-white">Levels:</span> {{ $campaign->levels }}</p>
                            @endif
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
        <div class="flex flex-row justify-between items-baseline">
            <a href="{{ route('home') }}" class="inline-block text-[13px] underline tracking-tight text-[#605f5c]">Take me back.</a>
            <a href="{{ route('campaign.create') }}"
                class="cursor-pointer flex justify-center rounded-md bg-lime-800 mt-3 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-lime-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-800">Add
                a new one</a>
        </div>
    </div>
</x-page-layout>
