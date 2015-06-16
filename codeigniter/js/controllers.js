var userList = angular.module('studentApp', []);
var studentData = [];

userList.controller('studentCtrl', function($scope,$http){
  var dataLoad = function(){
  var getData = $http.get("/ciseed/codeigniter/welcome/get");

  getData.success(function(data,status,headers,config){
    data = data.split('</div>');
    data = angular.fromJson(data[1])
    $scope.studentData = data;
  });

  getData.error(function(data, status, headers, config){
    console.log("Error in data loading");
  });
};

dataLoad();

  $scope.create = function(){
    var create = $http.post('/ciseed/codeigniter/welcome/create');

    create.success(function(data,status,headers,config){
      if(status == 200){
        dataLoad();
      } else{
        console.log(data);
        console.log(status);
      }
    });
};

  $scope.update = function(id){
    var update = $http({
      method: 'POST',
      url: 'welcome/random_update',
      data: id,
      headers: {'Content-Type': 'application/json; charset=UTF-8'}
    });

    update.success(function(data,status,headers,config){
      if(status == 200){
        dataLoad();
      }else{
        console.log(data);
        console.log(status);
      }
    });
  }
});
