![InvoicePlane](http://invoiceplane.com/content/logo/PNG/logo_300x150.png)
#### _Version 2.0.0 Alpha 1_

[![Travis-CI Build Status](https://travis-ci.com/InvoicePlane/InvoicePlane.svg?branch=v2.0.0)](https://travis-ci.com/InvoicePlane/InvoicePlane) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/846787effdab46fa88dc8880dd3fce94)](https://www.codacy.com/app/InvoicePlane/InvoicePlane) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/InvoicePlane/InvoicePlane/badges/quality-score.png?b=v2.0.0)](https://scrutinizer-ci.com/g/InvoicePlane/InvoicePlane/?branch=v2.0.0) [![Crowdin](https://d322cqt584bo4o.cloudfront.net/invoiceplane/localized.svg)](https://translations.invoiceplane.com/project/invoiceplane)

InvoicePlane is a self-hosted open source application for managing your invoices, clients and payments.    
For more information visit __[InvoicePlane.com](https://invoiceplane.com)__ or try the __[demo](https://demo.invoiceplane.com)__.

---

:warning: **Notice about this version**

This version is the official successor of FusionInvoice and based on the latest version 2018-8. However, it
is marked as an alpha version because we plan to restructure and update the application and add new features.  
You can use this application but expect breaking changes until we announce InvoicePlane 2 as a stable version.

More information can be found in [this announcement](https://community.invoiceplane.com/t/topic/6299).

---

### Quick Installation

1. Download the latest version from the InvoicePlane website.
2. Extract the package and copy all files to your webserver / webspace.
3. Open the file config/database.php and set your database credentials in that file.
4. Make sure that the storage folder and all containing folders are writable.
5. Open http://your-invoiceplane-domain.com/index.php/setup and follow the instructions.

### Setup for Developers

If you would like to use Docker for development follow these steps:

1. Create a new .env file: `cp .env.docker .env`
2. Open the .env file and adjust the settings to match your configuration. Normally you should just need to change
    the URL.
3. Make sure that Docker with Docker Compose is installed and run `docker-compose up -d`
4. Install all PHP dependencies: `docker exec -i invoiceplane-php bash -c "composer install -n"`
5. Install all NPM dependencies (which requires Node version > 8 installed): `npm install`
6. Compile all assets: `./node_modules/.bin/grunt build`
6. Open `http://your-invoiceplane-domain.com/setup` and follow the setup to properly install the app.

Further information about development can be found in the [Dev Wiki](https://devwiki.invoiceplane.com/).

---

### Support / Development / Chat

Need some help or want to talk with other about InvoicePlane? Follow these links to get in touch.

#### For Users

[![Wiki](https://img.shields.io/badge/Help%3A-Official%20Wiki-429ae1.svg)](https://wiki.invoiceplane.com/)  
[![Community Forums](https://img.shields.io/badge/Help%3A-Community%20Forums-429ae1.svg)](https://community.invoiceplane.com/)  
[![Slack Chat](https://img.shields.io/badge/Development%3A-Slack%20Chat-429ae1.svg)](https://invoiceplane-slack.herokuapp.com/)  
[![Roadmap](https://img.shields.io/badge/Development%3A-Roadmap-429ae1.svg)](https://go.invoiceplane.com/roadmapv1)  

#### For Developers

[![Development Wiki](https://img.shields.io/badge/Development%3A-Wiki-429ae1.svg)](https://devwiki.invoiceplane.com/)  
[![Issue Tracker](https://img.shields.io/badge/Development%3A-Issue%20Tracker-429ae1.svg)](https://development.invoiceplane.com/)  

---

### Security Vulnerabilities

If you discover a security vulnerability please send an e-mail to mail@invoiceplane.com before disclosing the vulnerability to the public.
All security vulnerabilities will be promptly addressed.

---

> _The name 'InvoicePlane' and the InvoicePlane logo are both copyright by Kovah.de and InvoicePlane.com
and their usage is restricted! For more information visit invoiceplane.com/license-copyright_
