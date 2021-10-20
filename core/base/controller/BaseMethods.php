<?php


namespace core\base\controller;


trait BaseMethods
{


//    **************************Метод очистки строковых данных***************

    protected function clearStr($str) {

        if(is_array($str)) {
            foreach ($str as $key => $item) $str[$key] = trim(strip_tags($item));
            return $str;
        } else {
            return trim(strip_tags($str));
        }
    }
//    ************************Метод очистки числовых данных*****************

    protected function clearNum($num) {
        // Приведение к числу (в php строка приводится к нулю)
        return $num * 1;
    }

//    ************************Пришли ли данные с метода POST?
    protected function isPost() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
//    ***********************Пришли ли даные с XMLHttpRequest?
    protected function isAjax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

//    **********************Перенаправление и отправление заголовков
    protected function redirect($http = false, $code = false) {

        if($code) {
            $codes = ['301' => 'HTTP/1.1 301 Move Permanently'];
            if($codes[$code]) header($codes[$code]);
        }

        if($http) $redirect = $http;
//        ($_SERVER['HTTP_REFERER'] - существует если пользователь перешел со станицы нашего сайта иначе на перенаправляем на главную
            else $redirect =isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;

            header("Location: $redirect");

            exit;
    }

    protected function writeLog($message, $file = 'log.txt', $event = 'Fault') {

        $dateTime = new \DateTime();

        $str = $event . ' ' . $dateTime->format('d-m-Y G:i:s') . ' - ' . $message . "\r\n";

        file_put_contents('log/' . $file, $str, FILE_APPEND);
    }
}