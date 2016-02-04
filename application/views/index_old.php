<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ar" ng-app="tpb">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>مصلحة الطيران المدني</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/angular-motion/angular-motion.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
  </head>
  <body class="animated fadeIn">
    <div class="container" ng-controller="MainCtrl">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="text-center">
            <img src="<?php echo base_url(); ?>/public/img/logo.png" alt="Responsive image" width="140">
            <h3 class="header-title">مصلحة الطيران المدني الليبي</h3>
          </div>
          <br>
          <div class="panel panel-primary panel-transparent">
            <div class="panel-heading">
              <h3 class="panel-title">
                نموذج معلومات للشركات المشتركة والوطنية الراغبة بالتسجيل
              </h3>
            </div>
            <div class="panel-body">
              <form role="form" ng-submit="onSubmit()" novalidate="novalidate">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <!-- <h6 class="control-label">اسم الشركة</label> -->
                      <label class="control-label">اسم الشركة</label>
                      <input type="text" class="form-control input-sm" ng-model="companyName" placeholder="اسم الشركة" ng-required-err-type="companyName" required="required" title="الرجاء ادخال اسم الشركة">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">نوع النشاط</label>
                      <input type="text" class="form-control input-sm" ng-model="activityKind" placeholder="نوع النشاط" ng-required-err-type="activityKind" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">عدد المساهمين</label>
                      <input type="text" class="form-control input-sm number" ng-model="shareholdersNumber" placeholder="عدد المساهمين" ng-required-err-type="shareholdersNumber" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">قيمة رأس المال المكتتب به د.ل</label>
                      <input type="text" class="form-control input-sm money" ng-model="equityCapital" placeholder="قيمة رأس المال المكتتب به د.ل" ng-required-err-type="equityCapital" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">فئة التصنيف</label>
                      <input type="text" class="form-control input-sm" ng-model="classificationCategory" placeholder="فئة التصنيف" ng-required-err-type="classificationCategory" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">فرع</label>
                      <input type="text" class="form-control input-sm" ng-model="branch" placeholder="فرع" ng-required-err-type="branch" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">رقم القيد بالغرفة التجارية</label>
                      <input type="text" class="form-control input-sm number" ng-model="registrationNumber" placeholder="رقم القيد بالغرفة التجارية" ng-required-err-type="registrationNumber" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">رقم رخصة المزاولة</label>
                      <input type="text" class="form-control input-sm number" ng-model="licenseNumber" placeholder="رقم رخصة المزاولة" ng-required-err-type="licenseNumber" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">اسم المفوض</label>
                      <input type="text" class="form-control input-sm" ng-model="commissionerName" placeholder="اسم المفوض" ng-required-err-type="commissionerName" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">البريد الالكتروني</label>
                      <input type="email" class="form-control input-sm" ng-model="email" placeholder="البريد الالكتروني" ng-required-err-type="emailType" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">عنوان الشركة</label>
                      <input type="text" class="form-control input-sm" ng-model="companyAddress" placeholder="عنوان الشركة" ng-required-err-type="companyAddress" required="required">
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="control-label">الجنسية</label>
                      <input type="text" class="form-control input-sm" ng-model="nationality" placeholder="الجنسية" >
                       <!-- <select ng-model="form" class="selectpicker form-control input-sm" data-live-search="true">
                          <option>Mustard</option>
                          <option>Ketchup</option>
                          <option>Relish</option>
                      </select> -->
                      <!-- <select class="form-control input-sm">
                        <option ng-repeat="nationality in nationalities">
                          {{nationality.country_name_ar}}
                        </option>
                      </select> -->
                      <!-- <ol class="nya-bs-select form-control input-sm" ng-model="nationality" placeholder="الجنسية" data-live-search="true" ng-required-err-type="nationality" required="required">
                        <li nya-bs-option="nationality in nationalities">
                          <a ng-model="nationality.country_name_ar">
                            {{nationality.country_name_ar}}
                          </a>
                        </li>
                      </ol> -->
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">تاريخ التأسيس</label>
                      <!-- <input type="text" class="form-control input-sm" data-autoclose="1" ng-click="open2()" uib-datepicker-popup is-open="popup2.opened" datepicker-options="dateOptions" ng-model="incorporationDate" placeholder="تاريخ التأسيس" ng-required-err-type="incorporationDate" required="required" show-button-bar="false"> -->
                      <input type="text" class="form-control input-sm" data-autoclose="1" bs-datepicker ng-model="incorporationDate" placeholder="تاريخ التأسيس" ng-required-err-type="incorporationDate" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">سنوات الخبرة</label>
                      <input type="text" class="form-control input-sm number" ng-model="experienceYears" placeholder="سنوات الخبرة" ng-required-err-type="experienceYears" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">قيمة رأس المال المدفوع د.ل</label>
                      <input type="text" class="form-control input-sm money" ng-model="paidCapital" placeholder="قيمة رأس المال المدفوع د.ل" ng-required-err-type="paidCapital" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">اسم المصرف</label>
                      <input type="text" class="form-control input-sm" ng-model="bankName" placeholder="اسم المصرف" ng-required-err-type="bankName" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">رقم السجل التجاري</label>
                      <input type="text" class="form-control input-sm number" ng-model="CRNo" placeholder="رقم السجل التجاري" ng-required-err-type="CRNo" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">صادرة من</label>
                      <input type="text" class="form-control input-sm" ng-model="comingFrom" placeholder="صادرة من" ng-required-err-type="comingFrom" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">رقم الهاتف</label>
                      <input type="text" class="form-control input-sm phone" ng-model="phoneNumber" placeholder="رقم الهاتف" ng-required-err-type="phoneNumber" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">البريد المصور</label>
                      <input type="text" class="form-control input-sm" ng-model="mailPhotographer" placeholder="البريد المصور" ng-required-err-type="mailPhotographer" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">عدد العمالة الوطنية</label>
                      <input type="text" class="form-control input-sm number" ng-model="nationalLaborNo" placeholder="عدد العمالة الوطنية" ng-required-err-type="nationalLaborNo" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">عدد العمالة الغير وطنية</label>
                      <input type="text" class="form-control input-sm number" ng-model="nonNationalLaborNo" placeholder="عدد العمالة الغير وطنية" ng-required-err-type="nonNationalLaborNo" required="required">
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-4 col-xs-offset-2 col-lg-2 col-lg-offset-4">
                    <button type="submit" class="btn btn-sm btn-primary btn-block">تسجيل</button>
                  </div>
                  <div class="col-xs-4 col-lg-2">
                    <button type="reset" class="btn btn-sm btn-danger btn-block">إلغاء</button>
                  </div>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <!-- <div class="modal-header"> -->
          <!-- </div> -->
          <div class="text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;padding: 15px;">
              <i class="fa fa-times-circle-o"></i>
            </button>
            <!-- <img ng-src="{{previewImage}}" width="100%"> -->
            <object data="{{previewImage}}" type="application/pdf" width="100%" height="1150px">
              alt : <a href="{{previewImage}}">test.pdf</a>
            </object>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>public/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular/angular-route.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular/angular-animate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular/i18n/angular-locale_ar-ly.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular-ui-notification/angular-ui-notification.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular-block-ui/angular-block-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular-auto-validate/jcs-auto-validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery/jquery.mask.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular-strap/angular-strap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/angular-strap/angular-strap.tpl.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/mask.js"></script>
    <script src="<?php echo base_url(); ?>public/js/app.js"></script>
  </body>
</html>