<div class="logo">
    <h1>BIT Bank</h1>
</div>
<div class="logo loggedAs">
    <h3>Logged as <?= $_SESSION['user']?></h3>
</div>
<div>
    <div class="menuBar">
        <a class="meniuItem" href="./home.php">Home</a>
        <a class="meniuItem" href="./?action=addAccount">Add account</a>
        <a class="meniuItem" href="./?action=accounts">Accounts</a>
    </div>
    <div class="logoutBar">
        <a class="logout" href="./?action=logout">Logout</a>
    </div>
</div>