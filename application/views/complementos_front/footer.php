<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Area de acesso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-md-12">
                       <label>E-mail ou usuario</label>
                   </div>
                   <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="usuario" placeholder="Email ou usuario" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <label>Senha</label>
                </div>
                <div class="col-md-12">
                   <div class="input-group">
                    <input type="password" class="form-control" id="senha" placeholder="Senha" aria-describedby="basic-addon1">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                </div>
            </div>
             <div class="col-md-12 left">
                   <br> <a href="#">Esqueci ou nao tenho a senha</a>
                </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="left-side">
           <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Voltar</button>
        </div>
        <div class="divider"></div>
        <div class="right-side">
            <button type="button" class="btn btn-success btn-link">Entrar</button>
        </div>
    </div>
</div>
</div>
</div>



<footer class="footer">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a href=""> <i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i> Google</a></li>
                    <li><a href="">Centro Universitario UNA</a></li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    © <script>document.write(new Date().getFullYear())</script>,I9 Escritorios 
                </span>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="<?php echo base_url('assets/js/jquery-3.2.1.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery-ui-1.12.1.custom.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/popper.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap-switch.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/nouislider.js');?>"></script>
<script src="<?php echo base_url('assets/js/paper-kit.js?v=2.1.0');?>"></script>
<script src="<?php echo base_url('assets/js/plugins/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js');?>"></script>
<script src="<?php echo base_url('assets/js/sistema.js');?>"></script>
</html>

</html>