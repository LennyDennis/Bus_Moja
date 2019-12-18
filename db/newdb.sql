CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(200) NOT NULL,
  `origin` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `seats` int(11) NOT NULL,
  `departure_time` time NOT NULL,
  `date` date NOT NULL,
  `fare` double NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `bus` (`bus_id`, `busname`, `origin`, `destination`, `seats`, `departure_time`, `date`, `fare`) VALUES
(1, 'Twende', 'Nairobi', 'Eldoret', 10,  '16:00:00', '2019-12-20', 800),
(2, 'Nganya', 'Nairobi', 'Mombasa', 20,  '08:00:00', '2019-12-23', 1800),
(3, 'Matatu', 'Mombasa', 'Nairobi', 30,  '19:00:00', '2019-12-25', 800),
(4, 'Mathree', 'Eldoret', 'Kisumu', 20,  '15:00:00', '2019-12-24', 600),
(5, 'Safiri', 'Nairobi', 'Kisumu', 10,  '12:00:00', '2019-12-24', 1800);


-- Indexes for table `categories`
ALTER TABLE `bus_id`
  ADD PRIMARY KEY (`bus_id`);

-- AUTO_INCREMENT for table `categories`
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT;