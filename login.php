<?php
    // echo "Hello world!";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Login</h2>
        </div>
    </div>
</div>

<div class="container login">

    <div class="row">
        <div class="col-6">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" placeholder="johndoe@gmail.com" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" placeholder="**********" class="form-control" id="exampleInputPassword1">
                    <a href="index.php?content=register">Don't have an account yet? click here to register.</a>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
        <div class="col-6">
            <div class="loginImg">
                <img src="./img/png1.png" alt="">
            </div>
        </div>
    </div>
</div>