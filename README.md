[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/commandline-bell.svg?style=flat-square)](https://packagist.org/packages/repat/commandline-bell)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/commandline-bell.svg?style=flat-square)](https://packagist.org/packages/repat/commandline-bell)

# CommandlineBell
**php-commandline-bell** makes the ASCII Bell sound or flashes the terminal.

```php
use repat\CommandlineBell;

// flashes screen if possible, otherwise just bell()
CommandlineBell::flash();

// makes a beep sound
CommandlineBell::bell();
```

## Under the hood
```php
// ASCI BEL, see https://en.wikipedia.org/wiki/Bell_character
echo "0x07";
```

## Alternatives
* Terminal Notifications via node.js: https://github.com/vikfroberg/brb
* `say whatever`
