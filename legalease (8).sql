-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 08:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalease`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `booking_id` int(11) NOT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `lawyeremail` varchar(255) DEFAULT NULL,
  `dateofmeeting` date DEFAULT NULL,
  `preferred_time` time DEFAULT NULL,
  `Status` enum('Accept','Declined','Pending') NOT NULL DEFAULT 'Pending',
  `extra_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`booking_id`, `useremail`, `lawyeremail`, `dateofmeeting`, `preferred_time`, `Status`, `extra_info`) VALUES
(2, '21bca132@sxca.edu.in', 'tanayrocket6803@gmai.com', '2024-03-05', '17:00:00', 'Pending', 'A criminal case registered against me.'),
(3, 'tanay@gmail.com', 'tanay@gmail.com', '2024-03-10', '10:00:00', 'Declined', 'I have some business related issues.'),
(4, 'akash@gmail.com', 'tanay@gmail.com', '2004-04-12', '17:05:00', 'Accept', 'I have a criminal issue'),
(5, 'akash@gmail.com', 'aron@gmail.com', '2024-03-31', '12:00:00', 'Declined', 'I have been sued by a restaurant.'),
(23, 'akash@gmail.com', 'tanayrocket6803@gmai.com', '2024-04-10', '09:00:00', 'Pending', 'I am stuck in a family case'),
(59, 'ramesh.kumar@gmail.com', 'amit.sharma@gmail.com', '2024-04-01', '10:00:00', 'Pending', 'Initial consultation'),
(60, 'suresh.verma@yahoo.com', 'sonali.gupta@yahoo.com', '2024-04-02', '11:30:00', '', 'Case discussion'),
(61, 'priya.sharma@hotmail.com', 'rahul.singh@hotmail.com', '2024-04-03', '02:00:00', '', 'Legal advice'),
(62, 'neha.gupta@outlook.com', 'nisha.verma@outlook.com', '2024-04-04', '09:30:00', 'Pending', 'Document review'),
(63, 'rahul.sharma@gmail.com', 'suresh.kumar@gmail.com', '2024-04-05', '01:00:00', 'Pending', 'Contract negotiation'),
(64, 'anita.verma@yahoo.com', 'pooja.sharma@yahoo.com', '2024-04-06', '03:30:00', '', 'Immigration consultation'),
(65, 'manoj.agarwal@hotmail.com', 'deepak.verma@hotmail.com', '2024-04-07', '11:00:00', '', 'Personal injury case'),
(66, 'rinku.verma@gmail.com', 'swati.singh@gmail.com', '2024-04-08', '02:30:00', 'Pending', 'Environmental law query'),
(67, 'sunita.sharma@yahoo.com', 'amit.verma@yahoo.com', '2024-04-09', '04:00:00', 'Pending', 'Employment law issue'),
(68, 'vivek.agarwal@hotmail.com', 'priya.kaur@hotmail.com', '2024-04-10', '10:30:00', '', 'Civil law consultation'),
(69, 'tanay@gmail.com', 'amit.verma@yahoo.com', '2024-04-07', '11:30:00', 'Accept', 'case: i want to go to consumer court against a company not fulfilling their promis'),
(70, 'tanay@gmail.com', 'amit.verma@yahoo.com', '2024-04-23', '11:11:00', 'Pending', ''),
(71, 'tanay@gmail.com', 'amit.verma@yahoo.com', '2024-11-12', '11:01:00', 'Pending', 'ewrehjk'),
(72, 'tanay@gmail.com', 'amit.sharma@gmail.com', '2024-05-11', '05:00:00', 'Pending', 'Criminalcase');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`fname`, `lname`, `email`, `DOB`, `Pincode`, `address`, `city`, `state`, `phonenumber`, `password`) VALUES
('John', 'Doe', '21bca132@sxca.edu.in', '1990-05-15', '12345', '123 Main St', 'Anytown', 'AnyState', '1234567890', 'password123'),
('Akash', 'Pareek', 'akash@gmail.com', '2000-12-06', '380009', '25-B Swastik Society', 'Ahmedabad', 'Gujarat', '9846738922', 'Akash@123'),
('Anita', 'Verma', 'anita.verma@yahoo.com', '1995-01-18', '800001', '345, HIJ Road', 'Pune', 'Maharashtra', '+91 4321098765', 'p@ssword'),
('Aryan', 'Soni', 'aryanrealmadrid@gmail.com', '2002-08-05', '284126', 'Main Market Talbehat', 'Jhansi', 'Uttar Pradesh', '9451131161', 'Aryan@123'),
('Hamza', 'Bohra', 'Hamza@gmail.com', '2003-08-09', '412207', 'Sai satyam park', 'Pune', 'Maharashtra', '8780140751', 'Hamza@123'),
('Manoj', 'Agarwal', 'manoj.agarwal@hotmail.com', '1989-04-27', '900001', '678, STU Avenue', 'Ahmedabad', 'Gujarat', '+91 3210987654', 'password@1234'),
('Neha', 'Gupta', 'neha.gupta@outlook.com', '1988-07-28', '500001', '987, LMN Lane', 'Hyderabad', 'Telangana', '+91 6543210987', 'p@ssw0rd'),
('Priya', 'Sharma', 'priya.sharma@hotmail.com', '1992-03-12', '700001', '789, PQR Avenue', 'Kolkata', 'West Bengal', '+91 7654321098', 'pa$$w0rd'),
('Rahul', 'Sharma', 'rahul.sharma@gmail.com', '1987-11-03', '600001', '234, EFG Street', 'Chennai', 'Tamil Nadu', '+91 5432109876', 'passw0rd'),
('Ramesh', 'Kumar', 'ramesh.kumar@gmail.com', '1990-05-15', '110001', '123, ABC Street', 'New Delhi', 'Delhi', '+91 9876543210', 'password@123'),
('Rinku', 'Verma', 'rinku.verma@gmail.com', '1991-08-09', '200001', '876, NOP Lane', 'Jaipur', 'Rajasthan', '+91 2109876543', 'passw0rd@123'),
('Sunita', 'Sharma', 'sunita.sharma@yahoo.com', '1986-12-25', '300001', '543, VWX Street', 'Lucknow', 'Uttar Pradesh', '+91 1098765432', 'p@ssword123'),
('Suresh', 'Verma', 'suresh.verma@yahoo.com', '1985-09-21', '400001', '456, XYZ Road', 'Mumbai', 'Maharashtra', '+91 8765432109', 'pass@word'),
('Tanay', 'Pandey', 'tanay@gmail.com', '2000-08-09', '789012', 'Sai satyam park', 'ahmedabad', 'gujarat', '9876543210', 'Tanay@12'),
('Vivek', 'Agarwal', 'vivek.agarwal@hotmail.com', '1993-06-30', '400001', '789, ABC Road', 'Kanpur', 'Uttar Pradesh', '+91 0987654321', 'password@5678');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `feedback_ratings` int(11) DEFAULT NULL CHECK (`feedback_ratings` between 1 and 5),
  `feedback_text` text DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `lawyer_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `feedback_ratings`, `feedback_text`, `user_email`, `lawyer_email`) VALUES
(2, 4, 'Great Lawyer', 'tanay@gmail.com', 'tanay@gmail.com'),
(3, 5, 'Excellent service provided. Very knowledgeable and helpful lawyer.', 'ramesh.kumar@gmail.com', 'amit.sharma@gmail.com'),
(4, 4, 'Satisfactory experience. The lawyer was good but the response time could be improved.', 'suresh.verma@yahoo.com', 'sonali.gupta@yahoo.com'),
(5, 5, 'Highly recommend! The lawyer provided exceptional legal advice and guidance.', 'priya.sharma@hotmail.com', 'rahul.singh@hotmail.com'),
(6, 4, 'Good service overall. The lawyer was professional and answered all my queries.', 'neha.gupta@outlook.com', 'nisha.verma@outlook.com'),
(7, 5, 'Great experience working with this lawyer. Very efficient and effective communication.', 'rahul.sharma@gmail.com', 'suresh.kumar@gmail.com'),
(8, 4, 'Nice lawyer', 'tanay@gmail.com', 'amit.verma@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `pincode` int(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `bci_id` varchar(20) NOT NULL,
  `practice_area` varchar(25) NOT NULL,
  `profilephoto` varchar(200) NOT NULL,
  `password` varchar(25) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`fname`, `lname`, `email`, `dob`, `pincode`, `address`, `city`, `state`, `phonenumber`, `bci_id`, `practice_area`, `profilephoto`, `password`, `about`) VALUES
('Amit', 'Sharma', 'amit.sharma@gmail.com', '1985-08-21', 110001, '123, ABC Street', 'New Delhi', 'Delhi', '+91 9876543210', 'BCI1234', 'Corporate Law', '/LegalEase/img/team-1.png', 'password@123', 'I am a corporate lawyer with 10 years of experience in handling complex legal matters for multinational companies.'),
('Amit', 'Verma', 'amit.verma@yahoo.com', '1991-11-10', 400001, '789, ABC Road', 'Kanpur', 'Uttar Pradesh', '+91 0987654321', 'BCI9012', 'Employment Law', '/LegalEase/img/testimonial-1.jpg', 'Pass@word123', 'I specialize in employment law and provide counsel to both employers and employees on various workplace issues.'),
('Aron', 'Robert', 'aron@gmail.com', '1997-03-04', 380026, 'St Xavier Mens Hostel', 'Ahmedabad', 'Gujarat', '9989763411', 'AVHI45728190HBJ', 'Civil Law', '/LegalEase/img/testimonial-4.jpg', 'Aron@123', 'I am Aron Robert'),
('Deepak', 'Verma', 'deepak.verma@hotmail.com', '1986-07-02', 200001, '876, NOP Lane', 'Jaipur', 'Rajasthan', '+91 2109876543', 'BCI7890', 'Personal Injury Law', '/LegalEase/img/team-7.png', 'p@ssword123', 'I focus on personal injury cases, providing legal representation to individuals who have been injured due to the negligence of others.'),
('Nisha', 'Verma', 'nisha.verma@outlook.com', '1993-05-12', 700001, '789, PQR Avenue', 'Kolkata', 'West Bengal', '+91 6543210987', 'BCI4567', 'Real Estate Law', '/LegalEase/img/team-4.png', 'pa$$w0rd', 'I am a real estate lawyer with a strong background in property transactions, leases, and land use regulations.'),
('Pooja', 'Sharma', 'pooja.sharma@yahoo.com', '1992-09-15', 900001, '678, STU Avenue', 'Ahmedabad', 'Gujarat', '+91 3210987654', 'BCI6789', 'Immigration Law', '/LegalEase/img/team-6.png', 'passw0rd@123', 'I am an immigration lawyer dedicated to helping individuals and families navigate the complexities of immigration law.'),
('Priya', 'Kaur', 'priya.kaur@hotmail.com', '1988-06-25', 500001, '234, GHI Lane', 'Chandigarh', 'Punjab', '+91 9876543210', 'BCI0123', 'Civil Law', '/LegalEase/img/testimonial-5.jpg', 'p@ssword@123', 'I handle civil law cases, including property disputes, contract disputes, and personal injury claims.'),
('Rahul', 'Singh', 'rahul.singh@hotmail.com', '1987-11-03', 600001, '234, EFG Street', 'Chennai', 'Tamil Nadu', '+91 5432109876', 'BCI3456', 'Family Law', '/LegalEase/img/team-3.png', 'p@ssw0rd', 'I have extensive experience in family law matters such as divorce, child custody, and adoption.'),
('Sonali', 'Gupta', 'sonali.gupta@yahoo.com', '1990-03-17', 400001, '456, XYZ Road', 'Mumbai', 'Maharashtra', '+91 8765432109', 'BCI2345', 'Criminal Law', '/LegalEase/img/team-2.png', 'pass@word', 'I specialize in criminal law and have successfully defended numerous clients in high-profile cases.'),
('Suresh', 'Kumar', 'suresh.kumar@gmail.com', '1989-02-28', 800001, '987, LMN Lane', 'Hyderabad', 'Telangana', '+91 4321098765', 'BCI5678', 'Intellectual Property Law', '/LegalEase/img/team-5.png', 'password@1234', 'I specialize in intellectual property law, including patents, trademarks, and copyrights.'),
('Swati', 'Singh', 'swati.singh@gmail.com', '1995-04-19', 300001, '543, VWX Street', 'Lucknow', 'Uttar Pradesh', '+91 1098765432', 'BCI8901', 'Environmental Law', '/LegalEase/img/team-8.png', 'password@5678', 'I am passionate about environmental law and work to protect the environment through legal advocacy and compliance.'),
('Tanay', 'Pandey', 'tanay@gmail.com', '2000-08-09', 876543, 'Sai satyam park', 'ahmedabad', 'gujarat', '9451131161', '9876ush123456', 'Civil', '/LegalEase/img/testimonial-2.jpg', 'Tanay@123', 'HI, I AM LAWYER '),
('Jane', 'Smith', 'tanayrocket6803@gmai.com', '1985-10-20', 54321, '456 Oak St', 'Sometown', 'SomeState', '2147483647', 'BCI123456', 'Corporate ', '/LegalEase/img/Testimonial-4.jpg', 'Password@456', 'I am a dedicated attorney with a passion for justice and a commitment to providing the best legal representation. I specialize in cases related to criminal defense, family law, and personal injury. With years of experience, I have successfully represented clients in various courts, ensuring their rights are protected.\n\nMy practice is built on a foundation of integrity, professionalism, and personalized attention to the needs of each client. I understand the complexities of the legal system and work tirelessly to achieve favorable outcomes for those I represent.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(100) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `lawyer_email` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` date NOT NULL DEFAULT current_timestamp(),
  `payment_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_email`, `lawyer_email`, `amount`, `payment_date`, `payment_time`) VALUES
('pay_Nl8rPPblhB7Fjy', 'akash@gmail.com', 'tanay@gmail.com', 999.00, '2024-03-09', '10:30:00'),
('pay_Nl8sCOzERmzb40', 'akash@gmail.com', 'tanayrocket6803@gmai.com', 999.00, '2024-03-11', '23:42:26'),
('pay_Nu3MoxbORkUDMu', 'tanay@gmail.com', 'amit.verma@yahoo.com', 999.00, '2024-04-03', '12:08:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `useremail` (`useremail`),
  ADD KEY `lawyeremail` (`lawyeremail`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `lawyer_email` (`lawyer_email`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `lawyer_email` (`lawyer_email`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD CONSTRAINT `booking_table_ibfk_1` FOREIGN KEY (`useremail`) REFERENCES `client` (`email`),
  ADD CONSTRAINT `booking_table_ibfk_2` FOREIGN KEY (`lawyeremail`) REFERENCES `lawyer` (`email`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `client` (`email`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`lawyer_email`) REFERENCES `lawyer` (`email`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`lawyer_email`) REFERENCES `lawyer` (`email`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`user_email`) REFERENCES `client` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
