<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <h1>Login</h1>
                    <p class="text-muted">Sign In to your account</p>
                    <form action="<?= base_url()?>auth/login" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon-user"></i>
                            </span>
                        </div>
                        <input class="form-control" type="text" placeholder="Username" name="identidy" >
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon-lock"></i>
                            </span>
                        </div>
                        <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-primary px-4" type="submit">Login</button>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-link px-0" type="button">Forgot password?</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-body text-center">
                    <div>
                        <h2>Laundry Management System</h2>
                        <p>Application for laundry </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 