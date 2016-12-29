<!--

This module provides a gallery of triangular images that can be tessellated together.
This module relies on code in main.js in order to properly function with resizing windows.

-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000" height="200" id="svg1">
    <defs>

        <!-- Clip paths are used to create the triangles. Any polygon can be created by altering the points -->
        <clipPath id="clip1">
            <polygon points="100,0 0,200 200,200" fill="" id="poly1">
        </clipPath>
        <clipPath id="clip2">
            <polygon points="0,0 200,0 100,200" fill="" id="poly2">
        </clipPath>
    </defs>

    <!-- We create each image and assign the required variables. I
    Important variable to note are the clip-path (to create the triangle) and translate (so they aren't all overlapping) -->
    <image xlink:href="//placehold.it/500x500" width="200" height="200" clip-path="url(#clip1)" id="im1"></image>
    <image xlink:href="//placehold.it/501x501" width="200" height="200" clip-path="url(#clip2)" transform="translate(110, 0)" id="im2"></image>
    <image xlink:href="//placehold.it/502x502" width="200" height="200" clip-path="url(#clip1)" transform="translate(220, 0)" id="im3"></image>
    <image xlink:href="//placehold.it/503x503" width="200" height="200" clip-path="url(#clip2)" transform="translate(330, 0)" id="im4"></image>
    <image xlink:href="//placehold.it/504x504" width="200" height="200" clip-path="url(#clip1)" transform="translate(440, 0)" id="im5"></image>
</svg>

