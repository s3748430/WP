<nav class="navbar navbar-expand-lg navbar-dark bg-primary-color">
    <a class="navbar-brand" href="#">Administrator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminUsers.php">Admin Users</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="logout.php">
            <button name="submit" class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>
