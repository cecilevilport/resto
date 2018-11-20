<?php

require('models/booking.php');

function reserver(){
  $template='reserver.phtml';
  require('www/layout.phtml');
}

function validerResa(){
  $resa=insertResa();
  $template='reserver.phtml';
  require('www/layout.phtml');
}
