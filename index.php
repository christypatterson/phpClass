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

    if ($_GET["language"]) {

     echo "Your chosen language is: ".($_GET['language']);

  }

  ?>


  <form>
    <label for="language">Language</label>
    <input type="text" name="language" />
    <button type="submit" value="Submit">Submit</button>
  </form>

</div>
</body>
</html>
