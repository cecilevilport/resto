<?php

require('models/order.php');

function order(){
  if(!isset($_POST['qte'])){
    $template="order/order.phtml";
    require('www/layout.phtml');
  }
}
