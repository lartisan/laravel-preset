@extends('admin.layouts.app', [
    'pageName' => 'Tables'
])

@section('content')

    <!-- Auto Tables -->
    <section class="auto-tables p-6 md:p-8 -mt-16">
        <article class="w-full px-6 md:px-8 py-8 md:py-12 rounded-lg bg-white shadow-lg overflow-scroll">
			<h2 class="text-2xl font-hairline font-sans mb-6">Example Table</h2>

            <table class="w-full" x-data="tableData()">
                <thead class="text-gray-600">
                    <tr class="border-b border-gray-200">
                        <template x-for="heading in headings">
                            <th class="px-4 py-2 font-hairline text-lg text-red-600" x-text="heading"></th>
                        </template>
                        <th class="w-2/12 px-4 py-2 font-hairline text-lg text-red-600">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(person, index) in content" :key="index">
                        <tr class="border-b border-gray-200 text-center align-middle hover:bg-gray-200">
                            <td class="w-auto px-4 py-2" x-text="index+1"></td>
                            <td class="w-auto px-4 py-2" x-text="person.name"></td>
                            <td class="w-auto px-4 py-2" x-text="person.email"></td>
                            <td class="w-auto px-4 py-2" x-text="person.role"></td>
                            <td class="w-auto px-4 py-2" x-text="person.joined"></td>
                            <td class="w-2/12 px-4 py-2 flex">
                                <button class="p-2 rounded-md bg-transparent">
                                    <svg class="w-4 fill-current hover:text-green-400"  viewBox="0 0 20 20"><path d="M10 4.4C3.439 4.4 0 9.232 0 10c0 .766 3.439 5.6 10 5.6 6.56 0 10-4.834 10-5.6 0-.768-3.44-5.6-10-5.6zm0 9.907c-2.455 0-4.445-1.928-4.445-4.307 0-2.379 1.99-4.309 4.445-4.309s4.444 1.93 4.444 4.309c0 2.379-1.989 4.307-4.444 4.307zM10 10c-.407-.447.663-2.154 0-2.154-1.228 0-2.223.965-2.223 2.154s.995 2.154 2.223 2.154c1.227 0 2.223-.965 2.223-2.154 0-.547-1.877.379-2.223 0z"/></svg>
                                </button>
                                <button class="p-2 rounded-md bg-transparent">
                                    <svg class="w-4 fill-current hover:text-blue-400" viewBox="0 0 20 20"><path d="M14.69 2.661c-1.894-1.379-3.242-1.349-3.754-1.266a.538.538 0 00-.35.223l-4.62 6.374-2.263 3.123a2.447 2.447 0 00-.462 1.307l-.296 5.624a.56.56 0 00.76.553l5.256-2.01c.443-.17.828-.465 1.106-.849l1.844-2.545 5.036-6.949a.56.56 0 00.1-.423c-.084-.526-.487-1.802-2.357-3.162zM8.977 15.465l-2.043.789a.19.19 0 01-.221-.062 5.145 5.145 0 00-1.075-1.03 5.217 5.217 0 00-1.31-.706.192.192 0 01-.126-.192l.122-2.186.549-.755s1.229-.169 2.833.998c1.602 1.166 1.821 2.388 1.821 2.388l-.55.756z"/></svg>
                                </button>
                                <button class="p-2 rounded-md bg-transparent">
                                    <svg class="w-4 fill-current hover:text-orange-400" viewBox="0 0 20 20"><path d="M3.389 7.113L4.49 18.021c.061.461 2.287 1.977 5.51 1.979 3.225-.002 5.451-1.518 5.511-1.979l1.102-10.908C14.929 8.055 12.412 8.5 10 8.5c-2.41 0-4.928-.445-6.611-1.387zm9.779-5.603l-.859-.951C11.977.086 11.617 0 10.916 0H9.085c-.7 0-1.061.086-1.392.559l-.859.951C4.264 1.959 2.4 3.15 2.4 4.029v.17C2.4 5.746 5.803 7 10 7c4.198 0 7.601-1.254 7.601-2.801v-.17c0-.879-1.863-2.07-4.433-2.519zM12.07 4.34L11 3H9L7.932 4.34h-1.7s1.862-2.221 2.111-2.522c.19-.23.384-.318.636-.318h2.043c.253 0 .447.088.637.318.248.301 2.111 2.522 2.111 2.522h-1.7z"/></svg>
                                </button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>

        </article>
    </section> <!-- ./ Auto Tables -->

@endsection

@push('scripts')
    <script>
        function tableData() {
            return {
                'headings': ['#', 'Name', 'Email', 'Role', 'Joined'],
                'content': [
                    { 'name': 'Admin', 	'email': 'admin@example.com', 	'role': 'admin', 	'joined': '3 weeks ago' },
                    { 'name': 'John', 	'email': 'john@example.com', 	'role': 'writter', 	'joined': '2 weeks ago' },
                    { 'name': 'Martha', 'email': 'martha@example.com', 	'role': 'manager', 	'joined': '10 days ago' },
                    { 'name': 'Moore', 	'email': 'moore@example.com', 	'role': 'user', 	'joined': '5 days ago' },
                    { 'name': 'Anna', 	'email': 'anna@example.com', 	'role': 'user', 	'joined': '16 hours ago' },
                    { 'name': 'Thea', 	'email': 'thea@example.com', 	'role': 'user', 	'joined': 'Just now' },
                ]
            };
        }
    </script>
@endpush