<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> HTML FORM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
  </head>
  <body>
      <h1>Please Enter Your Details For Our Dating Website!</h1>
      <?php
      $countres = array( "bulgaria" => "Bulgaria", "engliand" =>'England', "spain" => "Spain", "italia" =>"Italia",
      "portugal" =>"Portugal", "germany" =>"Germany", "france" =>"France", "netherland" =>"Netherland", "demark" =>"Denmark");
      if($_POST){
        $my_img = $_POST['avatar'];
        $name = trim($_POST['name']);
        $name = str_replace('!','',$name);
        $gender = trim($_POST['gender']);
        $age = (int)$_POST['age'];
        $dob = trim($_POST['dob']);
        $country = $_POST['country'];
        $email = trim($_POST['email']);
        $email = str_replace('!','',$email);
        $mobile = trim($_POST['mobile']);
        $mobile =(int)$_POST['mobile'];
        $address = trim($_POST['address']);
        $address = str_replace('!' , '', $address);
        $error = false;
        if(mb_strlen($email) < 4){
          echo '<br><p>This email very short</p><br>';
          $error=true;
        };
        if(!$error){
          $result = $my_img.'!'.$name.'!'.$gender.'!'.$age.'!'.$dob.'!'.$country.'!'.$email.'!'.$mobile.'!'.$address."\n";
          if(file_put_contents('data.txt', $result, FILE_APPEND)){
              echo '<p>Your form send</p>';
          }
        }
      }


?>
      <form method="POST">
        <fieldset>
            <legend><span class="number">1</span>Your face</legend>
            <label for="avatar">Your image:
              <input type="file" id="avatar" name="avatar" required><br>
            </label>
            <div id="img_preview">
            <label>Image preview:</label>
            <img id="preview">
          </div>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span>Your general details</legend>
            <label for="name">Name:</label>
            <input type="text" id ="name" name="name"required><br>
            <div id="gender">
              <label for="gender">Gender:</label>
              <input type="radio" id="male" name="gender" value="male" required>
              <label for="male"> Male </label>
              <input type="radio" id="female" name="gender" value="famale" >
              <label for="female">Female <br>
            </div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age"required><br>
            <label for="dob">Data of birth:</label>
            <input type="date" id="dob" name="dob"><br>
            <label for="country">Which country:</label>
            <select id="country" name="country">
              <?php
                foreach ($countres as $key=>$value) {
                  echo '<option value="' . $key . '">' . $value .
                        '</option>';
                	}
               ?>
            </select><br>
          </fieldset>
          <fieldset>
            <legend><span class="number">3</span>Your Contact Information</legend>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="mobile">Mobile:</label>
              <input type="tel" id="mobile" name="mobile"><br>
              <label for="address">Address:</label>
              <textarea id="address" name="address"></textarea><br>
              <br>
            </fieldset>
            <button type="submit" value="Submit!">Submit!</button>
            <a id="href_list" href="list.php">LIST OF PEOPLE</a>
          </form>
        <script src="load_pick.js"></script>
    </body>
</html>
