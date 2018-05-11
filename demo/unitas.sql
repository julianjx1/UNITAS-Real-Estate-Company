create table  user_account
( 
  id 				varchar(20) not null,
  name 				varchar (50) not null,
  phone_number  	numeric (11,0) not null,
  address 			varchar(50) not null,
  date_of_birth		date not null,
  blood_group		varchar(5) not null,
  gender      		varchar(10) not null,
  status       		varchar (15) not null,
  religion       	varchar (20) not null,
  email       		varchar (30) not null,
  password      	varchar (20) not null,
  primary key  		(id)
);

create table product
( 
  ID 				varchar (20) not null,
  type				varchar (30) not null,
  name				varchar (30) not null,
  address			varchar (50) not null,
  size				varchar (30) not null,
  room				numeric (10,0),
  unit				numeric (10,0),
  floor				numeric (10,0),
  entry_date		date not null,
  completion_date	date,
  status			varchar(10) not null,
  amount_per_unit	varchar(50) not null,
  details  			varchar(1000) not null,
  primary key (ID)
); 

create table product_picture
(
  id				int(255) AUTO_INCREMENT,
  product_ID		varchar(20) not null,
  picture 			varchar(30),
  primary key (id,product_ID, picture),
  foreign key(product_ID) references product (ID)
  on delete cascade
);

create Table buy 
(
  product_ID 		varchar(20) not null,
  user_ID 			varchar(20) not null,
  nominee			varchar (50) not null,
  relationship_with_nominee varchar (20) not null,
  purpose			varchar (30) not null,
  primary key (product_ID),
  foreign key(user_ID) references user_account (id) on delete cascade,
  foreign key(product_ID) references product (ID) on delete cascade 
);

create table visitor_enquiry
(
  email 			varchar(30) not null,
  name 				varchar (50),
  phone_number  	numeric (11,0) not null,
  message			varchar (1000) not null,
  primary key 		(email)
);

create Table subscribe
(
  id				int(255) AUTO_INCREMENT,
  email 			varchar(30) not null,
  primary key		(id)
);