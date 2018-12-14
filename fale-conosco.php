<?php include 'components/header.php'; ?>

	<section class="titulo-topo">
        <div class="container">
            <h1>Fale Conosco</h1>

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Fale Conosco</li>
            </ol>
        </div><!-- .container -->
    </section><!-- .topo -->

	<div class="interna fale-conosco">
    	<div class="container">
    		<div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="sidebar">
                        <h4>FALE COM NEY LOPES</h4>
                        
                        <h5>E-mail</h5>
                        <p>neylopes@email.com</p>
                        <h5>Telefone</h5>
                        <p>84 22222-99999</p>
                        <h5>Redes sociais</h5>
                        <div class="redes-sociais">
                           <a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           <a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                           <a href="" target="_blank"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div><!-- .redes-sociais -->
                    </div><!-- sidebar -->
                </div><!-- md-4 -->
                <div class="col-md-8 col-sm-8">
                    <form>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="NOME" value="" />

                        <input type="text" name="assunto" id="assunto" class="form-control" placeholder="ASSUNTO" value="" />

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" id="email" class="form-control" placeholder="E-MAIL" value="" />
                            </div><!-- .md-6 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="TELEFONE" value="" />
                            </div><!-- .md-6 -->
                        </div><!-- .row -->

                        <textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>

                        <button>enviar</button>
                    </form>
                </div><!-- md-8 -->
            </div><!-- row -->
    	</div><!-- container -->
    </div><!-- interna -->

<?php include 'components/footer.php'; ?>