 <div class="fundo_log">
    <div class= "div_form_log">
    <h1 class='titulo'>Login</h1>
        <form method="post" action="login.php" class= 'form_log'>
 	        
 	        <input type="text" name="usuario" placeholder="Nome do usuário" class= 'inp_log'>
 	        <br><br>
 	        
 	        <input type="password" name="senha" placeholder="Senha" class='inp_log'>

			 <?php if (isset($_GET['erro'])){ ?>
			<br>

 	        <div class="alert_log" role="alert">
 		    Usuário e/ou senha inválido(s).
 	        </div>

			 <?php }?>
			 <br><br>

 	        <input type="submit" value="Entrar" class="botao">

        </form>
        <br>
    </div>
 </div>
  