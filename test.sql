-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 06:29 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb1_product`
--

CREATE TABLE `tb1_product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_product`
--

INSERT INTO `tb1_product` (`id`, `name`, `image`, `price`, `details`) VALUES
(1, 'GOD OF WAR', 'StoreofGames/sogimg/GOW5.jpg', 3999, '\r\nDetails:\r\nDeveloper	\r\nSanta Monica Studio\r\nPublisher	\r\nSony\r\nPlatform	\r\nPlayStation 4\r\nGenre	\r\nAction and Adventure\r\nRelease Date	\r\n04/20/2018\r\nEdition	Standard Edition \r\nSoftware Format	Physical\r\nGame Franchise	\r\nGod of War\r\nMultiplayer	\r\nNo\r\nStarter Pack	\r\nNo\r\nNumber Of Users/Players	\r\n1\r\nRecommended Minimum Age\r\n17 years\r\nColor Category	\r\nMulti\r\nModel Number	\r\nE3 SKU\r\nESRB Descriptors	\r\nBlood and gore|Intense violence|Strong language\r\nProduct Name	\r\nGod of War\r\nESRB Rating	\r\nM (Mature 17+)\r\nBrand	\r\nSony\r\nCompatible Platform(s)	\r\nPlayStation 4'),
(2, 'DRAGON BALL FIGHTER Z', 'StoreofGames/sogimg/dbfz.jpg', 4299, 'Best in 12 univereses collide for the ultimate survival of their Universe.'),
(3, 'MONSTER HUNTER WORLD', 'StoreofGames/sogimg/mhw.jpg', 3999, 'Welcome to the Jungle. It is a world full of dreaded monsters. Are you the challenger who will beat them all.'),
(4, 'FARCRY 5', 'StoreofGames/sogimg/fc5.png', 3499, 'War of Blood has returned. The epic saga of fight between Father and Son. Who will beat the devil\'s curse.'),
(5, 'FIFA 18', 'StoreofGames/sogimg/f18r.jpg', 3499, 'Fifa 18 is the latest installment of FIFA series. It is developed under EA Sports, by Frostbite studios.This version includes special edition Cristiano Ronaldo.'),
(6, 'GRAND THEFT AUTO V', 'StoreofGames/sogimg/gtav.jpg', 2499, 'Rockstar Games\' GTA V is the 5th main installment of GTA series. It includes 3 playble character in the story mode and many cutomisable characters in online mode. '),
(7, 'MARVEL\'S SPIDER-MAN', 'StoreofGames/sogimg/sm.jpg', 3999, 'A Marvel game developed by Insomaniac studios Spider-man is exclusively launched for PS4. It\'s stunning visuals and breath-taking gameplay will surely win the players hearts.'),
(8, 'SHADOW OF COLOSSUS', 'StoreofGames/sogimg/soc.jpg', 2499, 'This game is a remaster of the classic game in 2005. It is a single player game that is basically a hack and slash game.'),
(9, 'PLAYSTATION PLUS CARD - 3 MONTHS  ', 'StoreofGames/sogimg/3P.jpg', 999, 'This is a 3 months subscription of Playstaion Plus. It will allow the customer to get monthly free games for three months. Playstaion 3 or 4 is atleast required.'),
(10, 'PLAYSTATION PLUS CARD - 12 MONTHS', 'StoreofGames/sogimg/12p.jpg', 3999, 'This is a 3 months subscription of Playstaion Plus. It will allow the customer to get monthly free games for three months. Playstaion 3 or 4 is atleast required.'),
(11, 'PLAYSTION NOW GIFT CARD', 'StoreofGames/sogimg/now.jpg', 1299, 'This is Playstation Now gift card that will allow the customer to use these credits when they do not have real money to spend. Playstion is required for this service.'),
(12, 'DRAGON BALL FIGHTER Z', 'StoreofGames/sogimg/xdbfz.jpg', 4299, 'This is the newest Dragon ball game developed by Namco Bandai. The best in the 12 universes collide for the ultimate survival of their universe. Will our heroes win?'),
(13, 'MONSTER HUNTER WORLD', 'StoreofGames/sogimg/xmhw.jpg', 3999, 'This the newest Monster hunter and the only Monster hunter to come on X Box One. It is an open world RPG developed by Capcom. In the world of dreaded monsters will you be able to win. '),
(14, 'SEA OF THEVIES', 'StoreofGames/sogimg/setx.jpg', 3999, 'This is an open world and massively multiplayer game released exclusively for X Box One. It is a pirate game with spectacular animations. Welcome to world of Sea of Theives. '),
(15, 'PLAYERUNKNOWN\'S BATTLEGROUNDS', 'StoreofGames/sogimg/pubg.jpg', 999, 'This is massively multiplayer survival game lanched fist on Steam. But now witness the high resolution gaming performance only on X Box One. Winner Winner Chicken Dinner.'),
(16, 'TEKKEN 7', 'StoreofGames/sogimg/t7x.jpg', 3599, 'Tekken 7 is the 7th main installment of the Tekken saga developed by Bandai Namco. Best fighters from all world have once again gathered to join the Iron Fist Tournament. Who will beat the devil\'s curse to save the world.'),
(17, 'FIFA 18', 'StoreofGames/sogimg/xf18.jpg', 3499, 'FIFA 18 is the latest installment of FIFA series developed under EA Sports. Here the player can choose career mode as a single customisable character. He can play against any other player on the multiplayer. '),
(18, 'STATE OF DECAY', 'StoreofGames/sogimg/sod.jpg', 3999, 'State of Decay is a survival CO-OP game that requires upto 4 players. It is based on a zombie infested world where you must kill, run, steal and hide to live.'),
(19, 'X BOX LIVE - 3 MONTHS', 'StoreofGames/sogimg/3m.jpg', 999, 'This subscription allows the user to connect to multiplayer services, get free games and huge discounts on games and other contents for three months.'),
(20, 'X BOX LIVE CARD - 12 MONTHS', 'StoreofGames/sogimg/12m.jpg', 3999, 'This subscription allows the user to connect to multiplayer services, get free games and huge discounts on games and other contents for 12 months.'),
(21, 'X BOX GAME PASS - 3 MONTHS', 'StoreofGames/sogimg/gp.jpg', 1699, 'This subscription allows the user to get free games and huge discounts on games and other contents for six months.'),
(22, 'KIRBY STAR ALLIES', 'StoreofGames/sogimg/KSA.jpg', 3999, 'Kirby Star Allies is an upcoming platform game that is released exclusively for Nintendo Switch. Help Kirby and it\'s allies to save their world against the great evil.'),
(23, 'DRAGON BALL XENOVERSE 2', 'StoreofGames/sogimg/dbx2.jpg', 3499, 'This is a game developed under Namco Bandai. The demon princess has returned with vengeance  to defeat our heroes but only you can stop them.'),
(24, 'SUPER MARIO ODYSSEY', 'StoreofGames/sogimg/SMO.jpg', 3999, 'Mario returns with its adventures on switch. This time Mario must save the princess from the evil Dragon from upcoming challenges. '),
(25, 'DARK SOULS - REMASTERED', 'StoreofGames/sogimg/dsr.jpg', 3499, 'Dark Souls is the action-rpg that involves our hero defeating the evil monster that have taken over the world. This is the remaster of the original hack and slash game.'),
(26, 'DOOM', 'StoreofGames/sogimg/doom.jpg', 2999, 'Doom is developed by Bethesda studios. It is the 4 installment of the First-Person Shooter game.'),
(27, 'CRASH BANDIKOOT N SANE TRIOLOGY', 'StoreofGames/sogimg/cbnst.jpg', 2599, 'Bandikoot returns with it\'s adventures. This pack is a combination of three games. Bandikoot must do whatever it takes to win the Crash championship'),
(28, 'MARIO KART 8 DELUXE', 'StoreofGames/sogimg/mc8d.jpg', 2999, 'Mario Kart 8 is racing game which is the 8th major installment of Mario Kart series. It is exclusively launched for Nintendo devices. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb1_product`
--
ALTER TABLE `tb1_product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
