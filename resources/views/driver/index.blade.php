<x-app-layout>



    <div class="py-12 grid grid-flow-col justify-center gap-20 p-16 max-sm:grid-flow-row">
        @foreach ($drivers as $driver)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-14"><img class="w-full" src={{ asset('images/image-profile-default.png') }}
                        alt="Sunset in the mountains"></div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Name: {{ $driver->name }}</div>
                    <p class="text-gray-700 text-base">
                        Licence number: {{ $driver->licence_number }}
                    </p>
                     <p class="text-gray-700 text-base">
                        Experience year: {{ $driver->experience_year }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
