
angular.module('loginApp', ['ngMaterial', 'ngMessages']).config(function($mdThemingProvider) {

}).controller("loginAppCtrl", controladorLogin);

function controladorLogin()
{
    var vm = this;
    vm.formData = {};

    vm.submitLogin = function(){

    }
}