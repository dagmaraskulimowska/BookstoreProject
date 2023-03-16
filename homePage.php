<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Website</title>
    <link rel="stylesheet" href="style.css">
  <style>
    .logo {
    color: red;
    font-size: 25px;
    width: 900px;
    font-weight: bold;
    text-align: center;

}
.navbar{
    position: fixed;
    height: 90px;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.4);
}

.navbar ul{
    float: right;
    margin-right: 30px;
}
.navbar ul li{
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 80px;
}
.navbar ul li a{
    font-size: 20px;
    color: white;
    padding: 6px 13px;
    text-decoration: none;
    transition: .4s;
}
.navbar ul li a:hover{
    background: red;
    border-radius: 2px;
}
</style>
</head>
<body>
    <nav class="logo h1">
      <h1>KSIĄŻEK</h1>
            <nav class="navbar">
                <ul>
          <li><input type="text" placeholder="Wyszukaj..."></li>
                    <li><a href="#">Strona główna</a></li>
                    <li><a href="#">Koszyk</a></li>
                    <li><a href="#">Logowanie</a></li>
                </ul>
            </nav>
        </div>
</body>
</html>