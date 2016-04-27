<?php
/*
    Template Name: sidebar-sidebarmain
*/
?>


    <div class="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Main')) : else : ?>

    <?php endif; ?>
            
    </div>