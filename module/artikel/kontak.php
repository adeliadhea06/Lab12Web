<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
</head>

<body>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
}

.main {
  margin-top: 20px;
}

.tambah {
  display: inline-block;
  padding: 15px 15px;
  background-color: #0151f2;
  color: #fff;
  text-decoration: none;
  border-radius: 10px;
}

.table, td, th {
    border: 1px solid;
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
  }

  img {
    max-width: 80px;
    height: auto;
}
.contact-content {
    display: flex;
    justify-content: space-around;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.contact-form h2, p{
    text-align: center;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    border-radius: 5px;
}

.contact-form button {
    background-color: #98b3a0;;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #4a4949;
}
</style>
<?php require('../../template/header.php'); ?>
        <div class="contact-content">
            <div class="contact-form">
                <h2>Contact Form Me</h2>
                <p>Send us a message using the form below:</p>
                <br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
        <?php require('../../template/footer.php'); ?>
    </div>
</body>
</html>