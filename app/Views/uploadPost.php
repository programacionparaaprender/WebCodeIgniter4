<?php
                include('includes/header.php');
//print_r($categories);
?> 
<section class="s-featured">
        <div class="row">
            <div class="col-full">
                <form 
                  
                    method="post" 
                    action="" 
                    enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" type="text" name="title" required> 
                    </div>
                    <div class="form-group">
                    <label for="intro">Intro:</label>
                    <input type="text" name="intro" required>
                    </div>
                    <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea id="summernote" name="content" row="3"></textarea>  
                    </div>
                    <div class="form-group">
                    <label for="categories">Category:</label>
                    <select name="cartegories" id="cat">
                        <?php
                            foreach($categories as $c){
                                echo "<option value='".$c['id']."'>".$c['name']."</option>";
                            }
                        ?>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="tags">Tags:</label>
                    <input type="text" name="tags" required>
                    </div>
                    <div class="form-group">
                    <label for="banner">Banner:</label>
                    <input type="file" name="banner" required>
                    </div>
                    
                    <input class="btn btn-primary" type="submit" name="" value="Send" />
                    <input class="btn btn-danger" type="reset" name="" value="Reset" />
                    <br />
                </form>

            </div>
        </div>
</section>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<?php

                include('includes/footer.php');
                ?> 