<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login.html']='welcome/login';
$route['register.html']='welcome/register';
$route['logout.html']='welcome/logout';
$route['search']='welcome/search';
$route['timkiem/(:any)']='welcome/timkiem/$1';



$route['product-detail/(:any)-(:num).html']='product/detail/$1';
$route['category/(:any)-(:num).html']='product/category/$1';


$route['contact.html']='welcome/contact';
$route['product-book/pages/(:num)']='welcome/product_book/$1';
$route['product-book/pages']='welcome/product_book/pages/1';
$route['product-story/pages/(:num)']='welcome/product_story/$1';
$route['product-story/pages']='welcome/product_story/1';

$route['giohang.html']='shopping_cart/index';
$route['insert']='shopping_cart/insert';
$route['delete/(:any)']='shopping_cart/delete/$1';
$route['delete']='shopping_cart/deleteAll';
$route['update_tang/(:any)']='shopping_cart/update_tang/$1';
$route['update_giam/(:any)']='shopping_cart/update_giam/$1';
$route['delete_comment/(:num)']='welcome/delete_comment/$1';

$route['admin.html']='admin/login';
$route['magane.html']='admin/magane';
$route['logout_admin.html']='admin/logout_admin';

$route['admin/them-chu-de.html']='chude/create';
$route['admin/them-tac-gia.html']='tacgia/create';
$route['admin/them-nha-xuat-ban.html']='nhaxuatban/create';
$route['admin/them-sach.html']='sach/create';
$route['admin/them-tai-khoan.html']='taikhoan/create';


$route['admin/view-tac-gia.html']='tacgia/view';
$route['admin/view-nha-xuat-ban.html']='nhaxuatban/view';
$route['admin/view-chu-de.html']='chude/view';

$route['admin/view-sach/pages/(:num)']='sach/view/$1';
$route['admin/view-sach/pages']='sach/view/1';

$route['admin/view-chi-tiet-don-hang.html']='chitietdonhang/view';
$route['admin/view-don-hang.html']='donhang/view';
$route['admin/view-tai-khoan.html']='taikhoan/view';

$route['update-tac-gia/(:num).html']='tacgia/update/$1';
$route['update-nha-xuat-ban/(:num).html']='nhaxuatban/update/$1';
$route['update-chu-de/(:num).html']='chude/update/$1';

$route['update-sach/(:num).html']='sach/update/$1';

$route['update-chi-tiet-don-hang/(:num).html']='chitietdonhang/update/$1';
$route['update-don-hang/(:num).html']='donhang/update/$1';
$route['update-tai-khoan/(:num).html']='taikhoan/update/$1';

$route['delete-tac-gia/(:num).html']='tacgia/delete/$1';
$route['delete-nha-xuat-ban/(:num).html']='nhaxuatban/delete/$1';
$route['delete-chu-de/(:num).html']='chude/delete/$1';
$route['delete-sach/(:num)/(:num)']='sach/delete/$1';
$route['delete-chi-tiet-don-hang/(:num).html']='chitietdonhang/delete/$1';
$route['delete-don-hang/(:num).html']='donhang/delete/$1';
$route['delete-tai-khoan/(:num).html']='taikhoan/delete/$1';

$route['default_controller'] = 'welcome';
$route['index.html']='welcome';
$route['404_override'] = 'welcome';
$route['translate_uri_dashes'] = FALSE;
