<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Lista de Compras') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            <x-main-content-wrapper>
                <div class="flex font-logo text-2xl justify-around">
                    <p>Client: {{ $clisale->name }}</p>
                    <p>Sale Code: {{ $clisale->sale_code }}</p>
                </div>
            </x-main-content-wrapper>

            <x-main-content-wrapper>

                <table class="cart">
                    <tr>
                        <th>código</th>
                        <th>qtd</th>
                        <th>descrição</th>
                        <th>$ unitário</th>
                        <th>$ total</th>
                    </tr>

                    @foreach($find_product_sale as $row)

                        <tr>
                            <td>{{ $row->registerProduct->bar_code }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->registerProduct->name }}</td>
                            <td>{{ $row->registerProduct->price }}</td>
                            <td>{{ $row->total_price }}</td>

                            <form action="{{ route('shopping-cart-delete') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="text" name="product_id" value="{{ $row->product_id }}" hidden>
                                <input type="text" name="sale_code" value="{{ $row->sale_code }}" hidden>
                                <input type="text" name="client_name" value="{{ $clisale->name }}" hidden>
                                <td class="w-8"><button class="bg-red-600 text-white px-1 rounded-full font-logo text-xl h-6 w-6 flex place-items-center justify-center hover:bg-red-400">-</button></td>
                            </form>

                        </tr>
                    @endforeach
                </table>
            </x-main-content-wrapper>

            <div class="flex justify-center">
                <form action="{{ route('make-sale') }}" method="post">
                    @csrf
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" hidden />
                    <x-text-input id="client_name" type="text" name="client_name" value="{{ $clisale->name }}" hidden />
                    <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">finalizar venda</button>
                </form>
            </div>
        </x-main-content-wrapper>
    </div>
</x-app-layout>
