<?php
function populate_table($conn)
{
  // Populate USERS default
	$tableinsert = 'INSERT INTO users (name, password, role) VALUES ("admin", "admin", 1)';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO users (name, password, role) VALUES ("user", "user", 0)';
	mysqli_query($conn, $tableinsert);

  // Populate CATERGORY default
	$tableinsert = 'INSERT INTO category (name) VALUES ("drugs")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO category (name) VALUES ("fraud")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO category (name) VALUES ("software")';
	mysqli_query($conn, $tableinsert);

  // Populate PRODUCT default
	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Cannabis", 0.0117, "https://www.thesun.co.uk/wp-content/uploads/2017/04/nintchdbpict000292469779.jpg")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("LSD", 0.0353, "http://thescienceexplorer.com/sites/thescienceexplorer.com/files/styles/content_image__large/public/blog/31365499_624.jpg")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Speed", 0.0236, "https://cdn.shopify.com/s/files/1/0745/1785/products/shutterstock_180989498_4627c4de-a7a3-42e3-ac3e-4ea0b378f9fc.jpg?v=1422413371")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Pills", 0.0153, "http://amphetamines.com/wp-content/uploads/speed-pills.jpg")';
	mysqli_query($conn, $tableinsert);

	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Driver ID", 0.0623, "https://fthmb.tqn.com/NPgFTa5mHJkKbh2ZCf25Np_NSdU=/960x0/filters:no_upscale()/ADOT-az-driver-license_640-56a723113df78cf77292aeae.jpg")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Passport", 0.0934, "https://fthmb.tqn.com/jGBBtFIKPZtL4nE5ty4mPHlmcKs=/960x0/filters:no_upscale()/USPassport_USDeptState-56b7d1c83df78c0b1363906c.png")';
	mysqli_query($conn, $tableinsert);
	$tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Access cards", 0.0324, "http://5.imimg.com/data5/SF/AM/MY-707956/access-card-rfid-card-500x500.jpg")';
	mysqli_query($conn, $tableinsert);

  $tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Ransomware", 0.0571, "https://assets.pcmag.com/media/images/321816-computer-code.jpg?thumb=y&width=275&height=275")';
  mysqli_query($conn, $tableinsert);
  $tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Keylogger", 0.0391, "https://assets.pcmag.com/media/images/321816-computer-code.jpg?thumb=y&width=275&height=275")';
  mysqli_query($conn, $tableinsert);
  $tableinsert = 'INSERT INTO product (name, price, link) VALUES ("Annoying trojan", 0.0063, "https://assets.pcmag.com/media/images/321816-computer-code.jpg?thumb=y&width=275&height=275")';
  mysqli_query($conn, $tableinsert);
    
  // Populate CAT_PROD default
	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (1, 1)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (1, 2)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (1, 3)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (1, 4)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (2, 5)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (2, 6)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (2, 7)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (3, 8)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (3, 9)";
  	mysqli_query($conn, $tableinsert);
  	$tableinsert = "INSERT INTO cat_prod(idCat, idProd) VALUES (3, 10)";
  	mysqli_query($conn, $tableinsert);
}
?>
