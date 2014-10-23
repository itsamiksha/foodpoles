<?php
/**
 * Created by Shobhit Dixit.
 * User: STG
 * Date: 7/10/14
 * Time: 6:12 PM
 */
require 'properties.php';
$property = new Properties();


function getHeader(){
    global $property;
    $user = 'manager-admin';
    $title = $property->getTitle();
    $header = '';

    if($user == 'admin'){
    $header = <<<EOT
        <div class="navbar navbar-default navbar-static-top" style="margin-bottom: 0;">
            <div class="container-fluid" style="background-color: #e7e7e7" ng-controller="DropdownCtrl">

                <div>
                    <div dropdown is-open="status.isopen">
                      <span class="menuBtn dropdown-toggle" ng-class="{activeMenu: status.isopen}">
                        Menu <span class="caret"></span>
                      </span>
                      <ul class="dropdown-menu" role="menu">
                        <li ng-repeat="men in menu">
                            <span class="menuList" ng-click="selectAndRedirectTo(men.name, men.url)">
                                {{men.name}}
                            </span>
                        </li>
                        <li class="divider"></li>
                        <li><span class="menuList"> More>> </span></li>
                      </ul>
                    </div>

                </div>

                <a class="navbar-brand" href="#" style="">$title</a>

                <div class="btn-group pull-right" dropdown is-open="userMenuStatus.isopen">
                    <span class="menuBtn dropdown-toggle" ng-class="{activeMenu: userMenuStatus.isopen}">
                        Admin<span class="caret"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">

                        <li ng-repeat="men in userMenu">
                            <span class="menuList" ng-click="selectAndRedirectTo(men.name, men.url)">
                                {{men.name}}
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
EOT;

    }
    else if($user == ''){
        $header = <<<EOT
<div class="navbar navbar-default navbar-static-top" style="margin-bottom: 0;">
    <div class="container-fluid" style="background-color: #e7e7e7">
        <a class="navbar-brand pull-left" href="#" style="border-right:1px solid #C9C9C9">$title</a>

        <div class="">
            <div class="col-md-2 pull-right" style="margin-top: .8%;">
                <a href="#"><img src="common/img/fbflatIcon.png" width="30" height="30" alt="FaceBook" /></a>
                <a href="#"><img src="common/img/gplusflatIcon.png" width="30" height="30" alt="Google Plus"/></a>
                <a href="#"><img src="common/img/pinterestflatIcon.png" width="30" height="30" alt="Pinterest"/></a>
                <a href="#"><img src="common/img/twitterflatIcon.png" width="30" height="30" alt="Twitter"/></a>
            </div>
        </div>
    </div>
</div>
EOT;

    }
    else if($user == 'manager-admin'){
        $header = <<<EOT
        <div class="navbar navbar-default navbar-static-top" style="margin-bottom: 0;">
            <div class="container-fluid" style="background-color: #e7e7e7" ng-controller="DropdownCtrl">


                    <div dropdown is-open="status.isopen">
                      <span class="menuBtn dropdown-toggle" ng-class="{activeMenu: status.isopen}">
                        Menu <span class="caret"></span>
                      </span>
                      <ul class="dropdown-menu" role="menu">
                        <li ng-repeat="men in menu">
                            <span class="menuList" ng-click="selectAndRedirectTo(men.name, men.url)">
                                {{men.name}}
                            </span>
                        </li>
                        <li class="divider"></li>
                        <li><span class="menuList"> More>> </span></li>
                      </ul>
                    </div>



                <a class="navbar-brand" href="#" style="">$title</a>

                <div class="btn-group pull-right" dropdown is-open="userMenuStatus.isopen">
                    <span class="menuBtn dropdown-toggle" ng-class="{activeMenu: userMenuStatus.isopen}">
                        Manager Admin<span class="caret"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">

                        <li ng-repeat="men in userMenu">
                            <span class="menuList" ng-click="selectAndRedirectTo(men.name, men.url)">
                                {{men.name}}
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
EOT;
    }
return $header;
}
