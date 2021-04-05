<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Yuppie</b>Commerce</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Ingresar al sistema de Yuppie</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="logEmail" placeholder="Email" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="logPassword" placeholder="Contraseña" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </div>
                    <!-- /.col -->
                </div>

                <?php

                $login = new ManagerController();
                $login->ctrLoginManager();

                ?>

            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
