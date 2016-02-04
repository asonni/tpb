'use strict';

var app = angular.module('tpb', ['ngRoute','ui-notification','jcs-autoValidate','mgcrea.ngStrap','ngAnimate','ngFileUpload','bootstrap.fileField']);
// app.factory('myCustomElementModifier', [
//                 function () {
//                     var /**
//                              * @ngdoc function
//                              * @name myCustomElementModifier#makeValid
//                              * @methodOf myCustomElementModifier
//                              *
//                              * @description
//                              * Makes an element appear valid by apply custom styles and child elements.
//                              *
//                              * @param {Element} el - The input control element that is the target of the validation.
//                              */
//                             makeValid = function (el) {
//                                 el.removeClass('bg-red');
//                                 el.addClass('bg-green');
//                             },

//                             *
//                              * @ngdoc function
//                              * @name myCustomElementModifier#makeInvalid
//                              * @methodOf myCustomElementModifier
//                              *
//                              * @description
//                              * Makes an element appear invalid by apply custom styles and child elements.
//                              *
//                              * @param {Element} el - The input control element that is the target of the validation.
//                              * @param {String} errorMsg - The validation error message to display to the user.
                             
//                             makeInvalid = function (el, errorMsg) {
//                                 el.removeClass('bg-green');
//                                 el.addClass('bg-red');
//                             },

//                             /**
//                              * @ngdoc function
//                              * @name myCustomElementModifier#makeDefault
//                              * @methodOf myCustomElementModifier
//                              *
//                              * @description
//                              * Makes an element appear in it default state.
//                              *
//                              * @param {Element} el - The input control element that is the target of the validation.
//                              */
//                             makeDefault = function (el) {
//                                 el.removeClass('bg-green');
//                                 el.removeClass('bg-red');
//                             };

//                     return {
//                         makeValid: makeValid,
//                         makeInvalid: makeInvalid,
//                         makeDefault: makeDefault,
//                         key: 'myCustomModifierKey'
//                     };
//                 }
//             ]);
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

// app.factory('allNationalities', ['$http', function($http){
//   var obj = {content:null};
//   $http.get('nationality.json').success(function (data) {
//     obj.content = data;
//     return obj;
//   });
//   // console.log(obj);
// }]);

app.controller('MainCtrl', ['$scope', '$http','Upload', function($scope, $http, Upload) {
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
  $http.get('nationality.json').success(function (data) {
    $scope.nationalities = data;
  }).error(function (data, status){
    console.log(data);
  });
  $scope.save = function(){
    $http.post('api/register', {
      main_data: $scope.formMain
    }).success(function (results){
        console.log(results);
    }).error(function (data){
        console.log(data);
    });
  }
  $scope.onFileSelect = function(){
    // console.log(file);
    // if (!$scope.memorandum) return;
    Upload.upload({
      url: 'api/fileUpload',
      method: 'POST',
      data: {file: $scope.memorandum}
    }).then(function (resp) {
        console.log('Success ' + resp.config.data.file.name + ' uploaded. Response: ' + resp.data);
        // console.log(resp);
    }, function (resp) {
        console.log('Error status: ' + resp.status);
    }, function (evt) {
        var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
        console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
    });
    // $http.post('api/fileUpload', {
    //   name: $scope.memorandum.name,
    //   size: $scope.memorandum.size,
    //   type: $scope.memorandum.type
    // }).success(function (results){
    //     console.log(results);
    // }).error(function (data){
    //     console.log(data);
    // });
  }
}]);

// app.controller('MyCtrl',[ '$scope', 'Upload', function($scope, Upload) {
//   $scope.onFileSelect = function(file) {
//     if (!file) return;
//     Upload.upload({
//         url: 'api/fileUpload',
//         data: {file: file}
//       }).then(function(resp) {
//         // file is uploaded successfully
//         console.log(resp.data);
//       });    
//   }
// }]);