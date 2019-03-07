var app = angular.module("myapp",["ngRoute"]);
app.config(function($routeProvider){
$routeProvider
.when("/",{
	templateUrl:"views/Home.html"
}).when("/Home",{
	templateUrl:"views/Home.html"
}).when("/CSR",{
	templateUrl:"views/CSR.html"
}).when("/Internship",{
	templateUrl:"views/Internship.html"
}).when("/Volunteer",{
	templateUrl:"views/Volunteer.html"
}).when("/ProjectForYoung",{
	templateUrl:"views/ProjectForYoung.html"
}).when("/educational-projects",{
	templateUrl:"views/educational-projects.html"
}).when("/skill-training",{
	templateUrl:"views/skill-training.html"
}).when("/community-development",{
	templateUrl:"views/community-development.html"
}).when("/contact",{
	templateUrl:"views/contact.html"
})
});

app.directive('loading',   ['$http' ,function ($http)
 {
     return {
         restrict: 'A',
         template: '<div id="divProcessing"><span class="std_loadingBackground"></span><div style="top: 30%; left: 40%;" class="std_modalContainer"><div class="std_tcenter"><img id="myAnimatedImage" alt="Processing.... Please wait!" src="images/ajax-loader.gif"><span class="std_processing">Processing... Please wait!</span></div></div></div>',
         link: function (scope, elm, attrs)
         {
             scope.isLoading = function () {
                 return $http.pendingRequests.length > 0;
             };

             scope.$watch(scope.isLoading, function (v)
             {
                 if(v){
                     elm.show();
                 }else{
                     elm.hide();
                 }
             });
         }
     };
 }]);
