<div class="grid padding">
    <div class="v320-1 wysiwyg">
        <h2>Contact</h2>
        <hr class="short thick">
        <p>Please fill in the form below to send us your enquiry.</p>
    </div>
    <?php foreach (array('first_name', 'last_name', 'email', 'phone') as $field): ?>
        <div class="v320-1 v480-1-of-2">
            <div class="form-field textfield">
                <p class="table-layout">
                    <span>
                        <label for="<?php echo $form[$field]['#id'] ?>"><?php echo $form[$field]['#title'] ?>:</label>
                    </span>
                    <span class="wide"><?php echo render($form[$field]) ?></span>
                </p>
            </div>
        </div>
    <?php endforeach ?>
    <div class="v320-1">
        <div class="form-field textfield">
            <p class="table-layout">
                <span>
                    <label for="<?php echo $form['subject']['#id'] ?>"><?php echo $form['subject']['#title'] ?>:</label>
                </span>
                <span class="wide"><?php echo render($form['subject']) ?></span>
            </p>
        </div>
    </div>
    <div class="v320-1">
        <div class="form-field textarea">
            <p>
                <label for="<?php echo $form['message']['#id'] ?>"><?php echo $form['message']['#title'] ?>:</label>
                <span class="scrollbar-wrapper">
                    <span class="scrollbar-clip">
                        <span class="scrollbar-offset">
                            <?php echo render($form['message']) ?>
                        </span>
                    </span>
                </span>
            </p>
        </div>
    </div>
    <div class="v320-1">
        <div class="form-field checkbox">
            <p>
                <?php echo render($form['privacy_policy']) ?>
                <label for="<?php echo $form['privacy_policy']['#id'] ?>">
                    I have read the
                    <?php echo l(
                        'privacy policy',
                        variable_get('kwest_contact_privacy_policy_url'),
                        array(
                            'attributes' => array(
                                'target' => '_new',
                            ),
                        )
                    ) ?>
                </label>
            </p>
            <p>
                <?php echo render($form['marketing_exclude']) ?>
                <label for="<?php echo $form['marketing_exclude']['#id'] ?>">
                    <?php echo $form['marketing_exclude']['#label'] ?>
                </label>
            </p>
        </div>
    </div>
    <div class="v320-1">
        <?php hide($form['submit']) ?>
        <?php echo drupal_render_children($form) ?>
    </div>
    <div class="v320-1 text-right">
        <button type="submit" class="button icon-arrow-right icon-right">Send message</button>
    </div>
    <div class="v320-1">
        <?php $text = variable_get('kwest_contact_text'); echo check_markup($text['value'], $text['format']); ?>
    </div>
</div>
