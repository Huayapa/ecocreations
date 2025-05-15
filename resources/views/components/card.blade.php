
<section onclick="verdetalle({{ $producto['idProducto'] }})" class="w-full rounded-2xl border-2 border-[var(--border-eco)] cursor-pointer hover:[&>img]:h-[12rem] sm:hover:[&>img]:h-[17rem] sm:hover:[&>img]:brightness-75 transition-all duration-700 ">
    {{-- min-w-[12rem] sm:min-w-[18rem] --}}
    <img src="data:image/jpeg;base64,{{ $producto->imagen}}" alt="" class="w-full h-[10rem] sm:h-[15rem] object-cover object-top bg-[var(--green-eco)]/50 rounded-t-2xl transition-all duration-700">
    <article class="p-3">
        <h3 class="text-lg">{{$producto["nombre"]}}</h3>
        <span>Cantidad: {{$producto["stock"]}}</span>
        <section class="flex justify-between items-end gap-2">
        <p class="text-xl font-bold flex gap-2 flex-wrap">
            <span class="font-sans">S/{{$producto["precio"]}}</span>
        </p>
        <form method="POST" action="{{ route('carrito.agregar') }}" style="display:inline;" onclick="addprod()">
            @csrf
            <input type="hidden" name="idProducto" value="{{ $producto->idProducto }}">
            <button class="p-[1rem] bg-[var(--green-eco)] rounded-xl cursor-pointer hover:opacity-80" >
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
            <path class="fill-white" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
            </svg>
            </button>
        </form>
        </section>
    </article>
</section>
<script>
    function verdetalle(id) {
        window.location.href = `detalleproducto/${id}`;
    }
    function addprod() {
        document.addEventListener('livewire:load', function () {
        Livewire.emit('carritoActualizado');
        });
    }
</script>