doni
====

A Symfony project created on June 19, 2017, 6:33 pm.

MINIMUM REQUIREMENTS

In the server, must be intall apache, php 5.6, composer, git and Imagick extension
for PHP.

1. How to install the project.

1.1. Clone the repository from https://github.com/deividaguilar/doni.git
1.2. Sure that the local repository has a correct permissions.
1.2. Enter to directory "domi" and updates the vendor with the command "composer update".
1.3. Add all permissions to next directorys: /app/cache/ and /app/logs/
1.4. Add a new virtual directory into web server and then, enter the new URL for 
instance httd://doni.dev/web/ or enter this URL on your browser to
watch the web application. "http://localhost/doni/web/".

2. How to use the project.

To use the web application just enter the URL configured and this route will be 
enough to access to the only endpoint.

3. Explains for Image-Segmentation.

To image segmentation was implemented Imagick Extesion for php. If it's necessary 
more information about this extension, go to http://php.net/manual/en/book.imagick.php

Backend 

For this project was created a doniImageBundle. This bundle has a controller with
3 methods when only one is public for response the user requests.  

indexAction() method;
Return encode image segmentation

readImage() method;
Read the physical path of real image and then, pass this path to getImgEncode()

getImgEncode method;
this method has 4 parameters to make segmentation. 
- $imagePath: it's create a new object instantiated from Imagick class(). 
- $colorSpace: this is the color constant. In this case we used RGB.
- $clusterThreshold: A percentage describing minimum number of pixels contained in hexedra before it is considered valid. 
- $smoothThreshold: Eliminates noise from the histogram.
After segmentation the original image encodes in base64 the images.

Frontend

For this project was created a only view. Here is when the response is decodes 
to load the image into div. This for disable download from browser.


