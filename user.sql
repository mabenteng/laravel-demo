-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?09 �?11 �?02:54
-- 服务器版本: 5.5.53-log
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `laravel`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `addr` varchar(50) NOT NULL,
  `other` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='测试学习' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `addr`, `other`, `img`) VALUES
(1, '稻香', 16, '河南', '我是来自河南', './img/2f1e75b269fe117b392436f5969a5ce8.jpg'),
(2, '段明超', 25, '郑州', '我在郑州工作', './img/d09e0d7e5ebfb787e846020a38202cb1.jpg'),
(3, '周杰伦', 18, '台湾', '我是唱歌的', './img/2720c7f66aa1b7d223343d93c2eaab5d.jpg'),
(4, '刘德华', 30, '香港', '我是中国人这首歌很好听', './img/e5363dcf18b5b724b682a6d7fa71e021.jpg'),
(5, '一号', 28, '河南洛阳', '我喜欢摩托车啊', './img/5906dc6c3a13357e377f016914a7b9ae.jpg'),
(6, '展怪', 29, '汝阳', '我是鸿飞了', './img/d9f3a3998ab3f8068742e9180fac2c7a.jpg'),
(7, '马总', 22, '洛阳', '小年轻一个', './img/dfc44b4b6a36a7b518c6354894d6f322.png'),
(8, '刘洋', 26, '洛阳', '我是干铝合金的', './img/b14501701a0fba91c78d0961a391ca3e.jpg'),
(9, '曹操', 58, '许昌', '对酒当歌,人生几何', './img/45f153134f6b61b6e4a87fbffad10022.jpg'),
(10, '关羽', 51, '关林', '好啊,他过江我也过江', './img/3640ff8d51974e85fb6f440ebbcfaade.jpg'),
(11, '刘备', 50, '新野', '莫非朕不知兵', './img/3e9e8969df46308155c7d15a7b090716.jpg'),
(12, '刑道荣', 36, '零陵', '三国第一战将', './img/4635c50bb560059c0d2c3eaf975c0874.jpg'),
(13, '孙权', 18, '江东', '生子当如孙仲谋', './img/fbadbf719062d8347a67370cce4bbc85.jpg'),
(14, '小刚', 28, '台湾', '唱不完一首歌....', './img/06cceb59419efabcde5b185a241104d9.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
