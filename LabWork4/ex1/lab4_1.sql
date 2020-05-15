-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 29 2020 г., 18:49
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab4_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` int(2) NOT NULL,
  `p_heading` varchar(255) NOT NULL,
  `p_content` text NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `p_heading`, `p_content`, `p_date`) VALUES
(1, 'The battery in the iPhone SE: stunted or cool?', 'More than a year ago, I wrote about the second-generation iPhone SE successor:\r\nThe main thing from that text is as follows: the second-generation iPhone SE will be almost a complete copy of the iPhone 8. From this, it could be concluded that the battery capacity will not change. And this upset me: the iPhone 8 is not the most resilient smartphone in the world. And after the release of the iPhone 11 Pro / ProMax, so in General, these 1821 matches of conditional battery capacity sound like a mockery!\r\nFor me, these numbers were not just numbers. My second smartphone in the days when there is no other device on the market, last summer was the Google Pixel 3.', '2020-04-01'),
(2, 'Halide developers told what\'s cool about the iPhone SE portrait mode', 'The Halide app is one of the most famous third-party soft cameras on iOS. Its developers are studying the source code and all available APIs distributed by Apple.\r\n\r\nThe new iPhone SE is the first smartphone that relies only on artificial intelligence to blur the background when taking portraits.', '2020-04-02'),
(3, 'Googled has released the Pixel Buds 2 TWS headphones for sale. What do they say about them?', 'Without any fuss, Google released the Pixel Buds 2-TWS headphones, shown more than six months ago along with the fourth \"Pixel\". In General there were a few clarifications after my last text:\r\n\r\nGoogle does not provide any other characteristics other than size. And it is, in fact, correct: you will not be given any idea about the sound of these technical characteristics. Generally. Frequency? Pfft! Many smartphones are not initially able to transmit audio at frequencies higher than 15-17 kHz in AAC or aptX.', '2020-04-03'),
(4, 'We understand how to choose a good computer chair', 'As the statistics of search queries show, people began to buy furniture and various items for home comfort more often. Here everything is clear: you will have to stay at home for a long time.\r\n\r\nMany people switched to remote control, although they used to do nothing at home but check their email on their laptop and respond to very important messages in chat rooms. Life has changed a little, let\'s be honest. You need to adapt to changes. We don\'t know how long we\'ll have to forget about the office. Well, if it\'s all over by the fall, but who knows.', '2020-04-04'),
(5, 'All things interesting for week # 41: Travis Scott in Fortnite and the transfer of Marvel movies', 'Collapse of the month, or maybe the year: Travis Scott performed in the game Fortnite\r\nAnd set a new record for the number of simultaneous players — 12.3 million. And the performance lasted only 10 minutes, but with effects and all this! Immediately after the performance, a merch was announced, which looks not so bad, fans of the game will definitely appreciate.\r\nMarvel has announced new release dates for movies. I don\'t think you need to explain the reason for the transfer. Here is a small sign with updated dates, this year we are waiting for only one movie.', '2020-04-05'),
(6, 'Looking for an alternative to the iPhone SE on Android', 'I have nothing against phones with very large screens, but I prefer not the largest devices myself. I don\'t watch a lot of videos on my phone, and for reading, texting, processing photos and other necessary things, the display is enough as in the iPhone X, XS or 11 Pro.\r\n\r\nApple recently revealed the iPhone SE — essentially a redesigned iPhone 8 with a 4.7-inch screen. By modern standards, the display is small, especially since part of the space is consumed by the physical key under the screen. But it has a great filling, the most powerful Apple processor, as in the top iPhone 11 Pro.', '2020-04-06'),
(7, 'What to listen to: AWOLNATION, The Used, IC3PEAK, Moth and 11 more new albums', 'Another week is coming to an end. I decided to change the format by putting more new albums in the selection, but I removed the major reviews of three or four of the most important records. Your reaction to these texts was not there, and their preparation took a lot of time. Now a few suggestions and the album itself. Let\'s go!\r\nAWOLNATION — Angel Miners & the Lightning Riders\r\nA band that fell victim to their own song Sail. With each album, fans of this track try to find something similar in energy, but it doesn\'t work out. Look, she\'s cool even after more than nine years:', '2020-04-07'),
(8, 'Nine books about man in the technological world of the present and future', '«Self-isolation». How much is in this word… Hatred, fatigue, insanity, and other negative moments. To save the brain, various things are used: live broadcasts on Instagram, an infinite number of tweets, cooking, travel nostalgia in photo albums and social networks, TV series, music, and home sports (I fell on the floor to do push-UPS, and woke up there, but eight hours later because of a stiff back from an uncomfortable position for sleeping). One of the ways to distract yourself, in addition to the above, can be books. I decided to put together a selection of books that tell the story of man through the spectrum of technology. Each of the books deals in one way or another with topics that we tell you about every day.', '2020-04-08'),
(9, 'How Apple\'s hardware repair service center survives', 'Specialists are always needed\r\nService is not only spare parts and components, but also people, specialists in repairing equipment. The staff is all right, no one is being fired, no one is being cut, and the salaries are the same. All masters can take up the repair of an iPhone, MacBook or iPad, in times of crisis it is difficult to be a specialist only on phones or tablets.\r\nDevices are disinfected during repairs, all employees are masked — safety and health care above all.', '2020-04-09'),
(10, 'What to choose: iPhone XR or the new iPhone SE?', 'After Apple announced the characteristics and prices of the new iPhone SE, comments immediately flew in the spirit of \"why do you need a SE, when you can buy an iPhone XR for the same money\". This is a good question, let\'s think about it.\r\nWhy is it so expensive\r\nSales of the iPhone XR are breaking records, it is never the cheapest phone, yet it sells better than any other smartphone in the world.\r\nThe smartphone was one and a half years old in April 2020, but it remains relevant, loved and in demand even after the release of the more technological iPhone 11.', '2020-04-10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
