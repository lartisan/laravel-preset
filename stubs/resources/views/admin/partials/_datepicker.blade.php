<div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="launched_at">{{ __('Launched At') }}</label>
	<div class="relative z-50">
		<input type="hidden" name="date" x-ref="date">
		<input 
			type="text"
			readonly
			x-model="datepickerValue"
			@click="showDatepicker = !showDatepicker"
			@keydown.escape="showDatepicker = false"
			class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
			placeholder="Select date">
			
			<div class="pointer-events-none absolute right-0 top-0 flex items-center px-6 mt-4 text-gray-700">
				<svg class="w-6 h-6 fill-current" viewBox="0 0 20 20"><path d="M17 3h-1v2h-3V3H7v2H4V3H3c-1.101 0-2 .9-2 2v12c0 1.1.899 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V9h14v8zM6.5 1h-2v3.5h2V1zm9 0h-2v3.5h2V1z"/></svg>
			</div>

			<div 
				class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" 
				style="width: 17rem" 
				x-show.transition="showDatepicker"
				@click.away="showDatepicker = false">

				<div class="flex justify-between items-center mb-2">
					<div>
						<span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
						<span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
					</div>
					<div>
						<button 
							type="button"
							class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
							:class="{'cursor-not-allowed opacity-25': month == 0 }"
							:disabled="month == 0 ? true : false"
							@click="month--; getNoOfDays()">
							<svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
							</svg>  
						</button>
						<button 
							type="button"
							class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
							:class="{'cursor-not-allowed opacity-25': month == 11 }"
							:disabled="month == 11 ? true : false"
							@click="month++; getNoOfDays()">
							<svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
							</svg>									  
						</button>
					</div>
				</div>

				<div class="flex flex-wrap mb-3 -mx-1">
					<template x-for="(day, index) in DAYS" :key="index">	
						<div style="width: 14.26%" class="px-1">
							<div
								x-text="day" 
								class="text-gray-800 font-medium text-center text-xs"></div>
						</div>
					</template>
				</div>

				<div class="flex flex-wrap -mx-1">
					<template x-for="blankday in blankdays">
						<div 
							style="width: 14.28%"
							class="text-center border p-1 border-transparent text-sm"	
						></div>
					</template>	
					<template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
						<div style="width: 14.28%" class="px-1 mb-1">
							<div
								@click="getDateValue(date)"
								x-text="date"
								class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
								:class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
							></div>
						</div>
					</template>
				</div>
			</div>
			
	</div>	 		
</div>

@push('scripts')
	<script>
		const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

		function app() {
			return {
				showDatepicker: false,
				datepickerValue: '',

				month: '',
				year: '',
				no_of_days: [],
				blankdays: [],
				days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

				initDate() {
					let today = new Date();
					this.month = today.getMonth();
					this.year = today.getFullYear();
					this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
				},

				isToday(date) {
					const today = new Date();
					const d = new Date(this.year, this.month, date);

					return today.toDateString() === d.toDateString() ? true : false;
				},

				getDateValue(date) {
					let selectedDate = new Date(this.year, this.month, date);
					this.datepickerValue = selectedDate.toDateString();
					
					this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth()).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);

					console.log(this.$refs.date.value);

					this.showDatepicker = false;
				},

				getNoOfDays() {
					let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

					// find where to start calendar day of week
					let dayOfWeek = new Date(this.year, this.month).getDay();
					let blankdaysArray = [];
					for ( var i=1; i <= dayOfWeek; i++) {
						blankdaysArray.push(i);
					}

					let daysArray = [];
					for ( var i=1; i <= daysInMonth; i++) {
						daysArray.push(i);
					}
					
					this.blankdays = blankdaysArray;
					this.no_of_days = daysArray;
				}
			}
		}
	</script>
@endpush