<!DOCTYPE html>
<html>
    <head>
        <title>Sip chat cafe</title>
        <link rel = "icon" href = "logo.jpg" type = "image/x-icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <b><br>
        <fieldset style="margin-left: 5%;
    margin-right: 5%;
    border-style: none;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);">
        <h1><a href="https://sipchat.000webhostapp.com/webcafe/index.html" target="_blank">Sip chat cafe</a></h1>
        <h2>Annex your tongue with coffee</h2>
        <!--Coffee-->
        <h3>Coffee</h3>
        <table>
            <?php
                $conn = mysqli_connect("localhost", "id18295072_root", "Muhil@8300512800", "id18295072_menu");
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT item,price FROM coffee";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["item"]. "</td><td>" . $row["price"] . "</td></tr>";
                    }
                }
                else
                {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </table>
        <!--Ice cream-->
        <h3>Icecream</h3>
        <table>
            <?php
                $conn = mysqli_connect("localhost", "id18295072_root", "Muhil@8300512800", "id18295072_menu");
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT item,price FROM icecream";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["item"]. "</td><td>" . $row["price"] . "</td></tr>";
                    }
                }
                else
                {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </table>
        <!--pancake-->
        <h3>Pancake</h3>
        <table>
            <?php
                $conn = mysqli_connect("localhost", "id18295072_root", "Muhil@8300512800", "id18295072_menu");
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT item,price FROM pancake";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["item"]. "</td><td>" . $row["price"] . "</td></tr>";
                    }
                }
                else
                {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </table>
        <!--biscuit-->
        <h3>biscuit</h3>
        <table>
            <?php
                $conn = mysqli_connect("localhost", "id18295072_root", "Muhil@8300512800", "id18295072_menu");
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT item,price FROM biscuit";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["item"]. "</td><td>" . $row["price"] . "</td></tr>";
                    }
                }
                else
                {
                    echo "0 results";
                }
                $conn->close();
            ?>
            </table>
        </b>
        </fieldset>
        <br><br>
    </body>
</html>