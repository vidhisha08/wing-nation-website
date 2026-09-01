# wing-nation-website
Overview

WingNation is a chicken wing restaurant website developed as a
group project for the Introduction to Web and Database Technology
module at the University of Limerick.

The project combines front-end web development with PHP and MySQL
database functionality to create an interactive restaurant website. The
website includes information about the restaurant, its menu and
locations, as well as a customer review system connected to a relational
database.

Technologies Used

* HTML -- Website structure and content
* CSS -- Website styling and layout
* PHP -- Server-side functionality and database interaction
* MySQL / SQL -- Database creation, management and queries
* phpMyAdmin -- Database administration and testing

Website Features

* Restaurant homepage
* Menu page
* Restaurant locations and contact information
* Customer review submission
* Interactive display of customer reviews
* Database integration using PHP and MySQL
* Relational database containing customers, locations, menu items and
  reviews

My Contribution

This was a collaborative group project. My main contribution focused on
compiling and integrating the code developed by the group members
and helping ensure that the different components of the website worked
together correctly.

I worked with HTML, CSS, PHP and database functionality, including
the review system. I helped implement the functionality that connected
the website to the database so that customer review information such as
the name, rating and location could be submitted, stored and displayed
in the reviews section.

I also worked with the group to identify and resolve issues that arose
when integrating the different sections of the website and contributed
to the preparation of the final project presentation.

Review System

Adding a Review

When a customer submits a review, they enter information such as their name, rating, message and location through the review form. The form sends the submitted data to 'add_review.php', where PHP processes the information and connects to the 'wingnation' database using the database connection file.

The PHP code then uses an SQL INSERT statement to add the submitted review information to the reviews table.

Displaying Reviews

The 'reviews.php' page retrieves the stored reviews from the database using a SQL SELECT query. PHP processes the results returned by the database and dynamically generates the review section of the webpage.

This means that when a new review is successfully submitted, it is stored in the database and can then be retrieved and displayed on the reviews page without manually editing the HTML.
