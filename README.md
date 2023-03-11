# monolib
A really bad php "framework" (i am doubting if this even counts as framework)

Documentation [here](https://github.com/TheUnium/monoframe/tree/main/docs).

I have not idea how to properly publish this, because this was not meant to be public, i am just bored so ¯\\_(ツ)_/¯.

I will probably make this a proper framework with higher quality of code, slowly and eventually... Till then, I don't recommend using this for serious projects.

## "installation"
- download this repo
- install composer
- run `$ composer init`
- run `$ composer require monolog/monolog:1.25.1`
- include the `/vender/autoload.php` file
- add this to autoload in composer.json
```json
"MonoLib\\": "[folder_name]/src",
```
replace the [folder_name] with the name of the folder you downloaded this repo in
- you can now use this "framework" by adding this to the file you included autoload in :
```php
use MonoLib\Lib\App\App;
App::run();
```

## credits
config, logger : https://codeburst.io/write-modern-php-without-framework-d244d8ca2b50
