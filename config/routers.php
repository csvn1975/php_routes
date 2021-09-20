<?php 
$routers = [

   [  'path' => '',
       'component' => '/pages/home.php' ] ,

   [  'path' => '/',        
      'component' => '/pages/home.php'] ,

   [  'path' => '/user',    
      'component' => '/pages/user.php'] ,

   [  'path' => '/cart/add/',
      'component' => '/actions/cart.add.php'],

   [  'path' => '/cart',
      'component' => '/actions/cart.php'],

   [  'path' => '/login',
      'component' => '/actions/login.php'],

   [  'path' => '/checkout',
      'component' => '/actions/checkout.php'],

   [  'path' => '/logout',
      'component' => '/actions/logout.php'],

   [  'path' => '/selectDeliveryAddress',
      'component' => '/actions/selectDeliveryAddress.php'],

   [  'path' => '/deliveryAddress/add',
      'component' => '/actions/deliveryAddress.add.php'],

   [  'path' => '/selectPayment',
      'component' => '/actions/selectPayment.php'],

   [  'path' => '/paymentComplete',
      'component' => '/actions/paymentComplete.php'],

   [  'path' => '/completeOrder',
      'component' => '/actions/completeOrder.php'],

   [  'path' => '/register',
      'component' => '/actions/register.php'],

   [  'path' => '/invoice',
      'component' => '/actions/invoice.php'],

   [  'path' => '/account/activate',
      'component' => '/actions/account.activate.php'],

   [  'path' => '/activationMail',
      'component' => '/actions/activationMail.php'],

   [  'path' => '/product/new',
      'component' => '/actions/product.new.php'],

   [  'path' => '/product/edit',
      'component' => '/actions/product.edit.php'],

   [  'path' => '/product/image/select',
      'component' => '/actions/product.image.select.php'],

   [  'path' => '/product/image',
      'component' => '/actions/product.image.php'],

   [  'path' => '/product',
      'component' => '/actions/product.php'],

   [  'path' => '/category/new',
      'component' => '/actions/category.new.php'],

   [  'path' => '/category/delete',
      'component' => '/actions/category.delete.real.php'],

   [  'path' => '/categoryDelete/cancel',
      'component' => '/actions/category.delete.cancel.php'],

   [  'path' => '/categoryDelete',
      'component' => '/actions/category.delete.php'],

   [  'path' => '/category/assign',
      'component' => '/actions/category.assign.php'],

   [  'path' => '/dashboard',
      'component' => '/actions/dashboard.php'],

   [  'path' => '/orders/details',
      'component' => '/actions/orders.details.php'],

   [  'path' => '/orders',
      'component' => '/actions/orders.php'],
];
