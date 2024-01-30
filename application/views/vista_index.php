<?php $this->load->view("includes/header");?>

<div align="center">
    <form name="form1" action="<?=base_url()?>index/vistarut" method="post">
        
        <input type="submit" value="General" class="boton button4">
        <input type="submit" value="Preferencial" class="boton button4">
    </form>
</div>



<?php $this->load->view("includes/footer");?>