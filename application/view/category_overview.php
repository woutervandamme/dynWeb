
     <table class=" table table-hover">
        <thead>
        <tr>
                <td><strong>naam</strong></td>
                <td><strong>acties</strong></td>

        </tr>
    </thead>     
               <?php foreach ($this->category as $category) { ?>
            <tr>
             
                <td><?php echo $category->getCategorynaam(); ?></td>
                <td><a href="<?php echo baseUrl('category/delete/' . $category->getId()); ?>">verwijder</a> / <a href="<?php echo baseUrl('category/detail/' . $category->getId()); ?>">wijzig</a></td>
            </tr>
 
            <?php } ?>
    </table>      

    <a class="btn btn-primary" href="category/add"> voeg toe </a>