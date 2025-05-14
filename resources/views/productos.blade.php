@extends("layouts.ecocreations")
@section("titulo", "Productos Eco Creations")
@section("content")
{{-- LIsta de productos --}}
<header class="relative h-[30rem] sm:h-[40rem] w-full overflow-hidden">
  {{-- CARRUSEL --}}
  <section class="flex w-full transition duration-500 ease-in-out cursor-pointer" id="carrusel">
    @foreach ($categorias as $categoria)
      <article class="w-full min-w-full h-[30rem] sm:h-[40rem] flex flex-col justify-end items-center relative" data-box="{{ $categoria->idCategoria - 1 }}">
        <img class="absolute -z-10 w-full h-full object-cover brightness-70" src="data:image/jpeg;base64,{{ $categoria->imagen_base64}}" alt="">
        <h2 class="text-4xl md:text-7xl mb-[2rem] text-white text-center">{{$categoria->nombre}}</h2>
        <button class="px-[2rem] py-[1rem] mb-[4rem] bg-[var(--dark-eco)] text-white rounded-2xl text-xl md:text-3xl font-bold max-w-[16rem] w-full cursor-pointer hover:brightness-50">Visitar</button>
      </article>
    @endforeach
  </section>
</header>
{{-- PRODUCTOS --}}
<section class="grid grid-cols-3 w-full px-[4vw] md:px-[10vw] py-[2rem] gap-[1rem] items-start">
  {{-- Filtros --}}
  <aside id="filter" class="fixed hidden bottom-[7.2rem] right-[5vw] w-[16rem] z-70 lg:z-30 bg-white lg:block lg:static col-span-1 lg:w-full border-2 border-[var(--border-eco)] rounded-2xl p-[0.6rem] lg:p-[1rem]">
    <h2 class="text-xl lg:text-3xl font-bold">Filtros</h2>
    <input class="w-full py-[0.3rem] lg:py-[0.5rem] my-[0.3rem] lg:my-[1rem] border-2 rounded-lg border-[var(--border-eco)] placeholder:pl-[1rem] focus:outline-[var(--green-eco)]" type="search" placeholder="Buscar Producto">
    <h2 class="text-xl lg:text-3xl font-bold">Categorías</h2>
    <ul>
      <li class="w-full mt-3">
        <label class="flex justify-between items-center text-sm lg:text-xl mb-[0.5rem]">Higiene y cuidado corporal
          <input type="checkbox" name="higiene" id="higiene" class="p-[0.5rem] peer size-3.5 appearance-none rounded-sm border border-[var(--dark-eco)] accent-[var(--green-eco)] checked:appearance-auto">
        </label>
        <div class="w-full h-[0.1rem] bg-[var(--border-eco)]"></div>
      </li>
      <li class="w-full mt-3">
        <label class="flex justify-between items-center text-sm lg:text-xl mb-[0.5rem]">Cosmética Natural
          <input type="checkbox" name="higiene" id="higiene" class="p-[0.5rem] peer size-3.5 appearance-none rounded-sm border border-[var(--dark-eco)] accent-[var(--green-eco)] checked:appearance-auto">
        </label>
        <div class="w-full h-[0.1rem] bg-[var(--border-eco)]"></div>
      </li>
      <li class="w-full mt-3">
        <label class="flex justify-between items-center text-sm lg:text-xl mb-[0.5rem]">Utensilios reutilizables
          <input type="checkbox" name="higiene" id="higiene" class="p-[0.5rem] peer size-3.5 appearance-none rounded-sm border border-[var(--dark-eco)] accent-[var(--green-eco)] checked:appearance-auto">
        </label>
        <div class="w-full h-[0.1rem] bg-[var(--border-eco)]"></div>
      </li>
      <li class="w-full mt-3">
        <label class="flex justify-between items-center text-sm lg:text-xl mb-[0.5rem]">Decoración reciclados
          <input type="checkbox" name="higiene" id="higiene" class="p-[0.5rem] peer size-3.5 appearance-none rounded-sm border border-[var(--dark-eco)] accent-[var(--green-eco)] checked:appearance-auto">
        </label>
        <div class="w-full h-[0.1rem] bg-[var(--border-eco)]"></div>
      </li>
    </ul>
    <h2 class="text-xl lg:text-3xl font-bold mt-3">Ordenar por</h2>
    <article class="w-full py-[1rem] grid grid-cols-1 lg:grid-cols-2 gap-1 lg:gap-3">
      <label class="has-checked:bg-neutral-950 text-center flex justify-center items-center has-checked:text-white px-[1rem] py-[0.5rem] border-2 border-neutral-950 rounded-xl text-sm lg:text-xl cursor-pointer">
        Nuevos
        <input type="radio" class="hidden" name="orden" checked/>
      </label>
      <label class="has-checked:bg-neutral-950 text-center flex justify-center items-center has-checked:text-white px-[1rem] py-[0.5rem] border-2 border-neutral-950 rounded-xl text-sm lg:text-xl cursor-pointer">
        Menor a Mayor
        <input type="radio" class="hidden" name="orden"/>
      </label>
      <label class="has-checked:bg-neutral-950 text-center flex justify-center items-center has-checked:text-white px-[1rem] py-[0.5rem] border-2 border-neutral-950 rounded-xl text-sm lg:text-xl cursor-pointer">
        Mayor a Menor
        <input type="radio" class="hidden" name="orden"/>
      </label>
      <label class="has-checked:bg-neutral-950 text-center flex justify-center items-center has-checked:text-white px-[1rem] py-[0.5rem] border-2 border-neutral-950 rounded-xl text-sm lg:text-xl cursor-pointer">
        Antiguos
        <input type="radio" class="hidden" name="orden"/>
      </label>
    </article>
    <h2 class="hidden lg:block text-xl lg:text-3xl font-bold mt-3 mb-3">Productos Nuevos</h2>
    <div class="hidden lg:flex flex-col">
      @foreach ( $productosnew as $producto)
      <article class="mb-[0.5rem]">
          <div class="flex items-center justify-between">
            <section class="flex items-center gap-[0.5rem]">
              <img 
              class="w-[3rem] h-[3rem] lg:w-[4rem] lg:h-[4rem] object-cover object-center rounded-lg bg-[var(--green-eco)]/70"
              src="data:image/jpeg;base64,{{ $producto->imagen_base64}}" alt="prod1" >
              <article>
                <h4>{{$producto->nombre}}</h4>
                <span>S/{{$producto->precio}}</span>
              </article>
            </section>
            <a href="detalleproducto/{{ $producto->idProducto }}" class="bg-[var(--dark-eco)] text-white rounded-lg w-[2rem] h-[2rem] cursor-pointer flex items-center justify-center hover:bg-[var(--green-eco)]">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 576 512">
                <path class="fill-white" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
              </svg>
            </a>
          </div>
        <div class="w-full h-[2px] bg-[var(--border-eco)] mt-2"></div>
      </article>
      @endforeach
    </div>
  </aside>
  {{-- Productos --}}
  <article class="col-span-3 lg:col-span-2">
    <h2 class="text-3xl mb-3">Cantidad: 7</h2>
    {{-- lista --}}
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">
      @foreach ( $productos as $producto)
      <x-card :producto="$producto"/>
        
      @endforeach
    </section>
  </article>
  {{-- Filtro mobile boton --}}
  <button id="btnfilter" class="lg:hidden fixed bg-[var(--dark-eco)] p-[1rem] rounded-2xl cursor-pointer bottom-[3rem] right-[5vw] z-20">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 512 512">
      <path class="fill-white" d="M3.9 54.9C10.5 40.9 24.5 32 40 32l432 0c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9 320 448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6l0-79.1L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/>
    </svg>
  </button>
</section>
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
  // FUNCION PARA EL BOTON DEL FILTRO
  const $filtro = document.getElementById("filter"),
  $btnfilter = document.getElementById("btnfilter");

  $btnfilter.addEventListener("click", () => {
    $filtro.classList.toggle("hidden");
    $filtro.classList.toggle("animationfilter");
  })
</script>
@endsection