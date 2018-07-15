<div class="grid padding small">
    <div class="v320-1 v480-1-of-2 v720-1">
        <script type="text/javascript" src="https://bda.bookatable.com/deploy/lbui.direct.min.js"></script>
        <script type="text/javascript">
            (function() {
                var interval = setInterval(function() {
                    if (typeof jQuery == 'undefined')
                        return;

                    clearInterval(interval);

                    jQuery.lbuiDirect = jQuery.fn.lbuiDirect = window.lbuiDirect;

                    jQuery(function() {
                        jQuery('#bookatable').lbuiDirect({
                            connectionid:  "<?php echo $connection_id ?>",
                            modalWindow: {
                                enabled: true
                            }
                        });
                    });
                }, 10);
            })();
        </script>
    </div>
</div>
