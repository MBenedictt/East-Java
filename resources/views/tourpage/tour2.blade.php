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
        <h1 class="text-3xl font-semibold">Jember Beaches Tour</h1>
        <p class="py-5 text-zinc-500 mb-5"><span class="font-bold text-black">4</span> days <i class="bi bi-dot text-zinc-500"></i> <span class="font-bold text-black"><i class="bi bi-star-fill text-[14px] mr-1"></i> 4.7</span> (43 reviews)</p>
        <img src="assets/papuma.jpg" alt="" class="w-full h-[400px] object-cover mb-5">
        <h1 class="text-xl font-semibold">4-Day Tour Itinerary: Jember Beaches</h1>
        <p class="my-5 pb-10 border-b-2 border-zinc-300">
        Embark on a coastal journey through Jember, where pristine beaches and serene landscapes await! Our tour program takes you to the most beautiful shores, including the famous Papuma Beach, known for its crystal-clear waters and dramatic rock formations. Explore Watu Ulo Beach, rich in folklore and offering stunning views of the Indian Ocean. Continue to Payangan Beach, where you'll find unique black sand and picturesque hills. Each beach offers its own charm, from hidden coves to vibrant marine life, providing a perfect escape for nature lovers and adventure seekers alike. Dive into the beauty of Jember’s coastline!</p>
    </div>

    <div class="w-full h-full px-[80px] max-md:px-[60px] max-[540px]:px-[40px] mt-10">
        <h1 class="text-3xl font-semibold">Places You'll Visit</h1>
        <div class="grid grid-cols-3 gap-4 max-[991px]:grid-cols-1 my-5 border-b-2 border-zinc-300 pb-10">
            <div class="w-full h-[400px] bg-[url('assets/papuma.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Papuma Beach</h1>
                </div>
            </div>
            <div class="w-full h-[400px] bg-[url('assets/payangan.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Payangan Beach</h1>
                </div>
            </div>
            <div class="w-full h-[400px] bg-[url('assets/bandealit.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Bandealit Beach</h1>
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
                <h1 class="ml-4 font-bold">Day 1: Arrival</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Arrive in Jember and head to Papuma Beach for exploration and relaxation. Enjoy a seafood lunch and sunset views, then stay overnight near the beach.</p>
        </div>
        <div>
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-zinc-100 rounded-full flex justify-center items-center">
                    <i class="bi bi-arrow-down text-zinc-400 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 2: Watu Ulo - Payangan</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Visit Watu Ulo Beach to see unique rock formations, then explore Payangan Beach with its scenic hills. Spend the afternoon relaxing or exploring nearby caves before returning to your accommodation.</p>
        </div>
        <div>
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-zinc-100 rounded-full flex justify-center items-center">
                    <i class="bi bi-arrow-down text-zinc-400 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 3: Papuma - Bandealit</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Visit Tanjung Papuma for sunrise views, then drive to Bandealit Beach in Meru Betiri National Park. Enjoy the unspoiled beauty of the beach, with options for swimming and kayaking, and stay overnight in a nearby eco-lodge.</p>
        </div>
        <div class="pb-10 border-b-2 border-zinc-300">
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-red-500 rounded-full flex justify-center items-center">
                    <i class="bi bi-flag text-zinc-100 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 4: Sukamade - Departure</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Depart early for Sukamade Beach to visit the turtle conservation center and explore the remote area. Return to Jember for lunch and prepare for departure.</p>
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