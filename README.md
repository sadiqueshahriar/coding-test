## Laravel API Project (Coding Test) ##
This repository contains the implementation of three tasks using Laravel:

* Blog Post CRUD API
* User Registration API
* Task Management API
* Requirements
 Before running this project, ensure you have the following installed:

## PHP (>= 8.0) ##
Composer
MySQL (or any supported database)
Laravel (installed globally or using Composer)
Postman (or any API testing tool)
Setup Instructions
Step 1: Clone the Repository
Clone this repository to your local machine:



git clone https://github.com/sadiqueshahriar/test.git
cd coding-test
Step 2: Install Dependencies
Install Laravel dependencies using Composer:



composer install
Step 3: Configure Environment
Copy the .env.example file and configure the environment:


cp .env.example .env
Update the .env file with your database credentials:

dotenv

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
Step 4: Run Migrations
Run the database migrations to set up the required tables:



php artisan migrate
Step 5: Run the Development Server
Start the Laravel development server:



php artisan serve
The server will start at http://127.0.0.1:8000.

API Endpoints
Task 1: Blog Post CRUD API
Create a Post
POST /api/posts
Body:

json

{
    "title": "My First Post",
    "content": "This is my content."
}
Response:

json

{
    "id": 1,
    "title": "My First Post",
    "content": "This is my content.",
    "created_at": "2024-12-18T10:00:00Z"
}
List All Posts
GET /api/posts

View a Single Post
GET /api/posts/{id}

Task 2: User Registration API
Register a User
POST /api/register
Body:
json

{
    "name": "Jane Doe",
    "email": "jane@example.com",
    "password": "password123"
}
Response:
json

{
    "id": 1,
    "name": "Jane Doe",
    "email": "jane@example.com",
    "created_at": "2024-12-18T10:00:00Z"
}
Task 3: Task Management API
Add a Task
POST /api/tasks
Body:

json

{
    "title": "Finish Laravel test"
}
Response:

json

{
    "id": 1,
    "title": "Finish Laravel test",
    "is_completed": false,
    "created_at": "2024-12-18T10:00:00Z"
}
Mark Task as Completed
PATCH /api/tasks/{id}
Body:

json

{
    "is_completed": true
}
Get Pending Tasks
GET /api/tasks

Testing APIs
Use Postman or any other API testing tool to test the endpoints. Ensure the following headers are set:

Content-Type: application/json
Accept: application/json
Additional Commands
To clear the application cache:


php artisan cache:clear
To refresh migrations (drops all tables and re-runs migrations):


php artisan migrate:refresh
Notes
Ensure your local environment meets Laravel's requirements.
For production, ensure the .env file has proper configuration, especially for database and app keys.
