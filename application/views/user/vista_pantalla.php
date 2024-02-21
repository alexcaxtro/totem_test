<?php $this->load->view("includes/header");?>
<body>
<div id="vistaPantalla">
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
            <?php foreach ($users as $u): ?>
                <tr>
                    <td><?php echo $u->id; ?></td>
                    <td><?php echo $u->username; ?></td>
                    <td><?php echo $u->email; ?></td>
                    <td><?php echo $u->mobile; ?></td>
                    <td><?php echo $u->address; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<audio id="sound" src="<?php echo base_url('sounds/alert.mp3'); ?>"></audio>
<script>
function loadTable() {
    $.ajax({
        url: '<?php echo base_url('index.php/user/refreshView'); ?>',
        dataType: 'json',
        success: function(data) {
            var table = '<table class="table">';
            table += '<thead><tr><th scope="col">ID</th><th scope="col">Nombre</th><th scope="col">Email</th><th scope="col">Telefono</th><th scope="col">Dirección</th></tr></thead><tbody>';
            $(data).each(function(key, value) {
                table += '<tr><td>' + value.id + '</td><td>' + value.username + '</td><td>' + value.email + '</td><td>' + value.mobile + '</td><td>' + value.address + '</td></tr>';
            });
            table += '</tbody></table>';
            $('#vistaPantalla').html(table);
            // Reproduce el sonido cada vez que se carga una nueva tabla
            var audioElement = document.getElementById('sound');
            audioElement.addEventListener('canplaythrough', function() {
                audioElement.play();
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("Error:", textStatus, errorThrown);
            console.error("Response:", jqXHR.responseText);
        }
    });
}

    loadTable(); // Iniciailmente carga la vista

    // Refresca la tabla cada 5 segundos
    setInterval(function() {
        loadTable();
    }, 5000);
</script>