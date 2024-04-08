<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="text-gray-900 dark:text-gray-100">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    DATE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    PHONE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    TIME
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    SERVICE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    BARBER
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Net Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($customer))
                                @foreach ($customer as $customer)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $customer->name ?? 'name' }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $customer->email ?? 'Email' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->date ?? 'date' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->phone_no ?? 'quantity' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->time?? 'amount' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->service ?? 'tax' }} %

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->barber ?? 'tax' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->date ?? 'tax' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            <a href=""
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form method="POST" action="{{ route('customer.destroy', $customer->id) }}"
                                                style="display: inline;">
                                                
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirmDelete()"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline ml-3"><i class="fa-solid fa-trash"></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
