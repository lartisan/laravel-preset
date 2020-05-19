@extends('admin.layouts.app', [
    'pageName' => 'Forms'
])

@section('content')

    <!-- Portfolio -->
    <section class="auto-tables p-6 md:p-8 -mt-16">
        <article class="w-full px-6 md:px-8 py-8 md:py-12 rounded-lg bg-white shadow-lg">
			<h2 class="text-2xl font-hairline font-sans mb-6">Example Form</h2>

			<form action="" method="POST">
				@csrf

				<div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">{{ __('Title') }}</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="title" type="text" placeholder="{{ __('Title') }}" value="{{ $portfolio->title ?? old('title') }}">
                        @error('title') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="subTitle">{{ __('Subtitle') }}</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="subTitle" type="text" placeholder="{{ __('Subtitle') }}" value="{{ $portfolio->subTitle ?? old('subTitle') }}">
                        @error('subTitle') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">{{ __('Description') }}</label>
                        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="description" placeholder="{{ __('Description') }}" rows="5">{{ $portfolio->description ?? old('description') }}</textarea>
                        @error('description') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="client">{{ __('Client') }}</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="client" type="text" placeholder="{{ __('Client') }}" value="{{ $portfolio->client ?? old('client') }}">
                        @error('client') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="technologies">{{ __('Technologies') }}</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="technologies" type="text" placeholder="{{ __('Technologies') }}" value="{{ $portfolio->technologies ?? old('technologies') }}">
                        @error('technologies') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link">{{ __('Link') }}</label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="link" type="text" placeholder="{{ __('Link') }}" value="{{ $portfolio->link ?? old('link') }}">
                        @error('link') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        @include('admin.layouts.partials._datepicker')
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="inline-block relative w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">{{ __('Status') }}</label>
                        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status">
                            <option {{ isset($portfolio) && $portfolio->status === 1 ? 'selected' : '' }} value="1">online</option>
                            <option {{ isset($portfolio) && $portfolio->status === 0 ? 'selected' : '' }} value="0">retired</option>
                        </select>
                        <div class="pointer-events-none absolute right-0 top-0 flex items-center px-6 mt-10 text-gray-700">
                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <div class="inline-block relative w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="visibility">{{ __('Visibility') }}</label>
                        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="visibility">
                            <option {{ isset($portfolio) && $portfolio->visibility === 1 ? 'selected' : '' }} value="1">visible</option>
                            <option {{ isset($portfolio) && $portfolio->visibility === 0 ? 'selected' : '' }} value="0">hidden</option>
                        </select>
                        <div class="pointer-events-none absolute right-0 top-0 flex items-center px-6 mt-10 text-gray-700">
                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="file">{{ __('Images') }}</label>
                        <div id="images" class="dropzone img-dropzone appearance-none cursor-pointer block w-full h-auto bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="portfolios-img"></div>
                        @error('file') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                    </div>
                </div>

                <div class="flex items-center">
                        <button class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none uppercase tracking-wide text-white text-xs font-bold py-2 px-4 rounded" type="submit">Save</button>
                        <a class="shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none uppercase tracking-wide text-white text-xs font-bold py-2 px-4 ml-4 rounded" href="{{ redirect()->back() }}">Cancel</a>
                </div>

			</form>

        </article>
    </section> <!-- ./ Portfolio -->

@endsection

@push('scripts')
	{{-- Dropzone --}}
    <script type="text/javascript">
        var uploadedImagesMap = {}

        var myDropzone = new Dropzone('#images', {
            url: "http://www.example.com/", // TOUR_URL_HERE
            maxFilesize: 5, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            timeout: 50000,

            success: function(file, response)
            {
                console.log(response);
            },
            
            error: function(file, response)
            {
				console.log(response);
				return false;
            }
        });

    </script>
@endpush