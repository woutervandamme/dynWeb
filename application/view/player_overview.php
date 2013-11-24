
     <table class=" table table-hover">
        <thead>
        <tr>
                <td><strong>naam</strong></td>
                <td><strong>email</strong></td>
                <td><strong>niveau</strong></td>
                <td><strong>blocked</strong></td>
                <td><strong>acties</strong></td>

        </tr>
    </thead>

        
               <?php foreach ($this->player as $player) { ?>
 
             <tr>
                <td><?php echo $player->getNaam(); ?></td>
                <td><?php echo $player->getEmail(); ?></td>
                <td><?php if($player->isAdmin() == "t") {echo "admin"; }else {echo "user";} ?></td>
                <td><?php if($player->isBlocked() == "t") {echo "blocked"; }else {echo "not blocked";} ?></td>
                <td><a href="<?php echo baseUrl('player/blokkeer/' . $player->getId()); ?>">blokkeer</a> / reset / <a href="<?php echo baseUrl('player/delete/' . $player->getId()); ?>">verwijder</a>  / <a href="<?php echo baseUrl('Player/detail/' . $player->getId()); ?>">wijzig</a></td>
            </tr>
            <?php } ?>

    </table>      