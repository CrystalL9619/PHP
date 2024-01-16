<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
   <?php
    echo '<h1>PHP and Creating Output</h1>'?>


  <?php
    echo '<p>The PHP echo command can be used to create output.</p>'?>
  <?php
    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>' ?>
  
  <?php
   echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>';
    ?>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <?php echo '<p>Can you display a sentence with \' and "?</p>';?>

    <!--<img src="php-logo.png"> -->
    <img src="<?php echo'https://placehold.co/600x400' ;?>" alt="">
    <!-- php variables-->
    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    $a='hello';
    $$a='world'
    ?>
    <?php echo $linkName; 
     echo'<h1>'.$linkName.'</h1>'; 
    echo'<p>' .$a. '</p>'; 
   echo'<p>' .$$a. '</p>'; 
    echo"$a {$$a}";
    
    echo '<a href=' . $linkURL. '>' .$linkName. '</a>';
    ?>



  </body>
</html>
