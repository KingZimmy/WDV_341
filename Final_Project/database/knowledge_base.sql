-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 04:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdv341`
--

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `kb_id` int(11) NOT NULL,
  `kb_title` varchar(255) NOT NULL,
  `kb_content` text NOT NULL,
  `kb_category` varchar(50) NOT NULL,
  `kb_created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`kb_id`, `kb_title`, `kb_content`, `kb_category`, `kb_created_at`) VALUES
(1, 'How to troubleshoot a slow desktop computer?', 'Clear out temporary files and programs\r\nCheck for malware or viruses\r\nUpdate drivers and software\r\nUpgrade hardware components if necessary', 'Desktop', '2023-04-05'),
(2, 'What to do if your desktop computer won\'t turn on?', 'Check the power cable and outlet\r\nCheck the hardware components like the RAM and graphics card\r\nReset the CMOS battery on the motherboard', 'Desktop', '2023-04-11'),
(3, 'How to fix a frozen desktop computer?', 'Press and hold the power button to shut it down\r\nUnplug the power cord from the back of the tower\r\nWait a few minutes before plugging it back in and turning it on', 'Desktop', '2023-04-14'),
(4, 'How to troubleshoot a slow laptop computer?', 'Clear out temporary files and programs\r\nCheck for malware or viruses\r\nUpdate drivers and software\r\nUpgrade hardware components if necessary', 'Laptop', '2023-04-01'),
(5, 'What to do if your laptop computer won\'t turn on?\r\n', 'Check the power cable and outlet\r\nCheck the battery and charging cable\r\nReset the CMOS battery on the motherboard', 'Laptop', '2023-03-14'),
(6, 'How to fix a frozen laptop computer?', 'Press and hold the power button to shut it down\r\nUnplug the power cord and remove the battery if possible\r\nWait a few minutes before plugging it back in and turning it on', 'Laptop', '2023-03-02'),
(7, 'How to troubleshoot a docking station that won\'t connect to a laptop?\r\n', 'Make sure the docking station is securely connected to the laptop and that all necessary cables are plugged in.\r\nCheck that the docking station drivers are installed and up-to-date.\r\nRestart the laptop and try connecting the docking station again.', 'Docking Station', '2023-03-04'),
(8, 'What to do if your docking station is not charging your laptop?\r\n', 'Check that the laptop is compatible with the docking station and that the correct power adapter is being used.\r\nMake sure the docking station is securely connected to the laptop and that all necessary cables are plugged in.\r\nTry using a different power outlet or power strip to see if that solves the issue.', 'Docking Station', '2023-02-11'),
(9, 'How to fix a docking station that is not detecting your external monitor?', 'Make sure the external monitor is connected to the docking station and turned on.\r\nCheck that the docking station drivers are installed and up-to-date.\r\nRestart the laptop and try connecting the external monitor again.', 'Docking Station', '2023-02-23'),
(10, 'What is a graphics card and what does it do in a PC Desktop?', 'A graphics card, also known as a video card or GPU (Graphics Processing Unit), is a hardware component that is responsible for rendering images, videos, and other visual content on a computer\'s display. It works by taking the digital data from the computer\'s processor and converting it into a signal that can be displayed on a monitor. A graphics card can greatly improve the performance of a computer\'s display, particularly when running graphics-intensive tasks such as gaming or video editing.', 'desktop', '2023-05-01'),
(11, 'How do I connect my laptop to an external monitor?', '1. Determine what type of video ports are available on your laptop and external monitor.\r\n2. Get the appropriate video cable that connects your laptop\'s video port to your monitor\'s video port.\r\nCommon video ports include VGA, DVI, HDMI, and DisplayPort.\r\n3. Turn off your laptop and external monitor.\r\n4. Connect the video cable to your laptop\'s video port and to your monitor\'s video port.\r\n5. Turn on your external monitor and make sure it\'s set to the correct input source.\r\n6. Turn on your laptop.\r\n7. If the external monitor doesn\'t display anything, you may need to adjust the display settings on your laptop to extend or duplicate your desktop to the external monitor. You can do this in your computer\'s Display settings.', 'laptop', '2023-05-01'),
(12, 'My laptop\'s battery is not charging, what could be the problem and how can I fix it?', 'There could be several reasons why your laptop battery is not charging. It could be due to a faulty battery, a damaged charging port, or a faulty charger. It could also be due to a software issue, such as outdated or corrupt battery drivers. To fix the issue, you can try using a different charger or charging cable, resetting the charging port, updating or reinstalling the battery drivers, or replacing the battery if necessary.', 'laptop', '2023-05-01'),
(13, 'My laptop\'s battery is not charging, what could be the problem and how can I fix it?', 'There could be several reasons why your laptop battery is not charging. It could be due to a faulty battery, a damaged charging port, or a faulty charger. It could also be due to a software issue, such as outdated or corrupt battery drivers. To fix the issue, you can try using a different charger or charging cable, resetting the charging port, updating or reinstalling the battery drivers, or replacing the battery if necessary.', 'Docking-Station', '2023-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`kb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `kb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
