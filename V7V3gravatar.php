<?php
/*
Plugin Name: 改用V7V3gravatar服务器
Plugin URI: https://github.com/zhangsubo/Wordpress-function/blob/master/Replace%20Open%20Sans
Description: 将gravatar头像的被墙服务器替改用V7V3gravatar服务器。
Author: 张小璋
Author URI: http://zhangsubo.cn/
Version: 1.0
Text Domain: 改用V7V3gravatar服务器
*/

//改用V7V3gravatar服务器
function v7v3_get_avatar($avatar) {
 $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),
"cd.v7v3.com",$avatar);
 return $avatar;
}
add_filter( 'get_avatar', 'v7v3_get_avatar', 10, 3 );
?>
