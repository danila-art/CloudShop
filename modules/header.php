<?
// var_dump($_SERVER['REQUEST_URI']);
if($_SERVER['REQUEST_URI'] != '/') $home = '../' ; else $home = './';
if($_SERVER['REQUEST_URI'] != '/') $profile = './profile.php' ; else $profile = './pages/profile.php'
?>

<header class="header">
    <div class="header__home">
        <a href=<?echo $home?>>CloudShop</a>
    </div>
    <div class="header__profile">
        <a href=<?=$profile?>>Профиль</a>
    </div>
</header>