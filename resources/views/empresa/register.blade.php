<x-guest-layout class="p-4">
    <x-auth-card class="centralize">
        <x-slot name="logo">
            <a href="/">

            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="p-4" method="POST" action="{{ route('registro.empresa') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="nome_empresa" :value="__('Nome Empresa')" />

                <x-input id="nome_empresa" class="block mt-1 w-full" type="text" name="nome_empresa" required autofocus />
            </div>
            <!-- Name -->

            <div>
                <x-label for="CPF_CNPJ" :value="__('CPF_CNPJ')" />

                <x-input id="CPF_CNPJ" class="block mt-1 w-full" type="text" name="CPF_CNPJ" required />
            </div>
            <div>
                <x-label for="cep" :value="__('cep')" />

                <x-input id="cep" class="block mt-1 w-full" type="text" name="cep" required />
            </div>

            <div>
                <x-label for="estado" :value="__('estado')" />

                <x-input id="estado" class="block mt-1 w-full" type="text" name="estado" required />
            </div>

            <div>
                <x-label for="bairro" :value="__('bairro')" />

                <x-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" required />
            </div>

            <div>
                <x-label for="cidade" :value="__('cidade')" />

                <x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" required />
            </div>

            <div>
                <x-label for="numero" :value="__('numero')" />

                <x-input id="numero" class="block mt-1 w-full" type="text" name="numero" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"  />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
