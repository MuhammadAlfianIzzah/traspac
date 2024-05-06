<?php

namespace Alfianizzah\Traspac\Helper;

use Alfianizzah\Traspac\Models\UserModel;

class StringHelper
{
    public static function helloWorld()
    {
        return "hello world";
    }
    public static function randomQuote()
    {
        $jsonData = file_get_contents(__DIR__ . "/../Datasets/quotes.json");
        if ($jsonData === false) {
            return "json tidak valid";
        } else {
            $data = json_decode($jsonData, true);
            if ($data === null) {
                return "json kosong";
            } else {
                $randomIndex = array_rand($data);
                return $data[$randomIndex]["quote"];
            }
        }
    }
    public static function getUser()
    {
        return UserModel::get();
    }
}
