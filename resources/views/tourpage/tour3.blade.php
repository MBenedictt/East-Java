@extends('layouts.layout')

@section('head')

@endsection

@section('content')
    <div class="w-full h-[60px] px-[80px] max-md:px-[60px] max-[540px]:px-[40px] flex items-center">
        <a href="{{ route('home') }}" class="flex items-center hover:ml-0 hover:mr-4 group">
            <i class="bi bi-arrow-left text-[24px] ml-2 mr-2 transition-margin duration-300 group-hover:ml-0 group-hover:mr-4"></i>
            <h1 class="font-medium">Back</h1>
        </a>
    </div>

    <div class="w-full h-full px-[80px] max-md:px-[60px] max-[540px]:px-[40px]">
        <h1 class="text-3xl font-semibold">Batu Malang Tour</h1>
        <p class="py-5 text-zinc-500 mb-5"><span class="font-bold text-black">2</span> days <i class="bi bi-dot text-zinc-500"></i> <span class="font-bold text-black"><i class="bi bi-star-fill text-[14px] mr-1"></i> 4.5</span> (35 reviews)</p>
        <img src="assets/jatimpark.jpg" alt="" class="w-full h-[400px] object-cover mb-5">
        <h1 class="text-xl font-semibold">2-Day Tour Itinerary: Batu Malang Recreational Places</h1>
        <p class="my-5 pb-10 border-b-2 border-zinc-300">Discover the vibrant and diverse attractions of Batu and Malang with our exciting tour program! Experience the thrill of Jatim Park, where a blend of theme parks, museums, and educational exhibits offer endless fun for all ages. Wander through the colorful streets of Kampung Warna Warni, a village transformed into a kaleidoscope of colors and creativity. Visit the serene Coban Rondo Waterfall, surrounded by lush greenery, and explore the lush Batu Secret Zoo, home to exotic animals and interactive exhibits. From cultural landmarks to natural wonders, this tour captures the essence of Batu and Malang’s recreational splendor!</p>
    </div>

    <div class="w-full h-full px-[80px] max-md:px-[60px] max-[540px]:px-[40px] mt-10">
        <h1 class="text-3xl font-semibold">Places You'll Visit</h1>
        <div class="grid grid-cols-3 gap-4 max-[991px]:grid-cols-1 my-5 border-b-2 border-zinc-300 pb-10">
            <div class="w-full h-[400px] bg-[url('assets/jatimpark.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Jatim Park 1 2 & 3</h1>
                </div>
            </div>
            <div class="w-full h-[400px] bg-[url('assets/bfg.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Batu Flower Garden</h1>
                </div>
            </div>
            <div class="w-full h-[400px] bg-[url('assets/bns.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Batu Night Spectacular</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-full px-[80px] max-md:px-[60px] max-[540px]:px-[40px] mt-10">
        <h1 class="text-3xl font-semibold">Timeline</h1>
        <div>
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-green-500 rounded-full flex justify-center items-center">
                    <i class="bi bi-info-circle text-zinc-100 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 1: Theme Parks & Gardens</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Start the day at Jatim Park 1 then 2 then 3!, exploring the zoo and museum, followed by a visit to Batu Flower Garden for panoramic views. End the day at Batu Town Square, enjoying street food and the relaxed atmosphere.</p>
        </div>
        <div class="pb-10 border-b-2 border-zinc-300">
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-red-500 rounded-full flex justify-center items-center">
                    <i class="bi bi-flag text-zinc-100 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 2: Adventure and Fun</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Visit Coban Rondo Waterfall and Labyrinth Park in the morning, followed by a trip to Batu Night Spectacular for amusement park fun. Explore Omah Kayu Treehouse and, if time permits, visit Selecta Recreational Park before concluding your trip.</p>
        </div>
    </div>

    <div class="my-10 py-5 px-[80px] max-md:px-[60px] max-[540px]:px-[40px]">
        <div class="rounded bg-slate-800 p-10 text-white">
            <h1 class="text-3xl pb-7 font-bold">Let's start your adventure!</h1>
            <a href="#" class="py-2 border-2 px-3 rounded bg-white text-slate-800 hover:text-white hover:bg-green-600 transition duration-300">Book Now!</a>
            <p class="mt-10">If you're occuring a problem, <a href="#" class="underline text-sky-300">Click here</a> to contact our customer services team who will help you with all of your holiday needs.</p>
        </div>
        
    </div>
    
    @include('layouts.footer')
@endSection

@section('script')

@endsection