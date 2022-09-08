-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 12:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `addate` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `fname`, `lname`, `email`, `phone`, `mobile`, `addate`, `type`, `image`, `add_by`) VALUES
(1, 'ahmed', 'marei', 'medah3280@gmail.com', '01150989881', '01150989881', '2019-02-16', 'محافظات', '1118317266.jpg', 1),
(2, 'ahmed', 'marei', 'ahmedmarei1996@gmail.com', '01150989881', '01150989881', '2019-02-08', 'أختار نوع المقال', '177686835.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `phone`, `role`, `image`, `password`) VALUES
(1, 'ahmed', 'marei', 'ahmedmarei1996@gmail.com', '01150989881', 1, '1375637639.jpg', '123456'),
(2, 'karim', 'ali', 'medah3280@gmail.com', '01145454545', 0, NULL, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `readed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `news_date` datetime NOT NULL,
  `type` varchar(15) NOT NULL,
  `star` tinyint(1) DEFAULT '0',
  `approved` tinyint(1) DEFAULT '0',
  `approvedAt` datetime DEFAULT NULL,
  `add_by` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `news_date`, `type`, `star`, `approved`, `approvedAt`, `add_by`, `image`) VALUES
(3, 'اغرب من الخيال', '1) بمجرد إطالة النظر في عيني شخص من الجنس الاخر سيؤثر على عقله الباطن ويجعله مغرمآ بك بشكل غير اختياري منه .\r\n\r\n2) نفسياً : \r\nعندما تضحك مجموعة من الأشخاص على شيء ما ، فكل شخص منهم ينظر لا شعوريا للشخص الذي يعجبه أكثر من بين المجموعة ، في المرة القادمة التي ستجمعون فيها مع الأصدقاء لاحظو ذلك ..\r\n\r\n3) نفسياً : \r\nأن علماء الأعصاب يقولون أنه في كل مرة تقاوم الإنفعال والتصرف أثناء غضبك فأنت تقوم بأعادة برمجة دماغك ليصبح أكثر ذكاء وهدوء في المستقبل أي بمعنى اذا نجحت في مقاومة غضبك باستمرار من الممكن أن تتغير شخصيتك كليا لتصبح أكثر إتزاناً وحكمة ..\r\n\r\n4) الانسان عندما يبدأ بالأنين أثناء النوم فهذا يعني انه يرى في الحلم اشياء تفوق ضغط عقله. بحيث يبدأ الجسم بإخراج تلك الاصوات لتخفيف الضغط ..', '2019-02-15 01:00:00', 'رياضة', 1, 0, '2019-02-19 12:42:15', 1, '1118317266.jpg'),
(4, 'أن علماء الأعصاب يقولون أنه في كل مرة تقاوم الإنفعال والتصرف أثناء غضبك فأنت تقوم بأعادة برمجة دماغك ليصبح أكثر ذكاء وهدوء في المستقبل أي بمعنى اذا نجحت في مقاومة غضبك باستمرار من الممكن', 'أن علماء الأعصاب يقولون أنه في كل مرة تقاوم الإنفعال والتصرف أثناء غضبك فأنت تقوم بأعادة برمجة دماغك ليصبح أكثر ذكاء وهدوء في المستقبل أي بمعنى اذا نجحت في مقاومة غضبك باستمرار من الممكن أن تتغير شخصيتك كليا لتصبح أكثر إتزاناً وحكمة ..\r\n\r\n4) الانسان عندما يبدأ بالأنين أثناء النوم فهذا يعني انه يرى في الحلم اشياء تفوق ضغط عقله. بحيث يبدأ الجسم بإخراج تلك الاصوات لتخفيف الضغط ..\r\n\r\n5) نفسياً : \r\nأن الأشخاص الذين يضحكون أكثر يتمتعون بصحة أفضل ويعيشون فترات طويلة من حياتهم دون التعرض لأي مرض أو عجز ومن ناحية أخرى هؤلاء الأشخاص يمتلكون عقلا مبدعا يخول لهم إيجاد الحلول المثالية لمشاكلهم بسهولة ودون عناء ..\r\n\r\n6 ) أن عندما تقوم بإضحاك فتاة تحبها فإن دماغها يسجل إستجابة لاشعورية اتجاهك مما يجعلها تتجذب إليك وقد تصبح تحبك أيضاً ، فعموما الرجل خفيف الدم الذي يملك القدرة على إضحاك الآخرين يحظى بجاذبية عالية عند المرأة كما ان ذلك قد يدل على عبقريته .\r\n\r\n7) أن بعض الأشخاص يعيشون ساخرين دائما ولا يأخذون الحياة بجدية أبدا وهذه الميزة طييعية في شخصيتهم ولدت فيهم فدماغ هؤلاء يستطيع إيجاد السخرية والجانب المضحك في جميع الأحداث مهما كانت جدية ورسمية وبالغة الأهمية عموماً ..\r\n\r\n8 ) نفسياً : \r\nأن في بعض الأحيان يفرح مشتري الهدية بالهدية أكثر من متلقيها إذ أن السعادة التي تغمر من يقدمها تكون أعلى من سعادة الطرف الذي يستقبلها ، لذلك ينصح الخبراء بتقديم الهدايا باستمرار للأقارب والأصدقاء على وجه الخصوص لأنها تعتبر من أسباب السعادة ..\r\n\r\n65 % من المتابعين', '2019-02-16 01:00:00', 'تحقيقات', 1, 1, '2019-02-19 12:43:28', 2, '2704133778.jpg'),
(5, 'يا جماعة انا معايا دراسات عليا في قسم التسويق عايزة اعرف إلى اشتغل ع خمسات', 'يا جماعة انا معايا دراسات عليا في قسم التسويق عايزة اعرف إلى اشتغل ع خمسات\r\nيا جماعة انا معايا دراسات عليا في قسم التسويق عايزة اعرف إلى اشتغل ع خمسات\r\nيا جماعة انا معايا دراسات عليا في قسم التسويق عايزة اعرف إلى اشتغل ع خمسات', '2019-02-14 01:00:00', 'شكاوى', 0, 0, '2019-02-19 12:42:34', 1, '177686835.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  `message` varchar(1) NOT NULL,
  `date_time` datetime NOT NULL,
  `approved_by` int(11) NOT NULL,
  `readed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id`, `newsid`, `message`, `date_time`, `approved_by`, `readed`) VALUES
(5, 3, '1', '2019-02-18 12:14:55', 1, 1),
(8, 4, '1', '2019-02-18 12:39:37', 1, 1),
(9, 4, '2', '2019-02-18 12:43:04', 1, 1),
(10, 4, '1', '2019-02-18 12:43:36', 1, 1),
(11, 5, '1', '2019-02-19 12:37:19', 1, 0),
(12, 4, '2', '2019-02-19 12:42:13', 1, 0),
(13, 3, '2', '2019-02-19 12:42:15', 1, 0),
(14, 5, '2', '2019-02-19 12:42:34', 1, 0),
(15, 4, '1', '2019-02-19 12:43:28', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_by` (`add_by`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsid` (`newsid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_by` (`add_by`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsid` (`newsid`),
  ADD KEY `approved_by` (`approved_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `ad_ibfk_1` FOREIGN KEY (`add_by`) REFERENCES `admin` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`newsid`) REFERENCES `news` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`add_by`) REFERENCES `admin` (`id`);

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `notif_ibfk_1` FOREIGN KEY (`newsid`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `notif_ibfk_2` FOREIGN KEY (`approved_by`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
