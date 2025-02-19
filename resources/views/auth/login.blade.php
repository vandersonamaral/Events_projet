<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Bem-vindo de volta!</h2>
            <p class="mt-2 text-sm text-gray-600">Entre para gerenciar seus eventos</p>
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <x-jet-label for="email" value="E-mail" class="block text-sm font-medium text-gray-700" />
                <div class="mt-1">
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
                        placeholder="seu@email.com" />
                </div>
            </div>

            <div>
                <x-jet-label for="password" value="Senha" class="block text-sm font-medium text-gray-700" />
                <div class="mt-1">
                    <x-jet-input id="password" type="password" name="password" required autocomplete="current-password"
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
                        placeholder="••••••••" />
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox"
                        class="h-4 w-4 text-orange-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Lembrar-me
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-orange-500 hover:text-orange-600">
                            Esqueceu sua senha?
                        </a>
                    </div>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 transition-colors duration-200">
                    Entrar
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Não tem uma conta? 
                    <a href="{{ route('register') }}" class="font-medium text-orange-500 hover:text-orange-600">
                        Cadastre-se
                    </a>
                </p>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
