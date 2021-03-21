<?php
//EXAMPLE
Flight::route('GET /cart', function () {
    $data = apache_request_headers();
    $user_data = Auth::decode_jwt($data);
    if($user_data['data']['id']){
      $customer_id = $user_data['data']['id'];
      $users = Flight::user_service()->get_all_users();
      Flight::json($users);
    }
});



 ?>
