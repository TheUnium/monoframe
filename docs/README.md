# App [required]
You can run the "framework" by adding the following piece of code to you `index.php` file :
```php
require_once __DIR__ . '/vendor/autoload.php';

use MonoLib\Lib\App\App;
App::run();
```
This starts a session, and enables the logger.

# Logger [required]
First, run `composer require monolog/monolog:1.25.1` and 
create a folder named `logs` at the root, also create a file at the root named `config.php` and add the following stuff into the file :
```php
return [
    'LOG_PATH' => __DIR__ . '/logs',
];
```
When you run the app three files will be created named `app.log`, `errors.log` and `request.log`.
- `app.log` : Whenever you (the end-user) logs something, it will appear in this file.
- `errors.log` : Whenever an error occurs, it will appear here.
- `request.log` : Every request will be logged here.

# Routing
First, add `.htaccess` at the root (assuming you are running apache) and add the following code which redirects every request to the `index.php` at the root of your folder
```
RewriteEngine On
RewriteBase /gge
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]
```
And add `use MonoLib\Lib\Router\Router;` after the require autoload line. 

## GET (static)

Routes to pages like the home page usually don't need to be dynamic A.K.A. don't usually require a URL parameter. For that you can use static GET requests :
```php
Router::get('[url]', '[path to file shown to user]');
```
Example :
```php
Router::get('/', 'views/index.php');
```

## GET (Dynamic)

Instead of using URL parameters like `/?param=ok` it uses `/[param` which is SEO friendly.
```php
Router::get('/[url]/$var', '[path to file shown to user]');
```
Example :
```php
Router::get('/$name', 'views/index.php');
```
Now in the file that is shown to the user can reference the param by `$var`. "var" should be replaced with whatever you named your variable.

## POST

Usually sent through a form, used to create a resource
```php
Router::post('/[url]', '[path to file shown to user]');
```
Example :
```php
Router::get('/create', 'src/create_smth.php');
```

## DELETE

Deletes a resource, pretty self-explanatory
```php
Router::delete('/[url]/$var' , '[path to file shown to user]');
```
Example :
```php
Router::get('/delete/$id', 'src/delete_smth.php');
```

## PATCH/PUT

I am too lazy to explain this so here [read from here](https://www.geeksforgeeks.org/difference-between-put-and-patch-request/)
```php
Router::put('/[url]/$var' , '[path to file shown to user]');
```
Example :
```php
Router::get('/update/$id', 'src/update_smth.php');
```

# Security
## Prevention against XSS
Learn about [what is XSS here](https://owasp.org/www-community/attacks/xss/)

Add `use MonoLib\Lib\Text;` after the autoload line.
Then you can echo text with `Text::say("[text]");` (Replace [text] with whatever, but you will probably end up using it like `Text::say("$var");`

## CSRF something something
Learn about [what is CSRF here](https://owasp.org/www-community/attacks/csrf/)

Add `use MonoLib\Lib\Secure\CSRF;` after the autoload line.
Then you can set a CSRF token with `CSRF::set();` and validate the token with `CSRF::check();`.
