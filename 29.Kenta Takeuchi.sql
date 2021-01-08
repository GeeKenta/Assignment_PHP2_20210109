-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 1 月 08 日 18:04
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `assignment`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `review`, `indate`) VALUES
(1, 'RB', 'http://php.jp', '読みたい本', '2021-01-08 16:23:41'),
(2, 'PHP&JS', 'http://js.jp', 'リベンジ必要な本', '2021-01-08 16:24:09'),
(3, 'PY', 'http://python.jp', 'トライしてみたい本', '2021-01-08 16:26:43'),
(4, 'English本', 'http://Eng.jp', 'MAGA', '2021-01-08 16:55:54'),
(5, 'PYs', 'http://China.jp', 'Kanjidarake', '2021-01-08 16:56:45'),
(8, 'ねこ本', 'http://neko.jp', '未入力', '2021-01-08 18:26:55'),
(9, 'PY', 'http://inu.jp', 'bowwow', '2021-01-08 18:26:15'),
(10, 'わに本', 'http://wani.jp', '100日', '2021-01-08 18:26:15'),
(11, 'nazosugi', 'nazo@test', 'wakaran', '2021-01-08 21:17:45'),
(12, 'がんばれ', 'ga', 'ga', '2021-01-08 21:59:27'),
(13, 'だ', 'だ', 'だ', '2021-01-08 22:19:08'),
(16, 'darairama', 'ga', 'ga', '2021-01-09 00:14:25'),
(17, 'da', 'gad', 'd', '2021-01-09 00:14:28'),
(18, 'da', 'g', 'da', '2021-01-09 00:15:07'),
(19, 'da', 'ga', 'g', '2021-01-09 00:17:01'),
(20, 'da', 'da', 'da', '2021-01-09 00:19:48'),
(21, 'da', 'ga', 'ga', '2021-01-09 01:52:26'),
(22, 'RB', 'http://php.jp', '読みたい本', '2021-01-09 02:10:35'),
(23, 'gda', 'da', 'ga', '2021-01-09 02:10:43'),
(24, 'PHP&JS', 'http://js.jp', 'リベンジ必要な本2', '2021-01-09 02:10:59'),
(25, 'がんばれ', 'nemui', 'atochoi', '2021-01-09 03:00:30'),
(26, 'da', 'ga', 'da', '2021-01-09 03:02:49');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
