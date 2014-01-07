<div class="col-lg-10">

	<?php echo form_open("acategory/insert",'class="form-horizontal" id="category_create"');?>
    <legend class="text-muted">Please enter category</legend> 
    <div class="form-group">
        <label for="categoruInput" class="col-lg-2 control-label">Category</label>
        <div class="col-lg-6">
            <input type="text" class="form-control required" id="categoruInput" name="categoruInput" required autofocus>
        </div>
    </div>  

    <div class="form-group"> 
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-lg btn-primary">Submit </button> or <a href="<?= base_url();?>acategory">cancel</a>
        </div>
     </div>

    <?php echo form_close();?>
</div>