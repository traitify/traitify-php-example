<?php
require 'vendor/autoload.php';

$host = 'api-sandbox.traitify.com'; /* Example Host */ 
$version = 'v1';
$privateKey = '34aeraw23-3a43a32-234a34as42'; /* Example Private Key */
$publicKey = '9sjeraw3s-3d46a22-224a54ss42'; /* Example Public Key */

$traitify = new Traitify\Client([
  'host'=> $host,
  'version'=> $version,
  'privateKey'=> $publicKey
]);

$assessment = $traitify->createAssessment("career-deck");
?>