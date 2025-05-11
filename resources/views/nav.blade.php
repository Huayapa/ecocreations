<nav class="animationnav font-nunito bg-[var(--dark-eco)] flex items-center justify-between w-full fixed calcnav max-w-[calc(100%-8vw)] mx-[4vw] lg:mx-[10vw] lg:max-w-[calc(100%-20vw)] top-[3rem] rounded-[1.5rem] text-white px-[1rem] py-[0.6rem] gap-[1rem] z-40">
    <section class="flex items-center justify-start">
        <div class="flex items-center gap-[0.2rem]">
            <img src="{{ asset('img/logowhite.png') }}" alt="Logo" class="w-full min-w-[40px] h-[40px] lg:h-[60px] object-cover object-left" />
            <div class="bg-[var(--green-eco)] h-[60px] lg:h-[80px] w-[0.2rem]"></div>
        </div>
        <div class=" navtext-eco items-center hidden lg:flex">
            <a class="px-[1rem] hover:underline hover:text-[var(--green-eco)] transition" href="/">Inicio</a>
            <a class="px-[1rem] hover:underline hover:text-[var(--green-eco)] transition" href="productos">Productos</a>
            <a class="px-[1rem] hover:underline hover:text-[var(--green-eco)] transition" href="#">Contacto</a>
            <a class="px-[1rem] hover:underline hover:text-[var(--green-eco)] transition" href="#">Nosotros</a>
        </div>
    </section>
    <div class="flex items-center gap-[1rem]">
      {{-- Boton de carrito de compras --}}
      <x-carrito-boton/>
      {{-- Boton de menu --}}
      <button class="block lg:hidden cursor-pointer" id="btn-menu">
          <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path class="fill-white" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
          </svg>
      </button>
      <a href="#" class="font-bold text-center px-[1rem] py-[0.6rem] border-3 rounded-[0.9rem] border-[var(--green-eco)] transition duration-500 hover:bg-white hover:text-[var(--dark-eco)] parrafo-eco hidden lg:block">Iniciar Sesión</a>
    </div>
    {{-- Barra de navegacion movil --}}
    <nav id="nav-menu" class="border-2 border-[var(--border-eco)] z-10 bg-white hidden lg:hidden w-[10rem] sm:w-[15rem] p-[1rem] rounded-e-lg rounded-s-3xl absolute top-[109px] right-1" >
        <section class="flex flex-col w-full text-[var(--dark-eco)]">
            <a class="px-[1rem] py-[0.5rem] hover:underline hover:text-[var(--green-eco)] transition text-end" href="#">Inicio</a>
            <a class="px-[1rem] py-[0.5rem] hover:underline hover:text-[var(--green-eco)] transition text-end" href="#">Productos</a>
            <a class="px-[1rem] py-[0.5rem] hover:underline hover:text-[var(--green-eco)] transition text-end" href="#">Contacto</a>
            <a class="px-[1rem] py-[0.5rem] hover:underline hover:text-[var(--green-eco)] transition text-end" href="#">Nosotros</a>
        </section>
    <button class="w-full py-[0.5rem] bg-[var(--dark-eco)] text-white rounded-xl cursor-pointer mt-[1rem]">Iniciar Sesión</button>
    </nav>
    {{-- Barra de carrito de compras --}}
    <nav id="nav-cart" class="border-2 border-[var(--border-eco)] z-10 bg-white hidden w-[15rem] sm:w-[20rem] p-[1rem] rounded-lg absolute top-[109px] right-[10px] lg:right-[180px] text-[var(--dark-eco)] max-h-[30rem] min-h-[30rem]">
        <h3 class="text-2xl font-bold">Carrito</h3>
        {{-- Lista de productos --}}
        <x-carrito-compras/>
    </nav>
</nav>
<script>
  // Menu movil
  const btnMenu = document.getElementById('btn-menu');
  const navMenu = document.getElementById('nav-menu');
  btnMenu.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
      navMenu.classList.toggle('animationnav');
  });
  // Carrito de compras
  const btnCart = document.getElementById('btn-cart');
  const navCart = document.getElementById('nav-cart');  
  btnCart.addEventListener('click', () => {
      navCart.classList.toggle('hidden');
      navCart.classList.toggle('animationcart');
  });
</script>

