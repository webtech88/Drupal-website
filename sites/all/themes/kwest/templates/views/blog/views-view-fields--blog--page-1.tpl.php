<div class="teaser">
  <?php if ($fields['field_style']->content !== 'right' && isset($fields['field_image'])): ?>
    <figure class="margin-bottom">
      <?php echo $fields['field_image']->content ?>
    </figure>
  <?php elseif ($fields['field_style']->content == 'right' && isset($fields['field_image_1'])): ?>
    <figure class="float-right margin-left v320-1-of-3">
      <?php echo $fields['field_image_1']->content ?>
    </figure>
  <?php endif ?>

  <p class="date float-left"><?php echo $fields['created']->content ?></p>

  <div class="clip wysiwyg">
    <h3><?php echo l($fields['title']->content, "node/{$fields['nid']->content}", array(
        'html' => true,
        'attributes' => array(
          'class' => 'transparent-link'
        ),
      )) ?></h3>

    <p>
      <?php echo $fields['body']->content ?>
      <?php echo l('Read more', "node/{$fields['nid']->content}", array(
        'attributes' => array(
          'class' => 'icon-link icon-arrow-right icon-right',
        ),
      )) ?>
    </p>
  </div>
</div>
