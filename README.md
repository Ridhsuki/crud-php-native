# PHP Native CRUD - Siswa

## 📚 Project Description
This is a simple CRUD application made with PHP Native. The project helps you manage student data with basic operations: Create, Read, Update, and Delete. It also includes a search feature and an API for data integration with other applications.

**Main Features:**
- **CRUD**: Add, view, update, and delete student data.
- **Search**: Search for student data by name or other details.
- **API**: Provides an API to fetch student data for integration.
- **Integration**: Shows how to get data from the API on another page.

This project is an archive of my learning process and personal PHP practice.

---

## 🌐 Demo

You can try this application live by visiting [basukiridhoo.kesug.com/belajar-native/index.php](https://basukiridhoo.kesug.com/belajar-native/index.php).

---

## 📷 Screenshots

<div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; align-items: center;" align="center">
    <img src="https://res.cloudinary.com/dv8jmnzaf/image/upload/v1744949535/Screenshot_302_lmqbkf.png" width="400" alt="Main Index Page Screenshot">
    <img src="https://res.cloudinary.com/dv8jmnzaf/image/upload/v1744949535/Screenshot_303_iiniab.png" width="400" alt="Create New Student Screenshot">
    <img src="https://res.cloudinary.com/dv8jmnzaf/image/upload/v1744949536/Screenshot_304_bziwo9.png" width="400" alt="Edit Student Screenshot">
    <img src="https://res.cloudinary.com/dv8jmnzaf/image/upload/v1744949536/Screenshot_305_wd8ncl.png" width="400" alt="Delete Alert Screenshot">
    <a href="https://basukiridhoo.kesug.com/belajar-native/api/v1.php" target="_blank">
       <img src="https://res.cloudinary.com/dv8jmnzaf/image/upload/v1744949535/Screenshot_300_pfcisn.png" width="400" alt="API JSON Screenshot">
    </a>
   <a href="https://basukiridhoo.kesug.com/belajar-native/integrasi/index.php" target="_blank">
      <img src="https://res.cloudinary.com/dv8jmnzaf/image/upload/v1744949535/Screenshot_301_v23imh.png" width="400" alt="Integration Page Screenshot">
   </a>
</div>

---

## 🛠️ Technologies Used

- **PHP** (Native)
- **MySQL** (for the database)
- **HTML, CSS, Bootstrap** (for the frontend)
- **API** (for data integration)

---
## 🚀 How to Run This Project

Follow these steps to get the project running on your local machine:

### 1. Clone the Repository

First, clone this repository to your local machine using Git. Run this command in your terminal or Git Bash:

```bash
git clone https://github.com/Ridhsuki/crud-php-native.git
```

### 2. Start Local Server

You can use **XAMPP** or **Laragon** to run a local server.

#### Using XAMPP:
- Open **XAMPP** and start the **Apache** and **MySQL** services.
- Make sure Apache is running on port `80` and MySQL is running on port `3306`.

#### Using Laragon:
- Open **Laragon** and click **Start All** to start Apache/Nginx and MySQL.

### 3. Import Database

The database file is located inside the <a href="https://github.com/Ridhsuki/crud-php-native/tree/main/database"> `database`</a> folder in this repository. To import the database:

#### Using phpMyAdmin (XAMPP or Laragon):
1. Open your browser and go to <a href="http://localhost/phpmyadmin">`http://localhost/phpmyadmin`</a>.
2. Create a new database (e.g., `db_native`).
3. Select the new database, then go to the **Import** tab.
4. Click **Choose File**, find and select `db_native.sql` from the `database` folder in the repository.
5. Click **Go/Import** to import the database.

### 4. Configure Database Connection

Make sure the database connection is set up properly. Open the file <a href="https://github.com/Ridhsuki/crud-php-native/blob/main/connect.php">`connect.php`</a>, and make sure the database settings are correct:

```php
$host = 'localhost';
$user = 'root';       // default MySQL username
$pw = '';             // default MySQL password (empty)
$db = 'db_native';    // database name
```

### 5. Run the Project

Now, you're ready to run the project!
1. Open your terminal in the project folder.
2. Run the following command:

   ```bash
   php -S localhost:8000
   ```
3. Open your browser and go to:
   ```bash
   http://localhost:8000
   ```
This will start the local web server and you can view the project in your browser.

---

## 💬 Find Me on Social Media

If you want to connect or follow my other projects, here are my social media profiles:

[Instagram](https://www.instagram.com/basukiridhoal/) | [Tiktok](https://www.tiktok.com/@ritsuchi_dev) | [Facebook](https://www.facebook.com/basuki.ridho.921/) | [LinkedIn](https://www.linkedin.com/in/basuki-ridho)  
[Threads](https://www.threads.net/@basukiridhoal) | [GitHub](https://github.com/Ridhsuki/) | [BlueSky](https://bsky.app/profile/ridhsuki.bsky.social) | [YouTube](https://www.youtube.com/@basukiridhoal)  
[Website](https://ridhsuki.my.id/)
