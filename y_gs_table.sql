-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-25 13:52:09
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `y_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `y_gs_table`
--

CREATE TABLE `y_gs_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `textarea` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `y_gs_table`
--

INSERT INTO `y_gs_table` (`id`, `name`, `name2`, `age`, `birth`, `sex`, `tel`, `mail`, `address`, `school`, `date`, `place`, `textarea`, `indate`) VALUES
(1, '依田裕樹', 'ヨダユウキ', '28歳', '1991/5/14', '男', '080-3012-9607', 'ytcfuy@outlook.jp', '神奈川県横浜市鶴見区東寺尾5-18-1', '東京誠心調理師専門学校', '2021-08', '神奈川支店', '宜しくお願い致します。', '2021-03-24'),
(2, 'あいうえお', 'アイウエオ', '19歳', '2002/3/4', '女', '090-090-0990', '', 'あいうえお府', 'あいうえお大学', '2021-08', '東京支店', '', '2021-03-24'),
(3, 'かきくけこ', 'カキクケコ', '22歳', '2000/2/21', '女', '123-4567-6789', 'kakikukeko@i.softbank.jp', 'かきくけこ', 'スクリプト学校', '2021-08', '埼玉支店', 'かきくけこ', '2021-03-24'),
(4, 'さしすせそ', 'サシスセソ', '31歳', '1990/8/7', '男', '1111-1111-1111', '', 'さしすせそ県', 'さしすせそ大学', '2021-12', '神奈川支店', '', '2021-03-24'),
(5, 'たちつてと', 'タチツテト', '18歳', '2003/12/24', '女', '0120-444-444', 'sasisusse@.outlook.jp', '北海道', 'スクリプト学校', '2021-09', '東京支店', '頑張ります！！', '2021-03-24'),
(6, 'なにぬねの', 'なにぬねの', '40歳', '1881/12/21', '男', '080-080-0808', '', '地球', '東京誠心調理師専門学校', '2021-01', '東京支店', 'なにぬねの', '2021-03-24'),
(7, 'はひふへほ', 'ハヒフヘホ', '54歳', '1967/10/31', '女', '9876-5432-101', '', '宇宙', '宇宙中学校', '', '埼玉支店', '精一杯頑張ります！！', '2021-03-24'),
(8, 'まみむめも', 'マミムメモ', '35歳', '1986/9/25', '男', '080-3012-9607', '', '神奈川県横浜市鶴見区東寺尾5-18-1', 'あいうえお大学', '', '埼玉支店', '', '2021-03-24'),
(9, 'やゆよ', 'ヤユヨ', '30歳', '1991/2/13', '女', '123-4567-6789', 'yayuyo@docomo.jp', 'やゆよ島', 'やゆよ高校', '2021-12', '埼玉支店', '', '2021-03-24'),
(10, 'らりるれろ', 'ラリルレロ', '20歳', '2001/1/1', '女', '222-2222-2222', '', '世界', '世界中学校', '', '埼玉支店', '世界狙います！！！！！！', '2021-03-24');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `y_gs_table`
--
ALTER TABLE `y_gs_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `y_gs_table`
--
ALTER TABLE `y_gs_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
