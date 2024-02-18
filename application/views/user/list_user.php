<?php $this->load->view("includes/header");?>
<body>
    <div class="container">
        <h1>Usuarios</h1>
        <div id="tableContainer">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user->id ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->mobile; ?></td>
                            <td><?php echo $user->address; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="<?=site_url('index')?>" class="btn btn-danger">Ir atrás</a>
    </div>

    <script>
      function loadTable() {
        $.ajax({
          url: '<?php echo base_url('index.php/user/listUpdateUsers'); ?>',
          dataType: 'json',
          success: function(data) {
            var table = '<table class="table">';
            table += '<thead><tr><th scope="col">ID</th><th scope="col">Nombre</th><th scope="col">Email</th><th scope="col">Telefono</th><th scope="col">Dirección</th></tr></thead><tbody>';
          
            $.each(data, function(key, value) {
              table += '<tr><td>' + value.id + '</td><td>' + value.username + '</td><td>' + value.email + '</td><td>' + value.mobile + '</td><td>' + value.address + '</td></tr>';
            });
          
            table += '</tbody></table>';
            $('#tableContainer').html(table);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error("Error:", textStatus, errorThrown);
            console.error("Response:", jqXHR.responseText);
          }
        });
      }

    loadTable(); // Iniciailmente carga la tabla

    // Refresca la tabla cada 5 segundos
    setInterval(function() {
      loadTable();
    }, 5000);

    </script>