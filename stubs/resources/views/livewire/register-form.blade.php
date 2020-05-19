<form action="{{ route('register') }}" method="POST" class="text-sm">
    @csrf

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="name">{{ __('Name') }}</label>
            <input wire:model.lazy="name" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="{{ __('Email') }}" value="John Doe">
            @error('name') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="email">{{ __('Email') }}</label>
            <input wire:model.lazy="email" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="{{ __('Email') }}" value="admin@example.com">
            @error('email') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="password">{{ __('Password') }}</label>
            <input wire:model.lazy="password" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="{{ __('Password') }}" value="password123">
            @error('password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
            </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block text-gray-600 text-sm font-light uppercase tracking-wider mb-2" for="password">{{ __('Password Confirmation') }}</label>
            <input wire:model.lazy="password_confirmation" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 bg-white text-gray-500 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="{{ __('Password Confirmation') }}" value="password123">
            @error('password_confirmation') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
        </div>
    </div>

    <div class="flex items-center justify-between my-6">
        <button class="bg-gradient-red hover:bg-red-500 text-white font-light py-2 px-4 rounded shadow-lg focus:outline-none focus:shadow-outline" type="submit">{{ __('Register') }}</button>
        <a class="inline-block align-baseline font-light text-right text-sm text-gray-500 hover:text-gray-600" href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
    </div>
</form>