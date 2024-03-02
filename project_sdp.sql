-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2024 at 07:50 PM
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
-- Database: `project_sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(15) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Zayn', 'zaynam87@gmail.com', 'zyan1234'),
(2, 'Drashti', 'sdp.project.2024@gmail.com', '2064');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE `tbl_area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `area_pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`area_id`, `area_name`, `area_pincode`) VALUES
(1, 'Bopal', 380058),
(2, 'Lal Drawaja', 380001),
(3, 'Ognaj', 380060),
(4, 'Paldi', 380007),
(5, 'Satellite', 380015),
(6, 'Vastrapur', 380054),
(7, 'Odhav', 382415),
(8, 'Vejalpur', 380051),
(9, 'Jivraj Park', 380051),
(10, 'Prahlad Nagar', 380015),
(11, 'Navrangpura', 380009),
(12, 'Naranpura', 380013),
(13, 'Nava Vadaj', 380013),
(14, 'Nirnaynagar', 382481),
(15, 'Ambawadi', 380006),
(16, 'Thaltej', 380054),
(17, 'Jodhpur Village', 380015),
(18, 'Gota', 382481),
(19, 'South Bopal', 380058),
(20, 'Maninagar', 380008),
(21, 'Kalupur', 380001),
(22, 'Ghatlodiya', 380061),
(23, 'abcd', 231),
(24, 'abcd', 231),
(25, 'abcd', 231),
(26, 'abcd', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_details` text NOT NULL,
  `blog_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_details`, `blog_photo`) VALUES
(1, 'Why Donation is Important for NGO ?', '\"Making a difference doesn\'t always require grand gestures, sometimes a simple act of donation can create a ripple effect of change. As we all know, NGOs play a crucial role in addressing social issues and making our world a better place. By donating to these organizations, we are not just giving money, but also hope, resources, and support to those in need. Together, we can be the driving force of positive change and make a lasting impact. So let\'s open our hearts and wallets to support the incredible work of NGOs. Because when we give, we not only make a difference in someone else\'s life, but also in our own. #DonationIsKey #NGOsMatter #BeTheChange #SpreadHope\"', 'blog1.jpg'),
(2, 'Various NGO Types for Donation', 'Make a difference in the world by supporting different types of NGOs! From environmental conservation to education initiatives, each organization plays a vital role in creating a better future for all. Let\'s come together and make a positive impact through our donations. It\'s not just about giving, it\'s about creating a ripple effect of change.', 'blog2.jpg'),
(3, 'Why donation is important for everyone?', 'To make the world a better place for everyone, we all need to play our part in whatever way we can. Maybe that’s through volunteering your time or skills for a cause you care about, or perhaps it’s something as simple as being kind to strangers you meet in your day-to-day life. But you can also help make a difference by donating what you can to charity too. \r\n\r\nYou might be thinking, why donate to donate? While we like to believe we can make a difference on our own, sometimes we can do more together. The way donation are structured lets them use money raised to directly help people who need it on a larger scale than we can as individuals. \r\n\r\nAnd if you have any concerns about how money you donate is used, you can always look at a donation’s annual report to get reassurance that donations made to the donation are actively helping their beneficiaries. \r\n', 'blog3.jpeg'),
(4, 'Why should you donate to the education of impoverished children?', 'As a keystone of human development and progress, education has long been recognized as an essential element in cultivating the skills, knowledge, and critical thinking abilities necessary for individuals to thrive in the ever-changing world we inhabit. It is a fundamental human right, yet many children around the world are deprived of access to basic education. In fact, according to the ASER (Rural) report during the pandemic, children (aged 6-14 years) who are not currently enrolled in schools increased from 2.5 percent in 2018 to 4.6 percent in 2021. \r\n\r\nUnderprivileged children lose their ability to have a normal childhood. They aren’t capable of developing emotionally, physically, and socially. Moreover, research has shown that they are more likely to be depressed, have low self-esteem, not receive an education, and suffer from a lack of sleep and bad nutrition. As these children grow up, they are less likely to positively contribute to society since they might not be able to hold a stable and well-paying job. Instead of working, they are more likely to partake in crime and fall victim to the criminal justice system. This is where education donation comes in, as it can help provide underprivileged children with the opportunity to learn and grow.', 'blog4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Child orphanage'),
(2, 'Old age home'),
(3, 'Blind people orphanage');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child`
--

CREATE TABLE `tbl_child` (
  `child_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `child_name` varchar(25) NOT NULL,
  `child_gender` varchar(6) NOT NULL,
  `child_age` varchar(25) NOT NULL,
  `child_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_child`
--

INSERT INTO `tbl_child` (`child_id`, `ngo_id`, `child_name`, `child_gender`, `child_age`, `child_photo`) VALUES
(1, 1, 'Nirav', 'Female', '1 year old', 'child_nirav.jpg'),
(2, 1, 'Het', 'Male', '30 Days', 'child_het.jpg'),
(3, 4, 'Dev', 'Male', '2 Months old', 'child_dev.jpg'),
(4, 1, 'Aarya', 'Female', '5 Year', 'child_aarya.webp'),
(5, 4, 'Aditi', 'Female', '30 Days', 'child_aditi.JPG'),
(6, 1, 'Inaya', 'Female', '4 year ', 'child_inaya.webp'),
(7, 4, 'Kabir', 'Male', '7 Years ', 'child_kabir.jpg'),
(8, 1, 'Manav', 'Male', '4 year ', 'child_manav.webp'),
(9, 4, 'Riya', 'Female', '8 years', 'child_riya.webp'),
(10, 1, 'Yash', 'Male', '5 Months', 'child_yash.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` bigint(15) NOT NULL,
  `user_subject` text NOT NULL,
  `user_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donation`
--

CREATE TABLE `tbl_donation` (
  `donation_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_requirement_id` int(11) DEFAULT NULL,
  `donation_details` text DEFAULT NULL,
  `donation_method` varchar(50) DEFAULT NULL,
  `donation_type` varchar(50) DEFAULT NULL,
  `donation_date` varchar(25) NOT NULL,
  `donation_address` text DEFAULT NULL,
  `donation_status` varchar(50) DEFAULT NULL,
  `volunteer_id` int(11) DEFAULT NULL,
  `donation_amount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_donation`
--

INSERT INTO `tbl_donation` (`donation_id`, `ngo_id`, `user_id`, `item_requirement_id`, `donation_details`, `donation_method`, `donation_type`, `donation_date`, `donation_address`, `donation_status`, `volunteer_id`, `donation_amount`) VALUES
(1, 2, 2, 2, '1 Dining table and 10 chairs', '', 'item', '2024-02-28', '17,Shiv Shakti Society,Opp.Uimya Dairy,Jivraj Park,Ahmedabad', 'pending', 5, ''),
(2, 1, 1, 11, '30 notebooks and 100 pen', '', 'item', '2024-02-28', '18,Vina Kunj Society,RRR Trivedi School Road,vejalpur,Ahmedabad', 'pending', 6, ''),
(3, 3, 4, 3, '2 Refridgerator', 'UPI', 'item', '2024-02-28', '39,Earth Bonglows,Near.Surdhara Bunglows,Prahlad Nagar,Ahmedabad', 'pending', 5, '200'),
(4, 3, 3, NULL, NULL, NULL, 'online', '2024-02-28', NULL, NULL, NULL, '200'),
(5, 4, 4, NULL, NULL, NULL, 'online', '', NULL, NULL, NULL, '500'),
(6, 5, 7, 5, '10 Flashlights', NULL, 'item', '', 'B12,Venus Ground,Surendra Mangaldas Rd, Opposite Gallery Mall, Niyojan Nagar, Nehru Nagar, Ambawadi, Ahmedabad, Gujarat 380015', 'Dispatched', 12, NULL),
(7, 6, 9, 6, '15 bedsheets,1 bed', NULL, 'item', '', 'Gopal Palace, Satellite Rd, opp. Ocean Park, Nehru Nagar, Acharya Narendradev Nagar, Ambawadi, Ahmedabad, Gujarat 380015', 'Delivered', 8, NULL),
(8, 7, 12, NULL, NULL, 'UPI', 'online', '', NULL, NULL, NULL, '1200'),
(9, 8, 10, NULL, NULL, 'UPI', 'online', '', NULL, NULL, NULL, '2000'),
(10, 5, 10, 10, '20 blankates', '', 'item', '2024-02-28', 'aasdfghj', 'pending', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_location` text NOT NULL,
  `event_details` text NOT NULL,
  `event_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `ngo_id`, `event_title`, `event_date`, `event_time`, `event_location`, `event_details`, `event_photo`) VALUES
(2, 1, 'Celebrate Children’s Day with NGO\'s children ', '2023-09-14', '10:00:00', 'Gujarat State Balkanji Bari,Near Session Court,Treasury Office Compound, Lal Darwaja, Ahmedabad, Gujarat 380001', ' Gujarat State Balkanji Bari conducted a sensitisation and awareness programme and at the same time, provided platforms to the children to share their problems as well as their views to resolve different social evils. Besides, these underprivileged and deprived children  were also taken on a fun-filled trip.\r\n\r\nInitially, Gujarat State Balkanji Bari felt that it would not be able to organise the programme due to lack of resources and financial assistance but with some Good Samaritans joining the cause and coming forward to assist the organisation to celebrate the Day, Gujarat State Balkanji Bari could finally implement the ideas.\r\n\r\nDuring these five days, hundreds of underprivileged children participated and had a very good time interacting with the guests and participating in cultural activities and other different games.', 'children-day.jpg'),
(3, 3, 'Birthday Celebration at Blind Orphange', '2024-01-01', '05:00:00', 'Navjyot Andhajan Mandal,Khodiyar Chok, nr. Khodiyar Temple, Paldi Gaam, Paldi, Ahmedabad, Gujarat 380007', 'On the 1st January , 2023, the volunteers of the Foundation celebrated the Birthday of Mrs Manju Singhwi President of the SSS Foundation at Navjyot Andhajan Mandal for the Blind. A small dinner was organised for 80 in-mates of the NGO. The moments were filled with laughter care & support for the members of the School by the Volunteers.', 'birthday-celebration(blind).webp'),
(4, 2, 'Independence Day-Old Age Home', '2024-02-15', '08:00:00', 'Swarg Community Care,Plot 128, Greenwood phase 1, Garden city road, Sardar Patel Ring Rd, near Vaishnav Devi Circle, Ognaj, Ahmedabad, Gujarat 380060', 'The Independence Day celebration at Swarg Community Care was a beautiful amalgamation of cultures, emotions, and experiences. The beneficiaries, hailing from different backgrounds and regions, came together as one big family to celebrate the spirit of unity in diversity. The event was a reminder that regardless of age, background, or circumstances, the feeling of being part of something bigger can create a bond that transcends all differences.\r\n\r\nThe celebration went beyond the flag hoisting ceremony. It included cultural performances, patriotic songs, and heartfelt speeches by both the beneficiaries and the Swarg Community Care team. These activities aimed to empower the elderly by providing them a platform to express themselves and showcase their talents. It was an affirmation that age does not define one’s ability to contribute to society and enjoy life to the fullest.', 'independence-day(old-age).jpg'),
(5, 4, 'Holi Celebration at Child Orphanage', '2023-03-25', '10:00:00', 'Manav Kartavya,51-B, Someshwara Bunglows 2, Opp. Star Bazar, Satellite, Ahmedabad- 380015.', 'Manav Kartavya foundation followed the same and celebrated their holi on the 5th of march with all the children in the NGO and volunteers. The event consisted of multiple activities like Phoolo ki holi, Drawing Competition, Rango Ki Holi etc. All the students along with volunteers had a good time at the Holi rangotsav.\r\n\r\nThe highlight of the event was the grand celebration of Holi, where everyone enthusiastically played with flower petals and natural colours. The sheer delight on the faces of the children was infectious, spreading smiles and pure joy throughout the entire gathering. The air was filled with music, and people danced their hearts out, making it an unforgettable experience for everyone who was fortunate enough to be there.', 'holi-child.jpg'),
(6, 1, 'Diwali Celebration at Child Orphanage', '2022-11-03', '07:00:00', 'Gujarat State Balkanji Bari,Near Session Court,Treasury Office Compound, Lal Darwaja, Ahmedabad, Gujarat 380001', 'Like other festivals and events, the children were made to understand the origin behind the start of this Festival of Lights, it’s meaning and significance which is to move from darkness to light and spread and share the light of wisdom, love, peace and prosperity with each other to make a better society.\r\n\r\nThe children, with the help of their volunteer Didi’s very enthusiastically take part in the preparations of the festival. They put up the traditional Lantern which is self made by them, they also make beautiful and colourful rangoli  which looks like the eye catching imprint of an artist and are decorated with diyas, candles and flowers.\r\n\r\nWith the onset of darkness as soon as we all light up the diyas and candles, the whole place comes alive not only with the brightness of the diyas or string of colourful lights all around but also with the energy of the children. Sweets, candles and sparklers are distributed to them and sharing the immense joy that their face radiates is a sight to behold.\r\n\r\nTogether, everyone celebrates the occasion lighting up anar, charkhi and phuljhari with a wholesome experience as these little angels help us realize the joy of sharing, the need to be grateful and the real essence of the festival of Deepawali.', 'diwali.jpg'),
(7, 1, 'sdfghj', '2024-09-09', '10:00:00', 'asdgfhghj', 'asdfghj', 'holi-child.jpg'),
(8, 1, 'e2', '2023-08-08', '12:12:12', 'asdfghjk', 'sdfghj', 'contact_us.png'),
(9, 1, 'sdfgh', '2023-04-03', '03:12:45', 'sdfg', 'aasdfgh', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `user_id`, `faq_question`, `faq_answer`) VALUES
(2, 1, 'Can I designate how my donation is used?', 'In some cases, donors may have the option to designate their donation to specific programs or projects within our organization. We strive to accommodate donor preferences whenever possible, but please note that unrestricted donations allow us to allocate funds where they are needed most.'),
(3, 1, 'What happens if you receive more donations than needed for a specific program or project?', 'In the event that we receive more donations than needed for a specific program or project, we may reallocate those funds to other areas of our work where they can have the greatest impact. Rest assured that every donation is used thoughtfully and responsibly to advance our mission.'),
(4, 4, 'What steps do you take to ensure that donations are used efficiently and effectively?', 'We have robust internal processes and systems in place to ensure that donations are used efficiently and effectively to achieve maximum impact. This includes regular monitoring and evaluation of programs, financial oversight, and adherence to industry best practices in nonprofit management.'),
(5, 5, 'Is my donation tax-deductible? ', 'Yes, your donation may be tax-deductible, depending on the tax laws in your country and the status of the organization you\'re donating to. In many countries, donations made to registered nonprofit organizations or charities are eligible for tax deductions. However, it\'s essential to verify the tax-exempt status of the organization you\'re donating to and consult with a tax professional for guidance on how your donation may impact your tax situation. Keep records of your donation, such as receipts or acknowledgment letters from the organization, to support your tax deductions.'),
(6, 2, 'I don\'t have much money. Can I help?', 'Absolutely! Every contribution, regardless of size, makes a difference. There are many ways to support a cause beyond monetary donations. Here are some ways you can help:Volunteer your time,Spread awareness,Donate goods or services,Offer your skills.Remember, your contribution, no matter how small, can have a ripple effect and create positive change in the world. Thank you for considering how you can make a difference, even with limited resources.\r\n'),
(7, 8, 'Can I make a donation by check?', 'Yes, absolutely! We welcome donations made by check. Please make your check payable to [NGO Name] and include any specific designation or purpose in the memo line if applicable. You can mail your donation to our mail address.'),
(8, 10, 'How will my donation be used?', 'Your donation plays a crucial role in supporting our mission and making a positive impact. The specific use of your donation depends on the needs and priorities of our ongoing programs and initiatives. We allocate funds to a variety of areas'),
(9, 12, 'How can I contact perticular NGO for more information?', 'You can reach out to us via email at [NGO Email Address] or by phone at [NGO Phone Number]. Our team is available to answer any questions you may have and provide additional information about our organization and programs.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_details` text NOT NULL,
  `feedback_rating` int(1) NOT NULL,
  `feedback_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `ngo_id`, `user_id`, `feedback_details`, `feedback_rating`, `feedback_date`) VALUES
(1, 3, 1, '\"I want to express my gratitude for the Navjyot Andhajan Mndal incredible work in supporting the visually impaired. Your comprehensive services, including education, employment assistance, and social integration programs, are making a significant difference. ', 3, '2024-02-29'),
(2, 2, 2, '\"I appreciate the valuable service your Swarg Community Care  NGO provides to our elderly community. The compassionate care and support offered to residents are commendable. ', 4, '2024-02-29'),
(3, 6, 11, 'A very good old care home. Having well infrastructure, well facilities and proper care of old people. A number of old people are living here with proper care and good lifestyle and routine. The staffs are caring and having good behaviour. The campus is large located in Naranpura. Campus is green. Administration also does various fun sessions and occasional celebration for aged people living there. One can go to serve and donate to the centre.', 5, '2024-02-29'),
(4, 2, 1, 'Swarg is most suitable place for physically weak elder persons. They take care of all needs like, to take them to toilets, they also take them for bath and all other daily needs an elderly persons require. They provide healthy meals to them.', 3, '2024-02-29'),
(5, 5, 10, 'Worm and kind behaviour with old age human. Good experience to interact with trustee. Very knowledgeable experience and feel positive energy. Thanks Hiteshbhai. Especially thanks to shital mam who lead me to the one kind of spiritual path.', 4, '2024-02-29'),
(6, 4, 13, 'Many NGO work towards betterment of society but Manav Kartavya an best NGO in ahmedabad done multiple work for child education, women empowerment, healthcare etc. excellent job.. worth to donate.', 4, '2024-02-29'),
(7, 4, 9, 'This place is an old age home which consists of around 10-12 old people. They have a maintained accommodation and food of good quality', 3, '2024-02-29'),
(8, 8, 15, 'Its a beautiful small old age home. Must visit on your special day, and make their day special also by donating them.', 4, '2024-02-29'),
(9, 6, 12, 'One of the best place to donate money. I came to know about this place couple years ago but so far I have a great experience. Accountant Jayeshbhai is such a great person and very down to earth, he has always helped me to donate the money specially from America. Thank you to all workers, stat safe and healthy. God bless you and your family.', 5, '2024-02-29'),
(10, 1, 8, 'Very inspiring institute for people giving good program for extra curriculum activity through out the year,especially in vacation.', 3, '2024-02-29'),
(11, 1, 8, 'Very inspiring institute for people giving good program for extra curriculum activity through out the year,especially in vacation.', 3, '2024-02-29'),
(12, 2, 1, 'Best NGO they always ready to help people who need.', 4, '2024-02-29'),
(13, 4, 3, 'gooood', 5, '2024-02-29'),
(14, 4, 3, 'average', 2, '2024-02-29'),
(15, 4, 3, 'srevcevderr', 5, '2024-02-29'),
(16, 4, 3, 'r tbdftnybujbfrervt', 4, '2024-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_requirement`
--

CREATE TABLE `tbl_item_requirement` (
  `item_requirement_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `item_requirement_details` text NOT NULL,
  `item_requirement_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_item_requirement`
--

INSERT INTO `tbl_item_requirement` (`item_requirement_id`, `ngo_id`, `item_requirement_details`, `item_requirement_status`) VALUES
(1, 1, 'We\'re reaching out for support to provide clothes and toys for 10 children in need. These children come from families facing economic hardship, and many of them lack basic necessities. By donating clothes and toys, you can help bring joy and comfort to these children\'s lives. Your contribution will make a tangible difference in their day-to-day well-being, ensuring they have warm clothes to wear and toys to play with. Together, we can make sure these children feel cared for and cherished. Thank you for considering supporting this cause.', 'Pending...'),
(2, 2, 'Dining table and chairs..', 'Pending...'),
(3, 3, 'Kitchen appliances : Stoves ,Refrigerator ,Toaster ,etc... ', 'Completed'),
(4, 4, '1kg sugar,15kg wheat,5kg rice for our ngo', 'Pending...'),
(5, 5, 'Approx 15 Flashlights and batteries.', 'In Progress'),
(6, 6, '50 bedsheets and 10 beds.', 'Pending...'),
(7, 7, '1kg Redpepper Powder,500gm Turmeric Powder,1kg Cumin-coriander Powder.', 'Pending...'),
(8, 8, 'wheelchair,Radio and walking sticks for 20 people.', 'Pending...'),
(9, 1, 'toys and clothes for 40 children', 'Pending...'),
(10, 2, 'Approx 20 blankets ', 'Half Completed'),
(11, 1, 'Stationery(Notebooks, pens, pencils, backpacks, and other school supplies) for 25-30 children', 'Require'),
(12, 4, 'Carrom board,Chess board,Uno Cards for 50 children', 'Half Completed'),
(13, 4, 'clothes required for 15 girls and 25 boys', 'Pending..'),
(14, 2, 'Water purification tablets or filters are required', 'Pending..'),
(15, 3, 'Approx 50 First-aid kits ', 'Half Completed'),
(16, 5, 'Over-the-counter medications (pain relievers, fever reducers, cold medicine).', 'Half Completed'),
(17, 6, 'Medical equipment (crutches, wheelchairs, walkers, etc.) for 10 people.', 'Pending..'),
(18, 7, 'Blankets, sheets, pillows, pillowcases for 60-65 people.', 'Pending..'),
(19, 8, 'Warm Clothes(Coats,Shawls,socks) for approx 44 people.', 'Half Completed'),
(20, 9, 'Braille devices such as Braille watches, keyboards, or notetakers for 15-20 people.', 'Half Completed'),
(21, 9, 'Personal care items(shampoo, soap, toothpaste) for 20-25 people.', 'Pending..'),
(22, 11, 'Approx 50 White canes for mobility and navigation.', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngo`
--

CREATE TABLE `tbl_ngo` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` varchar(100) NOT NULL,
  `ngo_details` text NOT NULL,
  `ngo_email` varchar(50) NOT NULL,
  `ngo_password` varchar(100) NOT NULL,
  `ngo_contact_no` bigint(13) NOT NULL,
  `ngo_address` text NOT NULL,
  `ngo_certificate` varchar(50) NOT NULL,
  `ngo_photo` varchar(50) NOT NULL,
  `area_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ngo_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ngo`
--

INSERT INTO `tbl_ngo` (`ngo_id`, `ngo_name`, `ngo_details`, `ngo_email`, `ngo_password`, `ngo_contact_no`, `ngo_address`, `ngo_certificate`, `ngo_photo`, `area_id`, `category_id`, `ngo_status`) VALUES
(1, 'Gujarat State Balkanji Bari', 'We, Gujarat State Balkanji Bari, situated at Lal Darwaja, Ahmedabad, Gujarat, are a non-profit organisation with a mission to provide children and individuals from low-income communities with high-quality education, enabling them to maximize their potential and transform their lives completely. We work in the field of education by collecting funds from influential and financially well-aided people and provide a supplemental education to the needy. We are also actively engaged in the areas of rural and urban development and women empowerment through advocacy, direct program interventions and capacity building of the community to access the benefits of the state program.', 'gujaratstatebalkanjibari@gmail.com', '12234', 1276543456, 'Near Session Court,Treasury Office Compound, Lal Darwaja, Ahmedabad, Gujarat 380001', 'gujarat_state_balkanji_photo.jpg', 'gujarat_state_balkanji_certificate.jpg', 2, 1, 1),
(2, 'Swarg Community Care', 'Swarg care facility for bedridden is a very unique care model which will help family members to provide a healthy option to keep their bedridden family member. Here we intend to recover our care recipients from their fragile bedridden condition towards an in-dependency.', 'care@swargcommunitycare.org', 'hello', 7016000760, ' Plot 128, Greenwood phase 1, Garden city road, Sardar Patel Ring Rd, near Vaishnav Devi Circle, Ognaj, Ahmedabad, Gujarat 380060', 'swarg_certificate.jpeg', 'swarg_photo.jpeg', 3, 2, 1),
(3, 'Navjyot Andhajan Mandal', 'The Navjyot Andhajan Mandal is a non-profit organization dedicated to empowering and advocating for the rights of visually impaired individuals. Through various programs and services, they strive to enhance the quality of life for the blind by promoting education, employment opportunities, and social inclusion.', 'navjyotandhjanmandal@gmail.com', 'navjyot@andhjan', 9726884422, 'Khodiyar Chok, nr. Khodiyar Temple, Paldi Gaam, Paldi, Ahmedabad, Gujarat 380007', 'navjyot_certificate.jpg', 'navjyot_photo.jpg', 4, 3, 1),
(4, 'Manav Kartavya', 'Manav Kartavya would like to ask you, “Have you ever wondered what kartavya a Manav shall does?” Manav Kartavya has not only wondered, but explored it to experience it! Manav has the hands to perform his kartavya by helping others. Manav has the feet to perform his kartavya by hastening to poor and needy. And Manav has the head to perform his kartavya by considering everyone as inclusive to uplift an individual from his state of neediness to a state of self-reliant.', 'friends@manavkartavya.org', 'manav@kartavya@1234', 9726168133, '51-B, Someshwara Bunglows 2, Opp. Star Bazar, Satellite, Ahmedabad- 380015.', 'manavkartavya_certificate.png', 'manav_kartavya_photo.jpg', 5, 1, 0),
(5, 'shree ram foundation old age home', '\"shree ram foundation . old age home . Non profit ourganizan\"', 'shreeramfoundation24@gmail.com', 'shreeram12foundation', 8735040301, 'Alpha One Mall, 1. nand deep bunglow . b/h, Vastrapur, Ahmedabad, Gujarat 380054', 'shree_ram_certificate.jpeg', 'shree_ram_photo.jpeg', 6, 2, 1),
(6, 'Jeevan Sandhya Old Age Home - Vanprasth Sewa Samaj', '\"A modest ‘home for the aged’ was stared in Ramkrishna Ashram building some sixty years back. With increasing demand to accommodate more and more ‘AGED’ people, and the necessity of having larger space, in 1978 Dr. Bachabai Nanavati donated her movable and immovable Trusts’ properties to run the home for old age people, Impressed by good work done by “Jeevan Sandhya” the Ahmedabad Municipal Corporation gave us 6000 sq. meters of land in most healthy area where we have constructed the spacious and most beautiful Building to accommodate 200 Aged people. The institution has built convenient rooms with Healthy Food, Medical Facilities, Prayer Room, Lecture Hall, Library, Physiotherapy Center, Beautiful Garden and other facilities.\"', 'jivansandhya@gmail.com', 'jivanSandhya247', 7927475521, '132 feet Ring Road, Gharda Ghar Rd, near Ankur Bus Stop, Near Kalptaru Part 1 & 2, Naranpura, Ahmedabad, Gujarat 380013', 'jivan_sandhya_certificate.jpg', 'jivan_sandhya_photo.JPG', 12, 2, 1),
(7, 'Matoshree Vrudhashram', 'A J Charitable Trust Established in 2020 at Gujarat for the elders. This organization manage by some Trustees with the supports of whole doners who gave small donation and help make a big difference in elders lives. Also this organization done so many differents activities likes Food Donation, Blankets Donation, Stationary Donation Etc. And A J Charitable Trust manage Matoshree Vrudhashram who supports free of charge for abandoned seniors also providing all types medicines and manage health issues. This Vruddhashram running at Gujarat major cities Ahmedabad & Surat.', 'ajcharitable@gmail.com', 'motishreecharitable', 9586108786, '25 Vandana Park Society, Opp. Kadamb Hospital, Nr Bank Of India Akhabar Nagar Cross Road, Chandlodiya Rd, Nava Vadaj, Ahmedabad, Gujarat 380013', 'motishree_certificate.jpeg', 'motishree_photo.jpeg', 13, 2, 1),
(8, 'Krishna Dham Old Age Home', 'Krishnadham Senior Living Home is formed with the main objective of providing succor and care for the old people.Do visit our Krishnadham Old Age Home.We accept Newspapers(paccti), Old Clothes, Old Vessels, New & Old Household Items and Donation Like Money, Grocery Items(haldi,mirchi,sugar), Old Furniture things, Old TV etc. for our Krishnadham Old Age Home.You can celebrate your Birthday,Marriage anniversary,Death ceremony (Thithi) or any special day of yours.You can serve food to our old age home on any special occasions', 'krishnadhamoldagehome@gmail.com', 'Krishnadham24OLDHome', 9723282541, 'Before Just, 3 Chaitanya Society Between Vastrapur Gam Bus Stand Aandh Jan Mandal IIM Road beside Kendriya Vidhalaya, Ahmedabad, Gujarat 380015', 'krishnadham_certificate.jpeg', 'krishnadham_photo.jpg', 5, 2, 0),
(9, 'Blind People\'s Association', 'The Blind People’s Association (India) is one of the largest NGOs in India working for the entire continuum of services for all categories of Persons with Disabilities (PwDs). \r\n\r\nBPA is a multi-campus organization with 15 campuses all over Gujarat and one in Rajasthan.  It also has 13 Vision Centres and 10 Day Care Centres for Persons with Multiple Disabilities and Deafblindness in addition to the above. \r\n', 'gensecbpa@gmail.com ', 'association4blindPeople', 7926304070, '132 Ft Ring Road, Andhjan Mandal BRTS bus stop,\r\nVastrapur, Ahmedabad - 380015, Gujarat', 'krishnadham_photo.jpg', 'blind_people_as_photo.jpg', 6, 3, 0),
(10, 'asfdgfhg', 'adsd', 'sdp.project.2024@gmail.com', '1234', 9876546789, 'gjnkm', 'xyz.jpg', 'abc.jpg', 2, 2, 0),
(11, 'Andh Apang Kalyan Kendra', 'Andh Apang Kalyan Kendra in Ahmedabad is one of the leading businesses in the NGOS For Physically Challenged. Also known for Charitable Trusts,NGOS, NGOS For Food Donation, NGOS For Physically Challenged, NGOS For Blind, NGOS For Education, NGOS For Unemployed, Charitable Trusts For Disabled and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Andh Apang Kalyan Kendra, Ahmedabad.', 'andhapangkalyankendra@gmail.com', 'AndhApangKalyna@Kendra', 7927665681, 'Near Janta Nagar, Railway, Crossing Road, Ghatlodiya, Ahmedabad, Gujarat 380061', 'navjyot_certificate.jpg', 'andh_apang_kalyan_photo.jpg', 22, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(25) NOT NULL,
  `user_last_name` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_mobile_no` bigint(10) NOT NULL,
  `user_address` text NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_gender`, `user_mobile_no`, `user_address`, `user_pincode`, `area_id`) VALUES
(1, 'Laxmi', 'Prajapati', 'laxmip@gmail.com', 'laxmi1234', 'Female', 9104052877, '18,Vina Kunj Society,RRR Trivedi School Road,vejalpur,Ahmedabad', 380051, 10),
(2, 'Drashti', 'Lil', 'sdp.project.2024@gmail.com', '123', 'Female', 9054568018, '17,Shiv Shakti Society,Opp.Uimya Dairy,Jivraj Park,Ahmedabad', 380051, 9),
(3, 'Mukesh', 'Kumawat', 'mukeshkumawat24@gmail.com', 'mukesh@kumawat12', 'Male', 7043138974, 'B12,Himavan Appartment,near.Nandan Park,Bopal,Ahmedabad', 380058, 1),
(4, 'Durga', 'Prajapati', 'durgap78@gmail.com', 'prajapati@12durga', 'Female', 8965347809, '39,Earth Bonglows,Near.Surdhara Bunglows,Prahlad Nagar,Ahmedabad', 380015, 10),
(5, 'Jugal', 'Patel', 'patelj26@gmail.com', 'pateljugal@23', 'Male', 9586248516, 'K/8,Shree Krishna,Above Crossword Library,Mithakali Six Road,Navrangpura,Ahmedabad', 380009, 11),
(6, 'Priya', 'Jagad', 'jagadpriya@gmail.com', 'priya7@jagad', 'Female', 9845674312, 'D-1/16, KK Nagar Rd, Manilal Nagar, Madhuvrund Society, Nirnay Nagar, Ahmedabad, Gujarat 380081', 382481, 14),
(7, 'Krish', 'Mavar', 'krishm64@gmail.com', 'Krish@45mavar', 'Male', 8976890987, 'B12,Venus Ground,Surendra Mangaldas Rd, Opposite Gallery Mall, Niyojan Nagar, Nehru Nagar, Ambawadi, Ahmedabad, Gujarat 380015', 38006, 15),
(8, 'Nitya', 'Parmar', 'nityaparamar2109@gmail.com', 'Nitya_34parmar', 'Male', 8756432134, '12, Tulip Bungllow Rd, Thaltej, Ahmedabad, Gujarat 380054', 380054, 16),
(9, 'Jigyasha', 'Patel', 'jiggipatel@gmail.com', 'Pjigyasaa987', 'Female', 9898097689, '2, Premchand Nagar, Premanjali Society, Satellite, Ahmedabad, Gujarat 380054', 380015, 5),
(10, 'Vidhyam', 'Thakkar', 'thakkarvidhyam66@gmail.com', 'vidhyam@45thakkar', 'Male', 9898098909, 'A12,Ratnakar Apartment-3, Near Shyamal Char Rasta, Satellite Road, 100 Feet Anand Nagar Rd, Jodhpur Village, Ahmedabad, Gujarat 380015', 380015, 17),
(11, 'Dhairya', 'Sharma', 'sharmadhairya98@gmail.com', 'dhairya87@sharma', 'Male', 8767567890, ' D04,Shaligram Square, Western Glory Ln, Gota, Ahmedabad, Gujarat 382481', 382481, 18),
(12, 'Ishani', 'Kerai', 'keraiishani@gmail.com', 'ish.45kerai', 'Female', 9089097656, 'E12,Garden Residency,Gala Gymkhana Rd, behind SHYAM VILLA 1 BUNGALOWS, Chittavan, South Bopal, Bopal, Ahmedabad, Gujarat 380058', 380058, 19),
(13, 'Dhwisha', 'Shah', 'shahdhwisha05@gmail.com', 'dhweesha@65shah', 'Female', 8978675678, '15,Kamalnayan Bunglows, S Bopal Rd, South Bopal, Bopal, Ahmedabad, Gujarat 380058', 380058, 19),
(14, 'Priya', 'Shah', 'priyaashah2002@gmail.com', 'priyaa.shah23', 'Female', 7867564323, 'D12,Panchshil Punit Apartment, Sardar Chimabhai Patel Marg, near Maitry Avenue, Daxini Society, Maninagar, Ahmedabad, Gujarat 380008', 380008, 20),
(15, 'Prem', 'Suthar', 'suthar04prem@gmail.com', 'sutharPrem1245', 'Male', 7867890987, 'C03,Vraj Vihar 8, Auda Lake Garden Rd, Prahlad Nagar, Ahmedabad, Gujarat 380015', 380015, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteer`
--

CREATE TABLE `tbl_volunteer` (
  `volunteer_id` int(11) NOT NULL,
  `volunteer_first_name` varchar(25) NOT NULL,
  `volunteer_last_name` varchar(25) NOT NULL,
  `volunteer_email` varchar(50) NOT NULL,
  `volunteer_password` varchar(100) NOT NULL,
  `volunteer_gender` varchar(6) NOT NULL,
  `volunteer_mobile_no` bigint(10) NOT NULL,
  `volunteer_address` text NOT NULL,
  `volunteer_photo` varchar(50) NOT NULL,
  `volunteer_verified` varchar(3) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_volunteer`
--

INSERT INTO `tbl_volunteer` (`volunteer_id`, `volunteer_first_name`, `volunteer_last_name`, `volunteer_email`, `volunteer_password`, `volunteer_gender`, `volunteer_mobile_no`, `volunteer_address`, `volunteer_photo`, `volunteer_verified`) VALUES
(1, 'Ayushi', 'Patel', 'patelayushi@gmail.com', 'ayuship12', 'Female', 6709345609, 'B05,vidhya Appartment,Ramdev Nagar, ISRO Colony Rd, near Super Society, Satellite, Ahmedabad', 'ayushi_patel.jpg', 'No'),
(4, 'Saloni', 'Patel', 'saloni7patel@gmail.com', 'patel34', 'Female', 9094789212, '10,Nirmal Apartment,Pritam Nagar Rd, Paldi, Ahmedabad', 'saloni_patel.jpg', 'No'),
(5, 'Ridhhi', 'Parmar', 'ridhiparmar@gmail.com', 'parmar24ridhhi', 'Female', 9898132467, '9, Aradhana Society, Ashapura Temple Lane, Jivraj Park Vejalpur Rd, Jivraj Park, Ahmedabad', 'ridhhi_parmar.jpg', 'No'),
(6, 'Parth', 'Shah', 'shahparth78@gmail.com', '1814', 'Male', 9870895678, 'D7, Gokuldham Apartment, opp. Rajwadu, Malav Talav, Jivraj Park, Ahmedabad', 'parth_shah.jpg', 'Yes'),
(7, 'Ashish', 'Pawar', 'ashishpwr98@gmail.com', 'ashish@pawar34', 'Male', 9724174506, 'C04,Samarpan Tower,Ghatlodiya, Ahmedabad\r\n', 'ashish_pawar.jpg', 'No'),
(8, 'Mohit', 'Rao', 'rmohit45@gmail.com', 'mohitr@v12', 'Male', 8767898909, 'G2,Parishkaar II Phase II, nr. Khokhra Circle, Parishkaar-2 Phase-2, Khokhra, Ahmedabad, Gujarat 380008', 'mohit_rao.jpg', 'Yes'),
(9, 'Mihir', 'Mistry', 'mihir2mistry@gmail.com', 'm2mmistry', 'Male', 7654678765, 'B06,Sun Rising Homes, Besides, Godrej Garden City, Jagatpur, Ahmedabad, Gujarat 382470', 'mihir.webp', 'Yes'),
(10, 'Ayesha', 'Gandhi', 'ayeshagandhi2004@gmail.com', 'a@yeshagandhi@2004', 'Female', 6778909876, '17,PRATHAM RESIDENCY, Jigyasha Society, Vibhavari Society, Vejalpur, Ahmedabad, Gujarat 380051', 'ayesha.webp', 'Yes'),
(11, 'Kashish', 'Dave', 'dkashish@gmail.com', 'kashishdave14235', 'Female', 7865890987, 'C08,Vaidehi Shree Hari Arjun Block-A, Ghatlodiya, Chanakyapuri, Ahmedabad, Gujarat 380061', 'kashish.png', 'No'),
(12, 'Bhavya', 'Modi', 'modibhavya78@gmail.com', 'bhavyamodi1209', 'Male', 8745236789, 'D15,OraBella Residency,Thaltej Rd, opp. Lake, Menaka Society, Thaltej, Ahmedabad, Gujarat 380059', 'bhavya.jpeg', 'Yes'),
(13, 'Parth', 'Dave', 'daveparth13@gmail.com', 'd@ve@1234', 'Male', 9867890987, 'xyz', 'parth_shah.jpg', 'Yes'),
(14, 'Kiya', 'Shah', 'shahkiya@gmail.com', 'Kiya@1234shah', 'Female', 9898768909, 'abc', '', ''),
(15, 'Piya', 'Vaghela', 'vpiya@gmail.com', 'piy@@vaghela', 'Female', 7878908767, 'pqr', '', ''),
(16, 'abc', 'pqr', 'abcpqr@gmail.com', 'abcprwe', 'Female', 8765432134, 'asdzfxghj', 'mohit_rao.jpg', 'No'),
(17, 'sdfghj', 'asdf', 'asdfg@gmail.com', 'asgcb132', 'Male', 8978675432, 'asdgfghjk', 'team-v2-1.jpg', ''),
(18, 'khushbu', 'prajapati', 'khushbup@gmail.com', '1234', 'female', 8956231470, 'xyz', 'team-v3-3.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_child`
--
ALTER TABLE `tbl_child`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_item_requirement`
--
ALTER TABLE `tbl_item_requirement`
  ADD PRIMARY KEY (`item_requirement_id`);

--
-- Indexes for table `tbl_ngo`
--
ALTER TABLE `tbl_ngo`
  ADD PRIMARY KEY (`ngo_id`),
  ADD UNIQUE KEY `ngo_email` (`ngo_email`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  ADD PRIMARY KEY (`volunteer_id`),
  ADD UNIQUE KEY `volunteer_email` (`volunteer_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_child`
--
ALTER TABLE `tbl_child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_item_requirement`
--
ALTER TABLE `tbl_item_requirement`
  MODIFY `item_requirement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_ngo`
--
ALTER TABLE `tbl_ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
