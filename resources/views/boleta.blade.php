@extends("layouts.ecocreations")
@section("titulo", "Boleta" )
@section("content")
<section class="w-full px-[4vw] md:px-[10vw] py-[10rem]  sm:py-[12rem]">
  <h1 class="text-2xl md:text-4xl my-[1rem]">Resumen Pedido</h1>
  <article class="flex items-start gap-5 flex-wrap md:flex-nowrap">
    {{-- FILA1 --}}
    <section class="w-full">
      {{-- PRODUCTOS --}}
      @if(!$carrito)
        <article class="h-[10rem] flex justify-center items-center">
          <h3>No hay productos</h3>
        </article>
      @else
        <article>
          @foreach ( $carrito as $producto)
          <section class="flex gap-3 w-full pb-[0.5rem] mb-[1rem] border-b-2 border-[var(--border-eco)]">
            <img src="data:image/jpeg;base64,{{ $producto["imagen"]}}" alt="" class="p-[0.5rem] max-w-[5rem] max-h-[5rem] lg:max-w-[7rem] w-full lg:max-h-[7rem] h-full object-cover object-top bg-[var(--green-eco)]/50 rounded-2xl">
            <article class="w-full flex flex-col items-start justify-center">
              <h3 class="text-xl">{{$producto["nombre"]}}</h3>
              <span>{{ $producto["stock"] . " x S/" . $producto["precio"] }}</span>
              <span class="w-full text-end text-xl">S/{{$producto["subtotal"]}}</span>
            </article>
          </section>
          @endforeach 
        </article>
      @endif
      {{-- METODO DE PAGO --}}
      <article class="w-full min-h-[5rem] bg-[var(--dark-eco)] rounded-lg flex items-center px-[1rem] gap-[1rem]">
        <button class="bg-white rounded-lg p-[1rem] hover:opacity-50 cursor-pointer transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512">
            <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160l0 8c0 13.3 10.7 24 24 24l400 0c13.3 0 24-10.7 24-24l0-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224l-64 0 0 196.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512l448 0c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1L448 224l-64 0 0 192-40 0 0-192-64 0 0 192-48 0 0-192-64 0 0 192-40 0 0-192zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
          </svg>
        </button>
        <button class="bg-white rounded-lg p-[1rem] hover:opacity-50 cursor-pointer transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 384 512">
            <path d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"/>
          </svg>
        </button>
        <button class="bg-white rounded-lg p-[1rem] hover:opacity-50 cursor-pointer transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 576 512">
            <path d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z"/>
          </svg>
        </button>
      </article>
      <button class="block my-[1rem] w-full bg-[var(--dark-eco)] text-white py-[0.6rem] text-2xl border-2 border-[var(--green-eco)] rounded-lg cursor-pointer hover:bg-white hover:text-black transition">Comprar</button>
    </section>
    {{-- PEDIDO DETALLE --}}
    <div class="max-w-full min-w-auto md:max-w-[40rem] lg:max-w-[50rem] w-full md:min-w-[16rem] gap-4 flex flex-col">
      {{-- DATOS --}}
      <section class="bg-[var(--dark-eco)] text-white p-[1rem] rounded-2xl max-w-full min-w-auto md:max-w-[40rem] lg:max-w-[50rem] w-full md:min-w-[16rem]">
        <h2 class="text-3xl mb-[0.5rem]">Finalizar Compra:</h2>
        {{-- FORMULARIO --}}
        <form action="">
          <label class="text-xl flex flex-col">País
            <select name="pais" id="" class="bg-white text-black py-[0.6rem] rounded-lg my-[0.8rem] px-[0.5rem]">
              <option value="1">Perú</option>
              <option value="2">Chile</option>
              <option value="3">Mexico</option>
            </select>
          </label>
          <label class="text-xl flex flex-col">Calle
            <input type="text" name="calle" id="" class="bg-white text-black py-[0.6rem] rounded-lg my-[0.8rem] px-[0.5rem]" />
          </label>
          <label class="text-xl flex flex-col">Ciudad
            <input type="text" name="ciudad" id="" class="bg-white text-black py-[0.6rem] rounded-lg my-[0.8rem] px-[0.5rem]" />
          </label>
          <label class="text-xl flex flex-col">Código Postal
            <input type="text" name="ciudad" id="" class="bg-white text-black py-[0.6rem] rounded-lg my-[0.8rem] px-[0.5rem]" />
          </label>
        </form>
      </section>
      {{-- detalles --}}
      <section class="bg-[var(--dark-eco)] text-white p-[1rem] rounded-2xl max-w-full min-w-auto md:max-w-[40rem] lg:max-w-[50rem] w-full md:min-w-[16rem]">
        <div class="h-[4rem]">
          <article class="flex justify-between items-center">
            <h3 class="text-xl">Subtotal</h3>
            <span>S/{{$detalles["subtotal"]}}</span>
          </article>
          <article class="flex justify-between items-center">
            <h3 class="text-xl">Impuesto</h3>
            <span>S/{{$detalles["impuesto"]}}</span>
          </article>
        </div>
        <article>
          <div class="w-full h-[2px] bg-white my-[1rem]"></div>
          <section class="flex justify-between items-center">
            <h3 class="text-xl">Total</h3>
            <span>S/{{$detalles["total"]}}</span>
          </section>
        </article>
      </section>
      
    </div>
  </article>
</section>
@endsection