<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-blue-900">
    
    
    <div class=" grid-cols-2   h-full sm:rounded-lg  overflow-hidden hidden md:grid ">

        
            <figure class="w-full bg-red-100  mt-4 px-20 py-24  shadow-md">
              <a href="/">
                {{-- DE Aqui sale el logo psara todo --}}
                <img src="https://scontent.ftru2-1.fna.fbcdn.net/v/t1.6435-9/151832684_885168635637235_2906067587046004896_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeHKXI72YRilsGFhOABatbijhnDqHoWziS6GcOoehbOJLuCQRQecDh82nR4ZNr4Jm3G74YnTn7eU4n7QsP0obnQN&_nc_ohc=ovMw3ejws0YAX-hdvYl&_nc_ht=scontent.ftru2-1.fna&oh=1c91da27c9f2c8b9bee136dbf3f1f790&oe=60DB39CB" alt="">
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
