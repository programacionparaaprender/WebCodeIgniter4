<?php
include('includes/header.php');
print_r($post);
?> 

<!-- s-content
    ================================================== -->
    <div class="s-content s-content--top-padding s-content--narrow">
        
        <article class="row entry format-standard">
            <div class="entry__media col-full">
                <div class="entries__post-thumb">

                    <?php $url=base_url()."/public/uploads/".$post[0]['banner']; ?>
                    <img src="<?=$url ?>" alt="">
                         

           

                </div> <!-- end entries -->
            </div>
            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    <?=$post[0]['title'] ?>
                </h1> <!-- end entries -->
                <ul class="entry__header-meta">
                    <?php $date=date('d-m-Y',strtotime($post[0]['created_at'])) ?>
                    <li class="date">
                    <?=$date ?>
                    </li>
                    <li class="byline">
                    By
                    <a href="#0">Jonathan Doe</a>
                    </li>
                </ul>
            </div>
            <div class="col-full entry__main">
                <p class="lead drop-cap">
                    <?=$post[0]['intro'] ?>
                </p>
                <p>
                    <?=$post[0]['content'] ?>
                </p>
            </div>
        </article> <!-- end article -->

        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <div class="col-six s-content__prev">
                    <a href="#0" rel="prev">
                        <span>Previous Post</span>
                    </a>
                </div>
                <div class="col-six s-content__next">
                    <a href="#0" rel="next">
                        <span>Next post</span>
                    </a>
                </div>
            </div>
        </div>

    </div> <!-- end s-content -->
    <div class="entry__tags">
        <h5>Tags: </h5>
        <?php 
        $tags = $post[0]['tags'];
        $singletag = explode(",", $tags);
        ?>
        <span class="entry__tax-list entry__tax-list--pill">
            <?php 
            foreach($singletag as $t){
                echo '<a>'.$t.'</a>'; 
            }
            
            ?>
        </span>
    </div> <!-- end s-content -->
    <div class="entry__taxonomies">
        <div class="entry__cat">
            <h5>Posted In:</h5>
            <?php $urlcat=base_url()."/public/Home/category/".$category[0]['id']; ?>
            <span class="entry__tax-list">
                <a href="<?=$urlcat ?>"><?=$category[0]['name']?></a>
            </span>
        </div>
    </div> <!-- end s-content__taxonomies -->

<?php
include('includes/footer.php');
?> 