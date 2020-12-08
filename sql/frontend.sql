CREATE TABLE user_login_details(
    user_id INT NOT NULL,
    user_email VARCHAR(500) NOT NULL,
    PASSWORD VARCHAR(500) NOT NULL,
    phone_no VARCHAR(500) NOT NULL,
    PRIMARY KEY(user_id),
    UNIQUE(user_email),
    UNIQUE(phone_no)
); CREATE TABLE business_login_details(
    business_id INT NOT NULL,
    business_email_id VARCHAR(500) NOT NULL,
    contact_no VARCHAR(500) NOT NULL,
    PASSWORD VARCHAR(500) NOT NULL,
    PRIMARY KEY(business_id),
    UNIQUE(business_email_id),
    UNIQUE(contact_no)
); CREATE TABLE product_details(
    product_id INT NOT NULL AUTO_INCREMENT,
    product_description VARCHAR(500) NOT NULL,
    product_name VARCHAR(500) NOT NULL,
    brand_name VARCHAR(500) NOT NULL,
    product_category VARCHAR(500) NOT NULL,
    product_price VARCHAR(500) NOT NULL,
    product_unit VARCHAR(500) NOT NULL,
    key_words VARCHAR(500) NOT NULL,
    company_logo VARCHAR(500) NOT NULL,
    product_images VARCHAR(500) NOT NULL,
    product_brochure VARCHAR(500) NOT NULL,
    business_id INT NOT NULL,
    business_type VARCHAR(500) NOT NULL,
    PRIMARY KEY(product_id)
); CREATE TABLE review_details(
    review_id INT NOT NULL AUTO_INCREMENT,
    review VARCHAR(1000) NOT NULL,
    ratings VARCHAR(500) NOT NULL,
    review_heading VARCHAR(500) NOT NULL,
    review_time DATE NOT NULL,
    PRIMARY KEY(review_id)
); CREATE TABLE admin_login_details(
    admin_id INT NOT NULL,
    admin_email_id VARCHAR(500) NOT NULL,
    admin_password VARCHAR(500) NOT NULL,
    contact_no VARCHAR(500) NOT NULL,
    PRIMARY KEY(admin_id),
    UNIQUE(contact_no)
); CREATE TABLE gives(
    user_id INT NOT NULL,
    review_id INT NOT NULL,
    -- PRIMARY KEY(user_id, review_id),
    FOREIGN KEY(user_id) REFERENCES user_login_details(user_id),
    FOREIGN KEY(review_id) REFERENCES review_details(review_id)
); CREATE TABLE business_details(
    business_id INT NOT NULL AUTO_INCREMENT,
    legal_name VARCHAR(500) NOT NULL,
    business_email_id VARCHAR(500) NOT NULL,
    business_category VARCHAR(500) NOT NULL,
    gst_no VARCHAR(500) NOT NULL,
    pan_no VARCHAR(500) NOT NULL,
    bank_deatils VARCHAR(500) NOT NULL,
    contact_no VARCHAR(500) NOT NULL,
    business_tagline VARCHAR(500) NOT NULL,
    business_password VARCHAR(500) NOT NULL,
    PRIMARY KEY(business_id),
    FOREIGN KEY(business_id) REFERENCES business_login_details(business_id),
    UNIQUE(legal_name),
    UNIQUE(business_email_id),
    UNIQUE(gst_no),
    UNIQUE(pan_no),
    UNIQUE(contact_no)
); CREATE TABLE user_details(
    user_id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(500) NOT NULL,
    last_name VARCHAR(500) NOT NULL,
    phone_no VARCHAR(500) NOT NULL,
    user_email_id VARCHAR(500) NOT NULL,
    user_password VARCHAR(500) NOT NULL,
    PRIMARY KEY(user_id),
    FOREIGN KEY(user_id) REFERENCES user_login_details(user_id),
    UNIQUE(phone_no),
    UNIQUE(user_email_id)
); CREATE TABLE admin_details(
    admin_id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(500) NOT NULL,
    last_name VARCHAR(500) NOT NULL,
    admin_email_id VARCHAR(500) NOT NULL,
    admin_password VARCHAR(500) NOT NULL,
    contact_no VARCHAR(500) NOT NULL,
    PRIMARY KEY(admin_id),
    FOREIGN KEY(admin_id) REFERENCES admin_login_details(admin_id),
    UNIQUE(admin_email_id),
    UNIQUE(contact_no)
); CREATE TABLE consist_of(
    product_id INT NOT NULL,
    business_id INT NOT NULL,
    PRIMARY KEY(product_id, business_id),
    FOREIGN KEY(product_id) REFERENCES product_details(product_id),
    FOREIGN KEY(business_id) REFERENCES business_details(business_id)
); CREATE TABLE has(
    review_id INT NOT NULL,
    business_id INT NOT NULL,
    -- PRIMARY KEY(review_id, business_id),
    FOREIGN KEY(review_id) REFERENCES review_details(review_id),
    FOREIGN KEY(business_id) REFERENCES business_details(business_id)
); CREATE TABLE business_details_business_address(
    business_address VARCHAR(500) NOT NULL,
    business_id INT NOT NULL,
    PRIMARY KEY(business_address, business_id),
    FOREIGN KEY(business_id) REFERENCES business_details(business_id)
);