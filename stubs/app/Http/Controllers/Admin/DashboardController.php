<?php

namespace App\Http\Controllers\Admin;

use App\Charts\LatestUsers;
use App\Charts\MontlyViews;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	/**
	 * Handle the incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke()
	{
		$latestUsersChart = new LatestUsers();
		$latestUsersChart->labels(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']);
		$latestUsersChart->dataset('Last Week', 'line', collect([19, 23, 17, 48, 22, 39, 16]))->backgroundColor('#FED7D7');
		$latestUsersChart->dataset('This Week', 'line', collect([23, 32, 41, 15, 65, 45, 48]))->backgroundColor('#FEB2B2');

		$monthlyViewsChart = new MontlyViews();
		$monthlyViewsChart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
		$monthlyViewsChart->dataset('2019 Montly Views', 'bar', collect([756, 659, 856, 956, 784, 691, 783, 676, 897, 989, 1024, 1133]))->backgroundColor('#C3DAFE');
		$monthlyViewsChart->dataset('2020 Montly Views', 'bar', collect([845, 959, 756, 650, 876, 987, 1003, 874, 923, 1230, 1412, 1823]))->backgroundColor('#A3BFFA');

		return view("admin.home", compact('latestUsersChart', 'monthlyViewsChart'));
	}
}
