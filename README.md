# CommandlineBell

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