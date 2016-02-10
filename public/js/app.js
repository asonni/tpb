'use strict';
var app = angular.module('tpb', ['ngRoute','ui-notification','jcs-autoValidate','mgcrea.ngStrap','ngAnimate','ngFileUpload','cfp.loadingBar','angular-ladda']);
app.run(['defaultErrorMessageResolver', function (defaultErrorMessageResolver){
  // validator.setErrorMessageResolver(myCustomErrorMessageResolver.resolve);
  defaultErrorMessageResolver.setI18nFileRootPath('public/js/angular-auto-validate/dist/lang');
  defaultErrorMessageResolver.setCulture('ar-ly');
  defaultErrorMessageResolver.getErrorMessages().then(function (errorMessages) {
    errorMessages['companyName'] = "الرجاء ادخال اسم الشركة";
    errorMessages['activityKind'] = "الرجاء ادخال نوع النشاط";
    errorMessages['shareholdersNumber'] = "الرجاء ادخال عدد المساهمين";
    errorMessages['equityCapital'] = "الرجاء ادخال قيمة رأس المال المكتتب به د.ل";
    errorMessages['classificationCategory'] = "الرجاء ادخال فئة التصنيف";
    errorMessages['branch'] = "الرجاء ادخال الفرع";
    errorMessages['registrationNumber'] = "الرجاء ادخال رقم القيد بالغرفة التجارية";
    errorMessages['licenseNumber'] = "الرجاء ادخال رقم رخصة المزاولة";
    errorMessages['commissionerName'] = "الرجاء ادخال اسم المفوض";
    errorMessages['emailType'] = "الرجاء ادخال البريد الالكتروني";
    errorMessages['email'] = "الرجاء ادخال بريد الكتروني صالح";
    errorMessages['companyAddress'] = "الرجاء ادخال عنوان الشركة";
    errorMessages['nationality'] = "الرجاء ادخال الجنسية";
    errorMessages['incorporationDate'] = "الرجاء ادخال تاريخ التأسيس";
    errorMessages['experienceYears'] = "الرجاء ادخال سنوات الخبرة";
    errorMessages['paidCapital'] = "الرجاء ادخال قيمة رأس المال المدفوع د.ل";
    errorMessages['bankName'] = "الرجاء ادخال اسم المصرف";
    errorMessages['CRNo'] = "الرجاء ادخال رقم السجل التجاري";
    errorMessages['comingFrom'] = "الرجاء ادخال الصادرة من";
    errorMessages['phoneNumber'] = "الرجاء ادخال رقم الهاتف";
    errorMessages['mailPhotographer'] = "الرجاء ادخال البريد المصور";
    errorMessages['nationalLaborNo'] = "الرجاء ادخال عدد العمالة الوطنية";
    errorMessages['nonNationalLaborNo'] = "الرجاء ادخال عدد العمالة الغير وطنية";
    // errorMessages['memorandum'] = "الرجاء ادخال عدد العمالة الغير وطنية";
  });
}]);
app.config(function($datepickerProvider) {
  angular.extend($datepickerProvider.defaults, {
    dateFormat: 'yyyy-MM-dd',
    startWeek: 1,
    dateType: 'string'
  });
});
app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
  cfpLoadingBarProvider.includeSpinner = true;
  cfpLoadingBarProvider.spinnerColor = 'red';
  cfpLoadingBarProvider.barColor = 'red';
}]);
app.config(['laddaProvider', function (laddaProvider) {
  laddaProvider.setOption({
    style: 'zoom-out'
  });
}]);
app.service('uploadService',['$timeout','Upload',function($timeout,Upload){
  this.uploadFile = function(file, fieldName, insertedID) {
    var results = {errorFileType:false};
    if (file && (file.type === 'application/pdf') && (file.size <= 2000000)) {
      Upload.upload({
        url: 'api/fileUpload',
        method: 'POST',
        data: {file: file, 'fieldName': fieldName, 'insertedID': insertedID}
      }).then(function (response) {
        $timeout(function () {
          results.result = response.data;
          // console.log(results.result);
        });
      }, function (response) {
          if (response.status > 0){
            results.errorMsg = response.status + ': ' + response.data;
            // console.log(results.errorMsg);
          }
      }, function (evt) {
          results.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
          // console.log(results.progress);
      });
    } else {
      results.errorFileType = true;
      // console.log(results.errorFileType);
    }
    return results;
  };
}]);
app.controller('MainCtrl', ['$scope', '$http', '$timeout', 'uploadService', 'cfpLoadingBar', function($scope, $http, $timeout, uploadService, cfpLoadingBar) {
  $scope.formMain = {
    "companyName": "t1",
    "activityKind": "t2",
    "shareholdersNumber": "1",
    "equityCapital": "1,000",
    "classificationCategory": "t3",
    "branch": "t4",
    "registrationNumber": "2",
    "licenseNumber": "3",
    "commissionerName": "t5",
    "email": "t6@cca.ly",
    "companyAddress": "t6",
    "nationality": "4",
    "incorporationDate": "2016-02-19",
    "experienceYears": "5",
    "paidCapital": "2,000",
    "bankName": "t6",
    "CRNo": "3",
    "comingFrom": "fr",
    "phoneNumber": "099-123-123",
    "mailPhotographer": "1241",
    "nationalLaborNo": "12441",
    "nonNationalLaborNo": "31243"
  };
  cfpLoadingBar.start();
  window.onload = function(){
  $timeout(function(){
    cfpLoadingBar.complete();
    }, 1000);
  };
  $http.get('nationality.json').success(function (data) {
    $scope.nationalities = data;
  }).error(function (data, status){
    console.log(data);
  });
  $scope.save = function(){
    $http.post('api/register', {
      main_data: $scope.formMain
    }).success(function (results){
      if ($scope.memorandum) {
        $scope.memorandumFile = uploadService.uploadFile($scope.memorandum,'memorandum',results.insertedID);
      }
      if ($scope.statute) {
        $scope.statuteFile = uploadService.uploadFile($scope.statute,'statute',results.insertedID);
      }
      if ($scope.operatingLicense) {
        $scope.operatingLicenseFile = uploadService.uploadFile($scope.operatingLicense,'operatingLicense',results.insertedID);
      }
      if ($scope.commercialRecord) {
        $scope.commercialRecordFile = uploadService.uploadFile($scope.commercialRecord,'commercialRecord',results.insertedID);
      }
      if ($scope.chamber) {
        $scope.chamberFile = uploadService.uploadFile($scope.chamber,'chamber',results.insertedID);
      }
      if ($scope.detectionExecutedProjects) {
        $scope.detectionExecutedProjectsFile = uploadService.uploadFile($scope.detectionExecutedProjects,'detectionExecutedProjects',results.insertedID);
      }
    }).error(function (data){
        console.log(data);
    });
  }
  $scope.reset = function(){
    $scope.memorandum = "";
    $scope.statute = "";
    $scope.operatingLicense = "";
    $scope.commercialRecord = "";
    $scope.chamber = "";
    $scope.detectionExecutedProjects = "";
  }
}]);