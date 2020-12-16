# The purpose of this repository is to fulfill the test from kingdom digital
Available online on [My website] (https://djw.world/demo/hero) for a limited time.

* This project is meant to showcase the frontend skillset. 
## Frontend
* There's 3 responsive design which is mobile, tablet, and desktop.
* I have used the least amount of plugins to use hence on why there's no JS usage. Only pure CSS. 
* My initial choice of the css is [flexboxgrid] (http://flexboxgrid.com/) as it is fast and lightweight and also fulfill all the necessary needs to create a basic website.
* As I dived into october cms, there's a default bootstrap in it (version 3 which is old) and I decided to use that instead as it will be a redundant if use alongsie flexboxgrid (Flexboxgrid is meant to be used for grid display flex implementation and some of the css will clash with bootstrap grid implementation)
* For icons I used SVG as it is faster to load SVG than bitmap files (PNG / JPG). All of the icons are taken from [flaticons] (https://www.flaticon.com/).

## Backend
* The project also used to showcase my skillset as a backend developer hence on why I used a CMS to integrate the page and component. To further develop the project, I have also include an ajax mock call to imitate the API calling logic.
* I have also tweaked the cms setting to allow the usage and upload SVG files by updating the /config/cms.php adding the fileDefinitions in it.
* The new page is hero page
* It is consist of a partial which is hero-banner
* I have been thinking of using partials as component so it is possible to just include it to multiple page, hence why the javascript for the component is inside partial file. This is just an initial idea as I only have a rough idea on how October CMS works.

--
## How to setup
1. Please update the database setting inside /config/database.php to any empty database on your local.
2. Follow the guideline as per stated by october's [official website] (https://octobercms.com/docs/setup/installation)
## Minimum System Requirements

October CMS has a few system requirements:

* PHP version 7.2 or higher
* PDO PHP Extension (and relevant driver for the database you want to connect to)
* cURL PHP Extension
* OpenSSL PHP Extension
* Mbstring PHP Extension
* ZipArchive PHP Extension
* GD PHP Extension
* SimpleXML PHP Extension
