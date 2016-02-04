<!DOCTYPE html>
<html ng-app="tpb">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>مصلحة الطيران المدني</title>
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="public/css/angular-motion/angular-motion.min.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body class="animated fadeIn" ng-controller="MyCtrl">
    <input type="file" ngf-select="onFileSelect($file)" ngf-pattern="'public/uploads/*'" ngf-max-size="2M">
    <script src="public/js/jquery/jquery-2.1.4.min.js"></script>
    <!-- // <script src="public/js/bootstrap/bootstrap.min.js"></script> -->
    <script src="public/js/angular/angular.min.js"></script>
    <script src="public/js/angular/angular-route.min.js"></script>
    <script src="public/js/angular/angular-animate.min.js"></script>
    <script src="public/js/angular/i18n/angular-locale_ar-ly.js"></script>
    <script src="public/js/angular-ui-notification/angular-ui-notification.min.js"></script>
    <script src="public/js/angular-block-ui/angular-block-ui.min.js"></script>
    <script src="public/js/angular-auto-validate/jcs-auto-validate.min.js"></script>
    <script src="public/js/jquery/jquery.mask.js"></script>
    <script src="public/js/angular-strap/angular-strap.min.js"></script>
    <script src="public/js/angular-strap/angular-strap.tpl.min.js"></script>
    <script src="public/js/ng-file-upload/ng-file-upload.min.js"></script>
    <script src="public/js/angular-bootstrap-file-field.min.js"></script>
    <script src="public/js/mask.js"></script>
    <script src="public/js/app.js"></script>
  </body>
</html>