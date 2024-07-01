<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "CRM";

// MySQLi connection
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Create database if not exists
if ($mysqli->query("CREATE DATABASE IF NOT EXISTS $dbname") === TRUE) {
//    echo "Database created successfully or already exists.";
} else {
    die("Error creating database: " . $mysqli->error);
}

// Select the database
$mysqli->select_db($dbname);

// Function to create table
function createTable($mysqli, $sql) {
    if ($mysqli->query($sql) === TRUE) {
//        echo "Table created successfully.<br>";
    } else {
        echo "Error creating table: " . $mysqli->error . "<br>";
    }
}

// Function to insert data into table
function insertData($mysqli, $sql) {
    if ($mysqli->query($sql) === TRUE) {
//        echo "Data inserted successfully.<br>";
    } else {
        echo "Error inserting data: " . $mysqli->error . "<br>";
    }
}

// SQL to create admin table
$createAdminTable = "CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

createTable($mysqli, $createAdminTable);

// Insert data into admin table
$insertAdminData = "INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '12345678')
ON DUPLICATE KEY UPDATE `name` = VALUES(`name`), `password` = VALUES(`password`);";

insertData($mysqli, $insertAdminData);

// SQL to create prequest table
$createPrequestTable = "CREATE TABLE IF NOT EXISTS `prequest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `wdd` varchar(255) DEFAULT NULL,
  `cms` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `smo` varchar(255) DEFAULT NULL,
  `swd` varchar(255) DEFAULT NULL,
  `dwd` varchar(255) DEFAULT NULL,
  `fwd` varchar(255) DEFAULT NULL,
  `dr` varchar(255) DEFAULT NULL,
  `whs` varchar(255) DEFAULT NULL,
  `wm` varchar(255) DEFAULT NULL,
  `ed` varchar(255) DEFAULT NULL,
  `wta` varchar(255) DEFAULT NULL,
  `opi` varchar(255) DEFAULT NULL,
  `ld` varchar(255) DEFAULT NULL,
  `da` varchar(255) DEFAULT NULL,
  `osc` varchar(255) DEFAULT NULL,
  `nd` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `query` longtext DEFAULT NULL,
  `posting_date` date DEFAULT NULL,
  `remark` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

createTable($mysqli, $createPrequestTable);

// Insert data into prequest table
$insertPrequestData = "INSERT INTO `prequest` (`name`, `email`, `contactno`, `company`, `wdd`, `query`, `posting_date`, `remark`) VALUES
('mohammad ashrafi', 'mohamadashrafi46@gmail.com', '09102403100', 'Test', 'Website Design & Development', 'This is for testing', '2024-04-22', 'This is for test')
ON DUPLICATE KEY UPDATE `name` = VALUES(`name`), `email` = VALUES(`email`), `contactno` = VALUES(`contactno`), `company` = VALUES(`company`), `wdd` = VALUES(`wdd`), `query` = VALUES(`query`), `posting_date` = VALUES(`posting_date`), `remark` = VALUES(`remark`);";

insertData($mysqli, $insertPrequestData);

// SQL to create ticket table
$createTicketTable = "CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(11) DEFAULT NULL,
  `email_id` varchar(300) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `task_type` varchar(300) DEFAULT NULL,
  `priority` varchar(300) DEFAULT NULL,
  `ticket` longtext DEFAULT NULL,
  `attachment` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `admin_remark` longtext DEFAULT NULL,
  `posting_date` date DEFAULT NULL,
  `admin_remark_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

createTable($mysqli, $createTicketTable);

// Insert data into ticket table
$insertTicketData = "INSERT INTO `ticket` (`ticket_id`, `email_id`, `subject`, `task_type`, `priority`, `ticket`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
('10', 'mohamadashrafi46@gmail.com', 'Test Ticket', 'billing', 'important', 'This ticket for testing .', 'closed', 'Ticket resolved. Solution provided', '2024-04-22', '2024-04-21 10:30:00')
ON DUPLICATE KEY UPDATE `ticket_id` = VALUES(`ticket_id`), `email_id` = VALUES(`email_id`), `subject` = VALUES(`subject`), `task_type` = VALUES(`task_type`), `priority` = VALUES(`priority`), `ticket` = VALUES(`ticket`), `status` = VALUES(`status`), `admin_remark` = VALUES(`admin_remark`), `posting_date` = VALUES(`posting_date`), `admin_remark_date` = VALUES(`admin_remark_date`);";

insertData($mysqli, $insertTicketData);

// SQL to create user table
$createUserTable = "CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

createTable($mysqli, $createUserTable);

// Insert data into user table
$insertUserData = "INSERT INTO `user` (`name`, `email`, `alt_email`, `password`, `mobile`, `gender`, `address`, `posting_date`) VALUES
('mohamad ashrafi', 'mohamadashrafi46@gmail.com', 'mohamadashrafi46@gmail.com', '12345678', '09102403100', 'm', 'iran karaj', '2024-04-22 12:25:19')
ON DUPLICATE KEY UPDATE `name` = VALUES(`name`), `email` = VALUES(`email`), `alt_email` = VALUES(`alt_email`), `password` = VALUES(`password`), `mobile` = VALUES(`mobile`), `gender` = VALUES(`gender`), `address` = VALUES(`address`), `posting_date` = VALUES(`posting_date`);";

insertData($mysqli, $insertUserData);

// SQL to create usercheck table
$createUserCheckTable = "CREATE TABLE IF NOT EXISTS `usercheck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logindate` varchar(255) DEFAULT '',
  `logintime` varchar(255) DEFAULT '',
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT '',
  `ip` varbinary(16) DEFAULT NULL,
  `mac` varbinary(16) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

createTable($mysqli, $createUserCheckTable);

// Insert data into usercheck table
$insertUserCheckData = "INSERT INTO `usercheck` (`logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`) VALUES
('2024/04/22', '05:59:18pm', 1, 'mohamad ashrafi', 'mohamadashrafi46@gmail.com', 0x3a3a31, 0x31322d46342d38442d31322d39392d39)
ON DUPLICATE KEY UPDATE `logindate` = VALUES(`logindate`), `logintime` = VALUES(`logintime`), `user_id` = VALUES(`user_id`), `username` = VALUES(`username`), `email` = VALUES(`email`), `ip` = VALUES(`ip`), `mac` = VALUES(`mac`);";

insertData($mysqli, $insertUserCheckData);

// Create install.lock file to indicate that installation is complete
file_put_contents('install.lock', 'Installation completed');

// Close connection
$mysqli->close();
?>
