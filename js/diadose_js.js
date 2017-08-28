var window_width = jQuery(window).width();

function diadose_animations() {
    var birds_n_logo_width = parseInt(jQuery('.ellak-diadose-birds').css('width')) + parseInt(jQuery('.ellak-diadose-logo-wrap').css('width'));
    var orange_div_final_width = window_width * .95 - birds_n_logo_width;
    
    //need the max-width to be available for the posisioning calculation for the text wrap
    jQuery('.ellak-diadose-text-wrap').css('max-width', orange_div_final_width);
    var text_wrap_width = parseInt(jQuery('.ellak-diadose-text-wrap').css('width'));
    var text_wrap_final_left = (window_width - text_wrap_width) / 2;
    //alert(.95 * window_width - birds_n_logo_width);
    
    jQuery('.ellak-diadose-orange-frame').animate({
        width: orange_div_final_width,
    }, 3800);

    jQuery('.ellak-diadose-text-wrap').css('left', window_width);
    jQuery('.ellak-diadose-text-wrap').animate({
        left: text_wrap_final_left,
    }, 2000);

}

jQuery(window).resize(function () {
    window_width = jQuery(window).width();
    diadose_animations();
});

jQuery(document).ready(function () {
    diadose_animations();
});