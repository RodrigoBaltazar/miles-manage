<?php $__env->startSection('conteudo'); ?>



<div class="container">
		<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
					<div class="panel-heading">
							<div class="panel-body">
                <h2>Cadastro de Clientes</h2>
				<!-- jeito de fazer esse form pego de:
          https://bootsnipp.com/snippets/featured/registration-form
       -->
					<form role="form" method="post" action="/clientes/adiciona">

				<div class="row">
							 <!-- Já esqueci o que é isso abaixo, cookie?-->
				    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>

            <!-- Abaixo  id e saldo alinhados-->
            <div class="col-xs-2 col-sm-6 col-md-6">
                        <div class="form-group">
								          <input type="text" class="form-control" name="id" placeholder="Numero Id">
                        </div>
            </div>

            <div class="col-xs-2 col-sm-6 col-md-6">
                        <div class="form-group">
         								 <input type="text" class="form-control" name="saldo" placeholder="Saldo">
                        </div>
            </div>
        </div>
            <!-- Abaixo  nome alinhado-->
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
            </div>
        </div>
          <!-- Abaixo cpf alinhado-->
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-12">
                        <div class="form-group">
          								 <input type="text" class="form-control" name="cpf" placeholder="CPF">
                        </div>
            </div>
          </div>
          <!-- Abaixo endereço, complemento e bairro alinhados-->
          <div class="row">
                 <div class="col-xs-6 col-sm-6 col-md-12">
                             <div class="form-group">
								                       <input type="text" class="form-control"  name="endereco" placeholder="Endereço">
                              </div>
                </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                             <div class="form-group">
								                       <input type="text" class="form-control"  name="complemento" placeholder="Complemento">
                            </div>
                  </div>
                 <div class="col-xs-6 col-sm-6 col-md-6">
                             <div class="form-group">
								                       <input type="text" class="form-control"  name="bairro" placeholder="Bairro">
                            </div>
                </div>
          </div>

          <!-- Abaixo cidade e cep alinhados-->
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                              <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                </div>
              </div>
                 <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                               <input type="text" class="form-control"  name="cep" placeholder="Cep">
                    </div>
                </div>
          </div>
          <!-- Abaixo telefone e celular alinhados-->
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group">
                								 <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
								                 <input type="text" class="form-control" name="celular" placeholder="Celular">
                    </div>
            </div>
          </div>
          <!-- Abaixo email alinhados-->
          <div class="row">
                 <div class="col-xs-6 col-sm-6 col-md-12">
                     <div class="form-group">
            								 <input type="email" class="form-control" name="email" placeholder="E-mail">
                     </div>
                </div>
        </div>
        <!-- Abaixo data de nascimento alinhados-->
        <div class="row">
               <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group">
                             <input type="text" class="form-control" name="data_nascimento" placeholder="Data de Nascimento">
                   </div>
              </div>
        </div>



							 <button type="submit" class="btn btn-primary">Cadastrar</button>

					</form>

			</div>

			  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>