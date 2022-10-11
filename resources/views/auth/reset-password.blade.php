<x-guest-layout>
    <x-auth-card>
        <section>
            <h3 class="font-bold text-2xl text-center text-green-600">Theses and Capstone Projects Archiving System</h3>
            <p class="text-gray-600 pt-2 text-center">Please enter a new password.</p>
        </section>

        <section class="mt-10">
        <form method="POST" action="{{ route('password.update') }}" class="flex flex-col">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </form>
        </section>
    </x-auth-card>
</x-guest-layout>
