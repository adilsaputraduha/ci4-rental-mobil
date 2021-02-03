<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="POST" action="/customer/save">
                <div class="mb-3" style="margin-top:150px;">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" autocomplete="off" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Name" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" autocomplete="off" id="exampleInputPassword1" placeholder="Enter Your Password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Phone Number">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">I accept the terms of the licence agreement</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-4">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>


<?= $this->endSection('')  ?>