<?php
loadPartials('header');
loadPartials('navbar');
?>
<div class="container_style">
    <div class="wrapper" style="height: 550px">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>

        <div class="form-box register">
            <h2>Register</h2>
            <form action="/register" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="username" name="username" required oninput="this.value = this.value.replace(/^\s+|\s+$/g, '');">
                    <label>Username</label>
                </div>
                <div class="gender">
                    <label><input type="radio" id="gender" name="gender" value="male" required>Male</label>

                    <label><input type="radio" id="gender" name="gender" value="female" required>Female</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="tel" id="phone" name="phone" pattern="\d{1, 9}" maxlength="9" inputmode="numeric" style="padding-left: 50px" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9);">
                    <label>Phone number</label>
                    <span class="code">+998</span>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" minlength="4" required oninput="this.value = this.value.replace(/^\s+|\s+$/g, '');">
                    <label>Password</label>
                </div>
                <div class="error_style">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }?>
                </div>
                <button type="submit" class="btn_style">Register</button>
                <div class="login-register">
                    <p>Already have an account?
                        <a href="/login" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php loadPartials('footer'); ?>