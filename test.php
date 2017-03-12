<?php
class Api
{
 public $api_url = 'http://instantpanel.net/api.php'; // API URL

 public $api_key = '2525590080909372688'; // Your API key

 public function order($link, $type, $quantity) { // Add order
  return json_decode($this->connect(array(
      'key' => $this->api_key,
      'action' => 'order',
      'profile' => $link,
      'service' => $type,
      'amount' => $quantity
  )));
 }

 public function status($order_id) { // Get status, start count
  return json_decode($this->connect(array(
      'key' => $this->api_key,
      'action' => 'status',
      'id' => $order_id
  )));
 }


 private function connect($post) {
  $_post = Array();
  if (is_array($post)) {
   foreach ($post as $name => $value) {
    $_post[] = $name.'='.urlencode($value);
   }
  }
  $ch = curl_init($this->api_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  if (is_array($post)) {
   curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
  }
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
  $result = curl_exec($ch);
  if (curl_errno($ch) != 0 && empty($result)) {
   $result = false;
  }
  curl_close($ch);
  return $result;
 }
}



// Examples

$api = new Api();

$order = $api->order('http://facebook.com/', '1', '100'); // $link, $type - service type, $quantity: return order id or Error

$status = $api->status(9881); //  returns Order status and Start count

print_r($order);
echo $status;

?>