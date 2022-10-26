<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- header and navbar -->
    <div class="">
        <div class="">
            <div class="header">
                <div class="header_content">
                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="index.php?pageName=about">About Us</a></li>
                        <li><a href="index.php?pageName=contact">Contact Us</a></li>
                        <li><a href="index.php?pageName=share">Tell a Friend</a></li>
                        <li><a href="">Comming soon</a></li>
                        <li><a href="">Forum</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- side bar start from here -->
    <div class="">
        <div class="">
            <div class="aside">
                <h3>Latest Movies Links</h3>
                <div class="">
                    <ol>
                        <li><a href="">Action Movies</a></li>
                        <li><a href="">Animate movies</a></li>
                        <li><a href="">Comedy</a></li>
                        <li><a href="">Dramas</a></li>
                        <li><a href="">Horror mobies</a></li>
                    </ol>
                </div>
                <div class="todaysmovie">
                    <h3>Todays top movies</h3>
                    <img src="./images/hunters-race-MYbhN8KaaEc-unsplash.jpg" width="170px" alt="">
                </div>
                <div class="todaysmovie">
                    <h3>Todays top movies</h3>
                    <img src="./images/georgie-cobbs-bKjHgo_Lbpo-unsplash.jpg" width="170px" alt="">
                </div>
            </div>
        </div>
    </div>





    <!-- contant start from here -->
    <div class="all-contant">
        <div class="contant-box">
            <div class="container">
                <?php 
                        $pages_folder = 'pages'; //folderName collected
                    if(!empty($_GET['pageName'])){
                        $all_pages = scandir($pages_folder,0); //all file scannig from pages folder
                        unset($all_pages[0], $all_pages[1]);//hide array index 0 and 1
                        // echo "<pre>";
                        // print_r($all_pages);  
                        $pageName = $_GET['pageName'];
                        // echo $pageName;
                        if(in_array($pageName.".inc.php", $all_pages)){ 
                            // echo 'page found and name is '.$pageName;
                            include_once $pages_folder.'/'.$pageName.'.inc.php';
                        }
                        else{
                            echo '<h1>You are lost</h1>';
                            echo '<img src="./images/studio-republic-fotKKqWNMQ4-unsplash.jpg" width="500px" alt="">';
                            echo '<h3>Sorry page not found</h3>';
                        }
                    }
                    else{
                        include_once $pages_folder.'/home.inc.php';
                    }
                    ?>
            </div>
        </div>
    </div>






    <div class="">
        <div class="">
            <div class="footer">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia rerum autem libero non quidem perspiciatis enim asperiores consectetur quae provident!</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, saepe!</p>
                <div class="">Lorem ipsum dolor sit amet.</div>
            </div>
        </div>
    </div>




</body>

</html>