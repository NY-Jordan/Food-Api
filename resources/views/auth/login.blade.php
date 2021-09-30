<x-guest-layout>
    <x-jet-authentication-card>
        <div class="card-title text-center mb-4 h4">
            Connectez-vous
        </div>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <x-jet-label for="email" value="{{ __('Connectez-vous avec Google') }}" />
                <a href="{{ route('socialite.redirect', 'google') }}">
                    <button class="block mt-1 w-full">Google</button>
                </a>
            </div>

            <div  class="mb-4">
                <x-jet-label for="email" value="{{ __('Connectez-vous avec Git-Hub') }}" />
                <a href="{{ route('socialite.redirect', 'github') }}">
                    <button class="block mt-1 w-full">Git-Hub</button>
                </a>
            </div>

            <div  class="mb-4">
                <x-jet-label for="email" value="{{ __('Connectez-vous avec Facebook') }}" />
                <a href="{{ route('socialite.redirect', 'facebook') }}">
                    <button class="block mt-1 w-full">Facebook</button>
                </a>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
