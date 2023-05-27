<x-app-layout>
    <x-slot name="header" class="header">
        <h2>
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            <form method="POST" class="space-y-6 w-1/2 mx-auto">
            @csrf
                <!-- Personal Info -->
                <x-main-content-wrapper>
                    <h1>Dados Pessoais</h1>
                    <!-- Name -->
                    <div class="mb-8">
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- RG -->
                    <div class="mb-8">
                        <x-input-label for="rg" :value="__('RG')" />
                        <x-text-input id="rg" type="text" name="rg" :value="old('rg')" required autofocus autocomplete="rg" />
                        <x-input-error :messages="$errors->get('rg')" class="mt-2" />
                    </div>

                    <!-- CPF -->
                    <div>
                        <x-input-label for="cpf" :value="__('CPF')" />
                        <x-text-input id="cpf" type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="cpf" />
                        <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                    </div>
                </x-main-content-wrapper>

                <!-- Address -->
                <x-main-content-wrapper>
                    <h1>Endereço</h1>
                    <!-- Address -->
                    <div class="mb-8">
                        <x-input-label for="address" :value="__('Endereço')" />
                        <x-text-input id="address" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <!-- Neighborhood -->
                    <div class="mb-8">
                        <x-input-label for="neighborhood" :value="__('Bairro')" />
                        <x-text-input id="neighborhood" type="text" name="neighborhood" :value="old('neighborhood')" required autofocus autocomplete="neighborhood" />
                        <x-input-error :messages="$errors->get('neighborhood')" class="mt-2" />
                    </div>

                    <!-- ZIP -->
                    <div class="mb-8">
                        <x-input-label for="zip" :value="__('CEP')" />
                        <x-text-input id="zip" type="text" name="zip" :value="old('zip')" required autofocus autocomplete="zip" />
                        <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                    </div>

                    <!-- City -->
                    <div class="mb-8">
                        <x-input-label for="city" :value="__('Cidade')" />
                        <x-text-input id="city" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>

                    <!-- State -->
                    <div>
                        <x-input-label for="countryState" :value="__('Estado')" />
                        <select name="countryState" id="countryState">
                            @foreach($countryState as $row)
                                <option value="{{ $row->id }}"> {{ $row->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </x-main-content-wrapper>

                <!-- Contact Info -->
                <x-main-content-wrapper>
                    <h1>Contato</h1>
                    <!-- Phone -->
                    <div class="mb-8">
                        <x-input-label for="phone" :value="__('Telefone')" />
                        <x-text-input id="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- E-mail -->
                    <div>
                        <x-input-label for="email" :value="__('E-mail')" />
                        <x-text-input id="email" type="text" name="email" :value="old('email')" required autofocus autocomplete="email"  />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </x-main-content-wrapper>



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
