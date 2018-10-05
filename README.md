## Introduction
The bunch of functions extending the PHP standard library.

## Requirements
* PHP >= 7.2.0

## Install
There's a simple way to install ```able/fixes``` into your project via [Composer](http://getcomposer.org):

```bash
composer require able/fixes
```

## The list of function

#### PCRE functions
* preg_count

Takes two arguments and returns the count of matches found by a pattern. 
The behavior is identical to the standard ```preg_replace``` function.

Declaration:

```
function preg_count(string $pattern, string $subject): int
```  

Example:

```php
$count = preg_count('/%[^%]/', '|%s|%s|%%|');
echo  $count;
// 2
```


## License
This package is released under the [MIT license](https://github.com/phpable/fixes/blob/master/LICENSE).
 
