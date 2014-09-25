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