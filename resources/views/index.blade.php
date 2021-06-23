@extends('layouts.app')

@section('content') 
    <div class="background-image grid grid-cols-1 m-auto" style="background:url('images/web-development.jpg'); background-position:center;">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Invoice Tracking
                </h1>
                <a href="invoice" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Show Invoices
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="images/web-development.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Working hard to create a better invoice system
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut maiores mollitia 
                quo id illum quae placeat unde nostrum 
                ducimus est accusamus, esse et dolor tenetur voluptatum, nihil ipsa ut maxime.
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing
                 elit. Accusamus adipisci repudiandae suscipit praesentium quas aspernatur,
                  omnis doloremque velit minima veniam 
            </p>
            <a href="/invoice" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Show Invoices
            </a>
        </div>
    </div>

@endsection