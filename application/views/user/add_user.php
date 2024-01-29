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
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
    </div>
</div>
    <h1>Números grandes</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="big-number">1</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">2</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">4</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">5</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="big-number">6</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">7</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">8</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">9</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="big-number">0</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="big-number">K</div>
            </div>
        </div>
    </div>

<?php $this->load->view("includes/footer");?>