<x-guest-layout>
    <x-auth-card>
        <section>
            <h3 class="font-bold text-2xl text-center text-green-600">Theses and Capstone Projects Archiving System</h3>
            <p class="text-gray-600 pt-2 text-center">Please verify your email.</p>
        </section>

        <section class="mt-10">

        <div class="mb-4 text-md text-gray-600">
            {{ __('Thanks for signing up. Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <form method="POST" action="{{ route('logout') }}" class="flex flex-row-reverse mb-4">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                {{ __('Log Out') }}
            </button>
        </form>

            <form method="POST" action="{{ route('verification.send') }}" class="flex flex-col">
                @csrf
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
            </form>


        </section>
    </x-auth-card>
</x-guest-layout>
