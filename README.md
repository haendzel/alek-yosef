# insidelab
## Getting Started
To run the project, install all dependencies using `Composer`. To install it, please follow [these instructions](https://getcomposer.org/doc/00-intro.md).

```
# Install dependencies
$ composer install
```

## Configuration
All the configuration that in a default WordPress installation would be configured within `wp-config.php` file, is instead configured using `.env` files. This gives us opportunity to utilize environment variables to keep database credentials safe and the configuration itself clean and more robust.

## Adding plugins
To add plugins, you should use composer. You can find these packages using [WordPress Packagist](https://wpackagist.org/) website.

```
# Add plugins with Composer
$ composer require wpackagist-plugin/regenerate-thumbnails
```

## Adding localization
Localization packages are also installed using composer. You can find packages on [this site](https://wp-languages.github.io/).

```
# Add WordPress localization
$ composer require koodimonni-language/pl_PL
```

## Project Structure
The organization of this project is inspired by [Roots.io Bedrock](https://roots.io/bedrock/). It installs WordPress as a dependency, and simply keeps stuff that would normally go into `wp-content/` in `app/` instead.

```
├── .htaccess
├── composer.json
├── config
│   ├── application.php
│   └── environments
│       ├── development.php
│       ├── testing.php
├── vendor
├── app
│   ├── mu-plugins
│   ├── plugins
│   ├── themes
│   └── uploads
├── wp-config.php
├── index.php
└── wp
```

## Deployment to production
Normally, you would like to upload the project structure as is to the production server. Please keep configuration files not accessible through browser. You can do this by putting the following rules into `.htaccess`.

```
RewriteEngine on
RewriteRule ^composer\.(lock|json)$ - [F,L]
RewriteRule ^vendor/.*$ - [F,L]
RewriteRule ^.env$ - [F,L]
RewriteRule ^.env\..+$ - [F,L]
RewriteRule ^wp-cli.yml$ - [F,L]
```

You shouldn't deploy development-specific files such as:
```
.env.testing
.env.development
deploy.php
app/themes/PROJECT_NAME/node_modules
```# alekjozefczyk-wp
# alekjozefczyk-wp
