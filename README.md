# Geonames api client extension for Yii2

**Attention**: Please do not use in production environments. It‘s WIP.

This is a [geonames API](http://www.geonames.org/export/web-services.html) client extensions for the Yii2 Framework.
It wraps around the [geonames-api php library](https://github.com/spacedealer/geonames-api).

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/88aa66d1-82bb-4b4d-8b9a-0658211d06ed/mini.png)](https://insight.sensiolabs.com/projects/88aa66d1-82bb-4b4d-8b9a-0658211d06ed)
[![Dependency Status](https://www.versioneye.com/user/projects/547eea7c8674a4d2330001aa/badge.svg?style=flat)](https://www.versioneye.com/user/projects/547eea7c8674a4d2330001aa)

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
