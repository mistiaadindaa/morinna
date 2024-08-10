<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

   <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                    <a class="text-center" href="index.html"> <h4>Morinna.Couture</h4></a>
                                    <form class="mt-5 mb-5 login-input" method="POST" class="user" action="<?= base_url('auth/cek_regis'); ?>">
                                  
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama"
                                        name="nama" value="<?= set_value('nama'); ?>" placeholder="Nama Lengkap" required>
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email"
                                        name="email" value="<?= set_value('email'); ?>" placeholder="Alamat Email" required>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control"
                                            id="password1" name="password1" value="<?= set_value('password1'); ?>" required placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                            id="password2" required name="password2" placeholder="Ulangi Password">
                                    </div>
                                </div>

                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="page-login.html" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
