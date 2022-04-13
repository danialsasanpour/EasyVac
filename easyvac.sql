-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 06:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyvac`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

create database easyvac;
use easyvac;


CREATE TABLE `activities` (
  `activityId` int(3) NOT NULL,
  `cityId` int(11) NOT NULL,
  `activityName` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(20) NOT NULL,
  `durationMinutes` int(11) NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityId`, `cityId`, `activityName`, `description`, `location`, `durationMinutes`, `price`, `discount`, `image`) VALUES
(111, 101, 'Helicopter Tour', 'You can see Toronto from eye level on the street. You can climb the famous CN Tower to see it from above. You can even take a boat ride around the waterfront. But nowhere else can you experience a view of Toronto from the sky like this one, on board a helicopter flying high above the largest city in Canada. It’s the perfect idea for a honeymoon, marriage proposal or any special occasion. Begin this Toronto helicopter tour at the Toronto City Center Airport, located downtown, just minutes west of the shoreline from the CN Tower. The Jewel flight is the showcase flight of downtown Toronto. This tour takes place at 2,000 feet (609 meters), covering nine miles (14 km). Marvel at the sights from this height and the distance that can be traveled without battling with the congested streets and traffic lights below. Discover Toronto by flying over the Canadian National Exhibition grounds in the west to the Don Valley Parkway in the east, and from the Lake Shore in the south up to Bloor Street in the north. This flight includes two framed photographs to commemorate the trip. The Interlude flight features the same highlights as the Jewel with some extra niceties. In addition to the two framed photographs, enjoy wine or champagne, desserts, and souvenirs. The flight travels farther west to Humber Bay and High Park, then north to St. Clair Avenue and east to Casa Loma before heading back downtown — covering 14 miles (23 km).', 'M5V 1A1', 35, 119, 10, '../img/torontoHelicopter.jpg'),
(112, 101, 'Ghost Hunted Tour', 'Pass By: Hockey Hall of Fame, Brookfield Place - Concourse Level 30 Yonge Street, Toronto, Ontario M5E 1X8 Canada. Where our tour begins and our first ghost story of the evening.\nPass By: Lake Ontario, Ontario L1S 3Z3 Canada. See how far inland Lake Ontario\'s waters used to reach in the early days of the city.\nPass By: St. Lawrence Market, 92-95 Front St. E., Toronto, Ontario M5E 1C4 Canada. The St. Lawrence Market is one of the longest-running markets in North America, popular with both locals and tourists. But when stepping through the doors of the Market, it’s difficult to imagine that the area has seen many darker days over the years.\nPass By: St James Anglican Cathedral, 65 Church St (at King St. E.), Toronto, Ontario M5C 2E9 Canada. The cathedral, with construction beginning in 1850 and opening for services on June 19, 1853, was one of the largest buildings in the city at that time. It was designed by Frederick William Cumberland and is a prime example of Gothic Revival architecture....is it haunted?\nPass By: Mackenzie House, 82 Bond St, Toronto, Ontario M5B 1X2 Canada. Our final story of the evening features one of Toronto\'s most well-known haunted buildings.', 'M5B 1X2', 120, 30, 10, '../img/torontoGhost.jpg'),
(113, 101, 'Toronto Island Tour by Ferry', 'Ferry tickets include the return trip for the date selected at the time of purchase. Toronto Island is located in Lake Ontario, a 13-minute ferry ride from downtown Toronto. Boats to the Island leave from the Jack Layton Ferry Terminal at the foot of Bay St. and Queen\'s Quay. The Island is actually a group of 15 islands inter-connected by pathways and bridges. You can walk from one end of the Island to the other. Kids and adults of all ages can find something to do or see on the Island. There are beautiful swimming beaches (including a Clothing Optional Beach on Hanlan\'s Point!), sports facilities, bike, canoe and kayak rentals, a boating marina, large grassy fields for picnics, a theatre, nature paths, EMS and fire station, an amusement park and a charming 150 year-old community of 600 people living year-round in cottage-like homes. You can walk, run or take your bike on the island, walk your dog (on a leash), visit the 200 year old lighthouse or the trout pond or have a coffee or beer at one of the restaurants.', 'M5J 2G4', 300, 25, 0, '../img/torontoFerry.jpg'),
(114, 101, 'Wonderland Amusement Park', 'Since 1981, Canada\'s Wonderland has been the premier destination in Ontario for thrills, family fun, and world-class entertainment. Located in Vaughan, just north of Toronto, the amusement park features more than 200 attractions including 17 roller coasters, two children\'s areas, and Splash Works, the 20-acre water park. If you\'re looking for amazing things to do near Toronto with family or friends, the four-season amusement park has you covered year-round. Don\'t miss the live shows and special events through spring, summer, fall, and winter including Halloween Haunt and the immersive holiday event WinterFest.', 'L6A 1S6', 360, 40, 5, '../img/torontoWonderland.jpg'),
(121, 102, 'Boat Tour', 'Enjoy a guided tour of the Canadian side of Niagara Falls. Experience the mighty waterfalls with stunning views of both the American Falls and the Horseshoe Falls. See the power of Niagara up close, onboard the Hornblower Niagara Cruises boat ride Voyage to the Falls. Hear about the origins of the falls and see the American and Canadian power plants that run on the Niagara River\'s waters. Stop to admire the beautiful Floral Clock, made up of more than 16,000 carpet bedding plants. Learn about the Niagara Glen and the Whirlpool Golf Course, and enjoy fully narrated stops at the Whirlpool Rapids Observation Deck and the Brink of the Falls. Then, ascend the Skylon Tower for panoramic aerial views and descend behind the falls as feel the Horseshoe Falls cascading above you at the Journey Behind the Falls. Cruise past the American Falls and Bridal Veil Falls aboard a Hornblower Niagara cruise boat. From December to April, when the boat tour is non-operational, visit the Niagara Parks Butterfly conservatory and Niagara\'s Fury attraction instead. Step inside a 4D motion theater and discover the ancient story of Niagara Falls in a multi-sensory simulation of the last Ice Age.', 'L2G 3W6', 300, 129, 10, '../img/niagaraTour.jpg'),
(122, 102, 'Zipline to the falls', 'The Zipline to the Falls at Grand View Marketplace takes you on a breathtaking ride into the gorge, towards the base of the Canadian Horseshoe Falls. Glide down 670 metres (2,200 feet), soaring past the American Falls and landing atop the falls observation deck at the base of the Horseshoe Falls. During the winter months, witness the breathtaking beauty of the snow and ice encasing Niagara Falls!. WildPlay Niagara is the official supplier to Niagara Parks, providing the Zipline to the Falls experience to visitors.', 'L2E 6X8', 90, 65, 10, '../img/niagaraZipline.jpg'),
(123, 102, 'Night tour/light show', 'Be whisked away for a night at the falls from any downtown Niagara Falls location and head to the Niagara Parks power station to see how the hydropower is generated. See the Niagara Parks epic sound and light show. Watch this immersive, sensory, and family-friendly show featuring 3D projection, interactive opportunities, and a breathtaking musical score. After the show, treat your senses to a delicious 3-course with a view of the falls at Table Rock House Restaurant. Dine on locally sourced and internationally inspired cuisine before heading to the Illumination Tower. View the multi-colored illuminated water of the falls against the night sky. Get creative and control the lights yourself and get an “I Lit Up Niagara Falls” certificate. Finally, your tour guide will drop you off back at your hotel.', 'L2G 0L0', 240, 139, 10, '../img/niagaraNightTour.jpg'),
(124, 102, 'Aero car ride', 'Soar above Niagara Falls, Canada during this Whirlpool Aero Car experience. Designed by renowned Spanish engineer, Leonardo Torres Quevedo, the Whirlpool Aero Car has been taking passengers across the Niagara Gorge since 1916. Marvel at gorgeous views in this antique cable car that is suspended above the falls and offers spectacular views of the swirling Niagara Whirlpool and the Class 6 whitewater rapids of the Niagara River. Being that Niagara Falls crosses the borders of Canada and the United States, riders of this historic cable car actually only travel between two points on the Canadian shore, however, you will enjoy view points from both sides of the falls.', 'L2E 3E8', 60, 19, 5, '../img/niagaraAero.jpg'),
(131, 103, 'Art Galleries / Biodome', 'Includes transport and enter to Montréal Museum of Fine Arts,   Early to modern international art and the Biodome. Montreal is known for its vibrant arts scene, so these internationally renowned museums at the top of their game are a true feast for the eyes. For a fact, the museum’s a stunning permanent collection of classic and modern visual art is free for everyone under 30, but their temporary exhibitions are also a spectacle to behold. Open this summer, Riopelle: The Call of Northern Landscapes and Indigenous Cultures celebrates the life and work of Quebecois modern artist Jean Paul Riopelle (1923-2002). Featuring never before seen pieces, major works, and restored works, this important collection of intercultural Canadian art is a must-see.', 'H3H 1J5', 180, 50, 0, '../img/montrealGalleries.jpg'),
(132, 103, 'Skidiving', 'For 25 years, skydiving has been our profession and our entire team has more than 175 000 jumps of experience. Remember, you are on the verge of a unique experience that will change your life. You can choose one of 3 different options for your first skydive: Jump at 9000\' - This option will allow you to experience a 9000\' tandem skydive. At 5000\', after only 20 seconds of free fall, your instructor will deploy the parachute and you will be able to enjoy the experience of flying under the canopy. Buy now ! Jump at 13 500\' - Our most popular option for a first skydive, that will allow you to get the full experience of free fall for 60 seconds. You will jump from 13 500\' attached to your instructor. At 5000\', your instructor will deploy the parachute and you will enjoy the flight under your canopy. Jump at 18 000\' - The most extreme skydive experience. You will fly up to a height of 18 000’ with the help of oxygen in the plane. You will experience the thrill of the longest freefall: 1 minute and 20 seconds. You are getting ready to enjoy a unique and intense experience that will last around 3 hours and that will definitely mark your life. From the briefing to the landing, here is how the activity will take place. Here is a description of your forthcoming experience.', 'J0K 2L0', 180, 349, 10, '../img/montrealSkydiving.jpg'),
(133, 103, 'Thermal Nordic Spa', 'Discover a complete relaxation experience at Strøm Nordic Spa, a peaceful haven located right near downtown Montreal. Enjoy a thermal experience at an exceptional Nordic spa that includes the rental of a bathrobe, a towel, and a locker. Summer or winter, rain or shine, reduce stress as you revive your body and mind.  Begin by relaxing your muscles in the whirlpool hot tubs. Eliminate toxins by going to a heated sauna, followed by a dip in an ice-cold bath and a period of deep relaxation.  Practiced for thousands of years, thermotherapy is a wellness ritual based on the external use of water for therapeutic purposes. Benefit from access to the outdoor whirlpools, thermal and Nordic baths, Finnish saunas, eucalyptus steam bath, thermal and Nordic waterfalls, plus indoor and outdoor relaxation areas with fireplaces.', 'H3E 1X9', 240, 65, 0, '../img/montrealSpa.jpg'),
(134, 103, 'Parc Omega & Montebello Lodge', 'Embark on a private day tour to discover more of Montreal than just the main city sights. Enjoy the local insights of your guide as you journey in the comfort a private vehicle for you and your group.  Your day begins with pickup from your accommodation. Enjoy a scenic drive through rural countryside to Omega Park, home to many species of Canadian wildlife. Drive through the park, enjoying opportunities to interact with friendly animals such as elk, deer, wild boars, and many others. Observe from up close wolves, bears, coyotes, foxes, buffalo, and caribou. The journey through the park will be between 2 to 4 hours with many opportunities for stops. Your group might want to enjoy lunch in the park paired with incredible scenic views. Next, travel to the nearby Montebello Lodge, the largest log building in North America. Built in 1930, the lodge is nestled in the heart of the scenic Montebello village and surrounded by nature. In the late afternoon, hop back in the vehicle for your return trip to Montreal. Tour concludes with drop-off at your accommodation between 5:00 PM to 6:00 PM.', 'J0V 1L0', 360, 219, 10, '../img/montrealOmegaParc.jpg'),
(141, 104, 'Whale Tour', 'The waters off Victoria, British Columbia are known as the Salish Sea. Discover its wonders and rich marine environment with this ultimate whale and marine wildlife tour! Board a brand new high speed coastal explorer boat and set sail to look for orcas (also known as killer whales), humpbacks, harbor seals, California sea lions and over 127 species of marine birds!  Take a tour of the west coast aboard a luxurious coastal explorer, with two outside viewing areas and a fully heated cabin. Enjoy complimentary coffee and hot chocolate as you set off on an adventure to learn all about the local marine wildlife and important landmarks. From playful orcas to giant humpbacks, your experience is sure to be memorable. Discover the marine wildlife in the waters off Victoria with the help of marine biologists and learn about efforts to establish Victoria as a world renowned whale watching destination.', 'B8W 1T7', 180, 119, 10, '../img/victoriaWhale.jpg'),
(142, 104, 'Panoramic tour by seaplane', 'Experience exhilarating views over the rugged coastline of Victoria. Guests should meet at the Vancouver Seaplane Terminal, Vancouver Harbour Flight Centre for this half-hour tour. This is the most popular tour from Victoria Harbour for a reason. The perfect introduction to seaplane aviation, enjoy 30 minutes of adrenaline pumping views of downtown Victoria, the Strait of Juan de Fuca and the Olympic Mountains in the distance. A real highlight of the ride is the dramatic water spray during take-off and landing. Remember to bring a camera! Harbour Air and Westcoast Air operate the largest seaplane fleet in the world with over 50 planes. Relax in the company of your expertly trained guide and fly sky high. Experience Victoria the alternative way. At the end of the tour you will be driven back to your hotel by shuttle bus.', 'V8W 1T3', 75, 189, 10, '../img/victoriaPlane.jpg'),
(143, 104, 'Horse Drawn Carriage', 'Discover vibrant sights and hear historic stories on this unique tour of the provincial capital. Board your horse drawn carriage with uniformed guide and driver. Get ready to explore the city in a traditional and leisurely way. Pass through Fisherman\'s Wharf, a colorful community of vibrant floating houses and marine wildlife. Enjoy the moments of tranquility through the beautifully manicured Beacon Hill Park. Regale in stories of past and present while weaving through the historical streets of James Bay. Enjoy honoring the tradition of the heavy horse tours in the city, all in the company of your professional, local guide.', 'V8V 2G2', 90, 129, 10, '../img/victoriaHorse.jpg'),
(144, 104, 'Cheakamus Splash', 'Enjoy a half-day rafting trip that features small splashy rapids, outstanding scenery and lots of laughs. It’s an ideal outdoor activity for families, children, seniors, and anyone looking for a gentle and fun scenic rafting adventure. As you raft down the glacier-fed Cheakamus River between old growth forests, you’ll experience the excitement of gentle rapids and see a variety of birds, wildlife, waterfalls, and the towering peaks of the Coast Mountains. Learn about the intriguing Squamish First Nations history, a key part of the history of the area. There will also be a water fight for the kids. Perfect the art of splashing others and get a chance to cool off with a quick dip in the pure, glacier-fed water. When your river journey ends, you will be taken back to the fully equipped rafting base where you can change back into your own clothes and enjoy the facilities at the resort including a full service restaurant and awesome fully-licensed outdoor patio area. Relax with your family and friends in the beautiful sunshine and comfort of the resort, and check out the photos and videos shot on your trip.', 'V0N 1H0', 240, 129, 20, '../img/victoriaSplash.jpg'),
(151, 105, 'Dog Sled Tour', 'Participate in the traditional sport of dogsledding on a tour of Spray Valley Provincial Park. Take in surrounding views of paths and mountains in a cozy sled pulled by Alaskan Huskies. Free cancellation, cancel up to 24 hours in advance to receive a full refund, Covid-19 precautions, Special health and safety measures apply.  Explore Spray Valley Provincial Park by dogsled on a family-friendly tour. Perfect for any comfort level, experience how to harness and hook up the team of Alaskan, Siberian, and Seppala Husky dogs. Relax in the sled and admire the view of towering mountains and tree-lined pathways. Meet your guide and get introduced to the friendly sled dogs that will pull you through the northern wilderness. Learn about this traditional winter sport, the dogs, and how to properly hook them up to the sled. Stop and enjoy photo stops and lookout points in the park with peaceful rivers and icy snowbanks. Once the loop is complete, reward the dogs with a cookie and warm up with a hot drink and a small snack.', 'T1L 1A8', 120, 219, 10, '../img/banffDog.jpg'),
(152, 105, 'Horse-Drawn Sleigh Ride', 'Start your tour in Banff, where you will meet a member of the riding office, who will check you in for your sleigh ride. Now it\'s time to climb into the sleigh and get cozy with your loved ones under a cozy wool blanket. Hear the tinkling of sleigh bells, as the horses lead you on a journey through Banff\'s mountain meadows. Along the way, listen to stories from your guide and soak in the spectacular views of the valley and surrounding mountains, while keeping your eyes peeled for local wildlife, such as elk and deer. Finish your memorable excursion with a fireside warm-up stop after the ride, where you can toast a marshmallow and enjoy a warm drink back at the stables.', 'T1L 1A8', 105, 139, 10, '../img/banffHorse.jpg'),
(153, 105, 'Mountain lakes and waterfalls', 'Discover soaring mountains, emerald lakes, and breathtaking waterfalls on a full-day tour of the Canadian Rockies. Visit the most spectacular places in Banff and Yoho National Parks to explore the awe-inspiring scenery. Travel through the Canadian Rockies in a comfortable bus, as you learn about the area from your knowledgeable guide. The tour will take you to Lake Louise, Moraine Lake, and Emerald Lake to admire the incredible landscape. Enjoy some free time at each of the lakes to stroll along the shore, or sit by the water and soak it all in. From October to June, when the road to Takakkaw Falls and Moraine Lake is closed due to snow, alternative stops will be made. These might include the Bow Valley Parkway, Johnston Canyon, Marble Canyon, or the Natural Rock Bridge. During the tour you’ll stop for lunch at the historic lodge in Yoho National Park.', 'V0A1G0', 420, 119, 10, '../img/banffMountain.jpg'),
(154, 105, 'Canyon Icewalk', 'Start with pickup from Banff and travel in a modern minibus along the Bow Valley Parkway to the Canyon. On arrival at the Johnston Canyon trailhead, your guide will show you how to put on ice cleats over your winter boots, as well as give you some tips on winter hiking. From here, start the moderate 2.7 kilometer hike with 135 meter elevation to the Upper Falls. Walk along the steel catwalks built into the canyon walls which allows a spectacular view down the canyon walls to the ice and river below. Along the way you\'ll learn the clues to how Johnston Canyon was formed and stop at the Lower Falls, where you\'ll have the option to walk through a natural cave feature for a unique view. At the Upper Falls, enjoy a brief stop on the upper deck with a small refreshment break to enjoy the views. These gigantic pillars of ice are the tour highlight and ice climbers can often be seen scaling the frozen columns. Once you\'ve finished your hot chocolate, hike back down and your guide will transport you back to Banff and drop you at your hotel.', 'T1L 1A9', 240, 79, 5, '../img/banffIcewalk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityId` int(3) NOT NULL,
  `cityName` varchar(20) NOT NULL,
  `image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityId`, `cityName`, `image`) VALUES
(101, 'Toronto', '../img/toronto111.jpg'),
(102, 'Niagara', '../img/niagara111.jpg'),
(103, 'Montreal', '../img/montreal111.jpg'),
(104, 'Victoria', '../img/victoria111.jpeg'),
(105, 'Banff', '../img/banff111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `cardNumber` bigint(20) NOT NULL,
  `holderName` varchar(20) NOT NULL,
  `cvCode` int(3) NOT NULL,
  `paymentId` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`cardNumber`, `holderName`, `cvCode`, `paymentId`) VALUES
(1111222233334444, 'Felipe Triana', 123, 1),
(2222333344445555, 'Abu Sharoukh', 234, 1),
(3333444455556666, 'Danial Sasanpour', 345, 1),
(4444555566667777, 'An Thanh', 456, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'felipe001', 'felipetrip7777'),
(2, 'abu002', 'abutrip888'),
(3, 'danial003', 'danialtrip999'),
(4, 'an004', 'antrip0000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(1) NOT NULL,
  `paymentMethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `paymentMethod`) VALUES
(1, 'Credit Card'),
(2, 'Pay Pal');

-- --------------------------------------------------------

--
-- Table structure for table `paypal`
--

CREATE TABLE `paypal` (
  `paymentId` int(11) NOT NULL,
  `userNameOrEmail` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paypal`
--

INSERT INTO `paypal` (`paymentId`, `userNameOrEmail`, `password`) VALUES
(2, 'abu.sharoukh@gmail.com', 'pwdpaypal2'),
(2, 'an.thanh@gmail.com', 'pwdpaypal4'),
(2, 'danial.sasanpour', 'pwdpaypal3'),
(2, 'felipe.triana@gmail.com', 'pwdpaypal1');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `tripId` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `numberOfPeople` int(11) NOT NULL,
  `numberOfActivities` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`tripId`, `cityId`, `numberOfPeople`, `numberOfActivities`) VALUES
(20220001, 101, 1, 3),
(20220002, 102, 2, 4),
(20220003, 103, 1, 2),
(20220004, 104, 2, 3),
(20220005, 105, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(3) NOT NULL,
  `paymentId` int(11) NOT NULL,
  `tripId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `paymentId`, `tripId`, `userName`, `firstName`, `lastName`, `email`, `userPassword`, `phoneNumber`) VALUES
(1, 1, 20220001, 'felipe001', 'Felipe', 'Triana', 'felipe.triana@gmail.com', 'felipetrip7777', '(438)555 1111'),
(2, 2, 20220003, 'abu002', 'Abu', 'Sharoukh', 'abu.sharoukh@gmail.com', 'abutrip888', '(438)555 2222'),
(3, 2, 20220005, 'danial003', 'danial', 'sasanpour', 'danial.sasanpour@gmail.com', 'danialtrip999', '(438)555 3333'),
(4, 1, 20220002, 'an004', 'An', 'Thanh', 'An.Thanh@gmail.com', 'antrip0000', '(438)555 4444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityId`),
  ADD KEY `cityId` (`cityId`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityId`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`cardNumber`),
  ADD KEY `creditcard_ibfk_1` (`paymentId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `paypal`
--
ALTER TABLE `paypal`
  ADD PRIMARY KEY (`userNameOrEmail`),
  ADD KEY `paypal_ibfk_1` (`paymentId`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tripId`),
  ADD KEY `cityId` (`cityId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `paymentId` (`paymentId`),
  ADD KEY `tripId` (`tripId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `cities` (`cityId`);

--
-- Constraints for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`);

--
-- Constraints for table `paypal`
--
ALTER TABLE `paypal`
  ADD CONSTRAINT `paypal_ibfk_1` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`);

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `cities` (`cityId`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`tripId`) REFERENCES `trip` (`tripId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
