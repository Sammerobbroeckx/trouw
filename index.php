<?php
    session_start();
    
    if($_SESSION["admin"] == 1000)
    {
        include("php/linkdb.php");
        if(isset($_POST["singlebutton"]))
        {
            if($_POST["singlebutton"] == "submit")
            {
                //echo "<pre>".print_r($_POST, true)."</pre>";
                $sql = 'INSERT INTO aanwezig (mail, persoon) VALUES ("'.$_POST["mail"].'","'.$_POST["persoon"].'");';
                //echo $sql;
                mysqli_query($link, $sql);
            }            
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roselien en Jesse</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light">#jessepluktzijnroosje</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#uitnodiging">Uitnodiging</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#komen">Kom jij ook?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#foto">Foto's</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Wij gaan trouwen!</h1>

                        <a href="#uitnodiging" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Uitnodiging Section -->
    <section id="uitnodiging" class="container content-section text-center per100">
            <h2>Uitnodiging</h2>
            <div class="col-lg-6 per100">
                <img class="per100" src="img/invite1.png"></img>
            </div>
            <div class="col-lg-6">
                <img class="per100" src="img/invite2.png"></img>
            </div>
    </section>

    <!-- Komen Section -->
    <section id="komen" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Kom jij ook?</h2>
                    <div id="komen">
                        <form class="form-horizontal" method="POST" action="index.php">
                            <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">wie ben je? en met wie kom je?</label>  
                            <div class="col-md-6">
                            <input id="textinput" name="persoon" type="text" placeholder="bv: joske vermeulen" class="form-control input-md" required="">
                            <span class="help-block">indien 2 personen gebruik "&amp;"</span>  
                            </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">je mail adres</label>  
                            <div class="col-md-6">
                            <input id="textinput" name="mail" type="text" placeholder="bv: joske.vermeulen@gmail.com" class="form-control input-md" required="">
                            <span class="help-block">enkel 1 adres vereist</span>  
                            </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" value="submit" class="btn btn-default">Verzenden</button>
                            </div>
                            </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Foto's' Section -->
    <section id="foto" class="content-section text-center">
        <div class="download2-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Foto's volgen nog!</h2>
                    <p>. . .</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Info</h2>
                
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <h6>Robbroeckx Samme</h6>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
<?php
    }
    else
    {
        session_destroy();
        echo '<META http-equiv="refresh" content="0;URL=login.php">';
    }
?>