@extends("layouts.ecocreations")
@section("titulo", "Eco Creations")
@section("content")
  <section 
  class="w-full fondo-inicio min-h-[34rem] max-h-[34rem] bg-no-repeat bg-center bg-cover px-[10vw] grid grid-rows-5 grid-cols-2"
  >
    <article class="flex flex-col gap-2 row-span-2 col-start-1 row-start-3">
      <h1 class="text-5xl font-bold text-[var(--white-eco)]">ECOCREATIONS</h1>
      <h2 class="text-2xl text-[var(--white-eco)] max-w-[26rem]">Vive verde, vive mejor. Descubre productos ecológicos que cuidan de ti y del planeta.</h2>
      <section class="flex gap-2">
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
    <article class=" row-span-1 col-start-2 row-start-4 flex justify-end">
      <button class="px-[3rem] py-[1rem] bg-[var(--dark-eco)] text-white rounded-2xl text-xl font-bold cursor-pointer hover:bg-neutral-900/80 transition">Comprar</button>
    </article>
  </section>
  <style>
    .fondo-inicio {
      background-image: url('{{ asset('img/fondoinicio.png') }}')
    }
  </style>
@endsection