#Php-MediaInfo 
## Introduction
PHP library to run `mediainfo` command

## Installation

To use this class install it through [Composer](https://getcomposer.org/), add:
```bash
$ composer require mhor/php-mediainfo-bundle
```

## How to use
```php
<?php
//...
$mediaInfo = $this->getContainer()get->('mhor.mediainfo');
$information = $mediaInfo->getInfo('file.mkv');
//...
```
###More information

More information on [php-mediainfo](https://github.com/mhor/php-mediainfo) [documentation](https://github.com/mhor/php-mediainfo/blob/master/README.md)

##LICENSE
See `LICENSE` for more information
