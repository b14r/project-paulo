<x-guest-layout>
    <x-main-content-wrapper>

        <form method="POST" action="{{ route('register') }}" class="">
        @csrf

        <!-- Name -->
            <div class="mb-8">
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Position -->
            <div class="mb-8">
                <x-input-label for="job_position_id" :value="__('Cargo')" />
                <select name="job_position_id" id="job_position_id">
                    @foreach($jobPosition as $row)
                        <option value="{{ $row->id }}"> {{ $row->name }} </option>
                    @endforeach
                </select>
            </div>

            <!-- Email Address -->
            <div class="mb-8">
                <x-input-label for="email" :value="__('E-mail')" />
                <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-8">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-8">
                <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-around">
                <a class="underline text-xl uppercase font-logo text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('voltar') }}
                </a>

                <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">cadastrar</button>
            </div>
        </form>

    </x-main-content-wrapper>

</x-guest-layout>
