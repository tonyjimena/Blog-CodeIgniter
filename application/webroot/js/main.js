document.addEventListener('DOMContentLoaded', function() {
    let sidenav = document.querySelectorAll('.sidenav');
    let instancia_sidenav = M.Sidenav.init(sidenav,{});    
    let dropdowns = document.querySelectorAll('.dropdown-trigger');
    let instancia_dropwdown = M.Dropdown.init(dropdowns, {
    hover:false});

      //Añade clase activa a la navbar cuando la pagina coincide
      let pathname = window.location.pathname;
      let link = document.getElementsByClassName("nav-link");

      for (var i = 0; i < link.length; i++) {
        let href = link[i].getAttribute("href");
        if (href  == pathname) {
          link[i].parentNode.className += " active";
        }
      }
  });

