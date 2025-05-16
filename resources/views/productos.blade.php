@extends("layouts.ecocreations")
@section("titulo", "Productos Eco Creations")
@section("content")
{{-- LIsta de productos --}}
<header class="relative h-[30rem] sm:h-[40rem] w-full overflow-hidden">
  {{-- CARRUSEL --}}
  <section class="flex w-full transition duration-500 ease-in-out cursor-pointer" id="carrusel">
    @foreach ($categorias as $categoria)
      <article class="w-full min-w-full h-[30rem] sm:h-[40rem] flex flex-col justify-end items-center relative" data-box="{{ $categoria->idCategoria - 1 }}">
        <img class="absolute -z-10 w-full h-full object-cover brightness-70" src="data:image/jpeg;base64,{{ $categoria->imagen}}" alt="">
        <h2 class="text-4xl md:text-7xl mb-[2rem] text-white text-center">{{$categoria->nombre}}</h2>
        <button class="px-[2rem] py-[1rem] mb-[4rem] bg-[var(--dark-eco)] text-white rounded-2xl text-xl md:text-3xl font-bold max-w-[16rem] w-full cursor-pointer hover:brightness-50">Visitar</button>
      </article>
    @endforeach
  </section>
</header>
{{-- PRODUCTOS --}}
@livewire('product-filter')
<script>
  // FUNCION PARA EL CARRUSEL
  const $carrusel = document.getElementById("carrusel");
  const $itemscarrusel = $carrusel.querySelectorAll("article");
  const total = $itemscarrusel.length;
  let position = 0;
  $carrusel.addEventListener("click", e => {
    if($itemscarrusel[e.target.dataset.box]) {
      position = (position + 1) % total;
      $carrusel.style.transform = `translateX(-${position * 100}%)`;
    }
  })
  
</script>
@endsection