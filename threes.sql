-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 05:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `threes`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_text` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active, 2=InActive',
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `image`, `blog_title`, `blog_text`, `status`, `join_date`) VALUES
(13, '64495851_372842898_276287801958357_198009649153472108_n.png', 'Navigating the Rental Market: Tips for Finding Your Ideal Home', '<p>Renting a home is a significant decision that can have a profound impact on your lifestyle and financial well-being. Whether you&#39;re a first-time renter or a seasoned tenant, this blog is your go-to resource for valuable insights and tips to help you secure your ideal rental property. We&#39;ll cover crucial aspects of the rental process, ensuring that you make informed decisions every step of the way.</p>\r\n\r\n<p><strong>1. Setting Your Budget:</strong> Before you embark on your search for a rental home, it&#39;s essential to establish a well-defined budget. Determine the monthly amount you can comfortably afford while still managing other essential expenses. Take into account factors like rent, utilities, and potential additional fees.</p>\r\n\r\n<p><strong>2. Location Matters:</strong> Location often tops the list of critical factors in the rental decision-making process. Consider your daily commute, access to amenities, and the overall safety and reputation of the neighborhood. Create a prioritized list of your location preferences to guide your search.</p>\r\n\r\n<p><strong>3. Property Research:</strong> Leverage online resources and apps to research available rental properties in your chosen areas. Popular websites like Zillow, Trulia, and Craigslist can be excellent starting points for your search. Don&#39;t forget to read reviews and check for recent property updates or maintenance records.</p>\r\n\r\n<p><strong>4. Visit Multiple Properties:</strong> Resist the temptation to settle for the first property that catches your eye. It&#39;s vital to invest time in touring multiple homes, even if you initially think you&#39;ve found the perfect one. This approach broadens your perspective and enhances your decision-making process.</p>\r\n\r\n<p><strong>5. Check for Amenities and Utilities:</strong> Ensure that you inquire about the amenities and utilities included in the rent. Some rental properties offer additional services such as water, gas, or internet, while others do not. Understanding these details will enable you to budget more effectively.</p>\r\n\r\n<p><strong>6. Inspect the Property:</strong> When you visit a potential rental property, conduct a thorough inspection. Look for signs of damage or issues that require attention. Document any concerns and discuss them with the landlord or property manager.</p>\r\n\r\n<p><strong>7. Understand the Lease Agreement:</strong> Carefully review the lease agreement before affixing your signature. Pay close attention to the lease terms, including the duration, rent adjustment procedures, and the protocol for requesting repairs. Don&#39;t hesitate to seek clarification if any aspects appear unclear.</p>\r\n\r\n<p><strong>8. Negotiating Rent and Terms:</strong> Keep in mind that it&#39;s often possible to negotiate the rent or lease terms with the landlord. If the initial offer doesn&#39;t align with your budget, consider initiating discussions regarding alternative options such as an extended lease term or the inclusion of specific utilities.</p>\r\n\r\n<p><strong>9. Security Deposit and Renters Insurance:</strong> Familiarize yourself with the security deposit requirements and the circumstances under which you may or may not receive a refund. Additionally, contemplate obtaining renters insurance to safeguard your personal belongings.</p>\r\n\r\n<p><strong>10. Move-In Checklist:</strong> Before moving into your new rental property, create a comprehensive checklist for inspecting and documenting the property&#39;s condition. This proactive approach will help prevent disputes over damages when it&#39;s time to move out.</p>\r\n\r\n<p>Navigating the rental market may seem daunting, but armed with these insights and tips, you can confidently embark on your journey to find the perfect rental home that suits your needs and preferences. Happy house hunting!</p>\r\n', 1, '2023-06-14'),
(14, '618420994_372908141_2586215751536981_7322057460950764973_n.png', '11 Ways to Make Laundry Day Easier', '<p>Laundry day doesn&#39;t have to be a daunting chore. With these 11 simple tips, you can streamline the process and make it a breeze.</p>\r\n\r\n<p><strong>1. Sort as You Go:</strong> Set up multiple hampers to sort your laundry as you discard clothes. Label them by family member or sorting preference, making laundry day a no-brainer.</p>\r\n\r\n<p><strong>2. Stain Treat as You Go:</strong> Keep stain treatment products handy near your hamper. Treat stains immediately, so you don&#39;t have to examine each piece of clothing on laundry day.</p>\r\n\r\n<p><strong>3. Use Zippered Mesh Bags:</strong> Delicate wash bags are your friends. They protect fragile items, separate air-dry clothes, and prevent sock losses. Choose bags with hidden zippers for added convenience.</p>\r\n\r\n<p><strong>4. Separate into Fewer Loads:</strong> Mesh bags can reduce the number of loads you wash. Utilize them to group family members&#39; laundry or mix whites with colored items using color catchers.</p>\r\n\r\n<p><strong>5. Use the &quot;Quick Wash&quot; Cycle:</strong> Opt for the quick cycle on your washing machine to save time. It&#39;s just as effective for most loads and takes half the duration of the normal cycle.</p>\r\n\r\n<p><strong>6. Wash Less Often:</strong> Not all clothes need washing after every wear. Perform a sniff test and air out lightly worn items to extend their use. You&#39;ll save time and prolong clothing life.</p>\r\n\r\n<p><strong>7. Make the Dryer Do the Ironing:</strong> Remove clothes promptly from the dryer to prevent wrinkles. Fold pants right away and hang collared shirts for wrinkle-free results. Use the dryer with a damp washcloth for any remaining wrinkles.</p>\r\n\r\n<p><strong>8. Multitask:</strong> Make the most of laundry cycle times by setting goals for each load. Accomplish tasks like workouts, phone calls, or meal prep while the laundry runs in the background.</p>\r\n\r\n<p><strong>9. Make a Schedule:</strong> Establish a routine laundry schedule that aligns with your hamper-filling rate. Stick to specific days for laundry to avoid last-minute hassles.</p>\r\n\r\n<p><strong>10. Get the Kids to Help:</strong> Involve your children in the laundry process from a young age. They can assist with loading, sorting, and even pressing buttons with your supervision. It&#39;s a valuable life skill and a fun way for them to contribute.</p>\r\n\r\n<p><strong>11. Outsource the Laundry Altogether:</strong> If laundry remains a time-consuming burden, consider outsourcing it to a laundry service like Laundry Care. With free pickup and delivery, you can reclaim your time and focus on more important tasks.</p>\r\n\r\n<p>By implementing these tips, you can transform laundry day from a chore into a more efficient and manageable part of your routine. Whether you choose to optimize your process or outsource it, there&#39;s a solution to fit your needs.</p>\r\n', 1, '2023-06-14'),
(15, '567878948_373408059_1002875370857174_6886844415110365842_n.png', '10 quick ways to increase usage of your digital collection this year', '<p>It&#39;s that time of year again &ndash; a fresh academic year is underway, and it&#39;s the perfect opportunity to remind students and faculty about the wealth of resources available at your college or university library, including Libby. Here are some tips to kickstart the year with a bang:</p>\r\n\r\n<p><strong>1. Campus-Wide Screens:</strong> If you have physical presence on campus, leverage screens in key locations like the library, student center, or academic buildings to promote Libby. Use pre-designed screens available in the resource center or request custom designs featuring your library logo.</p>\r\n\r\n<p><strong>2. Harness the Power of Social Media:</strong> Engage your library&#39;s social media platforms and collaborate with other departments like student wellness centers, residence life, and student media to reach a broader audience. You can utilize pre-made social graphics from the resource center or request custom graphics.</p>\r\n\r\n<p><strong>3. Welcome and Orientation Events:</strong> If your library hosts events at the beginning of the semester, make sure to have printed materials and signage highlighting Libby. You can find Libby promotional flyers and other printable materials in the resource center.</p>\r\n\r\n<p><strong>4. Request a Libby Marketing Kit:</strong> If you want additional promotional materials, don&#39;t hesitate to request a marketing kit that can be shipped to your library.</p>\r\n\r\n<p><strong>5. Embrace PR Strategies:</strong> Consider sending out a campus-wide email newsletter or press release to announce or remind students and faculty about Libby&#39;s digital content offerings. You can start with a pre-made press release template or seek specific PR assistance.</p>\r\n\r\n<p><strong>6. Curate Collections:</strong> Save time by seeking help from digital content librarians who can curate collections tailored to your students&#39; and faculty&#39;s interests. You can also explore regularly updated collection development lists for academic libraries.</p>\r\n\r\n<p><strong>7. Stay on Trend:</strong> Align your collections with holidays, themes, and subjects important to your audience. This could include Pride or Black History months, banned books, BookTok trends, stress relief, and more.</p>\r\n\r\n<p><strong>8. Keep Informed:</strong> Stay up-to-date with new content and resources by subscribing to OverDrive&#39;s newsletter, where you&#39;ll receive news and tools to enhance your library&#39;s offerings.</p>\r\n\r\n<p><strong>9. Diversify Your Offerings:</strong> Consider adding alternative digital formats like magazines, comics, graphic novels, or streaming videos to capture students&#39; interests. These formats can serve as valuable resources for both curriculum and extracurricular activities.</p>\r\n\r\n<p><strong>10. Consult Your OverDrive Team:</strong> If you need more ideas or assistance with Libby promotion, reach out to your account manager. OverDrive&#39;s marketing team can also create customized digital tools to meet your specific needs.</p>\r\n\r\n<p>With these strategies, you can ensure that your academic library is fully equipped to make the most of Libby and provide students and faculty with access to a wide range of digital resources for a successful academic year.</p>\r\n', 1, '2023-06-15'),
(16, '763735944_373072474_7249180991762037_6856394324288125558_n.png', '10 Facts About PEX Pipe You Need to Know', '<p>Plumbing professionals understand the importance of selecting the right tools, techniques, and materials when installing or repairing plumbing systems. PEX tubing, a popular choice for many, has gained prominence due to its versatility and cost-effectiveness. However, it&#39;s not immune to misconceptions and questions regarding its safety, durability, and suitability for various applications. In this article, we address some of the most common questions and concerns surrounding PEX.</p>\r\n\r\n<p>**Is PEX BPA free?**<br />\r\nYes, PEX is BPA-free. PEX, short for cross-linked high-density polyethylene (HDPE), undergoes a chemical or physical modification process to permanently link its polymer chains. This process ensures that BPA is not present in PEX pipes, as confirmed by NSF/ANSI/CAN 61, a plumbing standard that evaluates the health effects of potable water system components.</p>\r\n\r\n<p>**Is PEX safe for drinking water?**<br />\r\nAbsolutely. Both PEX-a and PEX-b variants are safe for use with drinking water. These PEX types undergo rigorous third-party testing, typically by organizations like IAPMO or NSF, to ensure compliance with standards such as NSF/ANSI 61, which evaluates health effects. Compliance with this standard means that PEX is safe for use with drinking water.</p>\r\n\r\n<p>**Does PEX leach chemicals?**<br />\r\nPEX is subject to strict testing requirements outlined by NSF/ANSI/CAN 61. This standard mandates the analysis of any chemicals that might leach from a material into drinking water, accompanied by a toxicological evaluation to ensure that concentrations remain below levels that could cause adverse health effects. PEX, when used in accordance with these standards, is proven safe for drinking water.</p>\r\n\r\n<p>**Are rodents attracted to PEX?**<br />\r\nNo, PEX does not attract rodents. Research indicates that rodents, including mice and rats, maintain their dental health by gnawing on various materials. Therefore, virtually any material, including wood, copper, lead, and plastics, is at risk of being chewed if installed in areas infested with rodents.</p>\r\n\r\n<p>**Is PEX safe for hot water?**<br />\r\nYes, PEX is suitable for hot water distribution. It meets industry standards such as ASTM F877, which specifies requirements and test methods for PEX used in both hot and cold water distribution systems, as well as under-floor heating systems. Additionally, ASTM F876 outlines requirements for PEX tubing, including oxidative stability in chlorinated water, UV resistance, and more, making PEX a reliable choice for hot water applications.</p>\r\n\r\n<p>In conclusion, PEX is a safe, reliable, and versatile plumbing material that adheres to rigorous industry standards for drinking water safety, chemical leaching prevention, and hot water usage. Plumbing professionals can confidently use PEX tubing in various applications while dispelling common misconceptions about its performance and suitability.</p>\r\n', 1, '2023-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1=Active 2=InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `sub_title`, `description`, `cat_id`, `author_name`, `quantity`, `image`, `status`) VALUES
(1, 'Data Structures and Algorithms', 'Second Edition: Level Up Your Core Programming Skills', '<p>Algorithms and data structures are much more than abstract concepts. Mastering them enables you to write code that runs faster and more efficiently, which is particularly important for today&acirc;&euro;&trade;s web and mobile apps. Take a practical approach to data structures and algorithms, with techniques and real-world scenarios that you can use in your daily production code, with examples in JavaScript, Python, and Ruby. This new and revised second edition features new chapters on recursion, dynamic programming, and using Big O in your daily work.</p>\r\n\r\n<p>Use Big O notation to measure and articulate the efficiency of your code, and modify your algorithm to make it faster. Find out how your choice of arrays, linked lists, and hash tables can dramatically affect the code you write. Use recursion to solve tricky problems and create algorithms that run exponentially faster than the alternatives. Dig into advanced data structures such as binary trees and graphs to help scale specialized applications such as social networks and mapping software. You&acirc;&euro;&trade;ll even encounter a single keyword that can give your code a turbo boost. Practice your new skills with exercises in every chapter, along with detailed solutions.</p>\r\n', 23, 'Jay Wengrow', 0, '601556273_81yvVmN1BLL.jpg', 1),
(4, 'Graphic Design', 'A longstanding excellent primer, in an equally excellent updated edition.', '<p>Ellen Lupton and Jennifer Cole Phillips&#39;s celebrated introduction to graphic design, available in a revised and updated edition.&nbsp;Graphic Design: The New Basics&nbsp;explains the key concepts of visual language that inform any work of design. A foundational graphic design book for students, Lupton and Phillips explore the formal elements of design through visual demonstrations and concise commentary. From logos to letterhead to complex website design, this is a graphic design book for everyone, no matter your design project or focus.<br />\r\n<br />\r\nTopics include:<br />\r\n<br />\r\n&bull; Color<br />\r\n&bull; Texture<br />\r\n&bull; Rhythm and balance<br />\r\n&bull; Hierarchy<br />\r\n&bull; Layers<br />\r\n&bull; Grids<br />\r\n&bull; And much more!</p>\r\n', 22, 'Ellen Lupton', 10, '104850051_614u6vrv1rL._AC_SY780_.jpg', 1),
(5, 'Introduction to Algorithms', '3rd Edition (The MIT Press) 3rd Edition', '<p>The latest edition of the essential text and professional reference, with substantial new material on such topics as vEB trees, multithreaded algorithms, dynamic programming, and edge-based flow.</p>\r\n\r\n<p>Some books on algorithms are rigorous but incomplete; others cover masses of material but lack rigor.&nbsp;Introduction to Algorithms&nbsp;uniquely combines rigor and comprehensiveness. The book covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and can be used as a unit of study. The algorithms are described in English and in a pseudocode designed to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.</p>\r\n', 22, 'Thomas H. Cormen', 11, '184153024_41VndKVtiXL._AC._SR360,460.jpg', 1),
(6, 'JavaScript from Beginner to Professional', 'Learn JavaScript quickly by building fun and  interactive', '<p>This book demonstrates the capabilities of JavaScript for web application development by combining theoretical learning with code exercises and fun projects that you can challenge yourself with. The guiding principle of the book is to show how straightforward JavaScript techniques can be used to make web apps ranging from dynamic websites to simple browser-based games.</p>\r\n\r\n<p>JavaScript from Beginner to Professional focuses on key programming concepts and Document Object Model manipulations that are used to solve common problems in professional web applications. These include data validation, manipulating the appearance of web pages, working with asynchronous and concurrent code.</p>\r\n\r\n<p>The book uses project-based learning to provide context for the theoretical components in a series of code examples that can be used as modules of an application, such as input validators, games, and simple animations. This will be supplemented with a brief crash course on HTML and CSS to illustrate how JavaScript components fit into a complete web application.</p>\r\n', 2, 'Laurence Lars Svekis', 10, '548455345_download.jpg', 1),
(8, 'Head First PHP & MySQL', 'Paperback – Illustrated, 6 January 2009', '<p>If you&#39;re ready to create web pages more complex than those you can build with HTML and CSS,&nbsp;Head First PHP &amp; MySQL&nbsp;is the ultimate learning guide to building dynamic, database-driven websites using PHP and MySQL. Packed with real-world examples, this book teaches you all the essentials of server-side programming, from the fundamentals of PHP and MySQL coding to advanced topics such as form validation, session IDs, cookies, database queries and joins, file I/O operations, content management, and more.</p>\r\n\r\n<p>Head First PHP &amp; MySQL&nbsp;offers the same visually rich format that&#39;s turned every title in the Head First series into a bestseller, with plenty of exercises, quizzes, puzzles, and other interactive features to help you retain what you&#39;ve learned.</p>\r\n\r\n<ul>\r\n	<li>Use PHP to transform static HTML pages into dynamic web sites</li>\r\n	<li>Create and populate your own MySQL database tables, and work with data stored in files</li>\r\n	<li>Perform sophisticated MySQL queries with joins, and refine your results with LIMIT and ORDER BY</li>\r\n	<li>Use cookies and sessions to track visitors&#39; login information and personalize the site for users</li>\r\n	<li>Protect your data from SQL injection attacks</li>\r\n	<li>Use regular expressions to validate information on forms</li>\r\n	<li>Dynamically display text based on session info and create images on the fly</li>\r\n	<li>Pull syndicated data from other sites using PHP and XML</li>\r\n</ul>\r\n\r\n<p>Throughout the book, you&#39;ll build sophisticated examples -- including a mailing list, a job board, and an online dating site -- to help you learn how to harness the power of PHP and MySQL in a variety of contexts. If you&#39;re ready to build a truly dynamic website,&nbsp;Head First PHP &amp; MySQL&nbsp;is the ideal way to get going.</p>\r\n', 8, 'Lynn Beighley', 10, '300604914_91ABxmbYNSL.jpg', 1),
(9, 'The Totally Awesome Book of Useless Information', 'Paperback – June 5, 2012', '<p>Did you know that the Pilgrims ate popcorn at the first Thanksgiving? Or that Maine is the toothpick capital of the world, or that frogs have teeth?<br />\r\n<br />\r\nDo you want to know what a cockroach&rsquo;s favorite food is, or how long it would take to drive to the sun?<br />\r\n<br />\r\nAmaze your friends and family by telling them that a baby giraffe is six feet long when it is born, or that tigers have striped skin!<br />\r\n<br />\r\nFrom the creators of&nbsp;The Book of Useless Information, this is an amazing collection of the wildest, oddest, funniest facts about history, science, food, animals, and more!</p>\r\n', 24, 'Noel Botham', 5, '175610318_images.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rcv_date` date NOT NULL,
  `rtn_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 4 COMMENT '1=Activated, 2=Returned, 3=Canceled, 4=Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`id`, `book_id`, `user_id`, `rcv_date`, `rtn_date`, `booking_date`, `status`) VALUES
(3, 4, 10, '2022-11-11', '2022-11-21', '2022-11-04', 4),
(4, 8, 10, '2022-11-04', '2022-11-11', '2022-11-04', 4),
(5, 6, 6, '2022-11-05', '2022-11-30', '2022-11-04', 4),
(6, 8, 7, '2022-11-09', '2022-11-12', '2022-11-05', 2),
(7, 4, 6, '2022-11-09', '2022-11-25', '2022-11-08', 2),
(8, 1, 7, '2022-11-23', '2022-11-30', '2022-11-08', 2),
(9, 1, 5, '2022-11-23', '2022-11-30', '2022-11-08', 2),
(10, 1, 5, '2022-11-28', '2022-11-30', '2022-11-08', 2),
(12, 1, 5, '2022-11-09', '2022-11-30', '2022-11-08', 2),
(13, 8, 5, '2022-11-27', '2022-11-28', '2022-11-08', 2),
(14, 8, 7, '2022-11-09', '2022-11-11', '2022-11-08', 2),
(15, 8, 5, '2022-11-23', '2022-11-26', '2022-11-08', 2),
(16, 1, 5, '2022-11-11', '2022-11-12', '2022-11-11', 2),
(17, 8, 5, '2022-11-17', '2022-11-19', '2022-11-11', 2),
(18, 4, 5, '2022-11-30', '2022-11-30', '2022-11-11', 1),
(19, 1, 5, '2022-11-02', '2022-11-03', '2022-11-11', 2),
(20, 8, 5, '2022-11-03', '2022-11-01', '2022-11-11', 3),
(21, 4, 5, '2022-11-17', '2022-11-29', '2022-11-12', 3),
(22, 8, 5, '2022-11-15', '2022-11-18', '2022-11-12', 4),
(23, 4, 5, '2022-11-30', '2022-11-29', '2022-11-12', 4),
(24, 1, 5, '2022-11-13', '2022-11-14', '2022-11-13', 3),
(25, 8, 5, '2023-05-12', '2023-05-31', '2023-05-05', 4),
(26, 4, 12, '2023-05-26', '2023-05-31', '2023-05-25', 1),
(27, 9, 5, '2023-06-14', '2023-06-30', '2023-06-12', 4),
(28, 5, 5, '2023-06-13', '2023-06-14', '2023-06-12', 3),
(29, 4, 5, '2023-06-13', '2023-06-14', '2023-06-15', 4),
(30, 4, 14, '2023-06-21', '2023-06-29', '2023-06-20', 1),
(31, 4, 15, '2023-08-22', '2023-08-22', '2023-08-01', 4),
(32, 4, 14, '2023-08-23', '2023-08-30', '2023-08-20', 3),
(33, 4, 14, '2023-08-30', '2023-08-30', '2023-08-20', 4),
(34, 4, 14, '2023-08-31', '2023-08-25', '2023-08-20', 4),
(35, 4, 14, '2023-09-12', '2023-09-30', '2023-09-02', 4),
(36, 4, 17, '2023-09-19', '2023-09-30', '2023-09-04', 4),
(37, 4, 14, '2023-09-07', '2023-09-08', '2023-09-06', 4),
(38, 8, 14, '2023-09-15', '2023-09-30', '2023-09-08', 1),
(39, 4, 14, '2023-09-08', '2023-09-23', '2023-09-08', 4),
(40, 4, 14, '2023-09-14', '2023-09-30', '2023-09-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` text DEFAULT NULL,
  `is_parent` int(11) NOT NULL DEFAULT 0 COMMENT '0=Parent Category',
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 2=InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `is_parent`, `status`) VALUES
(2, 'Tere Moiya Mess', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 1, 1),
(3, 'Graphic Design', '<p>This is Graphics Design Platform Where we can learn about Graphics Design Concept.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 1),
(6, 'asa', '<p>asa</p>\r\n', 1, 1),
(8, 'Php & MySQl', '', 2, 1),
(22, 'Algorithm', '', 0, 1),
(23, 'Data Structure', '', 22, 1),
(24, 'Comic', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `laund_cat`
--

CREATE TABLE `laund_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` text DEFAULT NULL,
  `is_parent` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Parent',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=InActive',
  `image` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laund_cat`
--

INSERT INTO `laund_cat` (`cat_id`, `cat_name`, `cat_desc`, `is_parent`, `status`, `image`, `price`) VALUES
(20, 'Laundry', '', '1', 1, '907384826_373053834_2208300892855182_9130924688839606378_n.png', '42'),
(21, 'Dry Cleaning', '', '1', 1, '53324672_373291686_3560423707563348_7340251921412456129_n.png', '50'),
(22, 'Ironing', '', '1', 1, '224186952_373067833_689938619726869_5572068634774790243_n.png', '50'),
(23, ' Coat/Blazer', '', '20', 1, NULL, '180'),
(24, 'Suit (2pcs)', '', '20', 1, NULL, '230'),
(25, 'Suit (3pcs)', '', '20', 1, NULL, '250'),
(26, 'Lady Suit', '', '20', 1, NULL, '180'),
(27, 'Lady Suit (2pcs)', '', '20', 1, NULL, '250'),
(28, 'Baby Suit (2pcs)', '', '20', 1, NULL, '70'),
(29, 'Blanket Single', '', '20', 1, NULL, '350'),
(30, 'Blanket Double', '', '20', 1, NULL, '400'),
(31, 'T-Shirt', '', '20', 1, NULL, '50'),
(32, 'Shirt', '', '20', 1, NULL, '50'),
(33, 'Pant/Trouser', '', '20', 1, NULL, '50'),
(34, 'Jeans', '', '20', 1, NULL, '50'),
(35, 'Panjabi', '', '20', 1, NULL, '50'),
(37, 'Panjabi Heavy', '', '20', 1, NULL, '60'),
(38, 'Pajama', '', '20', 1, NULL, '40'),
(39, 'Lungi', '', '20', 1, NULL, '50'),
(40, ' Coat/Blazer', '', '21', 1, NULL, '200'),
(41, 'Suit (2pcs)', '', '21', 1, NULL, '250'),
(42, 'Suit (3pcs)', '', '21', 1, NULL, '280'),
(43, 'Lady Suit', '', '21', 1, NULL, '200'),
(44, 'Lady Suit (2pcs)', '', '21', 1, NULL, '250'),
(45, 'Baby Suit (2pcs)', '', '21', 1, NULL, '100'),
(46, 'Blanket Single', '', '21', 1, NULL, '400'),
(47, 'Blanket Double', '', '21', 1, NULL, '450'),
(48, 'T-Shirt', '', '21', 1, NULL, '60'),
(49, 'Shirt', '', '21', 1, NULL, '60'),
(50, 'Pant/Trouser', '', '21', 1, NULL, '60'),
(51, ' Coat/Blazer', '', '22', 1, NULL, '70'),
(52, 'Suit (2pcs)', '', '22', 1, NULL, '100'),
(53, 'T-Shirt', '', '22', 1, NULL, '10'),
(54, 'Shirt', '', '22', 1, NULL, '10'),
(55, 'Pant/Trouser', '', '22', 1, NULL, '10'),
(56, 'Jeans', '', '22', 1, NULL, '10'),
(57, 'Panjabi', '', '22', 1, NULL, '10'),
(58, 'Panjabi Heavy', '', '22', 1, NULL, '15'),
(59, 'Pajama', '', '22', 1, NULL, '10'),
(60, 'Lungi', '', '22', 1, NULL, '10'),
(61, 'Safari Top', '', '22', 1, NULL, '30');

-- --------------------------------------------------------

--
-- Table structure for table `overall_search`
--

CREATE TABLE `overall_search` (
  `id` int(11) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `bsub_title` varchar(255) NOT NULL,
  `b_description` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `re_title` varchar(255) NOT NULL,
  `re_category` varchar(255) NOT NULL,
  `re_address` text NOT NULL,
  `re_description` text NOT NULL,
  `ow_phone` varchar(255) NOT NULL,
  `ow_email` varchar(255) NOT NULL,
  `pl_title` varchar(255) NOT NULL,
  `pl_description` text NOT NULL,
  `la_cat_name` varchar(255) NOT NULL,
  `la_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plumber`
--

CREATE TABLE `plumber` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=Active, 0=InActive',
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plumber`
--

INSERT INTO `plumber` (`id`, `title`, `phone`, `email`, `address`, `description`, `image`, `status`, `join_date`) VALUES
(10, 'Toilet Repair', '01745954239', 'masud@gmail.com', 'Dhaka, kutub khali', '<p>Toilets, especially those in commercial properties, are prone to a lot of problems; such as clogging, overflowing, and flushing defects. Any reputable plumber should be able to address these problems during emergencies, but it&rsquo;s also better to set up a proper waste disposal management and a regular preventive maintenance to avoid major repairs. Problematic restrooms in commercial spaces after all, can make a bad impression to customers and clients, that is why you should not wait until the problem worsens because it can also affect your office&rsquo;s daily operations.</p>\r\n', '138333063_172911427-workerman-performs-repair-of-toilet-bowl-to-repair-the-pipe-from-the-toilet.jpg', 1, '2023-08-23'),
(11, 'Drain Cleaning', '01512369874', 'hasan@gmail.com', 'Dhaka, chokbajar', '<p>The drains in the kitchen sinks and bathrooms will eventually accumulate dirt and debris over time no matter how much you keep them clean. That is why you should schedule a regular cleaning and maintenance with a licensed plumber who can effectively remove the dirt and debris to prevent drain clogging. Although there are commercial products that claim they can get rid of the accumulated materials in the drains that cause blockage, they do not work as intended all the time and might even aggravate the problem. If it&rsquo;s an emergency, you should always keep the contact details of a trusted 24 hours plumber who can help you in no time.</p>\r\n', '30778506_368387482_189271010829605_71930709902366483_n.png', 1, '2023-08-23'),
(12, 'Pipe Repair and Replacement', '01354789654', 'jahangir@gmail.com', 'Dhaka, Mouchak', '<p>Pipes that leak can lead to bigger structural problems when not repaired as soon as possible. It could cause cracks in the building&rsquo;s foundation and walls if they burst, making repairs costlier. Consult a plumbing services company that specializes in pipelaying and pipefitting whenever you&rsquo;re having the building repaired or renovated. They are skilled in the task of setting and securing the pipes properly to prevent problems in the future. They will also be able to give you tips when to replace old pipes to prevent damages in the plumbing works.</p>\r\n', '944338156_plumbing-plumbers-water-pipe-repair-2021-09-02-23-23-11-utc-1024x630.webp', 1, '2023-08-23'),
(13, 'Water Heater Services', '01745963584', 'mdanikmulla@gmail.com', 'Dhaka, matuail', '<p>Water heaters pose a lot of problems especially if they are nearing the end of their lifespan (they usually last up to twelve years), that is why you should contact a licensed plumber in Singapore to perform the installation, maintenance, and repair of your water heater. The plumber will also be able to give you tips on which models you should install for a commercial property and how much an apartment building needs to prevent frequent breakdowns and fluctuations in water temperature.</p>\r\n', '769971224_368154244_278299258324903_2187782398419339325_n.png', 1, '2023-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `pl_message`
--

CREATE TABLE `pl_message` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=InActive',
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pl_message`
--

INSERT INTO `pl_message` (`id`, `email`, `subject`, `message`, `service_id`, `phone`, `status`, `join_date`) VALUES
(23, 'admin@gmail.com', 'ada', 'asd', '11', '01731578788', 1, '2023-08-23'),
(24, 'admin@gmail.com', 'sd', 'sd', '10', '01731578788', 1, '2023-08-23'),
(25, 'admin@gmail.com', 'dfd', 'dfdffd', '10', '01731578788', 1, '2023-08-23'),
(26, 'admin@gmail.com', 'w', 'w', '10', '01731578788', 1, '2023-08-23'),
(27, 'admin@gmail.com', 'dd', 'd', '11', '01731578788', 1, '2023-08-23'),
(28, 'admin@gmail.com', 'Pipe lickage', 'asasasa', '11', '01731578788', 1, '2023-08-23'),
(29, 'admin@gmail.com', 'Plumber fitta', 'sdsdsd', '10', '01731578788', 1, '2023-08-28'),
(30, 'shakil@gmail.com', 'dfgd', 'df', '11', '0165454315415', 1, '2023-09-02'),
(31, 'parvej@gmail.com', 'sd', 'sd', '11', '01309989113', 1, '2023-09-04'),
(32, 'parvej@gmail.com', 'sd', 'sd', '10', '01309989113', 1, '2023-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `re_id` int(11) NOT NULL,
  `re_title` varchar(255) NOT NULL,
  `re_room` int(11) NOT NULL,
  `re_bed` int(11) NOT NULL,
  `re_toilet` int(11) NOT NULL,
  `re_category` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Parent',
  `re_address` text NOT NULL,
  `re_description` text DEFAULT NULL,
  `ow_phone` varchar(255) DEFAULT NULL,
  `ow_email` varchar(255) DEFAULT NULL,
  `re_price` text NOT NULL,
  `re_image` text NOT NULL,
  `join_date` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=Active, 0=InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`re_id`, `re_title`, `re_room`, `re_bed`, `re_toilet`, `re_category`, `re_address`, `re_description`, `ow_phone`, `ow_email`, `re_price`, `re_image`, `join_date`, `status`) VALUES
(15, 'Apartment', 5, 4, 4, '13', 'Block B, Section 6, Mirpur, Dhaka', '<p><strong>1397 Sq Ft Nice Apartment For rent In Mirpur-6</strong></p>\r\n\r\n<p><br />\r\nLooking for a nice and cozy place to settle. Check out this 1397 &nbsp;Square Feet flat from our enlisted photos which is lovely as well as affordable. The flat has got an open floor plan, all over tiled flooring and soothing painting which are some of the great features this home is going to offer. There are 3 beds and 3 baths &nbsp;within the abode. When you enter the flat, you will see that there is a space that can be used as the dining and drawing area. All-time utilities, large windows and spot on security is also there. For the comfiest living for your family the flat has beautiful kitchen with durable fittings. The balconies would refill the happy time with your family after a hectic day.&nbsp;</p>\r\n\r\n<p>&nbsp;Hurry up if your requirements match with what we are offering.</p>\r\n', '01759635789', 'karim@gmail.com', '50', '478308178_372398060_822132919376486_7606145380804041558_n.png', '2023-09-04', 1),
(17, 'Apartment', 4, 3, 3, '13', 'Block G, Bashundhara R-A, Dhaka', '<p><strong>A Well-constructed 3100 Sq Ft Flat Is For rent In Bashundhara R-A</strong></p>\r\n\r\n<p>If you are looking for a home for your family in Bashundhara R-A then this 3100 Square Feet apartment is the perfect fit for you. With 4 beds and 5 baths, this home is perfect for a family. When you first enter the apartment, you see a traditional setup and lots of opportunity to play with the interior. With multiple windows all around the home, you wouldn&rsquo;t have any issue with proper sunlight and air in the house. The modern kitchen and a tiled counter to make your kitchen chores easy. With amenities like security backup and a dedicated maintenance staff, your family can lead a healthy and safe life here. You will also have 24/7 electricity backup and access to the terrace.</p>\r\n\r\n<p>The area Bashundhara R-A is perfect for a family to live in as daily essentials like markets, schools, mosques and restaurants are all available in the area. So when living in Bashundhara R-A, you wouldn&rsquo;t need to go anywhere else.</p>\r\n\r\n<p>To make this affordable apartment your home, contact us today!</p>\r\n', '01658974563', 'karim@gmail.com', '35', '709584201_372640606_699741302042493_1270643787797119378_n.png', '2023-09-04', 1),
(18, 'Apartment', 4, 3, 3, '14', 'Manoharpur, Kandirpar, Cumilla', '<p><strong>1013 Sq Ft Apartment For Sale In Manoharpur, Kandirpar</strong></p>\r\n\r\n<p><br />\r\nThis is largely a residential area with a serene environment. Once you drive or step into the area, you will find a wonderful scenery surrounding you. The serene environment with well-arranged lanes and pleasant atmosphere give the area the popularity it holds today, as a great residential zone to live. Once the apartment is done, you will notice that the residential complex features all the modern facilities and the contemporary architectural layout creates a unique site you would love to live in.&nbsp;</p>\r\n\r\n<p>Come and see this apartment Contact us at your earliest to know more about this apartment.</p>\r\n', '01569875621', 'charu@gmail.com', '14', '552071781_372066143_294705096504921_4712005530010725020_n.png', '2023-09-04', 1),
(19, 'Apartment', 4, 3, 2, '14', 'Manoharpur, Kandirpar, Cumilla', '<p><strong>Buy This 1013 Sq Ft rent Available In Kandirpar, Manoharpur</strong></p>\r\n\r\n<p>Looking for a home in Kandirpar? A beautiful apartment of 1013 &nbsp;Square Feet is up for sale for those looking for a comfortable apartment and which will make your everyday life easier. There are 3 beds and 3 baths and nice balconies in the apartment. The kitchen space of the house is well planned. This apartment has adequate arrangements for ventilation and daylight. In the apartment building, you get all the necessary facilities including electricity, water, gas services are also convenient and available here. The locality around the home is very pleasant.&nbsp;</p>\r\n\r\n<p>Book this apartment today before someone else does.</p>\r\n', '01358974569', 'suddiq@gmail.com', '9', '397285557_372145210_3584876461731453_1767153063086219629_n.png', '2023-09-04', 1),
(20, 'Apartment ', 4, 3, 3, '16', 'Barishal Sadar, Barishal', '<p><strong>Dwell In This 1300 Sq Ft Apartment For rent In Barishal Sadar</strong></p>\r\n\r\n<p>End the disparity of wanting a suitable home, to meet your homely demands being in a limited budget. Evaluate this cost efficient 1300 &nbsp;Square Feet flat right in Barishal Sadar, with decent 3 beds and nicely planned 3 baths, aligning with your need of wanting a modest home at the cheapest rate. The well-planned kitchen area is located right next to the spacious drawing-dining space. However, this flat has a nice balcony. The house has the best quality fittings for guaranteeing healthy hygiene.&nbsp;</p>\r\n\r\n<p>Want to know more about this flat? Just give us a call or contact us!</p>\r\n', '01359876541', 'monu@gmil.com', '20', '758854042_372394025_198763749723208_945549414393227160_n.png', '2023-09-04', 1),
(21, 'Apartment', 4, 3, 3, '16', 'Barishal Sadar, Barishal', '<p><strong>1600 Sq Ft Great Apartment For rent In Barishal Sadar, Nutan Bazar</strong></p>\r\n\r\n<p>A satisfying place for living denotes a decent lifestyle. Barishal Sadar is offering to seize the chance of being a gratified owner for this 1600 &nbsp;Square Feet flat. The flat has got amazing 3 beds that give you room privacy and comfort and 3 baths. All the washrooms are completed with quality and durable fixtures. You will have an apt kitchen area to have your desired cookery essentials just beside the dining area.&nbsp;</p>\r\n\r\n<p>Being located in Barishal Sadar, you get a secluded environment and all the daily necessities of life like school, college, shopping mall or restaurant. The area has improved transportation facilities to maintain smooth overall connectivity to other parts of the city.&nbsp;</p>\r\n\r\n<p>Make yourself a happy buyer by calling us about this beautiful apartment right away!</p>\r\n', '01769854789', 'alam@gmail.com', '20', '948156202_372701988_3663272893907194_648146401253069694_n (1).png', '2023-09-04', 1),
(22, 'Apartment', 4, 3, 2, '17', 'Jamal Khan, Chattogram', '<p><strong>A Convenient 1440 Sq Ft Residential rent Is Prepared To Be Sold At Jamal Khan</strong></p>\r\n\r\n<p>A flat is vacant in the lively location of Jamal Khan right now. You can have your weekend guest at home without any doubt as having an ample space makes it enough roomy. Bathrooms are completed with durable fittings to give you a better living experience. The apartment is fit for inhabitants to move in right now. It is located in an area with several schools, shopping places and eateries, so outing will be quite enjoyable. Electricity, gas and water supply is readily available in the flat.&nbsp;</p>\r\n\r\n<p>So we recommend to make up your mind straight away and give us a call to know more about this home.</p>\r\n', '01769874569', 'julfikar@gmail.com', '18', '301954645_371908126_248244061516556_4144826420228076230_n.png', '2023-09-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rent_category`
--

CREATE TABLE `rent_category` (
  `re_cat_id` int(11) NOT NULL,
  `re_cat_name` varchar(255) NOT NULL,
  `rent_cat_desc` text DEFAULT NULL,
  `is_parent` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=Parent',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=InActive',
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent_category`
--

INSERT INTO `rent_category` (`re_cat_id`, `re_cat_name`, `rent_cat_desc`, `is_parent`, `status`, `join_date`) VALUES
(1, 'Flat', '<p>asasa</p>\r\n', '0', 1, '2023-08-22'),
(4, 'sfsdf', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>eproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', '3', 1, '2023-08-22'),
(8, 'dfd', '<p>df</p>\r\n', '6', 1, '2023-08-22'),
(13, 'Dhaka', '', '1', 1, '2023-09-04'),
(14, 'Cumilla', '', '1', 1, '2023-09-04'),
(16, 'Barishal', '', '1', 1, '2023-09-04'),
(17, ' Chattogram', '', '1', 1, '2023-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 2 COMMENT '1=Admin, 2=User',
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=InActive',
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `phone`, `address`, `image`, `role`, `status`, `join_date`) VALUES
(6, 'Faisal Hamid Hemel', 'hemel@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '01731578788', 'Dhaka', '728724745_download.jpg', 2, 1, '2022-10-09'),
(7, 'Tonoy Bari', 'tonoy@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '01731578788', 'Dhaka', NULL, 2, 1, '2022-10-09'),
(12, 'shohan', 'shohan@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '01731578788', 'dhaka', NULL, 2, 1, '2023-05-25'),
(14, 'Shohanur Rahman Shohan', 'shohan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '01731578788', 'Dhaka', '581325553_1685786728891.jpg', 1, 1, '2023-06-15'),
(17, 'Parvej Hossain', 'parvej@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '01309989113', 'Dhaka', '991464464_368241511_6644659755599200_5473795062441202359_n.png', 1, 1, '2023-08-21'),
(18, 'Wahiduzzaman', 'shakil@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '01782815241', 'Dhaka', '130627288_315418788_935897753960120_320158826964784803_n.jpg', 1, 1, '2023-08-21'),
(19, 'Demo', 'demo@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '017658987563', 'Dhaka', NULL, 2, 1, '2023-09-06'),
(20, 'gh', 'gh2qa@as', 'df211ccdd94a63e0bcb9e6ae427a249484a49d60', 'as', 'as', '127403691_373072075_1069625181121653_4102577421654926628_n.png', 2, 1, '2023-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `laund_cat`
--
ALTER TABLE `laund_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `overall_search`
--
ALTER TABLE `overall_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumber`
--
ALTER TABLE `plumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pl_message`
--
ALTER TABLE `pl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `rent_category`
--
ALTER TABLE `rent_category`
  ADD PRIMARY KEY (`re_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `laund_cat`
--
ALTER TABLE `laund_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `overall_search`
--
ALTER TABLE `overall_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plumber`
--
ALTER TABLE `plumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pl_message`
--
ALTER TABLE `pl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rent_category`
--
ALTER TABLE `rent_category`
  MODIFY `re_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
