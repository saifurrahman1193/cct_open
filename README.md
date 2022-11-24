<img src="public/cctl-logo.jpg" align="right" height="100" width="100" >

# CCTL (Computer City Technology Ltd.)
<!-- <hr> -->
<!-- ## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system. -->

<!-- ## Links -->

<!-- * <a href="https://www.medicineforworld.com.bd/" target=_blank>www.medicineforworld.com.bd</a> -->




## Table of contents
- [CCTL (Computer City Technology Ltd.)](#cctl-computer-city-technology-ltd)
  - [Table of contents](#table-of-contents)
  - [About](#about)
  - [Modules](#modules)
  - [Prerequisites](#prerequisites)
  - [Running locally](#running-locally)
  - [Directory Structure](#directory-structure)
  - [Articles and Git repositories](#articles-and-git-repositories)
  - [Tools](#tools)
  - [Deployment](#deployment)
  - [For local Development](#for-local-development)
  - [Challanges](#challanges)
  - [Authors](#authors)
  - [License](#license)




## About
This project is being developed for Computer City Technology Ltd. Purpose of this project is to dynamically manage employees attendance and generate reports. This is totally a customized zkteco devices' based project.



## Modules

| Modules                          | Completed |
| -------------------------------- | --------- |
| Login                            | ✓         |
| **Developer**                    | ✓         |
| - DB Backup                      | ✓         |
| - Storage Backup Backup          | ✓         |
| Profile                          | ✓         |
| Change Password                  | ✓         |
| User/Employee Management         | ✓         |
| Roles                            | ✓         |
| Employment Types                 | ✓         |
| Departments                      | ✓         |
| Devices                          | ✓         |
| Shifting                         | ✓         |
| **Attendance Report**            | ✓         |
| - Today                          | ✓         |
| - Employe, Monthly               | ✓         |
| - Employe, From Date 1 To Date 2 | ✓         |




## Prerequisites

<!-- What things you need to install the software and how to install them -->

| Build With                   | Version          |
| ---------------------------- | ---------------- |
| php                          | 7.3.11 (minimum) |
| MySQL                        | 5.7 (minimum)    |
| Laravel                      | 6.18.41          |
| JWT                          |                  |
| Vue.js                       | 2.6.11           |
| Vuetify                      | 2.3.0            |
| Vuex                         | 2.3.0            |
| Vue-router                   | 3.3.4            |
| Bootstrap                    | 4.5.2            |
| Node                         | 12.13.1          |
| Axios                        | 0.19.2           |
| Material Icons               |                  |
| Sass                         | 1.26.10          |
| Tiptap-vuetify               | 1.26.10          |
| fortawesome/fontawesome-free | 5.14.0           |
| **Laravel Plugins**          |                  |
| Scribe (Api doc)             |                  |
| DomPDF                       |                  |
| Debugbar                     |                  |
| Intervention Image           |                  |




## Running locally
```
php artisan serve
localhost:8000

php artisan serve --port=8001
localhost:8001

===vue compile====
npm run watch
npm run dev
===vue compile====

=========mysql===========
mysql -h localhost -u root -p
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';
=========mysql===========

```






## Directory Structure

| Directory              | Purposes                              |
| ---------------------- | ------------------------------------- |
| /documents             | to track all the notes of the project |
| /resources/js/backend  | all backend components                |
| /resources/js/frontend | all frontend components               |
| /resources/js/mixins   | all necessary mixins                  |
| /resources/js/errors   | all error pages components            |





## Articles and Git repositories

* https://github.com/adrobinoga/zk-protocol 
    * (documents)
* https://github.com/raihanafroz/zkteco
    * (documents)
* https://github.com/nurkarim/zkteco-sdk-php/blob/master/zktest.php
* https://github.com/zsmhub/zkteco_api
* https://github.com/mlrahman/ZKTeco_Attendance_Access_Using_PHP
* https://github.com/neel55555/ZKTeco
* https://github.com/adrobinoga/zk-protocol/blob/master/protocol.md
* https://github.com/vodvud/php_zklib
* Bangla PDF
  * https://www.youtube.com/watch?v=BHJw07dn8BQ



## Tools

* For server
    * Visual Studio Code
    * Putty
    * Filezilla
    * Redis
* For local
    * MySQL Workbench
    * Firefox
        * Firefox vue-dev-tool
        * inspector
        * console
    * Postman
    * Git
    * Redis
    * Xamp




## Deployment
* export mfw.sql from local environment
* import mfw.sql in server
* install **LAMP Stack** in server environment
* **Git clone** from repository
* **.env** file change
* **delete** /bootstrap/cache/*
* Use **Filezilla** 
* Run below commands using putty - 

<details >
<summary>Click to <strong>Expand/Collapse commands</strong></summary>

```
sudo apt update
sudo apt -y install apache2
sudo apt install php7.4-common php7.4-mysql php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl php7.4-fpm php7.4-tidy libapache2-mod-php7.4 -y
php --version

sudo apt-cache policy redis-server
sudo apt-get install redis-server
sudo apt-get update
sudo apt-get install build-essential tcl
redis-server

sudo service apache2 restart
sudo systemctl restart apache2

sudo apt install mysql-server


===========replace to 000-default.conf==============
path: /etc/apache2/sites-available/000-default.conf
DocumentRoot /var/www/html/public

<Directory /var/www/html/public>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
===========replace to 000-default.conf==============

==========ufw=========
ufw allow "Apache Full"
ufw allow "Apache Secure"
ufw allow "Apache Secure"
ufw allow Apache
ufw allow 80
ufw allow 22
ufw allow 3306
ufw allow "Apache Full"
==========ufw=========

================git==================
git clone <clone url>
git add .
git commit -m <message>
================git==================

=================== move directory one step back =========================
mv * ../
=================== move directory one step back =========================


=================== remove cache =========================
/bootstrap/cache/*
=================== remove cache =========================


=================FILL Zilla=============
settings: Protocol: SFTP
Host: <host> port <22>
Logon Type: Key File
user: root <ubuntu user>
Browse:  ppk private file
Connect
=================FILL Zilla=============


==========permissions============

sudo chmod a+rwx app
sudo chmod a+rwx bootstrap
sudo chmod a+rwx config
sudo chmod a+rwx public
sudo chmod a+rwx resources
sudo chmod a+rwx routes
sudo chmod a+rwx storage
sudo chmod a+rwx vendor


sudo chown -R www-data app
sudo chown -R www-data bootstrap
sudo chown -R www-data config
sudo chown -R www-data public
sudo chown -R www-data resources
sudo chown -R www-data routes
sudo chown -R www-data storage
sudo chown -R www-data vendor
sudo chown -R www-data vendor

sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache

sudo a2enmod rewrite
service apache2 restart

sudo chmod -R ug+rwx public
sudo chown -R www-data public
sudo chmod a+rwx public
sudo chown -R 777 public

 sudo chown -R www-data:www-data public
sudo chgrp -R www-data storage public
sudo chmod -R ug+rwx storage public
chown -R www-data:www-data html/
chgrp -R www-data public
sudo chown root public
sudo chgrp root public
 sudo chown -R www-data:root public

sudo a2enmod rewrite
sudo a2enmod headers
service apache2 restart


sudo a2enmod headers

service apache2 restart



==========php.ini======================
/etc/php/7.3/apache2/php.ini
post_max_size = 8192M                                                                                                              
upload_max_filesize = 2000M
memory_limit = 4000M   

or
upload_max_filesize = 50M
memory_limit = 512M
max_input_time = -1
max_execution_time = 0
post_max_size = 100M

service apache2 restart
systemctl restart apache2



extension_dir="\xampp\php\ext" 
to
extension_dir="C:\xampp\php\ext"



extension=php_sockets.dll
==========php.ini======================



==========permissions============

```
</details>



<details >
<summary>Click to <strong>Expand/Collapse PIMS DB Backup Scheduler commands</strong></summary>

```

file name db_backup.bat

F:
cd F:\pims\softwares\cctl\cctl

rem start php artisan serve
start php artisan schedule:run

```
</details>

<details >
<summary>Click to <strong>Expand/Collapse .bat to .exe conversion</strong></summary>

```

article
    https://appuals.com/batch-to-exe/ 
windows search iexpress

cmd /c appuals.exe

```
</details>




## For local Development

```
    git clone repo

    composer install
    or
    composer install  --ignore-platform-reqs
    or
    composer install --no-cache --ignore-platform-reqs
    or
    composer install --optimize-autoloader --dev

    cp .\.env.example .env   
    change content of .env file

    import db file from
    *. public\doc\db.sql

============passport==========
    php artisan key:generate  
    or
    php artisan passport:keys 

    php artisan key:generate
    php artisan jwt:secret
    php artisan cache:clear
    php artisan config:clear
============passport==========

    php artisan serve 
    or
    php artisan serve --port=8001


    composer dump-autoload

    ==========Cache clear===============
    php artisan cache:clear
    php artisan config:cache
    php artisan route:cache
    php artisan config:cache
    php artisan view:clear
    php artisan optimize
    php artisan config:clear
    php artisan route:clear
    ==========Cache clear===============

```


## Challanges

* Device fingerprint set/write
* Employee access restriction for any specific device
* proper resources



## Authors

* **Md. Saifur Rahman** - *Full project* 



## License
This project is licensed under the <strong>Vibotixbd</strong> 
