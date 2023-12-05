### curso-app
Laravel application with database management, routing, and model features.


```markdown
# Laravel Guide

## Project Setup

1. **Create a new Laravel project:**
   ```bash
   composer create-project laravel/laravel +name
   ```

2. **Run the development server:**
   ```bash
   php artisan serve
   ```

## Configuration

- Configure your IDE using `.editorconfig`.
- Set environment variables in `.env` for MySQL, emails, etc.
- `.env.example` serves as an example configuration file.

## Project Structure

- The following folders/files (`styleci`, `artisan`, `composer`, `package`, `phpunit`) are configuration or dependency installers for Laravel 9.

### Basic Structure

- **app**
  - `Http`
    - `Controllers` (commonly used)
  - `Models`
    - `User`
- **bootstrap**
  - `cache` (contains all cache files needed by Laravel)
- **config**
  - `app.php` (timezone, language, etc.)
  - `auth.php` (authentication configuration)
  - `broadcasting` (real-time configuration)
  - `cache` (project cache variables)
  - `cors` (configure API calls)
  - ... (other configuration files)
- **database**
  - `factories` (generate database information)
  - `migrations` (structure the database, commonly used)
  - `seeders` (fill the database with fake information)
- **lang** (work with translations)
- **public** (contains `index.php`, the entry point)
- **resources**
  - `css` (commonly used)
  - `js` (JavaScript files, commonly used)
  - `views` (front-end views, commonly used)
- **routes** (contains route definitions, commonly used)
- **storage** (store logs, cache, files, etc.)
- **tests**
- **vendor** (contains components, packages, third-party packages)

## Front Controller

- Laravel uses a front controller approach with routes.
- Example: `routes/web.php` -> `app/Http/Controllers/ExampleController.php` -> `resources/views/viewExample.blade.php`

### Creating Controllers and Views

- **To create a controller file:**
  ```bash
  php artisan make:controller ExampleController
  ```
- **To use a controller in `routes/web.php`, add:**
  ```php
  use App\Http\Controllers\ExampleController;
  ```

## Data Flow

1. URL
2. Call route
3. Controllers (functions, etc.)
4. Controllers can manipulate models
5. Models can communicate with the database
6. Models can send data to a view

## Example of Passing Variables

**ExampleController.php:**
```php
public function example($name_controller){
   return view('exampleView', ['name_html' => $name_controller]);
}
```

**exampleView.blade.php:**
```html
<html>
  <head>
   <title> Hello {{$name_html}} </title>
  </head>
 </html>
```

## Database Connection

- **Set up database connection in `.env`:**
  ```env
  DB_CONNECTION=database_type
  DB_HOST=ip_server
  DB_PORT=port_number
  DB_DATABASE=example_dbName
  DB_USERNAME=user_name
  DB_PASSWORD=pass_user
  ```

## Database Manipulation and Structure

### Creating Tables

- **Create a migration for a table:**
  ```bash
  php artisan make:migration create_exampleName_table
  ```
- **Execute the migration:**
  ```bash
  php artisan migrate
  ```

### Updating Tables

- **Update a table (add a column, for example):**
  ```bash
  php artisan migrate add_active_column_to_tableName_table --table=tableName
  ```

### Filling Fields

- **Create a model:**
  ```bash
  php artisan make:model Example
  ```

- **Use Tinker to interact with the model:**
  ```bash
  php artisan tinker
  ```

- **Example commands in Tinker:**
  ```php
  $example = new Example;
  $example->columnName = "exampleName";
  $example->columnDescription = "description of the example";
  $example->columnActive = true;
  $example->save();

  // Update data
  $example->columnName = "new_ExampleName";
  $example->save();

  // Find and delete
  $example = Example::find(4);
  $example->delete();
  ```
```
