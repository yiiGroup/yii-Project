<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.1/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Oct 2015 23:22:13 GMT -->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="wrapper">
    <!-- ******CONTENT****** -->
    <div class="content container">
        <div class="page-wrapper">

            <div class="page-content">
                <div class="row page-row">
                    <div class="news-wrapper col-md-8 col-sm-7">
                        <article class="news-item">

                            <p class="featured-image"><img class="img-responsive" src=<?=Yii::$app->user->identity->image?>  alt="" height="100px" width="100px"/></p>
                            <table width="100%">
                                <tr>
                                    <td class="has-divider text-highlight"><h4 ><font color="#6091ba"><br>Firstname&nbsp;&nbsp;&nbsp;</font></h4></td>
                                    <td class="has-divider text-highlight"><font color="white"><br>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>
                                    <td class="has-divider text-highlight"><br><?=$model->firstname?></td>

                                    <td class="has-divider text-highlight"><h4 ><font color="#6091ba"><br>Lastname&nbsp;&nbsp;&nbsp;</font></h4></td>
                                    <td class="has-divider text-highlight"><font color="white"><br>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>
                                    <td class="has-divider text-highlight"><br><?=$model->lastname?></td>
                                </tr>
                                <tr>
                                    <td class="has-divider text-highlight"><h4 ><font color="#6091ba"><br>adress&nbsp;&nbsp;&nbsp;</font></h4></td>
                                    <td class="has-divider text-highlight"><font color="white"><br>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>
                                    <td class="has-divider text-highlight"><br><?=$model->adress?></td>

                                    <td class="has-divider text-highlight"><h4 ><font color="#6091ba"><br>Phone Number&nbsp;&nbsp;&nbsp;</font></h4></td>
                                    <td class="has-divider text-highlight"><font color="white"><br>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>
                                    <td class="has-divider text-highlight"><br><?=$model->num_tel?></td>
                                </tr>
                                <tr>
                                    <td class="has-divider text-highlight"><h4 ><font color="#6091ba"><br>Username&nbsp;&nbsp;&nbsp;</font></h4></td>
                                    <td class="has-divider text-highlight"><font color="white"><br>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>
                                    <td class="has-divider text-highlight"><br><?=Yii::$app->user->identity->username?></td>

                                    <td class="has-divider text-highlight"><h4 ><font color="#6091ba"><br>Email&nbsp;&nbsp;&nbsp;</font></h4></td>
                                    <td class="has-divider text-highlight"><font color="white"><br>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</font></td>
                                    <td class="has-divider text-highlight"><br><?=Yii::$app->user->identity->email?></td>
                                </tr>

   <tr>
       <td class="has-divider text-highlight"><font color="white"><br>    <?= Html::a('Update', ['update', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-primary']) ?>
           </font></td>

       <td>
</td>
</tr>

                            </table>
                        </article><!--//news-item-->
                    </div><!--//news-wrapper-->
                    <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12">
                        <section class="widget has-divider">
                            <h3 class="title">My Groups</h3>
                            <article class="news-item row">

                            </article><!--//news-item-->
                        </section><!--//widget-->
                    </aside>
                </div><!--//page-row-->
            </div><!--//page-content-->
        </div><!--//page-->
    </div><!--//content-->
</div><!--//wrapper-->



<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.1/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Oct 2015 23:22:13 GMT -->
</html>












