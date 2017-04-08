# Blank Bootstrap
For developers' foundation.

Dupe this for quick new projects :D

GitHub link is: https://github.com/nobodyrandom/blank-bootstrap.git<br>
Inspirations: https://www.facebook.com/groups/hackathonhackers/permalink/1421368544585293/


This blank-bootstrap repository contains several self-contained modules that can be mix and matched and altered to
suit your design needs; in other words, each module provides a basic functionality for you to build upon.

Experiment with the modules and feel free to add modules of your own.

If you have any questions, or would like to show us what you've created, don't hesitate to contact:
    alex@developersfoundation.ca
    paul@developersfoundation.ca
    

## Table of Contents:

- [How-To](#how-to)
- [Photo Carousel](#carousel-three)
- [Gallery](#gallery)
- [Google Maps](#google-maps)

## How-To:
#### Clone template and setup composer
To clone into a new repo:

1. Create new git repo on github
2. In a clean space (not inside another git repo) `git clone https://github.com/nobodyrandom/blank-bootstrap.git projectName`
3. `cd projectName`
4. `git remote rm origin`
5. `git remote add origin https://github.com/nobodyrandom/NAME_OF_REPO.git`
6. `git push -u origin master`

If you are really that lazy, I've included a shell script to run step 2 onwards to set up everything. 
It also sets up PHP and Homebrew on your Mac if you don't have it installed yet. 

Run it using `./init.sh` on terminal. No cmd support yet.

#### Work with this template

Using the various features implemented in this template is easy.

Create your HTML pages as PHP files, if you've never used PHP don't worry, we will only be using a few instructions.

Set up your page as you would normally, and when you want to use a module you can insert it into the
page with:

    <?php 
        include_once "html_elements/yourModule.php";
    ?>

This has the same effect as pasting the code in yourModule.php directly into that part of the page,
so ensure that all tags are closed to avoid hard to detect bugs. This also means that paths in module files
will not be corrected upon inclusion, so make sure all paths are relative to where they will end up.

The style for all modules can be found in public_html/assets/css/main.css, we have provided a generic
theme but feel free to make it your own.

JavaScript supporting the various elements can be found in public_html/assets/js.

If you would like to follow our design strategy of creating self contained modules and create something 
that you think is unique, we would love to add it to the template, so do hesitate to submit a pull request.

#### Deploy to Heroku
If you would like to use quick deploy into heroku after you cloned.

Update the `app.json` and click the below button.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

### How to use a Module

Module files can be found in the ```html_elements``` directory. If you want to include a module in your website, simply add 
```
include_once "html_elements/module_name.php";
```
to index.php in the body's 'Main Files' section.

## Carousel Three

A straightforward photo carousel that rotates up to 6 images.

## Carousel Title

A straightforward photo carousel that displays one image at a time.

## Gallery

This module provides a 3 by x gallery for your images.
Images can be of any size; however, note that they are sorted by column,
therefore to place 3 images horizontally you need to place the images in three different columns.

This module also provides a lightbox to view the images; ensure the data-slide-to sections are
appropriately labelled if you wish to maintain the order of your photos.

**Note:** if you wish to create more columns change the col-md-4 class of each column,
      keep in mind that bootstrap divides a row into 12 columns, so if you wanted 4 columns
      you would change this value to col-md-3, and add an additional column.

## Google Maps 

An Interactive Google Map with customizable features.
 
#### Instructions

Very simple usage.  Firstly, Place the provided code snippets in their respective files.

Get an API key for Google Maps from [here](https://developers.google.com/maps/documentation/javascript/)

Insert your API key below and place the following script in your footer.

`<script src="//maps.google.com/maps/api/js?key=PUT_YOUR_API_KEY_HERE&callback=loadedGmap" async defer></script>`

In the js file, specify the coordinates of the location you wish the map to be centered on.

   `var latlng = new google.maps.LatLng(-33.86455, 151.209);`


In the bottom of the js, change the $infowindow to display your location. This is what will show when you hover over the pin with your cursor. 

#### Customization

In the js file, there are many ways for you to customize the map. 

There are many map styles to pick from. To change the map style, pick a style from https://snazzymaps.com/explore.
Copy the code of your desired map style and paste it to $styleArr.

In the options, there are options to change how much you can control the map. $scrollwheel is set to false by default, meaning the scroll wheel will not zoom in or out the map, but you can activiate it if you desire.
```
 var options = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            navigationControl: true,
            mapTypeControl: false,
            scrollwheel: false,
            styles: styleArr,
            disableDoubleClickZoom: true
        };
        
```

![](map.JPG)
