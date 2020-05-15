@extends('admin.layouts.app', [
    'pageName' => 'Dashboard'
])

@section('content')

        <!-- Cards -->
        <section class="cards p-6 md:p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 -mt-16">
            <article class="w-full py-12 rounded-lg bg-white shadow-lg flex flex-col items-center justify-center transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-105">
                <div class="icon relative rounded-full w-24 h-24 mb-4 items-center align-middle bg-gray-200 overflow-hidden">
                    <svg class="absolute p-8 fill-current text-red-600" viewBox="0 0 20 20"><path d="M18 3H2C.899 3 0 3.9 0 5v10c0 1.1.899 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 12H2V9h16v6zm0-9H2V5h16v1zM4 11.1v.6h.6v-.6H4zm3.6 1.199v.601h1.2v-.601h.6v-.6h.6v-.6H8.8v.6h-.601v.6H7.6zm2.4.601v-.601h-.601v.601H10zm-3 0v-.601H5.8v.601H7zm.6-1.201h.6v-.6H7v1.199h.6v-.599zm-2.401.6H5.8v-.6h.6v-.6H5.2v.6h-.6v.6H4v.601h1.199v-.601z"/></svg>
                </div>
                <h3 class="font-semibold text-2xl text-gray-700">$3,856</h3>
                <h3 class="font-semibold text-sm uppercase">Avegage Revenue</h3>
            </article>

            <article class="w-full py-12 rounded-lg bg-white shadow-lg flex flex-col items-center justify-center transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-105">
                <div class="icon relative rounded-full w-24 h-24 mb-4 items-center align-middle bg-gray-200 overflow-hidden">
                    <svg class="absolute p-8 fill-current text-green-600" viewBox="0 0 20 20"><path d="M9 10h2v2h9s-.149-4.459-.2-5.854C19.75 4.82 19.275 4 17.8 4h-3.208l-1.197-2.256C13.064 1.121 12.951 1 12.216 1H7.783c-.735 0-.847.121-1.179.744-.165.311-.7 1.318-1.196 2.256H2.199c-1.476 0-1.945.82-2 2.146C.145 7.473 0 12 0 12h9v-2zM7.649 2.916c.23-.432.308-.516.817-.516h3.067c.509 0 .588.084.816.516L12.924 4h-5.85l.575-1.084zM11 15H9v-2H.5s.124 1.797.199 3.322C.73 16.955.917 18 2.499 18H17.5c1.582 0 1.765-1.047 1.8-1.678.087-1.568.2-3.322.2-3.322H11v2z"/></svg>
                </div>
                <h3 class="font-semibold text-2xl text-gray-700">89</h3>
                <h3 class="font-semibold text-sm uppercase">Business Meetings</h3>
            </article>

            <article class="w-full py-12 rounded-lg bg-white shadow-lg flex flex-col items-center justify-center transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-105">
                <div class="icon relative rounded-full w-24 h-24 mb-4 items-center align-middle bg-gray-200 overflow-hidden">
                    <svg class="absolute p-8 fill-current text-blue-600" viewBox="0 0 20 20"><path d="M15 7h-3V1H8v6H5l5 5 5-5zm4.338 6.532c-.21-.224-1.611-1.723-2.011-2.114A1.503 1.503 0 0016.285 11h-1.757l3.064 2.994h-3.544a.274.274 0 00-.24.133L12.992 16H7.008l-.816-1.873a.276.276 0 00-.24-.133H2.408L5.471 11H3.715c-.397 0-.776.159-1.042.418-.4.392-1.801 1.891-2.011 2.114-.489.521-.758.936-.63 1.449l.561 3.074c.128.514.691.936 1.252.936h16.312c.561 0 1.124-.422 1.252-.936l.561-3.074c.126-.513-.142-.928-.632-1.449z"/></svg>
                </div>
                <h3 class="font-semibold text-2xl text-gray-700">1,7M</h3>
                <h3 class="font-semibold text-sm uppercase">Downloads</h3>
            </article>

            <article class="w-full py-12 rounded-lg bg-white shadow-lg flex flex-col items-center justify-center transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-105">
                <div class="icon relative rounded-full w-24 h-24 mb-4 items-center align-middle bg-gray-200 overflow-hidden">
                    <svg class="absolute p-8 fill-current text-orange-600" viewBox="0 0 20 20"><path d="M15.989 19.129c0-2.246-2.187-3.389-4.317-4.307-2.123-.914-2.801-1.684-2.801-3.334 0-.989.648-.667.932-2.481.12-.752.692-.012.802-1.729 0-.684-.313-.854-.313-.854s.159-1.013.221-1.793c.064-.817-.398-2.56-2.301-3.095-.332-.341-.557-.882.467-1.424-2.24-.104-2.761 1.068-3.954 1.93-1.015.756-1.289 1.953-1.24 2.59.065.78.223 1.793.223 1.793s-.314.17-.314.854c.11 1.718.684.977.803 1.729.284 1.814.933 1.492.933 2.481 0 1.65-.212 2.21-2.336 3.124C.663 15.53 0 17 .011 19.129.014 19.766 0 20 0 20h16s-.011-.234-.011-.871zm2.539-5.764c-1.135-.457-1.605-1.002-1.605-2.066 0-.641.418-.432.602-1.603.077-.484.447-.008.518-1.115 0-.441-.202-.551-.202-.551s.103-.656.143-1.159c.05-.627-.364-2.247-2.268-2.247-1.903 0-2.318 1.62-2.269 2.247.042.502.144 1.159.144 1.159s-.202.109-.202.551c.071 1.107.441.631.518 1.115.184 1.172.602.963.602 1.603 0 1.064-.438 1.562-1.809 2.152-.069.029-.12.068-.183.102 1.64.712 4.226 1.941 4.838 4.447H20v-2.318c0-1-.273-1.834-1.472-2.317z"/></svg>
                </div>
                <h3 class="font-semibold text-2xl text-gray-700">83,236</h3>
                <h3 class="font-semibold text-sm uppercase">Users</h3>
            </article>
        </section> <!-- ./ Cards -->

        <!-- Charts -->
        <section class="charts p-6 md:p-8 grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8 mt-10">
            <article class="panel-gray w-full rounded-lg overflow-hidden bg-white shadow-lg flex flex-col items-center justify-center">
                <div class="panel-header relative w-full top-0 bg-gray-200 px-4 py-6 flex justify-between items-center" x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <span class="text-xl text-gray-500 font-light">Latest Users - This Week vs Last Week</span>
                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <svg class="w-6 fill-current text-gray-500" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z"/></svg>
                    </button>
                    <ul x-show="isOpen" class="actions absolute right-0 mt-20 mr-10 rounded overflow-hidden bg-white shadow-md">
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-gray-200 hover:text-gray-600">Action</li>
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-gray-200 hover:text-gray-600">Another action</li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:text-gray-600">Some other action</li>
                    </ul>
                </div>
                <div class="panel-body w-full px-4 py-6">
                    {!! $latestUsersChart->container() !!}
                </div>
                <div class="panel-footer w-full p-6 border-t border-gray-200 text-right">ChartJS</div>
            </article>

            <article class="panel-gray w-full rounded-lg overflow-hidden bg-white shadow-lg flex flex-col items-center justify-center">
                <div class="panel-header relative w-full top-0 bg-gray-200 px-4 py-6 flex justify-between items-center" x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <span class="text-xl text-gray-500 font-light">Monthly Views - 2020 vs 2019</span>
                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <svg class="w-6 fill-current text-gray-500" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z"/></svg>
                    </button>
                    <ul x-show="isOpen" class="actions absolute right-0 mt-20 mr-10 rounded overflow-hidden bg-white shadow-md">
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-gray-200 hover:text-gray-600">Action</li>
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-gray-200 hover:text-gray-600">Another action</li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:text-gray-600">Some other action</li>
                    </ul>
                </div>
                <div class="panel-body w-full px-4 py-6">
                    {!! $monthlyViewsChart->container() !!}
                </div>
                <div class="panel-footer w-full p-6 border-t border-gray-200 text-right">ChartJS</div>
            </article>
        </section>

        <!-- Panels -->
        <section class="panels p-6 md:p-8 grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8 mt-10">
            <article class="panel-gray w-full rounded-lg overflow-hidden bg-white shadow-lg flex flex-col items-center justify-center">
                <div class="panel-header relative w-full top-0 bg-gray-200 px-4 py-6 flex justify-between items-center" x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <span class="text-gray-500 font-light">Panel Header</span>
                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <svg class="w-6 fill-current text-gray-500" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z"/></svg>
                    </button>
                    <ul x-show="isOpen" class="actions absolute right-0 mt-20 mr-10 rounded overflow-hidden bg-white shadow-md">
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-gray-200 hover:text-gray-600">Action</li>
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-gray-200 hover:text-gray-600">Another action</li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:text-gray-600">Some other action</li>
                    </ul>
                </div>
                <div class="panel-body px-4 py-6">
                    <h4 class="font-semibold text-xl text-gray-600">Dolor est cillum amet eu cupidatat minim aliqua enim sunt.</h4>
                    <p class="text-sm py-2">Aliqua pariatur commodo mollit ipsum laboris culpa eiusmod ullamco deserunt. Tempor laborum et proident exercitation eiusmod exercitation anim. Tempor cillum dolore cillum aliqua quis ad ipsum. Excepteur nulla Lorem laborum irure est anim dolore elit eu.</p>
                </div>
                <div class="panel-footer w-full px-4 py-6 border-t border-gray-200">Panel Footer</div>
            </article>

            <article class="panel-blue w-full rounded-lg overflow-hidden bg-white shadow-lg flex flex-col items-center justify-center">
                <div class="panel-header relative w-full top-0 bg-blue-200 px-4 py-6 flex justify-between items-center" x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <span class="text-blue-500 font-light">Panel Header</span>
                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <svg class="w-6 fill-current text-blue-500" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z"/></svg>
                    </button>
                    <ul x-show="isOpen" class="actions absolute right-0 mt-20 mr-10 rounded overflow-hidden bg-white shadow-md">
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-blue-200 hover:text-blue-600">Action</li>
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-blue-200 hover:text-blue-600">Another action</li>
                        <li class="px-4 py-2 hover:bg-blue-200 hover:text-blue-600">Some other action</li>
                    </ul>
                </div>
                <div class="panel-body px-4 py-6">
                    <h4 class="font-semibold text-xl text-blue-600">Dolor est cillum amet eu cupidatat minim aliqua enim sunt.</h4>
                    <p class="text-sm py-2">Aliqua pariatur commodo mollit ipsum laboris culpa eiusmod ullamco deserunt. Tempor laborum et proident exercitation eiusmod exercitation anim. Tempor cillum dolore cillum aliqua quis ad ipsum. Excepteur nulla Lorem laborum irure est anim dolore elit eu.</p>
                </div>
                <div class="panel-footer w-full px-4 py-6 border-t border-blue-200">Panel Footer</div>
            </article>

            <article class="panel-green w-full rounded-lg overflow-hidden bg-white shadow-lg flex flex-col items-center justify-center">
                <div class="panel-header relative w-full top-0 bg-green-200 px-4 py-6 flex justify-between items-center" x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <span class="text-green-500">Panel Header</span>
                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <svg class="w-6 fill-current text-green-500" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z"/></svg>
                    </button>
                    <ul x-show="isOpen" class="actions absolute right-0 mt-20 mr-10 rounded overflow-hidden bg-white shadow-md">
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-green-200 hover:text-green-600">Action</li>
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-green-200 hover:text-green-600">Another action</li>
                        <li class="px-4 py-2 hover:bg-green-200 hover:text-green-600">Some other action</li>
                    </ul>
                </div>
                <div class="panel-body px-4 py-6">
                    <h4 class="font-semibold text-xl text-green-600">Dolor est cillum amet eu cupidatat minim aliqua enim sunt.</h4>
                    <p class="text-sm py-2">Aliqua pariatur commodo mollit ipsum laboris culpa eiusmod ullamco deserunt. Tempor laborum et proident exercitation eiusmod exercitation anim. Tempor cillum dolore cillum aliqua quis ad ipsum. Excepteur nulla Lorem laborum irure est anim dolore elit eu.</p>
                </div>
                <div class="panel-footer w-full px-4 py-6 border-t border-green-200">Panel Footer</div>
            </article>

            <article class="panel-red w-full rounded-lg overflow-hidden bg-white shadow-lg flex flex-col items-center justify-center">
                <div class="panel-header relative w-full top-0 bg-red-200 px-4 py-6 flex justify-between items-center" x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <span class="text-red-500">Panel Header</span>
                    <button @click="isOpen = !isOpen" class="focus:outline-none">
                        <svg class="w-6 fill-current text-red-500" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z"/></svg>
                    </button>
                    <ul x-show="isOpen" class="actions absolute right-0 mt-20 mr-10 rounded overflow-hidden bg-white shadow-md">
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-red-200 hover:text-red-600">Action</li>
                        <li class="px-4 py-2 border-b border-gray-200 hover:bg-red-200 hover:text-red-600">Another action</li>
                        <li class="px-4 py-2 hover:bg-red-200 hover:text-red-600">Some other action</li>
                    </ul>
                </div>
                <div class="panel-body px-4 py-6">
                    <h4 class="font-semibold text-xl text-red-600">Dolor est cillum amet eu cupidatat minim aliqua enim sunt.</h4>
                    <p class="text-sm py-2">Aliqua pariatur commodo mollit ipsum laboris culpa eiusmod ullamco deserunt. Tempor laborum et proident exercitation eiusmod exercitation anim. Tempor cillum dolore cillum aliqua quis ad ipsum. Excepteur nulla Lorem laborum irure est anim dolore elit eu.</p>
                </div>
                <div class="panel-footer w-full px-4 py-6 border-t border-red-200">Panel Footer</div>
            </article>
        </section> <!-- ./ Panels -->

@endsection

@push('scripts')
    {!! $latestUsersChart->script() !!}
    {!! $monthlyViewsChart->script() !!}
@endpush