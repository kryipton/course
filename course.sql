-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 05:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p>Biz gənclərin y&uuml;ksək səviyyədə təhsilə yiyələnmələrini təmin etmək məqsədi ilə fəaliyyət g&ouml;stəririk. Biz hər zaman tələbələrimizdən tənqidi yanaşmağı, məntiqi d&uuml;ş&uuml;nməyi, yaradıcı fəaliyyət g&ouml;stərməyi və mədəni şəkildə yaşamağı tələb edirik. Universitetimiz xalqımıza və b&uuml;t&uuml;n d&uuml;nyaya fayda verəcək, inkişafı s&uuml;rətləndirəcək, iqtisadiyyatı g&uuml;cləndirəcək səviyyədə araşdırma imkanı və təhsili təmin etməklə fəaliyyətini davam etdirir.Tələbələrimiz, fak&uuml;ltələrimiz və iş&ccedil;i heyətimiz həyatın hər sahəsini, bir-birindən fərqli d&uuml;ş&uuml;ncələri, &ouml;lkəmizin və d&uuml;nyanın m&uuml;xtəlif yerlərini təmsil edirlər. &Ccedil;&uuml;nki b&ouml;y&uuml;k bir universitetdə olmağın ən g&ouml;zəl tərəflərindən biri təhsil almaq, işləmək, əylənmək, yeniliklərlə tanış olmaq, fikir alış-verişi etmək və he&ccedil; vaxt olmadığın yerlərdən gələn insanlarla &uuml;nsiyyət qurmaq şansına sahib olmaqdır. Universitetimiz m&uuml;xtəlifliklərimizlə bərabər ortaq y&ouml;nlərimizin tapılması və bir-birimizdən &ouml;yrənərək birlikdə gələcəyimizi daha parlaq etməyin marağındadır.</p>\r\n', '<p>Biz gənclərin y&uuml;ksək səviyyədə təhsilə yiyələnmələrini təmin etmək məqsədi ilə fəaliyyət g&ouml;stəririk. Biz hər zaman tələbələrimizdən tənqidi yanaşmağı, məntiqi d&uuml;ş&uuml;nməyi, yaradıcı fəaliyyət g&ouml;stərməyi və mədəni şəkildə yaşamağı tələb edirik. Universitetimiz xalqımıza və b&uuml;t&uuml;n d&uuml;nyaya fayda verəcək, inkişafı s&uuml;rətləndirəcək, iqtisadiyyatı g&uuml;cləndirəcək səviyyədə araşdırma imkanı və təhsili təmin etməklə fəaliyyətini davam etdirir.Tələbələrimiz, fak&uuml;ltələrimiz və iş&ccedil;i heyətimiz həyatın hər sahəsini, bir-birindən fərqli d&uuml;ş&uuml;ncələri, &ouml;lkəmizin və d&uuml;nyanın m&uuml;xtəlif yerlərini təmsil edirlər. &Ccedil;&uuml;nki b&ouml;y&uuml;k bir universitetdə olmağın ən g&ouml;zəl tərəflərindən biri təhsil almaq, işləmək, əylənmək, yeniliklərlə tanış olmaq, fikir alış-verişi etmək və he&ccedil; vaxt olmadığın yerlərdən gələn insanlarla &uuml;nsiyyət qurmaq şansına sahib olmaqdır. Universitetimiz m&uuml;xtəlifliklərimizlə bərabər ortaq y&ouml;nlərimizin tapılması və bir-birimizdən &ouml;yrənərək birlikdə gələcəyimizi daha parlaq etməyin marağındadır.</p>\r\n', '<p>Biz gənclərin y&uuml;ksək səviyyədə təhsilə yiyələnmələrini təmin etmək məqsədi ilə fəaliyyət g&ouml;stəririk. Biz hər zaman tələbələrimizdən tənqidi yanaşmağı, məntiqi d&uuml;ş&uuml;nməyi, yaradıcı fəaliyyət g&ouml;stərməyi və mədəni şəkildə yaşamağı tələb edirik. Universitetimiz xalqımıza və b&uuml;t&uuml;n d&uuml;nyaya fayda verəcək, inkişafı s&uuml;rətləndirəcək, iqtisadiyyatı g&uuml;cləndirəcək səviyyədə araşdırma imkanı və təhsili təmin etməklə fəaliyyətini davam etdirir.Tələbələrimiz, fak&uuml;ltələrimiz və iş&ccedil;i heyətimiz həyatın hər sahəsini, bir-birindən fərqli d&uuml;ş&uuml;ncələri, &ouml;lkəmizin və d&uuml;nyanın m&uuml;xtəlif yerlərini təmsil edirlər. &Ccedil;&uuml;nki b&ouml;y&uuml;k bir universitetdə olmağın ən g&ouml;zəl tərəflərindən biri təhsil almaq, işləmək, əylənmək, yeniliklərlə tanış olmaq, fikir alış-verişi etmək və he&ccedil; vaxt olmadığın yerlərdən gələn insanlarla &uuml;nsiyyət qurmaq şansına sahib olmaqdır. Universitetimiz m&uuml;xtəlifliklərimizlə bərabər ortaq y&ouml;nlərimizin tapılması və bir-birimizdən &ouml;yrənərək birlikdə gələcəyimizi daha parlaq etməyin marağındadır.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `graduated_date` date NOT NULL,
  `img` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name_surname`, `phone`, `email`, `text`, `course_name`) VALUES
(3, 'asdas', 'asdas', 'asdasd@asdasd', 'adsd', 'dd'),
(4, 'asdas', 'asasd', 'admin@admin.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, et, quidem? Blanditiis dolorum ex iusto pariatur quae repellat voluptas? Deserunt eaque eius est inventore mollitia quod vero. Dolores, quia veniam?\r\n', 'dd'),
(5, 'asdasd', 'asdasd@asdsd', 'as@asdasd', 'adasd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<table border=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&Uuml;nvan:</td>\r\n			<td><strong>Azərbaycan d&ouml;vlət neft və sənaye&nbsp; &uuml;niversiteti Bakı şəh,&nbsp;</strong>16/21 Azadlıq prospekti<strong>, Abşeron, Bakı, Azərbaycan</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Telefon:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>+994 (12) 5984308</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Faks:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&Uuml;mumi ş&ouml;bə +994 (12)&nbsp;349 99 90 /91</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>E-mail:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"mailto:info@adnsu.edu.az\">info@adnsu.edu.az</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>URL:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"http://asoiu.edu.az/\">http://asoiu.edu.az</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<table border=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&Uuml;nvan:</td>\r\n			<td><strong>Azərbaycan d&ouml;vlət neft və sənaye&nbsp; &uuml;niversiteti Bakı şəh,&nbsp;</strong>16/21 Azadlıq prospekti<strong>, Abşeron, Bakı, Azərbaycan</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Telefon:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>+994 (12) 5984308</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Faks:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&Uuml;mumi ş&ouml;bə +994 (12)&nbsp;349 99 90 /91</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>E-mail:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"mailto:info@adnsu.edu.az\">info@adnsu.edu.az</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>URL:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"http://asoiu.edu.az/\">http://asoiu.edu.az</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<table border=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&Uuml;nvan:</td>\r\n			<td><strong>Azərbaycan d&ouml;vlət neft və sənaye&nbsp; &uuml;niversiteti Bakı şəh,&nbsp;</strong>16/21 Azadlıq prospekti<strong>, Abşeron, Bakı, Azərbaycan</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Telefon:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>+994 (12) 5984308</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Faks:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&Uuml;mumi ş&ouml;bə +994 (12)&nbsp;349 99 90 /91</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>E-mail:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"mailto:info@adnsu.edu.az\">info@adnsu.edu.az</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>URL:</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><a href=\"http://asoiu.edu.az/\">http://asoiu.edu.az</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `max_student` int(11) NOT NULL,
  `lesson_start_hour` time NOT NULL,
  `lesson_end_hour` time NOT NULL,
  `whole_hour` int(11) NOT NULL,
  `whole_month` int(11) NOT NULL,
  `persons_az` text NOT NULL,
  `persons_en` text NOT NULL,
  `persons_ru` text NOT NULL,
  `program_az` text NOT NULL,
  `program_en` text NOT NULL,
  `program_ru` text NOT NULL,
  `practice_az` text NOT NULL,
  `practice_en` text NOT NULL,
  `practice_ru` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`,`course_id`),
  ADD KEY `course_teachers_ibfk_1` (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD CONSTRAINT `course_teachers_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
