<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>INICIO</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <br>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="navbar-brand">
              DIGICAP
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <?php
      include "includes/menu.php";
      ?>
      <div class="col-xs-9">
          <form>
            <table class="table table-bordered">
              <tr>
                <td>
                  Nombre
                </td>
                <td>
                  <input type="text" name="nombre" class="form-control" >
                </td>
              </tr>
              <tr>
                <td>
                  Apellido
                </td>
                <td>
                  <input type="text" name="apellido" class="form-control"  >
                </td>
              </tr>
            </table>
          </form>
      </div>
    </div>
  </div>
</body>
</html>
