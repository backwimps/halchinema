-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 11 朁E27 日 14:33
-- サーバのバージョン： 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hal_cinema`
--
CREATE DATABASE IF NOT EXISTS `hal_cinema` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hal_cinema`;

-- --------------------------------------------------------

--
-- テーブルの構造 `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(6) NOT NULL,
  `password` varchar(64) NOT NULL,
  `authority` tinyint(1) NOT NULL,
  `delete_flg` tinyint(1) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `admins`
--

TRUNCATE TABLE `admins`;
--
-- テーブルのデータのダンプ `admins`
--

INSERT INTO `admins` (`id`, `password`, `authority`, `delete_flg`, `name`) VALUES
(1, 'komatsukaito', 0, 0, '小松海人'),
(2, 'takamuratakuya', 0, 0, '高村拓也'),
(3, 'ichigeshinji', 0, 0, '市毛慎二'),
(4, 'usuisyuhei', 0, 0, '薄井修平'),
(5, 'ichijoyuki', 0, 0, '一条有輝'),
(6, 'takezawashodai', 0, 0, '竹澤翔大');

-- --------------------------------------------------------

--
-- テーブルの構造 `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
CREATE TABLE IF NOT EXISTS `campaigns` (
  `id` int(6) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `posting_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `campaigns`
--

TRUNCATE TABLE `campaigns`;
--
-- テーブルのデータのダンプ `campaigns`
--

INSERT INTO `campaigns` (`id`, `title`, `content`, `posting_time`) VALUES
(1, '会員だけがお得な1週間', '会員なら、11月11日（土）～17日（金）は映画が1,100円！', '2017-11-01 10:00:00'),
(2, '新規会員登録するなら今がチャンス！', '今新規会員登録するとAmazonギフト券がもらえます！', '2017-11-01 10:00:00'),
(3, '毎週月曜日は「HALマンデイ」！', '毎週月曜日は900円で映画が見れます！', '2017-11-16 10:00:00'),
(4, '抽選でオリジナルグッズが当たる！', '「スター・ウォーズ／最後のジェダイ」「GODZILLA 怪獣惑星」「探偵はBARにいる3」抽選でオリジナルグッズが当たる！', '2017-11-16 10:00:00'),
(5, '3Dメガネプレゼント！', '(^0_0^)', '2017-11-20 10:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `classes`
--

TRUNCATE TABLE `classes`;
--
-- テーブルのデータのダンプ `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'aaa');

-- --------------------------------------------------------

--
-- テーブルの構造 `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `inquiry_category_id` tinyint(2) NOT NULL,
  `reply` int(6) NOT NULL,
  `state_flg` tinyint(1) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `inquiries`
--

TRUNCATE TABLE `inquiries`;
--
-- テーブルのデータのダンプ `inquiries`
--

INSERT INTO `inquiries` (`id`, `user_id`, `inquiry_category_id`, `reply`, `state_flg`, `content`) VALUES
(1, 1, 1, 1, 0, 'あああああああ。'),
(2, 2, 2, 2, 0, 'aaaaaaaaa'),
(3, 3, 3, 3, 0, 'aaaaaaaaaaaaa'),
(4, 4, 4, 4, 0, 'aaaaaaaaaaa'),
(5, 5, 5, 5, 0, 'aaaaaaaaaa'),
(6, 6, 6, 6, 0, 'aaaaaaaaaaa'),
(7, 7, 7, 7, 0, 'aaaaaaaaaaa'),
(8, 8, 8, 8, 0, 'aaaaaaaaaaaaaaa'),
(9, 9, 9, 9, 0, 'aaaaaaaaaaa'),
(10, 10, 10, 10, 0, 'aaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- テーブルの構造 `inquiry_categories`
--

DROP TABLE IF EXISTS `inquiry_categories`;
CREATE TABLE IF NOT EXISTS `inquiry_categories` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `inquiry_categories`
--

TRUNCATE TABLE `inquiry_categories`;
--
-- テーブルのデータのダンプ `inquiry_categories`
--

INSERT INTO `inquiry_categories` (`id`, `name`) VALUES
(1, 'チケットについて'),
(2, 'お支払方法について'),
(3, '座席について'),
(4, '飲食について'),
(5, '貸し出し物について'),
(6, '劇場について'),
(7, '会員について'),
(8, 'キャンペーンについて'),
(9, 'お知らせについて'),
(10, 'その他お問い合わせ');

-- --------------------------------------------------------

--
-- テーブルの構造 `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `menus`
--

TRUNCATE TABLE `menus`;
--
-- テーブルのデータのダンプ `menus`
--

INSERT INTO `menus` (`id`, `name`, `price`) VALUES
(1, 'ポテト', 200),
(2, 'ポップコーン', 300),
(3, 'コーラ', 200),
(4, 'メロンソーダ', 200),
(5, 'コーヒー', 200),
(6, 'ビール', 200),
(7, 'アップルパイ', 300),
(8, 'ミルクティー', 200),
(9, 'キャラメルポップコーン', 300),
(10, 'レモンパイ', 300);

-- --------------------------------------------------------

--
-- テーブルの構造 `menu_reserves`
--

DROP TABLE IF EXISTS `menu_reserves`;
CREATE TABLE IF NOT EXISTS `menu_reserves` (
  `id` tinyint(2) NOT NULL,
  `menu_id` tinyint(2) NOT NULL,
  `quantity` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `menu_reserves`
--

TRUNCATE TABLE `menu_reserves`;
--
-- テーブルのデータのダンプ `menu_reserves`
--

INSERT INTO `menu_reserves` (`id`, `menu_id`, `quantity`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(6) NOT NULL,
  `option_id` tinyint(1) NOT NULL,
  `sound` tinyint(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `screeningTime` int(3) NOT NULL,
  `releaseDate` date NOT NULL,
  `imagePath` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `movies`
--

TRUNCATE TABLE `movies`;
--
-- テーブルのデータのダンプ `movies`
--

INSERT INTO `movies` (`id`, `option_id`, `sound`, `title`, `screeningTime`, `releaseDate`, `imagePath`) VALUES
(1, 1, 1, 'GODZILLA 怪獣惑星', 180, '2017-11-01', 'images'),
(2, 2, 1, '泥棒役者', 180, '2017-11-02', 'images'),
(3, 1, 2, 'ローガン・ラッキー', 120, '2017-11-03', 'images'),
(4, 1, 1, 'IT', 150, '2017-11-04', 'images'),
(5, 2, 2, 'HIGH & LOW', 120, '2017-11-05', 'images'),
(6, 1, 2, 'マイティ・ソー', 120, '2017-11-06', 'images'),
(7, 2, 2, 'ラストレシピ', 140, '2017-11-07', 'images'),
(8, 1, 1, 'ジグソウ・ソウ・レガシー', 150, '2017-11-08', 'images'),
(9, 1, 2, 'ミックス。', 120, '2017-11-09', 'images'),
(10, 2, 1, 'ザ・サークル', 120, '2017-11-10', 'images');

-- --------------------------------------------------------

--
-- テーブルの構造 `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(6) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `posting_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `news`
--

TRUNCATE TABLE `news`;
--
-- テーブルのデータのダンプ `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `posting_time`) VALUES
(1, '公式サイトオープンしました！', '公式サイトオープンしました！\r\nネットでチケットを予約できるようになりました！\r\n是非ご利用ください！', '2017-01-01 10:00:00'),
(2, '新規会員キャンペーンを開始しました！', '只今、HALシネマに新規会員登録するとＡｍａｚｏｎギフト券をプレゼントします！', '2017-01-01 10:01:00'),
(3, '公開予定作品を更新いました！', '2017-12-01「鋼の錬金術師」を公開予定作品一覧に追加しました！', '2017-11-16 10:00:00'),
(4, '不審なメールにご注意ください。', 'HALシネマズを装った不審なメールにご注意ください。', '2017-11-16 10:00:00'),
(5, 'メンテナンスのお知らせ', '2017年12月1日～12月2日の間メンテナンスを行います。', '2017-11-20 10:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `options`
--

TRUNCATE TABLE `options`;
--
-- テーブルのデータのダンプ `options`
--

INSERT INTO `options` (`id`, `name`) VALUES
(1, '3D'),
(2, '4D');

-- --------------------------------------------------------

--
-- テーブルの構造 `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(6) NOT NULL,
  `class_id` tinyint(1) NOT NULL,
  `option_id` tinyint(1) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `prices`
--

TRUNCATE TABLE `prices`;
--
-- テーブルのデータのダンプ `prices`
--

INSERT INTO `prices` (`id`, `class_id`, `option_id`, `price`) VALUES
(1, 1, 1, 1000),
(2, 2, 2, 1500),
(3, 1, 1, 1000),
(4, 2, 1, 1000),
(5, 1, 2, 1000),
(6, 1, 1, 1000),
(7, 2, 2, 1000),
(8, 1, 2, 1000),
(9, 1, 2, 1000),
(10, 1, 1, 1000);

-- --------------------------------------------------------

--
-- テーブルの構造 `release_periods`
--

DROP TABLE IF EXISTS `release_periods`;
CREATE TABLE IF NOT EXISTS `release_periods` (
  `movie_id` int(6) NOT NULL,
  `theater_id` tinyint(2) NOT NULL,
  `last_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `release_periods`
--

TRUNCATE TABLE `release_periods`;
--
-- テーブルのデータのダンプ `release_periods`
--

INSERT INTO `release_periods` (`movie_id`, `theater_id`, `last_day`) VALUES
(1, 1, '2017-11-30'),
(2, 2, '2017-11-30'),
(3, 3, '2017-11-30'),
(4, 4, '2017-11-30'),
(5, 5, '2017-11-30'),
(6, 6, '2017-11-30'),
(7, 7, '2017-11-30'),
(8, 8, '2017-11-30'),
(9, 9, '2017-11-30'),
(10, 10, '2017-11-30');

-- --------------------------------------------------------

--
-- テーブルの構造 `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(6) NOT NULL,
  `admin_id` int(6) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `replies`
--

TRUNCATE TABLE `replies`;
--
-- テーブルのデータのダンプ `replies`
--

INSERT INTO `replies` (`id`, `admin_id`, `content`) VALUES
(1, 1, 'aaaaaaaaaaa'),
(2, 2, 'aaaaaaaaaaaa'),
(3, 3, 'aaaaaaaaaaaaaa'),
(4, 4, 'aaaaaaaaaaa'),
(5, 5, 'aaaaaaaaaaaaaa'),
(6, 6, 'aaaaaaaaaaa'),
(7, 1, 'aaaaaaaaaaaaa'),
(8, 2, 'aaaaaaaaaaaaaaa'),
(9, 3, 'aaaaaaaaaaaaaaa'),
(10, 4, 'aaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- テーブルの構造 `reserves`
--

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE IF NOT EXISTS `reserves` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `schedule_id` int(6) NOT NULL,
  `class_id` tinyint(1) NOT NULL,
  `menu_reserve` int(6) NOT NULL,
  `seat_no` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `reserves`
--

TRUNCATE TABLE `reserves`;
--
-- テーブルのデータのダンプ `reserves`
--

INSERT INTO `reserves` (`id`, `user_id`, `schedule_id`, `class_id`, `menu_reserve`, `seat_no`) VALUES
(1, 1, 1, 1, 1, 'A-01'),
(2, 2, 2, 1, 2, 'B-02'),
(3, 3, 3, 1, 3, 'C-03'),
(4, 4, 4, 1, 4, 'D-04'),
(5, 5, 5, 1, 5, 'E-05'),
(6, 6, 6, 1, 6, 'F-06'),
(7, 7, 7, 1, 7, 'G-07'),
(8, 8, 8, 1, 8, 'H-08'),
(9, 9, 9, 1, 9, 'I-09'),
(10, 10, 10, 1, 10, 'J-10');

-- --------------------------------------------------------

--
-- テーブルの構造 `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(6) NOT NULL,
  `movie_id` int(6) NOT NULL,
  `screen_id` int(6) NOT NULL,
  `start_time` time(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `schedules`
--

TRUNCATE TABLE `schedules`;
--
-- テーブルのデータのダンプ `schedules`
--

INSERT INTO `schedules` (`id`, `movie_id`, `screen_id`, `start_time`) VALUES
(1, 1, 1, '01:00:00.00000'),
(2, 2, 2, '02:00:00.00000'),
(3, 3, 3, '03:00:00.00000'),
(4, 4, 4, '04:00:00.00000'),
(5, 5, 5, '05:00:00.00000'),
(6, 6, 6, '06:00:00.00000'),
(7, 7, 7, '07:00:00.00000'),
(8, 8, 8, '08:00:00.00000'),
(9, 9, 9, '09:00:00.00000'),
(10, 10, 10, '10:00:00.00000');

-- --------------------------------------------------------

--
-- テーブルの構造 `screens`
--

DROP TABLE IF EXISTS `screens`;
CREATE TABLE IF NOT EXISTS `screens` (
  `id` int(6) NOT NULL,
  `theater_id` tinyint(2) NOT NULL,
  `audience` varchar(3) NOT NULL,
  `screen_no` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `screens`
--

TRUNCATE TABLE `screens`;
--
-- テーブルのデータのダンプ `screens`
--

INSERT INTO `screens` (`id`, `theater_id`, `audience`, `screen_no`) VALUES
(1, 1, '200', 1),
(2, 2, '100', 2),
(3, 3, '150', 3),
(4, 4, '200', 4),
(5, 5, '100', 5),
(6, 6, '150', 6),
(7, 7, '100', 7),
(8, 8, '100', 8),
(9, 9, '200', 9),
(10, 10, '200', 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `theaters`
--

DROP TABLE IF EXISTS `theaters`;
CREATE TABLE IF NOT EXISTS `theaters` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `theaters`
--

TRUNCATE TABLE `theaters`;
--
-- テーブルのデータのダンプ `theaters`
--

INSERT INTO `theaters` (`id`, `name`) VALUES
(1, 'HALシネマズ新宿'),
(2, 'HALシネマズ渋谷'),
(3, 'HALシネマズ池袋'),
(4, 'HALシネマズ亀有'),
(5, 'HALシネマズ岡山'),
(6, 'HALシネマズ北海道'),
(7, 'HALシネマズ沖縄'),
(8, 'HALシネマズ千葉'),
(9, 'HALシネマズ神奈川'),
(10, 'HALシネマズ秋葉原');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL,
  `mailAddress` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `withdrawal` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 挿入前にテーブルを空にする `users`
--

TRUNCATE TABLE `users`;
--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `nickname`, `password`, `mailAddress`, `gender`, `birthday`, `withdrawal`) VALUES
(1, 'kaichu', 'aaa', 'aaa@hal.ac.jp', 1, '2000-11-11', 0),
(2, 'usui', 'bbb', 'bbb@hal.ac.jp', 0, '2001-12-12', 0),
(3, 'ichige', 'ccc', 'ccc@hal.ac.jp', 0, '2002-10-10', 0),
(4, 'ichijo', 'ddd', 'ddd@hal.ac.jp', 0, '1999-01-01', 0),
(5, 'raaachin', 'eee', 'eee@hal.ac.jp', 0, '1994-11-06', 0),
(6, 'oden', 'fff', 'fff@hal.ac.jp', 1, '2017-01-01', 0),
(7, 'takamura', 'ggg', 'ggg@hal.ac.jp', 0, '1990-02-28', 0),
(8, 'tt16bu', 'hhh', 'hhh@hal.ac.jp', 1, '1980-03-31', 0),
(9, 'takuya8', 'iii', 'iii@hal.ac.jp', 0, '1991-04-01', 0),
(10, 'hakenn', 'jjj', 'jjj@hal.ac.jp', 1, '1991-05-01', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `inquiry_category_id` (`inquiry_category_id`);

--
-- Indexes for table `inquiry_categories`
--
ALTER TABLE `inquiry_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_reserves`
--
ALTER TABLE `menu_reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_id` (`option_id`),
  ADD KEY `sound_id` (`sound`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `release_periods`
--
ALTER TABLE `release_periods`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `screen_id` (`screen_id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `inquiry_categories`
--
ALTER TABLE `inquiry_categories`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menu_reserves`
--
ALTER TABLE `menu_reserves`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_ibfk_1` FOREIGN KEY (`inquiry_category_id`) REFERENCES `inquiry_categories` (`id`),
  ADD CONSTRAINT `inquiries_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- テーブルの制約 `menu_reserves`
--
ALTER TABLE `menu_reserves`
  ADD CONSTRAINT `menu_reserves_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- テーブルの制約 `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`);

--
-- テーブルの制約 `release_periods`
--
ALTER TABLE `release_periods`
  ADD CONSTRAINT `release_periods_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `release_periods_ibfk_2` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`id`);

--
-- テーブルの制約 `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- テーブルの制約 `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `reserves_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- テーブルの制約 `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`id`);

--
-- テーブルの制約 `screens`
--
ALTER TABLE `screens`
  ADD CONSTRAINT `screens_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
