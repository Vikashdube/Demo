<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>
      <form action="index.php" method="post">
         <fieldset>
             <legend>Personal Information</legend>
               <lable for="name">Name :</lable>
               <input type="text" id="name" name="name" required >

               <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required ><br><br>

                <label for="address"> Address :</label>
                <input type="text" id="address" name="address" required>

               

                <input type="submit" value="submit">

         </fieldset>

      </form>


      
</body>
</html>