// Mirek
function unifer_scripts() {

    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js' );
    wp_enqueue_script('jQuery');
    wp_register_style( 'jQuery_modal_css', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css' );
    wp_enqueue_style('jQuery_modal_css'); 
    wp_register_script( 'jQuery_modal_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js' );
    wp_enqueue_script('jQuery_modal_js');
} 
function add_this_script_footer(){ 

    wp_register_script('mylittlemodal', get_template_directory_uri() . "/js/js/openmodal.js", array('jquery'), filemtime(get_theme_file_path("/js/js/openmodal.js")), true); 
    wp_enqueue_script("mylittlemodal");
    
} 
if(is_front_page() && is_user_logged_in()){
  add_action( 'wp_enqueue_scripts', 'unifer_scripts' );
  add_action('wp_footer', 'add_this_script_footer'); 
}
