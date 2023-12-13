-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdata`
--

CREATE TABLE `bookdata` (
  `Book_ID` varchar(122) NOT NULL,
  `Book_Name` varchar(255) NOT NULL,
  `Author` varchar(129) NOT NULL,
  `Genre` varchar(122) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookdata`
--

INSERT INTO `bookdata` (`Book_ID`, `Book_Name`, `Author`, `Genre`, `Quantity`, `image`) VALUES
('b0001', 'Shah_Sujar_Guptodon', '-Saumen_Saha', 'histrory', 120, '6551bb6ecc1a0.jpg'),
('b0002', 'prachin banler durken', 'Hammhad Ragib', 'History', 160, '6551bbac67864.jpg'),
('b0003', 'Mujhol_Varot', 'Sir_Zadunath_Sarkar', 'History', 160, '6551bc16bd772.jpg'),
('b0004', 'Mughalder_Ekanta_Jibon-R_Nath', 'Mohammad_Hossain', 'fantasy', 160, '6551bcac02724.jpg'),
('b0005', 'Madhyajuger_Bharat__Sultani_Amol__Part-1', 'Satish_Chandra-', 'tregedy', 160, '6551bd157419c.jpg'),
('b00056', 'breakfast with buddha', 'Sexpear', 'Romance', 66, '655239c807cb9.jpg'),
('b0008', 'History_of_India_Ancient_Times_to_600_AD-', 'Pal_Nibedita', 'Fantasy', 160, '6551bdd6a13a4.jpg'),
('b0009', 'Beautiful', 'Sexpear', 'Romance', 200, '65796bb7ac3b9.png');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `Book_ID` int(20) NOT NULL,
  `Book_Name` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Catagory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`Book_ID`, `Book_Name`, `Author`, `Catagory`) VALUES
(1, 'To Kill a Mockingbird', 'Harper Lee', 'Classic Fiction'),
(2, 'The way of bengal', 'Jishad', 'Literature'),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Classic Literature'),
(4, '1984', 'George Orwell', 'Dystopian Fiction'),
(5, 'The Hitchhiker\'s Guide to the ', 'Douglas Adams', 'Science Fiction/Comedy'),
(6, 'The Da Vinci Code', 'Dan Brown', 'Mystery/Thriller'),
(7, 'The Girl with the Dragon Tatto', 'Stieg Larsson', 'Crime Fiction'),
(8, 'Sapiens: A Brief History of Hu', ' Yuval Noah Harari', 'Non-Fiction/History'),
(9, 'Educated', 'Tara Westover', 'Memoir'),
(10, 'The way of bengal', 'Jishad', 'Horor'),
(23, 'The way of bengal', 'Jishad', 'fiction');

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `Event_Name` varchar(20) NOT NULL,
  `Event_Sponsers` varchar(20) NOT NULL,
  `Event_Desc` varchar(20) NOT NULL,
  `Event_sd` datetime NOT NULL,
  `Event_end` datetime NOT NULL,
  `Event_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`Event_Name`, `Event_Sponsers`, `Event_Desc`, `Event_sd`, `Event_end`, `Event_location`) VALUES
('Boi Mela', 'Daraz', 'For who love Books', '2023-11-10 00:00:00', '2023-11-16 00:00:00', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `help_support`
--

CREATE TABLE `help_support` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help_support`
--

INSERT INTO `help_support` (`Name`, `Email`, `Subject`, `Messege`) VALUES
('Brinta', 'brinta22@gmail.com', 'Payment', 'Payissue'),
('Devdoot', 'devdoot33@gmail.com', 'Card', 'Card issue'),
('Kamal', 'kamal44@gmail.com', 'GG', 'PP'),
('Menon', 'menon44@gmail.com', 'MM', 'PP'),
('Hlaching', 'hlaching22@gmail.com', 'Purchase issue', 'Book purchase problem'),
('DB', 'db22@gmail.com', 'Registration Issue', 'I cant register to my account'),
('Masum', 'masum44@gmail.com', 'Login Issue', 'I cant log into my account'),
('Jishad', 'jahidu@gmail.com', 'Faq ', 'i cant see you'),
('Jishad', 'hhhh@gmail.com', 'faqs', 'i cant see faq page');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `Journal_ID` int(20) NOT NULL,
  `Tittle` varchar(50) NOT NULL,
  `PlaceOfP` varchar(50) NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Volume` int(10) NOT NULL,
  `Issue` int(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`Journal_ID`, `Tittle`, `PlaceOfP`, `Publisher`, `Volume`, `Issue`, `Date`) VALUES
(1, 'The Impact of Climate Change on Biodiversity', 'New York', 'Environmental Science Publishing', 25, 3, '2023-11-14'),
(2, 'Exploring Quantum Computing Algorithms', 'Cambridge', 'Quantum Publications', 10, 2, '2023-11-08'),
(3, 'Advancements in Medical Imaging Technologies', 'Chicago', 'Medical Science Journals', 32, 4, '2023-11-16'),
(4, 'The Role of Artificial Intelligence in Financial F', 'London', 'Finance Insights Publishing', 18, 1, '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `librian`
--

CREATE TABLE `librian` (
  `Librian_ID` int(11) NOT NULL,
  `Librian_Name` varchar(50) NOT NULL,
  `Librian_Email` varchar(50) NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Assigned_Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librian`
--

INSERT INTO `librian` (`Librian_ID`, `Librian_Name`, `Librian_Email`, `Contact_Number`, `Assigned_Role`) VALUES
(1, 'Kamal', 'kamal@gmail.com', 1884647332, 'Senior'),
(2, 'Morgan', 'morgan33@gmail.com', 1884647332, 'junior'),
(3, 'Rashed', 'rashed2@gmail.com', 0, 'Junior'),
(4, 'Samia', 'samia22@gmail.com', 1882345623, 'Junior'),
(5, 'Sumanta', 'sumanta@gmail.com', 1634256200, 'Senior'),
(6, 'Tasin', 'Tasin@gmail.com', 1785987633, 'Junior'),
(7, 'Faria', 'faria88@gmail.com', 1827363461, 'Junior'),
(8, 'Toyabur', 'toyabur19@gmail.com', 1883954565, 'Senior'),
(9, 'Mojumdar', 'mojumdar29@gmail.com', 1889764512, 'Junior'),
(10, 'Pritam', 'pritam87@gmail.com', 1711264595, 'Junior'),
(14, 'sdfsd', 'sdsdsd', 0, 'sdsdsdds'),
(15, 'sadasdd', 'asdsad@gmail.com', 17728383, 'Junior'),
(16, 'sadasdd', 'asdsad@gmail.com', 17728383, 'Junior'),
(17, 'GG', 'gg32@gmail.com', 1883456323, 'Junior'),
(18, 'sccss', 'sfsd@gmail.com', 1889456575, 'Senior'),
(19, 'edf', 'dfdfd@gmail.com', 2147483647, 'Junior'),
(20, 'Marma', 'sccss@gmail.com', 177123453, 'Junior'),
(21, 'Tirtho', 'tirtho47@gmail.com', 1773253634, 'Junior'),
(29, 'jjhjhghg', 'fggfggf@gmail.com', 2147483647, 'Junior'),
(30, 'jjhjhghg', 'fggfggf@gmail.com', 2147483647, 'Junior'),
(31, 'Jishad', 'fggfggf@gmail.com', 2147483647, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `notification_alerts`
--

CREATE TABLE `notification_alerts` (
  `User_ID` varchar(122) NOT NULL,
  `User_Name` varchar(129) NOT NULL,
  `Due_Date` date NOT NULL,
  `Status` varchar(122) NOT NULL,
  `Action` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_alerts`
--

INSERT INTO `notification_alerts` (`User_ID`, `User_Name`, `Due_Date`, `Status`, `Action`) VALUES
('user003', 'Punam Das', '2023-11-09', 'Not Return', ''),
('user034', 'Avishak saha', '2023-11-08', 'Not Return', ''),
('user046', 'Marma', '2023-11-23', 'Borrowed', ''),
('user080', 'Adityo Das', '2023-11-08', 'Returned', ''),
('user088', 'Alok dhor', '2023-11-10', 'Not Return', '');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `Notification_ID` int(122) NOT NULL,
  `User_ID` varchar(129) NOT NULL,
  `Notification_Data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`Notification_ID`, `User_ID`, `Notification_Data`) VALUES
(1, 'User003', 'Please return the borrowed book'),
(2, 'user003', 'please return ur book'),
(3, 'user046', 'thanks for returining the book');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `added_by` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `description`, `category`, `added_by`, `date`) VALUES
(13, '../assets/image/posts/accounting.png', 'this is new post', 'this is new desc', 5, 1, '2023-11-08'),
(14, '../assets/image/posts/medicine_image_one.jpeg', 'Napa Extra 500mg 1 Box', 'Napa Extra 500 mg+65 mg is the result of mixing caffeine with paracetamol (acetaminophen).', 12, 1, '2023-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `posts_category`
--

CREATE TABLE `posts_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `added_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts_category`
--

INSERT INTO `posts_category` (`id`, `category_name`, `short_description`, `added_by`) VALUES
(5, 'health and wealth', 'health is wealth and health is wealth', '1'),
(12, 'medicine', 'updated category.. again', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Book_ID` varchar(122) NOT NULL,
  `User_Name` varchar(129) NOT NULL,
  `rating` float NOT NULL,
  `Review` text NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`Book_ID`, `User_Name`, `rating`, `Review`, `Date`) VALUES
('b0001', 'Punam', 4, 'good', '12.04.2023 2.34PM'),
('b0002', 'adityo', 4, 'bad', '12/04/2023 2.36PM'),
('AKD', '01991946674', 0, 'bbb', ''),
('Hlaching Mong ', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 4, 'bbb', ''),
('Hlaching Mong ', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 4, 'bbb', ''),
('Punam', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('esd', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('AKD', '01991946674', 2, 'bbb', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('b0001', 'akd', 4, 'dwe', ''),
('b0001', 'Punam', 4, 'bbb', ''),
('b0001', 'hkhk', 4, 'bbb', ''),
('b0001', '1312313', 2, 'bbb', ''),
('Hlaching Mong ', '01991946674', 3, 'bbb', ''),
('b0001', 'avi', 5, 'bbb', ''),
('b0001', 'adityo', 5, 'good', ''),
('b0001', 'Punam das', 4, 'good book', ''),
('b0001', 'Punam Das', 3, 'good', ''),
('b0002', 'Punam das', 4, 'awosome', ''),
('b0001', 'Punam das', 4, 'Good', ''),
('b0001', 'Punam das', 4, 'well', ''),
('AKD', '01991946674', 4, 'bbb', ''),
('b0001', 'akd', 4, 'good', ''),
('b0001', 'akd', 4, 'good', ''),
('b0001', 'akd', 4, 'good', ''),
('b0001', 'hlachbng', 3, 'good', ''),
('b0001', 'punam', 4, 'good', ''),
('b0001', 'akd', 4, 'hjj', ''),
('AKD', '01991946674', 3, 'bbb', ''),
('b0001', 'tumi', 2, 'ytttttttttt', ''),
('b0004', 'gdghhg', 2, 'ghf', ''),
('b0001', 'Punam', 4, 'fjgiygiu', ''),
('b0003', 'Adityo Das', 4, 'Good', ''),
('b0001', 'bb', 3, 'gbfgb', ''),
('b0001', 'bb', 4, 'gbfgb', ''),
('b0001', 'gbgbr', 4, 'gfbfxgbf', ''),
('b00056', 'htthrth', 4, 'hrthrt', ''),
('b0005', 'Punam das', 3, 'fgrtr', ''),
('b0005', 'rthrth', 3, 'hrthrth', ''),
('b0005', 'Punamdas', 5, 'Good book', ''),
('b0008', 'Adityo Das', 4, 'Well', ''),
('b0001', 'Punam Das', 5, 'Good Book', ''),
('b0004', 'Avisak Saha', 4, 'WELL BOOK ', ''),
('b0009', 'AvishakSha', 4, 'well', ''),
('b0004', 'Avisak', 3, 'well', ''),
('b0002', 'Punam Das', 3, 'good Book', ''),
('b0003', 'Marma', 5, 'good book', ''),
('b0002', 'Punam das', 4, 'good', ''),
('b0004', 'Marma', 4, 'wow nice book', ''),
('b0002', 'adityo', 1, 'nice book', ''),
('b0003', 'adityo Das', 5, 'nice book', ''),
('b0005', 'Punam Das', 1, 'good', ''),
('b0005', 'Punam Das', 1, 'good', ''),
('b0005', 'Adityo das', 5, 'wow', '');

-- --------------------------------------------------------

--
-- Table structure for table `recommended_books`
--

CREATE TABLE `recommended_books` (
  `BookID` int(11) UNSIGNED NOT NULL,
  `BookName` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommended_books`
--

INSERT INTO `recommended_books` (`BookID`, `BookName`, `Author`, `Genre`, `Rating`) VALUES
(1, 'Vutshomogro', 'Jafar ', 'Horror', 4),
(2, 'Dorjibari', 'Kaosar', 'Adventure', 3),
(3, 'Deyal', 'Humayaun Ahmad', 'Romance', 5),
(4, 'Amar Chotobela', 'M.A kamal', 'Biography', 2),
(5, 'Feluda Shomogro', 'Shottogit Roy', 'Adventure', 4),
(6, 'Ma jonini', 'Sofia kamal', 'Leterature', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reg_info`
--

CREATE TABLE `reg_info` (
  `id` varchar(11) NOT NULL,
  `name` varchar(129) NOT NULL,
  `password` varchar(111) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(122) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_info`
--

INSERT INTO `reg_info` (`id`, `name`, `password`, `email`, `gender`, `dob`, `type`, `image`) VALUES
('', '', '', '', '', '0000-00-00', '', '65788c135f298.png'),
('Admin101', 'Adityo Das', '12345678', 'akdleonrgon@gmail.com', 'Male', '2000-01-18', 'Admin', '65793eefa5a8e.png'),
('user001', 'jahid', '12345678', 'jahid@gmail.com', 'Male', '2013-12-06', 'USER', ''),
('user003', 'Punam Das', '1234567p', 'prof.anjanbd@gmail.com', 'Male', '2023-12-08', 'User', '65794e9575c9e.png'),
('user034', 'Avishak saha', '1234567p', 'adityod256@gmail.com', 'Male', '2023-12-07', 'User', ''),
('user044', 'Punam Das Pritam', '123456789p', 'primadas4868@gmail.com', 'Male', '2023-12-13', 'User', '6578aebe2f076.png'),
('user046', 'Hlaching Mong marma', '1234567p', 'primevx012@outlook.com', 'Female', '2023-12-28', 'User', ''),
('user088', 'Punam', '12345678', 'adityod256@gmail.com', 'Male', '2023-12-04', 'User', '65789379623ac.png');

-- --------------------------------------------------------

--
-- Table structure for table `support_from_admin`
--

CREATE TABLE `support_from_admin` (
  `From(Admin)` text NOT NULL,
  `To(User)` text NOT NULL,
  `Admin_email` text NOT NULL,
  `Subject` text NOT NULL,
  `Messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_from_admin`
--

INSERT INTO `support_from_admin` (`From(Admin)`, `To(User)`, `Admin_email`, `Subject`, `Messege`) VALUES
('Mushfiq', 'Brinta', 'mushfiq@gmail.com', 'Payment', 'Hold patience we will look for it and we will contact you as soon as possible through your email'),
('Russel', 'Hlaching', 'hlaching22@gmail.com', '	Purchase issue', 'Our server is on maintainace. Please wait till than.'),
('Russel', 'DB', 'russel2@gmail.com', 'Registration Issue', 'Please check now '),
('Devdoot', 'DB', 'devdootparial@gmail.com', 'Registration Issue', 'Our site is on under maintaince');

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `Book_ID` varchar(122) NOT NULL,
  `Book_Name` text NOT NULL,
  `Author` varchar(129) NOT NULL,
  `Genre` varchar(122) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`Book_ID`, `Book_Name`, `Author`, `Genre`, `image`) VALUES
('b0004', 'Mughalder_Ekanta_', 'Jibon-R_Nath', 'Historical Non-fiction', '6551cda64462e.jpg'),
('b0005', 'Madhyajuger_Bharat__Sultani_Amol__Part-1', 'Satish_Chandra-', 'tregedy', ''),
('b0002', 'prachin banler durken', 'Hammhad Ragib', 'History', '');

-- --------------------------------------------------------

--
-- Table structure for table `trendingbooks`
--

CREATE TABLE `trendingbooks` (
  `Book_ID` varchar(11) NOT NULL,
  `Book_Name` varchar(255) NOT NULL,
  `Total_Borrow` int(255) NOT NULL,
  `Total_Return` int(255) NOT NULL,
  `Rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trendingbooks`
--

INSERT INTO `trendingbooks` (`Book_ID`, `Book_Name`, `Total_Borrow`, `Total_Return`, `Rating`) VALUES
('b0002', 'Prachin_Banglar_Dorbesh', 457, 412, 0),
('b0004', 'Mughalder_Ekanta_', 380, 340, 0),
('b0005', 'Madhyajuger_Bharat__Sultani_Amol__Part-1', 350, 320, 0),
('b0009', 'the_mughle_kingdom', 266, 130, 0),
('b0010', 'Tajmahaler_Satya', 210, 160, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `Mobile_Number` int(11) NOT NULL,
  `Actions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Name`, `User_Email`, `Mobile_Number`, `Actions`) VALUES
(1, 'Brinta', 'brinta@gmail.com', 1883957585, 'Borrowed'),
(2, 'Devdoot', 'devdoot@gmail.com', 1889955588, 'Pending'),
(3, 'Hlaching', 'hlaching@gmail.com', 1883569575, 'Borrowed'),
(4, 'kamal', 'kamal@gmail.com', 142426373, 'Pending'),
(5, 'Rahim', 'rahim44@gmail.com', 1884974510, 'Notborrowed'),
(13, 'dsfd', 'sdfdsf@gmail.com', 1883569575, 'Borrowed'),
(14, 'kamal', 'sdfdsf@gmail.com', 1883569575, 'Pending'),
(15, 'Mofiz', 'mofiz77@gmail.com', 177556622, 'Notborrowed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`Book_ID`),
  ADD UNIQUE KEY `Book_ID` (`Book_ID`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`Journal_ID`);

--
-- Indexes for table `librian`
--
ALTER TABLE `librian`
  ADD PRIMARY KEY (`Librian_ID`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`Notification_ID`);

--
-- Indexes for table `recommended_books`
--
ALTER TABLE `recommended_books`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `reg_info`
--
ALTER TABLE `reg_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `Book_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `Journal_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `librian`
--
ALTER TABLE `librian`
  MODIFY `Librian_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `Notification_ID` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recommended_books`
--
ALTER TABLE `recommended_books`
  MODIFY `BookID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
