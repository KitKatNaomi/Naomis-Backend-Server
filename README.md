# Naomi's Backend Server
The "/var/www/html" of my ubuntu php server

By Naomi/ William James Bennett 

## Requirements


Imagemagik

```bash
sudo apt install imagemagik
sudo apt install php-imagemagik
```

cURL

```bash
sudo apt install php-curl
```

After that, you will need to enable the cURL extenstion in PHP by adding the following line to the `php.ini` file

```ini
extension=curl
```

The location of the `php.ini` file may vary depending on the version of PHP you have installed. You can check the location of the file by running the following command:

```bash
php --ini
```

Restart Apache to apply the extentions:

```bash
sudo systemctl restart apache2
```

Verify that the Imagemagik and cURL extension is loaded by creating a PHP file with the following content

```php
<?php
phpinfo()
?>
```

Access the file in your browser and find (Ctrl+F) ImageMagik and cURL, you sould see the verison of both extentions and other configurations.

If you see them congrats you've install the required extentions.
