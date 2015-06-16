<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Andrew Fribush">

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body ng-app="studentApp" ng-controller="studentCtrl">
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">CISeed Project</a>
                </div>
            </div>
        </nav>
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Randomize</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat='student in studentData'>
                    <td> {{student.user_name}} </td>
                    <td> {{student.password}} </td>
                    <td>
                        <input class="btn btn-failure" type="submit" id="submit" value="Randomize" ng-click="update(student.id)">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row-fluid">
            <div class="col-md-13">
                <legend>Create Random User</legend>

                <form ng-submit="create()" class="form-inline">
                    <input class='btn btn-success' type="submit" id="submit" value="Create" />
                </form>

            </div>
        </div>
    </div>

</body>

<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="/ciseed/codeigniter/js/controllers.js"></script>

</html>