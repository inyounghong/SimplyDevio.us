<!DOCTYPE>
<html ng-app="mainApp">
<head>
    <title>SimplyDevio.us | Journal Skin and Profile Resources for DeviantART</title>
    <meta name="description" content="Customize your DeviantART profile with CSS. Make a DeviantART journal skin, profile directory, or gallery directory.">
    <meta name="keywords" content="deviantart, simplysilent, profile, directory, css, journal, skin">
    <meta name="author" content="SimplySilent">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/clear.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="libraries/minicolors/jquery.minicolors.css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/new128.png" sizes="128x128">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-45010841-2', 'simplydevio.us');
      ga('send', 'pageview');
    </script>
</head>
<body>

    <?php include 'includes/menu1.html' ?>
    <?php include 'app/resources/profile_greeting/php/uploadFont.php' ?>

    <!-- View -->
    <div ng-view></div>

    <?php include 'includes/new_footer.html'; ?>

    <!-- JS Libraries -->
    <script type="text/javascript" src="libraries/jquery-3.2.1.min.js"></script>
    <script src="libraries/angular.min.js"></script>
    <script src="libraries/angular-route.min.js"></script>
    <script src="libraries/angular-sanitize.min.js"></script>


    <!-- JS Files -->
    <script src="app/mainApp.js"></script>
    <script src="app/mainController.js"></script>
    <script src="libraries/minicolors/jquery.minicolors.js"></script>
    <script src="libraries/minicolors/angular-minicolors.js"></script>

    <!-- <script src="js/app.js"></script> -->
    <script src="js/customOnChange.js"></script>

    <!-- Directives -->
    <script src="app/directives/head.js"></script>
    <script src="app/directives/resourceItem.js"></script>
    <script src="app/directives/widgetPreview.js"></script>
    <script src="app/directives/popup.js"></script>
    <script src="app/directives/sidebar.js"></script>
    <script src="app/directives/resourceHeader.js"></script>
    <script src="app/directives/tooltip.js"></script>


    <!-- Services/Factories -->
    <script src="app/factories/cTabFactory.js"></script>

    <script src="app/services/import-font-service.js"></script>
    <script src="app/services/custom-box-service.js"></script>
    <script src="app/services/tooltip-service.js"></script>

    <script src="app/resources/journal_creator/directives/sidebarBlock.js"></script>
    <script src="app/resources/journal_creator/journalService.js"></script>
    <script src="app/resources/journal_creator/tabFactory.js"></script>
    <script src="app/resources/profile_directory/service.js"></script>
    <script src="app/resources/slideshow/service.js"></script>
    <script src="app/resources/fullGalleryDirectory/service.js"></script>

    <!-- Controllers -->
    <script src="app/tutorials/tutorialCtrl.js"></script>
    <script src="app/resources/profile_greeting/profileGreetingCtrl.js"></script>
    <script src="app/resources/profile_directory/profileDirectoryCtrl.js"></script>
    <script src="app/resources/journal_creator/journalCreatorCtrl.js"></script>
    <script src="app/resources/slideshow/controller.js"></script>
    <script src="app/resources/fullGalleryDirectory/controller.js"></script>
    <!-- <script src="app/resources/galleryDirectory/controller.js"></script> -->
</body>
</html>
