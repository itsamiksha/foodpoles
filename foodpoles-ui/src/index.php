<?php
/**
 * Created by Shobhit Dixit.
 * User: STG
 * Date: 21/9/14
 * Time: 11:40 AM
 */

require 'common/header.php';

?>
<!DOCTYPE html>
<html ng-app="FoodPoleApp">
<head>
    <title><?php echo $property->getTitle(); ?></title>
    <link type="text/css" rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="http://angular-ui.github.com/ng-grid/css/ng-grid.css" />
    <style>
        .gridStyle {
            border: 1px solid rgb(212,212,212);
            width: 100%;
            height: calc(30 * 6px + 5px);
        }

        label{
            font-size: 16px;
        }
        .form-control,.btn{
            border-radius: 0;
        }
        @media(min-width:768px){
            .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand
            {
                margin-left:35%;
            }
        }
        .row{
            margin-right: 0;
        }
        .custom-heading{
            font-size: 24px;
            font-weight: 500;
            font-family: inherit;
            line-height: 1.1;
            color: inherit;
            margin: 20px 0 10px 0;
        }
        .btn:focus, .btn:before, .btn:before, .btn:active{
            outline: 0;
        }
        .left-panel{
            min-width: 120px;
            max-width: 17%;
            width:16.67%;
            float: left;
            display: block;
        }
        .right-panel{
            width:83.33%;
            max-width: calc(100% - 122px);
            float: right;
            display: block;
        }
        .menuBtn{
            float:left;
            height: inherit;
            padding: 15px 15px;
            cursor: pointer;
        }
        .activeMenu{
            background-color: #428bca;
            color: #ffffff;
        }
        .menuList{
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
            cursor: pointer;
        }
        .menuList:hover{
            background-color: #f5f5f5;
        }
        .dropdown-menu{
            border-radius: 0;
        }
        .list-group-item:first-child{
            border-radius: 0;
        }
        .customizationTable{
            width: 90%;
            border-collapse: collapse;
        }
        .customizationTable td{
            text-align: left;
            display: table-cell;
        }
        .customizationName{
            width:35%;
        }
        #customizeQuantity{
            text-align: center;
        }
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }

    </style>

</head>
<body>
<header>

    <?php echo getHeader();?>
</header>

<div class="row">
    <ul class="breadcrumb" style="margin-bottom: 0">
        <li>BreadCrumbs</li>
    </ul>
</div>

<div ui-view class="container-fluid"></div>



<footer>

</footer>

<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../vendor/jQuery/jquery.js"></script>
<script type="text/javascript" src="../vendor/angular-js/angular.min.js"></script>
<script type="text/javascript" src="../vendor/angular-js/angular-resource.min.js"></script>
<script type="text/javascript" src="../vendor/angular-js/angular-ui-router.js"></script>
<script type="text/javascript" src="../vendor/ui%20bootstrap/ui-bootstrap-tpls-0.11.0.min.js"></script>

<!-- for admin -->

<script type="text/javascript" src="admin/controllers/AdminCtrl.js"></script>

<!-- for manager-admin -->

<!--<script type="text/javascript" src="manager-admin/controllers/ManagerAdminCtrl.js"></script>
-->

<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>