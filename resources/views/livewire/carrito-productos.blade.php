<div>
    <section class="overflow-y-auto max-h-[17rem] min-h-[17rem]">
      {{-- Producto del carrito --}}
      @if (count($productos) <= 0)
        <div class="w-full text-center h-[10rem] flex justify-center items-center" >No hay productos</div>
      @else
        @foreach ($productos as $producto)
        <article class="mb-[0.5rem]">
            <div class="flex items-center justify-between">
              <section class="flex items-center gap-[0.5rem]">
                <img 
                class="w-[3rem] h-[3rem] lg:w-[4rem] lg:h-[4rem] object-cover object-center rounded-lg"
                src="data:image/jpeg;base64,{{ $producto["imagen"]}}" alt="{{ $producto["nombre"] }}" >
                <article>
                  <h4>{{ $producto["nombre"] }}</h4>
                  <span>{{ $producto["stock"] . " x S/" . $producto["precio"]}}</span>
                </article>
              </section>
              <form method="POST" action="{{ route('carrito.eliminar') }}" style="display:inline;" onclick="deleteprod()">
                @csrf
                <input type="hidden" name="idProducto" value="{{ $producto["idProducto"] }}">
                <button class="bg-[var(--green-eco)] text-white rounded-lg w-[2rem] h-[2rem] cursor-pointer flex items-center justify-center hover:bg-[var(--dark-eco)]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512">
                    <path class="fill-white" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                  </svg>
                </button>
              </form>
            </div>
          <div class="w-full h-[2px] bg-[var(--border-eco)] mt-2"></div>
        </article>
          
        @endforeach
      @endif
    </section>
    {{-- TOTAL PRODUCTO PRECIO --}}
    <section class="flex justify-between font-bold text-xl">
      <h5>Total</h5>
      <span>S/{{ $carrito["subtotal"] }}</span>
    </section>
</div>
<script>
  function deleteprod() {
    document.addEventListener('livewire:load', function () {
        Livewire.emit('carritoActualizado');
    });
  }
</script>