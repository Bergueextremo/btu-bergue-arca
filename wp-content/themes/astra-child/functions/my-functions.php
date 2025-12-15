<?php 
/*
 *  hook para o link de acesso ao microthemer funcionar no menu da administracao do wordpress
 *  Criado por Thiago Santos em 08-05-2020
 */
add_action( 'admin_menu', 'wpse_admin_menu', 100 );
function wpse_admin_menu()
{
    global $menu, $submenu;
    $parent = 'tvr-microthemer.php';
    if( !isset($submenu[$parent]) )
        return;
        
        foreach( $submenu[$parent] as $k => $d ){
            if( $d['2'] == 'tvr-microthemer.php' )
            {
                $submenu[$parent][$k]['2'] = 'admin.php?page=tvr-microthemer.php&mt_preview_url='.get_site_url().'/&_wpnonce='.wp_create_nonce( 'mt-preview-nonce' ).'';
                break;
            }
        }
}
