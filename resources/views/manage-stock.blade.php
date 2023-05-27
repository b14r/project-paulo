<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Controle de Estoque') }}
        </h2>
    </x-slot>
{{--{{dd($stock)}}/--}}
    <div class="m-8">
        <x-main-content-wrapper>

            <x-main-content-wrapper>

                <table class="stock">
                    <tr class="stock">
                        <th>código</th>
                        <th class="w-16 text-center">qtd</th>
                        <th class="w-96">descrição</th>
                        <th class="flex justify-end w-36">$ unitário</th>
                    </tr>

                    @foreach($stock as $row)
                        <tr>
                            <td>{{ $row->bar_code }}</td>
                            <td class="w-16 flex justify-center">{{ $row->quantity }}</td>
                            <td class="w-96 text-lg">{{ $row->name }}</td>
                            <td class="flex justify-end w-36">{{ $row->price }}</td>

                            {{--REMOVE FROM STOCK--}}
                            <form action="{{ route('stock-down') }}" method="post">
                                @csrf
                                <input type="text" name="product_id" value="{{ $row->id }}" hidden>
                                <td class="w-8"><button class="bg-red-600 text-white px-1 rounded-full font-logo text-xl h-6 w-6 flex place-items-center justify-center hover:bg-red-400">-</button></td>
                            </form>

                            {{--ADD TO STOCK--}}
                            <form action="{{ route('stock-up') }}" method="post">
                                @csrf
                                <input type="text" name="product_id" value="{{ $row->id }}" hidden>
                                <td class="w-8"><button class="bg-green-600 text-white px-1 rounded-full font-logo text-xl h-6 w-6 flex place-items-center justify-center hover:bg-green-400">+</button></td>
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
