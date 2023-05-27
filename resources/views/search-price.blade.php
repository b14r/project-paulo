<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Consulta de Preço') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            <x-main-content-wrapper>
                {{-- SEARCH PRODUCT --}}
                <form action="{{ route('search-price') }}" method="post" class="flex place-items-end justify-start mb-8 w-1/2 mx-auto">
                    @csrf

                    <div class="mr-8">
                        <x-input-label for="search_price" :value="__('Código de barras')" />
                        <x-text-input id="search_price" type="text" name="search_price" value="" required autofocus autocomplete="search_price" />
                        <x-input-error :messages="$errors->get('search_price')" class="mt-2" />
                    </div>

                    <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-blue-300 text-2xl rounded-xl">procurar</button>
                </form>

                {{-- ADD PRODUCT TO KART --}}
                <div class="flex place-items-end space-x-8 justify-center">

                    <div class="w-bar-code">
                        <x-input-label for="bar_code" :value="__('Código')" />
                            <x-text-input id="bar_code" type="text" name="bar_code" value="{{ $search_price->bar_code ?? ''}}" required readonly autofocus autocomplete="bar_code" />
                        <x-input-error :messages="$errors->get('bar_code')" class="mt-2" />
                    </div>

                    <div class="w-32">
                        <x-input-label for="quantity" :value="__('Estoque')" />
                            <x-text-input id="quantity" type="number" name="quantity" value="{{ $search_price->quantity ?? ''}}" readonly required autofocus autocomplete="quantity" />
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('Descrição')" />
                            <x-text-input id="description" type="text" name="description" value="{{ $search_price->name ?? ''}}" readonly required autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="w-52">
                        <x-input-label for="unitary_price" :value="__('$ Unitário')" />
                            <x-text-input id="unitary_price" class="unitary_price" type="number" name="unitary_price" value="{{ $search_price->price ?? ''}}" readonly required autofocus autocomplete="unitary_price" />
                        <x-input-error :messages="$errors->get('unitary_price')" class="mt-2" />
                    </div>


                </div>

            </x-main-content-wrapper>

            <div class="flex justify-center">
                <a href="{{ route('dashboard') }}" class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">voltar</a>
            </div>







        </x-main-content-wrapper>
    </div>




</x-app-layout>
