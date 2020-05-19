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

I recommend this package on a fresh Laravel instalation to avoid overriding some files. To install the preset, run

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

### License

The lartisan-preset package is an open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
