
<div class="row">

  <div class="col-md-4"></div>

  <div class="col-md-4">

  <div class="row">

    <div class="col-md-12">

      <form role="form" method="post">

        <div class="input-group">
          
          <input type="text" class="form-control" name="nuevoNombre" id="nuevoNombre" placeholder="Ingresar producto" required>

          <span class="input-group-btn">

            <button class="btn btn-success" type="submit">Agregar</button>

          </span>
          
        </div><!-- /input-group -->

        <?php

          $agregarLista = new ControladorLista();
          $agregarLista -> ctrCrearLista();

        ?>

      </form>

    </div><!-- /.col-lg-6 -->

    </div><!-- /.row -->

    <br>

    <center><h3> LISTA DE PRODUCTOS A AGREGAR</h3></center>

    <br>

    <table class="table tablas">

    <thead class="center">

      <tr>

        <th scope="col">#</th>

        <th scope="col">Nombre</th>

        <th scope="col">Acciones</th>

      </tr>

    </thead>

    <tbody>

      <?php

        $item = null;
        $valor = null;

        $lista = ControladorLista::ctrMostrarLista($item, $valor);

        foreach ($lista as $key => $value){
          
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>

                    <div class="btn-group">
                        
                      <button id="btnEliminarProducto" class="btn btn-danger" idproducto="'.$value["id"].'">Eliminar</button>

                    </div>

                  </td>

                </tr>';
          }
      ?>

    </tbody>

    </table>

    <?php

    $borrarProducto = new ControladorLista();
    $borrarProducto -> ctrBorrarLista();

    ?> 

  </div>

  <div class="col-md-4"></div>

</div>
