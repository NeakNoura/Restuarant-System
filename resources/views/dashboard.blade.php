<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
                <!-- Total Customers Card -->
                <div
                    style="background-color: yellow; border: 3px solid red; color: black; padding: 20px; border-radius: 10px; text-align: center;"
                >
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Total Customers</h3>
                    <p style="font-size: 2.5rem; font-weight: bold; margin-top: 20px;">{{ $totalCustomers }}</p>
                </div>

                <!-- Total Items Card -->
                <div
                    style="background-color: yellow; border: 3px solid blue; color: black; padding: 20px; border-radius: 10px; text-align: center;"
                >
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Total Items</h3>
                    <p style="font-size: 2.5rem; font-weight: bold; margin-top: 20px;">{{ $totalItems }}</p>
                </div>
                <!-- Total Orders Card -->
                <div
                    style="background-color: yellow; border: 3px solid blue; color: black; padding: 20px; border-radius: 10px; text-align: center;"
                >
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Total Orders</h3>
                    <p style="font-size: 2.5rem; font-weight: bold; margin-top: 20px;">{{ $totalOrders }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>