<div class="col-lg-6">
	<a href="<?= base_url();?>acategory/create" class="btn btn-success">Add New Category</a>
	<h1>Categories</h1>
	<hr>
	<table class="table table-bordered table-striped ">
        <thead>
            <tr> 
                <th>Category</th> 
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            if(isset($categorys)):
            foreach ($categorys as $category):
            ?>
                <tr class="tablerow"> 
                    <td><a href="<?= base_url(); ?>acategory/update/<?= $category->id ?>"><?= $category->name ?></a></td> 
                    <td style="text-align:center;"><a href="<?= base_url(); ?>acategory/delete/<?= $category->id ?>" class="carefulDelete"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            <?php
            endforeach;
            endif;
            ?>        
        </tbody>
    </table>
</div>