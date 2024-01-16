# Laravel Tasks/To Do List (Laravel 10)

Obligatory simple task list app to demonstrate basic Laravel concepts.  

In no way complete or especially exciting, this could provide a jumping off point for further exploration and implementation of concepts.

*current app functions*
* Show list of all tasks
* Mark a task as complete so that it is no longer visible in the list
* Edit the details of an existing task
* Add a new task

## Quickstart

* Clone repo to chosen local directory
* Run `composer install` from local diretcory
* Make sure db of choice (Tested with MySQL) is up and running
* Update .env has required DB_CONNECTION/DB_USERNAME/DB_PASSWORD details
* Run `php artisan migrate --seed`
* serve locally to test (`php artisan serve` from project directory)

## Concepts
* Migration to create table(s)
* Seeder to inject some starter tasks
* Eloquent model (Task) to implement active record pattern for tasks
* Resource routing of tasks to keep routes concise and resourceful controller methods for basic CRUD operations
* Use blade components to break view templates into resusable components
* Basic validation/filtering of form input
* Flash messages to feedback to user previous action
* Basic styling using Tailwind classes (CDN)