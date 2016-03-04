
angular.module('loginApp', ['ngMaterial', 'ngMessages', 'angular-md5']).config(function($mdThemingProvider) {

}).controller("loginAppCtrl",['$http','md5', loginController]);

function loginController($http,md5)
{
    var vm = this;
    vm.formData = {};

    vm.submitLogin = function(){
        vm.formData.password = md5.createHash(vm.formData.password);
        $http({
            method  : 'POST',
            url     : 'datafeeds/login.php',
            data    : vm.formData,  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
        })
            .success(function(data) {
                console.log(data);

                /*
                if (!data.success) {
                    // if not successful, bind errors to error variables
                    vm.errorName = data.errors.name;
                    vm.errorSuperhero = data.errors.superheroAlias;
                } else {
                    // if successful, bind success message to message
                    vm.message = data.message;
                }
                */
            });
    };
}