<style type="text/css">
#menu_app{
  padding: 0.9rem 3.5rem 0.9rem 3.5rem;
  width: auto;
  border-radius: 30px;
}
#menu_app:hover{
  background-color: #0b5d7c !important;
}

#profile{
  padding: 0.9rem 3.5rem 0.9rem 3.5rem;
  width: auto;
  border-radius: 30px;
  color:#fff;
  background-color: #429a50;
}
#profile:hover{
  background-color: #fff !important;
  color:#429a50;
}
#logout{
  padding: 0.9rem 3.5rem 0.9rem 3.5rem;
  width: auto;
  border-radius: 30px;
  color:#fff;
  background-color: #f14a4acf;
}
#logout:hover{
  background-color: #fff !important;
  color:#f14a4acf;
}

</style>

<div class="hamburg_menu">
  <div class="hamburger">
    <button class="button hamburger__button js-menu__toggle">
      <span class="hamburger__label">Open menu</span>
    </button>
  </div>
  <hammu class="menu" style="text-align: center;">
    <ul class="list menu__list">
      <li class="menu__group">
        <img src="assets/logo/loofer_a.png" style="width: 55%;">
      </li>
      <li class="menu__group">
        <a href="index.php" class="link menu__link" id="menu_app" style="background-color: #02a2de;">HOME</a>
      </li>

      <!-- PROFILE -->
      <li class="menu__group">
        <a href="profile.php" class="link menu__link" id="profile">Profile</a>
      </li>

      <!-- LOGOUT -->
      <li class="menu__group">
        <a href="index.php" class="link menu__link" id="logout">Log out</a>
      </li>

      <li class="menu__group">
        <a href="login.php" class="link menu__link" id="menu_app" style="background-color: #02a2decf;">Login</a>
      </li>
      <li class="menu__group">
        <a href="signup.php" class="link menu__link" id="menu_app" style="background-color: #02a2dea6;">Sign up</a>
      </li>
      <li class="menu__group">
        <a href="contact.php" class="link menu__link" id="menu_app" style="background-color: #02a2de7d;">Contact</a>
      </li>
    </ul>
  </hammu>
</div>