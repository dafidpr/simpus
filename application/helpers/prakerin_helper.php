<?php

function cek_login(){
	
   $ci = get_instance();
    if( !$ci->session->userdata('email') ){
		
      redirect('auth');
    }
}
function cek_user(){
	$ci = get_instance();
	$user = $ci->db->get_where('petugas', ['EMAIL' => $ci->session->userdata('email')])->row_array();
	if($user['LEVEL'] != 'Admin'){
		
		redirect('auth/blocked');
	}
}
