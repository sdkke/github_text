SET NAMES UTF8;
DROP DATABASE IF EXISTS oppo;
CREATE DATABASE oppo CHARSET=UTF8;
USE oppo;

/**用户信息表**/
CREATE TABLE o_user(
  id int primary key auto_increment,
  uname varchar(20),
  upwd varchar(32)
);

INSERT INTO o_user VALUES
(null,'申登科','123'),
(null,'sdk','123');

/**商品信息表**/
CREATE TABLE oppo_product(
  pid INT PRIMARY KEY AUTO_INCREMENT,
  pname VARCHAR(64),
  price FLOAT(10,2),
  pic VARCHAR(32)
);

INSERT INTO oppo_product VALUES
(1,'R9s 玫瑰金 前后1600万像素 ',2799.00,'images/r9s_rose.png'),
(2,'R9s 黑色版 全新配色',2799.00,'images/r9s_black.png'),
(3,'R9s Plus 玫瑰金 6G+64GB',3499.00,'images/r9s_s_rose.png'),
(4,'R9s Plus 黑色版 大屏拍照旗舰',3499.00,'images/r9s_s_black.png'),
(5,'A57 玫瑰金 1600万美颜自拍',1599.00,'images/a57_rose.png'),
(6,'A57 黑色版 全新配色',1599.00,'images/a57_black.png'),
(7,'A59s 玫瑰金 1600万金属自拍神器',1999.00,'images/a59s_rose.png'),
(8,'A37玫瑰金 留住美一刻',1199.00,'images/a37_rose.png'),
(9,'VOOC闪充电源适配器 AK779',79.00,'images/plug_s.jpg'),
(10,'原装电源适配器 CF1001',19.00,'images/plug.jpg'),
(11,'VOOC闪充USB数据线 DL118',29.00,'images/usb_s.jpg'),
(12,'原装USB数据线',19.00,'images/usb.jpg'),
(13,'OPPO原装入耳式耳机 MH130 白色',59.00,'images/headset.png'),
(14,'OPPO时尚单品自拍杆 晴空蓝',39.00,'images/stick.png'),
(15,'R9s 液态硅胶保护壳 白色',49.00,'images/mobile_white.png'),
(16,'R9s 液态硅胶保护壳 河畔蓝',49.00,'images/mobile_black.png');
