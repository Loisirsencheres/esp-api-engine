# Crazy Awesome ESP E-Ngine API Client

Connect to the E-Ngine ESP with the API Client.

## Information ##
 - [E-Ngine ESP](http://www.e-ngine.nl/)

## Installation ##
Preferred way of installing is though [Composer](http://getcomposer.org). Add the following line to you `require`

    "cac/esp-api-engine": ">=v0.1"

## API Configuration ##
The Adapter uses the E-Ngine SOAP Webservice for communication. When creating the `EngineApi` class some configuration is needed

 + `domain` - The domain where E-Ngine is availabe. (e.g. `newsletter.yourdomain.com`)
 + `path` - Path to the SOAP entry point on the `domain`. (e.g. `/soap/server.live.php`)
 + `customer` - Your E-Ngine customer name
 + `user` - Your E-Ngine user name
 + `password` - Your E-Ngine password

## Todo ##
The API Client doesn't have all calls implemented at the moment. To use the latest version download the development version.
