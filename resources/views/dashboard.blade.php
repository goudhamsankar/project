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
                                {{-- <th scope="col" class="px-6 py-3">
                                    Email
                                </th> --}}
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
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
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
                                            {{ $customer->name ?? '' }}
                                        </th>
                                        {{-- <td class="px-6 py-4">
                                            {{ $customer->email ?? '' }}

                                        </td> --}}
                                        <td class="px-6 py-4">
                                            {{ $customer->date ?? '' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->phone_no ?? '' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->time ?? '' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->service ?? '' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->barber ?? '' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $customer->amount ?? '0.00' }}

                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($customer->status == 0)
                                                <span
                                                    class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">Pending</span>
                                            @elseif($customer->status == 1)
                                                <span
                                                    class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Cancelled</span>
                                            @else
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
                                            @endif

                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('customer.edit', $customer->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <form method="POST"
                                                action="{{ route('customer.destroy', $customer->id) }}"
                                                style="display: inline;">

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirmDelete()"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline ml-3"><i
                                                        class="fa-solid fa-trash"></i></button>

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
