# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.47-0ubuntu0.14.04.1-log)
# Database: adlister_db
# Generation Time: 2016-10-06 14:44:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `ad_views` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;

INSERT INTO `ads` (`id`, `user_id`, `name`, `description`, `price`, `image_url`, `date_created`, `ad_views`)
VALUES
	(1,1,'Bacon Bandages','Bacon Bandages will treat your minor cuts, scrapes and scratches with the incredible healing power of meat. (At least that\'s what the Bacon Council tells us.) There are 15 bandages that look so much like tiny slabs of bacon you\'ll have to hold yourself back from ripping them off and eating them. No really, please don\'t eat them, that\'s unhygienic and gross. ','6.99','/img/uploads/bacon_bandage.png','5/10/2016',10),
	(2,2,'Pet Sweep','The Pet Sweep animal powered debris removal system fro Fido or Muffin or the Pet Petter, the easiest way to spend quality time with your pet without spending time with your pet. Boxes are all, naturally, empty. ','5.95','/img/uploads/pet_sweep.png','9/23/2016',15),
	(3,3,'Keyboard Waffle Iron','Enjoy a breakfast that\'s Control-Alt-Delicious with this geek-chic waffle iron by Chris Dimino. Made from die-cast aluminum and featuring bake-lite heat resistant handles, this design can be put on the grill or even gas or electric stovetops, letting you enjoy gourmet Belgian-style waffles whether you\'re camping, tailgating, or simply brunching at home--a perfect way to encourage playing with your food, no matter what your typing speed.','69.99','/img/uploads/keyboard_waffle.png','7/15/2016',9),
	(4,4,'3 in 1 Breakfast Maker','Elite Cuisine 3-in-1 Breakfast Station 4-Cup Coffee Maker\n3 in 1 toaster oven, coffee maker and griddle\n4-Cup coffee maker\n1-Slice toaster oven\n6-Inch griddle\n500-Watt of power','35.99','/img/uploads/breakfast-maker.png','8/2/2016',14),
	(5,5,'The Ab Hancer','The Ab Hancer will be your choice of six-pack defining tools this summer.\nIt is light weight, is easy to hide under clothing, and dramatically enhances your abs!','24.95','/img/uploads/ab-hancer.png','7/26/2016',22),
	(6,6,'Bacon Toothpaste','Great gag/novelty gift.\nEach tube contains 2.5 oz (70 g) of potent BACON paste.','5.00','/img/uploads/bacon-flavored-toothpaste.png','6/5/2016',34),
	(7,6,'The Amazing Banana Slicer','Faster, safer than using a knife\nGreat for cereal\nPlastic, dishwasher safe\nSlice your banana with one quick motion\nKids love slicing their own bananas\n“What can I say about the 571B Banana Slicer that hasn’t already been said about the\nwheel, penicillin, or the iPhone…. this is one of the greatest inventions of all time…”','9.99','/img/uploads/banana-slicer.png','10/3/2016',4),
	(8,5,'Baseball Bat Pepper Grinder','Jr. size ideal for picnics, camping or for the assistant grill master\nActual size is 19 inches long\nPerfect for BBQ’s\nsuperior stainless steel pepper-grinding mechanism\nDesigned and manufactured in England','14.50','/img/uploads/baseball-bat-pepper-grinder.png','9/9/2016',19),
	(9,4,'Cupcake Flavored Floss','Make flossing fun! What a novel(ty) idea! – Makes a great, wacky gift!\nTurn a boring nightly routine into a party in your mouth with Cupcake Floss!\nBe careful though, the delicious frosting flavor might turn you into a flossaholic!\nEach 2 1/2-inches tall plastic dispenser contains 27.3 yards (982.8 inches) of waxed floss.','3.75','/img/uploads/cupcake-floww.png','5/29/2016',13),
	(10,3,'The Defibrillator Toaster','It’s about time someone came up with a fresh take on the vital machine\nthat warms our bread every morning, the Defibrillator Toaster.','19.99','/img/uploads/toaster.png','6/27/2016',46),
	(11,2,'The Disco Helmet','Vintage-style 3/4 Open Face Helmet\nLiner with detail stitching and contrasting ventilated panels in the top\nEmbossed goggle strap\nVintage style chrome strip\nHelmets are non-DOT approved and meant for novelty purposes only','75.00','/img/uploads/disco-ball-helmet.png','3/1/2016',27),
	(12,1,'Emergency Moustache Kit','Emergency moustaches to instantly become a man\nStyles include traditional gent, cowboy, rusty brush, italian plumber, oil baron and abra-kadabra\nIndividually sealed for extra freshness\nStash your tash for emergency situations\nSet of 6 self adhesive mustaches in assorted styles','8.15','/img/uploads/moustaches.png','3/3/2016',31),
	(13,1,'Escape Preventing Dog Harness','Patented harness that prevents puppies or small adult dogs from escaping fenced-in areas.\nThe device slips on a dog like a common harness, but its integrated rigid 10 1/2″-long cross-bar spans\nwell beyond the width of the pet, preventing it from slipping out between fence railings.','29.95','/img/uploads/dog-harness.png','3/9/2016',44),
	(14,2,'The Facebook Shower Curtain','Bring your profile to life in the bathroom\nTransparent section so you can create a profile\nPerfect for the social networker in your life\nWater resistant\nMeasures 70\" by 70\"','13.99','/img/uploads/facebook-shower-curtain.png','3/13/2016',7),
	(15,3,'Flowbee Haircut Machine','Flowbee Haircutting System Money-saver for the entire family and even works on pets!\nOver a million satisfied customers have used it for years.\nProvides a precise haircut every time.\nFlowbee System attaches to a vacuum cleaner (not included, needs to\nbe 3 hp or 8 amps to pull hair through the cutting blades.)','124.99','/img/uploads/flowbee.png','4/2/2016',13),
	(16,4,'Glow In The Dark Toilet Paper','Toilet paper roll has a glow-in-the-dark coating.\nNovelty item, not intended for “actual” use.\nIf used your rear may glow.','8.56','/img/uploads/glowing-toilet-paper.png','4/4/2016',21),
	(17,5,'iPhone Case With Built-In Cup Holder','The Uppercup aims to be one of the first cup holders for the iPhone.\nA creation from Natwerk it is called the Uppercup.\nIt is an iPhone case with a built-in cup holder to hold your beverage.','11.00','/img/uploads/iphone-cupholder.png','4/8/2016',17),
	(18,6,'iPhone Giant Horn Speaker','The non-powered horn is held up by a hand-carved\nnatural wood stand, and is handmade out of ceramic.\nThe docking area at the top of the horn is compatible with the original\niPhone, iPhone 3G, iPhone 3GS, iPhone 4, iPhone 4S, and iPod touch.','22.95','/img/uploads/horn-speaker.png','5/5/2016',26),
	(19,6,'The Lobster iPhone Case','The red Lobster Mobile Telephone Case is a modern appropriation of Salvador\nDali’s Lobster Telephone (Aphrodisiac telephone), created in 1938.','20.00','/img/uploads/lobster-case.png','5/10/2016',32),
	(20,5,'The Noodle Cooling Fan with Chopsticks','Frantic blowing is both undignified and limited in its effectiveness.\nThe Automated Noddle Cooler is the answer.\nA compact fan, it fits tidily towards the holding end of one of a pair of chopsticks.','10.50','/img/uploads/noodle-cooling-fan.png','5/25/2016',11),
	(21,4,'Giant Nose Shower Soap Dispenser','The Nose Shower Gel Dispenser is a wacky, gross addition to any bathroom or shower stall.','14.99','/img/uploads/nose-soap-dispenser.png','6/6/2016',49),
	(22,3,'Pancake Maker Conveyor Belt','The best part about this machine is that it’s all automated.\nPour in the fat free batter and hit the button and out come the hotcakes.\nIf you had one of these and were selling pancakes, they’d sell like hotcakes.\nThe Chefstack Pancake Maker can be yours if you have $3500 lying around.','159.95','/img/uploads/pancake-conveyor-belt.png','6/16/2016',30),
	(23,2,'Picnic Pants','Innovative pants designed by Italian company transform into a\nuseful picnic table when a person sits in a cross-legged position.','44.99','/img/uploads/picnic-pants.png','6/26/2016',16),
	(24,1,'Shoe Umbrella Kit','Don’t let the weather ruin your shoes again.\nThis Umbrella Shoe Saver invention will extend the life of your\nexpensive footwear by attaching little umbrellas to your feet.','8.97','/img/uploads/shoe-umbrellas.png','7/7/2016',3),
	(25,1,'Twirling Spaghetti Fork','Twirling is a better way to eat spaghetti and the motorized fork\nautomatically winds up the pasta on the end of the fork.','11.97','/img/uploads/spaghetti-fork.png','7/17/2016',25),
	(26,2,'The Wizard of Oz Bookmark','Clever and striking. The Wicked Witch’s poor sister’s legs stick out from the\nbook, perfectly marking your page. That’s right: your book is Dorothy’s house.','10.00','/img/uploads/wizard-bookmark.png','7/27/2016',19),
	(27,3,'Testamints','Testamints Spearmint Gum is an easy way to share your faith with a simple piece of gum.\nEach package of gum contains 12 pieces of gum, and has a verse from God’s Word printed on the back.','17.99','/img/uploads/testamints.png','8/8/2016',38);

/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
