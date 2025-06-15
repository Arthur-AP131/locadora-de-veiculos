 <div class="fundo_log">
    <div class= "div_form_log">
    <h1 class='titulo'>Login</h1>
        <form method="post" action="processo-log.php" class= 'form_log'>
 	        
 	        <input type="text" name="usuario" placeholder="Nome do usuário" class= 'inp_log'>
 	        <br><br>
 	        
 	        <input type="password" name="senha" placeholder="Senha" class='inp_log'>
			<p class= "erro">
				 <?php if (isset($_GET['erro'])){ ?>

 	        	<div class="alert_log" role="alert">
 		    	Usuário e/ou senha inválido(s).
 	        	</div>

			 	<?php }?>
			</p> 
				<br>

 	        <input type="submit" value="Entrar" class="botao-login">

        </form>
        
    </div>
 </div>
  