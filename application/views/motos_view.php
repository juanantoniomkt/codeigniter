<div class="container">

<br>

<div class="row">
<a class="waves-effect waves-light btn-large">Nueva</a>
</div>

<?php

foreach($motos as $moto)
{

?>

<div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://kypit.es/wp-content/uploads/2018/06/Kisbee-50-Active-4T-Flat-6-Red.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
        <h2 class="header"><?=$moto->modelo;?></h2>
          <p><?=$moto->descripcion;?></p>

        <ul class="collapsible">

        <li>
            <div class="collapsible-header">
            Precio
            <span class="badge">
            <?=$moto->entrada;?>€/mes</span></div>
            </li>

            <li>
            <div class="collapsible-header">
            Entrada
            <span class="badge">
            <?=$moto->entrada;?></span></div>
            </li>

        </ul>

        </div>
        <div class="card-action">
        <a class="waves-effect waves-light btn">Más</a>
        <a href="<?= site_url('motos_controller/mod/'.$moto->id_moto); ?>" class="waves-effect waves-light btn"><i class="material-icons center">edit</i></a>
        <a class="waves-effect waves-light btn red"><i class="material-icons center">delete</i></a>
        </div>
      </div>
    </div>
  </div>

<?php

}

?>
            

</div>