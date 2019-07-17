
## Run the application Locally

Make sure you have composer, xampp and git installed in your machine
Open Git Bash and copy and paste the following commands

- git clone https://github.com/mumo-dev/touch-point-web.git
- composer update
- cp .env.copy  .env
- php artisan key:generate


Open .env file and edit the variables to your local mysql db setting. Make sure you create the database first. Only change these environmental variables 
DB_DATABASE=database-name
DB_USERNAME=username
DB_PASSWORD=password

Run the following commands from the root path of your application
   - php artisan migrate
   - php artisan serve

The application should start at http://localhost:8000

Open that in your local browser

