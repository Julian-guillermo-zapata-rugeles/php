
#    debian 10 buster

sudo apt install mariadb-server

sudo apt install php php-cgi php-mysqli php-pear php-mbstring php-gettext libapache2-mod-php php-common php-phpseclib php-mysql -y

sudo apt install mariadb-server mariadb-client -y

sudo mysql_secure_installation  # lanzar configuracion

wget -P ~/Descargas/ https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz # enviar a descargas
wget -P ~/Descargas/ https://files.phpmyadmin.net/phpmyadmin.keyring
cd ~/Descargas/
gpg --import phpmyadmin.keyring

wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz.asc

gpg --verify phpMyAdmin-latest-all-languages.tar.gz.asc

mkdir /var/www/html/phpMyAdmin/
sudo tar xvf phpMyAdmin-latest-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpMyAdmin/


sudo cp /var/www/html/phpMyAdmin/config.sample.inc.php /var/www/html/phpMyAdmin/config.inc.php





$cfg['blowfish_secret'] = 'my_secret_passphrase';

Use a complex passphrase of your choice and then exit and save the file (Ctrl+x).

    Change the permissions for the config.inc.phpfile:

sudo chmod 660 /var/www/html/phpmyadmin/config.inc.php

    Change ownership of the phpmyadmindirectory:

sudo chown –R www-data:www-data /var/www/html/phpmyadmin

    Restart Apache:

sudo systemctl restart apache2
