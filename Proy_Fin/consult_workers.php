<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>consult workers</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php $conn = new  mysqli("localhost" , "root" , "superman" , "business_1" );
          $data = $conn->query("Select * from workers");?>

  <div class="workers">
    <table border="1px">
      <thead>
        <th>ID</th>
        <th>Nombre (s)</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Worked Hours</th>
      </thead>
      <tbody>
        <?php while ($w = mysqli_fetch_array($data)) { ?>
        <tr>
            <td> <?php echo $w['id']; ?></td>
            <td> <?php echo $w['nombre']; ?></td>
            <td> <?php echo $w['apellido_paterno']; ?></td>
            <td> <?php echo $w['apellido_materno']; ?></td>
            <td> <?php echo $w['work_hours']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <button class = "back" onclick="window.location.href='manage_workers.php'">BACK</button>

  </body>
</html>
