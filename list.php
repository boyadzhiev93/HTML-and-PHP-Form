<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> LIST FORM</title>
    <link rel="stylesheet" type="text/css" href="style_list.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <table border="1">
      <tr>
        <td>Your image</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Age</td>
        <td>Data of birth</td>
        <td>Country</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Adres</td>
      </tr>
      <tr>
        <?php
        if(file_exists('data.txt')){
          $result = file('data.txt');
          foreach ($result as $value) {
            $colums = explode('!',$value);
            echo '<tr>
                  <td>'.$colums[0].'</td>
                  <td>'.$colums[1].'</td>
                  <td>'.$colums[2].'</td>
                  <td>'.$colums[3].'</td>
                  <td>'.$colums[4].'</td>
                  <td>'.$colums[5].'</td>
                  <td>'.$colums[6].'</td>
                  <td>'.$colums[7].'</td>
                  <td>'.$colums[8].'</td>
                  </tr>';
          }
        }



         ?>
      </tr>
    </table>
    <button onclick="window.location.href='index.php'">BACK TO FORM LIST </button>
  </body>
  </html>
