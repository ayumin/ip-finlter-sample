<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?
   echo '<p>Hello World from ';
   echo $_SERVER["HTTP_X_FORWARDED_FOR"];
   echo '</p>';
 ?>
 </body>
</html>

