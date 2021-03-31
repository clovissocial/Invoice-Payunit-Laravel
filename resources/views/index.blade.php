@extends('layouts.app')

@section('content') 
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    I am a blogger
                </h1>
                <a href="/blog" class="text-center bg-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More...
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="../public/" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Working hard to be a better blogger
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
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert
        </h2>
        <span class="font-bold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-bold block text-4xl py-1">
            Project management
        </span>
        <span class="font-bold block text-4xl py-1">
            Digital Marketing
        </span>
        <span class="font-bold block text-4xl py-1">
            Web Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, quos repellat expedita commodi ut 
            numquam aliquam dignissimos dolores explicabo enim cum temporibus, aliquid, iusto consequatur 
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, labore ut.
                     Alias dolorum dicta distinctio atque consequuntur laudantium cupiditate numquam modi inventore tempora 
                     officia quis, necessitatibus facilis. Enim, expedita nihil.
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="../public/" width="700" alt="">
        </div>
    </div>

@endsection