<x-app-layout>
    <x-slot name="header" class="header">
        <h2>
            {{ __('Cadastrar Produto') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            <form method="POST" class="w-1/2 mx-auto">
            @csrf
            <!-- Bar Code -->
                <div class="mb-8">
                    <x-input-label for="bar_code" :value="__('Código de Barras')" />
                    <x-text-input id="bar_code" type="text" name="bar_code" :value="old('bar_code')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('bar_code')" class="mt-2" />
                </div>

                <!-- Name -->
                <div class="mb-8">
                    <x-input-label for="name" :value="__('Nome')" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Category -->
                <div class="mb-8">
                    <x-input-label for="category_id" :value="__('Categoria')" />
                    <select name="category_id" id="category">
                        @foreach($category as $row)
                            <option value="{{ $row->id }}"> {{ $row->name }} </option>
                        @endforeach
                    </select>
                </div>

                <!-- Manufacturer -->
                <div class="mb-8">
                    <x-input-label for="manufacturer" :value="__('Fabricante')" />
                    <x-text-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer" :value="old('manufacturer')" required />
                    <x-input-error :messages="$errors->get('manufacturer')" class="mt-2" />
                </div>

                <!-- Quantity-->
                <div class="mb-8">
                    <x-input-label for="quantity" :value="__('Quantidade')" />
                    <x-text-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" :value="old('quantity')" required />
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                </div>

                <!-- Price-->
                <div class=" mb-8">
                    <x-input-label for="price" :value="__('Preço')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <!-- Platform -->
                <div>
                    <x-input-label for="platform_id" :value="__('Plataforma')" />
                    <select name="platform_id" id="platform">
                        @foreach($platform as $row)
                            <option value="{{ $row->id }}"> {{ $row->name }} </option>
                        @endforeach
                    </select>
                </div>

                <!-- Warranty -->
                <div class="mt-4">
                    <x-input-label for="warranty_id" :value="__('Garantia')" />
                    <select name="warranty_id" id="warranty">
                        @foreach($warranty as $row)
                            <option value="{{ $row->id }}"> {{ $row->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-around mt-10">
                    <a class="underline text-xl uppercase font-logo text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('dashboard') }}">
                        {{ __('voltar') }}
                    </a>

                    <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">cadastrar</button>
                </div>
            </form>

        </x-main-content-wrapper>
    </div>





</x-app-layout>
