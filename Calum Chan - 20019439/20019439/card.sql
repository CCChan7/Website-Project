CREATE TABLE `card` (
`#` int(11) NOT NULL,
`ccnum` varchar(100) NOT NULL,
`expdate` date NOT NULL,
`seccode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `card` (`#`, `ccnum`, `expdate`, `seccode`) VALUES
(1, 'a5sfethw6x98d6sk4jv0lms65h7cjshn', '2021-02-28', 389);

ALTER TABLE `card`
ADD PRIMARY KEY (`#`);

ALTER TABLE `card`
MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2; COMMIT;