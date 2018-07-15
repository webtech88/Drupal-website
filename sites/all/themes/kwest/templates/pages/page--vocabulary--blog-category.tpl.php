<?php include '_header.tpl.php' ?>
<main>
  <?php print $background_image_url ?>
  <div class="page-column">
    <div class="page-content<?php if ($node->field_gallery || $node->field_promo_boxes):?> sidebar-background<?php endif ?>">
        
      <div class="grid clear">
        <div class="v320-1 v720-3-of-4 v1280-4-of-5">
          <div class="container padding-big">
            <div class="clip">
              <div class="grid padding big">
                <div class="v320-1 wysiwyg">
                  <h2><?php print $title; ?></h2>
                  <hr class="short thick">
                  <div class="blog-category">
                    <?php print render($category_block);  ?>
                  </div>
                </div>
                <div class="v320-1 wysiwyg">
                 <?php echo render($page['content']) ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if (!empty($page['sidebar'])): ?>
          <div class="v320-1 v720-1-of-4 v1280-1-of-5">
            <?php echo render($page['sidebar']) ?>
          </div>
        <?php elseif ($sidebar = kwest_get_sidebar($page)): ?>
          <div class="v320-1 v720-1-of-4 v1280-1-of-5">
            <div class="container padding inverted text-center">
              <?php if (!empty($sidebar['title'])): ?>
                <div class="grid sidebar-contact-box">
                  <div class="v320-1">
                    <?php echo $sidebar['title'] ?>
                    <?php echo $sidebar['body'] ?>
                  </div>
                </div>
              <?php endif ?>
              <?php echo $sidebar['testimonials'] ?>
            </div>
            <?php echo $sidebar['image'] ?>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</main>
<?php include '_footer.tpl.php' ?>
