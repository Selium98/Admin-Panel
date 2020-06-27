<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>RAIT E-Certificate Generator</title>
  </head>
  <body>
    
    <?php include 'includes/dashboard.html' ?>
    
  
 </a></div>
 <center>
  <div class="space" style="margin-left: 20%;">
    
      <br><br><br>
      <h3>Automized Certificate Generator</h3>
      <br><br><br>
      <form method="post" action="">

      <div class="form-group col-sm-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here...">
      </div>

      <div class="form-group col-sm-6">
        <input type="text" name="workshop" class="form-control" id="workshop" placeholder="Enter Workshop Name...">
      </div>

      <div class="form-group col-sm-6">
        <input type="tel" name="date" class="form-control" id="date" placeholder="Enter Date In DD/MM/YYYY Format...">
      </div>
    <br>
      <button type="submit" name="generate" class="btn btn-primary">Generate</button>
    </form>

    

    
    <br>
    <?php 
      if (isset($_POST['generate'])) {
        $name = strtoupper($_POST['name']);
        $name_len = strlen($_POST['name']);
        $date = strtoupper($_POST['date']);
        $date_len = strlen($_POST['date']);
        $workshop = strtoupper($_POST['workshop']);
        $workshop_len = strlen($_POST['workshop']);
        if ($workshop) {
          $font_size_workshop = 15;
        }

        if ($date) {
          $font_size_date = 10;
        }

        if ($name == "" || $workshop == "" || $date =="") {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
        }else{
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Congratulations! $name 's Certificate has been Generated!
          </div>
          ";


          //designed certificate picture
          $image = "certificate.jpg";

          $createimage = imagecreatefromjpeg($image);



          //this is going to be created once the generate button is clicked
          $i=0;
          $output = "Demo\certificate[$i].jpg";
          while ( $i<= 100) {
            $i++;
          }
          

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x =320;
          $origin_y=310;

          //we then set the x and y axis to fix the position of our text date
          $origind_x =420;
          $origind_y=525;

          //we then set the x and y axis to fix the position of our text workshop
          $origin1_x = 250;
          $origin1_y=370;

          //we then set the differnet size range based on the length of the text which we have declared when we called values from the form
          if($date_len<=12){
            $font_size_date = 18;
            $origind_x =605;
           
          }
          else{
            $font_size_date = 10;
            $origind_x =500;

          }

          //we then set the differnet size range based on the length of the text which we have declared when we called values from the form
          if($name_len<=6){
            $font_size = 25;
            $origin_x =400;
           
          }
          elseif($name_len<=7){
            $font_size = 30;
            $origin_x=380;
          }

          elseif($name_len<=8){
            $font_size = 30;
            $origin_x =370;
          }

          elseif($name_len<=9){
            $font_size = 30;
            $origin_x =350;
          }

          elseif($name_len<=10){
            $font_size = 30;
            $origin_x =330;
          }

          elseif($name_len<=11){
            $font_size = 30;
            $origin_x =310;
          }

          elseif($name_len<=13){
            $font_size = 30;
            $origin_x =310;
          }

         elseif($name_len<=14){
            $font_size = 30;
            $origin_x =300;
          }

          elseif($name_len<=15){
            $font_size = 30;
            $origin_x =290;
          }

          elseif($name_len<=16){
            $font_size = 30;
            $origin_x =260;
          }

          elseif($name_len<=17){
            $font_size = 30;
            $origin_x =270;
          }

          elseif($name_len<=18){
            $font_size = 30;
            $origin_x =240;
          }

          elseif($name_len<=19){
            $font_size = 30;
            $origin_x =230;
          }

          elseif($name_len<=20){
            $font_size = 30;
            $origin_x =220;
          }

          elseif($name_len<=21){
            $font_size = 30;
            $origin_x =200;
          }

          elseif($name_len<=22){
            $font_size = 30;
            $origin_x =220;
          }
          
          else {
            $font_size =20;
            $origin_x =250;
          }

          // workshop length positioning using if else cases

          if($workshop_len<=6){
            $font_size = 25;
            $origin1_x =380;
           
          }
          
          elseif($workshop_len<=10){
            $font_size = 25;
            $origin1_x=350;
          }

          elseif($workshop_len<=12){
            $font_size = 25;
            $origin1_x=340;
          }

          elseif($workshop_len<=14){
            $font_size = 25;
            $origin1_x=330;
          }

          elseif($workshop_len<=16){
            $font_size = 25;
            $origin1_x=320;
          }

          elseif($workshop_len<=18){
            $font_size = 25;
            $origin1_x=300;
          }

          elseif($workshop_len<=20){
            $font_size = 25;
            $origin1_x=310;
          }

          elseif($workshop_len<=22){
            $font_size = 25;
            $origin1_x=300;
          }

          elseif($workshop_len<=24){
            $font_size = 25;
            $origin1_x=290;
          }
          else {
            $font_size = 25;
            $origin_x =400;
          }


          $certificate_text = $name;
          $certificate_date = $date;

          //font directory for name
          $drFont = dirname(__FILE__)."/fonts/arial.ttf";

          // font directory for workshop name
          $drFont1 = dirname(__FILE__)."/fonts/Audiowide.ttf";

          $drFont3 = dirname(__FILE__)."/fonts/Poppins-Light.ttf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont1, $certificate_text);

          

          //function to display workshop name on certificate picture
          $text2 = imagettftext($createimage, $font_size_workshop, $rotation, $origin1_x+2, $origin1_y, $black, $drFont, $workshop);

          //function to display date on certificate picture
          $text3 = imagettftext($createimage, $font_size_date, $rotation, $origind_x, $origind_y, $black,$drFont3, $certificate_date);

          imagepng($createimage,$output,3);

 ?>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>">
        <br> 
        <br>

        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="btn btn-success" download>Download The Certificate</a>
        <br><br>
        </div>
      </center>

      <?php include 'includes/footer.php';?>

         
<?php 
        }
      }

     ?>


 

      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
