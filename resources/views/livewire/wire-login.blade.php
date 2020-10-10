<div>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>F</b>ARMA</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar sessión del sistema FARMA</p>

                <form wire:submit.prevent='submit'>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('user') is-invalid @enderror" placeholder="Usuario" wire:model="user">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('user') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('pass') is-invalid @enderror" placeholder="Contraseña" wire:model='pass' autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('pass') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>
