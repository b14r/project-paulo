<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Efetuar Venda') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>
            {{-- SEARCH ENGINE --}}
            <form action="{{ route('find-cpf') }}" method="post" class="flex place-items-end space-x-8 mb-8 w-1/2 mx-auto">
                @csrf

                <div>
                    <x-input-label for="find_cpf" :value="__('CPF')" />
                    <x-text-input id="find_cpf" type="text" name="find_cpf" value="" required autofocus autocomplete="find_cpf" />
                    <x-input-error :messages="$errors->get('find_cpf')" class="mt-2" />
                </div>

                <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-blue-300 text-2xl rounded-xl">procurar</button>
            </form>

            {{-- FORM TO BE SENT --}}
            <form action="{{ route('product-sale') }}" method="post" class="flex place-items-end space-x-8 mb-8 w-1/2 mx-auto">
                @csrf


                    <x-text-input id="client_id" type="text" name="client_id" value="{{ $find_cpf->id ?? ''}}" required hidden autofocus autocomplete="client_cpf" />


                <div>
                    <x-input-label for="client_name" :value="__('Nome do Cliente')" />

                        <x-text-input id="client_name" type="text" name="client_name" value="{{ $find_cpf->name ?? '' }}" readonly required autofocus autocomplete="client_name" />

                    <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="sale_code" :value="__('Código de venda')" />
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ random_int(min:1000, max: 100000) }}" readonly required autofocus autocomplete="sale_code" />
                    <x-input-error :messages="$errors->get('sale_code')" class="mt-2" />
                </div>

                <x-text-input id="find_product" type="text" name="find_product" value="" hidden readonly required autofocus autocomplete="find_product" />

                <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-yellow-600 text-2xl rounded-xl">iniciar venda</button>
            </form>
        </x-main-content-wrapper>
    </div>
</x-app-layout>
