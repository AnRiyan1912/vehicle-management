<x-app-layout>
    <div class="py-6">
        <div class="flex justify-center">
            <h1 class="text-4xl font-bold">Create new booking</h1>
        </div>

        <div class="flex justify-center content-center mt-4">
            <form action={{ route('admin/booking/store') }} method="POST" class="w-2/5">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Select the user you want to request approval from')" />
                    <select name="user_id" id="user_id" class="w-full rounded-lg">
                        <option value="" selected default disabled>choose the user</option>
                        @foreach ($userApprovals as $userApprov)
                            <option value={{ $userApprov->id }}>{{ $userApprov->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4">
                    <x-input-label for="name" :value="__('Select the vehicle')" />
                    <select name="vehicle_id" id="vehicle_id" class="w-full rounded-lg">
                        <option value="" selected default disabled>choose the vehicle</option>
                        @foreach ($vehicles as $vehicle)
                            <option value={{ $vehicle->id }}>Type: {{ $vehicle->type }} ---> Model:
                                {{ $vehicle->model }}
                                ---> Last service: {{ $vehicle->last_service_date }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4">
                    <x-input-label for="name" :value="__('Select the driver')" />
                    <select name="driver_id" id="driver_id" class="w-full rounded-lg">
                        <option value="" selected default disabled>choose the driver</option>
                        @foreach ($drivers as $driver)
                            <option value={{ $driver->id }}>{{ $driver->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4">
                    <x-input-label for="start_date" :value="__('Select start date for use the vehicle')" />
                    <x-text-input id="start_date" class="block mt-1 " type="date" name="start_date" :value="old('start_date')"
                        required autofocus autocomplete="start_date" />
                </div>

                <div class="mt-4">
                    <x-input-label for="end_date" :value="__('Select end date for use the vehicle')" />
                    <x-text-input id="end_date" class="block mt-1 " type="date" name="end_date" :value="old('end_date')"
                        required autofocus autocomplete="end_date" />
                </div>

                <div class="flex items-center justify-center mt-10">
                    <a href={{ route('admin/booking') }}
                        class="bg-red-400 font-semibold text-xs text-white px-8 py-2 rounded-md">CANCEL</a>
                    <a href={{ route('admin/booking') }}> <x-primary-button class="ms-4 bg-green-600">
                            {{ __('Submit new booking') }}
                        </x-primary-button></a>

                </div>
            </form>
        </div>
    </div>


</x-app-layout>
