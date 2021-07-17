<?php

class Auth extends MySqlDb{

    static function login($data) {
        $auth = Auth::checkData(
            'user',
            "username='".$data->username."' AND password='".md5($data->password)."'"
        );
        $obj = new stdClass();
        if ($auth->success == true) {
            $obj->status = 200;
            $obj->success = true;
            $obj->user_id = $auth->user_id;
        } else {
            $obj->status = 401;
            $obj->message = "Username atau password salah";
        }
        return $obj;
    }

    static function getDataVaksin($id) {
        return DataVaksin::getData('data_vaksin', "id='".$id."'");
    }

    static function createDataVaksin($data) {
        return DataVaksin::createData(
            'data_vaksin', 
            "district, faskes_type, faskes_name, identity_number, name, gender, age, birthday, phone_number, addr",
            "
                '$data->district', 
                '$data->faskes_type', 
                '$data->faskes_name', 
                '$data->identity_number', 
                '$data->name', 
                '$data->gender', 
                '$data->age', 
                '$data->birthday', 
                '$data->phone_number', 
                '$data->addr'
            "
        );
    }
}