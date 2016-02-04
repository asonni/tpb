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
  <body class="animated fadeIn" ng-controller="MainCtrl">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="text-center">
            <img src="public/img/logo.png" alt="Responsive image" width="140">
            <h3>مصلحة الطيران المدني الليبي</h3>
          </div>
          <br>
          <div class="panel panel-primary panel-transparent">
            <div class="panel-heading">
              <h3 class="panel-title">
                نموذج معلومات للشركات المشتركة والوطنية الراغبة بالتسجيل
              </h3>
            </div>
            <div class="panel-body">
              <form role="form" ng-submit="save()" novalidate="novalidate">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">اسم الشركة</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.companyName" placeholder="اسم الشركة" ng-required-err-type="companyName" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">نوع النشاط</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.activityKind" placeholder="نوع النشاط" ng-required-err-type="activityKind" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">عدد المساهمين</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.shareholdersNumber" placeholder="عدد المساهمين" ng-required-err-type="shareholdersNumber" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">قيمة رأس المال المكتتب به د.ل</label>
                      <input type="text" class="form-control input-sm money" ng-model="formMain.equityCapital" placeholder="قيمة رأس المال المكتتب به د.ل" ng-required-err-type="equityCapital" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">فئة التصنيف</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.classificationCategory" placeholder="فئة التصنيف" ng-required-err-type="classificationCategory" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">فرع</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.branch" placeholder="فرع" ng-required-err-type="branch" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label">رقم القيد بالغرفة التجارية</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.registrationNumber" placeholder="رقم القيد بالغرفة التجارية" ng-required-err-type="registrationNumber" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">رقم رخصة المزاولة</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.licenseNumber" placeholder="رقم رخصة المزاولة" ng-required-err-type="licenseNumber" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">اسم المفوض</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.commissionerName" placeholder="اسم المفوض" ng-required-err-type="commissionerName" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">البريد الالكتروني</label>
                      <input type="email" class="form-control input-sm" ng-model="formMain.email" placeholder="البريد الالكتروني" ng-required-err-type="emailType" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">عنوان الشركة</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.companyAddress" placeholder="عنوان الشركة" ng-required-err-type="companyAddress" required="required">
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="control-label">الجنسية</label>
                      <select class="form-control input-sm" ng-model="formMain.nationality" ng-options="nationality.id as nationality.country_name_ar for nationality in nationalities" ng-required-err-type="nationality" required="required">
                        <option value="">أختر الجنسية</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">تاريخ التأسيس</label>
                      <input type="text" class="form-control input-sm" data-autoclose="1" bs-datepicker ng-model="formMain.incorporationDate" placeholder="تاريخ التأسيس" ng-required-err-type="incorporationDate" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">سنوات الخبرة</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.experienceYears" placeholder="سنوات الخبرة" ng-required-err-type="experienceYears" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">قيمة رأس المال المدفوع د.ل</label>
                      <input type="text" class="form-control input-sm money" ng-model="formMain.paidCapital" placeholder="قيمة رأس المال المدفوع د.ل" ng-required-err-type="paidCapital" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">اسم المصرف</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.bankName" placeholder="اسم المصرف" ng-required-err-type="bankName" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">رقم السجل التجاري</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.CRNo" placeholder="رقم السجل التجاري" ng-required-err-type="CRNo" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">صادرة من</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.comingFrom" placeholder="صادرة من" ng-required-err-type="comingFrom" required="required">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">رقم الهاتف</label>
                      <input type="text" class="form-control input-sm phone" ng-model="formMain.phoneNumber" placeholder="رقم الهاتف" ng-required-err-type="phoneNumber" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">البريد المصور</label>
                      <input type="text" class="form-control input-sm" ng-model="formMain.mailPhotographer" placeholder="البريد المصور" ng-required-err-type="mailPhotographer" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">عدد العمالة الوطنية</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.nationalLaborNo" placeholder="عدد العمالة الوطنية" ng-required-err-type="nationalLaborNo" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">عدد العمالة الغير وطنية</label>
                      <input type="text" class="form-control input-sm number" ng-model="formMain.nonNationalLaborNo" placeholder="عدد العمالة الغير وطنية" ng-required-err-type="nonNationalLaborNo" required="required">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-10 col-lg-offset-1 table-responsive">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          تحميل المستندات (PDF, JPG, PNG)
                        </h3>
                      </div>
                      <table class="table table-striped table-bordered"> 
                        <tbody>
                          <tr>
                            <td style="border-left-style: hidden;">عقد التأسيس</td> 
                            <td>
                              <div class="form-group">
                                <file-field class="btn btn-sm" ng-model="memorandum" ng-change="onFileSelect()" ng-class="memorandum ? 'btn-success' : 'btn-warning'" preview="previewMemorandum">تحميل الملف</file-field>
                                <a ng-href="{{previewMemorandum}}" ng-if="previewMemorandum" class="btn btn-info btn-sm btn-show animated fadeIn" target="_blank">عرض</a>
                              </div>
                            </td> 
                            <td style="border-left-style: hidden;">النظام اﻷساسي</td>
                            <td>
                              <file-field class="btn btn-sm" ng-model="statute" ng-class="statute ? 'btn-success' : 'btn-warning'" preview="previewStatute">تحميل الملف</file-field>
                              <a ng-href="{{previewStatute}}" ng-if="previewStatute" class="btn btn-info btn-sm btn-show animated fadeIn" target="_blank">عرض</a>
                            </td> 
                          </tr> 
                          <tr>
                            <td style="border-left-style: hidden;">ترخيص مزاول المهنة</td> 
                            <td>
                              <file-field class="btn btn-sm" ng-model="operatingLicense" ng-class="operatingLicense ? 'btn-success' : 'btn-warning'" preview="previewOperatingLicense">تحميل الملف</file-field>
                              <a ng-href="{{previewOperatingLicense}}" ng-if="previewOperatingLicense" class="btn btn-info btn-sm btn-show animated fadeIn" target="_blank">عرض</a>
                            </td> 
                            <td style="border-left-style: hidden;">السجل التجاري</td>
                            <td>
                              <file-field class="btn btn-sm" ng-model="commercialRecord" ng-class="commercialRecord ? 'btn-success' : 'btn-warning'" preview="previewCommercialRecord">تحميل الملف</file-field>
                              <a ng-href="{{previewCommercialRecord}}" ng-if="previewCommercialRecord" class="btn btn-info btn-sm btn-show animated fadeIn" target="_blank">عرض</a>
                            </td> 
                          </tr> 
                          <tr>
                            <td style="border-left-style: hidden;">الغرفة التجارية</td> 
                            <td>
                              <file-field class="btn btn-sm" ng-model="chamber" ng-class="chamber ? 'btn-success' : 'btn-warning'" preview="previewChamber">تحميل الملف</file-field>
                              <a ng-href="{{previewChamber}}" ng-if="previewChamber" class="btn btn-info btn-sm btn-show animated fadeIn" target="_blank">عرض</a>
                            </td> 
                            <td style="border-left-style: hidden;">كشف بالمشاريع المنفذة</td>
                            <td>
                              <file-field class="btn btn-sm" ng-model="detectionExecutedProjects" ng-class="detectionExecutedProjects ? 'btn-success' : 'btn-warning'" preview="previewDetectionExecutedProjects">تحميل الملف</file-field>
                              <a ng-href="{{previewDetectionExecutedProjects}}" ng-if="previewDetectionExecutedProjects" class="btn btn-info btn-sm btn-show animated fadeIn" target="_blank">عرض</a>
                            </td> 
                          </tr>
                        </tbody>
                      </table>
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
              <!-- <br>
              <pre style="direction: ltr;">
                {{formMain | json}}
              </pre> -->
            </div>
          </div>
        </div>
      </div>
    </div>
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