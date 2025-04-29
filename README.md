## 📚 Book Management System

A simple web-based application for managing books, built with PHP and MySQL.

### 🚀 Features

- Add new books
- View all books
- Update book details
- Delete books
- Search for books

### 🛠️ Technologies Used

- PHP
- MySQL
- HTML/CSS
- Bootstrap (optional for styling)

### 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/book-management-php.git
   cd book-management-php
   ```

2. **Set up the database**
   - Create a MySQL database (e.g., `book_db`)
   - Import the SQL file provided:
     ```sql
     CREATE TABLE books (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       author VARCHAR(255) NOT NULL,
       genre VARCHAR(100),
       year INT
     );
     ```

3. **Configure the database connection**
   - Open `config.php` and set your DB credentials:
     ```php
     <?php
     $conn = new mysqli("localhost", "root", "", "book_db");
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

4. **Run the project**
   - Use XAMPP, WAMP, or any local server.
   - Place the project folder in `htdocs` (for XAMPP).
   - Visit: `http://localhost/students/`


<p>
    <img src="https://github.com/user-attachments/assets/5f7175a8-e011-4268-a4fb-efda98520342"height="35%" width="200%">
  <img src="https://github.com/user-attachments/assets/31d83486-a7ea-441e-bfd1-06279f20ba60"height="35%" width="200%">
  </p>


https://github.com/user-attachments/assets/d9517d9a-fd2e-4226-96e0-47afb55fa3dc

