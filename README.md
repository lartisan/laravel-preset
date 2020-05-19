<p align="center"><img src="stubs/public/img/lartisan_logo.png" width="300" height="45"></p>
<hr>
<p align="center">
<a href="https://packagist.org/packages/lartisan/laravel-preset"><img src="https://poser.pugx.org/lartisan/laravel-preset/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/lartisan/laravel-preset"><img src="https://poser.pugx.org/lartisan/laravel-preset/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/lartisan/laravel-preset"><img src="https://poser.pugx.org/lartisan/laravel-preset/license.svg" alt="License"></a>
</p>
<hr>

## A TALL Admin Dashboard Preset for Laravel 7+

A Laravel 7+ admin preset that scaffolds out a minimum functionality to get one started. On top of Laravel, this preset is built using Tailwind CSS, Alpine JS and Livewire and includes:

- [Laravel UI](https://github.com/laravel/ui) for generating the auth
- [Laravel Charts](https://charts.erik.cat/) with ChartJS presets
- [SweetAlert2](https://realrashid.github.io/sweet-alert/) package by Rashid Ali (realrashid)
- [DropzoneJS](https://www.dropzonejs.com/) for uploading files

### Demo

Here is a demo of the preset in action: https://starter.lartisan.dev

### Installation

I recommend this package on a fresh Laravel instalation to avoid overriding some files. Here is the [file structure](#file-structure) of the stubs.
To install the preset, run

```
composer require lartisan/laravel-preset
```

Then apply the scaffolding by running

```
php artisan ui lartisan
```

And finally run

```
npm install && npm run dev
```

Enjoy!

### File Structure

```
|── src
|   |── Presets
|	|	└── LartisanPreset.php
|	└── Providers
|		└── LartisanServiceProvider.php
|── stubs
|	|── app
|	|	|── Charts
|	|	|	|── LatestUsers.php
|	|	|	└── MonthlyViews.php
|	|	|── Http
|	|	|	|── Controllers
|	|	|	|	|── Admin
|	|	|	|	|	|── DashboardController.php
|	|	|	|	|	└── PageController.php
|	|	|	|	└── Auth
|	|	|	|		|── LoginController.php
|	|	|	|		└── RegisterController.php
|	|	|	└── Livewire
|	|	|		|── LoginForm.php
|	|	|		└── RegisterForm.php
|	|	└── Providers
|	|		└── RouteServiceProvider.php
|	|── public
|	|	└── img
|	|		|── apple-touch-icon.png
|	|		|── favicon.png
|	|		└── lartisan_logo.png
|	|── resources
|	|	|── css
|	|	|	└── main.css
|	|	|── js
|	|	|	|── app.js
|	|	|	└── bootstrap.js
|	|	|── lang
|	|	|	└── en
|	|	|── sass
|	|	|	└── app.scss
|	|	└── views
|	|		|── admin
|	|		|	└── layouts
|	|		|	|	|── partials
|	|		|	|	|	|── _datepicker.blade.php
|	|		|	|	|	|── footer.blade.php
|	|		|	|	|	|── header.blade.php
|	|		|	|	|	└── sidebar.blade.php
|	|		|	|	└── app.blade.php
|	|		|	|── entypo-icons.blade.php
|	|		|	|── forms-icons.blade.php
|	|		|	|── heroicons-icons.blade.php
|	|		|	|── home-icons.blade.php
|	|		|	|── profile-icons.blade.php
|	|		|	|── tables-icons.blade.php
|	|		|	└── zondicons-icons.blade.php
|	|		|── auth
|	|		|	|── login.blade.php
|	|		|	└── register.blade.php
|	|		|── livewire
|	|		|	|── login-form.blade.php
|	|		|	└── register-form.blade.php
|	|		└── welcome.blade.php
|	|── routes
|	|	└── admin.php
|	|── storage
|	|	|── entypo+
|	|	|── heroicons
|	|	└── zondicons
|	|── tailwind.config.js
|	└── webpack.mix.js
|── composer.json
|── LICENSE.md
└── README.md
```

### License

The lartisan-preset package is an open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
