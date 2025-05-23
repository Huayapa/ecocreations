@extends("layouts.admin")
@section("titulo", "Dashboard" )
@section("content")
  <section class="w-full">
    <article class="grid grid-cols-[repeat(auto-fit,_minmax(13rem,_1fr))] auto-rows-auto gap-1 md:gap-[2rem] p-4">
      <section class="w-full bg-amber-700/60 p-[1rem] min-h-auto md:min-h-[10rem] text-white bg-gradient-to-r from-[#2dd4bf]  to-[#1f2937] py-5 px-5 rounded-xl flex flex-col justify-between">
        <h2 class="text-lg md:text-2xl font-bold">Total de ventas</h2>
        <h3 class="text-lg md:text-4xl font-bold">S/{{ $ventas }}</h3>
      </section>
      <section class="w-full bg-amber-700/60 p-[1rem] min-h-auto md:min-h-[10rem] text-white bg-gradient-to-bl from-[#0f172a] via-[#1e1a78] to-[#0f172a] py-5 px-5 rounded-xl flex flex-col justify-between">
        <h2 class="text-lg md:text-2xl font-bold">Clientes Registrados</h2>
        <h3 class="text-lg md:text-4xl font-bold">{{$cliente}}</h3>
      </section>
      <section class="w-full bg-amber-700/60 p-[1rem] min-h-auto md:min-h-[10rem] text-white bg-gradient-to-bl from-[#84cc16] via-[#16a34a] to-[#0f766e] py-5 px-5 rounded-xl flex flex-col justify-between">
        <h2 class="text-lg md:text-2xl font-bold">Producto con menos stock</h2>
        <h3 class="text-lg md:text-3xl font-bold">{{$productominstock->nombre}}</h3>
        <h4 class="text-sm md:text-xl font-bold">Cantidad:{{$productominstock->stock}}</h4>
      </section>
    </article>
    <article class="p-[1rem] w-full overflow-x-auto max-w-full table-fixed">
      <h2 class="text-2xl py-[1rem]">Pedidos Realizados</h2>
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-white uppercase bg-[var(--dark-eco)] ">
          <tr>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md">#</th>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md">Nombre</th>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md">DNI</th>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md">Fecha Realizado</th>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md">Total Productos</th>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md">Total Precio "sin igv"</th>
            <th scope="col" class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md"></th>
          </tr>
        </thead>
        <tbody>
          @if (count($pedidos) == 0)
            <tr>
              <td colspan="7" class="text-center text-white">No hay pedidos realizados</td>
            </tr>
          @else
            @foreach ($pedidos as $pedido)
              <tr class=" border-b bg-[var(--dark-eco)]/90 border-[var(--dark-eco)]/90 ">
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg font-medium  whitespace-nowrap text-white">{{ $pedido->idPedido ?? ""}}</td>
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg text-white">{{ $pedido->cliente->usuario->nombre ?? ""}}</td>
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg text-white">{{ $pedido->cliente->dni ?? ""}}</td>
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg text-white">{{ $pedido->fechaPedido?? ""}}</td>
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg text-white">{{ $pedido->totalCantidad ?? ""}}</td>
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg text-white">{{ $pedido->totalPrecio ?? ""}}</td>
                <td class="px-2 md:px-6 py-1 md:py-3 text-[0.6rem] md:text-md lg:text-lg text-white">
                  <form action="{{ route('pedido.actualizar') }}" method="post" class="flex flex-col md:flex-row items-center gap-2">
                    @csrf
                    <input type="hidden" name="idPedido" value="{{ $pedido->idPedido }}">
                    <select name="estado" id="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                      <option value="pendiente" {{ $pedido->estado == "pendiente" ? 'selected' : '' }}>Pendiente</option>
                      <option value="procesando" {{ $pedido->estado == "procesando" ? 'selected' : '' }}>En Proceso</option>
                      <option value="enviado" {{ $pedido->estado == "enviado" ? 'selected' : '' }}>Entregado</option>
                      <option value="cancelado" {{ $pedido->estado == "cancelado" ? 'selected' : '' }}>Cancelado</option>
                      <option value="devuelto" {{ $pedido->estado == "devuelto" ? 'selected' : '' }}>Devuelto</option>
                    </select>
                    <button type="submit" class="bg-white hover:bg-[var(--green-eco)] hover:text-white text-black font-bold py-2 px-4 rounded">Actualizar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </article>
  </section>
@endsection