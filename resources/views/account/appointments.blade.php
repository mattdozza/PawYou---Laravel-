<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Appointments
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                        <tr>
                            <th class="p-4">Pet</th>
                            <th class="p-4">Service</th>
                            <th class="p-4">Date</th>
                            <th class="p-4">Time</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td class="p-4 font-medium text-gray-800">{{ $appointment['pet'] }}</td>
                                <td class="p-4 text-gray-600">{{ $appointment['service'] }}</td>
                                <td class="p-4 text-gray-600">{{ $appointment['date'] }}</td>
                                <td class="p-4 text-gray-600">{{ $appointment['time'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
