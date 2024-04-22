<x-app-layout>
    <style>
        .custom-hover {
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
            transition-delay: 0.2s;
        }

        .custom-hover:hover {
            background-color: rgba(112, 179, 179, 0.5);
            color: #1a1919
        }
    </style>

    <div class="py-10 p-10">
        <a href={{ route('admin/booking/create') }}
            class="flex gap-2 p-4 bg-teal-600/20 cursor-pointer rounded-lg max-w-sm justify-center items-center custom-hover text-black/75">
            <x-entypo-new-message class="w-5" />
            <h1 class="text-xl font-bold">New Booking</h1>
        </a>
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
                <div class="px-6 pt-4 pb-2">
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
