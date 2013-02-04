
sudo yum -y update

sudo yum -y install httpd php mysql mysql-server php-mysql

sudo service httpd restart
sudo service mysqld restart

sudo mysql < mysql.batch
