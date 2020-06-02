<?php
echo "<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/bootstrap-grid.css'>
    <link rel='shortcut icon' href='img/Logoicon.ico' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Frontstorm</title>
    <style type='text/css'>
      body{
        background-image: url('img/Tempestade-4.jpg');
      }
    </style>
  </head>
<body>
    <!--------MEEEEENUUUUUUUUUUUUSSSS----------->
      <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
          <div><img src='img/Logo.png' style='width: 70px; height: 70px;'></div>
        <a class='navbar-brand' href='indexlog.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 40px; color:#00ace6;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>FrontStorm<span class='sr-only'>(current)</span></a>
        <div class='pos-f-t'>
            <div class='collapse' id='navbarToggleExternalContent'>
              <div class='bg-dark p-4'>
                  <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
          <li class='nav-item active'>
          <a class='nav-link' href='Frontslog.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6; padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Fronts</a>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Postar.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Postar</a>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Meuperfil.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Meu Perfil</a>
          </li>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Sobrelog.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Sobre</a>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Usuarios.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Usuários</a>
          </li>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='../index.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Sair</a>
          </li>
        </ul>
      <form class='form-inline my-2 my-lg-0'>
        <input class='form-control mr-sm-2' type='search' method='get' action='#' placeholder='Pesquisar'>
        <button class='btn btn-primary mb' type='submit'>Pesquisar</button>
      </form>
                    </div>
                      </div>
                        <nav class='navbar navbar-dark bg-dark'>
                          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarToggleExternalContent' aria-controls='navbarToggleExternalContent' aria-expanded='false' aria-label='Toggle navigation'>
                          <span class='navbar-toggler-icon'></span>
                          </button>
        </div>

      <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
        <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
          <li class='nav-item active'>
          <a class='nav-link' href='Frontslog.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6; padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Fronts</a>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Postar.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Postar</a>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Meuperfil.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Meu Perfil</a>
          </li>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Sobrelog.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Sobre</a>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='Usuarios.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Usuários</a>
          </li>
          </li>
          <li class='nav-item active'>
          <a class='nav-link' href='../index.php' style='font-family: 'Oxygen';src: url('fonts/Oxygen/Oxygen-Bold.ttf'); font-size: 30px; color:#00ace6;padding-left: 30px;padding-top:15px;'onmouseover='this.style.color='#515151'' onmouseout='this.style.color='#00ace6''>Sair</a>
          </li>

        </ul>
      <form class='form-inline my-2 my-lg-0'>
        <input class='form-control mr-sm-2' type='search' method='get' action='#' placeholder='Pesquisar'>
        <button class='btn btn-primary mb' type='submit'>Pesquisar</button>
      </form>
      </div>
      </nav>
      <!--------------MEEEEEEEEEEEENNNNNNNNUUUUUUU--------->

      <!-------------TABELLLAAAA--------->
  <div class='container' style='padding-top: 20px;'>
      <div class='row'>
      <div class='col-lg-4'></div>
      <div class='col-md-4'><
        <img class='mb-4' src='img/user.svg' alt='' width='84' height='84'>
        <table class='table table-hover table-dark'>
            <tbody>
              <tr>
                <th scope='row'></th>
                <td>Nome:</td>
                <td>José Maik Freitas</td>
              </tr>
              <tr>
                <th scope='row'></th>
                <td>Usuário:</td>
                <td>maikemir2003</td>
              </tr>
              <tr>
                <th scope='row'></th>
                <td>Email:</td>
                <td>maikemir2003@gmail.com</td>
              </tr>
              <tr>
                <th scope='row'></th>
                <td>Nivel de experiência:</td>
                <td>Jûnior</td>
              </tr>
            </tbody>
          </table>
        <a href='Atualizar.html' style='text-decoration: none;'><button class='btn btn-lg btn-primary btn-block' type='submit'>ATUALIZAR INFORMAÇÕES</button></a>
      </div><!-- /.col-lg-4 -->
      <div class='col-lg-2'></div>
    </div>
  </div>

  <!-----------------TABEEELLLAAAA--------------->



  <!------------FOOOOOOOOTTTTTTTTTTEEEEEEEEERRRRR------>
    <footer class='footer mt-auto py-4'>
      <div class='container' style='padding-top: 120px;' >
        <p>© 2020 TODOS OS DIREITOS RESERVADOS À FRONTSTORM INC.</p>
      </div>
    </footer>
  <!------------FOOOOOOOOTTTTTTTTTTEEEEEEEEERRRRR------>




  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
</body>
</html>";
?>