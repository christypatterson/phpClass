<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale-=1" />
 <title>My Webpage</title>
</head>

<body>
<div>

  <?php

    if ($_GET["submit"]) {

      if ($_GET["language"]) {
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale-=1" />
 <title>My Webpage</title>
</head>

<body>
<div>

  <?php

    $names=array("Bob", "Shem", "Tom") ;


      if ($_POST["submit"]) {

        if ($_POST["name"]) {

           foreach ($names as $name)  {
         
              if ($_POST["name"]==$name)  {

           echo "Hello again! ".$name;

           $true=1;

          }  

        }

       if (!$true) echo "I don't know you,  ".$_POST['name'];

        }

     }

  ?>


  <form method="post">
    <label for="lname">Name</label>
    <input type="text" name="name" />
    <input type="submit" name="submit" value="Submit your name" />
  </form>

</div>
</body>
</html>
