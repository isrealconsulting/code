# code.isrealconsulting.com 

# README

This README covers the app structure and parts that make up the
Isreal Consulting code website and accompanying apps.  The code
site and apps are hosted on Google App Engine and use the PHP 
coding platform.  The site is SSL secured for enhanced security.


## CONTENTS

### App File Structure
#### Main App
#### ICLLC Applets
### Coding Conventions
#### ICLLC Rules

-----------------------------------

## App File Structure

The code.isrealconsulting.com application is developed in PHP 
and is hosted on Google App Engine.  Development occurs in a
workspace on Codenvy.  Updates to the Main app (the actual website
that loads for the domain) is controlled by GIT.  Applets (the
code and pages that can be called by external sites and apps)
are in their own folders.

  -app\             applets storage
    --icllc\        ICLLC Applets
      --twiml\      code for Twilio apps / IVR
      --pos\        code for payments / PayPal
      --soc\        code for social media / FB
      --crm\        code for SuiteCRM or support
      index.php     Manage applets - login
      logout.php    logout of Manage applets
    --thirdparty\   3rd-party applets & services
  -includes\        project-wide includes & libs
  
    
  -app.yaml             app engine app config file
  -main.php             Main app entry page (code)
  -favicon.ico          Main app icon / site favicon
  -stylesheet-main.css  Main app theme/stylesheet
  

#### Main App (code.isrealconsulting.com)

The Main app is displayed when you visit the App 
Engine URL in a browser, realcode-icllc.appspot.com - or visit 
https://code.isreal.pw for secure access.  The correct full URL
for RealCode is :

https://code.isrealconsulting.com

-Main app initial code: main.php
 The initial page sets up the entire site application and all 
 variables, data sets, and rules. It also loads the initial HTML
 that the user sees when visiting the site, usually a login box 
 if no one is logged in. Otherwise, the site dashboard will be 
 displayed. All code for the Main app resides in the file main.php.

-Main app config file: app.yaml
 Required file for all PHP App Engine applications. Sets of the 
 application name, platform or language, and other application-
 wide settings.
 
-Application icon: favicon.ico
 Application and web browser icon graphic, referenced from the
 app.yaml file (above).


#### ICLLS Applets

Placeholder

## Coding Conventions
In developing this application, we adhere to general coding 
rules when writing in the PHP language. All code files should
be aptly named, and code well-documented using comments. 
HTML language will comply with current HTML5 standards set by 
the w3c and will be named aptly with a file extension of .html.


#### Isreal Consulting Coding Rules

Placeholder