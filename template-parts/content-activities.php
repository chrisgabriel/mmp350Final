<?php
/**
 * Template part for displaying MY posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme
 */

?>



    <div class="newActivity">
    <div class="newActivityTitle">
    <?php
    the_title();
    ?>
    </div>
        <div class="new-activity">
        <?php 
        the_content();
        ?>
        </div>
    
    </div>
    <br>

