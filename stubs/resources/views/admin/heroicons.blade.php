@extends('admin.layouts.app', [
    'pageName' => 'Icons'
])

@section('content')

    <!-- Heroicons -->
    <section class="auto-tables p-6 md:p-8 -mt-16">
        <article class="entypo w-full px-6 md:px-8 py-8 md:py-12 rounded-lg bg-white shadow-lg">
            <h2 class="text-2xl font-hairline font-sans mb-6">Heroicons UI</h2>
		
			<div class="icons p-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
				@foreach (Storage::files('public/heroicons') as $path)
					<div class="w-full px-2 py-12 border border-gray-200 rounded-lg bg-white shadow-lg flex flex-col items-center justify-center">
						<div class="icon relative fill-current w-16 md:w-20 h-16 md:h-20 mb-4 items-center align-middle overflow-hidden">
							{!! Storage::get( $path ) !!}
						</div>
						<h3 class="mt-6 font-semibold text-xs uppercase">{{ pathinfo($path)['filename'] }}</h3>
					</div>
				@endforeach
			</div>
		</article>

	</section> <!-- ./ Heroicons -->
	
@endsection