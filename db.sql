SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `jediarticles` (
  `art_id` int(11) NOT NULL,
  `art_title` varchar(256) NOT NULL,
  `art_author` varchar(64) NOT NULL,
  `art_text` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `jediarticles` (`art_id`, `art_title`, `art_author`, `art_text`) VALUES
(1, 'An experience with the Force', 'Rey Skylwalker', 'What do I feel on this island? The Island. Life. Death And Decay That Feeds New Life. Warmth. Cold. Peace. Violence. Balance. An Energy. A Force.'),
(2, 'Do or do not.', 'Yoda', 'You must unlearn what you have learned. Do or do not. There is no try.'),
(3, 'Purple!', 'Mace Windu', 'I love purple sabers. That\'s it. That\'s the article.'),
(4, 'R2D2 and Master Luke', 'C-3PO', 'Hey, whoa, just where do you think you\'re going? Master Luke here is your rightful owner. We\'ll have no more of this Obi-Wan Kenobi jibberish...and don\'t talk to me about your mission, either. You\'re fortunate he doesn\'t blast you into a million pieces right here. What\'s wrong with him now? Oh my...sir, he says there are several creatures approaching from the southeast. Sandpeople! Or worst! Come on, let\'s have a look. Come on. There are two Banthas down there but I don\'t see any...wait a second, they\'re Sandpeople all right. I can see one of them now.'),
(5, 'Han, old buddy', 'Luke Skywalker', 'Echo Three to Echo Seven. Han, old buddy, do you read me? Loud and clear, kid. What\'s up? Well, I finished my circle. I don\'t pick up any life readings. There isn\'t enough life on this ice cube to fill a space cruiser. The sensors are placed. I\'m going back. Right. I\'ll see you shortly. There\'s a meteorite that hit the ground near here. I want to check it out. It won\'t take long.'),
(6, 'Conversations with Luke', 'Darth Sidious', 'Welcome, young Skywalker. I have been expecting you. You no longer need those. Guards, leave us. I\'m looking forward to completing your training. In time you will call me Master. You\'re gravely mistaken. You won\'t convert me as you did my father. Oh, no, my young Jedi. You will find that it is you who are mistaken...about a great many things. His lightsaber. Ah, yes, a Jedi\'s weapon. Much like your father\'s. By now you must know your father can never be turned from the dark side. So will it be with you. You\'re wrong. Soon I\'ll be dead...and you with me.'),
(7, 'Hello, Jabba. Release Han.', 'Luke Skywalker', 'Greetings, Exalted One. Allow me to introduce myself. I am Luke Skywalker, Jedi Knight and friend to Captain Solo. I know that you are powerful, mighty Jabba, and that your anger with Solo must be equally powerful. I seek an audience with Your Greatness to bargain for Solo\'s life. With your wisdom, I\'m sure that we can work out an arrangement which will be mutually beneficial and enable us to avoid any unpleasant confrontation. As a token of my goodwill, I present to you a gift: these two droids. Both are hardworking and will serve you well.'),
(8, 'Conversations', 'Observer', 'We don’t serve their kind here! What? Your droids. They’ll have to wait outside. We don’t want them here. Listen, why don’t you wait out by the speeder. We don’t want any trouble. I heartily agree with you sir. Negola dewaghi wooldugger?!? He doesn’t like you. I’m sorry. I don’t like you either You just watch yourself. We’re wanted men. I have the death sentence in twelve systems. I’ll be careful than. You’ll be dead. This little one isn’t worth the effort. Come let me buy you something…'),
(9, 'Conversations with a storm trooper', 'Rey Skywalker', 'You Will Remove These Restraints And Leave This Cell With The Door Open.');


ALTER TABLE `jediarticles`
  ADD PRIMARY KEY (`art_id`);


ALTER TABLE `jediarticles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;