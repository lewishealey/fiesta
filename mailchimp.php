<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  require("vendor/autoload.php");
  use \DrewM\MailChimp\MailChimp;

  $MailChimp = new MailChimp('3b201a5407575fb9ec90af9721a252e1-us14');
  $list_id = '6f389ed09a';

  $result = $MailChimp->get('lists');

  print_r($result);

  // $email = $_POST["email"];
  // $email = "hello@lewis.com";
  //
  // $result = $MailChimp->post("lists/$list_id/members", [
  //                 'email_address' => $email,
  //                 'status'        => 'subscribed',
  //             ]);
  //
  // echo json_encode($result);


?>
