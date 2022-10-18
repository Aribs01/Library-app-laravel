# Library App Using Laravel

Library-like application with jwt authentication for users and admins. 
### ADMINS CAN

- admin login
- manage books 
	- add,
	- remove, 
	- update, 
	- accept book request

### USERS CAN

- user login
- see all books
- see books you have applied for

### 1. Clone the repo for this project locally

**Note!** Make sure you have git installed locally on your computer first. Find a location on your PC where you want to store the project. You can change the name of the folder to be created locally, by changing the last part of the code snippet below to match the name you want your folder to be called.

### 2. cd into the project
You will need to be inside the project folder to enter all of the rest of the commands in this guide.

### 3. Install Dependencies USING Composer
You must now install all of the project dependencies.

`composer install`

### 4. Create a copy of the .env file
Create a copy of the **.env.example** file in the project and name the copy simply **.env**.

`cp .env.example .env`

### 5. Generate an app encryption key
Make sure that you have already created an **.env** file before doing this.

`php artisan key:generate`

### 6. Create an empty database for our application
Create an empty database for the project using the database tools you prefer.

### 7. In the .env file, add database information
In the .env file fill in the **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME**, and **DB_PASSWORD** options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

### 8. Migrate the database
Once your credentials are in the .env file, now you can migrate your database.

`php artisan migrate`

### 9. Run Application
Once everything is in place and database is running run 

`php artisan serve` to start the application on your localhost port 8000