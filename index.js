/**************************************************************************************************\
*
* vim: ts=3 sw=3 et wrap co=100 go-=b
*
* Filename: "index.js"
*
* Project: Programming Tools - Color Selector 2.
*
* Purpose: Start the JavaScripts.
*
* Author: Tom McDonnell 2009-04-19.
*
\**************************************************************************************************/

$(document).ready
(
   function onLoadWindow(e)
   {
      try
      {
         var f = 'onLoadWindow()';
         UTILS.checkArgs(f, arguments, ['function']);

         var selectorColor2 = new SelectorColor2(405, 135);

         $('body').append
         (
            A
            (
               {style: 'font-size: small', href: '../../index.php'},
               'Back to tomcdonnell.net'
            ),
            H1({style: 'margin: 0'}, 'Color Selector 2'),
            selectorColor2.getDiv()
         );
      }
      catch (e)
      {
         UTILS.printExceptionToConsole(f, e);
      }
   }
);

/*******************************************END*OF*FILE********************************************/
