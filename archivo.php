<?php

if (isset($_POST["dato_a_buscar"])) {
  error_reporting(0);
  $inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbzWM5yiycqTnnAc9bqHZPDuKdy4-ZcQ8NgCShhFP2vAhtJrQ4Kw8D1Uh8wHE30tt0ju/exec');
  $data = json_decode($inputJSON, TRUE);
  $datoss = $data[0]["data"];

  foreach ($datoss as $nombre) {
    if (strpos(strtolower($nombre['Autores']), strtolower($_POST["dato_a_buscar"])) !== false || strpos(strtolower($nombre['Title']), strtolower($_POST["dato_a_buscar"])) !== false) {
?>
   <div class="row mb-5">
        <div class="col-lg-12 mx-auto">
          <div class="cardtst">
            <div class="img-container">
          
            </div>
            <div class="card-contentx">
              <h3 class="titulo text-blue"><?php echo $nombre['Title'] ?></h3>
              <h4 class="autores"><?php echo $nombre['Autores'] ?></h3>
                <p class="author"><span class="text-blue">Expositor:</span> <?php echo $nombre['EXPOSITOR'] ?></p><p>

                
    <div class="row show-grid">
        <div class="col-sm-2 col-md-1-5 col-lg-2-5">
         <span class="badge badge--danger  badge--smaller"><?php echo $nombre['Temática'] ?></span>
        </div>
        <div class="col-sm-5 col-md-1-5 col-lg-2-5">  
          <a href=""><span class="badge badge--youtube  badge--small"><i class="bi bi-youtube"></i> Youtube</span></a>
        </div>
        <div class="col-sm-5 col-md-1-5 col-lg-2-5"> 
          <a href=""><span class="badge badge--whatsapp  badge--small"><i class="bi bi-whatsapp"></i> Whatsapp</span></a>
        </div>
    </div>
                </p>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
  }
} else {
  if (!isset($_POST["dato_a_buscar"])) {
    $inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbzWM5yiycqTnnAc9bqHZPDuKdy4-ZcQ8NgCShhFP2vAhtJrQ4Kw8D1Uh8wHE30tt0ju/exec');
$data = json_decode($inputJSON, TRUE);
$datoss = $data[0]["data"];

    //$i = 0;
    foreach ($datoss as $nombre) {
    ?>
      <div class="row mb-5">
        <div class="col-lg-12 mx-auto">
          <div class="cardtst">
            <div class="img-container">
            </div>
            <div class="card-contentx">
              <h3 class="titulo text-blue"><?php echo $nombre['Title'] ?></h3>
              <h4 class="autores"><?php echo $nombre['Autores'] ?></h3>
                <p class="author"><span class="text-blue">Expositor:</span> <?php echo $nombre['EXPOSITOR'] ?></p><p>
    <div class="row justify-content-between">
        <div class="col-sm-3 pr-1 pl-1">
         <span class="badge badge--danger  badge--smaller"><?php echo $nombre['Temática'] ?></span>
        </div>
        <div class="col-sm-3  pr-1 pl-1">  
          <a href=""><span class="badge badge--youtube  badge--small"><i class="bi bi-youtube"></i> Youtube</span></a>
        </div>
        <div class="col-sm-3  pr-1 pl-1"> 
          <a href="" data-toggle="modal" data-target="#exampleModal"><span class="badge badge--whatsapp  badge--small"><i class="bi bi-whatsapp"></i> Whatsapp</span></a>
        </div>
        <div class="col-sm-3  pr-1 pl-1">  
          <a href="mailto:"><span class="badge badge--mail  badge--small"> <i class="fa-solid fa-envelopes-bulk"></i>Mail</span></a>
        </div>

       

    </div>
                </p>
            </div>
          </div>
        </div>
      </div>
      <!---->
      <div class="container mt-5">
        <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Enviar Mensaje</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" placeholder="Ingresa tu Correo">
                    <label>Mensaje</label>
                  
                    <textarea name="" class="form-control" placeholder="Ingresa el Mensaje" id=""></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Enviar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
    
</div>
      <!----->



<?php

     // if (++$i > 5) break;
    }
  }
}
?>