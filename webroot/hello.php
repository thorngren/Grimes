<?php
/**
 * This is a grimes pagecontroller.
 *
 */
// Include the essential config-file which also creates the $grimes variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the grimes container.
$grimes['title'] = "Hello World";

$grimes['header'] = <<<EOD
<img class='sitelogo' src='img/grimes.jpg' alt='grimes Logo'/>
<span class='sitetitle'>Grimes webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$grimes['main'] = <<<EOD
<br>
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Grimes ser ut och fungerar.</p>
EOD;

$grimes['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/grimes-base'>grimes på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of grimes.
include(GRIMES_THEME_PATH);
