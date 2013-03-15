TinyPNG PHP API
===============

PHP class for basic interaction with the TinyPNG API. [TinyPNG](http://tinypng.org) is a great site to optimise and reduce the size of your PNG images that you use.

## API Key
To be able to use this you will require an API key from the TinyPNG team, you can do this by getting in touch with them through their Twitter or email.

## Usage
As TinyPNG is funded by donations alone it is worth considering the usage that you force upon their API before excessively using it.

## Getting Started

There are 2 methods that you need to use, once you have created a new instance, begin by invoking a new instance of the class with your API key as the only parameter:

    $api = new TinyPNG('API_Key_Here');

Next we need to send the request to shrink an image using the `shrink` method, which takes a string path to the file:

    $api->shrink('I-like-bacon.png');

This method simply returns `true` or `false` depending on whether the request succeeded. You can then get the response of the shrink request through a subsequent call to `getResult()`.

Get the result as object using the following method

    $result = $api->getResult();

To get the result object as JSON call

    $resultJson = $api->getResultJson();

##Contributors

- [Michael Wright](http://twitter.com/michaelw90)
- [Zack Kitzmiller](http://github.com/zackkitzmiller)

##In the wild
This API is used in a few other projects around the internet:

- [TinyPNGCache](http://github.com/michaelw90/TinyPNGCache) - cache and serve your PNG images on the fly in a reduced and optimised form 