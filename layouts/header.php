<header>
    <div class="logo">
        <a href=""><img src="/resource/img/cookie.png" alt=""></a>
        <a href="">CookieFarm</a>
    </div>
    <div class="menu">
        <div class="list">
            <?php if($_SESSION['user']): ?>
            <a href="/cookies">Cookies</a>
            <a href="/shop">Shop</a>
            <?php else: ?>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            <?php endif?>
        </div>
    </div>
    <div class="menu_btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
<div class="burger_menu">
    <?php if($_SESSION['user']): ?>
    <nav>
        <li><a href="/cookies">Cookies</a></li>
        <li><a href="/shop">Shop</a></li>
    </nav>
    <?php else: ?>
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
    <?php endif?>
</div>
