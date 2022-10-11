<x-guest-layout>
    <x-auth-card>
        <section>
            <h3 class="font-bold text-2xl text-center text-green-600">Theses and Capstone Projects Archiving System</h3>
            <p class="text-gray-600 pt-2 text-center">Please enter your current email address.</p>
        </section>

        <section class="mt-6">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </form>
        </section>
    </x-auth-card>
</x-guest-layout>
