<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-white via-blue-400 to-blue-600">
    
    
    <div class=" grid-cols-2   h-full sm:rounded-lg  overflow-hidden hidden md:grid ">

        
            <figure class="w-full bg-red-100  mt-4 px-20 py-24  shadow-md">
              <a href="/">
                {{-- DE Aqui sale el logo psara todo --}}
                <img class="shadow-xl rounded-sm" src="https://scontent.ftru2-1.fna.fbcdn.net/v/t1.6435-9/151832684_885168635637235_2906067587046004896_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHKXI72YRilsGFhOABatbijhnDqHoWziS6GcOoehbOJLuCQRQecDh82nR4ZNr4Jm3G74YnTn7eU4n7QsP0obnQN&_nc_ohc=LzLeNZ8mV_UAX9pl0fY&_nc_ht=scontent.ftru2-1.fna&oh=afd381a334ab238ca9f64b59912a1b07&oe=61C68D8B" alt="">
             </a>
            </figure>
     
        <div class="w-full col-span-1 mt-4 px-20 py-24 bg-white shadow-md ">
            
            {{ $slot }}
        </div>
    </div > 


    {{-- mobil --}}
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 w-full h-full md:hidden">

    
        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>

    </div>
</div>
