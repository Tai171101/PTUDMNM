$domain='http://myapp.bookstore/';
var myApp = angular.module('myApp', ['angularUtils.directives.dirPagination']).constant('API',$domain);
function OtherController($scope) {}
