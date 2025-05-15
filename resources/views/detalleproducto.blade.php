@extends("layouts.ecocreations")
@section("titulo", $producto->nombre )
@section("content")
<section data-idprod="{{$producto->idProducto}}" class="w-full px-[4vw] md:px-[14vw] py-[10rem]  sm:py-[12rem] min-h-dvh flex justify-center items-center">
  <article class="w-full h-full bg-[var(--dark-eco)] p-[1rem] lg:p-[2rem] rounded-2xl flex flex-wrap lg:flex-nowrap gap-[0.5rem] lg:gap-[1.5rem]">
    <img src="data:image/jpeg;base64,{{ $producto->imagen}}" alt="" class="bg-white h-[20rem] lg:h-full w-full max-w-[100%] lg:max-w-[21rem] object-cover object-top rounded-2xl">
    <section class="w-full text-white flex flex-col justify-between">
      <h1 class="text-3xl lg:text-4xl ">{{ $producto->nombre }}</h1>
      <p class="text-md lg:text-xl my-[1.2rem] sm:my-[0.5rem] max-h-[12rem] overflow-auto">
        {{ $producto->descripcion }}
      </p>
      <div class="flex items-center gap-1">
        <h2 class="text-lg">Cantidad Disponible</h2>
        <div class="w-[3rem] h-[3rem] text-2xl bg-white text-[var(--dark-eco)] flex items-center justify-center rounded-lg">{{$producto->stock}}</div>
      </div>
      <div class="flex gap-0.5">
        <button class="w-[3rem] h-[3rem] bg-white flex items-center justify-center rounded-s-xl cursor-pointer hover:opacity-80 transition">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30">
            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
          </svg>
        </button>
        <input type="number" value="1" class="w-[3rem] h-[3rem] bg-white text-black text-center">
        <button class="w-[3rem] h-[3rem] bg-white flex items-center justify-center rounded-e-xl cursor-pointer hover:opacity-80 transition">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30">
            <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/>
          </svg>
        </button>
      </div>
      <div class="w-full flex mt-[2rem] items-center flex-wrap justify-center sm:justify-between gap-3 sm:flex-nowrap">
        <div class="text-3xl">S/{{ $producto->precio }}</div>
        <form method="POST" action="{{ route('carrito.agregar') }}" style="display:inline;" onclick="addprod()">
            @csrf
            <input type="hidden" name="idProducto" value="{{ $producto->idProducto }}">
            <button onclick="addprod({{$producto->idProducto}})" class=" border-2 border-[var(--green-eco)] rounded-lg py-[0.8rem] px-[2rem] text-xl cursor-pointer w-full sm:w-auto hover:bg-white hover:text-[var(--dark-eco)] transition">Añadir al carrito</button>
        </form>
      </div>
    </section>
  </article>
</section>
<script>
  function addprod() {
      document.addEventListener('livewire:load', function () {
        Livewire.emit('carritoActualizado');
        });
    }
</script>
@endsection