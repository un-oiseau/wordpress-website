jQuery('.gallery').each(function($) { // the containers for all your galleries
    jQuery(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});


// (function($){
//   jQuery('#enquiry').submit(function(event){
//     event.preventDefault();
//     let endpoint = '<?php echo admin_url('admin-ajax.php');?>';
//     alert(endpoint);
//   })
// })(jQuery)




