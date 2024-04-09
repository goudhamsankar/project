<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if ($customer)
                {{ __('Edit Customer Status') }}
            @else
                {{ __('Create Customer Status') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                @if ($customer)
                                    {{ __('Edit Customer Status') }}
                                @else
                                    {{ __('Create Customer Status') }}
                                @endif
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Change Customer Details.') }}
                            </p>
                        </header>


                        <form id="form"
                            action="{{ isset($customer) ? route('customer.update', $customer->id) : route('invoices.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($customer))
                                @method('PUT')
                            @endif
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input name="name" type="text" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="John"
                                        value="{{ old('name', isset($customer) ? $customer->name : '') }}" disabled />
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium"></span> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                        address</label>
                                    <input type="email" id="email" name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="john.doe@company.com"
                                        value="{{ old('email', isset($customer) ? $customer->email : '') }}" disabled />
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium"></span> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                                    <input type="number" name="amount"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="300,250" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                        value="{{ old('amount', isset($customer) ? $customer->amount : '') }}" />
                                    @error('amount')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium"></span> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="website"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                    <select name="status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Change status</option>
                                        <option value="0"
                                            {{ old('status', isset($invoice) && $invoice->status == 0 ? 'selected' : '') }}>
                                            Pending</option>
                                        <option value="1"
                                            {{ old('status', isset($invoice) && $invoice->status == 1 ? 'selected' : '') }}>
                                            Cancelled</option>
                                        <option value="2"
                                            {{ old('status', isset($invoice) && $invoice->status == 1 ? 'selected' : '') }}>
                                            Completed</option>
                                    </select>
                                    @error('quantity')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium"></span> {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
