<div class="container">

<div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Listado de Posts</h1>
        <p class="lead"></p>
        
      </div>
    </div>
    <br><br>
    <a href="/new_post" class="btn btn-primary">Nuevo Post</a>
    <br><br>

    <div class="row">

       <div class="col-lg-12 text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Fecha</th>
              <th scope="col">Activo</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>

            <?php

              if ( !empty( $posts))
              {
                foreach ( $posts as $post) 
                {
                  if ( $post['enabled'] == "1")
                  {
                    $enabled = "<img src='/images/activo.svg'  width=20px>";
                  }
                  else
                  {
                    $enabled = "<img src='/images/no_activo.svg' width=20px>";
                  }


                  echo '<tr>
                    <th scope="row">'.$post['id'].'</th>
                    <td>'.$post['title'].'</td>
                    <td>'.date( "d/m/Y H:i:s", strtotime( $post['created'])).'</td>
                    <td>'.$enabled.'</td>
                    <td><a href="/edit/'.$post['id'].'"><img src="/images/edit.svg" width=20px></a></td>
                    <td><a href="#" OnClick="delete_post('.$post['id'].')"><img src="/images/delete_2.svg"  width=20px></a></td>
                  </tr>';

                }
              }
            ?>
            
            
          </tbody>
        </table>

      </div>
    </div>