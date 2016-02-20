<html lang="en" >
<head>
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
</head>
<body ng-app="BlankApp" ng-cloak>

<div layout="column" layout-align="space-around center" class="md-inline-form">
    <md-content layout-padding layout-align="space-around center" class="md-inline-form">

        <md-card>
            <img ng-src="public/images/logo.png" class="md-card-image" alt="Iluminamos">
            <md-card-content>

                <form>
                <md-input-container class="md-block" flex-gt-sm="">
                    <label>Email (requerido)</label>
                    <md-icon md-svg-src="public/icons/ic_email_black_24px.svg" class="name"></md-icon>
                    <input ng-model="user.email" type="email" required="required">
                </md-input-container>

                <md-input-container class="md-block" flex-gt-sm="">
                    <label>Password (requerido)</label>
                    <md-icon md-svg-src="public/icons/ic_lock_black_24px.svg" class="name"></md-icon>
                    <input ng-model="user.firstName" required="required" type="password">
                </md-input-container>

            <md-card-actions layout="row" layout-align="center">
                <md-button class="md-raised md-primary">Ingresar</md-button>
            </md-card-actions>
            </form>
            </md-card-content>
        </md-card>
    </md-content>
</div>

<!-- Angular Material requires Angular.js Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

<!-- Angular Material Library -->
<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
<script src="public/js/angular.js"></script>

</body>
</html>