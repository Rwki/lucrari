<?php
  require_once 'templates/header.php';
  global $user;
  $error_message = NULL;
  $mail = NULL;
  if (!empty($_POST['mail']) && !empty($_POST['password'])) {
    $mail = $_POST['mail'];
    try {
      if ($user = login($_POST['mail'], $_POST['password'])) {
        $_SESSION['user'] = $user;
      } else {
        $error_message = 'Autentificare eșuată';
      }
    } catch (Exception $e) {
      $error_message = $e->getMessage();
    }
  }
?>
<?php if (empty($user)): ?>
  <div class="page-header">
    <h1>Bine ați venit</h1>
  </div>
  <div class="row">
    <?php if (!empty($error_message)): ?>
      <div class="alert alert-danger" role="alert"><?php print $error_message; ?></div>
    <?php endif; ?>

    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <form accept-charset="UTF-8" role="form" action="" method="post">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Adresă e-mail" name="mail" type="text" value="<?php print $mail; ?>">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Parola" name="password" type="password" value="">
              </div>
              <div class="checkbox">
                <!-- label>
                  <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                </label -->
              </div>
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Autentificare">
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  Bine ai venit, <?php print $user->mail; ?>
<?php endif; ?>
<?php require_once 'templates/footer.php';
