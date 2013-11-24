
 
    <form role="form">
  <div class="form-group">
    <label for="">Naam</label>
    <input type="text" class="form-control" id="" value="<?php echo $this->player->getNaam()?>">
</div>
<div>
    <label for="">E-mail</label>
    <input type="text" class="form-control" id="" value="<?php echo $this->player->getEmail()?>">
  </div>
  <div>
    <label for="">Wachtwoord</label>
    <input type="text" class="form-control" id="" value="<?php echo $this->player->getPassword()?>" >
  </div>
  
  <button type="submit" class="btn btn-primary" style ="margin-top:20px;">Submit</button>
</form>
        </div>
    </div>
    