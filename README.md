<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Shayna API
CMS and back-end of [Shayna](https://github.com/faizaaulia/shayna "Shayna") App using [Laravel](https://laravel.com/ "Laravel"), that help the online shop Admin to manage their products. This app provide API for the front-end app, with API documentation link in the end of this readme

## Installation
1. Clone this repository `git clone https://github.com/faizaaulia/shayna-api.git` or download the zipped source code
2. Move into the project directory <br>
`cd shayna-api`
3. Install composer dependencies <br>
`composer install`
4. Set the .env file <br>
`cp .env.example .env`
5. Generate an app encryption key <br>
`php artisan key:generate`
6. Create an empty database for our application
7. Add database information in **.env** file <br>
Fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the credentials of the database you just created
8. Migrate the database <br>
`php artisan migrate`
9. Database seeding <br>
This will seed the database with dummy (admin user) data for login <br>
`php artisan db:seed`
10. Make symbolic link to make files in the storage accessible from the web <br>
`php artisan storage:link`

## Screenshots
- Dashboard page
![dashboard](https://user-images.githubusercontent.com/21327758/117667535-2ad6d100-b1cf-11eb-87d5-377347519432.jpg)
- Add product page
![add-product](https://user-images.githubusercontent.com/21327758/117668909-940b1400-b1d0-11eb-98a5-336e5c8bb8a4.jpg)
- Edit product page
![edit-product](https://user-images.githubusercontent.com/21327758/117669534-31664800-b1d1-11eb-9203-61cd190c5140.jpg)
- Add product's photo
![add-photo](https://user-images.githubusercontent.com/21327758/117669775-77231080-b1d1-11eb-92ed-59efb1d1b24c.jpg)
- Products' photo
![gallery](https://user-images.githubusercontent.com/21327758/117670982-91a9b980-b1d2-11eb-9625-bd76a5349e39.jpg)
- Products page
![products](https://user-images.githubusercontent.com/21327758/117671424-f9f89b00-b1d2-11eb-9f57-41fbaecfdbf6.jpg)
- Transactions page
![transactions](https://user-images.githubusercontent.com/21327758/117672177-ccf8b800-b1d3-11eb-9e46-d4e286172e54.jpg)
> For now, admin have to **check the transactions manually**, whether the customer has paid the order or not. In the next development **it can be added with payment gateway**, so when the order has paid then admin can process the order immediatly

## API Documentation
[Postman API documentation](https://documenter.getpostman.com/view/5188042/SztEaSvM#d641c306-64aa-4efa-a18d-bf351d5891f7 "Postman API documentation")