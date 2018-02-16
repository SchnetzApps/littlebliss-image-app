<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="VendorFuel is a powerful ecommerce toolkit for WordPress.">
        <meta name="author" content="Ken Schnetz, VendorFuel">
        <title>VendorFuel&#8482;</title>
    	<!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">      
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link href="css/sizer.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300" rel="stylesheet">

    </head><!--/head-->

    <body class="homepage" ng-cloak ng-app="imageApp" ng-controller="addImagesCtrl">
        <div class="container-fluid">
            <div class="col-xs-3">
                <div class="col-xs-12 p-0">
                    <h2 class="text-center">API Settings</h2>
                    <form id="apiSettings">
                        <div class="input-group wp-100 m-b-10">
                            <span class="input-group-addon w-120">User ID: </span>
                            <input id="userId" type="text" class="form-control" name="userid" placeholder="User ID" ng-model="user.userId">
                        </div>
                        <div class="input-group wp-100 m-b-10">
                            <span class="input-group-addon w-120">User Token: </span>
                            <input id="userToken" type="text" class="form-control" name="usertoken" placeholder="User Token" ng-model="user.userToken">
                        </div>
                        <!-- <button class="btn btn-sm btn-primary m-0 h-34 w-120">Get Data</button> -->
                    </form>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="col-xs-12 p-0 m-b-10">
                    <h2 class="text-center">Image Settings</h2>
                    <img src="../images/placeholder.jpg" alt="image" class="wp-100">
                    url
                </div>
                <div class="col-xs-12 p-0 m-b-10">
                    <div class="col-xs-12 p-0 h-line"></div>
                </div>
                <div class="col-xs-12 p-0 m-b-10">
                    <form id="imageSettings">
                        <div class="input-group wp-100">
                            <div class="col-xs-4 text-left p-0 m-0">
                                <button class="btn btn-sm btn-primary m-0 h-34 w-120"><span class="glyphicon glyphicon-chevron-left"></span> Prev</button>
                            </div>
                            <div class="col-xs-4 text-center p-0">
                                <input id="imageNum" type="text" class="form-control w-50" name="imagenum" ng-model="imageNum">
                            </div>
                            <div class="col-xs-4 text-right p-0  m-0">
                                <button class="btn btn-sm btn-primary m-0 h-34 w-120">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 p-0 m-b-10">
                    <div class="col-xs-12 p-0 h-line"></div>
                </div>
                <div class="col-xs-12 p-0 m-b-10">
                    <form id="imageSettings">
                        <div class="input-group wp-100 m-b-10">
                            <span class="input-group-addon w-120">Category: </span>
                            <select id="imageCat" class="form-control" name="imagecat" ng-model="image.cat">
                                <option selected disabled hidden value="">Select Category</option>
                                <option ng-repeat="cat in categories" value="{{cat.id}}">{{cat.name}}</option>
                            </select>
                            <span class="input-group-addon w-120">Sub-Category: </span>
                            <select id="imageSubCat" class="form-control" name="imagesubcat" ng-model="image.subCat">
                                <option selected disabled hidden value="">Select Sub-Category</option>
                                <option ng-repeat="cat in categories" value="{{cat.id}}">{{cat.name}}</option>
                            </select>
                        </div>
                        <div class="input-group wp-100 m-b-10">
                            <span class="input-group-addon w-120">Tags: </span>
                            <input id="tags" type="text" class="form-control" name="tags" placeholder="Tags" ng-model="image.tags">
                        </div>
                        <button class="btn btn-sm btn-primary m-0 h-34 w-120">Submit</button>
                    </form>
                </div>
                <div class="col-xs-12 p-0 m-b-10">
                    <div class="col-xs-12 p-0 h-line"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="col-xs-12 p-0">
                    <h2 class="text-center">New Category</h2>
                    <form id="newCategory">
                        <div class="input-group wp-100 m-b-10">
                            <span class="input-group-addon w-120">Name: </span>
                            <input id="catName" type="text" class="form-control" name="catname" placeholder="Category Name" ng-model="newCatName">
                        </div>
                        <button class="btn btn-sm btn-primary m-0 h-34 w-120" ng-disabled="!newCatName || newCatName.length < 3" ng-click="CreateCategory()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>