<x-guest-layout>
    <x-main-content-wrapper>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
            <div class="mb-8">
                <x-input-label for="email" :value="__('E-mail')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-8">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-around">

                <a class="underline text-xl uppercase font-logo text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('voltar') }}
                </a>

                <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">entrar</button>

            </div>
        </form>

    </x-main-content-wrapper>
</x-guest-layout>
