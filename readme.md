Installing Traitify using PHP and Javascript
===============
Traitify is best used with a server side component, and a client side component. These docs demonstrate the use of PHP as the server side libray, and javascript as the client library:

To get started you'll have to download compser:
[https://getcomposer.org/doc/00-intro.md#globally](https://getcomposer.org/doc/00-intro.md#globally)

And get private key from the site below:
[https://developer.traitify.com](https://developer.traitify.com)

Then you will add traitify to your composer.json:
#### composer.json
```JSON
{
    "require": {
        "traitify/client": "dev-master"
    }
}
```

Then in a file called traitify.php add:
```
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
```

And in your index.php file add:
```
<?php require("traitify.php"); ?>
<html>
<head>
  <title>My Traitify Assessment Application</title>
  <script src="https://s3.amazonaws.com/traitify-cdn/lib/edge.js"></script>
  <script>
    Traitify.setHost("<?= $host ?>");
    Traitify.setPublicKey("<?= $publicKey ?>");
    Traitify.setVersion("<?= $version ?>");
    assessmentId = "<?= $assessment->id ?>";
  </script>
</head>
<body>
  <div class="widget"></div>
  <script>
    traitify = Traitify.ui.load(assessmentId, ".widget");
  </script>
</body>
</html>
```
