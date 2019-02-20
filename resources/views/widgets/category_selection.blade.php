<div class="row-fluid">
    <div class="box-list">
        <div class="category-box col-md-24 anim js-box-list" data-box-list="category">
            <nav class="menu anim" role="navigation">
                <ul class="list-inline list-unstyled menu__list">

                    <?php
                        foreach ($categories as $category) {
                    ?>        

                    <li class="menu__item">
                        <input id="<?php echo $category->id; ?>" class="menu__input" type="checkbox">
                        <a href="{{ route ('category', ['category_id' => $category->id])}}"><label for="cat1"><i class="ico ico-arrow pull-left"></i><?php echo $category->name; ?></label></a>
                    </li>
                    <?php
                        }
                    ?>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
