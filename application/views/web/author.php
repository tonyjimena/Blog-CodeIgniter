<?php foreach ($post as $indice){ ?>

<header class="masthead" style="background-image: url('img/post-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <div class="post-heading">

          <h1><?php echo $indice['title']; ?></h1>
          <h2 class="subheading"><?php echo $indice['brief']; ?></h2>
          <span class="meta">indiceed by
            <a href="#"><?php echo $indice['display_name']; ?></a>
            <?php echo $indice['created']; ?></span>
        </div>
      </div>
    </div>
  </div>
</header>
<br><br>
<article>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php 
        echo str_replace( "\n", "<br>", $indice['text']); 
        //echo $post['text'];

      ?>
    </div>
  </div>
</div>
</article>
<br><br>
          <?php } ?>