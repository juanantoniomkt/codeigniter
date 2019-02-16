<main>

    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form action="<?= site_url('login/new_user'); ?>" class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' />
                <label for='username'>Enter your username</label>
                <p><?=form_error('username')?></p>
                <p></p>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
                <p><?=form_error('password')?></p>
              </div>
              <label style='float: right;'>
                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
				</label>
            </div>

            <?=form_hidden('token',$token)?>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="#!">Create account</a>

      <?php 
    if($this->session->flashdata('usuario_incorrecto'))
    {
    ?>
    <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
    <?php
    }
    ?>

    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
