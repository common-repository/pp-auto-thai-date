<?php
/*
Plugin Name: PP Auto Thai Date
Plugin URI: http://www.preukson.com/
Description: เป็นปลั๊กอินเอาไว้สำหรับเปลี่ยนวันที่จากภาษาอังกฤษเป็นภาษาไทย
Author: Preukson
Version: 1.0
Author URI: http://www.preukson.com
*/



function pp_thai_date($text) {
	
	$eng = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
	'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 
	'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 
	'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 
	'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th',
	'2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016','2017');// มีปัญหาที่ May กับ พฤษภาคม
	
	$thai = array('จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์','อาทิตย์',
	'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส', 'อา', 
	'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม', 
	'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ษ.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.', 
	'1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
	'2546','2547','2548','2549','2550','2551','2552','2553','2554','2555','2556','2557','2558','2559','2560');
	
	$text = str_replace($eng, $thai, $text);
	return $text;
}

add_filter('the_time', 'pp_thai_date');
add_filter('the_modified_time', 'pp_thai_date');
add_filter('the_date', 'pp_thai_date');
add_filter('the_modified_date', 'pp_thai_date');
add_filter('get_comment_date','pp_thai_date');
?>