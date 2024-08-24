<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2Fc6c4d882-a363-4987-8e7f-37881b1abd47%3Fdate%3D1&style=plastic)](https://forge.laravel.com/servers/749051/sites/2212232)

# Yard Games API
Laravel based API for the Yard Game tournaments.


## Getting Started
To run the app, ensure that Laravel is fully installed on your machine.

You then have two options for running the application. To run locally on your machine ensure you have access to a Postgres database. Update database connection settings as needed in the root [env file](/.env). Refer to [to the example env](/.env.example) for help.

1. Seed your database with `php artisan migrate:fresh --seed`.
   * Take note of the token that gets outputed to the console if wanting to test with a REST client like Postman.
2. Run the api with `php artisan serve`

To run in docker, you can use [Laravel Sail](https://laravel.com/docs/11.x/sail).

1. `./vendor/bin/sail up`.
2. Add an alias for the sail command. See [here](https://laravel.com/docs/11.x/sail#configuring-a-shell-alias).
   * When using sail, all `php artisan` commands become `sail artisan`. IE instead of `php artisan migrate:fresh --seed` use `sail artisan migrate:fresh --seed`.


## Githun Actions
Formatting and testing run on all pull requests. Failed pipelines will not be merged. Please ensure passing tests and proper formatting prior to creating a pull request.

## Formatting
This project uses [Laravel Pint](https://laravel.com/docs/10.x/pint) for formatting.
**TLDR;**
- Run `./vendor/bin/pint --test` to check for issues.
- Run `./vendor/bin/pint` to fix issues.

## Testing
Run unit tests with `php artisan test`.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
