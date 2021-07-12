
<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Signup to iDisucss</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./partials/_handleSignup.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">UserName</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Comfirm Password</label>
                        <input type="password" class="form-control" id="cpwd" name="cpwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Signup</button>
                </form>
            </div>
           
        </div>
    </div>
</div>