# 🎅 Welcome to our Christmas Toy Factory! 🎄

This project aims to develop a platform to help Santa Claus and his elves manage the toy factory and organize the gift list for children during the Christmas season.

The application includes an intuitive and functional interface as well as an API that allows the elves to perform various essential tasks, such as managing toys.

With this system, Santa Claus will be able to ensure that each child receives the perfect gift, thus ensuring a magical Christmas.

❄️⛄ **Home View** ⛄❄️:

![Home](https://github.com/user-attachments/assets/6a0c0bf3-a662-4a73-a286-008151d171a5)

- It is the main welcome page which includes two tables with the counts of children and toys available. 
- There are 3 buttons that allow us to move to any view without any problem.
- It has an effect of snow moving up and down the page and a congratulatory text that moves from right to left in the footer.

❄️⛄ **Santa View** ⛄❄️:

![Santa](https://github.com/user-attachments/assets/86c4f55c-f74a-4bd2-bb77-4cfda4c71fef)

- The ‘Santa’ view includes a table listing all children who will receive gifts.
- Depending on the status of the child (good or bad) they will receive toys or coal.
- It includes a ‘show’ button to see all the information about the child and their gift.

    <img src="https://github.com/user-attachments/assets/0e94838b-4059-457d-9723-dbfa912f790d" alt="Show_Kid" width="75%">



❄️⛄ **Elves View** ⛄❄️:

![Elves](https://github.com/user-attachments/assets/52da31d1-99d1-4966-b3dc-238274e63d16)

- The ‘Elves’ view includes a table with a list of the gifts that the elves made.
- Each toy has a description and a recommended age range, which can be modified from the view.
- Each toy has a ‘show’ button to see more information about the toy.
  
   <img src="https://github.com/user-attachments/assets/4212c18b-8a81-4411-b04c-c45200f57d1a" alt="Show_Toy" width="75%">


## 🔎📝 Installation Requirements

In order to run this project locally, you need:

1. XAMPP (or any other local server that supports PHP and MySQL)

2. A modern web browser

3. VSC Terminal

4. Composer

5. Node.js (install npm)

6. xdebug (for tests coverage)

7. Postman (or any other platform to use for API)


## 🔧⚙️ Installation

1. Install project with git clone

```bash
  git clone https://github.com/issamchlf/Santa-claus-factory.git
``` 

2. Install composer:

```
composer install
``` 

3. Install NPM:

```
npm install
``` 

4. Create an ".env" by taking the example ".env.example" file and modify:

- DB_CONNECTION=mysql
- DB_DATABASE=chrismas_toy_factory

>[!IMPORTANT]
>You can create the database name as you wish, just remember to include that name in the ‘database’ in the ‘.env’ file and uncomment the paragraph.

5. Create a database in MySQL
- In the database manager “phpMyAdmin” of MySQL create only the database without tables.
- Generate the tables from the terminal and then run migrate to upload the changes to the database.

6. Migrate the tables:

```
php artisan migrate:fresh --seed
```

7. Run Locally:

-   Run NPM in one terminal.
```
npm run dev
```
-   Run Laravel in another terminal.
```
php artisan serve
```


## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)


To run the project tests, use the following command:

```
    php artisan test --coverage
```

- This project has a **81,5%** of test coverage.

![image](https://github.com/user-attachments/assets/11cf1200-71ff-4dab-a449-fbdc15188eb2)


You can also see the coverage in a web browser using:

```
  php artisan test --coverage-html=coverage-report
``` 

- A folder called coverage-report will also have been generated with **88.27%** coverage.

<img width="938" alt="Captura de pantalla 2025-01-14 123255 (2)" src="https://github.com/user-attachments/assets/6b51aa3b-40f9-427b-90f5-0f03e7670a2e" />


## 📊📁 DB Diagram
Below is a diagram of the database, showing different relationships between tables:

![image](https://github.com/user-attachments/assets/3adab154-2293-4162-9030-2d0f41e70002)

- **kids:** One to many relationship. One child can receive many toys.
- **toys** One to many relationship. One toy can receive several children.
- **toy - minimum_age:** One to many relationship. A minimum age can have many toys, but each toy belongs to only one minimum age.
- **kid_toy (pivot):** many to many relationship. The pivot table can receive as many children as toys.


## 📡🌐 API Endpoints
We have two tables: Kids and Toys you can create, edit, delete or read a toy or kid from Postman.

Santa is in charge of the list of children who receive presents and the elves are in charge of making the toys.

### 🔸 Api Santa 🎅

**GET**     (read all kids): 
```
http://127.0.0.1:8000/api/santa
```
**GET**     (read one kid): 
```
http://127.0.0.1:8000/api/santa/{id}
```
**POST**    (create a new kid): 
```
http://127.0.0.1:8000/api/santa
```
**PUT**     (edit one kid): 
```
http://127.0.0.1:8000/api/santa/{id}
```
**DELETE**  (delete an kid): 
```
http://127.0.0.1:8000/api/santa/{id}
```

### 🔸 Api elve 🧝

**GET** (read all toys):
```
http://127.0.0.1:8000/api/elve 
```
**GET** (read one toy):
```
http://127.0.0.1:8000/api/elve/{id}
```
**POST** (create a new toy):
```
http://127.0.0.1:8000/api/jobs/{id}/elve
```
**PUT** (edit one toy):
```
http://127.0.0.1:8000/api/elve{id}
```
**DELETE** (delete a toy):
```
http://127.0.0.1:8000/api/elve/{id}
```
>[!NOTE]
>"{id}" is the id number of a object.


## ▶️💻 Project structure

The project follows the structure of the MVC design pattern, which allows a better separation of responsibilities and facilitates the maintenance of the code. We also use a laravel 11 framework to help us develop in PHP.


## 🛠️🚀 Tech and tools

<a href='#777BB4' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=FFFFFF&labelColor=8892be&color=8892be'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='#4479A1' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=00758f&color=00758f'/></a>
<a href='#FF2D20' target="_blank"><img alt='LARAVEL' src='https://img.shields.io/badge/LARAVEL-100000?style=for-the-badge&logo=LARAVEL&logoColor=white&labelColor=F05340&color=F05340'/></a>
<a href='visual studio code' target="_blank"><img alt='VSC' src='https://img.shields.io/badge/VSC-100000?style=for-the-badge&logo=VSC&logoColor=white&labelColor=0277BD&color=0277BD'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=8f6447&color=8f6447'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='node.js' src='https://img.shields.io/badge/Node.js-100000?style=for-the-badge&logo=node.js&logoColor=white&labelColor=82cc27&color=82cc27'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='tailwindcss' src='https://img.shields.io/badge/tailwind-100000?style=for-the-badge&logo=tailwindcss&logoColor=FFFFFF&labelColor=06B6D4&color=06B6D4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='javascript' src='https://img.shields.io/badge/javascript-100000?style=for-the-badge&logo=javascript&logoColor=000000&labelColor=F7DF1E&color=F7DF1E'/></a>


## ✍️🙍 Authors

> Sprint 2

- [@Issam Chellaf](https://github.com/issamchlf)
- [Jonathan Torreblanca](https://github.com/Leonkeneddy86)
- [Matias Stadler](https://github.com/Matias-Stadler)
- [Jenifer Moyano](https://github.com/soyJenifer)
- [Fran Muñoz](https://github.com/Crudo7)
- [René Barco](https://github.com/mrene42)

> Sprint 1

- [Álvaro Cervera](https://github.com/Kalixto73a)
- [Miguel Ángel García](https://github.com/Mangel111111111)
- [Manuel Espinosa](https://github.com/Manusitox360)
- [Antonio Guillén](https://github.com/AntonioGuillen123)
- [Santino Vigna](https://github.com/SantiVigna)
