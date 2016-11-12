<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 5px;
    }
    
    table tr:nth-child(odd) {
        background-color: #f1f1f1;
    }
    
    table tr:nth-child(even) {
        background-color: #ffffff;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<body>

    <div ng-app="myApp" ng-controller="customersCtrl">

        <table>
            <tr ng-repeat="x in names">
                <td>{{ angular.uppercase(x.FirstName) }}</td>
                <td>{{ angular.uppercase(x.LastName) }}</td>
            </tr>
        </table>

    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
            $http.get("getRecords.php")
                .then(function(response) {
                    $scope.names = response.data.records;
                });
        });
    </script>

</body>

</html>