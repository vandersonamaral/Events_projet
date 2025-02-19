<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Crie sua conta</h2>
            <p class="mt-2 text-sm text-gray-600">Comece a criar seus eventos hoje</p>
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div>
                <x-jet-label for="name" value="Nome" class="block text-sm font-medium text-gray-700" />
                <div class="mt-1">
                    <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus 
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
                        placeholder="Seu nome completo" />
                </div>
            </div>

            <div>
                <x-jet-label for="email" value="E-mail" class="block text-sm font-medium text-gray-700" />
                <div class="mt-1">
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required 
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
                        placeholder="seu@email.com" />
                </div>
            </div>

            <div>
                <x-jet-label for="password" value="Senha" class="block text-sm font-medium text-gray-700" />
                <div class="mt-1">
                    <x-jet-input id="password" type="password" name="password" required autocomplete="new-password"
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
                        placeholder="••••••••" />
                </div>
            </div>

            <div>
                <x-jet-label for="password_confirmation" value="Confirmar Senha" class="block text-sm font-medium text-gray-700" />
                <div class="mt-1">
                    <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
                        placeholder="••••••••" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 transition-colors duration-200">
                    Criar Conta
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Já tem uma conta? 
                    <a href="{{ route('login') }}" class="font-medium text-orange-500 hover:text-orange-600">
                        Entrar
                    </a>
                </p>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
