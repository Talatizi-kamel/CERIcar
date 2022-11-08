<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>
    CERIcar
  </title>

</head>

<body>
  <h2>Super c'est Mon appli ! </h2>
  <?php if ($context->getSessionAttribute('user_id')) : ?>
    <?php echo $context->getSessionAttribute('user_id') . " est connecte"; ?>
  <?php endif; ?>

  <div id="page">
    <?php if ($context->error) : ?>
      <center>
        <div id="flash_error" class="error" style="background-color: red;">
          <?php echo " attention une erreur est survenue  !!!!!" ?>
        </div>
      </center>
    <?php else : ?>
      <center>
        <div id="flash_error" style="background-color: green;padding:10px;">
          <?php echo " No Context error" ?>
        </div>
      </center>
    <?php endif; ?>
    <div id="page_maincontent">
      <?php include($template_view); ?>
    </div>
  </div>


</body>

</html>