<?php
/*
 * Plugin Name: Ellak diadose bar
 * Plugin URI:  https://www.eellak.gr
 * Description: AdBar for free software campaign
 * Version:     0.1
 * Author:      Bromoiras David
 * Author URI:  http://www.anchor-web.gr
 * License:     GPL 3.0
 */

/* register the style for this plugin */

function ellak_diadose_style() {
    wp_register_style('ellak-diadose-css', plugin_dir_url(__FILE__)
            . 'css/diadose_css.css');
    wp_enqueue_style('ellak-diadose-css');
}

add_action('wp_enqueue_scripts', 'ellak_diadose_style');

function ellak_diadose_scripts() {
    wp_register_script('ellak_diadose_animations', plugin_dir_url(__FILE__) . 'js/diadose_js.js', array('jquery'), null, false);
    wp_enqueue_script('ellak_diadose_animations');
}

add_action('wp_enqueue_scripts', 'ellak_diadose_scripts');

if (!function_exists('diadose_bar')) {
    function diadose_bar() {
        ?>
        <div class="ellak-diadose-wrap">
            <!-- the diadose banner bar -->
            <div id="ellak-diadose-bar" class="ellak-diadose">
                <div class='ellak-diadose-text-wrap'><a href="http://opensource.ellak.gr/ine-elefthero-ke-simferi">ΤΟ ΕΛΕΥΘΕΡΟ ΛΟΓΙΣΜΙΚΟ ΣΥΜΦΕΡΕΙ!</a></div>
                <div class="ellak-diadose-non-text-wrap">
                    <div class='ellak-diadose-logo-wrap'>
                        <a href="http://opensource.ellak.gr"><img src="<?php echo plugin_dir_url(__FILE__); ?>/img/logow.png"></a>
                    </div>
                    <div class="ellak-diadose-orange-frame"></div>
                <div class='ellak-diadose-birds'>
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>/img/birds-custom.png" alt="freedom">
                </div>
            </div>
        </div>
        </div>
        <?php
    }

}
?>