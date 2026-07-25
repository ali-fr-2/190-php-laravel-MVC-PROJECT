<?php require  'header.php'; ?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <?php require  'navbar.php'; ?>

    <div class="row">

        <div class="col-md-7 mx-auto">

            <div class="card">

                <div class="card-body">

                    <form action="<?php echo URLROOT; ?>/users/login" method="post">

                        <div class="form-group">
                            <label for="email"> email <sup>*</sup> </label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'] ?? ''; ?>">
                            <span class="invalid-feedback"> <?php echo $data['email_error'] ?? '' ?> </span>
                        </div>

                        <div class="form-group">
                            <label for="password"> password <sup>*</sup> </label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'] ?? ''; ?>">
                            <span class="invalid-feedback"> <?php echo $data['password_error'] ?? '' ?> </span>
                        </div>

                        <div class="text-center my-4">
                            <button class="btn btn-dark" type="submit"> log in </button>
                        </div>

                        <div class="text-center my-4">
                            <p>
                                ‌Welcome to ChatGPT
                                Log in with your OpenAI account to continue‌
                                <a href="<?php echo URLROOT; ?>/pages/register" class="text-muted"> register </a>
                            </p>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <?php require  'footer.php'; ?>