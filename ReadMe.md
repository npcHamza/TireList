### TireList PHP Application (with PWA)

---

#### Project Overview
**TireList** is a PHP-based application designed to manage tire stock for a business. The application allows users to add, view, and update tire sizes in stock. It features a simple interface built with Bootstrap for responsive design and has Progressive Web App (PWA) capabilities for offline access and a better user experience on mobile devices.

---

### Features

1. **Add Tire Sizes**: Users can select from a predefined list of tire sizes and add them to the stock.
2. **View Stock**: A table displays all tire sizes currently in stock along with their quantities.
3. **Adjust Stock Quantities**: Users can increase or decrease the stock quantity for each tire size.
4. **Error Handling**: Ensures that the same tire size cannot be added multiple times. Provides feedback for success and error events.
5. **Progressive Web App (PWA)**: Can be installed as an app on mobile devices for faster access. Supports offline usage thanks to Service Workers.
6. **Responsive Design**: Built using Bootstrap to ensure the application is usable on various screen sizes.

---

### Installation and Setup

#### 1. Clone the Repository
To get started with TireList, first clone the repository to your local machine or server:
```bash
git clone https://github.com/npcHamza/TireList.git

```

#### 2. Set up the Database
Create a MySQL database named `lastik` and run the following SQL query to create the `lastikler` table:

```sql
CREATE DATABASE lastik;

USE lastik;

CREATE TABLE lastikler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ebat VARCHAR(20) NOT NULL,
    miktar INT DEFAULT 1,
    tarih TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### 3. Configure Database Connection
Open the **PHP** file and update the database connection details to match your environment. The relevant section can be found around the following lines:
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lastik";
```

#### 4. Install Dependencies
Ensure that **PHP**, **MySQL**, and **Apache** (or any preferred web server) are installed. For the front-end, the project uses Bootstrap 5, and the dependencies are already included in the project.

#### 5. Serve the Application
Host the project using a local or remote web server (such as Apache or Nginx). You can test locally with `localhost` by placing the project in the web root (e.g., `htdocs` or `www`).

---

### How to Use

1. **Select a Tire Size**: From the dropdown list on the homepage, select the tire size you wish to add to the stock and click **Ekle**.
2. **View Tire List**: Below the form, the current tire stock is displayed in a table with the tire size and quantity.
3. **Adjust Quantities**: Use the `+` and `-` buttons next to each tire size in the list to increase or decrease the quantity of that size in stock.
4. **Error Handling**: If you try to add a tire size that already exists in the database, an error message will be displayed to notify you.
   
---

### Progressive Web App (PWA)

This project includes basic PWA functionality, allowing users to install it on their devices and use it offline.

#### Key PWA Features:
1. **Service Worker**: A `sw.js` file handles caching, making the application accessible offline.
2. **Manifest File**: The `manifest.webmanifest` provides the necessary configuration to enable installation as a web app on mobile devices.

#### PWA Setup:
- The PWA is automatically registered via the following JavaScript code:
```javascript
if ('serviceWorker' in navigator) {
    navigator.serviceWorker
    .register('sw.js')
    .then(() => { console.log('Service Worker Registered'); });
}
```

#### Offline Access:
- When installed as a PWA, users can access the application even if they are not connected to the internet, and it will load the cached version.
  
---

### File Structure

- **index.php**: Main PHP file that handles adding and listing tire stock.
- **manifest.webmanifest**: Manifest file for the PWA configuration (name, icons, start URL, etc.).
- **sw.js**: Service Worker script to enable offline functionality and caching.
- **bootstrap.min.css**: Stylesheet from Bootstrap for responsive design.

---

### Requirements

- **PHP** 7.4+
- **MySQL** or **MariaDB**
- **Apache** or **Nginx** Web Server
- **Bootstrap** for frontend styling
- **Service Worker** for PWA capabilities

---

### Future Enhancements

- Add user authentication to restrict stock management to authorized personnel.
- Include more detailed stock management features, such as tracking supplier details, stock-in dates, and more.
- Implement search functionality for faster access to specific tire sizes.
  
---

### Credits
This project uses:
- **Bootstrap 5** for styling.
- **PWA** standards for offline functionality.

---

With this setup, the **TireList** application will allow for seamless management of tire stock and can be accessed offline on various devices through PWA capabilities.
