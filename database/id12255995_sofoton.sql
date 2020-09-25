-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2020 at 12:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12255995_sofoton`
--

-- --------------------------------------------------------

--
-- Table structure for table `addQuestion`
--

CREATE TABLE `addQuestion` (
  `srno` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addQuestion`
--

INSERT INTO `addQuestion` (`srno`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `rating`) VALUES
(1, 'question ', '1', '2', '3', '4', '2', 0),
(2, 'this is another question', 'sdsajxc', 'dadsa', 'adsadx', 'refe', 'dadsa', 52),
(3, 'this is a question', '12', '13', '34', '67', '13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cAddQuestion`
--

CREATE TABLE `cAddQuestion` (
  `id` int(11) NOT NULL,
  `question` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cAddQuestion`
--

INSERT INTO `cAddQuestion` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `score`) VALUES
(1, 'Which of the following statement is correct?', 'Constructor has the same name as that of the class.', 'Destructor has the same name as that of the class with a tilde symbol at the beginning.', 'Both A and B.', 'Destructor has the same name as the first member function of the class.', 'Both A and B.', 0),
(2, 'Which of the following cannot be declared as virtual?', 'Constructor', 'Destructor', 'Data Members', 'Both A and C', 'Destructor', 0),
(3, 'How many times a constructor is called in the life-time of an object?', 'Only once', 'Twice', 'Thrice', 'Depends on the way of creation of object', 'Only once', NULL),
(4, 'What happens when a class with parameterized constructors and having no default constructor is used in a program and we create an object that needs a zero-argument constructor?', 'Compile-time error.', 'Preprocessing error.', 'Runtime error.', 'Runtime exception.', 'Runtime exception.', NULL),
(5, 'A __________ is a constructor that either has no parameters, or if it has parameters, all the parameters have default values.', 'default constructor', 'copy constructor', 'Both A and B', 'None of the Above', 'None of the above', NULL),
(6, 'How many instances of an abstract class can be created?', '1', '13', '5', '10', '1', NULL),
(7, 'Which of the following is correct about class and structure?', 'class can have member functions while structure cannot.', 'class data members are public by default while that of structure are private.', 'Pointer to structure or classes cannot be declared.', 'class data members are private by default while that of structure are public by default.', 'class data members are public by default while that of structure are private.', NULL),
(8, 'Which of the following statement is correct?', 'A constructor is called at the time of declaration of an object.', 'A constructor is called at the time of use of an object.', 'A constructor is called at the time of declaration of a class.', 'A constructor is called at the time of use of a class.', 'A constructor is called at the time of declaration of an object.', NULL),
(9, 'Which of the following cannot be used with the keyword virtual?', 'class', 'member functions', 'constructor', 'destructor', 'constructor', NULL),
(10, 'Which of the following is used to make an abstract class?', 'Declaring it abstract using static keyword.', 'Declaring it abstract using virtual keyword.', 'Making at least one member function as virtual function.', 'Making at least one member function as pure virtual function.', 'Declaring it abstract using virtual keyword.', NULL),
(11, 'Which of the following are available only in the class hierarchy chain?', 'Public data members', 'Private data members', 'Protected data members', 'Member functions', 'Protected data members', NULL),
(12, 'How many types of polymorphisms are supported by C++?', '1', '2', '3', '4', '2', NULL),
(13, 'Which of the following statement is correct?', 'Once a reference variable has been defined to refer to a particular variable it can refer to any other variable.', 'A reference is indicated by using && operator.', 'Once a reference variable has been defined to refer to a particular variable it cannot refer to any other variable.', 'A reference can be declared beforehand and initialized later.', 'A reference can be declared beforehand and initialized later.', NULL),
(14, 'Which of the following statement is correct regarding destructor of base class?', 'Destructor of base class should always be static.', 'Destructor of base class should always be virtual.', 'Destructor of base class should not be virtual.', 'Destructor of base class should always be private.', 'Destructor of base class should always be private.', NULL),
(15, 'Which of the following two entities (reading from Left to Right) can be connected by the dot operator?', 'A class member and a class object.', 'A class object and a class.', 'A class and a member of that class.', 'A class object and a member of that class.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `htmlAddQuestion`
--

CREATE TABLE `htmlAddQuestion` (
  `id` int(11) NOT NULL,
  `question` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `htmlAddQuestion`
--

INSERT INTO `htmlAddQuestion` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `score`) VALUES
(1, ' which of the following tag is used to mark a begining of paragraph ?', '<Tc>', '<br>', '<P>', '<TR>\r\n', '<P>', 0),
(2, ' Correct HTML tag for the largest heading is', 'head', 'h6', 'heading', 'h1', 'h1', 0),
(3, ' The attribute of <form> tag', 'mrthod', 'action', 'both', 'none', 'both ', NULL),
(4, ' www is based on which model?', 'local server', 'client serevr', '3tier', 'client server', '', NULL),
(5, ' What are Empty elements and is it valid?', ' No, there is no such terms as Empty Element\r\n', ' Empty elements are element with no data\r\n', ' No, it is not valid to use Empty Element\r\n', 'none', 'none', NULL),
(6, '7. Which of the following is the attribute that specifies additional horizontal space, in pixels, to be reserved on either side of an embedded item like an iframe, applet, image, and so on?', 'height', 'hspace', 'hidefocus', 'datasrc', 'datasrc', NULL),
(7, 'The accesskey attribute specifies a keyboard navigation accelerator for the element.', 'True', 'False', '0', '0', 'true', NULL),
(8, '9. Which of the following is the attribute that is used to set a global identifier for a microdata item?', 'key', 'id', 'itemid', 'classid', 'itemid', NULL),
(9, '10. Which of the following is the attribute that is used to add a name/value pair to a microdata item?', 'itemscope', 'itemprof', 'itemref', 'itemid', 'itemref', NULL),
(10, ' 2)   The elements <DIV> and <SPAN> have the following characteristics ', 'a. Element <DIV> inherits properties defined for <SPAN> in a stylesheet', 'b. Elements <SPAN> and <DIV> define content to be inline or block-level', 'c. <DIV> and <SPAN> are used as alternatives for the element <P>', 'd. <DIV> is used inside element <P>.', 'a. Element <DIV> inherits properties defined for <SPAN> in a stylesheet', NULL),
(11, ' 4)   Which is not a property of attribute Behaviour of <Marquee> tag? ', 'alternate', 'blur', 'scroll', 'slide', 'blur', NULL),
(12, ' 5)   Which of these tags are all <table> tags? ', 'a. <table><head><tfoot>', 'b. <table><tr><td>', 'c. <table><tr><tt>', '0', 'd. <thead><body><tr>', NULL),
(13, ' 7)   How can you create an e-mail link? ', 'a. <mail href=\"a@b\">', 'b. <mail>a@b</mail>', 'c. <a href=\"a@b\">', 'd. <a href=\"mailto:a@b.com\">', 'd. <a href=\"mailto:a@b.com\">', NULL),
(14, ' 8)   What is the correct HTML for creating a hyperlink? ', 'a. <a name=\"\">A</a>', 'b. <a>B</a>', 'c. <a href=\"http://www.example.com\">example</a>', 'd. <a url=\"http://www.example.com\">example</a>     ', 'd. <a url=\"http://www.example.com\">example</a>     ', NULL),
(15, ' 9)   What is the preferred way for adding a background color in HTML? ', 'a. <body background=\"yellow\">', 'b. <background>yellow</background>', 'c. <body style=\"background-color:yellow\">    ', 'd. <background color=\"yellow\">text<background>', 'c. <body style=\"background-color:yellow\">    ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `srno` int(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`srno`, `company`, `address`, `email`, `qualification`, `skills`, `experience`) VALUES
(2, 'ada', 'ads', 'asd@g.in', 'sda', 'asd', 'asd'),
(3, 'dss', 'sds', 'ss@g.in', 'wsedw', 'sads', 'fdsf'),
(4, 'Company', 'Pune', 'shreyasikhar26@gmail.com', 'BE', 'CSS, Bootstrap, PHP', 'No experience Required');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `srno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `endYear` int(11) NOT NULL,
  `degreeStatus` enum('pursuing','graduated') NOT NULL,
  `collegeName` varchar(255) NOT NULL,
  `cgpa` float NOT NULL,
  `job` mediumtext NOT NULL,
  `internship` mediumtext NOT NULL,
  `training` mediumtext NOT NULL,
  `project` mediumtext NOT NULL,
  `skills` mediumtext NOT NULL,
  `resume` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`srno`, `name`, `email`, `mobile`, `city`, `degree`, `stream`, `endYear`, `degreeStatus`, `collegeName`, `cgpa`, `job`, `internship`, `training`, `project`, `skills`, `resume`) VALUES
(1, 'shreyas', 'shreyas@gmail.com', 9876543210, 'Pune', 'Be', 'Comp', 2021, 'pursuing', 'GCOEARA', 4.9, 'No job', 'sdgshd', 'sdsa', 'werdewd', 'skill', 'qerty'),
(3, 'Jag', 'jag@gm.com', 7756888465, 'edgt', 'btech', 'arts', 2022, 'pursuing', 'ZPCOE', 7.34, 'infoCon', 'Infocom', 'Infocom', 'Infocom', 'infocom', NULL),
(4, 'Jag', 'yahoo@gmail.com', 7756888465, 'edgt', 'btech', 'arts', 2022, 'pursuing', 'ZPCOE', 7.34, 'infoCon', 'Infocom', 'Infocom', 'Infocom', 'infocom', NULL),
(5, 'Vaishakh', 'vaishakhautade@gmail.com', 7745888888, 'pune', 'B.E.', 'Computer', 2022, 'pursuing', 'GCOEARA', 8, 'no', 'no', 'no', 'no', 'no', 'file.pdf'),
(6, 'abhishek', 'abhishek.wadmare@gmail.com', 77665544, 'pune', 'B.E.', 'Computer', 2022, 'pursuing', 'GCOEARA', 8, 'no1', 'no2', 'no3', 'no4', 'no6', 'file.pdf'),
(7, 'Rohit Mali', 'rohitmali243@gmail.com', 9370615199, 'dhule', 'B.E.', 'computer', 2021, 'pursuing', 'gcoeara', 9, 'web developer', 'web development', 'no', 'no', 'no', NULL),
(8, 'Rohit Mali', 'malirohit@gmail.com', 9370615199, 'dhule', 'B.E.', 'computer', 2021, 'pursuing', 'gcoeara', 9, 'web developer', 'web development', 'no', 'no', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `SrNo` int(5) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Skill` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `DownloadContent` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`SrNo`, `email`, `Skill`, `DownloadContent`) VALUES
(1, '', 'Kotlin', 'https://kotlinlang.org'),
(2, '', 'Java', 'https://www.java.com/en/'),
(3, '', ' Web Development ', 'https://html.com/'),
(4, '', 'SEO', 'https://www.google.com/'),
(5, '', 'Javascript', 'https://javascript.info/'),
(6, 'shreyasikhar26@gmail.com', 'PHP', 'https://www.php.net/'),
(8, 'shreyasikhar26@gmail.com', 'bhjng', 'cvbn');

-- --------------------------------------------------------

--
-- Table structure for table `sqlAddQuestion`
--

CREATE TABLE `sqlAddQuestion` (
  `id` int(11) NOT NULL,
  `question` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sqlAddQuestion`
--

INSERT INTO `sqlAddQuestion` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `score`) VALUES
(1, 'Which SQL function is used to count the number of rows in a SQL query?', 'COUNT()', 'NUMBER()', 'SUM()', 'COUNT', 'COUNT()', NULL),
(2, 'Which SQL keyword is used to retrieve a maximum value?', 'MOST', 'TOP', 'MAX', 'UPPER', 'MAX', NULL),
(3, 'Which data manipulation command is used to combines the records from one or more tables?', 'SELECT', 'PROJECT', 'JOIN', 'PRODUCT', 'JOIN', NULL),
(4, 'Which of the following is not a valid SQL type? ', 'DECIMAL', 'NUMERIC', 'FLOAT', 'CHARACTER', 'DECIMAL', NULL),
(5, 'SQL permits attribute names to be repeated in the same relation. (True or False)', 'TRUE', 'FALSE', '0', '0', 'FALSE', NULL),
(6, 'Which operator is used to compare a value to a specified list of values?', 'BETWEEN', 'ANY', 'IN ', 'CALL', 'IN', NULL),
(7, 'A SQL query automatically eliminates duplicates (True / False) ?', 'TRUE', 'FALSE', '0', '0', 'FALSE', NULL),
(8, 'The SQL used by front-end application programs to request data from the DBMS is called _______', 'DML', 'DDL', 'VDL', 'SDL', 'DML', NULL),
(9, 'The command used to delete a particular column in a relation is ____________', ' UPDATE TABLE ', ' TRUNCATE COLUMN ', ' ALTER , DROP ', ' DELETE COLUMN', 'ALTER,DROP', NULL),
(10, 'Which of the following operations requires the relations to be union compatible? ', 'UNUION', 'INTERSECTION', 'DIFFERENCE', 'ALL OF ABOVE', 'ALL OF ABOVE', NULL),
(11, 'The database language that allows us to access data in a database is called :', 'DCL', 'DDL', 'DML', 'None', 'DCL', NULL),
(12, 'Which of the following is a comparison operator in SQL? ', ' Double equal sign ( == )', 'LIKE', 'BETWEEN', ' Single equal sign ( = )', ' Double equal sign ( == )', NULL),
(13, 'Which of the following is a legal expression in SQL? ', ' SELECT NULL FROM SALES; ', ' SELECT NAME FROM SALES; ', ' SELECT * FROM SALES WHEN PRICE = NULL; ', ' SELECT # FROM SALES;', ' SELECT * FROM SALES WHEN PRICE = NULL; ', NULL),
(14, 'Which data type can store unstructured data in a column?', 'RAW', 'CHAR', 'NUMERIC', 'VARCHAR', 'RAW', NULL),
(15, 'A SQL query will not work if there are no indexes on the relations - Is it true ?', 'YES', 'NO', '0', '0', 'NO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testrecords`
--

CREATE TABLE `testrecords` (
  `SrNo` int(5) NOT NULL,
  `Date` date NOT NULL,
  `TestName` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Results` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testrecords`
--

INSERT INTO `testrecords` (`SrNo`, `Date`, `TestName`, `Results`, `email`) VALUES
(1, '2019-12-19', 'Infocom', 'pass', 'yahoo@gmail.com'),
(2, '2019-11-13', 'RIL', 'fail', 'vae@gmail.com'),
(3, '2019-12-20', 'TXS', 'Recommended', 'gm@gm.com'),
(4, '2020-01-15', 'Witrp', 'pass', 'jag@gm.com'),
(5, '2020-01-08', 'ANAZIN', 'pass', 'vaishakhautade@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `srno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `type` enum('recruiter','candidate') NOT NULL DEFAULT 'recruiter',
  `email` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`srno`, `name`, `dob`, `gender`, `type`, `email`, `contact`, `password`) VALUES
(1, 'Shreyas Ikhar', '1999-09-26', 'male', 'recruiter', 'shreyasikhar26@gmail.com', 9049441721, 'bbf49155503e3f853c08a400787b9fed'),
(2, 'Vaishakh Autade', '2000-12-12', 'male', 'candidate', 'vaishakhautade@gmail.com', 9876543210, '462a36b5d9bca520a8f55da40ad78c3a'),
(13, 'Abhishek Wadmare', '1999-06-27', 'male', 'candidate', 'abhishek.wadmare@gmail.com', 9067649737, '5bedeb22097286442bdb908104090f2a'),
(14, 'Pournima Nagorao Hatkar', '2020-01-14', 'female', 'candidate', 'pournimanhatkar999@gmail.com', 9011286652, 'e9db82df727674274599d81cae6fb862'),
(15, 'Gautam Helange', '1999-02-17', 'male', 'candidate', 'g@g.com', 9067649737, '5bedeb22097286442bdb908104090f2a'),
(16, 'ggffgh', '2020-01-09', 'male', 'recruiter', 'hgh@hg.com', 9874563210, '9983473e4144fb937675aa2b5dfee0cb'),
(17, 'sadd gdrf gcffgfg', '2020-01-02', 'male', 'recruiter', 'aaaaaa@d.com', 7897858745, '9983473e4144fb937675aa2b5dfee0cb'),
(18, 'Gautam Helange', '2020-01-01', 'male', 'recruiter', 'gautam@gmail.com', 9878987897, '2b97d12116e6e2477d5c64c22e59a966'),
(19, 'Vaeere', '2020-01-08', 'male', 'recruiter', 'fs@g.com', 9067649737, '5bedeb22097286442bdb908104090f2a'),
(21, 'Gautam Helange', '2020-01-13', 'male', 'recruiter', 'gautam025@gmail.com', 7894561230, '627346a39eb371215f309a1af5b77a07'),
(23, 'Pournima', '2020-01-01', 'female', 'candidate', 'pournima@gmail.com', 9878987897, '5a532da5c0b2626edffac734b2a6fd4e'),
(24, 'Rohit Mali', '2020-02-13', 'male', 'candidate', 'rohitmali243@gmail.com', 9370615199, '2c8b8790970dac1e84b3bb5b4094b1db'),
(25, 'Rohit Mali', '2020-02-13', 'male', 'candidate', 'malirohit169@gmail.com', 9370615199, '27b294116dbd958399662076e48f68d5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addQuestion`
--
ALTER TABLE `addQuestion`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `cAddQuestion`
--
ALTER TABLE `cAddQuestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htmlAddQuestion`
--
ALTER TABLE `htmlAddQuestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `sqlAddQuestion`
--
ALTER TABLE `sqlAddQuestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testrecords`
--
ALTER TABLE `testrecords`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addQuestion`
--
ALTER TABLE `addQuestion`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cAddQuestion`
--
ALTER TABLE `cAddQuestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `htmlAddQuestion`
--
ALTER TABLE `htmlAddQuestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `SrNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sqlAddQuestion`
--
ALTER TABLE `sqlAddQuestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
