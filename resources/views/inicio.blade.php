@extends("layouts.ecocreations")
@section("titulo", "Eco Creations")
@section("content")
@if(session('error'))
<div id="toast-danger" class="flex fixed delete-animation top-[1rem] left-[1rem] z-40 items-center w-fit max-w-xs p-4 mb-4 text-white bg-[var(--dark-eco)] rounded-lg shadow-sm" role="alert">
    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
        </svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">{{ session('error') }}</div>
</div>
@endif
  {{-- INICIO DE LA PAGINA INICIO --}}

  <header 
  class="w-full fondo-inicio h-[34rem] md:h-[34rem] bg-no-repeat bg-center bg-cover px-[4vw] md:px-[10vw] flex flex-col justify-center gap-3 md:grid grid-rows-[10rem_1fr_10rem] md:grid-rows-5 grid-cols-1 md:grid-cols-2"
  >
    <article class="flex flex-col justify-center items-start gap-2  md:row-start-3 w-full mt-[2rem]">
      <h1 class="font-bold text-[var(--white-eco)] break-all md:break-normal title">ECOCREATIONS</h1>
      <h2 class="text-[var(--white-eco)] max-w-[30rem] subtextTitle">Vive verde, vive mejor. Descubre productos ecológicos que cuidan de ti y del planeta.</h2>
      <section class="flex gap-2 flex-wrap">
        <a href="#" class="border-2 border-[var(--border-eco)] block p-[0.6rem] px-[0.8rem] w-fit bg-white rounded-lg hover:bg-white/80 transition h-fit">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 448 512">
            <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
          </svg>
        </a>
        <a href="" class="border-2 border-[var(--border-eco)] block p-[0.6rem] px-[0.8rem] w-fit bg-white rounded-lg hover:bg-white/80 transition h-fit">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 512 512">
            <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/>
          </svg>
        </a>
        <a href="" class="border-2 border-[var(--border-eco)] block p-[0.6rem] px-[0.8rem] w-fit bg-white rounded-lg hover:bg-white/80 transition h-fit">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 448 512">
            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
          </svg>
        </a>
      </section>
    </article>
    <article class="h-fit row-span-1 col-start-1 md:col-start-2 row-start-3 md:row-start-4 flex justify-start md:justify-end">
      <a href="productos" class="px-[3rem] py-[1rem] bg-[var(--dark-eco)] text-white rounded-2xl text-xl font-bold cursor-pointer hover:bg-neutral-900/80 transition">Comprar</a>
    </article>
  </header>
  {{-- MOSTRAR CATEGORIAS --}}
  <section class="w-full min-h-[8rem] py-4 bg-[var(--dark-eco)] text-white px-[4vw] md:px-[10vw] flex flex-col sm:flex-row justify-stretch items-center">
    @foreach ($categorias as $categoria)
    <a href="#" class="relative w-full text-center bg-[var(--dark-eco)] h-[6rem] flex items-center justify-center hover:opacity-90 transition">
      <img class="absolute w-full h-[6rem] object-cover z-10 opacity-60" src="data:image/jpeg;base64,{{ $categoria->imagen_base64}}" alt="">
      <span class="z-20">{{$categoria->nombre}}</span>
    </a>
    @endforeach
  </section>
  {{-- MOSTRAR PRODUCTOS DESTACADOS --}}
  <section class="w-full px-[4vw] md:px-[10vw] py-[2rem]">
    <h2 class="subTitle font-bold py-3">Productos destacados</h2>
    {{-- LISTA DE CARDS --}}
    <article class="w-full grid gap-3 grid-cols-[repeat(auto-fit,_minmax(12rem,_1fr))] sm:grid-cols-[repeat(auto-fit,_minmax(18rem,_1fr))]">
      @foreach($productos as $producto)
        <x-card :producto="$producto"/>
      @endforeach
    </article>
  </section>
  {{-- MOSTRAR BENEFICIOS --}}
  <section class="w-full px-[4vw] md:px-[10vw] py-[2rem]">
    <h2 class="subTitle font-bold py-3">Beneficios</h2>
    <article class="flex justify-between gap-2 w-full">
      {{-- Lista beneficios --}}
      <section class="grid gap-2 grid-cols-[repeat(auto-fit,_minmax(18rem,_1fr))] sm:grid-cols-[repeat(auto-fit,_minmax(24rem,_1fr))] w-full h-[30rem] overflow-hidden overflow-y-auto maskimage">
        {{-- Lista --}}
        <article class="rounded-lg border-2 border-[var(--border-eco)] flex max-w-[50rem] h-fit w-full">
          <img src="{{ asset("img/beneficios/ben1.jpg") }}" alt="" class="w-[5rem] h-[8rem] object-cover rounded-s-lg sm:w-[8rem] sm:h-[8rem]">
          <section class="relative p-[0.8rem] flex items-center">
            <p class="text">Todos nuestros productos son seleccionados por su bajo impacto ambiental y procesos sostenibles.</p>
            <div class="absolute w-[2rem] h-[2rem] rounded-full bg-white top-[3rem]  left-[-20px]"></div>
          </section>
        </article>
        <article class="rounded-lg border-2 border-[var(--border-eco)] flex max-w-[50rem] h-fit w-full">
          <img src="{{ asset("img/beneficios/ben2.webp") }}" alt="" class="w-[5rem] h-[8rem] object-cover rounded-s-lg sm:w-[8rem] sm:h-[8rem]">
          <section class="relative p-[0.8rem] flex items-center">
            <p class="text">Trabajamos con marcas y emprendedores que promueven prácticas éticas y comercio justo.</p>
            <div class="absolute w-[2rem] h-[2rem] rounded-full bg-white top-[3rem]  left-[-20px]"></div>
          </section>
        </article>
        <article class="rounded-lg border-2 border-[var(--border-eco)] flex max-w-[50rem] h-fit w-full">
          <img src="{{ asset("img/beneficios/ben3.jpg") }}" alt="" class="w-[5rem] h-[8rem] object-cover rounded-s-lg sm:w-[8rem] sm:h-[8rem]">
          <section class="relative p-[0.8rem] flex items-center">
            <p class="text">Usamos empaques reciclables, compostables o reutilizables. Cero plásticos innecesarios.</p>
            <div class="absolute w-[2rem] h-[2rem] rounded-full bg-white top-[3rem]  left-[-20px]"></div>
          </section>
        </article>
        <article class="rounded-lg border-2 border-[var(--border-eco)] flex max-w-[50rem] h-fit w-full">
          <img src="{{ asset("img/beneficios/ben4.jpg") }}" alt="" class="w-[5rem] h-[8rem] object-cover rounded-s-lg sm:w-[8rem] sm:h-[8rem]">
          <section class="relative p-[0.8rem] flex items-center">
            <p class="text">Nuestros productos cuentan con sellos como USDA Organic, Ecocert, FSC, entre otros (según sea el caso).</p>
            <div class="absolute w-[2rem] h-[2rem] rounded-full bg-white top-[3rem]  left-[-20px]"></div>
          </section>
        </article>
        <article class="rounded-lg border-2 border-[var(--border-eco)] flex max-w-[50rem] h-fit w-full">
          <img src="{{ asset("img/beneficios/ben5.jpg") }}" alt="" class="w-[5rem] h-[8rem] object-cover rounded-s-lg sm:w-[8rem] sm:h-[8rem]">
          <section class="relative p-[0.8rem] flex items-center">
            <p class="text">Garantizamos que nuestros artículos están libres de químicos dañinos para tu salud y el medio ambiente.</p>
            <div class="absolute w-[2rem] h-[2rem] rounded-full bg-white top-[3rem]  left-[-20px]"></div>
          </section>
        </article>
        <article class="rounded-lg border-2 border-[var(--border-eco)] flex max-w-[50rem] h-fit w-full">
          <img src="{{ asset("img/beneficios/ben6.jpg") }}" alt="" class="w-[5rem] h-[8rem] object-cover rounded-s-lg sm:w-[8rem] sm:h-[8rem]">
          <section class="relative p-[0.8rem] flex items-center">
            <p class="text">Te mostramos de dónde viene cada producto, qué ingredientes contiene y cómo ha sido fabricado.</p>
            <div class="absolute w-[2rem] h-[2rem] rounded-full bg-white top-[3rem]  left-[-20px]"></div>
          </section>
        </article>

      </section>
      <img src="{{ asset("img/beneficios/benimg.png") }}" alt="" class="hidden lg:block max-w-[24rem] w-full min-w-[10rem] h-[30rem] object-cover">
    </article>
  </section>
  {{-- MOSTRAR SEGURIDAD --}}
  <section class="w-full px-[4vw] md:px-[10vw] py-[2rem] flex gap-2 justify-center md:justify-between items-center flex-wrap md:flex-nowrap">
    <img class="maskimage2 w-[400px] h-[400px] md:w-[200px] md:h-[300px] lg:w-[360px] lg:h-[500px] object-cover object-top" src="{{ asset("img/peoplehome.png") }}" alt="">
    <article class="flex flex-col items-center justify-center w-full">
      <h2 class="text-2xl font-bold mb-6 w-full text-center md:text-start">Compra segura y garantizada</h2>
      {{-- LISTA --}}
      <section class="w-full flex items-center gap-1 flex-wrap justify-center md:justify-between">
        {{-- CARD --}}
        <article class="max-w-[12rem] lg:max-w-[13rem] w-full min-w-[9rem] h-[14rem] flex flex-col justify-center items-center text-center border-2 border-[var(--border-eco)] p-2 rounded-xl">
          <div class="bg-gradient-to-b from-[#185B22] to-[#229333] inline-block p-2 rounded-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 576 512">
              <path class="fill-white" d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zm64 320l-64 0 0-64c35.3 0 64 28.7 64 64zM64 192l0-64 64 0c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64l0 64-64 0zm64-192c-35.3 0-64-28.7-64-64l64 0 0 64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold">Pago protegido</h3>
          <p>Tus datos están 100% seguros. Aceptamos métodos de pago confiables con cifrado SSL.</p>
        </article>
        <article class="max-w-[12rem] lg:max-w-[13rem] w-full min-w-[9rem] h-[14rem] flex flex-col justify-center items-center text-center border-2 border-[var(--border-eco)] p-2 rounded-xl">
          <div class="bg-gradient-to-b from-[#185B22] to-[#229333] inline-block p-2 rounded-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 576 512">
              <path class="fill-white" d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zm64 320l-64 0 0-64c35.3 0 64 28.7 64 64zM64 192l0-64 64 0c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64l0 64-64 0zm64-192c-35.3 0-64-28.7-64-64l64 0 0 64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold">Devoluciones sin complicaciones</h3>
          <p>Puedes devolver tu producto en un plazo de 15 días.</p>
        </article>
        <article class="max-w-[12rem] lg:max-w-[13rem] w-full min-w-[9rem] h-[14rem] flex flex-col justify-center items-center text-center border-2 border-[var(--border-eco)] p-2 rounded-xl">
          <div class="bg-gradient-to-b from-[#185B22] to-[#229333] inline-block p-2 rounded-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 576 512">
              <path class="fill-white" d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zm64 320l-64 0 0-64c35.3 0 64 28.7 64 64zM64 192l0-64 64 0c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64l0 64-64 0zm64-192c-35.3 0-64-28.7-64-64l64 0 0 64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold">Satisfacción ecológica</h3>
          <p>Cambiamos o reembolsamos el producto si no cumple tu calidad.</p>
        </article>
        <article class="max-w-[12rem] lg:max-w-[13rem] w-full min-w-[9rem] h-[14rem] flex flex-col justify-center items-center text-center border-2 border-[var(--border-eco)] p-2 rounded-xl">
          <div class="bg-gradient-to-b from-[#185B22] to-[#229333] inline-block p-2 rounded-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 576 512">
              <path class="fill-white" d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zm64 320l-64 0 0-64c35.3 0 64 28.7 64 64zM64 192l0-64 64 0c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64l0 64-64 0zm64-192c-35.3 0-64-28.7-64-64l64 0 0 64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/>
            </svg>
          </div>
          <h3 class="text-lg font-bold">Productos certificados</h3>
          <p>Trabajamos con: USDA Organic, Ecocert, FSC, entre otros.</p>
        </article>
      </section>
    </article>
  </section>
  {{-- MOSTRAR ESLOGAN --}}
  <section class="w-full relative min-h-[30rem] flex flex-col justify-center items-center">
    <img class="absolute top-0 -z-10 w-full min-h-[30rem] object-cover" src="{{ asset("img/fondofinalinicio.png") }}" alt="">
    <h2 class="text-4xl max-w-[30rem] text-center text-white">Haz de lo que natural tu estilo de vida</h2>
    <a href="productos" class="mt-[1rem] py-[1rem] px-[2rem] bg-[var(--dark-eco)] rounded-2xl text-xl font-bold text-white cursor-pointer hover:brightness-50 transition">Explorar tienda</a>
  </section>
  {{-- ESTILOS --}}
  <style>
    .fondo-inicio {
      background-image: url('{{ asset('img/fondoinicio.png') }}')
    }
  </style>
@endsection