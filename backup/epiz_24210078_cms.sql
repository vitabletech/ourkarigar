-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.epizy.com
-- Generation Time: Jan 05, 2020 at 11:41 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24210078_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(16, 'Programming'),
(15, 'Job vacancy'),
(9, 'Technology'),
(13, 'Adventure'),
(14, 'Lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mess` varchar(500) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment_id` int(11) NOT NULL,
  `comment_status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `mess`, `post_id`, `date`, `comment_id`, `comment_status`) VALUES
('Mayank Singh kushwah', 'msrajawat298@gmail.com', 'nice post\r\n', '13', '2019-09-07 11:31:19', 1, 'unapproved');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 14, '', '', '', 'unapproved', '2019-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Mayank Singh kushwah', 'msrajawat298@gmail.com', 'uytre', 'gyfyfgtt'),
(2, 'Mayank Singh kushwah', 'msrajawat298@gmail.com', 'testing', 'bhf ghghghgfyh'),
(3, 'Mayank singh', 'Msrajawat298@gmail@com', 'Testing', 'Testing '),
(4, 'Mayank singh kushwah', 'msrajawat298@gmail.com', 'testing', 'testing.......'),
(5, 'Mayank singh kushwah', 'msrajawat298@gmail.com', 'uytre', 'gffg'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img_type` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `Title`, `description`, `img_type`) VALUES
(16, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/69706277_2391947244427492_2993106169632915456_n.jpg?_nc_cat=107&_nc_oc=AQmulB-qWgBZYbGj-xAWh3aqNpu1ha8x1oBNAP22JlB2lpX5WpltwK9zGTLUeApPxP4&_nc_ht=scontent.fidr1-2.fna&oh=af46709c6668551ab3c503bbb6ae2bbc&oe=5E04114A', 'Internship Certificate', 'Successful completed 2months internship as phpdevloper at TechCato.', 'all certificate'),
(17, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/50946155_2251258608496357_3713294914415493120_n.jpg?_nc_cat=108&_nc_oc=AQlmKGhD6PSVYoaB88l8K6JuuHcyr1CVwh6oXtPvAAuzQ-FiWr0xe8eogzOKKI9_krOUcYnoidBFHRnEiyc1b04h&_nc_ht=scontent.fidr1-1.fna&oh=21486e9b050fa3ad1712be0fdde3543f&oe=5DC88324', '', '', 'all certificate'),
(18, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/51214592_2251258641829687_1015824331747360768_n.jpg?_nc_cat=102&_nc_oc=AQksKKsWTi4z4b_UGWNZfuA8CDo_TMNSmJaIFvgfrStyMw-EeltR_RT8bKix1hyHxlacUsvWuA5RDxahfPFRwSbj&_nc_ht=scontent.fidr1-2.fna&oh=a8e37140e950dd4c8bbfaaa858ea9463&oe=5E06A411', '', '', 'all certificate'),
(19, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/51199711_2251258538496364_2359768947839991808_n.jpg?_nc_cat=111&_nc_oc=AQlqD-q1BJ36DAjezo6MWFSy53amUR0HJMYg3vIj9M9EamiXMtE91H3xKTOyIcQ4DeYgJnaT_LlKYPslCdsBtzQe&_nc_ht=scontent.fidr1-1.fna&oh=bb6f50b5a4e18bf0ee0c2ddb841e75c2&oe=5DF7849E', '', '', 'all certificate'),
(20, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/51026344_2251258485163036_3919735498205036544_n.jpg?_nc_cat=111&_nc_oc=AQkp24LMHB3c_Rh_SS7ZO6WCf-ldjD2AhNSqTfMOacWVR4Fh8ThCm9NrjcGU-PPyU_ldLvz_oBgoAdWJiSzU2nkm&_nc_ht=scontent.fidr1-1.fna&oh=22988d97f9f687ecd6655c14a6688d4c&oe=5E0F3699', '', '', 'all certificate'),
(21, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/30712779_2048979058724314_5524127961919258624_n.jpg?_nc_cat=110&_nc_oc=AQml92HGSxrVxOB2Hn9GlMelc3pBHQB06iCtZ4kJZIEUpvDu92TXLPrBk6HdCixCyZPRFC71PMYkGrw_iqalaLbt&_nc_ht=scontent.fidr1-2.fna&oh=e210ccc842d41be421b070a3f19e857d&oe=5DFCC56C', '', '', 'all popular'),
(22, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/30741466_2048978685391018_3623168788100284416_n.jpg?_nc_cat=104&_nc_oc=AQk0xcQvUjCQQA7ihE5QFI6nQOp3MfjHtyEle0u4ufdJfEq7V6Qouzi4k7QksILhohKIR53onFv4BW7TKkWtw5vg&_nc_ht=scontent.fidr1-1.fna&oh=8017e32b337ed53a276920d4945d59a1&oe=5DF49CE8', '', '', 'all latest'),
(23, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/30716374_2048976948724525_6756127377882873856_n.jpg?_nc_cat=111&_nc_oc=AQnjVdPoRKRJ1qhNYVcB0Vd963uwpc64X6CufP8FKTmX6y8zIxURzdJEuufTwDJDNw8tNMtbCfHmTy8dnUTMxUek&_nc_ht=scontent.fidr1-1.fna&oh=8b00e07b1b1e9e86af3ffe2c21ec26d2&oe=5E0A4FE8', '', '', 'all latest'),
(24, 'https://www.facebook.com/photo.php?fbid=2204556503166568&set=pb.100008367194900.-2207520000.1567868173.&type=3&size=720%2C900https://www.facebook.com/photo.php?fbid=2204556503166568&set=pb.100008367194900.-2207520000.1567868173.&type=3&size=720%2C900', '', '', 'all popular'),
(25, 'https://www.facebook.com/photo.php?fbid=2292490541039830&set=pb.100008367194900.-2207520000.1567868126.&type=3&size=605%2C606', '', '', 'all popular'),
(26, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/64777813_2342421136046770_3637782358490349568_n.jpg?_nc_cat=100&_nc_oc=AQmUl0UGi-eWFH5vSJww3-d3aBuDqKdaKYM8UwAoLqbQV4xigl2G3RLxdkgn2yU7r99YKH8X2x6mlM9ya7jf1tSf&_nc_ht=scontent.fidr1-1.fna&oh=b0acfc106446294f656b535cf555d939&oe=5E03792A', '', '', 'all popular'),
(27, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/55496033_2284438288511722_6339776563923386368_n.jpg?_nc_cat=110&_nc_oc=AQl7I_zaYBxOf9QAia1o-sOOV_saWx-PS7Qi9zELIE30Eu4ITngtGWjX4zJf1OJ21CPHmYVXZcOjp4Zb1C7zaJRs&_nc_ht=scontent.fidr1-2.fna&oh=740abcf416b1cb3a54360dc7ebe64589&oe=5DCA2A1C', '', '', 'all popular'),
(28, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/55488005_2284436818511869_5888081995933679616_n.jpg?_nc_cat=108&_nc_oc=AQnhBUTuwxvY7Z6ivHnEvvFheX3n1KIf_92pDNfh36Ne4rWcJLcWUfZ7enAFUa2a44HH3A81b8GThNgZw9lRzOO_&_nc_ht=scontent.fidr1-1.fna&oh=0130876cddcda17a141d12598ae3a6dd&oe=5E0AB07E', '', '', 'all popular'),
(29, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/55441188_2284438865178331_2622258756058087424_n.jpg?_nc_cat=108&_nc_oc=AQlbDH0MIAGwK5LysFTF6cYhmxItXC-8YLbrBMCgqVvDw9qq-Ig8hMpVenVL2ox_FyMBU826CELHQIGkBkMcYo6V&_nc_ht=scontent.fidr1-1.fna&oh=217e861f435ddd10ec461d9dbe8fdcfa&oe=5DF4D13C', '', '', 'all popular'),
(30, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/51375854_2251285931826958_5299966596469489664_n.jpg?_nc_cat=106&_nc_oc=AQkwvF_lJAamLFJEfCyPjs8GImpEvBiadDdxJLVpRYFnDOdz0L1u_rodPl0cgPkVn058pmJBjVgck5fWHwnlrle2&_nc_ht=scontent.fidr1-2.fna&oh=02e7cecafca91d96f3d504102cc81632&oe=5DCAAD0B', '', '', 'all popular'),
(31, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/53121418_2276577882631096_7347010136445026304_n.jpg?_nc_cat=100&_nc_oc=AQlJfw1HioWb1S1wu3QCOCqdugSOphUXZp_eQNRq__H_qmxW0UjTH4jr299ajJtbWdB_PBffn46zbRD0PH0ckLLp&_nc_ht=scontent.fidr1-1.fna&oh=3e70f6b5cfe692d15e1c1cc43748a699&oe=5DC8635B', 'Certificate', '', 'all popular'),
(32, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/36176196_2085062958449257_5031334392312627200_n.jpg?_nc_cat=110&_nc_oc=AQl92ID-2s0ARBWrSAr_G3xclfwDJjNaq_axmpa1QNO1Wl9zF5CBLOhYI-uoyDTtN-s28MJr5_KBgi5dmBIJvSwV&_nc_ht=scontent.fidr1-2.fna&oh=fbdd46251d8541a5053fd40019343649&oe=5DCBAE66', 'Python based email softwere', '', 'all popular'),
(33, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/35970299_2085055485116671_6925807044528177152_n.jpg?_nc_cat=101&_nc_oc=AQkutEwh_P8If_hjzs_C6fl8uYIkldvnUWo7rMPV6qUJOtChhZSzTahr9_BlHQTcgAn5nww2mvhH6dhl6YV72PgI&_nc_ht=scontent.fidr1-1.fna&oh=7ccc012b77c36f46ab78f3456312009a&oe=5E129956', 'Testing', '', 'all popular'),
(34, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/35928406_2085464591742427_8172195601660772352_n.jpg?_nc_cat=110&_nc_oc=AQm8i1dVIUsx53XJV43bwZ35tPWaU2IuliSlpgtXf_HWw7rgwveKEmf6RXqferA3J80wh2Tm7kfGPmuPj1bj-yE-&_nc_ht=scontent.fidr1-2.fna&oh=551422034d0bed32f6b4f5d80ffaa973&oe=5DFA7C3B', 'Installtion', '', 'all popular'),
(35, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/46318041_2196162024006016_2479216661266169856_n.jpg?_nc_cat=105&_nc_oc=AQlfdWokQ1pi8SjiOCPDK6ffdAAn4OWLKbZA20iQ-CjF-6RPt1OJVXSBd4qJTd_WdfewjbVBg3PTpMapQ1b-5YGk&_nc_ht=scontent.fidr1-2.fna&oh=7a3658bd3c02388acf9a4b9f3b03a390&oe=5DFBACEB', '', '', 'all popular'),
(36, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/30707885_2049520335336853_4392932106997596160_n.jpg?_nc_cat=111&_nc_oc=AQm29Juv9DS4xrg4Mm-sh9V5JE25-Ij5ABBs4tA3XAylqPECh2k2pA7Xak803CMuUWMMm9rZLhZm9XcgCqmOb7qS&_nc_ht=scontent.fidr1-1.fna&oh=c67ae3e03ca56a4db4f36987d42ac933&oe=5DC9EE2A', 'Certified by IIT Bombay', 'C++ training ', 'all certificate'),
(37, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/30712879_2048981578724062_6298847621536546816_n.jpg?_nc_cat=101&_nc_oc=AQm4U4WlD_SWU4aH1y9UZEFrU6PUeZ8paYhaI1qDpoUld64M8oIDB0vVJmaUIKCb6qM0ZvISDm6OK7olHvCzW5k8&_nc_ht=scontent.fidr1-1.fna&oh=1e08ceb4c1b3f5c107b1b40923ab0d03&oe=5E0B1DC2', '', '', 'all popular'),
(38, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/29432647_2035111816777705_6216056509088923648_n.jpg?_nc_cat=105&_nc_oc=AQkDuqSQ6IcpPT0QMJZk9aAAdIL8Llm3z6gqY1U9CtyRf_20gx1vOQ4neuDDQs60QcjtveEilmHHLzE1AftkEZHe&_nc_ht=scontent.fidr1-2.fna&oh=325d4caf85d7b7e046c1d422d90d0e00&oe=5E0E7AB3', 'clone website', '', 'all popular'),
(39, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/28277040_2022573611364859_9156287487967328304_n.jpg?_nc_cat=100&_nc_oc=AQkj51PYRFPq3vS9WR0vcjE2pO74zx36p1-dRW-yc3UuSb8RbOsrVY_tloBZBhCrMVp3wpKsGyJByqZBWr8yUEg8&_nc_ht=scontent.fidr1-1.fna&oh=d995155e17192d4eba3a699250828993&oe=5E157C56', '', '', 'all popular'),
(40, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/14089204_1754622088160014_3580471405640113989_n.jpg?_nc_cat=101&_nc_oc=AQkOrpHHigNhUVvBZgWBU5nj-YivYOEygOO3HwkKTDMXk5JAQxtIDT4nDJ0JLC0LMNsgpm6y602jCwunoORHoNTN&_nc_ht=scontent.fidr1-1.fna&oh=b992e1414c3c11329647e7483a2668bd&oe=5E03A2B0', '', '', 'all popular'),
(41, 'https://scontent.fidr1-2.fna.fbcdn.net/v/t1.0-9/17554400_1857696351185920_5912460435298941158_n.jpg?_nc_cat=105&_nc_oc=AQkLXYdEcJze-9E4XaLTjRAaH6_CtPZ3l5cMHDTc3FH8v7znTj6fgewVJVB1qGTSkmSw_xFDamSKo3WfPK6U4Odg&_nc_ht=scontent.fidr1-2.fna&oh=4a35a2e2da6eebff9de858b315f70da7&oe=5DF6AD98', '', '', 'all popular'),
(42, 'https://scontent.fidr1-1.fna.fbcdn.net/v/t1.0-9/17457924_1857659127856309_3056430293699472023_n.jpg?_nc_cat=108&_nc_oc=AQlMEKnhmDBKCS0htN5iuMI3thnhGc3ANXdvkyrHI9gf7ZG8jpR2Y_8ILHjV40QFeBKnUhDYITtGTVbJniakypXv&_nc_ht=scontent.fidr1-1.fna&oh=b2c8b7bd8a116031164c04b2c7a158d9&oe=5DF673CF', '', '', 'all popular');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_counts` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `views` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_counts`, `post_status`, `views`) VALUES
(29, 9, 'WWW  (WORLD WEB WIDE)', 'Mayank singh', '2019-11-29', 'contek.php', '<p>The Internet is our lifeline. Be it accessing web pages through a web browser, or the good old apps on your phone, the Internet is the one pipeline that lets you get information, stay up to date, do research, and even stay connected with friends and family. Most of us heavily rely on the Internet, and the power of Internet is not hidden from anyone. But do you know the source of this power?<strong> Exactly 30 years ago, on March 12, 1989</strong> British engineer and computer scientist Sir Tim Berners-Lee, now Director of the World Wide Web Consortium (W3C), wrote a proposal for what would finally become the World Wide Web. On the 30th anniversary of the World Wide Web, a true milestone in the Internet history, here are some rather interesting facts that you probably did not know.Â </p>', 'Technology,android, google,www,http,internet', 0, 'active', ''),
(25, 14, 'Oh My Ganesha Aavahan campaign', 'Reliance Digital', '2019-09-11', '', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/CTEarGLUnUc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Technology,android, google,festival, lord ganesha', 0, 'active', ''),
(26, 9, 'Android studio part-1 for beginner in hindi', 'Mayank singh', '2019-09-11', '', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/W6-osOnBMdw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Technology,android, google,android, apk,apps', 0, 'active', ''),
(27, 9, 'How take the input and print basic information of the user using c program', 'Mayank singh', '2019-09-11', '', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/aRrOsoZ_RF4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Technology,android, google,c,c++,programming', 0, 'active', ''),
(28, 9, 'How to get full information of your pc and a laptop.', 'Mayank singh', '2019-09-11', '', '<p><iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/NOF7dXl1iFw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></p>', 'Technology,android, google,c,c++,programming', 0, 'active', ''),
(23, 9, 'Print matrix in Linux ', 'Mayank singh', '2019-09-11', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/H7L10BlQrNU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Technology,android, google,linux,progarmming, hacking,kali', 0, 'active', ''),
(24, 9, 'How take the input and print basic information of the user using c program', 'msrajwat298', '2019-09-11', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aRrOsoZ_RF4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Technology,android, google,c,c++,programming', 0, 'active', ''),
(30, 15, 'Wipro Elite National Talent Hunt 2020 for BE/B.TECH/5 Years Integrated-M.TECH candidate only', 'Mayank singh', '2019-09-13', '', '<h2><strong>Eligibility Criteria</strong></h2><h2>Education</h2><ul><li>10th Standard: 60% or above</li><li>12th Standard: 60% or above</li><li>Graduation: 60% or CGPA Equivalent to 60% or above as applicable by the university guidelines</li></ul><h2>Year of Passing</h2><p>2020</p><h2>Qualification</h2><p>B.E./B.Tech / 5 years Integrated-M.Tech Only</p><h2>Branch of Study</h2><p>All Streams</p><h2>Designation</h2><p>Project Engineer</p><h2>Compensation</h2><p>INR 3.50 lacs per annum</p><h2>Service Agreement</h2><p>Applicable for 15 months post joining @ INR 75,000 on pro rata basis</p><h2>Other Criteria</h2><ul><li>Maximum of 3 years of education gap, if any, is allowed between 10th and graduation.</li><li>Should be from a Full-time Degree course in 10th, 12th &amp; Graduation recognized by the Central/State Government of India.</li><li>All Arrears and backlogs need to be cleared at the time of selection process.</li><li>Should have completed all exams/ viva-voice/ training and should not have any pending attendance requirement with the college/university.</li><li>Should be an Indian Citizen or should hold a PIO or OCI card, in the event of holding a passport of any other country</li><li>Bhutan and Nepal Nationals need to submit their citizenship certificate</li><li>Candidates who have participated in any selection process held by Wipro in the last six months are not eligible.</li></ul><p>&nbsp;</p><h2>Click here to appply:- <a href=\"https://careers.wipro.com/elite-nth.aspx\">https://careers.wipro.com/elite-nth.aspx</a></h2>', '', 0, 'active', ''),
(31, 9, 'C pattern - 1 ', 'msrajwat298', '2019-09-18', 'Screenshot (33).png', '<p>Â </p>', '', 0, 'active', ''),
(32, 16, 'C pattern - 2', 'msrajwat298', '2019-09-18', 'Screenshot (34).png', '<p>Â </p>', 'Technology,android, google,c,c++,programming, logical program', 0, 'active', ''),
(33, 9, 'Top website for Free source code ', 'msrajwat298', '2019-09-22', '', '<p><a href=\"https://www.cakemail.com/templates/\"><strong>PHP</strong></a><strong> CODE</strong></p><p>1.&nbsp;<a href=\"http://projects.students3k.com/\">http://projects.students3k.com</a></p><p>2.&nbsp;<a href=\"https://www.waqasmaqbool.com/2019/02/attendence-and-payroll-management-system.html\">https://www.waqasmaqbool.com/2019/02/attendence-and-payroll-management-system.html</a></p><p><a href=\"http://www.iamrohit.in/download-instagram-photo-video-using-php/\">3. http://www.iamrohit.in/download-instagram-photo-video-using-php/</a></p><p>4. <a href=\"http://www.techzoo.org/\">http://www.techzoo.org/</a></p><p>5.&nbsp; <a href=\"http://www.bestjquery.com/?z36ANwUB\">http://www.bestjquery.com/?z36ANwUB</a></p><p>6.&nbsp; <a href=\"https://projecttunnel.com/\">https://projecttunnel.com</a>.</p><p>7.&nbsp;<a href=\"https://getsetproject.com/\">https://getsetproject.com</a></p><p>8.&nbsp; <a href=\"https://phpgurukul.com/\">https://phpgurukul.com</a></p><p>9.&nbsp; <a href=\"https://www.kashipara.com/\">https://www.kashipara.com</a></p><p>10. <a href=\"https://www.phptpoint.com/projects/download-discussion-forum/\">https://www.phptpoint.com/projects/download-discussion-forum/</a></p><p>11. <a href=\"https://projectworlds.in/\">https://projectworlds.in</a></p><p>12.&nbsp;&nbsp; <a href=\"https://code-projects.org/\">https://code-projects.org</a></p><p><strong>13.&nbsp; </strong><a href=\"https://phppot.com/category/php/php-graphics/\">https://phppot.com/category/php/php-graphics/</a></p><p><strong>14.&nbsp; </strong><a href=\"http://freeproject24.com/\">http://freeproject24.com/</a></p><p><strong>15.&nbsp; </strong><a href=\"https://www.sourcecodester.com/tutorial/php\">https://www.sourcecodester.com/tutorial/php</a></p><p><strong>WEB TEMPLATES</strong></p><p>16.&nbsp;&nbsp; <a href=\"https://www.free-css.com/\">https://www.free-css.com</a></p><p>17.&nbsp;&nbsp; <a href=\"https://codemyui.com/tag/login-form/\">https://codemyui.com/tag/login-form/</a></p><p>18.&nbsp;&nbsp; <a href=\"https://www.jqueryscript.net/\">https://www.jqueryscript.net/</a></p><p>19.&nbsp;&nbsp; <a href=\"https://w3layouts.com/education-hub-education-category-bootstrap-responsive-web-template/\">https://w3layouts.com/</a></p><p>20.&nbsp;&nbsp; <a href=\"https://bootstrapmade.com/\">https://bootstrapmade.com/</a></p><p>21.&nbsp;&nbsp; <a href=\"https://nandorojo.github.io/animateMePlz/#howTo\">https://nandorojo.github.io/animateMePlz/#howTo</a></p><p>22.&nbsp;&nbsp; <a href=\"https://w3layouts.com/marry-off-wedding-category-bootstrap-responsive-web-template/\">https://w3layouts.com/marry-off-wedding-category-bootstrap-responsive-web-template/</a></p><p><strong>JAVA SCRIPTS PLUGIN</strong></p><p>23.&nbsp;&nbsp; <a href=\"https://www.jqueryscript.net/demo/Responsive-Multi-Functional-jQuery-Slider-Plugin-slider-js/\">https://www.jqueryscript.net/demo/Responsive-Multi-Functional-jQuery-Slider-Plugin-slider-js/</a></p><p>24.&nbsp;&nbsp; <a href=\"https://www.jqueryscript.net/demo/infinite-scrolling-background-scrolly/\">https://www.jqueryscript.net/demo/infinite-scrolling-background-scrolly/</a></p><p>25.&nbsp;&nbsp; <a href=\"http://scrollmagic.io/\">http://scrollmagic.io/</a></p><p>26.&nbsp;&nbsp; <a href=\"https://www.jqueryscript.net/demo/Parallax-Hover-Tilt-Effect-Universal-Tilt/\">https://www.jqueryscript.net/demo/Parallax-Hover-Tilt-Effect-Universal-Tilt/</a></p><p>27.&nbsp;&nbsp; <a href=\"https://www.phpzag.com/\">https://www.phpzag.com/</a></p><p>28.&nbsp;&nbsp; <a href=\"https://www.phpzag.com/change-background-color-dynamically-using-bootstrap-color-picker/\">https://www.phpzag.com/change-background-color-dynamically-using-bootstrap-color-picker/</a></p><p>29.&nbsp;&nbsp; <a href=\"https://www.technovedant.com/26th-january-2019-happy-republic-day-script.html\">https://www.technovedant.com/26th-january-2019-happy-republic-day-script.html</a></p><p>30.&nbsp;&nbsp; <a href=\"https://phaser.io/examples/v2/games/invaders\">https://phaser.io/examples/v2/games/invaders</a></p><p>31.&nbsp;&nbsp; <a href=\"https://www.templatespoint.net/category/Websites-Templates/Education\">https://www.templatespoint.net/category/Websites-Templates/Education</a>.</p><p>32.&nbsp;&nbsp; <a href=\"https://www.phpkobo.com/ajax_poll.php\">https://www.phpkobo.com/ajax_poll.php</a></p><p>33.&nbsp;&nbsp; <a href=\"https://www.webslesson.info/p/online-code-formatter.html\">https://www.webslesson.info/p/online-code-formatter.html</a></p><p><strong>EMAIL TEMPLATES</strong></p><p>34.&nbsp;&nbsp; <a href=\"https://www.cakemail.com/templates/\">https://www.cakemail.com/templates/</a></p><p><strong>SOME IMPORTANT LINK</strong></p><p>35.&nbsp;&nbsp; <a href=\"https://enlight.nyc/login\">https://enlight.nyc/login</a></p><p>36.&nbsp;&nbsp; <a href=\"https://www.geeksforgeeks.org/whatsapp-using-python/\">https://www.geeksforgeeks.org/whatsapp-using-python/</a></p>', '', 0, 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `ID` int(10) NOT NULL,
  `skill_name` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`ID`, `skill_name`, `description`, `CreationDate`) VALUES
(1, ' Computer language', 'C,C++', '2019-07-25 11:22:38'),
(2, ' Database', 'MYSQL', '2019-07-25 11:22:53'),
(3, 'Web technologies ', ' HTML, CSS ,PHP', '2019-09-13 06:32:49'),
(4, 'Desktop app', 'Microsoft word,Power point', '2019-09-13 06:35:42'),
(5, 'Opertaing system', 'Windows 10,Windows 7/8 , Linux (Ubuntu, kali linux)', '2019-09-13 06:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(6, 'msrajawat', '12345', 'Mayank singh', 'kushwah', 'msrajawat298@gmail.com', '', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
