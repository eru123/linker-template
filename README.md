# linker-template

Linker Project

# build

```bash
// disable phar.readonly and phar.require_hash mode via cli
php -d phar.readonly=0 -d phar.require_hash=0 compile
// If phar.readonly and phar.require_hash is already disabled in php.ini
php compile

// The project build directory is `dist`
```
