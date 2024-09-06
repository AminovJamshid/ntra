<?php
declare(strict_types=1);
loadPartial('header.php');
loadPartial('navbar.php');
?>
<div class="container_style">
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="/login" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="tel" id="phone" name="phone" pattern="\d{1, 9}" maxlength="9" inputmode="numeric" style="padding-left: 50px" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    <label>Phone number</label>
                    <span class="code">+998</span>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" required oninput="this.value = this.value.replace(/^\s+|\s+$/g, '');">
                    <label>Password</label>
                </div>
                <div class="error_style">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </div>
                <button type="submit" class="btn_style">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="/register" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php loadPartial('footer.php');?>
