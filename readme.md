## Web Assignment 3 - Group 4

SENG 31313 Advanced Web Application Development

This project is a simple "Student management system" done by using Laravel framework

System Configuration Steps

- Clone the project by using GitHub Desktop or through command prompt/ or download the project zip file         manually
- After setting the terminal into the root folder, run the command "Composer install" in the command prompt     in oder to install all the required dependencies
- Inside this cloned or downloaded zip file, you can't find the .env file. So manually that has to be          created according to your Db configurations(In here we have included that in the root folder). By default     configurations in the given .env file is as follows
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=web_assignment3
    DB_USERNAME=root
    DB_PASSWORD=

- Create a database name as you wish(We have included the database dump with data, .sql file to the root        folder in here- Name as "web_assignment3") and create the tables by running the command "php artisan          migrate" in the commmand prompt


System Work Flow

- Main home page is there where it has all group members names spedified with their relevant student numbers,   each member is linked with their LinkedIn account
- Users first have to login to the system if they have not yet registered. So that they have to register        first, or else social media login facility is there where they can log into the system using their gmail      accounts
- There are two major roles in this system
    1. Normal User - They can enter their details, view
    2. Admin User - Admin User can view, delete, update student details and also admin can generate an Excel     sheet containing all the data in the database 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
