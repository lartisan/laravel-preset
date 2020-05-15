@extends('admin.layouts.app', [
'pageName' => 'Profile'
])

@section('content')

	<!-- Profile -->
    <section class="profile p-6 md:p-8 -mt-16">
        <article class="relative w-full px-4 py-6 rounded-lg bg-white shadow-lg flex flex-col items-center">			
			<div class="profile-image absolute rounded-full top-0 -mt-10 bg-gray-200 overflow-hidden">
				<div class="relative w-40 h-40 md:w-48 md:h-48 lg:w-64 lg:h-64">
					<svg class="absolute fill-current text-gray-600" viewBox="0 0 20 20"><path d="M7.725 2.146c-1.016.756-1.289 1.953-1.239 2.59.064.779.222 1.793.222 1.793s-.313.17-.313.854c.109 1.717.683.976.801 1.729.284 1.814.933 1.491.933 2.481 0 1.649-.68 2.42-2.803 3.334C3.196 15.845 1 17 1 19v1h18v-1c0-2-2.197-3.155-4.328-4.072-2.123-.914-2.801-1.684-2.801-3.334 0-.99.647-.667.932-2.481.119-.753.692-.012.803-1.729 0-.684-.314-.854-.314-.854s.158-1.014.221-1.793c.065-.817-.398-2.561-2.3-3.096-.333-.34-.558-.881.466-1.424-2.24-.105-2.761 1.067-3.954 1.929z"/></svg>
				</div>
			</div>

            <div class="profile-info w-full md:mr-0 mt-32 lg:mt-56">
                <h2 class="uppercase container text-2xl font-hairline font-sans mb-6">{{ auth()->user()->name }}</h2>

                <form class="" action="" method="POST">
                    @csrf

                    <div class="flex flex-col md:flex-row -mx-3 mb-4">
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">{{ __('Name') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name" type="text" placeholder="{{ __('Name') }}" value="{{ auth()->user()->name ?? old('name') }}">
                            @error('name') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">{{ __('Email') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" type="text" placeholder="{{ __('Email') }}" value="{{ auth()->user()->email ?? old('email') }}">
                            @error('email') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                    </div>

                    <h2 class="uppercase text-2xl font-hairline font-sans my-4">{{ __('Password') }}</h2>

                    <div class="flex flex-col md:flex-wrap lg:flex-row -mx-3 mb-4">
                        <div class="w-full lg:w-1/3 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="current_password">{{ __('Current Password') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="current_password" type="password" placeholder="{{ __('Current Password') }}">
                            @error('current_password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                        <div class="w-full lg:w-1/3 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">{{ __('New Password') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password" type="password" placeholder="{{ __('New Password') }}">
                            @error('password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                        <div class="w-full lg:w-1/3 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">{{ __('Password Confirmation') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password_confirmation" type="password" placeholder="{{ __('Password Confirmation') }}">
                            @error('password_confirmation') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                    </div>

                    <div class="flex items-center">
                            <button class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none uppercase tracking-wide text-white text-xs font-bold py-2 px-4 rounded" type="submit">{{ __('Update') }}</button>
                            <a class="shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none uppercase tracking-wide text-white text-xs font-bold py-2 px-4 ml-4 rounded" href="{{ redirect()->back() }}">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
		</article>
    </section> <!-- ./ Profile -->

@endsection