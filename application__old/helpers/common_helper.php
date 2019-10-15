<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('session_check'))
{
    function session_check()
    {
    	$ci=& get_instance();
    	$sess = $ci->session->userdata("currentuser");
		if(!empty($sess)){
			redirect('/myprofile');
		}
    }   
}

if ( ! function_exists('pre'))
{
    function pre($data=array())
    {
    	echo "<pre>";
		print_r($data);
		die;
    }   
}