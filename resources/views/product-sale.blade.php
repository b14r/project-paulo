<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Efetuar Venda') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            {{-- CLIENT INFO --}}
            <x-main-content-wrapper>
                <div class="flex place-items-end justify-between space-x-8 mb-8">
                    <div>
                        <x-input-label for="client_name" :value="__('Nome do Cliente')" />
                        <x-text-input id="client_name" type="text" name="client_name" value="{{ $clisale->name }}" readonly required autofocus autocomplete="client_name" />
                        <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="sale_code" :value="__('Código de venda')" />
                        <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" readonly required autofocus autocomplete="sale_code" />
                        <x-input-error :messages="$errors->get('sale_code')" class="mt-2" />
                    </div>
                </div>
            </x-main-content-wrapper>

            {{-- SEARCH PRODUCT --}}
            <x-main-content-wrapper>
                {{-- SEARCH PRODUCT --}}
                <form action="{{ route('find-product') }}" method="post" class="flex place-items-end mb-8 justify-start">
                    @csrf

                    <div class="mr-8">
                        <x-input-label for="find_product" :value="__('Código de barras')" />
                        <x-text-input id="find_product" type="text" name="find_product" value="" required autofocus autocomplete="find_product" />
                        <x-input-error :messages="$errors->get('find_product')" class="mt-2" />
                    </div>

                    <x-text-input id="client_name" type="text" name="client_name" value="{{ $clisale->name }}" hidden readonly required autofocus autocomplete="client_name" />
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" hidden readonly required autofocus autocomplete="sale_code" />

                    <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-blue-300 text-2xl rounded-xl">procurar</button>
                </form>

                {{-- ADD PRODUCT TO CART --}}
                <form action="{{ route('add-to-cart') }}" method="post" class="flex place-items-end gap-x-8">
                    @csrf

                    <x-text-input id="client_name" type="text" name="client_name" value="{{ $clisale->name }}" hidden readonly required autofocus autocomplete="client_name" />
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" hidden readonly required autofocus autocomplete="sale_code" />

                    @foreach($find_product as $row)
                        <x-text-input id="product_id" type="text" name="product_id" value="{{ $row->id}}" hidden required />
                    @endforeach


                    <div class="w-32">
                        <x-input-label for="quantity" :value="__('Qtd')" />
                        <x-text-input id="quantity" class="quantity" type="text" name="qtd" value="" min="0" required autofocus autocomplete="quantity" />
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="bar_code" :value="__('Código')" />
                        @foreach($find_product as $row)
                            <x-text-input id="bar_code" type="text" name="bar_code" value="{{ $row->bar_code }}" required readonly autofocus autocomplete="bar_code" />
                        @endforeach
                        <x-input-error :messages="$errors->get('bar_code')" class="mt-2" />
                    </div>

                    <div class="w-32">
                        <x-input-label for="quantity" :value="__('Estoque')" />
                        @foreach($find_product as $row)
                            <x-text-input id="quantity" type="number" name="quantity" value="{{ $row->quantity }}" readonly required autofocus autocomplete="quantity" />
                        @endforeach
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('Descrição')" />
                        @foreach($find_product as $row)
                            <x-text-input id="description" type="text" name="description" value="{{ $row->name }}" readonly required autofocus autocomplete="description" />
                        @endforeach
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="w-52">
                        <x-input-label for="unitary_price" :value="__('$ Unitário')" />
                        @foreach($find_product as $row)
                            <x-text-input id="unitary_price" class="unitary_price" type="number" name="unitary_price" value="{{ $row->price }}" readonly required autofocus autocomplete="unitary_price" />
                        @endforeach
                        <x-input-error :messages="$errors->get('unitary_price')" class="mt-2" />
                    </div>

                    <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">adicionar</button>
                </form>

            </x-main-content-wrapper>

            {{-- LIST CART --}}
            <div class="flex justify-center">
                <form action="{{ route('shopping-cart') }}" method="post">
                    @csrf
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" hidden />
                    <x-text-input id="client_name" type="text" name="client_name" value="{{ $clisale->name }}" hidden />
                    <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">listar carrinho</button>
                </form>
            </div>
        </x-main-content-wrapper>
    </div>
</x-app-layout>
