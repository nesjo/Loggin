# Loggin
Proyecto Loggin whit Bootstrap, POO, PDO, Singleton, Dependency Injection, DAO and VO.
###Requirements
* Apache2
* PHP7.0
* MySQL
* PHPMyAdmin (Optional)

### Step 0
```
apt install git 
```

### Step 1
Go to /var/www/html/ and clone the project
```
git clone https://github.com/allexsv/Loggin.git
```

### Step 2
Create Database en table for project
```
mysql -u root -p 
>CREATE DATABASE Loggin; [INTRO]
>GRANT ALL PRIVILEGES ON Loggin.* TO "youruser"@localhost IDENTIFIED BY "yourpass"; [INTRO]
>FLUSH PRIVILEGES; [INTRO]
>EXIT [INTRO]
```
### Step 3
Go to PHPMyAdmin and loggin with "youruser" and "yourpass", save the User.sql in your desktop computer and import to database Loggin create in the last step. Or use mysql the next command:
```
mysql -u youruser -p Loggin < Loggin/Users.sql
```

### Step 4
change the "root" by "youruser" and "021$" by "yourpass" in the Loggin/class/Connection.php 

### Step 5
Loggin with user "foo" and password "021$$"

Finish tutorial.
