<?php

namespace Lartisan\Presets;

use Illuminate\Support\Facades\File;
use Laravel\Ui\Presets\Preset;

class LartisanPreset extends Preset
{
	public static function install()
	{
		static::copyCharts();
		static::updateControllers();
		static::updateProviders();
		static::copyPublicAssets();
		static::copyStorageAssets();
		static::updateResources();
		static::updateRoutes();
		static::updatePackages();
		static::copyTailwindConfig();
		static::updateWebpackConfiguration();
	}

	public static function copyCharts()
	{
		File::copyDirectory(__DIR__ . '/../../stubs/app/Charts', app_path('Charts'));
	}

	public static function updateControllers()
	{
		File::copyDirectory(__DIR__ . '/../../stubs/app/Http/Controllers/Admin', app_path('Http/Controllers/Admin'));
		copy(__DIR__ . '/../../stubs/app/Http/Controllers/Auth/LoginController.php', app_path('Http/Controllers/Auth/LoginController.php'));
		copy(__DIR__ . '/../../stubs/app/Http/Controllers/Auth/RegisterController.php', app_path('Http/Controllers/Auth/RegisterController.php'));
	}

	public static function updateProviders()
	{
		copy(__DIR__ . '/../../stubs/app/Providers/RouteServiceProvider.php', app_path('Providers/RouteServiceProvider.php'));
	}

	public static function copyPublicAssets()
	{
		File::copyDirectory(__DIR__ . '/../../stubs/public/img', public_path('img'));
	}

	public static function copyStorageAssets()
	{
		File::copyDirectory(__DIR__ . '/../../stubs/storage/app/public/entypo+', storage_path('app/public/entypo+'));
		File::copyDirectory(__DIR__ . '/../../stubs/storage/app/public/heroicons', storage_path('app/public/heroicons'));
		File::copyDirectory(__DIR__ . '/../../stubs/storage/app/public/zondicons', storage_path('app/public/zondicons'));
	}

	public static function updateResources()
	{
		File::cleanDirectory(resource_path('js'));
		File::cleanDirectory(resource_path('views'));

		File::copyDirectory(__DIR__ . '/../../stubs/resources/css', resource_path('css'));
		File::copyDirectory(__DIR__ . '/../../stubs/resources/js', resource_path('js'));
		File::copyDirectory(__DIR__ . '/../../stubs/resources/views/admin', resource_path('views/admin'));
		copy(__DIR__ . '/../../stubs/resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
	}

	public static function updateRoutes()
	{
		copy(__DIR__ . '/../../stubs/routes/admin.php', base_path('routes/admin.php'));
	}

	public static function copyTailwindConfig()
	{
		copy(__DIR__ . '/../../stubs/tailwind.config.js', base_path('tailwind.config.js'));
	}

	public static function updatePackageArray($packages)
	{
		return array_merge([
			"alpinejs" => "^2.3.3",
			"chart.js" => "^2.9.3",
			"dropzone" => "^5.7.0",
			"tailwindcss" => "^1.3.5",
			"tailwindcss-plugins" => "^0.3.0",
			"tailwindcss-spinner" => "^1.0.0"
		], $packages);
	}

	protected static function updateWebpackConfiguration()
	{
		copy(__DIR__ . '/../../stubs/webpack.mix.js', base_path('webpack.mix.js'));
	}
}
