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
   'index.js'                                                  ,
   '../library/tom/js/contrib/jquery/1.5/jquery_minified.js'   ,
   '../library/tom/js/contrib/utils/DomBuilder.js'             ,
   '../library/tom/js/gui_elements/selectors/SelectorColor2.js',
   '../library/tom/js/utils/utils.js'
);

// HTML code. //////////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC
 "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
