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
        <h1 class="text-3xl font-semibold">Bromo Sewu Ijen Tour</h1>
        <p class="py-5 text-zinc-500 mb-5"><span class="font-bold text-black">4</span> days <i class="bi bi-dot text-zinc-500"></i> <span class="font-bold text-black"><i class="bi bi-star-fill text-[14px] mr-1"></i> 4.8</span> (167 reviews)</p>
        <img src="assets/bromo.jpg" alt="" class="w-full h-[400px] object-cover mb-5">
        <h1 class="text-xl font-semibold">4-Day Tour Itinerary: Bromo, Kawah Ijen, and Tumpak Sewu Waterfall</h1>
        <p class="my-5 pb-10 border-b-2 border-zinc-300">Join us on an unforgettable adventure as we explore the stunning natural wonders of East Java! Our tour takes you to the breathtaking landscapes of Bromo, Kawah Ijen, and Tumpak Sewu. Begin your journey with the iconic sunrise at Mount Bromo, where you'll witness the sun rising over the majestic caldera. Next, discover the awe-inspiring beauty of Kawah Ijen, famous for its electric-blue flames and sulfuric crater lake. End the adventure at the magnificent Tumpak Sewu Waterfall, cascading down steep cliffs in a spectacular display of nature's power. A perfect blend of excitement and tranquility awaits!</p>
    </div>

    <div class="w-full h-full px-[80px] max-md:px-[60px] max-[540px]:px-[40px] mt-10">
        <h1 class="text-3xl font-semibold">Places You'll Visit</h1>
        <div class="grid grid-cols-3 gap-4 max-[991px]:grid-cols-1 my-5 border-b-2 border-zinc-300 pb-10">
            <div class="w-full h-[400px] bg-[url('assets/bromo.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Mount Bromo</h1>
                </div>
            </div>
            <div class="w-full h-[400px] bg-[url('assets/tumpak.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Tumpak Sewu Waterfall</h1>
                </div>
            </div>
            <div class="w-full h-[400px] bg-[url('assets/ijen.jpg')] bg-cover bg-center max-[991px]:h-[300px] max-sm:h-[250px]">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Kawah Ijen</h1>
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
            <p class="pl-[57px] leading-[24px]">Arrive in Malang and drive to Tumpak Sewu Waterfall for a challenging trek with stunning views. Explore the area, including Goa Tetes cave, before returning to Malang for dinner and rest.</p>
        </div>
        <div>
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-zinc-100 rounded-full flex justify-center items-center">
                    <i class="bi bi-arrow-down text-zinc-400 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 2: Bromo Sunrise Tour</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Embark on an early morning Bromo Sunrise Tour, followed by visits to Mount Bromo, Whispering Sand, and Teletubbies Hill. Stop at Madakaripura Waterfall on your way back to Malang for dinner and rest.</p>
        </div>
        <div>
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-zinc-100 rounded-full flex justify-center items-center">
                    <i class="bi bi-arrow-down text-zinc-400 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 3: Malang to Banyuwangi</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Depart from Malang to Banyuwangi, passing through scenic landscapes, and arrive in the afternoon. Rest at your accommodation before a midnight departure for the Kawah Ijen trek.</p>
        </div>
        <div class="pb-10 border-b-2 border-zinc-300">
            <div class="flex items-center py-5">
                <div class="w-[40px] h-[40px] bg-red-500 rounded-full flex justify-center items-center">
                    <i class="bi bi-flag text-zinc-100 text-[18px]"></i>
                </div>
                <h1 class="ml-4 font-bold">Day 4: Kawah Ijen - Departure</h1>
            </div>
            <p class="pl-[57px] leading-[24px]">Hike to the summit of Kawah Ijen to witness the blue flames and the acid lake at sunrise. Return to Banyuwangi for breakfast and depart for your next destination.</p>
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