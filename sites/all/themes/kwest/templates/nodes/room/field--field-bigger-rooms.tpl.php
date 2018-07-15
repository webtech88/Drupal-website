<?php foreach ($items as $item): ?>
    <?php $node = current($item['node']) ?>
    <div class="v320-1 v480-1 v720-1-of-2">
        <a href="<?php echo url("node/{$node['#node']->nid}") ?>" class="upsize-me sizing-option" style="background-image: url(<?php echo file_create_url($node['field_image'][0]['#item']['uri']) ?>)">
            <h3><?php echo $node['#node']->title ?></h3>
            <div class="button icon-right icon-arrow-right alt-background">UPSIZE ME</div>
        </a>
    </div>
<?php endforeach ?>
