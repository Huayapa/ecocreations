@extends("layouts.admin")
@section("titulo", "Dashboard" )
@section("content")
  <section>
    <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[2rem] p-4">
      <section class="w-full bg-amber-700/60 p-[1rem] min-h-[10rem] text-white bg-gradient-to-r from-[#2dd4bf]  to-[#1f2937] py-5 px-5 rounded-xl flex flex-col justify-between">
        <h2 class="text-2xl font-bold">Total de Productos</h2>
        <h3 class="text-4xl font-bold">S/60.00</h3>
      </section>
      <section class="w-full bg-amber-700/60 p-[1rem] min-h-[10rem] text-white bg-gradient-to-bl from-[#0f172a] via-[#1e1a78] to-[#0f172a] py-5 px-5 rounded-xl flex flex-col justify-between">
        <h2 class="text-2xl font-bold">Clientes Registrados</h2>
        <h3 class="text-4xl font-bold">S/60.00</h3>
      </section>
      <section class="w-full bg-amber-700/60 p-[1rem] min-h-[10rem] text-white bg-gradient-to-bl from-[#84cc16] via-[#16a34a] to-[#0f766e] py-5 px-5 rounded-xl flex flex-col justify-between">
        <h2 class="text-2xl font-bold">Producto con menos stock</h2>
        <h3 class="text-4xl font-bold">S/60.00</h3>
      </section>
    </article>
    <article class="p-[1rem]">
      <h2 class="text-2xl py-[1rem]">Pedidos Realizados</h2>
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-white uppercase bg-[var(--dark-eco)] ">
          <tr>
            <th scope="col" class="px-6 py-3">#</th>
            <th scope="col" class="px-6 py-3">Nombre</th>
            <th scope="col" class="px-6 py-3">Fecha</th>
            <th scope="col" class="px-6 py-3">Estado</th>
          </tr>
        </thead>
        <tbody>
          @for ($pedido = 0; $pedido < 10; $pedido++)
            <tr class=" border-b bg-[var(--dark-eco)]/90 border-[var(--dark-eco)]/90 ">
              <td class="px-6 py-4 font-medium  whitespace-nowrap text-white">{{ $pedido ?? ""}}</td>
              <td class="px-6 py-4 text-white">{{ $pedido ?? ""}}</td>
              <td class="px-6 py-4 text-white">{{ $pedido ?? ""}}</td>
              <td class="px-6 py-4 text-white">{{ $pedido ?? ""}}</td>
            </tr>
          @endfor
        </tbody>
 
    </article>
  </section>
@endsection