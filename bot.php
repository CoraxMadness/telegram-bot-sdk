<?php
 
$botToken = "551613938:AAF2UWAal7wR9GHQm0NrlpkuuYN-gL1Ij5g";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
   
    case "/anek":
        sendMessage($chatId, "Заходит глухонемой в магазин и мычит продавщице, показывая жестами:
— Бююю!
Продавщица долго не понимает, что хочет купить этот покупатель. Наконец, она вспоминает, что в их магазине грузчик Вася тоже глухонемой, и приводит его к покупателю.
Вася смотрит на покупателя и мычит:
— Ыыы!
А тот ему отвечает, жестикулируя:
— Бююю!
Грузчик быстро лезет под прилавок, достаёт что-то, заворачивает в бумагу и отдаёт покупателю. Когда тот уходит, продавщица спрашивает:
— Вась, так что он хотел-то?
Грузчик, показывая жестами, мычит:
— Бююю!");
        break;
case "/zvonok_nade":
        sendMessage($chatId, "EBANAROT IDEM NADU PIZDIT");
        break;
case "/atb":
        sendMessage($chatId, "NU SHO, KAK VSEGDA?");
        break;
case "/golos":
        sendMessage($chatId, "VISKOCHIL NA ZHOPE VOLOS");
        break;
    default:
        sendMessage($chatId, "БЮЮЮЮЮЮЮ");
   
}
 
function sendMessage ($chatId, $message) {
   
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
    file_get_contents($url);
   
}
 
 
 
 
 
?>
