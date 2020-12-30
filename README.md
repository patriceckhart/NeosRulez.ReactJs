# ReactJS for Neos CMS

A package for Neos CMS which embeds ReactJS and Babel. https://reactjs.org/

## Installation

The NeosRulez.ReactJS package is listed on packagist (https://packagist.org/packages/neosrulez/reactjs) - therefore you don't have to include the package in your "repositories" entry any more.

Just run:

```
composer require neosrulez/reactjs
```

## Usage

```
AcmeSiteReactJs = NeosRulez.ReactJs:Component.Script.Tag {
    src = Neos.Fusion:ResourceUri {
        path = 'resource://Acme.Site/Public/JavaScript/scripts.js'
    }
    inline = true
}
```

## Author

* E-Mail: mail@patriceckhart.com
* URL: http://www.patriceckhart.com 