<div class="mb-20">
    <div class="nav-tabs nav-line-tabs mx-5">
        <div class="row nav-item">
            <?=$init_categories->get_cats();?>
        </div>
    </div>
    <div class="separator separator-dashed mb-10"></div>
    <div class="row g-10">
        <?=$init_units->loop_all_unit()?>
    </div>
</div>