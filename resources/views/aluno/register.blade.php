<x-guest-layout class="p-4">
    <x-auth-card class="centralize">
        <x-slot name="logo">
            <a href="/">

            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="p-4" method="POST" action="{{ route('registro.aluno') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="matricula" :value="__('matricula')" />

                <x-input id="matricula" class="block mt-1 w-full" type="text" name="matricula" required autofocus />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

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
