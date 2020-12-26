# linker-template

Linker Project

# Install

### Via composer

```bash
composer create-project eru123/linker-template <ProjectName>
```

### Via git

```bash
git clone https://github.com/eru123/linker-template.git <ProjectName>
```

# build

```bash
# disable phar.readonly and phar.require_hash mode via cli
php -d phar.readonly=0 -d phar.require_hash=0 compile
# If phar.readonly and phar.require_hash is already disabled in php.ini
php compile

# The project build directory is `dist`
```

# Linker Framework

see [Linker Framework](https://github.com/eru123/linker) for more information.
