# Pizza Project 

## 1. Project Overview
**Pizza** is a web system developed using **Laravel 11** and **MySQL**, aimed at managing online pizza orders. It features a user structure with three access levels:
- **Guest**: Limited access to information, can view products.
- **Logged-in User**: Access to additional features like adding items to the cart and placing orders.
- **Administrator**: Full system control, including management of categories, pizzas, and orders.

The system is responsive and adheres to dynamic design principles. It includes:
- Authentication
- CRUD for pizzas and categories
- Shopping cart functionality, and more.

The project is hosted and can be accessed at: **http://laraveldijaniraalfred.rf.gd/public/?i=1**

---

## 2. Project Structure and Configuration

### 2.1 Requirements to Execute the Project
To run the "Pizza" project locally, ensure you have:
- **PHP**: Version compatible with Laravel 11
- **MySQL**: For the database
- **Composer**: For PHP dependency management
- **Git**: (Optional) for version control

### 2.2 Initial Configuration
Follow these steps to set up the project:

1. **Clone the Project Repository**
   ```bash
   git clone https://github.com/DijaniraMuachifi/Pizza-laravel.git
   cd Pizza-laravel
   ```

2. **Install Dependencies**  
   Install Laravel dependencies:
   ```bash
   composer install
   ```

3. **Configure the `.env` File**  
   Create a `.env` file in the project root and set up database variables:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=Pizza
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seeders**  
   Create tables and populate initial data:
   ```bash
   php artisan migrate --seed
   ```

---

The rest of the documentation remains the same as previously formatted, with the hosting link now included in the overview section.
