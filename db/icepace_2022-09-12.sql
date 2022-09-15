# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.38)
# Database: icepace
# Generation Time: 2022-09-15 08:38:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
                         `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                         `username` varchar(50) DEFAULT NULL,
                         `hashed_pass` varchar(500) DEFAULT NULL,
                         `bio` varchar(5000) DEFAULT NULL,
                         `avatar` varchar(500) DEFAULT NULL,
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `hashed_pass`, `bio`, `avatar`)
VALUES
    (1,'rayna_like_china','$2y$10$ZhvZ6qlkLuexCgA5ANlb.eCSlbHgzPOCg94oa7ul3Ir2crzBOcgE2','hi i\'m rayna, i\'m just a small town girl who happened to win the mentor of the year award at the 2022 Sparkie awards &#128563;\n\nmy favourite things to do are painting my nails, complaining, drinking pepsi max and listening to music. my least favourite things are emptying the dishwasher, walking up steps, having good posture and being quiet.\n\ni like to teach people how to code. the best part is when they don\'t understand something, then i explain it to them and then they say they understand it now','placeholder.jpg'),
	(2,'timyop','$2y$10$fDynnjdU6WRhrVmDUVNg4O8ze3b/Rds.djtX9D.a0ZqY6H1G0iqGO','hey bro, i am Tom and this is my icepace!\n\nhave you heard of the movie Surf\'s up? it\'s this animated mockumentary about surfing penguins and the main character is called Cody Maverick and everything is sooo cool bro &#129305; i like to think i\'m a little bit like Cody. but then i think... maybe that\'s true of all of us, haha &#128524;\n\n\none thing about me is that i\'m a full-on coder. like if you ask me to sit down right now and write you a website i will literally write a website. my favourite is definitely JavaScript and React, but i can write some el php if you ask me nicely haha &#128541;','placeholder.jpg'),
	(3,'ash_like_flash','$2y$10$CM8MuennG0AFZ5S58Py4ReP334apI2pVn9GLKx8AapqDUJTu5AupO','A drinker of too much coffee, enthusiastic food cooker, player of mediocre guitar, Monday morning hater, listener of music, awful bio writer, teacher of software and fanatical F1 watcher.\nSelf confessed broccoli enjoyer.\nIf I eat any more Pizza, I will become a Pizza.','placeholder.jpg'),
	(4,'charlie_like_barley','$2y$10$No1ET6aUCVsC1Vh2ZwhxDexrWXOcWxLkidGKmmwXMVKeZXZibiIpO','Yoooo welcome to my icepace!\n\nMy name is Charlie and I like to do coding and teaching. But more importantly than that, I like Mario Kart.\n\nLet\'s talk more about coding! My favourite part of coding is the backend of the frontend, so like React for example. Response Cuthbert pull request Well volunteered Gabriel fave food => pizza rubber ducking Black Widow request DiKnow. Raurie Herbert Dr Jean Grey Product Owner object nodes Garry. Git fetch Barry SWGOL null git fetch Product Owner hard refresh dog => Luigi Norbert defer spicy standups. AOB DiKnow Gabriel async rem git stash pop bounce by the ounce spicy standups dog => Luigi first child.\n\nLets find out if these inputs are sanitised: <img src=\"https://media1.giphy.com/media/Vuw9m5wXviFIQ/200w.gif\" />\n','placeholder.jpg'),
	(5,'George1975','$2y$10$P5yWbvSdelkpWj4Z7hjVQu19q24b10TZKtVIDnrc0Kye55tpp4qaq','Hey there, I\'m George. Welcome to my Icepace.\n\nI used to work in hospitality and I was very good at it, but now I am embarking on a new career as a software developer, and loving it so far! I quite like JavaScript and React. The best part of coding is that throughout the day I can listen to a lot of music.\n\nSpeaking of music, one of my favourite things is music. My top 10 albums of all time are Dark Side of the Moon, My Beautiful Dark Twisted Fantasy, Random Access Memories, Lemonade, and Blonde. Last time I moved house I had to hire an extra lorry just for my vinyls. I am always taking recommendations and enriching my Spotify library which consists of hundreds of thousands of albums. I am ranked number 7 on the last.fm leaderboard.\n\nI also love pokemon and I have a collection of pokemon socks which always make me feel better on a hard day of coding!\n','placeholder.jpg'),
	(6,'nicooooooo','$2y$10$DUCDd3dpdvzQliDUVmT6SORISfpgse4MGiRjDHV6kcjbKazvZ5Mjq','Hi, I\'m Nico and this is my icepace. Or if you prefer French, bienvenue dans mon espace glace &#128526;\n\nI have been learning software development and my favourite part has been... hold on, I received a notification on my Apple Watch. Hold on, I need to open iMessage on my iPhone. Hold on, I need to AirDrop my MeMoji to my MacBook. Hold on, I need to use FaceID to unlock Apple Pay on my iPad Mini. Omg, it\'s a picture of my cute dog Bailey &#128525;... what was I saying?\n\nAnyway, I\'m really liking software development so far!','placeholder.jpg'),
	(7,'joshbennet','$2y$10$4DfLairDANRFqQS/Jl8JK.PDncpWXXvwFRFivTlOG.n2GRu8P08Ya','Hey I\'m Josh, welcome to my Icepace &#9924;&#65039;\n\nI\'ve been interested in tech for a long time and I spend a lot of my free time learning about the latest most interesting frameworks and languages, but I only recently decided to make the jump to tech as a career. Coding is super interesting and it\'s going well so far!\n\nI like to dedicate many hours every day to developing my DnD campaign. My main elf is a level 18 mage who has many other skills such as level 45 archery, level 33 accounting and level 89 dentistry. He has a 4 bed 3 bath house with underfloor heating. All these assets make him very good at winning DnD games (the rules of the game are very complicated, you wouldn\'t understand).','placeholder.jpg'),
	(8,'jo','$2y$10$QUcbg3rwSbwAFCXTI7UzIOpDYrv4.uc1Onte8fhcREEb4v6nHUsK.','hey I\'m Jo and I\'m on a coding journey &#128519;\n\nI\'ve done many different things in the past, including working at a hospital and studying english literature, but I decided to try coding as my next big career move, and I\'m enjoying it so far!\n\nlearning to code is pretty stressful but it\'s no match for my stress threshold because I thrive under pressure &#128526; another one of my abilities is that i am very good at recognising the sound of pringles','placeholder.jpg'),
	(9,'the_mike_oram','$2y$10$77wcV78laJexqz.AECNCA.cxQbFW.NnZwqeiFheToQSo68F4quvta','Hello, I am the one and only Mike Oram, student at iO Academy.\n\nI have many interests including coding, philosophy, politics, Magic the Gathering, Dungeons and Dragons, spicy Reddit discussions, gardening, burritos, coding, philosophy, politics, Magic the Gathering, Dungeons and Dragons, spicy Reddit discussions, gardening, burritos, and many more. I care a lot about the environment and about making the world a better place for everyone.\n\nWhen it comes to coding, I\'m more of a backend guy, but I have been known to dedicate many hours to CSS styling for the greater benefit of the team. I look forward to coding more code in the near future, hopefully less CSS!\n\n','placeholder.jpg'),
	(10,'virtualslide','$2y$10$VhGBVg9ifWJIpfvquFhIy.zzwQIj0NLH05pmg8EBO9Ft0rG7Tf8pG','I am Harry, previous mechanical engineer, now software developer &#128187; \n\nMy favourite hobby is climbing. I would climb every day if I could! Sometimes I go to the Academy five minutes early just so I can climb into the window instead of walking in from the normal entrance. Luckily Rayna hasn\'t caught me so far!\n\nI love making pictures with DALL-E and I\'ve become quite good at giving it just the right instructions to get exactly the images I want. For example, my avatar photo is one I generated from DALL-E using the prompt: \"penguin doing rock climbing with a helmet photorealistic\". Isn\'t it cool!','placeholder.jpg');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
