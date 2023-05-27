<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Cancelamento de Venda') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>
            <x-main-content-wrapper>

                <table class="cancel">
                    <tr>
                        <th class="w-36">código da compra</th>
                        <th class="w-40">data</th>
                        <th class="w-36">tipo de pagamento</th>
                        <th class="w-36">status do pagamento</th>
                        <th class="w-32">status da venda</th>
                        <th class="w-28">total</th>
                    </tr>

                    @foreach($cancel_sale as $row)
{{--@dd($row)--}}

                        <tr>
                            <td class="w-36">{{ $row->productSale->sale_code }}</td>
                            <td class="w-40">{{ $row->created_at }}</td>
                            <td class="w-36">{{ $row->paymentType->name }}</td>
                            <td class="w-36">{{ $row->statuses->name }}</td>
                            <td class="w-32">{{ $row->statuses->name }}</td>
                            <td class="w-28">{{ $row->total }}</td>

                            <form action="{{ route('cancel-sale.delete') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="text" name="client_sale_id" value="{{ $row->client_sale_id }}" hidden>
                                <input type="text" name="product_sale_id" value="{{ $row->product_sale_id }}" hidden>
                                <td class="w-8 flex place-items-center"><button class="bg-red-600 text-white px-1 rounded-full font-logo text-xl h-6 w-6 flex place-items-center justify-center hover:bg-red-400">-</button></td>
                            </form>
                        </tr>
                    @endforeach
                </table>
            </x-main-content-wrapper>

            <div class="flex justify-center">
                <a href="{{ route('dashboard') }}" class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">voltar</a>
            </div>
        </x-main-content-wrapper>
    </div>
</x-app-layout>
