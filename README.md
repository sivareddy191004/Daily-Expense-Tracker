Daily Expense Tracker 💰

📌 Project Overview

This project is a web-based daily expense tracker built using HTML, CSS, JavaScript, PHP, and MySQL.It allows users to add, view, and delete daily expenses, helping them manage personal finances efficiently.

The project uses PHP for backend operations, MySQL for data storage, and JavaScript for client-side interactions.

🛠 Technologies Used

HTML, CSS, JavaScript – Frontend

PHP – Backend server-side scripting

MySQL – Database

XAMPP – Local development environment

🔄 Workflow Diagram

User (Web Browser)
        │
        ▼ [Add/View/Delete Expense]
        │
┌──────────────────────────┐
│ PHP Backend Scripts      │
└──────────────────────────┘
        │
        ▼ [MySQL Queries]
        │
  MySQL Database

🚀 Features

Add Expense – Save daily expenses with description and amount

View Expenses – Display all saved expenses

Delete Expense – Remove unwanted expense entries

Responsive UI – Works on desktop and mobile browsers

📂 Files Structure

index.php – Main dashboard for adding and viewing expenses

add_expense.php – Handles adding new expenses

delete_expense.php – Handles deleting expenses

db.php – Database connection script

style.css – Project styles

script.js – JavaScript functionalities

README.md – Project documentation

⚡ Advantages

Simple & Easy to Use – Minimal setup required

Resume-Worthy – Demonstrates full-stack web development skills

Data Management – Organizes daily expenses efficiently

Scalable – Can be extended to include categories, reports, or graphs

📖 Why This Project?

Helps users track personal expenses daily

Demonstrates PHP-MySQL integration

Shows ability to build a complete CRUD web application

Useful as a learning project for frontend and backend development

🛠 Installation & Setup

Install XAMPP and start Apache & MySQL

Clone the repository:

git clone https://github.com/your-username/your-repo-name.git

Move the project folder to C:\xampp\htdocs

Create a database in phpMyAdmin called daily_expense_db

Update database credentials in db.php if needed:

$host = "localhost";
$username = "root";
$password = ""; // XAMPP default
$dbname = "daily_expense_db";

Open in your browser:

http://localhost/daily-expense-tracker/