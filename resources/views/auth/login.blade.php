<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-center text-2xl font-bold text-gray-700 mb-6">{{ __('Login to Your Account') }}</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 underline"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Social Login -->
        <div class="mt-6">
            <p class="text-center text-sm text-gray-600 mb-4">{{ __('Or login with') }}</p>
            <div class="flex justify-center space-x-4">
                <a href=""
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 48 48">
                        <path
                            d="M24 9.5c3.44 0 6.57 1.31 9.03 3.8l6.75-6.75C35.16 3.17 29.8 1 24 1 14.33 1 6.1 7.19 3.39 16h7.82C12.89 11.15 18.07 7.5 24 7.5z"
                            fill="#fbc02d" />
                        <path
                            d="M4.03 12.55C2.44 14.59 1.49 16.94 1.12 19.5h7.82c.5-2.02 1.46-3.91 2.72-5.47l-7.63-7.63z"
                            fill="#e53935" />
                        <path
                            d="M16 24c0-1.09.15-2.14.42-3.13h-8.6a10.46 10.46 0 000 6.26h8.6c-.27-.99-.42-2.04-.42-3.13z"
                            fill="#4caf50" />
                        <path
                            d="M10.82 33.47c-.99-.99-1.79-2.1-2.44-3.31H1.12c1.28 4.09 4.09 7.64 7.88 9.58l4.91-4.91c-.54-.55-1.02-1.14-1.48-1.76z"
                            fill="#1e88e5" />
                    </svg>
                    {{ __('Google') }}
                </a>
                <a href=""
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 48 48">
                        <path d="M22 36v-12h-4v-5h4v-4c0-3.31 2.69-6 6-6h4v5h-4c-1.1 0-2 .9-2 2v3h6v5h-6v12h-6z"
                            fill="#fff" />
                        <path
                            d="M24 1C10.85 1 0 10.85 0 24s10.85 23 24 23 24-10.85 24-23S37.15 1 24 1zm12 23h-6v12h-6V24h-4v-5h4v-4c0-3.31 2.69-6 6-6h4v5h-4c-1.1 0-2 .9-2 2v3h6v5z"
                            fill="#1877f2" />
                    </svg>
                    {{ __('Facebook') }}
                </a>
            </div>
        </div>

        <!-- Register Link -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">{{ __("Don't have an account?") }}
                <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">{{ __('Register') }}</a>
            </p>
        </div>
    </div>
</x-guest-layout>
