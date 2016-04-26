<img src="<?php echo $icon ?>" title="<?php echo lang('hooks') ?>"
     alt="<?php echo lang('hooks') ?>"/> <?php echo($total_hooks > 0 ? lang('hooks') . ' (' . $total_hooks . ')' : 'N/A') ?>
<?php if(count($loaded_hooks)): ?>
<div class="detail hooks">
    <div class="scroll">
    <?php
    foreach ($loaded_hooks as $name => $hooks) {
        echo '
            <p>
                <span class="left-col"><strong>' . $name .' ['.count($hooks).']'. '</strong></span>';
                foreach($hooks as $key => $hook) {
                    $border = $key == count($hooks)-1 ? '' : 'border-bottom:1px solid #57595E';
                    echo '<span class="right-col" style="margin-left:20px;'.$border.'">';
                    foreach ($hook as $key => $value) {
	                    $value = is_array($value) ? print_r($value, true) : $value;
                        echo '<span class="left-col" style="width:30%">' . $key . ':</span>';
                        echo '<span class="right-col" style="width:70%">' . $value . '</span>';
                    }
                    echo '</span>';
                }

        echo '</p>';
    }
    ?>
    </div>
</div>
<?php endif; ?>
