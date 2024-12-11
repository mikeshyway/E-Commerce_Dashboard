# MICSON - Footwear E-Commerce Website 👟

Welcome to the **MICSON** repository! 🎉 MICSON is a comprehensive footwear e-commerce platform offering a seamless shopping experience for both users and administrators. This website is designed with a sleek **user interface (UI)** for customers and a powerful **admin dashboard** to manage the platform effectively. Below, we’ll break down every function and feature implemented in this project, ensuring a complete understanding for newcomers and contributors.

[![Watch the video](https://img.youtube.com/vi/ii6_VkVIilk/maxresdefault.jpg)](https://youtu.be/ii6_VkVIilk)

### [Watch this video on YouTube](https://youtu.be/ii6_VkVIilk)

---

## ✨ Features At A Glance

### 👤 User Interface:
- **🔐 Authentication System**:
  - Functions: `registerUser()`, `loginUser()`, `logoutUser()`.
  - **Purpose**: To securely manage user accounts and sessions.
  - **How It Works**: 
    - `registerUser()`: Validates input fields, checks for duplicate accounts in the database.
    <!-- - `registerUser()`: Validates input fields, checks for duplicate accounts in the database, and securely hashes passwords using `password_hash()` in PHP. -->
    - `loginUser()`: Matches credentials against the database using prepared SQL statements to prevent SQL injection.
    - `logoutUser()`: Ends the user session and clears cookies to maintain security.

- **🛒 Product Browsing**:
  - Functions: `fetchProductsByCategory()`.
  <!-- - Functions: `fetchProductsByCategory()`, `applyFilters()`, `searchProducts()`. -->
  - **Purpose**: To display products dynamically and allow users to filter by categories such as sneakers, sandals, and basketball shoes.
  - **How It Works**:
    - `fetchProductsByCategory()`: Queries the database for products based on the selected category and renders them in a grid layout.
<!--    - `applyFilters()`: Implements additional filters (e.g., price range, brand) via AJAX for real-time updates.
    - `searchProducts()`: Provides a search bar powered by SQL `LIKE` queries to retrieve relevant results. 

- **📏 Interactive Size Charts**:
  - Functions: `generateSizeChart()`.
  - **Purpose**: To assist users in selecting the correct shoe size.
  - **How It Works**: The size chart is dynamically generated based on user inputs, providing accurate references for different demographics. 

- **🔥 Trending Labels**:
  - Functions: `fetchTrendingProducts()`, `labelProducts()`.
  - **Purpose**: Highlight popular products as trending, new arrivals, or sales items.
  - **How It Works**:
    - `fetchTrendingProducts()`: Identifies products with high sales or views.
    - `labelProducts()`: Assigns labels to products using a custom database column. -->

- **📏 Interactive Size Charts**:
  - Functions: `generateSizeChart()`.
  - **Purpose**: To assist users in selecting the correct shoe size.
  - **How It Works**: The size chart is referenced from online certified footwear measurements in 2024 globally, providing accurate references for different demographics. 

**🔥 Trending, New Arrivals & Sales Labels**:
  - Functions: `fetchTrendingProducts()`, `labelProducts()`.
  - **Purpose**: Highlight popular products as trending, new arrivals, or sales items.
  - **How It Works**:
    - `labelProducts()`: Assigns labels to products using a custom database column. 

- **💳 Cart & Checkout**:
  - Functions: `addToCart()`, `updateCart()`, `processCheckout()`.
  - **Purpose**: To enable users to manage their cart and securely process payments.
  - **How It Works**:
    - `addToCart()`: Adds products to the cart and stores the data in a session.
    - `updateCart()`: Adjusts quantities or removes items via AJAX.
    - `processCheckout()`: Integrates payment gateway APIs for secure transactions.

- **🚚 Order Tracking**:
  - Functions: `getOrderHistory()`, `trackOrder()`.
  - **Purpose**: Allow users to view order history and track shipping statuses.
  - **How It Works**:
    - `getOrderHistory()`: Fetches orders linked to the user ID.
    - `trackOrder()`: Displays real-time status updates using API calls to logistics providers.

### 🛠️ Admin Dashboard:
- **📂 Category Management**:
  - Functions: `addCategory()`, `editCategory()`, `deleteCategory()`.
  - **Purpose**: To dynamically manage product categories.
  - **How It Works**:
    - `addCategory()`: Inserts new categories into the database with validation.
    - `editCategory()`: Updates category details such as name and visibility.
    - `deleteCategory()`: Marks categories as inactive to preserve data integrity.

- **🛍️ Product Management**:
  - Functions: `addProduct()`, `editProduct()`, `deleteProduct()`.
  - **Purpose**: To manage products, including assigning labels and updating stock.
  - **How It Works**:
    - `addProduct()`: Saves product details (e.g., images, price, description) in the database.
    - `editProduct()`: Updates existing product information via a modal form.
    - `deleteProduct()`: Soft deletes products to avoid breaking existing orders.

- **📦 Order Management**:
  - Functions: `updateOrderStatus()`.
  - **Purpose**: To update order statuses and keep users informed.
  - **How It Works**: Changes statuses (e.g., completed, canceled) with email notifications sent via `sendOrderUpdateEmail()`.

- **👥 User Management**:
  - Functions: `fetchAllUsers()`, `manageUserRoles()`.
  - **Purpose**: To manage user data securely.
  - **How It Works**:
    - `fetchAllUsers()`: Retrieves user information for admin review.
    - `manageUserRoles()`: Assigns or revokes admin roles based on access levels.

---

## 🚀 Technologies Used

### Backend:
- **MariaDB (via XAMPP)**: Manages all platform data, including products, users, and orders.
- **PHP (Hypertext Preprocessor)**: Handles server-side logic, like session management and database interactions.

### Frontend:
- **HTML/CSS**: Provides structure and design.
- **JavaScript (JS)**: Powers interactivity (e.g., AJAX-based updates).
- **Bootstrap 5**: Ensures responsive design across devices.

### Development Methodology:
- **Rapid Application Development (RAD)**:
  - **Requirement Planning**: Diagram workflows and identify requirements.
  - **User Design**: Prototypes tested for optimal UI/UX.
  - **Construction**: Efficiently developed using modular functions and modern frameworks.
  - **Cutover**: Comprehensive system testing and final deployment.

---

## 🛠️ How It Works

### 🛍️ For Users:
1. **Register/Login** to access the platform.
2. **Browse Products** using categories and filters.
3. **View Product Details**, including prices and size guides.
4. **Add to Cart**, adjust quantities, and complete checkout securely.
5. **Track Orders** with real-time updates.

### 🛠️ For Admins:
1. Manage **categories**, **products**, and **orders** using a dashboard.
2. Add or edit categories and products in real time.
3. Monitor orders and update statuses with user notifications.

---

## 🏆 Special Thanks
Developed with ❤️ by:
- **Lau Jia Wei (@milkeshyway)**
- **Janson Then Ye Herng (JansonThen)**

Supervised by:
- **Ms. Chik Soon Wai**

---

🎉 **Happy Coding!**
