Certainly! Here’s the updated README file with instructions for installing the project using Laravel Sail:

---

# Movie App

Welcome to the Movie App repository! This project is a Laravel-based web application that consumes a movie and series database API and displays information to users.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Movie App is designed to provide users with a seamless experience to browse and search for movies and series. It leverages the power of the Laravel framework to handle backend operations and integrates with an external API to fetch and display movie data.

## Features

- Browse a comprehensive list of movies and series.
- Search functionality to find specific movies or series.
- Detailed view for each movie/series including description, release date, and rating.
- Responsive design to ensure a great user experience on all devices.

## Installation

You can set up the project either using traditional methods or Laravel Sail.

### Traditional Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/movie-app.git
   cd movie-app
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Copy the `.env.example` file to `.env` and configure your environment variables:**
   ```bash
   cp .env.example .env
   ```

4. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run the migrations:**
   ```bash
   php artisan migrate
   ```

6. **Start the development server:**
   ```bash
   php artisan serve
   ```

### Installation Using Laravel Sail

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/movie-app.git
   cd movie-app
   ```

2. **Install Sail and Docker dependencies:**
   ```bash
   composer require laravel/sail --dev
   php artisan sail:install
   ```

3. **Build the Sail Docker containers:**
   ```bash
   ./vendor/bin/sail build
   ```

4. **Start the Sail Docker containers:**
   ```bash
   ./vendor/bin/sail up
   ```

5. **Run the migrations:**
   ```bash
   ./vendor/bin/sail php artisan migrate
   ```

6. **Access the application in your browser:**
   The application will be available at `http://localhost`.

## Configuration

To configure the application, you need to set up your `.env` file. The most important variables are:

- `DB_CONNECTION`: Database connection type (e.g., mysql).
- `DB_HOST`: Database host.
- `DB_PORT`: Database port.
- `DB_DATABASE`: Database name.
- `DB_USERNAME`: Database username.
- `DB_PASSWORD`: Database password.
- `API_KEY`: API key for the movie database.

Make sure to replace placeholders with your actual configuration details.

## Usage

Once the application is up and running, you can access it in your web browser at `http://localhost`. You can browse through the movies and series, use the search functionality, and view detailed information about each entry.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
