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

CREATE TABLE `book` (
  `date` date NOT NULL,
  `book_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `book` (`book_id`, `name`, `date`, `bus_id`, `seats_no`, `total_fare`, `payment_method`) VALUES
(1, 'Lenny', '2019-12-04 07:34:38', 1, 2, 1600, 'Cash'),
(2, 'George', '2019-12-05 00:03:02', 2, 1, 1800, 'Cash'),
(3, 'Sharon', '2019-12-05 02:52:06', 3, 1, 800, 'Cash'),
(4, 'Monica', '2019-12-06 02:37:32', 4, 2, 1200, 'Cash');
-- Indexes for table `categories`
ALTER TABLE `bus_id`
  ADD PRIMARY KEY (`bus_id`);

-- AUTO_INCREMENT for table `categories`
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT;

  -- Indexes for table `categories`
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);
  ADD KEY `bus_id` (`bus_id`);


-- AUTO_INCREMENT for table `categories`
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;
  