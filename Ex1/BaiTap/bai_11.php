<link href="..\css\bootstrap.min.css" rel="stylesheet">
<link href="..\css\styleEx11.css" rel="stylesheet">
<link type="text/javascript" src="..\js\jquery-3.6.1.min.js">
<div class="header">
    <div class="mid">
        <button type="submit" class = "btnLogin"> <img src="..\img\fb_icon.png" alt="facebook" class="img"> 
            <h4 style="color: white;">Login with Facebook</h4>
        </button>
    </div>
</div>
<div class="main">
    <div>
        <h5 style=" padding-top: 20px; padding-left: 50px; ">Login</h5><br>
        <form class="form" >
            <div class="form-group">
                <label>Username:</label><input style="width: 80%" type="text" id="username-login" class="form-control">
                <label>Password:</label><input style="width: 80%" type="password" id="password-login" class="form-control">
                <input type="checkbox" name="check" class="form-group"> <label>Remember me</label><br/>
                <input type="submit" class="login" name="btn" value="Login" class ="btn btn-primary">
            </div>
        </form>
    </div>
    <div>
        <h5 style=" padding-top: 20px; padding-left: 15px;">Signup for New Account?</h5><br>
        <form class="form">
            <div>
                <label>User Name:</label><input style="width: 80%" type="text" id="username-signup" name="username" class="form-control">
                <label>User Email:</label><input style="width: 80%" type="email" id="email-signup" name="username" class="form-control">
                <div style="display:flex">
                    <label>Select Title:</label><br>
                    <label style="margin-left:120px">Full name:</label>
                </div>
                <div style="display:flex">
                    <select id="title" name="title" style="width: 150px; height:25px">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Miss.">Miss.</option>
                    </select>
                    <input type="text" name="fullname" id="fullname" class="form-control" style="margin-left:50px; width: 300px;">
                </div>
                <h4 style = "padding-top: 20px; padding-bottom: 20px;">Company details</h4>
                <p>Provide details about your company</p>
                <h5>Company Name:</h5><input type="text" name="username" class="form-control">
                <input type="checkbox" name="check" class="form-group"> <label>I am agree with registration</label><br/>
                <input type="submit" name="btn" value="Register" class ="btn btn-primary">
            </div>
        </form>
    </div>
</div>