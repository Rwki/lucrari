<?php
require_once 'templates/header.php';
?>
  <div class="page-header">
    <h1>Bine ați venit</h1>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <form accept-charset="UTF-8" role="form">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Adresă e-mail" name="email" type="text">
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
<?php require_once 'templates/footer.php';
