(Put "OZ shop folder" inside C:\xampp\htdocs)
1. Open phpMyAdmin and create new database name as "ecommerce".
2. Export the ecommerce.sql file that is present in the root directory
3. Open db/connect.php from root folder, and change the credentials from the file.
    My file: $con = mysqli_connect('localhost', 'root', 'Saymon6993!', 'ecommerce');
    Your file     = mysqli_connect('localhost', 'your_username', 'your password', 'ecommerce');
  Default username is "root" and password is '';
4. Open xampp Run apache & mysql server from xampp control panel.
5. Open localhost in your browser and you'll see "Oz shop" folder, click it and it'll open index.php automatically
   
     
