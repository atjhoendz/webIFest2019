<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! MaterializeCSS::include_full() !!}

    <title>Login/Daftar</title>
    <style>
        /* body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }
    
        main {
          flex: 1 0 auto;
        }
    
        body {
          background: #fff;
        }
    
        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
          color: #e91e63;
        }
    
        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
          border-bottom: 2px solid #e91e63;
          box-shadow: none;
        } */

        a {
        text-decoration: none;
        }
        body {
        background: -webkit-linear-gradient(bottom, #6139e8, #bd2d86);
        background-repeat: no-repeat;
        }
        label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
        }
        #forgot-pass {
        color: #b938b0;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
        }
        #modal {
        background: #ebebeb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
        }
        #modal-content {
        padding: 12px 44px;
        }
        #modal-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
        }
        #signup {
        color: #b938b0;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
        }
        #submit-btn {
        background: -webkit-linear-gradient(right, #4f25db, #b938b0);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #7D38B9;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: 0.25s;
        width: 153px;
        }
        #submit-btn:hover {
        box-shadow: 0px 1px 18px #7D38B9;
        }
        .form {
        align-items: left;
        display: flex;
        flex-direction: column;
        }
        .form-border {
        background: -webkit-linear-gradient(right, #6139e8, #b938b0);
        height: 1px;
        width: 100%;
        }
        .form-content {
        background: #ebebeb;
        border: none;
        outline: none;
        padding-top: 14px;
        }
        .underline-title {
        background: -webkit-linear-gradient(right, #6139e8, #bd2d86);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
        }
      </style>
</head>
<body>
        {{-- <div id="modal">
                <div id="modal-content">
                  <div id="modal-title">
                    <h2>LOGIN</h2>
                    <div class="underline-title"></div>
                  </div>
                  <div id="underline-title"></div>
                  <form method="post" class="form">
                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Email
                      </label>
                    <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                    <div class="form-border"></div>
                    <label for="user-password" style="padding-top:22px">&nbsp;Password
                      </label>
                    <input id="user-password" class="form-content" type="password" name="password" required />
                    <div class="form-border"></div>
                    <a href="#">
                      <legend id="forgot-pass">Forgot password?</legend>
                    </a>
                    <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                    <a href="#" id="signup">Don't have account yet?</a>
                  </form>
                </div>
              </div> --}}
    {{-- <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

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
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main> --}}
</body>
</html>