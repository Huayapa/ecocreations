@extends("layouts.ecocreations")
@section("titulo", "Carrito Compras" )
@section("content")
<section class="w-full px-[4vw] md:px-[10vw] py-[10rem]  sm:py-[12rem]">
  <h1 class="text-2xl md:text-4xl my-[1rem]">Carrito de Compras</h1>
  <article class="flex items-start gap-2 flex-wrap md:flex-nowrap">
    {{-- PRODUCTOS --}}
    <section class="w-full max-h-[30rem] h-full overflow-auto">
      <table class="table-fixed w-full">
        <thead >
          <tr >
            <th class="text-center md:text-start border-b-2 border-[var(--border-eco)] pb-[0.5rem] text-sm md:text-md">Imagen</th>
            <th class="text-center md:text-start border-b-2 border-[var(--border-eco)] pb-[0.5rem] text-sm md:text-md">Nombre</th>
            <th class="text-center md:text-start border-b-2 border-[var(--border-eco)] pb-[0.5rem] text-sm md:text-md">Cantidad</th>
            <th class="text-center md:text-start border-b-2 border-[var(--border-eco)] pb-[0.5rem] text-sm md:text-md">Precio</th>
            <th class="text-center md:text-start border-b-2 border-[var(--border-eco)] pb-[0.5rem] text-sm md:text-md">Subtotal</th>
          </tr>
        </thead>
        <tbody >
          @foreach ($carrito as $producto)
            <tr>
              <td class="py-[0.5rem] border-b-2 border-[var(--border-eco)]">
                <img src="data:image/jpeg;base64,{{ $producto["imagen"]}}" alt="" class="p-[0.5rem] max-w-[5rem] max-h-[5rem] lg:max-w-[7rem] w-full lg:max-h-[7rem] h-full object-cover object-top bg-[var(--green-eco)]/50 rounded-2xl">
              </td>
              <td class="py-[0.5rem] border-b-2 border-[var(--border-eco)] text-sm md:text-md lg:text-lg text-center">{{ $producto["nombre"]}}</td>
              <td class="py-[0.5rem] border-b-2 border-[var(--border-eco)] text-sm md:text-md lg:text-lg text-center">{{ $producto["stock"]}}</td>
              <td class="py-[0.5rem] border-b-2 border-[var(--border-eco)] text-sm md:text-md lg:text-lg text-center">S/{{ $producto["precio"]}}</td>
              <td class="py-[0.5rem] border-b-2 border-[var(--border-eco)] text-sm md:text-md lg:text-lg text-center">S/{{ $producto["stock"] * $producto["precio"] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </section>
    {{-- PEDIDO DETALLE --}}
    <section class="bg-[var(--dark-eco)] text-white p-[1rem] rounded-2xl max-w-full min-w-auto md:max-w-[10rem] lg:max-w-[20rem] w-full md:min-w-[16rem]">
      <h2 class="text-3xl mb-[0.5rem]">Pedido:</h2>
      <div class="h-[10rem]">
        <article class="flex justify-between items-center">
          <h3 class="text-xl">Subtotal</h3>
          <span>S/150.00</span>
        </article>
        <article class="flex justify-between items-center">
          <h3 class="text-xl">Impuesto</h3>
          <span>S/20.00</span>
        </article>
      </div>
      <article>
        <div class="w-full h-[2px] bg-white my-[1rem]"></div>
        <section class="flex justify-between items-center">
          <h3 class="text-xl">Total</h3>
          <span>S/180.00</span>
        </section>
      </article>
      <button id="btn-boleta" class="block my-[1rem] w-full py-[0.6rem] text-2xl border-2 border-[var(--green-eco)] rounded-lg cursor-pointer hover:bg-white hover:text-black transition">Comprar</button>
    </section>
  </article>
</section>
<script>
  const $btnboleta = document.getElementById("btn-boleta");
  $btnboleta.addEventListener("click", e => {
    window.location.href = "boleta";
  })
</script>
@endsection