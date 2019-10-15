<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 	= 'Login';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

$route['player-profile'] = 'Myprofile/myprofile';
$route['player-mandate'] = 'Myprofile/player_mandate';
$route['player-mandate/(:any)'] = 'Myprofile/player_mandate/$1';
$route['agent-mandate/(:any)'] = 'Myprofile/agent_mandate/$1';
$route['agent-mandate'] = 'Myprofile/agent_mandate';
$route['player-agent-mandate/(:any)'] = 'Myprofile/agent_mandate2/$1';
$route['signin'] = 'Login/login';


//PLAYER
$route['player/(:any)'] = 'Myprofile/player_profile/$1';
$route['agent/(:any)'] = 'Agent_controller/agent_profile/$1';
$route['player-report'] = 'Myprofile/player_report';
$route['player-report/(:any)'] = 'Myprofile/player_report/$1';
$route['player-characterstics'] = 'Myprofile/player_characterstics';
$route['player-financial'] = 'Myprofile/player_financial';
$route['mandate-histry'] = 'Myprofile/accepted_rejected';

//CLUB
$route['club-sign-up'] = 'Club_controller/sign_up';
//$route['club-login'] = 'Club_controller/login';
$route['club-profile'] = 'Club_controller/my_profile';
$route['club-edit-profile'] = 'Club_controller/editprofile';

//AGENT
$route['agent-sign-up'] = 'Agent_controller/sign_up';
//$route['agent-login'] = 'Agent_controller/login';
$route['agent-profile'] = 'Agent_controller/my_profile';
$route['agent-edit-profile'] = 'Agent_controller/edit_profile';


//ADMIN
$route['admin/players'] = "admin/User_Master";
$route['admin'] = "admin/Admin_Master/user_login_process";
$route['admin/view-player/(:any)'] = "admin/User_Master/view/$1";
$route['admin/edit-player/(:any)'] = "admin/User_Master/edit_player/$1";

$route['admin/agents'] = "admin/User_Master";
$route['admin/view-agent/(:any)'] = "admin/User_Master/view/$1";
$route['admin/edit-agent/(:any)'] = "admin/User_Master/edit/$1";
 






