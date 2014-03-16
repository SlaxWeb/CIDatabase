Database
========

This is just a wrapper for Illuminate Database in CodeIgniter.
To use, simply create a config file in CodeIgniter which contains these settings:
db_driver
db_host
db_name
db_user
db_pass
db_charset
db_collation
db_prefix

Load the config file before calling the factory:
$this->config->load("confFileName", true);
// and pass it to factory
$db = new \SlaxWeb\Database\Factory($this->config["confFileName"]);
