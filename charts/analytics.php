<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../views/logo.ico" type="image/x-icon" />

    <title>Analytics-TravelSL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
    }
    </style>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="../views/index1.php">TravelSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../views/aboutUs.php">About Us</a>
                    </li>
                    <li>
                        <a href="../views/login.php">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li class="active">
                        <a href="analytics.php">Analytics</a>
                    </li>

                    </ul>
            </div> 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
<div class="container">

<h2> Analytics based on</h2>
<hr>


<div class="card-deck">
    <div class="col-md-4"
        <div class="card">
            <img class="card-img-top" src="../views/images/search.jpg" alt="Card image cap">
            <div class="card card-outline-primary mb-3 text-center">
            <div class="card-block">
            <blockquote class="card-blockquote">
                <h4 class="card-title">Most Searches</h4>
                <p>The trend of searches by tourists (local and foreign) can be viewed based on the year.</p>
                <a href="analytics_search.php" class="btn btn-primary">View Analytics</a>
            </blockquote>
            </div>
            </div>
        </div>
    

    <div class="col-md-4"
        <div class="card">
            <img class="card-img-top" src="../views/images/ratings.jpg" alt="Card image cap">
            <div class="card card-outline-primary mb-3 text-center">
            <div class="card-block">
            <blockquote class="card-blockquote">
                <h4 class="card-title">Best Ratings</h4>
                <p>A tourist's rating after visiting a place is considered as the basis for the analysis.</p>
                <a href="analytics_ratings.php" class="btn btn-primary">View Analytics</a>
            </blockquote>
            </div>
            </div>
        </div>
    

    <div class="col-md-4"
        <div class="card">
            <img class="card-img-top" src="../views/images/comments.jpg" alt="Card image cap">
            <div class="card card-outline-primary mb-3 text-center">
            <div class="card-block">
            <blockquote class="card-blockquote">
                <h4 class="card-title">Most Comments</h4>
                <p>The analysis is based on the most number of comments for a place by local/foreign tourists.</p>
                <a href="analytics_comments.php" class="btn btn-primary">View Analytics</a>
            </blockquote>
            </div>
            </div>
        </div>
    
</div>



</div>
 

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
