<div class="col-lg-10">

	<?php echo form_open("acategory/modify",'class="form-horizontal" id="category_modify"');?>
    
    <legend class="text-muted">Please modify category</legend> 
    
    
    <?php foreach($categories as $category): ?>

    <div class="form-group">
        <label for="categoryInput" class="col-lg-2 control-label">Category</label>
        <div class="col-lg-6">
            <input type="text" class="form-control required" id="categoryInput" name="categoryInput" value="<?= $category->name;?>" required autofocus>
        </div>
    </div>  

    <input type="hidden" value="<?= $category->id;?>" name="categoryInputId"/>

    <div class="form-group"> 
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-lg btn-primary">Submit </button> or <a href="<?= base_url();?>acategory">cancel</a>
        </div>
     </div>
    
    <?php endforeach; ?>

    <?php echo form_close();?>
</div>