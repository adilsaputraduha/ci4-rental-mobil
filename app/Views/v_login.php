<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="POST" action="/login/cek">
                <div class="mb-3" style="margin-top:150px;">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">I accept the terms of the licence agreement</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3 mb-4">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>


<?= $this->endSection('')  ?>