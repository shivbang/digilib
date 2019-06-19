-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 02:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilib`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `name` varchar(40) NOT NULL,
  `author` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imgsrc` varchar(40) NOT NULL,
  `highlight` varchar(10) DEFAULT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`name`, `author`, `description`, `imgsrc`, `highlight`, `category`) VALUES
('The Subtle Art Of Not Giving A Fuck', 'Mark Manson', 'About the Book\r\n\"In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be \"positive\" all the time so that we can truly become better, happier people. For decades, we\'ve been told that positive thinking isthe key to a happy, rich life. \"F**k positivity,\" Mark Manson says.', 'img/book/ngaf.jpg', 'new', 'Self Help'),
('The Man Who Quit Money', 'Mark Sundeen', 'In 2000, Daniel Suelo left his life savings-all thirty dollars of it-in a phone booth. He has lived without money-and with a newfound sense of freedom and security-ever since. The Man Who Quit Money is an account of how one man learned to live, sanely and happily, without earning, receiving, or spending a single cent.', 'img/book/manwhoquit.jpg', 'popular', 'Self Help'),
('How to Win Friends and Influence People', 'Dale Carnegie', 'Millions of people around the world have - and continue to - improve their lives based on the teachings of Dale Carnegie.', 'img/book/winfriends.jpg', 'new', 'Self Help'),
('4-Hour Work Week', 'Timothy Ferriss', 'About the Book\r\nTim Ferriss has trouble defining what he does for a living. Depending on when you ask this controversial Princeton University guest lecturer, he might answer: \'I race motorcycles in Europe\' \'I ski in the Andes\' \'I scuba dive in Panama\' \'I dance tango in Buenos Aires\' He has spent more than five years learning the secrets of the \'New Rich\', a fast-growing subculture that has abandoned the \'deferred-life plan\' and instead mastered the new currencies - time and mobility - to create ', 'img/book/escape.jpg', 'popular', 'Self Help'),
('DARE TO DREAM AND WORK TO WIN', 'DR. TOM BARRETT', 'Discover how wealth is actually created, the psychology of personal success, how to think and live as an entrepreneur, and how to succeed in network marketing.', 'img/book/dream.jpg', 'popular', 'Self Help'),
('GIRL WHO PLAYED WITH FIRE', 'Stieg Larsson', 'Mikael Blomkvist, crusading journalist and publisher of the magazine Millennium, has decided to run a story that will expose an extensive sex trafficking operation between Eastern Europe and Sweden, implicating well-known and highly placed members of Swedish society, business, and government.', 'img/book/fire.jpg', 'new', 'Mystery'),
('ECHO PARK', 'MICHAELCONNELLY', 'In 1993 Harry Bosch was assigned the case of a missing person, Marie Gesto. The young woman was never found - dead or alive - and the case has haunted Bosch ever since.Thirteen years later Bosch is in the Open-Unsolved Unit when he gets a call from the DAs office. A man accused of two killings is willing to confess to several other murders in a deal to avoid the death penalty', 'img/book/echo.jpg', 'popular', 'Mystery'),
('THE TOURNAMENT', 'Matthew Reilly', 'From global superstar Matthew Reilly comes a gripping historical thriller; a tale of murder, passion and intrigue set in the majestic city of Constantinople.England, 1546. A young Princess Elizabeth is in a dangerous position as her older siblings jostle for the throne.Roger Ascham, Elizabeths teacher and mentor, is determined to keep her safe.', 'img/book/tour.jpg', 'new', 'Mystery'),
('THE VENICE CONSPIRACY', 'Jon Trace', 'When a brutal killer is on the loose in Venice, ex-priest Tom Shaman finds himself catapulted headlong into a series of ritualistic killings unlike anything Venice has ever seen.', 'img/book/venice.jpg', 'new', 'Mystery'),
('THE ADVENTURES OF SHERLOCK HOLMES', 'Arthur Conan Doyle', 'The greatest detective of them all is back. I have heard, Mr. Holmes, that you can see deeply into the manifold wickedness of the human heart. Scandal, treachery and crime are rife in Old London Town', 'img/book/sherlock.jpg', 'popular', 'Classics'),
('OLIVER TWIST', 'Charles Dickens', 'Oliver Twist is Charles Dickens\' second novel, and was first published as a serial 1837–39.[1] The story centres on orphan Oliver Twist, born in a workhouse and sold into apprenticeship with an undertaker. After escaping, Oliver travels to London, where he meets \"The Artful Dodger\", a member of a gang of juvenile pickpockets led by the elderly criminal, Fagin.', 'img/book/olivertwist.jpg', 'popular', 'Classics'),
('A CLERGYMANS DAUGHTER', 'George Orwell', 'Intimidated by her father, the rector of Knype Hill, Dorothy performs her submissive roles of dutiful daughter and bullied housekeeper. ', 'img/book/daughter.jpg', 'popular', 'Classics'),
('LORD JIM', 'Joseph Conrad', 'HarperCollins is proud to present its new range of best-loved, essential classics. Who could tell what forms, what visions, what faces, what forgiveness he could see in the glow of the west! Jim is a well-bred young romantic who takes to the seas with hopes of adventure and the aspiration to prove his mettle.', 'img/book/lordjim.jpg', 'popular', 'Classics'),
('DOCTOR SLEEP', 'STEPHEN KING', 'Doctor Sleep is a 2013 horror novel by American writer Stephen King and the sequel to his 1977 novel The Shining. The book reached the first position on The New York Times Best Seller list for print and ebook fiction (combined), hardcover fiction, and ebook fiction. Doctor Sleep won the 2013 Bram Stoker Award for Best Novel.', 'img/book/doctorsleep.jpg', 'new', 'Horror'),
('CUJO', 'STEPHEN KING', 'Cujo is a 1981 psychological horror novel by American writer Stephen King, about a rabid dog. The novel won the British Fantasy Award in 1982,and was made into a film in 1983.', 'img/book/cujo.jpg', 'new', 'Horror'),
('IT', 'STEPHEN KING', 'It is a 1986 horror novel by American author Stephen King. It was his 22nd book, and his 18th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears and phobias of its victims to disguise itself while hunting its prey.', 'img/book/it.jpg', 'new', 'Horror');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
