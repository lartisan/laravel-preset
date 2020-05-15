<!-- Header -->
		<header class="header bg-gradient-red text-red-300 font-light pb-24">
			<nav class="p-4 md:flex md:justify-between md:items-center" x-data="{ isOpen: false }" @click.away="isOpen = false" x-cloak>
				<div class="page-name p-2 flex items-center justify-between">
					<span class="px-2 uppercase tracking-widest">{{ $pageName }}</span>
					<a @click.prevent="isOpen = !isOpen" class="md:hidden focus:outline-none focus:text-red-200" href="#">
						<svg class="w-5 fill-current" viewBox="0 0 20 20">
							<path x-show="!isOpen" d="M10.001 7.8a2.2 2.2 0 100 4.402A2.2 2.2 0 0010 7.8zm0-2.6A2.2 2.2 0 109.999.8a2.2 2.2 0 00.002 4.4zm0 9.6a2.2 2.2 0 100 4.402 2.2 2.2 0 000-4.402z"/>
							<path x-show="isOpen" d="M14.348 14.849a1.2 1.2 0 01-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 11-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 111.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 111.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 010 1.698z"/>
						</svg>
					</a>
				</div>

				<ul 
					class="right-nav md:flex md:flex-row md:items-center" 
					:class="{ 'hidden': !isOpen }"
				>
					<li class="relative text-sm px-2 py-2 ml-2 hover:bg-red-400 md:hover:bg-transparent hover:text-red-200" x-data="{ isCollapsed: false }" @click.away="isCollapsed = false" x-cloak>
						<a @click.prevent="isCollapsed = !isCollapsed" href="#" class="flex">
							<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M14.65 8.512c-2.28-4.907-3.466-6.771-7.191-6.693-1.327.027-1.009-.962-2.021-.587-1.01.375-.143.924-1.177 1.773-2.902 2.383-2.635 4.587-1.289 9.84.567 2.213-1.367 2.321-.602 4.465.559 1.564 4.679 2.219 9.025.607 4.347-1.613 7.086-4.814 6.527-6.378-.765-2.145-2.311-.961-3.272-3.027zm-3.726 8.083c-3.882 1.44-7.072.594-7.207.217-.232-.65 1.253-2.816 5.691-4.463 4.438-1.647 6.915-1.036 7.174-.311.153.429-1.775 3.116-5.658 4.557zm-1.248-3.494c-2.029.753-3.439 1.614-4.353 2.389.643.584 1.847.726 3.046.281 1.527-.565 2.466-1.866 2.095-2.904l-.016-.036c-.251.082-.508.171-.772.27z"/></svg>
							<span class="md:hidden flex-auto" href="#">Notifications</span>
							<svg class="w-4 fill-current" viewBox="0 0 20 20">
								<path d="M5 6h10l-5 9-5-9z"/>
								{{-- <path x-show="isCollapsed" d="M5 6h10l-5 9-5-9z"/> --}}
								{{-- <path x-show="!isCollapsed" d="M15 10l-9 5V5l9 5z"/> --}}
							</svg>
						</a>
						<ul 
							:class="{ 'hidden': !isCollapsed }" 
							class="md:w-48 mt-2 mr-5 md:absolute md:right-0 md:z-10 md:bg-white md:text-gray-500 md:rounded-md md:overflow-hidden md:shadow-md"
						>
							<li class="p-2 ml-4 md:px-4 md:py-4 md:ml-0 md:hover:bg-gray-200 md:hover:text-gray-500">Action</li>
							<li class="p-2 ml-4 md:px-4 md:py-4 md:ml-0 md:hover:bg-gray-200 md:hover:text-gray-500">Another action</li>
						</ul>
					</li>

					<li class="relative text-sm px-2 py-2 ml-2 hover:bg-red-400 md:hover:bg-transparent hover:text-red-200" x-data="{ isCollapsed: false }" @click.away="isCollapsed = false" x-cloak>
						<a @click.prevent="isCollapsed = !isCollapsed" href="#" class="flex">
							<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M7.725 2.146c-1.016.756-1.289 1.953-1.239 2.59.064.779.222 1.793.222 1.793s-.313.17-.313.854c.109 1.717.683.976.801 1.729.284 1.814.933 1.491.933 2.481 0 1.649-.68 2.42-2.803 3.334C3.196 15.845 1 17 1 19v1h18v-1c0-2-2.197-3.155-4.328-4.072-2.123-.914-2.801-1.684-2.801-3.334 0-.99.647-.667.932-2.481.119-.753.692-.012.803-1.729 0-.684-.314-.854-.314-.854s.158-1.014.221-1.793c.065-.817-.398-2.561-2.3-3.096-.333-.34-.558-.881.466-1.424-2.24-.105-2.761 1.067-3.954 1.929z"/></svg>
							<span class="md:hidden flex-auto" href="#">{{ auth()->user()->name }}</span>
							<svg class="w-4 fill-current" viewBox="0 0 20 20">
								<path d="M5 6h10l-5 9-5-9z"/>
								{{-- <path x-show="isCollapsed" d="M5 6h10l-5 9-5-9z"/> --}}
								{{-- <path x-show="!isCollapsed" d="M15 10l-9 5V5l9 5z"/> --}}
							</svg>
						</a>
						<ul 
							:class="{ 'hidden': !isCollapsed }" 
							class="md:w-48 mt-2 mr-5 md:absolute md:right-0 md:z-10 md:bg-white md:text-gray-500 md:rounded-md md:overflow-hidden md:shadow-md"
						>
							<li class="text-sm p-2 ml-4 md:px-4 md:py-4 md:ml-0 md:hover:bg-gray-200 md:hover:text-gray-500">
								<a class="flex items-center w-full" href="{{ url('admin/profile') }}">
									<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M7.725 2.146c-1.016.756-1.289 1.953-1.239 2.59.064.779.222 1.793.222 1.793s-.313.17-.313.854c.109 1.717.683.976.801 1.729.284 1.814.933 1.491.933 2.481 0 1.649-.68 2.42-2.803 3.334C3.196 15.845 1 17 1 19v1h18v-1c0-2-2.197-3.155-4.328-4.072-2.123-.914-2.801-1.684-2.801-3.334 0-.99.647-.667.932-2.481.119-.753.692-.012.803-1.729 0-.684-.314-.854-.314-.854s.158-1.014.221-1.793c.065-.817-.398-2.561-2.3-3.096-.333-.34-.558-.881.466-1.424-2.24-.105-2.761 1.067-3.954 1.929z"/></svg>
									{{ __('Profile') }}
								</a>
							</li>
							<li class="text-sm p-2 ml-4 md:px-4 md:py-4 md:ml-0 md:hover:bg-gray-200 md:hover:text-gray-500">
								<a class="flex items-center w-full" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M19 10l-6-5v3H6v4h7v3l6-5zM3 3h8V1H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H3V3z"/></svg>
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</header> <!-- ./ Header -->