# Pitcher TYPO3 Extension

Pitcher App (http://www.pitcher-app.com) is a webservice which allows you to easily send exceptions from your project. In contrast to classical monitoring webservices, Pitcher is able to pitch individual exceptions from projects, where Pitcher is acting like a satellite whith communicates which ground control. Register now at pitcher-app.com and create your project. After receiving the secret, the next step is installing the PHP component (or Bundle in case of using Symfony) and linking the satellite by defining the secret.

This extension integrates the Pitcher component into TYPO3 CMS. It allows you to define parameters in your ext config and serves with a simple service for sending notifications to Pitcher.