<?php

function andadel_header($active, $page_name)
{

  $host='http://localhost:9090/andadel-admin/';
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="copyright" content="Andadel">
    <meta name="robots" content="noindex, nofollow">
    <title>Andadel</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $host .'images/andLogo.png'; ?>">
    <link rel="stylesheet" href="<?php echo $host .'assets/css/style.css'; ?>">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo $host .'ckeditor/ckeditor.js'; ?>"></script>
   </head>
<body>
  <div class="sidebar admin">
    <div class="logo-details">
      <i><img src="<?php echo $host .'images/andLogo.png'; ?>" class="bwajes"></i>
      <span class="logo_name">Andadel</span>
    </div>
      <ul class="nav-links">
        <li><a <?php if($active === 'dashboard')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'dashboard"';
                } ?>>
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
          <div class="icon-links">
            <a href="#" class="no-action">
              <i class="bx bx-support arrow"></i>
              <span class="links_name arrow">Messages</span>
              <i class="bx bxs-chevron-down rotate arrow"></i>
            </a>
          </div>
          <ul class="sub-menu">
            <li>
              <a <?php if($active === 'admin-sent-emails')
                {
                    echo 'class="active" href="#"';
                }else{
                  echo 'href="' . $host . 'admin-sent-emails"';
                } ?>>
                <i class="bx bxs-send"></i>
                <span class="links_name">Admin sent emails</span>
              </a>
            </li>
            <li>
              <a <?php if($active === 'contact-sent-emails')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'contact-sent-emails"';
                } ?>>
                <i class="bx bx-mail-send" ></i>
                <span class="links_name">Contact sent emails</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a <?php if($active === 'legal')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'legal"';
                } ?>>
                <i class='bx bxs-graduation'></i>
                <span class="links_name">Legal</span>
            </a>
        </li>
        <li>
          <a <?php if($active === 'post-master')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'post-master"';
                } ?>>
                <i class='bx bx-message-rounded'></i>
                <span class="links_name">Post master</span>
            </a>
        </li>
        <li>
          <div class="icon-links">
            <a href="#" id="rate">
              <i class='bx bxs-bulb'></i>
              <span class="links_name">Mission & Vision</span>
            </a>
          </div>
        </li>
        <li>
          <div class="icon-links">
            <a <?php if($active === 'all-admins')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'all-admins"';
                } ?>>
              <i class='bx bx-command'></i>
              <span class="links_name">Admins</span>
            </a>
          </div>
        </li>
        <li>
          <div class="icon-links">
            <a <?php if($active === 'settings')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'settings"';
                } ?>>
              <i class='bx bx-cog' ></i>
              <span class="links_name">Settings</span>
            </a>
          </div>
        </li>
        <li class="log_out">
          <div class="icon-links">
            <a <?php if($active === 'logout')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="' . $host . 'logout"';
                } ?>>
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
            </a>
          </div>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"><?php echo $page_name; ?></span>
      </div>
      <div class="profile-details">
        <img src="<?php echo $host .'images/profile.jpg'; ?>" alt="">
        <span class="admin_name">Andrew Adelodun</span>
        <i class='bx bx-bell'></i>
        <span class="notify-number">3</span>
        <div class="notification">
          <ul class="notification-items">
            <li><a href="#">comment comment comment</a></li>
            <li><a href="#">comment</a></li>
            <li><a href="#">comment</a></li>
            <li><a href="#">comment</a></li>
          </ul>
        </div>
      </div>
    </nav>
<?php
}
?>