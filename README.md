# Jaeger Console Object

[![Build Status](https://travis-ci.org/jaeger-app/console.svg?branch=master)](https://travis-ci.org/jaeger-app/console)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jaeger-app/console/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jaeger-app/console/?branch=master)
[![Author](http://img.shields.io/badge/author-@mithra62-blue.svg?style=flat-square)](https://twitter.com/mithra62)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/jaeger-app/bootstrap/master/LICENSE)

Handles outputting/writing data to the console. when Jaeger plugins are ran through the Console / Command Line / Shell. 

## Installation
Add `jaeger-app/console` as a requirement to your `composer.json`:

```bash
$ composer require jaeger-app/console
```

## Basic Usage

`Jaeger\Console` uses the `Jaeger\Language` object to handle copy abstraction so you'll have to set that up before using. 

```php
use JaegerApp\Console;
use JaegerApp\Language;

$language = new Language; 
... setup language ...

$console = new Console();
$console->setLang($language);
```