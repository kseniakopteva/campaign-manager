<x-layout-pagebox>
    <a href="/" class="inline-block text-[13px] underline tracking-tight text-[#605f5c]">Take me back.</a>
    <div class="flex flex-row items-baseline space-x-3">
        <h1 class="text-2xl/9 font-bold tracking-tight text-white">My Campaigns</h1>
        <a href="{{ route('campaign-create') }}" class="mt-10 text-[13px] underline tracking-tight text-[#A1A09A]">Add new one</a>
    </div>

    <ul role="list" class="divide-y divide-white/5 mt-5">
        @foreach ($campaigns as $campaign)
            <li class="flex justify-between gap-x-6 p-5 w-full rounded-md bg-white/5 text-base text-white outline-1 -outline-offset-1 outline-white/10 sm:text-sm/6">
                <div class="flex min-w-0 gap-x-4">

                    <div class="min-w-0 flex-auto">
                        <p class="text-sm/6 font-semibold text-white">{{ $campaign->name }}</p>
                        <p class="mt-1 truncate text-xs/5 text-gray-400">{{ $capaign->description }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm/6 text-white">{{ $campaign->status }}</p>
                    <p class="mt-1 text-xs/5 text-gray-400">Last edited <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout-pagebox>
