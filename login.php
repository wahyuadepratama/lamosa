<!DOCTYPE html>
<html>
  <?php include_once 'layouts/head.php'; ?>
  <body>
    <?php include_once 'layouts/header.php'; ?>

      <div class="container">
          <div class="grid-login">
            <div class="login-box">
              <h3 style="font-weight:normal">Please Sign In</h3>
              <p>
                Gunakan akun Google atau Facebook untuk masuk ke Lamosa
              </p>
              <center>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn "><img src="assets/img/google.svg" alt="" width="20"/> &nbsp; Google</button>
                <!-- <button type="button" class="btn btn-secondary">Middle</button> -->
                <button type="button" class="btn "><img src="assets/img/facebook.svg" alt="" width="20"/> &nbsp; Facebook</button>
              </div>
              <center>
            </div>
            <div class="footer-login">
              <center><small>Copyright &copy; by Lamosa Team</small></center>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>

<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $profile = $_SESSION['access_profile'];
  echo "<img src=\"{$profile['image']['url']}\">";
  echo "<h3>Hai, {$profile['displayName']} ({$profile['emails']['0']['value']})</h3>";
  echo "Anda telah berhasil login menggunakan akun google anda, klik <a href='logout.php'>Logout</a> untuk keluar.";
} else {
  echo "<a href='auth.php'>Login dengan Akun Google</a>";
}
