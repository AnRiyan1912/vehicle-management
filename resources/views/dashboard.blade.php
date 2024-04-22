<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-sm rounded overflow-hidden shadow-lg mt-10">
        @foreach ($bookings as $booking)
            <div class="px-6 py-4">
                <div class="p-14 flex justify-center"><img class="w-28" src={{ asset('images/booking-image.png') }}
                        alt="Sunset in the mountains"></div>
                <div class="font-bold text-xl mb-2">Booking date :
                    {{ $booking->created_at->timezone('Asia/Jakarta')->format('d-m-Y H:i:s') }}</div>
                <p class="text-gray-700 text-base">
                    Status : {{ $booking->status }}
                </p>
            </div>
        @endforeach
    </div>
</x-app-layout>
