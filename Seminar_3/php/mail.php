<?php
    $email = $_POST['email'];
    $fio = $_POST['fio'];
    $gender = $_POST['gender'];
    $place = $_POST['place'];
    $timepicker = $_POST['timepicker'];
    $datepicker = $_POST['datepicker'];
    $Time = $_POST['Time'];

    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);
    $gender = htmlspecialchars($gender);
    $place = htmlspecialchars($place);
    $timepicker = htmlspecialchars($timepicker);
    $datepicker = htmlspecialchars($datepicker);
    $Time = htmlspecialchars($Time);

    $fio = urldecode($fio);
    $email = urldecode($email);
    $gender = urldecode($gender);
    $place = urldecode($place);
    $timepicker = urldecode($timepicker);
    $datepicker = urldecode($datepicker);
    $Time = urldecode($Time);

    $fio = trim($fio);
    $email = trim($email);
    $place = trim($email);

    mail("greatner@yandex.ru", "Заказ карты БаЦзы", "ФИО:".$fio.". E-mail: ".$email". gender: ".$gender". place: ".$place". timepicker: ".$timepicker". datepicker: ".$datepicker". time: ".$Time ,"From: greatner@yandex.ru \r\n");

    if (mail("greatner@yandex.ru", "Заказ карты БаЦзы", "ФИО:".$fio.". E-mail: ".$email". gender: ".$gender". place: ".$place". timepicker: ".$timepicker". datepicker: ".$datepicker". time: ".$Time ,"From: greatner@yandex.ru \r\n"))
    {
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
?>