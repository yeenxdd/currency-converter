# 💱 Currency Converter Web Application

## Table of Contents
- [📖 Introduction](#introduction)
- [✨ Features](#features)
- [💻 Technologies Used](#technologies-used)
- [⚙️ Installation](#installation)
- [🚀 Usage](#usage)
- [🔌 API Endpoints](#api-endpoints)
- [🤝 Contributing](#contributing)
- [📄 License](#license)

## 📖 Introduction
The Currency Converter Web Application allows users to convert currency amounts based on a manually entered conversion rate. It provides a simple interface for users to input an amount and conversion rate, and it displays the converted amount dynamically. The application also saves the most recent conversion rate for future use.

## ✨ Features
- 📝 Web form for currency conversion.
- 🔄 Dynamic display of converted amount without page refresh.
- ✅ Input validation for numeric values.
- 💾 Persistent storage of the most recent conversion rate using MySQL.
- 🎨 Responsive design using TailwindCSS.

## 💻 Technologies Used
- 🐘 PHP
- 🌐 Laravel
- 🗄️ MySQL
- 🖥️ HTML
- 🌟 JavaScript
- 🖌️ TailwindCSS

## ⚙️ Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/currency-converter.git
    cd currency-converter
    ```
2. Install dependencies:
    ```bash
    composer install
    npm install
    npm run dev
    ```
3. Set up the environment:
    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Update the `.env` file with your database credentials.
    - Generate an application key:
        ```bash
        php artisan key:generate
        ```
4. Run database migrations:
    ```bash
    php artisan migrate
    ```
5. Start the development server:
    ```bash
    php artisan serve
    ```

## 🚀 Usage
1. Access the application at `http://localhost:8000`.
2. Enter an amount and a conversion rate.
3. Submit the form to see the converted amount displayed dynamically.
4. The most recent conversion rate will be saved for future use.

## 🔌 API Endpoints
- `GET /`: Display the conversion form.
- `POST /convert`: Convert the currency amount based on the provided conversion rate.

## 🤝 Contributing
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a pull request.
