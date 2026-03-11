# 📚 Your Solutions

**Your Solutions** is a student resource portal designed to help students easily access academic materials for different semesters and subjects.  
The platform allows students to log in and browse **semester-wise resources**, including subject materials, chapter PDFs, previous year question papers, and syllabus.

This project was developed as a **learning project** to practice web development and resource organization for students.

---

# 🚀 Features

- 🔐 Student Login System
- 📚 Semester-wise navigation (6 semesters)
- 📖 Subject list under each semester
- 📄 Chapter-wise study material (PDF)
- 📝 Previous year question papers
- 📑 Subject syllabus access
- 📂 Organized resource structure

---

# 🛠️ Technologies Used

| Technology | Purpose |
|------------|---------|
| HTML | Structure |
| CSS | Styling |
| PHP | Backend logic |
| MySQL | Database |
| XAMPP | Local development server |

---

---

# 🧭 How the System Works

1️⃣ Student logs into the portal.  
2️⃣ Homepage displays **6 semesters**.  
3️⃣ Selecting a semester shows **list of subjects**.  
4️⃣ Selecting a subject shows **chapters and resources**.  
5️⃣ Clicking a chapter opens the **PDF study material**.  
6️⃣ Students can also access **previous year question papers and syllabus**.

---

# ⚙️ Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-solutions.git
```

### 2. Move the Project

Place the folder inside:

```
xampp/htdocs/
```

Example:

```
xampp/htdocs/your-solutions
```

### 3. Start XAMPP

Start the following services:

- Apache
- MySQL

### 4. Create Database

Open:

```
http://localhost/phpmyadmin
```

Create a database (example):

```
your_solutions
```

### 5. Configure Database

Edit `db.php`:

```php
$conn = mysqli_connect("localhost","root","","your_solutions");
```

### 6. Run the Project

Open in browser:

```
http://localhost/your-solutions
```

---

# 🎯 Purpose of the Project

This project was created to:

- Help students access study resources easily
- Practice **PHP and MySQL web development**
- Understand **structured navigation for educational platforms**

---

# 🔮 Future Improvements

- Admin panel for uploading resources
- Search functionality for subjects and chapters
- Mobile responsive design
- Cloud storage integration
- User role management

---

# 👨‍💻 Author

Developed by **Diya Shah & Kripa Pattiwala**

GitHub: https://github.com/diya2405


