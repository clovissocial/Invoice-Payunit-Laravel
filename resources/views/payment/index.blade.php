@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            Pay Invoice
        </h1>
    </div>
</div>    

@if ($errors->any())

<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                {{ $error }}
            </li>
            @endforeach
    </ul>
</div>
@endif

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

<div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Fill In Your Details</h1>
                <p class="text-gray-400 dark:text-gray-400">Fill up the form below to pay your invoice.</p>
            </div>
            <div class="m-7">

                
                <form action="makePayment" method="POST" id="form">
                @csrf

                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="your name" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="your email address" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">

                        <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Phone Number</label>
                        <input type="text" name="phone" id="phone" placeholder="+(237) 681 1117-453" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>

                    <div class="mb-6">

                        <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Amount</label>
                        <input type="number" name="total_amount" id="phone" placeholder="Enter Amount" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your Message</label>

                        <textarea rows="5" name="message" id="message" placeholder="Your Message" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required></textarea>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-blue-500 rounded-md focus:bg-blue-500 focus:outline-none">Pay Your Invoice</button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection