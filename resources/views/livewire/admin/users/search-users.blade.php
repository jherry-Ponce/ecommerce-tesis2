<div class="mt-16">

  <div class="flex  pl-4 py-2 items-center shadow-xl ">
    <h2 class="text-gray-500 font-serif text-xl font-semibold  my-3 ">Usuario</h2>
    <button wire:click="crearModal()"
    class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 my-3 ml-auto rounded-md mr-6">Crear</button>
    @if ($modal)
        @include('components.ventanausuario')
    @endif
</div>



</div>