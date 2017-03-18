-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2016 at 07:54 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `email`, `password`) VALUES
('sai krishna', 'cherukupally', 'chskhyd@gmail.com', '12345'),
('rachana', 'gadilla', 'rachanagadila@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `quesnum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `answer` varchar(10) NOT NULL,
  PRIMARY KEY (`quesnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quesnum`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'C is derived from which of the following languages.?', 'Fortran', 'pascal', 'c++', 'B', '4'),
(2, 'void main()\n{\n     int const * p=5;\n      printf("%d",++(*p) );\n}', 'Compiler error', 'run time error', '6', '5', '1'),
(3, ' main()\n{\n   char s[ ]="man";\n    int i;\n    for(i=0;s[ i ];i++)\n    printf("%c%c%c%c",s[ i ] , *(s+i), *(i+s), i[s]);\n}', 'mmmm aaaa nnnn', 'man', 'error', 'None of the above', '1'),
(4, 'Which of the following is not a storage class. ?', 'const ', 'extern', 'static ', 'auto', '1'),
(5, 'What does SQL stand for?', 'Sequential Query Language', 'Structured Query Language', 'Sequal Query Language', 'None of the above', '2'),
(6, 'A query whose return values are used in filtering conditions of the main\nquery.?', 'Index', 'sub query', 'primarry query', 'join query', '2'),
(7, 'You can logically relate data from multiple tables using  ______.?', 'primary key', 'Foreign key', 'candidate key', 'composite key', '2'),
(8, 'Can I overload the destructor for my class?', 'yes', 'No', 'cant Predict', 'None of the above', '2'),
(9, 'main()\n{\n     printf("%p",main);\n}', 'compile time error', 'run time error', 'Some address will be printed', 'None of the above', '3'),
(10, 'What is the data structures used to perform recursion?', 'Queue', 'Stack', 'Linked list', 'None of the above', '2'),
(11, 'main()\n{\n       static int var = 5;\n       printf("%d ",var--);\n       if(var)\n         main();\n}', '  1 2 3 4 5 ', 'error', '5 4 3 2 1', 'None of the above', '3'),
(12, 'main()\n{\n       int i=-1,j=-1,k=0,l=2,m;\n       m=i++&&j++&&k++||l++;\n       printf ("%d %d %d %d %d",i,j,k,l,m);\n}', '0 0 1 2 1', '0 0 2 3 1', '0 0 1 3 1', '1 2 3 0 0', '3'),
(13, 'main()\n{\n    char *p;\n    printf("%d %d ",sizeof(*p),sizeof(p));\n}', '2 3', '1 4', '1 2', '4 6', '3'),
(14, 'main()\n{\n   int i=3;\n   switch(i)\n  {\n      default:printf("zero");\n       case 1: printf("one");\n       break;\n       case 2:printf("two");\n       break;\n       case 3: printf("three");\n       break;\n  }\n}', 'zero', 'one', 'three', 'two', '3'),
(15, 'main()\n{\n   int c= - -2;\n   printf("c=%d",c);\n}', '-2', '--2', '2', 'error', '3'),
(16, 'main()\n{\n   int i=10;\n   i=! i>14;\n   Printf ("i=%d",i);\n}', 'i=1', 'i=2', 'i=0', 'i=3', '3'),
(17, 'main()\n{\n    printf("\\nab");\n    printf("\\bsi"); \n    printf("\\rha");\n}', 'absiha', 'error', 'hai', 'None of the above', '3'),
(18, 'main()\n{\n   int i=5;\n     printf("%d%d%d%d%d%d",i++,i--,++i,--i,i);\n}', '45544', '55545', '45545', 'None of the above', '3'),
(19, '#define square(x) x*x\nmain()\n{\n    int i;\n   i = 64/square(4);\n    printf("%d",i);\n}', '4', '16', '64', 'None of the above', '3'),
(20, '#include <stdio.h>\n#define a 10\nmain()\n{\n   #define a 50\n    printf("%d",a);\n}', '10', 'error', '50', 'None of the above', '3'),
(21, 'void main()\n{\n   int i=5;\n   printf("%d",i+++++i);\n}', '7', '6', 'Compiler Error', 'None of the above', '3'),
(22, '#include<stdio.h>\nmain()\n{\nint i=1,j=2;\nswitch(i)\n{\ncase 1: printf("GOOD");\nbreak;\ncase j: printf("BAD");\nbreak;\n}\n}', 'GOOD', 'BAD', 'error', 'None of the above', '3'),
(23, 'main()\n{\nint i;\nprintf("%d",scanf("%d",&i)); // value 10 is given as input here\n}', '1', '10', 'error', 'None of the above', '1'),
(24, '#include<stdio.h>\nmain()\n{\nchar s[]={''a'',''b'',''c'',''\\n'',''c'',''\\0''};\nchar *p,*str,*str1;\np=&s[3];\nstr=p;\nstr1=s;\nprintf("%d",++*p + ++*str1-32);\n}', 'a', 'M', 'b', 'N', '2'),
(25, 'main()\n{\nextern out;\nprintf("%d", out);\n}\nint out=100;', '100', 'error', 'No output', 'None of the above', '1'),
(26, 'main( )\n{\nint a[ ] = {10,20,30,40,50},j,*p;\nfor(j=0; j<5; j++)\n{\nprintf(“%d” ,*a);\na++;\n}\np = a;\nfor(j=0; j<5; j++)\n{\nprintf(“%d ” ,*p);\np++;\n}\n}', '10,20,30,40,50', '20,30,40,50', 'error', 'None of the above', '3'),
(27, 'main()\n{\nchar *str1="abcd";\nchar str2[]="abcd";\nprintf("%d %d %d",sizeof(str1),sizeof(str2),sizeof("abcd"));\n}', '2 2 2', '2 5 4', '2 5 5', 'None of the above', '3'),
(28, '#define FALSE -1\n#define TRUE 1\n#define NULL 0\nmain() {\nif(NULL)\nputs("NULL");\nelse if(FALSE)\nputs("TRUE");\nelse\nputs("FALSE");\n}', 'FALSE', 'TRUE', 'NULL', 'error', '2'),
(29, 'main()\n{  \n   int *j;\n  {\n   int i=10;\n   j=&i;\n  }\nprintf("%d",*j);\n}', '10', 'error', '11', 'garbage value', '1'),
(30, '#include<stdio.h>\nmain()\n{\nconst int i=4;\nfloat j;\nj = ++i;\nprintf("%d %f", i,++j);\n}', '4', '5', 'error', 'None of the above', '3'),
(31, 'asfsaa', 'fassa', 'sfdsa', 'sadfaf', 'asfasf', '3'),
(32, 'safsafsa', 'Index', 'error', '5 4 3 2 1', 'join query', '2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `collegeid` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`collegeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`firstname`, `lastname`, `collegeid`, `email`, `password`) VALUES
('rachana', 'gadila', '12jj1a1224', 'rachanagadila@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `testresults`
--

CREATE TABLE IF NOT EXISTS `testresults` (
  `studentid` varchar(10) NOT NULL,
  `score` int(5) NOT NULL,
  `correct` int(5) NOT NULL,
  `wrong` int(5) NOT NULL,
  `unattempt` int(5) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testresults`
--

INSERT INTO `testresults` (`studentid`, `score`, `correct`, `wrong`, `unattempt`) VALUES
('12jj1a1224', 0, 0, 0, 32);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
