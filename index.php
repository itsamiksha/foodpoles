<?php
/**
 * User: STG
 * Date: 9/12/14
 * Time: 8:21 PM
 */
require_once 'foodpoles-utility/util/UserAuth.php';


$user = new UserAuth();

if($user->checkRedirectCode()){
    header('Location:Test.php');
}

?>

<html>
<head></head>
<body>
<?php if(!$user->isLoggedIn()): ?>
    <a href="<?php echo $user->getAuthUrl()?>">
        Sign In With Google+
    </a>
<?php else: ?>
    You are signed In.<a href="logout.php">Sign Out</a>
    <?php
        echo '<pre>', print_r($user->getUserInfo()), '</pre>';
    ?>
<?php endif; ?>


</body>
</html>