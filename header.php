<!-- header section starts  -->
<header class="header-container">
    <div class="logo">
        <i class="fas fa-seedling"></i> <a href="home.php">Nursery</a>
    </div>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="product.php">Products</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="icons">
        <div id="search-btn">
            <i class="fas fa-search"></i>
        </div>
        <div id="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="buttons">
        <?php if (isset($_SESSION['username'])) { ?>
            <a href="#" class="btn"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['username']; ?></a>
            <a href="logout.php" class="btn">Logout</a>
        <?php } else { ?>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        <?php } ?>
    </div>
    <form class="search-form">
        <label for="search-input">
            <i class="fas fa-search"></i>
        </label>
        <input type="text" id="search-input" placeholder="Search">
    </form>
</header>
<!-- header section ends  -->
