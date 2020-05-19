<form action="{{ route('login') }}" method="POST" class="text-sm">
    @csrf

    <div class="mb-4">
        <label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="email">{{ __('Email') }}</label>
        <input wire:model.lazy="email" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="{{ __('Email') }}" value="admin@example.com">
        @error('email') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
    </div>

    <div class="mb-6">
        <label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="password">{{ __('Password') }}</label>
        <input wire:model.lazy="password" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="{{ __('Password') }}" value="password123">
        @error('password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-gradient-red hover:bg-red-500 text-white font-light py-2 px-4 rounded shadow-lg focus:outline-none focus:shadow-outline" type="submit">{{ __('Sign In') }}</button>
        <a class="inline-block align-baseline font-light text-right text-sm text-gray-500 hover:text-gray-600" href="#">{{ __('Forgot Password?') }}</a>
    </div>

    <div class="my-6">
        <a class="inline-block align-baseline font-light text-sm text-gray-500 hover:text-gray-600" href="{{ route('register') }}">{{ __('Don\'t have an account? Create one now!') }}</a>
    </div>
</form>