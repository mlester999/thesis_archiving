<x-guest-layout>
    <x-auth-card>
        <div>
            <section>
                <h3 class="font-bold text-2xl text-center text-green-600">Theses and Capstone Projects Archiving System</h3>
                <p class="text-gray-600 pt-2 text-center">Login to your account.</p>
            </section>
            
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <section class="mt-10">
        <form method="POST" action="{{ route('login') }}" class="flex flex-col">
            @csrf

            <!-- Username -->
            <div class="mb-6">
                <x-input-label for="username" :value="__('Username')" />

                <x-text-input id="username" type="text" name="username" :value="old('username')" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="text-sm text-slate-600 hover:text-slate-700 hover:underline mb-6" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </form>
    </section>
    </div>
    </x-auth-card>
</x-guest-layout>
