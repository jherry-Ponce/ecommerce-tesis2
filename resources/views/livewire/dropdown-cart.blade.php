<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <x-jet-dropdown width='96'>
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart />
                {{-- <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-greenEsmerald-300 rounded-full">99</span></span> --}}
                {{-- el punto rojo encima del carro --}}
                <span
                    class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-300 rounded-full"></span>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="py-6 px-4">
                <p class="text-center text-gray-700 ">
                    No tiene ningun item en carro
                </p>
            </div>

        </x-slot>
    </x-jet-dropdown>

</div>
