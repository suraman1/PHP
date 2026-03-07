 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP Lesson</title>
  </head>
  <body>
      <?php
    // First PHP code.
    # This is single line comment.
    /*
      This is
      a multiline comment.
     */
    echo "Hello World.<br>";
    $name = "Surafel";
    $age = 25;
    $isEmployed = false;
    $salary = 0.00;
    // var_dump describles about the var type
    var_dump($age);
    // ways of printing variables.
    echo "I am {$name}<br>";
    echo("I am {$name}<br>");
    echo "I am $age. <br>";
    echo "I am " . $age ."years old <br>";
    echo("This is echo statemnt.<br>");
    echo "This", "is" , "multiple", "argument";
    print "This is" . "" . "another way of printing multiple arguments";
    print "This is print statment.<br>";
  ?>
  </body>
  </html>

