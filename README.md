# Geonames REST api client Yii2 extension

**Attention**: Please do not use in production environments. It‘s WIP.

This is a [geonames API](http://www.geonames.org/export/web-services.html) client extensions for the Yii2 Framework.
It is a wrapper for the geonames-api php library.

## Requirements

 - php >= 5.4
 - spacedealer/geonames-api 0.1
 
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist spacedealer/yii2-geonames "*"
```

or add

```
"spacedealer/yii2-geonames": "*"
```

to the require section of your `composer.json` file.

## Usage

Once the extension is installed, simply modify your application components configuration as follows:

```php
	'geonames' => [
		'class' => 'spacedealer\geonames\Geonames',
		'username' => 'your_username',
		'language' => 'de',
	],
],
```

## Todos

 - add unit tests

## Resources

 - [Source](https://github.com/spacedealer/yii2-geonames)
 - [Issues](https://github.com/spacedealer/yii2-geonames/issues)
