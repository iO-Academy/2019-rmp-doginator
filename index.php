<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOGINATOR</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>

    <div class="content-container">
        <div class="header">
            <img src="Assets/Images/bone.svg" class="bone">
            <h1>DOGINATOR</h1>
        </div>
        
        <img src="Assets/Images/background-dog.svg" class="dog">

        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pick a breed
            </a>

            <div class="dropdown-menu scrollable-menu" id="dropdown-content" aria-labelledby="dropdownMenuLink">
                <?php $breed_id = 31; ?>
                <!--links to populate with foreach loop in php-->
                <a class="dropdown-item" href="http://192.168.20.20/2019-rmp-doginator/gallery.php?id=<?php echo $breed_id; ?>">Action</a>

            </div>
        </div>


    </div>

</body>
</html>