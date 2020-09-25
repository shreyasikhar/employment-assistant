
 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../index.php">Employment Assistant</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "../../soFoton/php/viewprofile.php"><span class ="glyphicon glyphicon-user"</span>Profile</a></li>
                    <li><a href = "../../soFoton/php/settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href = "../../soFoton/php/logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="../../soFoton/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="../../soFoton/php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    
                    <?php
                }
                    ?>
            </ul>
        </div>
    </div>
</div>
