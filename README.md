# Simple Blog System

#### Project Description
- Blog system using PHP & Slim
- YouTube [Link](https://www.youtube.com/watch?v=sRfYgco3xo4)

#### Purpose:
- To learn basic php framework (slim)

#### Timeline:
- Start: May 26, 2018
- End: May 28, 2018

#### For redirect to work:
- For 500 internal error, see: https://stackoverflow.com/a/31451383/6353682
- Make sure to run: sudo a2enmod rewrite
- Then add these lines on apache2.conf or sites-available/xxx.conf if enabled:

```
<Directory directory>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```
- where directory could be /var/www/ or the directory in your sites-available/xxx.conf

#### Create .htaccess (where index.php is located) and add these lines:

```
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [QSA,L]
```

#### Credit:
- [Codecourse YouTube Channel](https://www.youtube.com/user/phpacademy/about)
