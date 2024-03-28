
## DevCon 2024

This is a web application build using Laravel/Blade/Alpine.js for the upcoming Devcon 2024 in Mauritius 🏝️ 🇲🇺

## Table of Contents

- [DevCon 2024](#devcon-2024)
- [Table of Contents](#table-of-contents)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)

## Features
- 
- 
- 

## Installation

To run devcon2024 locally, follow these steps:

1. Clone this repository:

   ```bash
   git clone https://github.com/mscraftsman/devcon2024.git
   ```
2. Change to the project directory
    ```bash
    cd devcon2024
    ```
3. Install the project dependencies
    ```bash
    composer install
    npm install
    ```
4. Copy the .env.example file to .env and configure your environment variables, setup your mysql database and include your database settings and any other necessary configuration.
    ```bash
    cp .env.example .env
    ```
5. Generate an application key
    ```bash
    php artisan key:generate
    ```
6. Migrate the database
    ```bash
    php artisan migrate
    ```
7. Seed the database with sample data (optional):
    ```bash
    php artisan db:seed
    ```
8. Start the development server
    ```bash
    npm run dev
    ```
    
    ```bash
    php artisan serve
    ```

9. Access the application in your browser at http://localhost:8000

## Usage
- 
- 
- 

## Contributing
Contributions are welcome! If you'd like to contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bugfix: `git checkout -b feature-name`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to your fork: `git push origin feature-name`.
5. Create a pull request on the original repository.
