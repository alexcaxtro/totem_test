<?php $this->load->view("includes/header");?>
<div class="container"> 
    <div class="row">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title text-center">Add User</h5>
                <form method="post" action="<?=base_url()?>user/index">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                    </div>
                    <button id="refreshButton" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <a href="<?=site_url('index')?>" class="btn btn-danger">Ir atrás</a>
        </div>
    </div>
</div>

<?php $this->load->view("includes/footer");?>

<script>
document.getElementById('refreshButton').addEventListener('click', function() {
    var nocache = new Date().getTime();
    $.ajax({
        url: '<?php echo base_url('user/refreshView'); ?>',
        success: function(response) {
            $('#vistaPantalla').html(response);
        }
    });
});
</script>