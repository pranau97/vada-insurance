-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 02:32 AM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_cost`
--

CREATE TABLE IF NOT EXISTS `asset_cost` (
  `ASSET_COST_RANGE` int(3) NOT NULL,
  `MIN` int(8) NOT NULL,
  `MAX` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aut_insurance`
--

CREATE TABLE IF NOT EXISTS `aut_insurance` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `POLICY_ID` varchar(6) NOT NULL,
  `REG_NUMBER` varchar(15) NOT NULL,
  `VEHICLE_MANUFAC` varchar(15) NOT NULL,
  `YEAR_OF_BUILT` int(4) NOT NULL,
  `POLICY_DATE` date NOT NULL,
  `COST_OF_VEHICLE` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE IF NOT EXISTS `bank_details` (
  `BANK_NAME` varchar(15) NOT NULL,
  `ACCOUNT_NUMBER` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`BANK_NAME`, `ACCOUNT_NUMBER`) VALUES
('IDBI', '552103789324'),
('AXIS', '887799665544112'),
('ICICI', '912010055863215'),
('YES', '987654321123456'),
('AXIS', '998877665443221');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BRANCH_ID` varchar(6) NOT NULL,
  `BRANCH_MANAGER_ID` int(4) NOT NULL,
  `PHONE_NUMBER` text NOT NULL,
  `EMAIL_ID` varchar(25) NOT NULL,
  `STREET` varchar(15) NOT NULL,
  `PINCODE` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BRANCH_ID`, `BRANCH_MANAGER_ID`, `PHONE_NUMBER`, `EMAIL_ID`, `STREET`, `PINCODE`) VALUES
('B01', 1, '011-234324', 'delhioffice@vada.com', '51,Budha,Delhi', 335501),
('B02', 2, '044-284509', 'chennaioffice@vada.com', 'MWC,Chennai', 603002);

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE IF NOT EXISTS `claim` (
  `CLAIM_TR_ID` varchar(10) NOT NULL,
  `AMOUNT_OF_CLAIM` text NOT NULL,
  `CLAIM_STATUS` varchar(15) NOT NULL,
  `DATE_OF_CLAIM` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`CLAIM_TR_ID`, `AMOUNT_OF_CLAIM`, `CLAIM_STATUS`, `DATE_OF_CLAIM`) VALUES
('4444444441', '80000', 'CLAIMED', '2016-11-10'),
('4444444444', '18000', 'CLAIMED', '2016-11-10'),
('4444444478', '200000', 'CLAIMED', '2016-11-10'),
('4545315315', '350000', 'CLAIMED', '2016-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `claim_customer_id`
--

CREATE TABLE IF NOT EXISTS `claim_customer_id` (
  `CLAIM_TR_ID` varchar(10) NOT NULL,
  `CUSTOMER_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim_customer_id`
--

INSERT INTO `claim_customer_id` (`CLAIM_TR_ID`, `CUSTOMER_ID`) VALUES
('4444444441', 1),
('4444444444', 1),
('4444444478', 1),
('4545315315', 1);

-- --------------------------------------------------------

--
-- Table structure for table `claim_policy_id`
--

CREATE TABLE IF NOT EXISTS `claim_policy_id` (
  `CLAIM_TR_ID` varchar(10) NOT NULL,
  `POLICY_ID` varchar(6) NOT NULL,
  `CUSTOMER_ID` int(4) NOT NULL,
  `POLICY_NAME` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim_policy_id`
--

INSERT INTO `claim_policy_id` (`CLAIM_TR_ID`, `POLICY_ID`, `CUSTOMER_ID`, `POLICY_NAME`) VALUES
('4444444441', 'AUT102', 1, 'SILVER'),
('4444444444', 'AUT101', 1, 'AUTO');

-- --------------------------------------------------------

--
-- Table structure for table `claim_policy_id_lyf`
--

CREATE TABLE IF NOT EXISTS `claim_policy_id_lyf` (
  `CLAIM_TR_ID` varchar(10) NOT NULL,
  `POLICY_ID_LYF` varchar(6) NOT NULL,
  `CUSTOMER_ID` int(4) NOT NULL,
  `POLICY_NAME` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim_policy_id_lyf`
--

INSERT INTO `claim_policy_id_lyf` (`CLAIM_TR_ID`, `POLICY_ID_LYF`, `CUSTOMER_ID`, `POLICY_NAME`) VALUES
('4444444478', 'LYF301', 1, 'LIFE'),
('4545315315', 'LYF302', 1, 'FULL LIFE');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `SEX` text NOT NULL,
  `PHONE_NUMBER` text NOT NULL,
  `EMAIL_ID` varchar(35) NOT NULL,
  `DOB` date NOT NULL,
  `HOUSE_NUMBER` varchar(4) NOT NULL,
  `STREET` varchar(15) NOT NULL,
  `PASSWORD` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `PHONE_NUMBER`, `EMAIL_ID`, `DOB`, `HOUSE_NUMBER`, `STREET`, `PASSWORD`) VALUES
(1, 'Rahul', 'Prasham', 'M', '7010832325', 'rahul@vit.ac.in', '1997-06-12', '14', 'Whitefield', '439ed537979d8e831561964dbbbd7413'),
(2, 'Prerak', 'Dosi', 'M', '9876325410', 'prerak@gmail.com', '1997-04-10', '89', 'saavn', 'b158debcdec54f696b4793a7f9edc0ba'),
(3, 'Nikhil', 'Thilak', 'M', '9962368035', 'nt.stick@gmail.com', '1995-11-01', '416', 'Ramanujan', 'a29921171be03db43d3eaca707947ef1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE IF NOT EXISTS `customer_account` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `ACCOUNT_NUMBER` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`CUSTOMER_ID`, `ACCOUNT_NUMBER`) VALUES
(3, '552103789324'),
(2, '887799665544112'),
(1, '987654321123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer_license`
--

CREATE TABLE IF NOT EXISTS `customer_license` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `CUSTOMER_LICENSE_NUMBER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_license`
--

INSERT INTO `customer_license` (`CUSTOMER_ID`, `CUSTOMER_LICENSE_NUMBER`) VALUES
(1, '865453135135151');

-- --------------------------------------------------------

--
-- Table structure for table `customer_pin`
--

CREATE TABLE IF NOT EXISTS `customer_pin` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `PINCODE` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_pin`
--

INSERT INTO `customer_pin` (`CUSTOMER_ID`, `PINCODE`) VALUES
(2, 335511),
(3, 600042),
(1, 789456);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `D_ID` varchar(6) NOT NULL,
  `D_NAME` varchar(15) NOT NULL,
  `MANAGER_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`D_ID`, `D_NAME`, `MANAGER_ID`) VALUES
('B01D1', 'Accounts', 1),
('B01D2', 'Technical', 1),
('B01D3', 'HRM', 1),
('B02D1', 'Accounts', 2),
('B02D2', 'Technical', 2),
('B02D3', 'HRM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EMPLOYEE_ID` int(3) NOT NULL,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `SEX` text NOT NULL,
  `PHONE_NUMBER` text NOT NULL,
  `EMAIL_ID` varchar(35) NOT NULL,
  `DOB` date NOT NULL,
  `HOUSE_NUMBER` varchar(4) NOT NULL,
  `STREET` varchar(15) NOT NULL,
  `D_ID` varchar(6) NOT NULL,
  `PASSWORD` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMPLOYEE_ID`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `PHONE_NUMBER`, `EMAIL_ID`, `DOB`, `HOUSE_NUMBER`, `STREET`, `D_ID`, `PASSWORD`) VALUES
(1, 'Pranau', 'Kumar', 'M', '9982838103', 'pranau97@gmail.com', '1997-07-19', '114', 'Bangalore', 'B01D1', '5e8a5709f662f8d401f7a00e6137f9ca'),
(2, 'Anshuman', 'Kirty', 'M', '7010351398', 'anshuman.kirty@gmail.com', '1997-02-22', '317', 'MWC', 'B01D2', 'b69e9679e1ba0e295bf9bb4fabaa7a0c');

-- --------------------------------------------------------

--
-- Table structure for table `emp_account`
--

CREATE TABLE IF NOT EXISTS `emp_account` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `ACCOUNT_NUMBER` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_account`
--

INSERT INTO `emp_account` (`EMPLOYEE_ID`, `ACCOUNT_NUMBER`) VALUES
(2, '912010055863215'),
(1, '998877665443221');

-- --------------------------------------------------------

--
-- Table structure for table `emp_designation`
--

CREATE TABLE IF NOT EXISTS `emp_designation` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `DESIGNATION` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_designation`
--

INSERT INTO `emp_designation` (`EMPLOYEE_ID`, `DESIGNATION`) VALUES
(1, 'Manager'),
(2, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `emp_pin`
--

CREATE TABLE IF NOT EXISTS `emp_pin` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `PINCODE` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_pin`
--

INSERT INTO `emp_pin` (`EMPLOYEE_ID`, `PINCODE`) VALUES
(1, 335501),
(2, 603002);

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary`
--

CREATE TABLE IF NOT EXISTS `emp_salary` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `SALARY` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_salary`
--

INSERT INTO `emp_salary` (`EMPLOYEE_ID`, `SALARY`) VALUES
(1, 150000),
(2, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE IF NOT EXISTS `has` (
  `D_ID` varchar(6) NOT NULL,
  `BRANCH_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has`
--

INSERT INTO `has` (`D_ID`, `BRANCH_ID`) VALUES
('B01D1', 'B01'),
('B01D2', 'B02');

-- --------------------------------------------------------

--
-- Table structure for table `lyf_insurance`
--

CREATE TABLE IF NOT EXISTS `lyf_insurance` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `POLICY_ID` varchar(6) NOT NULL,
  `POLICY_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lyf_insurance`
--

INSERT INTO `lyf_insurance` (`CUSTOMER_ID`, `POLICY_ID`, `POLICY_DATE`) VALUES
(2, 'LYF302', '2016-11-10'),
(3, 'LYF301', '2016-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE IF NOT EXISTS `nominee` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` text NOT NULL,
  `DOB` date NOT NULL,
  `SEX` text NOT NULL,
  `RELATION` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`CUSTOMER_ID`, `NAME`, `PHONE_NUMBER`, `DOB`, `SEX`, `RELATION`) VALUES
(1, 'Suraj', '9879856323', '2016-11-10', 'M', 'Brother'),
(2, 'Shyam', '7896542361', '1997-11-10', 'M', 'Friend'),
(3, 'Shreyas', '8890122100', '1994-05-10', 'M', 'Friend');

-- --------------------------------------------------------

--
-- Table structure for table `pin_city`
--

CREATE TABLE IF NOT EXISTS `pin_city` (
  `PINCODE` int(6) NOT NULL,
  `CITY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_city`
--

INSERT INTO `pin_city` (`PINCODE`, `CITY`) VALUES
(335501, 'Bhadra'),
(335511, 'Jodhpur'),
(600042, 'Banglore'),
(603002, 'Chennai'),
(789456, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `pin_state`
--

CREATE TABLE IF NOT EXISTS `pin_state` (
  `PINCODE` int(6) NOT NULL,
  `STATE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_state`
--

INSERT INTO `pin_state` (`PINCODE`, `STATE`) VALUES
(335501, 'Rajasthan'),
(335511, 'Rajasthan'),
(600042, 'Karnataka'),
(603002, 'TamilNadu'),
(789456, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE IF NOT EXISTS `policy` (
  `POLICY_ID` varchar(6) NOT NULL,
  `POLICY_NAME` varchar(15) NOT NULL,
  `PREMIUM` int(8) NOT NULL,
  `LIABILITY_AMOUNT` int(8) NOT NULL,
  `COVERAGE_PERIOD` int(3) NOT NULL,
  `ASSET_COST_RANGE` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`POLICY_ID`, `POLICY_NAME`, `PREMIUM`, `LIABILITY_AMOUNT`, `COVERAGE_PERIOD`, `ASSET_COST_RANGE`) VALUES
('AUT101', 'AUTO', 200, 18000, 60, 1),
('AUT102', 'SILVER', 800, 80000, 60, 2),
('AUT103', 'GOLD', 1000, 620000, 60, 3),
('AUT104', 'DIAMOND', 1200, 640000, 60, 4),
('AUT105', 'PLATINUM', 1500, 1280000, 60, 5),
('PRO201', 'PROPERTY', 1000, 60000, 30, 1),
('PRO202', 'SILVERPRO', 6000, 180000, 30, 2),
('PRO203', 'GOLDPRO', 12000, 400000, 30, 3);

-- --------------------------------------------------------

--
-- Table structure for table `policy_lyf`
--

CREATE TABLE IF NOT EXISTS `policy_lyf` (
  `POLICY_ID` varchar(6) NOT NULL,
  `POLICY_NAME` varchar(15) NOT NULL,
  `PREMIUM` int(8) NOT NULL,
  `LIABILITY_AMOUNT` int(8) NOT NULL,
  `COVERAGE_PERIOD` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_lyf`
--

INSERT INTO `policy_lyf` (`POLICY_ID`, `POLICY_NAME`, `PREMIUM`, `LIABILITY_AMOUNT`, `COVERAGE_PERIOD`) VALUES
('LYF301', 'LIFE', 3000, 200000, 60),
('LYF302', 'FULL LIFE', 5000, 350000, 60),
('LYF303', 'AFTER LIFE', 8000, 600000, 60);

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE IF NOT EXISTS `premium` (
  `PREMIUM_TR_ID` varchar(10) NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `DUE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`PREMIUM_TR_ID`, `PAYMENT_DATE`, `DUE_DATE`) VALUES
('1165186416', '2016-11-10', '2016-12-14'),
('9638527410', '2016-11-10', '2016-12-15'),
('9876543210', '2016-11-10', '2016-11-11'),
('9876543211', '2016-11-10', '2016-11-12'),
('9876543278', '2016-11-10', '2016-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `premium_paid`
--

CREATE TABLE IF NOT EXISTS `premium_paid` (
  `PREMIUM_TR_ID` varchar(10) NOT NULL,
  `PAID_ON_TIME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium_paid`
--

INSERT INTO `premium_paid` (`PREMIUM_TR_ID`, `PAID_ON_TIME`) VALUES
('1165186416', 'YES'),
('9638527410', 'YES'),
('9876543210', 'YES'),
('9876543211', 'YES'),
('9876543278', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `premium_tr_customer`
--

CREATE TABLE IF NOT EXISTS `premium_tr_customer` (
  `PREMIUM_TR_ID` varchar(10) NOT NULL,
  `CUSTOMER_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium_tr_customer`
--

INSERT INTO `premium_tr_customer` (`PREMIUM_TR_ID`, `CUSTOMER_ID`) VALUES
('1165186416', 1),
('9638527410', 1),
('9876543210', 1),
('9876543211', 1),
('9876543278', 1);

-- --------------------------------------------------------

--
-- Table structure for table `premium_tr_policy`
--

CREATE TABLE IF NOT EXISTS `premium_tr_policy` (
  `PREMIUM_TR_ID` varchar(10) NOT NULL,
  `POLICY_ID` varchar(6) NOT NULL,
  `POLICY_NAME` text NOT NULL,
  `CUSTOMER_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium_tr_policy`
--

INSERT INTO `premium_tr_policy` (`PREMIUM_TR_ID`, `POLICY_ID`, `POLICY_NAME`, `CUSTOMER_ID`) VALUES
('1165186416', 'AUT101', 'AUTO', '1');

-- --------------------------------------------------------

--
-- Table structure for table `premium_tr_policy_lyf`
--

CREATE TABLE IF NOT EXISTS `premium_tr_policy_lyf` (
  `PREMIUM_TR_ID` varchar(10) NOT NULL,
  `POLICY_LYF_ID` varchar(6) NOT NULL,
  `POLICY_NAME` text NOT NULL,
  `CUSTOMER_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium_tr_policy_lyf`
--

INSERT INTO `premium_tr_policy_lyf` (`PREMIUM_TR_ID`, `POLICY_LYF_ID`, `POLICY_NAME`, `CUSTOMER_ID`) VALUES
('9638527410', 'LYF302', 'FULL LIFE', '1'),
('9876543210', 'LYF301', 'LIFE', '1'),
('9876543211', 'LYF301', 'LIFE', '1'),
('9876543278', 'LYF301', 'LIFE', '1');

-- --------------------------------------------------------

--
-- Table structure for table `prop_insurance`
--

CREATE TABLE IF NOT EXISTS `prop_insurance` (
  `CUSTOMER_ID` int(4) NOT NULL,
  `POLICY_ID` varchar(6) NOT NULL,
  `POLICY_DATE` date NOT NULL,
  `BUILD_UP_COST` int(8) NOT NULL,
  `AREA` int(5) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prop_insurance`
--

INSERT INTO `prop_insurance` (`CUSTOMER_ID`, `POLICY_ID`, `POLICY_DATE`, `BUILD_UP_COST`, `AREA`, `ADDRESS`) VALUES
(1, 'PRO201', '2016-11-10', 1500000, 25000, 'Room No 333, P block, Mens hos');

-- --------------------------------------------------------

--
-- Table structure for table `provides`
--

CREATE TABLE IF NOT EXISTS `provides` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `POLICY_ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provides_lyf`
--

CREATE TABLE IF NOT EXISTS `provides_lyf` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `POLICY_LYF_ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `works_for`
--

CREATE TABLE IF NOT EXISTS `works_for` (
  `EMPLOYEE_ID` int(4) NOT NULL,
  `D_ID` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works_for`
--

INSERT INTO `works_for` (`EMPLOYEE_ID`, `D_ID`) VALUES
(1, 'B01D1'),
(2, 'B01D2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_cost`
--
ALTER TABLE `asset_cost`
  ADD PRIMARY KEY (`ASSET_COST_RANGE`);

--
-- Indexes for table `aut_insurance`
--
ALTER TABLE `aut_insurance`
  ADD PRIMARY KEY (`REG_NUMBER`),
  ADD KEY `aut_insurance_cust_id_fk` (`CUSTOMER_ID`),
  ADD KEY `aut_insurance_policy_id_fk` (`POLICY_ID`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`ACCOUNT_NUMBER`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BRANCH_ID`),
  ADD KEY `branch_pincode_fk` (`PINCODE`),
  ADD KEY `branch_manager_id_fk` (`BRANCH_MANAGER_ID`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`CLAIM_TR_ID`);

--
-- Indexes for table `claim_customer_id`
--
ALTER TABLE `claim_customer_id`
  ADD PRIMARY KEY (`CLAIM_TR_ID`),
  ADD KEY `claim_customer_id_cust_id_fk` (`CUSTOMER_ID`);

--
-- Indexes for table `claim_policy_id`
--
ALTER TABLE `claim_policy_id`
  ADD PRIMARY KEY (`CLAIM_TR_ID`),
  ADD KEY `claim_policy_id_policy_id_fk` (`POLICY_ID`);

--
-- Indexes for table `claim_policy_id_lyf`
--
ALTER TABLE `claim_policy_id_lyf`
  ADD PRIMARY KEY (`CLAIM_TR_ID`),
  ADD KEY `claim_policy_id_lyf_policy_id_fk` (`POLICY_ID_LYF`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`CUSTOMER_ID`),
  ADD KEY `customer_account_accnum_fk` (`ACCOUNT_NUMBER`);

--
-- Indexes for table `customer_license`
--
ALTER TABLE `customer_license`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `customer_pin`
--
ALTER TABLE `customer_pin`
  ADD PRIMARY KEY (`CUSTOMER_ID`),
  ADD KEY `customer_pin_pincode_fk` (`PINCODE`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`D_ID`),
  ADD KEY `department_manager_id_fk` (`MANAGER_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD KEY `employee_d_id_fk` (`D_ID`);

--
-- Indexes for table `emp_account`
--
ALTER TABLE `emp_account`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD KEY `emp_account_accnum_fk` (`ACCOUNT_NUMBER`);

--
-- Indexes for table `emp_designation`
--
ALTER TABLE `emp_designation`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `emp_pin`
--
ALTER TABLE `emp_pin`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD KEY `emp_pin_pincode_fk` (`PINCODE`);

--
-- Indexes for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`D_ID`,`BRANCH_ID`),
  ADD KEY `has_branch_id_fk` (`BRANCH_ID`);

--
-- Indexes for table `lyf_insurance`
--
ALTER TABLE `lyf_insurance`
  ADD PRIMARY KEY (`CUSTOMER_ID`,`POLICY_ID`),
  ADD KEY `lyf_insurance_policy_id_fk` (`POLICY_ID`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`CUSTOMER_ID`,`NAME`);

--
-- Indexes for table `pin_city`
--
ALTER TABLE `pin_city`
  ADD PRIMARY KEY (`PINCODE`);

--
-- Indexes for table `pin_state`
--
ALTER TABLE `pin_state`
  ADD PRIMARY KEY (`PINCODE`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`POLICY_ID`);

--
-- Indexes for table `policy_lyf`
--
ALTER TABLE `policy_lyf`
  ADD PRIMARY KEY (`POLICY_ID`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`PREMIUM_TR_ID`);

--
-- Indexes for table `premium_paid`
--
ALTER TABLE `premium_paid`
  ADD PRIMARY KEY (`PREMIUM_TR_ID`);

--
-- Indexes for table `premium_tr_customer`
--
ALTER TABLE `premium_tr_customer`
  ADD PRIMARY KEY (`PREMIUM_TR_ID`),
  ADD KEY `premium_tr_customer_cust_id_fk` (`CUSTOMER_ID`);

--
-- Indexes for table `premium_tr_policy`
--
ALTER TABLE `premium_tr_policy`
  ADD PRIMARY KEY (`PREMIUM_TR_ID`),
  ADD KEY `premium_tr_policy_policy_id_fk` (`POLICY_ID`);

--
-- Indexes for table `premium_tr_policy_lyf`
--
ALTER TABLE `premium_tr_policy_lyf`
  ADD PRIMARY KEY (`PREMIUM_TR_ID`),
  ADD KEY `premium_tr_policy_lyf_policy_id_fk` (`POLICY_LYF_ID`);

--
-- Indexes for table `prop_insurance`
--
ALTER TABLE `prop_insurance`
  ADD PRIMARY KEY (`ADDRESS`),
  ADD KEY `prop_insurance_cust_id` (`CUSTOMER_ID`),
  ADD KEY `prop_insurance_policy_id` (`POLICY_ID`);

--
-- Indexes for table `provides`
--
ALTER TABLE `provides`
  ADD PRIMARY KEY (`EMPLOYEE_ID`,`POLICY_ID`(6));

--
-- Indexes for table `provides_lyf`
--
ALTER TABLE `provides_lyf`
  ADD PRIMARY KEY (`EMPLOYEE_ID`,`POLICY_LYF_ID`(6));

--
-- Indexes for table `works_for`
--
ALTER TABLE `works_for`
  ADD PRIMARY KEY (`EMPLOYEE_ID`,`D_ID`),
  ADD KEY `works_for_d_id_fk` (`D_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer_account`
--
ALTER TABLE `customer_account`
  MODIFY `CUSTOMER_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer_pin`
--
ALTER TABLE `customer_pin`
  MODIFY `CUSTOMER_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPLOYEE_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emp_account`
--
ALTER TABLE `emp_account`
  MODIFY `EMPLOYEE_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emp_designation`
--
ALTER TABLE `emp_designation`
  MODIFY `EMPLOYEE_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emp_pin`
--
ALTER TABLE `emp_pin`
  MODIFY `EMPLOYEE_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emp_salary`
--
ALTER TABLE `emp_salary`
  MODIFY `EMPLOYEE_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `CUSTOMER_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `works_for`
--
ALTER TABLE `works_for`
  MODIFY `EMPLOYEE_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aut_insurance`
--
ALTER TABLE `aut_insurance`
  ADD CONSTRAINT `aut_insurance_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `aut_insurance_policy_id_fk` FOREIGN KEY (`POLICY_ID`) REFERENCES `policy` (`POLICY_ID`);

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_manager_id_fk` FOREIGN KEY (`BRANCH_MANAGER_ID`) REFERENCES `employee` (`EMPLOYEE_ID`),
  ADD CONSTRAINT `branch_pincode_fk` FOREIGN KEY (`PINCODE`) REFERENCES `pin_city` (`PINCODE`);

--
-- Constraints for table `claim_customer_id`
--
ALTER TABLE `claim_customer_id`
  ADD CONSTRAINT `claim_customer_id_clam_tr_id_fk` FOREIGN KEY (`CLAIM_TR_ID`) REFERENCES `claim` (`CLAIM_TR_ID`),
  ADD CONSTRAINT `claim_customer_id_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `claim_policy_id`
--
ALTER TABLE `claim_policy_id`
  ADD CONSTRAINT `claim_policy_id_claim_tr_id_fk` FOREIGN KEY (`CLAIM_TR_ID`) REFERENCES `claim` (`CLAIM_TR_ID`),
  ADD CONSTRAINT `claim_policy_id_policy_id_fk` FOREIGN KEY (`POLICY_ID`) REFERENCES `policy` (`POLICY_ID`);

--
-- Constraints for table `claim_policy_id_lyf`
--
ALTER TABLE `claim_policy_id_lyf`
  ADD CONSTRAINT `claim_policy_id_lyf_claim_tr_id_fk` FOREIGN KEY (`CLAIM_TR_ID`) REFERENCES `claim` (`CLAIM_TR_ID`),
  ADD CONSTRAINT `claim_policy_id_lyf_policy_id_fk` FOREIGN KEY (`POLICY_ID_LYF`) REFERENCES `policy_lyf` (`POLICY_ID`);

--
-- Constraints for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD CONSTRAINT `customer_account_accnum_fk` FOREIGN KEY (`ACCOUNT_NUMBER`) REFERENCES `bank_details` (`ACCOUNT_NUMBER`),
  ADD CONSTRAINT `customer_account_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `customer_license`
--
ALTER TABLE `customer_license`
  ADD CONSTRAINT `customer_license_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `customer_pin`
--
ALTER TABLE `customer_pin`
  ADD CONSTRAINT `customer_pin_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `customer_pin_pincode_fk` FOREIGN KEY (`PINCODE`) REFERENCES `pin_city` (`PINCODE`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_manager_id_fk` FOREIGN KEY (`MANAGER_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_d_id_fk` FOREIGN KEY (`D_ID`) REFERENCES `department` (`D_ID`);

--
-- Constraints for table `emp_account`
--
ALTER TABLE `emp_account`
  ADD CONSTRAINT `emp_account_accnum_fk` FOREIGN KEY (`ACCOUNT_NUMBER`) REFERENCES `bank_details` (`ACCOUNT_NUMBER`),
  ADD CONSTRAINT `emp_account_emp_id_fk` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

--
-- Constraints for table `emp_designation`
--
ALTER TABLE `emp_designation`
  ADD CONSTRAINT `emp_designation_emp_id_fk` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

--
-- Constraints for table `emp_pin`
--
ALTER TABLE `emp_pin`
  ADD CONSTRAINT `emp_pin_emp_id_fk` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`),
  ADD CONSTRAINT `emp_pin_pincode_fk` FOREIGN KEY (`PINCODE`) REFERENCES `pin_city` (`PINCODE`);

--
-- Constraints for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD CONSTRAINT `emp_salary_emp_id_fk` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

--
-- Constraints for table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `has_branch_id_fk` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `has_d_id_fk` FOREIGN KEY (`D_ID`) REFERENCES `department` (`D_ID`);

--
-- Constraints for table `lyf_insurance`
--
ALTER TABLE `lyf_insurance`
  ADD CONSTRAINT `lyf_insurance_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `lyf_insurance_policy_id_fk` FOREIGN KEY (`POLICY_ID`) REFERENCES `policy_lyf` (`POLICY_ID`);

--
-- Constraints for table `nominee`
--
ALTER TABLE `nominee`
  ADD CONSTRAINT `nominee_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `pin_state`
--
ALTER TABLE `pin_state`
  ADD CONSTRAINT `pin_state_pincode_fk` FOREIGN KEY (`PINCODE`) REFERENCES `pin_city` (`PINCODE`);

--
-- Constraints for table `premium_paid`
--
ALTER TABLE `premium_paid`
  ADD CONSTRAINT `premium_paid_prem_tr_id_fk` FOREIGN KEY (`PREMIUM_TR_ID`) REFERENCES `premium` (`PREMIUM_TR_ID`);

--
-- Constraints for table `premium_tr_customer`
--
ALTER TABLE `premium_tr_customer`
  ADD CONSTRAINT `premium_tr_customer_cust_id_fk` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `premium_tr_customer_prem_tr_id_fk` FOREIGN KEY (`PREMIUM_TR_ID`) REFERENCES `premium` (`PREMIUM_TR_ID`);

--
-- Constraints for table `premium_tr_policy`
--
ALTER TABLE `premium_tr_policy`
  ADD CONSTRAINT `premium_tr_policy_policy_id_fk` FOREIGN KEY (`POLICY_ID`) REFERENCES `policy` (`POLICY_ID`),
  ADD CONSTRAINT `premium_tr_policy_prem_tr_id_fk` FOREIGN KEY (`PREMIUM_TR_ID`) REFERENCES `premium` (`PREMIUM_TR_ID`);

--
-- Constraints for table `premium_tr_policy_lyf`
--
ALTER TABLE `premium_tr_policy_lyf`
  ADD CONSTRAINT `premium_tr_policy_lyf_policy_id_fk` FOREIGN KEY (`POLICY_LYF_ID`) REFERENCES `policy_lyf` (`POLICY_ID`),
  ADD CONSTRAINT `premium_tr_policy_lyf_prem_tr_id_fk` FOREIGN KEY (`PREMIUM_TR_ID`) REFERENCES `premium` (`PREMIUM_TR_ID`);

--
-- Constraints for table `prop_insurance`
--
ALTER TABLE `prop_insurance`
  ADD CONSTRAINT `prop_insurance_cust_id` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `prop_insurance_policy_id` FOREIGN KEY (`POLICY_ID`) REFERENCES `policy` (`POLICY_ID`);

--
-- Constraints for table `works_for`
--
ALTER TABLE `works_for`
  ADD CONSTRAINT `works_for_d_id_fk` FOREIGN KEY (`D_ID`) REFERENCES `department` (`D_ID`),
  ADD CONSTRAINT `works_for_emp_id_fk` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
