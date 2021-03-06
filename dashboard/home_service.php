<?php
session_start();
if(isset($_SESSION['user'])){
require_once "add_project_class.php";
if(isset($_POST['add'])){    
$fileName1 = $_FILES["file1"]["name"];
$file1 = $_FILES["file1"]["tmp_name"];
$req=new projects();
$m=$req->home_services($_POST['cat'],$_POST['description'],$fileName1,$file1);
}}else{
    header('Location:login.php',true);
}if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header('Location:login.php',true);
}
?>
 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="./main.css" rel="stylesheet">
    <link href="./style2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow" style="background-color:#2955C8">
            <div class="app-header__logo">
                <img class="logo-src" src="./assets/images/wework-01.png" width="150" />
                <div class="header__pane ml-auto">
                    <div>
                        
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
          
        </div>
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                    </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Dynamic Pages</li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Home</button>     
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnDropdownDemo">
                            <a class="dropdown-item" href="./home_category.php">categories</a>         
                            <a class="dropdown-item" href="./home_whyus.php">WHY US</a>               
                            <a class="dropdown-item" href="./home_service.php">Services</a>                 
                        </div>
                        </div> 
                    <li class="app-sidebar__heading">ADD</li>
                    <li>
                        <a href="./add_category.php" >
                            <i class="metismenu-icon pe-7s-plus"></i> Category
                        </a>

                    </li>
                    <li>
                        <a href="./add_sub1.php" class="mm-active">
                            <i class="metismenu-icon pe-7s-plus"></i> Sub_Category
                        </a>
                    </li>
                    <li>
                        <a href="./add_sub2.php">
                            <i class="metismenu-icon pe-7s-plus"></i>Sub Sub_Category
                        </a>

                    </li>
                    <li>
                        <a href="./add_project1.php" >
                            <i class="metismenu-icon pe-7s-plus"></i> Project
                        </a>
                    </li>
                    <li>
                        <a href="./client.php" >
                            <i class="metismenu-icon pe-7s-plus"></i> clients
                        </a>
                    </li>
                    <li>
                        <a href="./add_team.php" >
                            <i class="metismenu-icon pe-7s-add-user"></i> Team
                        </a>
                    </li>
                    <li >
                        <a href="./add_admin.php">
                            <i class="metismenu-icon pe-7s-add-user" ></i> Admin
                        </a>
                    </li>
                 

                    <li class="app-sidebar__heading">Show And Delete</li>
                    <li>
                        <a href="./show_cat.php">
                            <i class="metismenu-icon pe-7s-close"></i>  Category
                        </a>
                    </li>
                    <li>
                        <a href="./show_subcat.php">
                            <i class="metismenu-icon pe-7s-close"></i>  Sub_Category
                        </a>
                    </li>
                    <li>
                        <a href="./show_projects.php">
                            <i class="metismenu-icon pe-7s-close"></i>  Project
                        </a>
                    </li>
                    <li>
                        <a href="./show_clients.php">
                            <i class="metismenu-icon pe-7s-close"></i>  Clients
                        </a>
                    </li>
                    <li>
                        <a href="./contact_us.php">
                            <i class="metismenu-icon pe-7s-mail"></i>  Contact Us
                        </a>
                    </li>  
                    <li>
                        <a href="./join.php">
                            <i class="metismenu-icon pe-7s-mail"></i>  Join Us
                        </a>
                    </li>    
                    <li>
                        <a href="./show_admins.php">
                            <i class="metismenu-icon pe-7s-id"></i>  Admins
                        </a>
                    </li> 
                    <li>
                        <a href="./show_team.php">
                            <i class="metismenu-icon pe-7s-id"></i>  Team Member
                        </a>
                    </li> 
                 
                    <li>
                        <form method="get"><div style="padding: 1%;"><button type="submit" style="text-align:center;" class="btn btn-danger" value=<?php echo $_SESSION['user']->email; ?> name="logout">logout</button></form>
                        
                    </li>     
                
 
  
  
                    </ul>
                    
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                <?php
              if(!empty($m)){
                if($m=="fail"){
                  echo '<div style="padding-left:15%;padding-right:10%;"><div class="alert alert-danger"  style="max-width: 600px;"  role="alert"><h3 style="text-align:center;">Error Occurred Please Try Again!</h3> </div></div>';
                  }elseif($m=="success"){
                    echo '<div style="padding-left:15%;padding-right:10%;"><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h3 style="text-align:center;">Successfully Added</h3> </div></div>';
                 }else{
                    echo '<div style="padding-left:15%;padding-right:10%;"><div class="alert alert-danger"  style="max-width: 600px;"  role="alert"><h3 style="text-align:center;">This Category Name Is Used Before!</h3> </div></div>';
                 }
                }
                ?>

                    <div class="tab-content">

                        <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h2 style="text-align: center;text-decoration-line: underline;color: darkblue">Home Services</h2>
                                    <form  method="POST" enctype="multipart/form-data" role="form">
                                    <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label" >Choose Category</label>
                                    <div class="col-sm-10"><select name="cat" id="exampleSelect" class="form-control" required>
                                                <option value=""  disabled selected hidden> Choose Category </option>                 
                                               <option value='Programming'>Programming</option>
                                               <option value='Design'>Design</option>
                                               <option value='Marketing'>Marketing</option>
                                               <option value='Business Development'>Business Development</option>
                                               </select></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10"><input name="description"  placeholder="Description" type="text"  class="form-control" required></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10"><input name="file1" type="file" class="form-control-file" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group">
                                            <div class="col-sm-12">
                                        <button type="button" style="border-radius: solid  #000 5px; background-color: white;  font-size: 22px; color:  gold;"
                                         class="btn btn-rounded btn-lg btn-block"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ADD Points</button>
                                        </div>
                                        </div>
                                        <div class="position-relative row form-group">
                                            <div class="col-sm-12">
                                                <button class="mb-2 mr-2 btn btn-primary btn-lg btn-block" name="add">ADD</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="result"></div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Points Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactform" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Point:</label>
            <input type="text" class="form-control" id="Id1">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="mooo">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- model end -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    ></script>
    <script>
  $(document).ready(function () {
    $('#mooo').click(function (e) {
      e.preventDefault();
      var name = $('#Name1').val();
      var email = $('#Email1').val();
      var phone = $('#Phone1').val();
      var id = $('#Id1').val();
      $.ajax
        ({
          type: "POST",
          url: "form_submit.php",
          data: { "point" :id },
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
          }
        });
    });
  });
</script>
<script type="text/javascript" src="./assets/scripts/main.js"></script>

</body>

</html>