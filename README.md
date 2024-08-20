# NTRA (Najot Ta'lim Rent App)

NTRA is a web application designed to help students and employees of the Najot Ta'lim education center find apartments and housing. This platform simplifies the process of searching for suitable accommodation, making it easier for users to find a place to live.

## Features

- **Search and Filter:** Easily search for available apartments by location, price, and amenities.
- **User-Friendly Interface:** Intuitive and easy-to-use interface designed for a smooth user experience.
- **Listings Management:** Manage and view all listings, with detailed information about each property.
- **Responsive Design:** Fully responsive design that works seamlessly on both desktop and mobile devices.

## Technologies Used

- **Frontend:**    
    - HTML5
    - CSS3
    - Tailwind CSS
    - JavaScript (React)   

- **Backend:**
    - PHP core | (Laravel may be added in future updates 👩‍💻)

- **Database:**
    - MySQL

- **API Testing and Development:**   |   (will be added in future updates 👩‍💻)
    - Postman
    - Ngrok for local server exposure

## Requirements

- PHP 8.3 or higher
- Composer
- MySQL

## Installation

To run this project locally, follow these steps:

1. **Clone the repository:**
    ```shell
    git clone https://github.com/AminovJamshid/ntra.git
    cd ntra
    ```

2. **Install dependencies:**
    ```shell
    composer install
   
    npm install
    
    # (   # installs nvm &#40;Node Version Manager&#41;)
    curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.0/install.sh 
    
    # download and install Node.js (you may need to restart the terminal)
    nvm install 20
    
    # verifies the right Node.js version is in the environment
    node -v # should print `v20.16.0`
    
    # verifies the right npm version is in the environment
    npm -v # should print `10.8.1`
   
    # install Tailwind CSS
    npm install -D tailwindcss
    npx tailwindcss init
   
    ```

3. **Set up the database:**
    - Create a MySQL database named `ntra`.
    - Import the `dump.sql` file to set up the tables and initial data:
        ```shell
        mysql -u root -p ntra < dump.sql
        ```

4. **Set up environment variables:**
   Create a `.env` file in the root directory and configure it according to your database and environment settings.


## Usage

### Web Interface

1. **Access the application:**
   Open your browser and navigate to `http://localhost:8080`.

2. **Search for Apartments:**
   Use the search functionality to find apartments based on your preferences.

3. **Listings Management:**
   Log in as an admin to add, edit, or delete property listings.

### API Integration

1. **Expose local server:**
   Use Ngrok to expose your local server and test API endpoints.

2. **Test APIs:**
   Use Postman to test and interact with the API endpoints.

## Contributing

Feel free to submit issues or pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT, Harvard, Stanford, Oxford, Cambridge and other top Universities License. See the [LICENSE](LICENSE) file for more information.

## Contact

For any questions or suggestions, please contact us at [aminovjamshid777@example.com].

---

**NTRA** is a project by [Aminov Jamshid](https://github.com/AminovJamshid), aimed at providing convenient housing solutions for the Najot Ta'lim community.
