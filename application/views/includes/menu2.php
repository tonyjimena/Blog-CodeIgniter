
<nav class="navbar-fixed blue-grey darken-3">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul id="container" class="right hide-on-med-and-down">
      <li  class="nav-item"><a class="nav-link" href="/list">Blogs</a></li>
      <li><?php 
          if (isset($_SESSION['username'])) {
            echo '<a class="nav-link" href="login">Session: '.$_SESSION["username"].'</a>';}
            else {
              echo '<a class="nav-link" href="login">Inicia Sesion</a>';}
              ?>
    </li>
      <!-- Dropdown Trigger -->
      <li  class="nav-item"><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

<!-- Dropdown Structure -->

<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<ul class="sidenav" id="mobile-demo">
  <li><a href="/list">Blogs</a></li>
  <li><?php 
      if (isset($_SESSION['username'])) {
        echo '<a class="nav-link" href="login">Session: '.$_SESSION["username"].'</a>';}
        else {
          echo '<a class="nav-link" href="login">Inicia Sesion</a>';}
          ?>
    </li>
  </ul>


          
         