<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malvar Street Wear</title>
    <link rel="stylesheet" href="pages-style.css">
</head>
<body>
<header>
    <h1>Malvar Street Wear</h1>
    <form>
        <input type="search" id="search" placeholder="Search..">
</form>
        <a href="welcome.php" id="home">HOME</a>
        <a href="login.php" id="log-in">LOG IN</a>
</header>
    <nav>
        <center>
            <a href="main.php">best seller</a>
            <a href="mens page.php">mens wear</a>
            <a href="women page.php">womens wear</a>
            <a href="accessories.php">accessories</a>
            <a href="cart.php">cart</a>
            <a href="about us.php">about us</a>
        </center>        
    </nav>
    
    <div class="text">
        <h1>accessories</h1>
    </div>       
    <div class="product-grid">
        <div class="product">
            <img src="accesories1.jpg">
            <p><strong>Name:</strong> Shadow Crest Signature Fitted Cap</p>
            <p><strong>Price:</strong> 499</p>
            <p><strong>Color:</strong> Black</p>
            <p><strong>Material:</strong>High-Density Wool-Infused Cotton Blend</p>
            <label for="size1">Size:</label>
            <select id="size1">
                <option value="S">S</option>
                <option value="M">M</option>
            </select>
            <label for="qty1">Quantity:</label>
            <input type="number" id="qty1" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="accesories2.jpg">
            <p><strong>Name:</strong> Urban Essential Rib-Knit Beanie Skully</p>
            <p><strong>Price:</strong> 450</p>
            <p><strong>Color:</strong> Black</p>
            <p><strong>Material:</strong>Soft-Touch Wool-Cotton Blend</p>
            <label for="size2">Size:</label>
            <select id="size2">
                <option value="S">S</option>
                <option value="M">M</option>
            </select>
            <label for="qty2">Quantity:</label>
            <input type="number" id="qty2" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="accesories3.jpg">
            <p><strong>Name:</strong> Luna Classic Sterling Minimalist Ring</p>
            <p><strong>Price:</strong> 400</p>
            <p><strong>Color:</strong> Silver</p>
            <p><strong>Material:</strong>sterling silver W/Titanium</p>
            <label for="size3">Size:</label>
            <select id="size3">
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <label for="qty3">Quantity:</label>
            <input type="number" id="qty3" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="accesories4.jpg">
            <p><strong>Name:</strong> Aurora Eternal Twisted Band</p>
            <p><strong>Price:</strong> 400</p>
            <p><strong>Color:</strong> Silver</p>
            <p><strong>Material:</strong> sterling silver W/Titanium</p>
            <label for="size4">Size:</label>
            <select id="size4">
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <label for="qty4">Quantity:</label>
            <input type="number" id="qty4" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="accesories5.jpg">
            <p><strong>Name:</strong> Eclipse Pendant Necklace</p>
            <p><strong>Price:</strong> 700</p>
            <p><strong>Color:</strong> Silver</p>
            <p><strong>Material:</strong> Silver W/Black Onyx Stone</p>
            <label for="size5">Size:</label>
            <select id="size5">
                <option value="16">16"</option>
                <option value="18">18"</option>
                <option value="20">20"</option>
                <option value="22">22"</option>
            </select>
            <label for="qty5">Quantity:</label>
            <input type="number" id="qty5" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="accesories6.jpg">
            <p><strong>Name:</strong> Diamond Drop Necklace</p>
            <p><strong>Price:</strong> 1700</p>
            <p><strong>Color:</strong> Silver</p>
            <p><strong>Material:</strong> sterling Silver W/white sapphire</p>
            <label for="size6">Size:</label>
            <select id="size6">
                <option value="14">14"</option>
                <option value="16">16"</option>
                <option value="18">18"</option>
                <option value="20">20"</option>
            </select>
            <label for="qty6">Quantity:</label>
            <input type="number" id="qty6" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>        
    </div>
    <script src="website.js"></script>
</body>
</html>
