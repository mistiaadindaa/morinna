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
                                <?= $this->session->flashdata('message'); ?>
                                <form class="mt-5 mb-5 login-input" method="POST" class="user" action="<?= base_url('auth/cek_login'); ?>">
                                                              <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                value="<?=set_value('email'); ?>" id="email" name="email"
                                                placeholder="Masukkan Alamat Email...">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                value="<?= set_value('password')?>" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                    <button class="btn login-form__btn submit w-100" s>Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="<?= base_url('auth/registrasi'); ?>" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    

    

   


