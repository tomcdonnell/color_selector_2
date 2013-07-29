<?php
/**************************************************************************************************\
*
* vim: ts=3 sw=3 et wrap co=100 go -=b
*
* Filename: "index.php"
*
* Project: Programming Tools - Color Selector 2.
*
* Purpose: The main file for the project.
*
* Author: Tom McDonnell 2009-04-19.
*
\**************************************************************************************************/

// Global variables. ///////////////////////////////////////////////////////////////////////////////

$filenamesJs = array
(
   '../../lib/tom/js/contrib/jquery/1.5/jquery_minified.js'   ,
   '../../lib/tom/js/contrib/utils/DomBuilder.js'             ,
   '../../lib/tom/js/gui_elements/selectors/SelectorColor2.js',
   '../../lib/tom/js/utils/utils.js'                          ,
   '../../lib/tom/js/utils/utilsValidator.js'                 ,
   'index.js'
);

// HTML code. //////////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html>
 <head>
<?php
 $timestamp = time();
 foreach ($filenamesJs as $filename)
 {
?>
   <script src='<?php echo "$filename?$timestamp"; ?>'></script>
<?php
 }
?>
  <title>Color Selector 2</title>
 </head>
 <body></body>
</html>
<?php
/*******************************************END*OF*FILE********************************************/
?>
