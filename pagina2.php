<?php
	include("dados.php");
	//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php" title="Tutoriais" alt="Tutoriais">Home</a></li>
				<li><a href="contato.php" title="Artigos" alt="Artigos">Contato</a></li>
			
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Nossas Marmitas</h1>
				<p>Todas feitas no fogão a lenha 🪔!</p>
			</header>
			<?php
                $id = $_GET['id'];//na próxima aula iremos realizar a validação deste valor
                echo "id = " . $id;
								
				foreach($tutoriais as $key => $value){
						
                    if($value['id'] == $id){
														
										
			?>
			<article><!-- é necessário melhorar o css desta parte-->
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
			
									
                    }
				}
			?>
			
		</section>


        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Ver outras Marmitas</h1>
				<p>Outras marmitas</p>
			</header>
			<?php
			
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
				
				
				 <form>
   					 <a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>>
        <input class="botaop" type="button" value="Saber mais!" title="click-me">
    </a>
</form>
	    	</article>
			<?php
                    }
				}
			?>
			
		</section>



		<!--suport -->
		
        <article class="main_suport">
				<div class="link">
										<a href="index.php">
										<input type="submit" value="home" title="click">
										</a>
										<a href="contato.php">
											<input type="submit" value="Outras formas de contato" title="Ckick"></a></div>
				<article class="contatos">
					<h1 >Como me encontrar</h1><div class="div2">
										<p><label>Endereço: <br>Nova Cantu Pr</label></p>
										<p><label>Telefone :<br>99 9999-9999</label></p></div>
									</article>
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
									
                </header>
             
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>ENVIAR!</button>
                </form>
								
            </div>
						<hr>
						<p id="autor">Autor:Paulo Sergio RA:21002614-5</p>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>
</body>
</html>