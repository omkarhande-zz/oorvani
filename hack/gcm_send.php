<?php

$apiKey = "AIzaSyCUXxiGzjyfWcpncCZ20ppEAGNsI_b2Nf0";

$registrationIDs = array("APA91bGCUKnOOQFKDLRPcL8nrPBRpZnvGwVEhNUqgMwZ-MAGUqOLkNHMFra6tcux-Dt2Eay1vW_NtoGzKLMM7ia0odnESbSB_DO2VGgzJ9m_1OUV1N1MgRMy6WvmRgEDTzDtNHA1QebKruUSdo0iHsjwrchuoi4f4A");
$message = "testing Process";
//                 array('message' => $message, 'tickerText' => $tickerText, 'contentTitle' => $contentTitle, "contentText" => $contentText) );
$url = 'https://android.googleapis.com/gcm/send';
$fields = array(
        'registration_ids'  => $registrationIDs,
        'data'              => array("message"=>$message,"ticketText"=>"New Notificatin", "contentTitle"=>"Oorvani", "contentText"=>"You have a new survey!","type"=>"1"),
        );
$headers = array( 
        'Authorization: key=' . $apiKey,
        'Content-Type: application/json'
        );
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields) );

$result = curl_exec($ch);
if(curl_errno($ch)){ echo 'Curl error: ' . curl_error($ch); }
curl_close($ch);
echo $result;
// // Message to send
// /**
//  * The following function will send a GCM notification using curl.
//  * 
//  * @param $apiKey		[string] The Browser API key string for your GCM account
//  * @param $registrationIdsArray [array]  An array of registration ids to send this notification to
//  * @param $messageData		[array]	 An named array of data to send as the notification payload
//  */

// $message      = "the test message";
// $tickerText   = "ticker text message";
// $contentTitle = "content title";
// $contentText  = "content body";
 
// $registrationId = 'APA91bExAi5giUiAQJr_3gVNd1OPvoxZ8O_kTJnSdOmBaBMxQMPNNAECyceR221DmondODV4ZJgdQxI-lK6pqV-6jS_XRBbdFFNBaKMd3u2tIQarThf_RIrc7Bjb82tPdSjLmDMjlmxF5QEMZQFunNq6JjIrKrR8DX85a4-1IctpWuKhU_kGXbI';
// $apiKey = "AIzaSyCUXxiGzjyfWcpncCZ20ppEAGNsI_b2Nf0";
 
// $response = sendNotification( 
//                 $apiKey, 
//                 array($registrationId), 
//                 array('message' => $message, 'tickerText' => $tickerText, 'contentTitle' => $contentTitle, "contentText" => $contentText) );
//  function sendNotification( $apiKey, $registrationIdsArray, $messageData )
// {   
//     $headers = array("Content-Type:" . "application/json", "Authorization:" . "key=" . $apiKey);
//     $data = array(
//         'data' => $messageData,
//         'registration_ids' => $registrationIdsArray
//     );
 
//     $ch = curl_init();
 
//     curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers ); 
//     curl_setopt( $ch, CURLOPT_URL, "https://android.googleapis.com/gcm/send" );
//     curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
//     curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
//     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//     curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($data) );
 
//     $response = curl_exec($ch);
//     curl_close($ch);
 
//     return $response;
// }
// echo $response;
?>