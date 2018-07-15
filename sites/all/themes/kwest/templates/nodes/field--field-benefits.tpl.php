<?php if ($items): ?>
    <div class="clip margin-top">
        <div class="grid padding">
            <?php foreach (array_chunk($items, ceil(count($items) / 2)) as $chunk): ?>
                <div class="v320-1 v480-1-of-2">
                    <ul>
                        <?php foreach ($chunk as $item): ?>
                            <li><?php echo render($item) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>
