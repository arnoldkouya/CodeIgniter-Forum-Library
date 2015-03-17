# CodeIgniter-Forum-Library
CodeIgniter Forum Library is the first version of  a simple library for framework CodeIgniter.
How to use?
Before installation, create a database instance (forum)
with the following tables:

-subject
CREATE TABLE IF NOT EXISTS `subject` (
Id_subject` `int (11) NOT NULL,
  Lib_subject` `varchar (255) NOT NULL,
  `Desc_subject` text NOT NULL,
  Number_comment` `int (11) NOT NULL DEFAULT '0'
  Id_user` `int (11) NOT NULL,
  `Date_subject` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET AUTO_INCREMENT = 4 = latin1;

-Comment_subject
CREATE TABLE IF NOT EXISTS `comment_subject` (
Id_comment` `int (11) NOT NULL,
  `Comments` text NOT NULL,
  Id_subject` `int (11) NOT NULL,
  Id_user` `int (11) NOT NULL,
  `Date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET AUTO_INCREMENT = 3 = latin1;



1-If you have already installed on your machine Codeigniter
   * Clone the Codeigniter Library Forum
   * Ouveze the directory application / libraries
   * Copy the file in your directory forum.php application / libraries
    * Go to your controller when you want to load the library and do the following: $ this-> load-> library ('Forum');
To use the functions:
                   a) To read reviews: $ this-> forum-> read_all_subject ();
                   b) For inserts: $ this-> forum-> create_subject ();


2-In contaire case, use the cloned project and complete the file (application / config, application / database)

Good coding!
Thank you to look back;)
