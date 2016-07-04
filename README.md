# Pitcher TYPO3 Extension

Pitcher App (http://www.pitcher-app.com) is a webservice which allows you to easily send exceptions from your project. In contrast to classical monitoring webservices, Pitcher is able to pitch individual exceptions from projects, where Pitcher is acting like a satellite whith communicates which ground control. Register now at pitcher-app.com and create your project. After receiving the secret, the next step is installing the PHP component (or Bundle in case of using Symfony) and linking the satellite by defining the secret.

This extension integrates the Pitcher component into TYPO3 CMS. It allows you to define parameters in your ext config and serves with a simple service for sending notifications to Pitcher.

## Installation

Just search for "pitcher" in the TER and install the extension.  

## Usage

In case you are using Extbase you can simply get and use the service this way:

```
$this->objectManager->get('BrauneDigital\Pitcher\Client\Client')->pitch('info', 'Notification to pitcher...');
```

Without using extbase you can do it also this way:

```
$client = new \BrauneDigital\Pitcher\Client\Client();
$client->pitch('info', 'Notification to pitcher...');
```
