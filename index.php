<?php 


require 'librery/vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name =$_POST['name'];
    // $mobile =$_POST['mobile'];
    // $age =$_POST['age'];

// This will output the barcode as HTML output to display in the browser
// $redColor = [255, 0, 0];

$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('barcode_images/barcode.jpg', $generator->getBarcode($name, $generator::TYPE_CODE_39,1,20));

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <div class="container-fluid">
    <div class="container">
        <div class="row">
             <form  method="POST">
                <div class="form-group">
                    <label for="name">Nmae</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Name">
                </div>
                <!-- <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="number" aria-describedby="number" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" name="age" id="number" aria-describedby="number" placeholder="Enter Age">
                </div> -->
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
   </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>