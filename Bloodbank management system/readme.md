# Blood Bank Management System
=============================

A web-based application for managing blood donations, inventory, and recipient requests.

## Features
--------

* User registration and login system for donors, recipients, and administrators
* Blood donation registration and tracking
* Blood inventory management (storage, expiration, and availability)
* Recipient request management (matching and allocation)
* Reporting and analytics for blood stock, donations, and requests
* Secure and scalable architecture using PHP, MySQL, and HTML/CSS

## Technologies Used
-------------------

* Frontend: HTML, CSS, JavaScript
* Backend: PHP
* Database: MySQL
* Server: Apache

## Installation
------------

1. Clone the repository to your local machine
2. Create a MySQL database and import the `bloodbank.sql` file
3. Update the `config.php` file with your database credentials
4. Upload the files to your web server
5. Access the application through a web browser

## Configuration
---------------

* `config.php`: Update with your database credentials and server settings
* `styles.css`: Customize the application's visual styling
* `script.js`: Add custom JavaScript functionality

## Database Schema
-----------------

The database schema is included in the `bloodbank.sql` file. The schema consists of the following tables:

* `users`: Donors, recipients, and administrators
* `donations`: Blood donation records
* `inventory`: Blood inventory levels
* `requests`: Recipient requests
* `allocations`: Blood allocation records

## Contributing
------------

Contributions are welcome! Please fork the repository, make your changes, and submit a pull request.

## License
-------

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Authors
-------

* [Your Name]
* [Your Institution/Company]

## Acknowledgments
---------------

* [List any third-party libraries or resources used]
