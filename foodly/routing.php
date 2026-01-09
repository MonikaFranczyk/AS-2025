<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('main'); #default action
App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions

//DODAĆ STRONĘ DO WYŚWIETLENIA GDY BRAK DOSTĘPU

Utils::addRoute('main', 'MainCtrl');
//Utils::addRoute('action_name', 'controller_class_name');

//auth
Utils::addRoute('login', 'AuthCtrl');
Utils::addRoute('logout', 'AuthCtrl');
//Utils::addRoute('register', 'AuthCtrl');

//accesdenied
Utils::addRoute('accessdenied', 'AccessDeniedCtrl');

//admin
Utils::addRoute('main_admin', 'AdminCtrl', ['ADMIN']);
//Utils::addRoute('admin_users_view', 'AdminUsersCtrl',["ADMIN"]);
//Utils::addRoute('admin_user_add', 'AdminUsersCtrl', ["ADMIN"]);
//Utils::addRoute('admin_user_edit', 'AdminUsersCtrl', ["ADMIN"]);
//Utils::addRoute('admin_user_block', 'AdminUsersCtrl', ["ADMIN"]);
//Utils::addRoute('admin_restaurants', 'AdminRestaurantsCtrl', ["ADMIN"]);
//Utils::addRoute('admin_restaurant_activate', 'AdminRestaurantsCtrl', ["ADMIN"]);
//Utils::addRoute('admin_restaurant_deactivate', 'AdminRestaurantsCtrl', ["ADMIN"]);
//Utils::addRoute('admin_stats_orders', 'AdminStatsCtrl', ["ADMIN"]);
//Utils::addRoute('admin_stats_restaurants', 'AdminStatsCtrl', ["ADMIN"]);
//Utils::addRoute('admin_stats_deliveries', 'AdminStatsCtrl', ["ADMIN"]);

//restaurant employee
Utils::addRoute('main_pracownik', 'PracownikRestauracjiCtrl',['PRACOWNIK_RESTAURACJI']);
//Utils::addRoute('restaurant_menu', 'RestaurantMenuCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_menu_add', 'RestaurantMenuCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_menu_edit', 'RestaurantMenuCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_menu_delete', 'RestaurantMenuCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_orders', 'RestaurantOrdersCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_order_view', 'RestaurantOrdersCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_order_accept', 'RestaurantOrdersCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_order_prepare', 'RestaurantOrdersCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_order_ready', 'RestaurantOrdersCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_stats_sales', 'RestaurantStatsCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);
//Utils::addRoute('restaurant_stats_orders', 'RestaurantStatsCtrl', ["ADMIN","PRACOWNIK_RESTAURACJI"]);

//delivery
Utils::addRoute('main_dostawca', 'DostawcaCtrl', ['DOSTAWCA']);
//Utils::addRoute('delivery_available', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);
//Utils::addRoute('delivery_accept', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);
//Utils::addRoute('delivery_reject', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);ss
//Utils::addRoute('delivery_pickup', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);
//Utils::addRoute('delivery_deliver', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);
//Utils::addRoute('delivery_history', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);
//Utils::addRoute('delivery_earnings', 'DeliveryCtrl', ["ADMIN","DOSTAWCA"]);

//client
Utils::addRoute('main_klient', 'KlientCtrl', ['KLIENT']);
//Utils::addRoute('restaurants', 'ClientBrowseCtrl', ["ADMIN","DOSTAWCA","PRACOWNIK_RESTAURACJI","KLIENT"]);
//Utils::addRoute('restaurant_view', 'ClientBrowseCtrl', ["ADMIN","DOSTAWCA","PRACOWNIK_RESTAURACJI","KLIENT"]);
//Utils::addRoute('restaurant_menu_view', 'ClientBrowseCtrl', ["ADMIN","DOSTAWCA","PRACOWNIK_RESTAURACJI","KLIENT"]);
//Utils::addRoute('cart', 'CartCtrl', ["KLIENT"]);
//Utils::addRoute('cart_add_item', 'CartCtrl', ["KLIENT"]);
//Utils::addRoute('cart_update_item', 'CartCtrl', ["KLIENT"]);
//Utils::addRoute('cart_remove_item', 'CartCtrl', ["KLIENT"]);
//Utils::addRoute('order_checkout', 'OrderCtrl', ["KLIENT"]);
//Utils::addRoute('orders', 'OrderCtrl', ["ADMIN","KLIENT"]);
//Utils::addRoute('order_view', 'OrderCtrl', ["ADMIN","KLIENT"]);
//Utils::addRoute('profile', 'ProfileCtrl', ["ADMIN","KLIENT"]);
//Utils::addRoute('profile_edit', 'ProfileCtrl', ["ADMIN","KLIENT"]);
//Utils::addRoute('profile_orders', 'ProfileCtrl', ["ADMIN","KLIENT"]);
//Utils::addRoute('review_restaurant', 'ReviewCtrl', ["ADMIN","KLIENT"]);
//Utils::addRoute('review_delivery', 'ReviewCtrl', ["ADMIN","KLIENT"]);