<?php require PATH . '/view/common/header.php';?>
<div class="toolbar">
    <a href="<?php echo APP.'/admin/'.$Config['page'];?>" class="btn btn-filter">
        <svg class="icon">
            <use xlink:href="<?php echo ASSETS.'/img/sprite.svg#add';?>" />
        </svg>
    </a>
    <form class="flex-fill" method="post">
        <input type="text" name="search" class="form-control" placeholder="<?php echo __('Search for Channel');?> .." value="<?php echo $Filter['search'];?>" required>
    </form>
</div>
<div class="table-responsive">
    <table class="table table-theme">
        <thead class="text-muted">
            <tr>
                <th width="80"></th>
                <th><?php echo __('Category');?></th>
                <th class="text-right"><span class="d-none d-sm-block"></span></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Listings as $Listing) { ?>
            <tr class="v-middle text-color">
                <td class="pr-0 text-muted text-12">
                    #
                    <?php echo $Listing['id'];?>
                </td>
                <td class="flex">
                    <a href="<?php echo APP.'/admin/'.$Config['page'].'/'.$Listing['id'];?>">
                        <div class="text-wide-wrap">
                            <?php echo $Listing['name'];?>
                            <?php if($Listing['status'] == '2') { ?>
                            <span class="badge bg-warning-lt ml-2">Pasif</span>
                            <?php } ?>
                        </div>
                    </a>
                </td>
                <td class="no-wrap table-link">
                    <a href="<?php echo APP.'/admin/'.$Config['page'].'/'.$Listing['id'];?>">
                        <svg class="icon">
                            <use xlink:href="<?php echo ASSETS.'/img/sprite.svg#edit';?>" />
                        </svg>
                    </a>
                    <a href='<?php echo APP.'/admin/'.$Config['nav'].'?submit={"_ACTION":"delete","id":"'.$Listing['id'].'"}'?>' class="confirm">
                        <svg class="icon">
                            <use xlink:href="<?php echo ASSETS.'/img/sprite.svg#delete';?>" />
                        </svg>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php echo $Pagination;?>
<div class="text-muted text-12">
    <?php if($TotalRecord == 0) { ?>
    <?php echo __('No content found');?>
    <?php } else { ?>
    <?php echo $TotalRecord;?>
    <?php echo __('contains content');?>
    <?php } ?>
</div>
<?php require PATH . '/view/common/footer.php';?>