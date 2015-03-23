# Typograph bundle

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/it-blaster/typograph-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/it-blaster/typograph-bundle/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/it-blaster/typograph-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/it-blaster/typograph-bundle/build-status/master)

The typograph bundle for Symfony based on [E. Muravjev's Typograph](http://mdash.ru)

## Installation

Add it-blaster/typograph-bundle to your `composer.json` file and run `composer install`

```json
...
"require": {
    "it-blaster/typograph-bundle": "dev-master"
}
...
```

And register the bundle in your `AppKernel.php`

```php
...
new new Fenrizbes\TypographBundle\FenrizbesTypographBundle(),
...
```

## Usage

The bundle contains a TwigExtension which can be used in your templates:

```text
{{ content | typograph }}
```

## Configuration

The bundle allows you to pass options that E. Muravjev's Typograph supports. You can use a default config, redefine it:

```yml
fenrizbes_typograph:
    configs:
        default:
            Text.paragraphs:           on
            OptAlign.oa_oquote:        off
            OptAlign.oa_obracket_coma: off
```

or define your configs:

```yml
fenrizbes_typograph:
    configs:
        default:
            Text.paragraphs:           off
            OptAlign.oa_oquote:        off
            OptAlign.oa_obracket_coma: off
        articles:
            Text.paragraphs: on
        news:
            Text.paragraphs: off
```

and use them where you need:

```text
{{ article.content | typograph('articles') }}
```
