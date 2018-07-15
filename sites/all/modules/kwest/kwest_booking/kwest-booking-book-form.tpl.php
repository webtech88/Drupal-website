<div class="grid padding small text-right middle">
    <div>
        <h3>Book me</h3>
    </div>
    <?php foreach (array('DateIn', 'DateOut') as $field): ?>
        <div class="v1280-1-of-5">
            <div class="form-field textfield alt">
                <p>
                    <?php if (isset($form[$field]['#title'])): ?>
                        <label for="<?php echo $form[$field]['#id'] ?>" class="placeholder"><?php echo $form[$field]['#title'] ?></label>
                    <?php endif ?>
                    <?php echo render($form[$field]) ?>
                </p>
            </div>
        </div>
    <?php endforeach ?>
    <div>
        <div class="form-field submit">
            <p>
                <button
                    type="submit"
                    class="button alt-text-color icon-arrow-right icon-right"
                    data-ga-category="Reservations"
                    data-ga-action="Header Booking Button"
                    data-ga-label="Book Now Button"
                >Check availability</button>
                <?php echo render($form['languageId']) ?>
                <?php echo render($form['HotelId']) ?>
            </p>
        </div>
    </div>
</div>
