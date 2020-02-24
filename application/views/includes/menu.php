<!-- Dropdown Structure -->

<nav class="navbar-fixed blue-grey darken-3">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul id="container" class="right hide-on-med-and-down">
      <li   class="nav-item">
            <a class="nav-link" href="/list">Listado</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/autores">Autores</a>
      </li>
      <li   class="nav-item">
        <a class="nav-link" href="/">Web</a>
      </li>
      <li   class="nav-item">
        <a class="nav-link" href="logout">Cerrar sesion: <?php echo $_SESSION["username"] ?></a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>


<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<ul class="sidenav" id="mobile-demo">
      <li><a href="/list">Blogs</a></li>
      <li><a class="nav-link" href="logout">Cerrar sesion: <?php echo $_SESSION["username"] ?></a></li>
</ul>

         