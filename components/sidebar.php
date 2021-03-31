<section id="sidebar">
    <ul class="left-ul">
        <li><a href="#"><span class="profile-img-span"><img class="profile-img" src="assets/uploads/<?php echo $_SESSION["user_image"] ?>" alt="profile picture"></span></a></li>
        <li><a href="index.php"><?php echo ucfirst($_SESSION['user_name'])  ?> <span class="cool-hover"></span> </a></li>
        <li><a href="/oophp/messenger/change-name.php">Change Name <span class="cool-hover"></span> </a></li>
        <li><a href="/oophp/messenger/change-password.php">Change Password <span class="cool-hover"></span> </a></li>
        <li><a href="/oophp/messenger/change-photo.php">Change Photo<span class="cool-hover"></span> </a></li>
        <li><a href="#"> Online Users:  <span class="online_users"></span> <span class="cool-hover"></span> </a></li>
        <li><a href="#">Clean History<span class="cool-hover"></span> </a></li>
        <li><a href="logout.php">Logout<span class="cool-hover"></span> </a></li>
    </ul>
</section>