<?php

class DataVaksin extends MySqlDb{

    static function getAllDataVaksin() {
        return DataVaksin::getAllData('data_vaksin');
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