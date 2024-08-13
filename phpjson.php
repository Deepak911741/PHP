<?php
    $user = ["name" => "anil", "age" => 30, "email" => "dk367748@gmail.com"];
    $userJson = json_encode($user);

    // echo $userJson;


    $data = '{"name":"anil","age":30,"email":"dk367748@gmail.com"}';
    $dataJson = json_decode($data, true);
    print_r($dataJson)

?>