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
    <link rel="stylesheet" href="public/css/block-ui/angular-block-ui.min.css">
    <link rel="stylesheet" href="public/css/angular-loading-bar/loading-bar.min.css">
    <link rel="stylesheet" href="public/css/angular-ladda/ladda-themeless.min.css">
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
              <form role="form" name="myForm" ng-submit="save()" novalidate="novalidate">
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
                  <div class="col-lg-10 col-lg-offset-1 table-responsive animated fadeIn">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          تحميل المستندات نوع (PDF) فقط
                        </h3>
                      </div>
                      <table class="table table-striped table-bordered"> 
                        <tbody>
                          <tr>
                            <td width="50%">
                              عقد التأسيس
                              <button 
                                class="btn btn-sm pull-left" type="file" ngf-select ng-model="memorandum" name="memorandum"
                                accept=".pdf" ngf-max-size="2MB" required="required"
                                ngf-model-invalid="errorFiles" ng-class="(memorandum && memorandum.type == 'application/pdf') ? 'btn-success' : 'btn-warning'">
                                تحميل الملف
                              </button>
                              <div class="text-center">
                                <p class="bg-danger" ng-show="myForm.memorandum.$error.maxSize">
                                  حجم الملف كبير جدا {{errorFiles[0].size / 1000000|number:1}}MB : 
                                  الحد اﻷقصي 2MB
                                </p>
                                <p class="bg-danger" ng-show="memorandum && (memorandum.type != 'application/pdf') && !myForm.memorandum.$error.maxSize">
                                  خطأ : الرجاء اختيار ملف نوع (PDF) فقط
                                </p>
                                <div class="progress progress-striped active" ng-if="memorandumFile.progress">
                                  <div class="progress-bar" ng-style="{'width': memorandumFile.progress + '%'}"></div>
                                </div>
                              </div>
                            </td>
                            <td style="border-right: 1px solid #dddddd;" width="50%">
                              النظام اﻷساسي
                              <button 
                                class="btn btn-sm pull-left" type="file" ngf-select ng-model="statute" name="statute"
                                accept=".pdf" ngf-max-size="2MB" required="required"
                                ngf-model-invalid="errorFiles" ng-class="(statute && statute.type == 'application/pdf') ? 'btn-success' : 'btn-warning'">
                                تحميل الملف
                              </button>
                              <div class="text-center">
                                <p class="bg-danger" ng-show="myForm.statute.$error.maxSize">
                                  حجم الملف كبير جدا {{errorFiles[0].size / 1000000|number:1}}MB : 
                                  الحد اﻷقصي 2MB
                                </p>
                                <p class="bg-danger" ng-show="statuteFile.errorFileType && !myForm.statute.$error.maxSize">
                                  خطأ : الرجاء اختيار ملف نوع (PDF) فقط
                                </p>
                                <div class="progress progress-striped active" ng-if="statuteFile.progress && !statuteFile.errorFileType">
                                  <div class="progress-bar" ng-style="{'width': statuteFile.progress + '%'}"></div>
                                </div>
                              </div>
                            </td>
                          </tr> 
                          <tr>
                            <td>
                              ترخيص مزاول المهنة
                              <button 
                                class="btn btn-sm pull-left" type="file" ngf-select ng-model="operatingLicense" name="operatingLicense"
                                accept=".pdf" ngf-max-size="2MB" required="required"
                                ngf-model-invalid="errorFiles" ng-class="(operatingLicense && operatingLicense.type == 'application/pdf') ? 'btn-success' : 'btn-warning'">
                                تحميل الملف
                              </button>
                              <div class="text-center">
                                <p class="bg-danger" ng-show="myForm.operatingLicense.$error.maxSize">
                                  حجم الملف كبير جدا {{errorFiles[0].size / 1000000|number:1}}MB : 
                                  الحد اﻷقصي 2MB
                                </p>
                                <p class="bg-danger" ng-show="operatingLicenseFile.errorFileType && !myForm.operatingLicense.$error.maxSize">
                                  خطأ : الرجاء اختيار ملف نوع (PDF) فقط
                                </p>
                                <div class="progress progress-striped active" ng-if="operatingLicenseFile.progress && !operatingLicenseFile.errorFileType">
                                  <div class="progress-bar" ng-style="{'width': operatingLicenseFile.progress + '%'}"></div>
                                </div>
                              </div>
                            </td> 
                            <td style="border-right: 1px solid #dddddd;">
                              السجل التجاري
                              <button 
                                class="btn btn-sm pull-left" type="file" ngf-select ng-model="commercialRecord" name="commercialRecord"
                                accept=".pdf" ngf-max-size="2MB" required="required"
                                ngf-model-invalid="errorFiles" ng-class="(commercialRecord && commercialRecord.type == 'application/pdf') ? 'btn-success' : 'btn-warning'">
                                تحميل الملف
                              </button>
                              <div class="text-center">
                                <p class="bg-danger" ng-show="myForm.commercialRecord.$error.maxSize">
                                  حجم الملف كبير جدا {{errorFiles[0].size / 1000000|number:1}}MB : 
                                  الحد اﻷقصي 2MB
                                </p>
                                <p class="bg-danger" ng-show="commercialRecordFile.errorFileType && !myForm.commercialRecord.$error.maxSize">
                                  خطأ : الرجاء اختيار ملف نوع (PDF) فقط
                                </p>
                                <div class="progress progress-striped active" ng-if="commercialRecordFile.progress && !commercialRecordFile.errorFileType">
                                  <div class="progress-bar" ng-style="{'width': commercialRecordFile.progress + '%'}"></div>
                                </div>
                              </div>
                            </td> 
                          </tr> 
                          <tr>
                            <td>
                              الغرفة التجارية
                              <button 
                                class="btn btn-sm pull-left" type="file" ngf-select ng-model="chamber" name="chamber"
                                accept=".pdf" ngf-max-size="2MB" required="required"
                                ngf-model-invalid="errorFiles" ng-class="(chamber && chamber.type == 'application/pdf') ? 'btn-success' : 'btn-warning'">
                                تحميل الملف
                              </button>
                              <div class="text-center">
                                <p class="bg-danger" ng-show="myForm.chamber.$error.maxSize">
                                  حجم الملف كبير جدا {{errorFiles[0].size / 1000000|number:1}}MB : 
                                  الحد اﻷقصي 2MB
                                </p>
                                <p class="bg-danger" ng-show="chamberFile.errorFileType && !myForm.chamber.$error.maxSize">
                                  خطأ : الرجاء اختيار ملف نوع (PDF) فقط
                                </p>
                                <div class="progress progress-striped active" ng-if="chamberFile.progress && !chamberFile.errorFileType">
                                  <div class="progress-bar" ng-style="{'width': chamberFile.progress + '%'}"></div>
                                </div>
                              </div>
                            </td> 
                            <td style="border-right: 1px solid #dddddd;">
                              كشف بالمشاريع المنفذة
                              <button 
                                class="btn btn-sm pull-left" type="file" ngf-select ng-model="detectionExecutedProjects" name="detectionExecutedProjects"
                                accept=".pdf" ngf-max-size="2MB" required="required"
                                ngf-model-invalid="errorFiles" ng-class="(detectionExecutedProjects && detectionExecutedProjects.type == 'application/pdf') ? 'btn-success' : 'btn-warning'">
                                تحميل الملف
                              </button>
                              <div class="text-center">
                                <p class="bg-danger" ng-show="myForm.detectionExecutedProjects.$error.maxSize">
                                  حجم الملف كبير جدا {{errorFiles[0].size / 1000000|number:1}}MB : 
                                  الحد اﻷقصي 2MB
                                </p>
                                <p class="bg-danger" ng-show="detectionExecutedProjectsFile.errorFileType && !myForm.detectionExecutedProjects.$error.maxSize">
                                  خطأ : الرجاء اختيار ملف نوع (PDF) فقط
                                </p>
                                <div class="progress progress-striped active" ng-if="detectionExecutedProjectsFile.progress && !detectionExecutedProjectsFile.errorFileType">
                                  <div class="progress-bar" ng-style="{'width': detectionExecutedProjectsFile.progress + '%'}"></div>
                                </div>
                              </div>
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
                    <button type="submit" ladda="submitLoading" class="btn btn-sm btn-primary btn-block">تسجيل</button>
                  </div>
                  <div class="col-xs-4 col-lg-2">
                    <button type="reset" ng-click="reset()" class="btn btn-sm btn-danger btn-block">إلغاء</button>
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
    <script src="public/js/ng-file-upload/ng-file-upload-shim.min.js"></script>
    <script src="public/js/angular-loading-bar/loading-bar.min.js"></script>
    <script src="public/js/angular-ladda/spin.min.js"></script>
    <script src="public/js/angular-ladda/ladda.min.js"></script>
    <script src="public/js/angular-ladda/angular-ladda.min.js"></script>
    <script src="public/js/mask.js"></script>
    <script src="public/js/app.js"></script>
  </body>
</html>