DROP TABLE IF EXISTS `comment_table`;

CREATE TABLE `comment_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `nama` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `comment_table` (`id`, `tanggal`, `nama`, `komentar`) VALUES
(1, '2023-05-23 21:07:42', 'test', 'This recipe is very delicious!');
