<x-app-layout>

    <div class="py-12 grid grid-flow-col justify-center gap-20 p-16 max-sm:grid-flow-row">
        @foreach ($vehicles as $vehicle)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-14"><img class="w-full" src={{ asset('images/default-car.png') }}
                        alt="Sunset in the mountains"></div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Type: {{ $vehicle->type }}</div>
                    <p class="text-gray-700 text-base">
                        Model: {{ $vehicle->model }}
                    </p>
                    <p class="text-gray-700 text-base">
                        Last service date: {{ $vehicle->last_service_date }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
