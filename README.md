# CodeIgniter-Forum-Library
CodeIgniter Forum Library is the first version of  a simple library for framework CodeIgniter.
How to use?
Before installation, create a database instance (forum)
with the following tables:<br>

-<b>subject</b><br>
CREATE TABLE IF NOT EXISTS `subject` (<br>
Id_subject` `int (11) NOT NULL,<br>
  Lib_subject` `varchar (255) NOT NULL,<br>
  `Desc_subject` text NOT NULL,<br>
  Number_comment` `int (11) NOT NULL DEFAULT '0'<br>
  Id_user` `int (11) NOT NULL,<br>
  `Date_subject` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP<br>
) ENGINE = InnoDB DEFAULT CHARSET AUTO_INCREMENT = 4 = latin1;<br><br><br>

-<bComment_subject</b<br>
CREATE TABLE IF NOT EXISTS `comment_subject` (<br>
Id_comment` `int (11) NOT NULL,<br>
  `Comments` text NOT NULL,<br>
  Id_subject` `int (11) NOT NULL,<br>
  Id_user` `int (11) NOT NULL,<br>
  `Date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP<br>
) ENGINE = InnoDB DEFAULT CHARSET AUTO_INCREMENT = 3 = latin1;<br>



1-If you have already installed on your machine Codeigniter<br><br>
   * Clone the Codeigniter Library Forum<br>
   * Ouveze the directory application / libraries<br>
   * Copy the file in your directory forum.php application / libraries<br>
    * Go to your controller when you want to load the library and do the following: $ this-> load-> library ('Forum');<br>
To use the functions:<br>
                   a) To read reviews: $ this-> forum-> read_all_subject ();<br>
                   b) For inserts: $ this-> forum-> create_subject ();<br>


2-In contaire case, use the cloned project and complete the file (application / config, application / database)<br><br>

Good coding!<br>
Thank you to look back;)<br><br>
