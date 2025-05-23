<nav class="col-span-1 w-full  bg-[var(--dark-eco)]">
  <img src="{{ asset("img/logowhite.png") }}" alt="" class="w-1/2 mx-auto my-[1rem] hidden md:block">
  <img src="{{ asset("img/logowhiteshort.png") }}" alt="" class="w-full mx-auto p-[1rem] block md:hidden">
  <section class="w-full flex flex-col items-center justify-center my-[1rem]">
    <a href="" class="py-[0.6rem] w-full text-black pl-[1rem] bg-white/60 text-md md:text-xl hover:bg-white transition">Inicio</a>
  </section>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" 
    class="cursor-pointer font-bold text-start px-[1rem] py-[0.6rem] bg-red-500 w-full transition text-white duration-500 hover:bg-red-400 hover:text-[var(--dark-eco)]"
    >Cerrar sesión</button>
  </form>
</nav>