# MosDef Helper Functions

A collection of helper functions and classes for Laravel

## Installation

Require the package in the composer.json file

```json
"require": {
    "madebymode/mosdef-helpers": "dev-master"
},
```

Add the repository to the composer.json file

```json
"repositories": [
    {
        "type": "vcs",
        "url":  "git@github.com:madebymode/mosdef-helpers.git"
    }
]
```

Install the `TemplateServiceProvider` in `config/app.php`. It should be added in the 'Application Service Providers' section.

```php
[
    /*
     * Application Service Providers...
     */
    Mosdef\Helpers\Providers\TemplateServiceProvider::class
]
```
