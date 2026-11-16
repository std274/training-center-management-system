# Training Center Management System

A web-based system developed using Laravel to manage training courses and student registrations.

## Project Features

### Course Management
- Create new courses.
- View all courses.
- Update course information.
- Delete courses.
- Display the number of students enrolled in each course.
- Prevent deleting courses that have registered students.

### Student Management
- Register new students.
- View all students.
- Update student information.
- Delete student records.
- Assign students to courses.
- Display each student's course.
- Paginate student records.

## Technologies Used
- PHP
- Laravel 12
- MySQL
- HTML
- CSS
- Blade Templates

## Database Relationships

- One Course can have many Students.
- Each Student belongs to one Course.

## Installation

1. Clone the repository:
   `git clone https://github.com/std274/training-center-management-system.git`

2. Install dependencies:
   `composer install`

3. Create the environment file:
   `cp .env.example .env`

4. Generate the application key:
   `php artisan key:generate`

5. Create a MySQL database named `training_center`.

6. Configure the database connection in the `.env` file.

7. Run database migrations:
   `php artisan migrate`

8. Start the Laravel server:
   `php artisan serve`

9. Open `http://127.0.0.1:8000` in your browser.

## Developer

**Mahmoud**

## Repository

https://github.com/std274/training-center-management-system
