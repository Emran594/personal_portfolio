<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="UTF-8" >
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi"
    >
    <title>Emran - Personal Portfolio HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png" >
    <link rel="stylesheet" href="css/plugin.css" >
    <link rel="stylesheet" href="css/icon.css" >
    <link rel="stylesheet" href="css/spacing.css" >
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/responsive.css" >
  </head>

  <body id="body">
    <!--================================
        PRELOADER START
    =================================-->
    <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
      <h5 class="preloader-text">Loading</h5>
    </div>
    <!--================================
        PRELOADER END
    =================================-->

    <!--========================
        MENU START
    =========================-->
    <nav class="navbar navbar-expand-lg main_menu">
      <div class="container container_large">
        <a class="navbar-brand" href="{{ '/' }}">
          <img src="images/logo.png" alt="Petrix" class="img-fluid" >
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fa-sharp fa-sharp fa-regular fa-bars menu_icon_bar"></i>
          <i class="fa-regular fa-xmark close_icon_close"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link active text_hover_animaiton" href="{{ '/' }}"
                >Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="{{ ('/about') }}"
                >About Me</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="{{ ('/portfolio') }}"
                >Portfolio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="{{ ('/services') }}"
                >Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="{{ ('/blog') }}"
                >Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="{{ ('/contact') }}"
                >Contact</a
              >
            </li>
          </ul>
          <div class="right_menu">
            <a href="contact_us.html" class="btn_hover">Let's Talk</a>
          </div>
        </div>
      </div>
    </nav>