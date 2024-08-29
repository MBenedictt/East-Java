@extends('layouts.layout')

@section('head')

@endsection

@section('content')
    <div id="navbar" class="w-full fixed top-0 left-0 h-[60px] flex justify-between items-center px-[60px] max-md:px-5 text-white overflow-hidden z-[999] transition-colors duration-300 bg-transparent">
        <h1 class="text-xl font-bold max-xl:text-lg">East Java</h1>
        <div id="menu" class="flex items-center max-md:flex-col max-md:fixed max-md:top-[60px] max-md:left-0 max-md:z-[999] max-md:w-full max-md:h-[0px] max-md:overflow-y-hidden transition-height duration-300 ease-in-out max-md:px-5">
            <ul class="flex items-center h-[60px] max-md:flex-col max-md:bg-black/80 max-md:h-full max-md:w-full max-md:rounded-[20px] max-md:mt-2">
                <a href="#home" class="px-5 group max-md:w-full max-md:h-[60px] max-md:flex max-md:justify-center max-md:items-center max-md:hover:bg-slate-800/50 rounded-t-[20px]">
                    <li class="relative after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 group-hover:after:w-full max-md:after:hidden max-xl:text-[15px]">
                        Home
                    </li>   
                </a>
                <a href="#discover" class="px-5 group max-md:w-full max-md:h-[60px] max-md:flex max-md:justify-center max-md:items-center max-md:hover:bg-slate-800/50">
                    <li class="relative after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 group-hover:after:w-full max-md:after:hidden max-xl:text-[15px]">
                        Discover
                    </li>
                </a>
                <a href="#tours" class="px-5 group max-md:w-full max-md:h-[60px] max-md:flex max-md:justify-center max-md:items-center max-md:hover:bg-slate-800/50">
                    <li class="relative after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 group-hover:after:w-full max-md:after:hidden max-xl:text-[15px]">
                        Tours
                    </li>
                </a>
                <a href="#destination" class="pl-5 group max-md:px-5 max-md:w-full max-md:h-[60px] max-md:flex max-md:justify-center max-md:items-center max-md:hover:bg-slate-800/50 rounded-b-[20px]">
                    <li class="relative after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 group-hover:after:w-full max-md:after:hidden max-xl:text-[15px]">
                        Destination
                    </li>
                </a>
            </ul>
        </div>
        <div class="hidden max-md:block max-md:cursor-pointer max-md:rounded" id="menu-toggle">
            <i class="bi bi-list text-[25px] px-2"></i>
        </div>
    </div>

    <section class="w-full h-[100vh] bg-[url('assets/bromo.jpg')] bg-cover flex justify-center items-center" id="home">
        <div class="w-full h-[100vh] flex flex-col justify-center items-center bg-black/40">
        <h1 class="text-white text-[160px] font-thin public-sans-thin max-xl:text-[120px] max-md:text-[80px] max-[540px]:text-[60px]">EAST JAVA</h1>
        <a href="#tours" class="text-white border-[1px] px-4 py-1.5 rounded hover:bg-white hover:text-black transition duration-300 font-thin max-md:text-[14px] max-md:mt-3">EXPLORE <i class="bi bi-arrow-right ml-2"></i></a>
        </div>
    </section>

    <section class="w-full h-full flex py-[100px] px-[80px] items-center max-xl:px-[60px] max-[991px]:flex-col-reverse max-md:px-[40px]" id="discover">
        <div class="w-3/5 h-full max-[991px]:w-full">
            <h1 class="text-[100px] font-thin public-sans-thin leading-[80px] max-xl:text-[80px] max-lg:leading-[60px] max-md:text-[60px] max-[540px]:text-[50px] max-[540px]:text-[50px]">DISCOVER</h1>
            <h1 class="text-[100px] font-thin public-sans-thin ml-[2vw] max-xl:text-[80px] max-lg:ml-0 max-md:text-[60px] max-[540px]:text-[50px] max-[540px]:text-[50px]">EAST JAVA</h1>
            <p class="w-11/12 mb-7 max-lg:w-full">A province nestled in Indonesia sprawling archipelago, boasting a rich tapestry of culture and natural wonders. Whetheryou seek adventure, culture, or simply a slice of paradise, East Java promises an unforgettable journey through its diverse wonders.</p>
            <a href="{{ route('discover') }}" class="text-black border-2 border-black px-2 py-[5px] rounded hover:bg-slate-800 hover:text-white transition duration-300 max-[540px]:text-[14px]">Read More <i class="bi bi-arrow-right ml-1"></i></a>
        </div>
        <div class="w-2/5 h-full pl-7 max-[991px]:w-full max-[991px]:mb-10 max-[991px]:pl-0 max-md:mb-5">
            <img src="assets/ijen.jpg" alt="ijen" class="w-full h-[400px] object-cover rounded max-[991px]:h-[300px]">
        </div>
    </section>

    <section class="w-full h-full py-[20px] px-[80px] max-xl:px-[60px] max-md:px-[40px]">
        <h1 class="text-[80px] font-thin public-sans-thin text-center mb-5 max-xl:text-[60px] max-md:text-[50px]" id="tours">POPULAR TOURS</h1>
        <div class="w-full grid grid-cols-3 gap-4 max-[991px]:grid-cols-1">
            <div class="w-full h-full shadow-lg flex flex-col">
                <img src="assets/bromo.jpg" alt="BSI Tour" class="w-full h-[350px] object-cover max-sm:h-[250px]">
                <div class="p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <div class="flex justify-between">
                            <h1 class="font-bold">Bromo Sewu Ijen Tour</h1>
                            <p class="text-zinc-400">4 days</p>
                        </div>
                        <p class="py-5 text-[14px]">Join us on an unforgettable adventure as we explore the stunning natural wonders of East Java! Our tour takes you to the breathtaking landscapes of Bromo, Kawah Ijen, and Tumpak Sewu.</p>
                    </div>
                    <div class="flex justify-between mt-auto">
                        <h1 class="font-bold">Rp. 1.000.000</h1>
                        <a href="{{ route('tour1') }}" class="hover:text-blue-500">View More <i class="bi bi-arrow-right ml-1"></i></a>
                    </div> 
                </div>
            </div>
            <div class="w-full h-full shadow-lg flex flex-col">
                <img src="assets/papuma.jpg" alt="Jember Tour" class="w-full h-[350px] object-cover max-sm:h-[250px]">
                <div class="p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <div class="flex justify-between">
                            <h1 class="font-bold">Jember Beaches Tour</h1>
                            <p class="text-zinc-400">4 days</p>
                        </div>
                        <p class="py-5 text-[14px]">Embark on a coastal journey through Jember, where pristine beaches and serene landscapes await!</p>
                    </div>
                    <div class="flex justify-between mt-auto">
                        <h1 class="font-bold">Rp. 1.000.000</h1>
                        <a href="{{ route('tour2') }}" class="hover:text-blue-500">View More <i class="bi bi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="w-full h-full shadow-lg flex flex-col">
                <img src="assets/jatimpark.jpg" alt="BM Tour" class="w-full h-[350px] object-cover max-sm:h-[250px]">
                <div class="p-5 flex flex-col flex-grow justify-between">
                    <div>
                        <div class="flex justify-between">
                            <h1 class="font-bold">Batu Malang Tour</h1>
                            <p class="text-zinc-400">2 days</p>
                        </div>
                        <p class="py-5 text-[14px]">From cultural landmarks to natural wonders, this tour captures the essence of Batu and Malang’s recreational splendor!</p>
                    </div>
                    <div class="flex justify-between mt-auto">
                        <h1 class="font-bold">Rp. 400.000</h1>
                        <a href="{{ route('tour3') }}" class="hover:text-blue-500">View More <i class="bi bi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-full p-[80px] max-xl:px-[60px] max-md:px-[40px]" id="destination">
        <h1 class="text-[60px] font-thin public-sans-thin mb-5 max-lg:text-[50px] max-[540px]:text-[35px]">TRENDING DESTINATIONS</h1>
        <div class="grid grid-cols-12 grid-rows-6 gap-x-4 gap-y-4 h-[600px] max-xl:h-[450px] max-[991px]:grid-cols-2 max-[991px]:grid-rows-3 max-[991px]:h-[600px] max-[540px]:grid-cols-1 max-[540px]:grid-rows-6 max-[540px]:h-[1200px]">
            <div class="col-span-3 row-span-6 bg-black w-full h-full bg-[url('assets/tumpak.jpg')] bg-cover max-[991px]:col-span-1 max-[991px]:row-span-1 bg-center">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Tumpak Sewu Waterfall</h1>
                    <p class="text-[14px]">"A stunning multi-tiered waterfall in East Java."</p>
                </div>
            </div>
            <div class="col-span-5 row-span-4 bg-black w-full h-full bg-[url('assets/bromo.jpg')] bg-cover max-[991px]:col-span-1 max-[991px]:row-span-1">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Mount Bromo</h1>
                    <p class="text-[14px]">"An active volcano with surreal landscapes and iconic sunrise views."</p>
                </div>
            </div>
            <div class="col-span-4 row-span-3 bg-black w-full h-full bg-[url('assets/ijen.jpg')] bg-cover max-[991px]:col-span-1 max-[991px]:row-span-1">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Kawah Ijen</h1>
                    <p class="text-[14px]">"A volcanic crater with a turquoise sulfur lake and rare blue fire."</p>
                </div>
            </div>
            <div class="col-span-4 row-span-3 bg-black w-full h-full bg-[url('assets/papuma.jpg')] bg-cover max-[991px]:col-span-1 max-[991px]:row-span-1">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Papuma Beach</h1>
                    <p class="text-[14px]">"A picturesque beach with white sands and unique rock formations."</p>
                </div>
            </div>
            <div class="col-span-2 row-span-2 bg-black w-full h-full bg-[url('assets/suramadu.jpg')] bg-cover max-[991px]:col-span-1 max-[991px]:row-span-1">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Suramadu</h1>
                    <p class="text-[14px]">"Indonesia's longest bridge."</p>
                </div>
            </div>
            <div class="col-span-3 row-span-2 bg-black w-full h-full bg-[url('assets/trowulan.jpg')] bg-cover max-[991px]:col-span-1 max-[991px]:row-span-1">
                <div class="w-full h-full flex flex-col justify-end hover:bg-black/50 p-5 text-white opacity-0 hover:opacity-100 hover:cursor-pointer transition-opacity ease duration-500">
                    <h1 class="font-bold">Situs Trowulan</h1>
                    <p class="text-[14px]">"An archaeological site with ancient Majapahit Empire ruins in East Java."</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-full py-[40px] px-[80px] max-xl:px-[60px] max-md:px-[40px]">
        <h1 class="text-[60px] font-thin public-sans-thin text-center mb-5 max-xl:text-[50px]">REVIEWS</h1>
        <div class="w-full grid grid-cols-3 gap-5 max-[991px]:grid-cols-1">
            <div class="w-full h-full shadow-xl p-5 rounded flex flex-col justify-between">
                <div>
                    <h1 class="font-bold italic">"An Unforgettable Adventure!"</h1>
                    <p class="py-5 italic text-zinc-500">"We had the most amazing time exploring East Java with this tour! From the breathtaking sunrise at Mount Bromo to the serene beauty of Ijen Crater, every moment was perfectly organized. The guides were knowledgeable, friendly, and made sure we experienced the culture and nature to the fullest. Highly recommend this tour for anyone looking to discover the hidden gems of East Java!"</p>
                </div>
                <p>- Sarah M., Australia</p>
            </div>
            <div class="w-full h-full shadow-xl p-5 rounded flex flex-col justify-between">
                <div>
                    <h1 class="font-bold italic">"A Perfect Blend of Adventure and Relaxation"</h1>
                    <p class="py-5 italic text-zinc-500">"This tour was the highlight of our trip to Indonesia! We loved the mix of adventure and relaxation. Climbing the volcanoes was thrilling, and the natural hot springs were the perfect way to unwind. The local food was delicious, and our guide's insights into the region's history and culture added so much depth to the experience. We can't wait to come back!"</p>
                </div>
                <p>- David R., United Kingdom</p>
            </div>
            <div class="w-full h-full shadow-xl p-5 rounded flex flex-col justify-between">
                <div>
                    <h1 class="font-bold italic">"Exceeded All Expectations!"</h1>
                    <p class="py-5 italic text-zinc-500">"East Java is a hidden paradise, and this tour showed us the best of it. The itinerary was well-planned, giving us enough time to explore and enjoy each location. Our guide was incredibly passionate and shared so many fascinating stories about the places we visited. The transportation was comfortable, and the accommodations were top-notch. We returned home with memories that will last a lifetime!"</p>
                </div>
                <p>- Maria L., Spain</p>
            </div>
        </div>
    </section>

    @include('layouts.footer')
@endSection

@section('script')
    <!-- Navbar Script -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            
            if (window.scrollY >= 60) {
                navbar.classList.add('bg-slate-800');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-slate-800');
                navbar.classList.add('bg-transparent');
            }
        });

        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menuToggle = document.getElementById('menu-toggle');
            var menu = document.getElementById('menu');

            menuToggle.classList.toggle('bg-white/10');

            if (menu.style.height === '248px') {
                menu.style.height = '0px';
            } else {
                menu.style.height = '248px';
            }
        });
    </script>

@endsection