<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Efetuar Venda') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>
            {{--CLIENT INFO--}}
            <x-main-content-wrapper>
                <div class="flex font-logo text-2xl justify-around">
                    <p>Client: {{ $clisale->name }}</p>
                    <p>Sale Code: {{ $clisale->sale_code }}</p>
                    <p>Data: {{\Illuminate\Support\Carbon::now()->format('d-m-Y')}}</p>
                </div>
            </x-main-content-wrapper>

            {{--SHOPPING CART INFO--}}
            <x-main-content-wrapper>
                <table class="end-sale">
                    <tr>
                        <th>código</th>
                        <th>qtd</th>
                        <th>descrição</th>
                        <th>$ unitário</th>
                        <th>$ total</th>
                    </tr>

                    @foreach($find_product_sale as $row)
                        <tr>
                            <td>{{ $row->bar_code }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->total_price }}</td>
                        </tr>
                    @endforeach
                    <tr class="flex justify-between">
                        <td class="font-bold">Total</td>
                        <td class="font-bold">{{$total}}</td>
                    </tr>
                </table>
            </x-main-content-wrapper>

            {{--PAYMENT INFO--}}
            <x-main-content-wrapper>
                <form action="{{ route('sale-end') }}" method="post">
                    @csrf
                    <div class="flex space-x-8 justify-center">
                        <div>
                            <x-input-label for="payment_type" :value="__('Opção de Pagamento')" />
                            <select name="payment_type" id="payment_type">
                                @foreach($payment_type as $row)
                                    <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-input-label for="payment_status" :value="__('Status do Pagamento')" />
                            <select name="payment_status" id="payment_status">
                                @foreach($payment_status as $row)
                                    <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-input-label for="sale_status" :value="__('Status da Venda')" />
                            <select name="sale_status" id="sale_status">
                                @foreach($sale_status as $row)
                                    <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" hidden />
                    <x-text-input id="total" type="text" name="total" value="{{$total}}" hidden />

                    <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl flex mx-auto">finalizar venda</button>

                </form>
            </x-main-content-wrapper>
        </x-main-content-wrapper>
    </div>
</x-app-layout>
