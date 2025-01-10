# 🎅 Welcome to our Christmas Toy Factory! 🎄

This project aims to develop a platform to help Santa Claus and his elves manage the toy factory and organize the gift list for children during the Christmas season.

The application includes an intuitive and functional interface as well as an API that allows the elves to perform various essential tasks, such as managing toys.

With this system, Santa Claus will be able to ensure that each child receives the perfect gift, thus ensuring a magical Christmas.
- **Index View**:

![Home](https://github.com/user-attachments/assets/6a0c0bf3-a662-4a73-a286-008151d171a5)

- **Table Santa View**:

![Santa](https://github.com/user-attachments/assets/86c4f55c-f74a-4bd2-bb77-4cfda4c71fef)


- **Table Elves View**:

![Elves](https://github.com/user-attachments/assets/52da31d1-99d1-4966-b3dc-238274e63d16)

- **Show Kid**:

  ![Show_Kid](https://github.com/user-attachments/assets/0e94838b-4059-457d-9723-dbfa912f790d)

- **Show toy**:
  
  ![Show_Toy](https://github.com/user-attachments/assets/4212c18b-8a81-4411-b04c-c45200f57d1a)

## 🛠️🚀 Tech Stack
- **Languages:** Html, Blade
- **Frameworks:** Laravel, TailwindCSS
- **Server:** Xampp, Apache, Nodejs
- **Database:** Mysql
- **Others:** Composer, Postman

## 📊📁 DB Diagram
Below is a diagram of the database, showing different relationships between tables:

- **toy - minimum_age:** One to many relationship. A minimum age can have many toys, but each toy belongs to only one minimum age.

![image](https://github.com/user-attachments/assets/3adab154-2293-4162-9030-2d0f41e70002)

## 🔧⚙️ Installation
- Clone repository
```
git clone https://github.com/issamchlf/santa_claus_factory.git
```

- Install Composer dependencies

```
composer install
```
- Install Nodejs dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, change the variables you need, but it is very important to uncomment the database connection lines that are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=christmas_toy_factory
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command
```
php artisan key:generate
```

- Execute migrations
```
php artisan migrate:fresh
```
## ▶️💻 Run Locally

- How to run the Laravel server
```
php artisan serve
```

- If you want to run all this in development environment run the following command
```
npm run dev
```

- For production you should run the following command
```
npm run build
```

## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)


With the following command we run the tests and we will also generate a coverage report

```bash
  php artisan test --coverage-html=coverage-report
```

If everything is correct, everything should be OK.

![image](https://github.com/user-attachments/assets/11cf1200-71ff-4dab-a449-fbdc15188eb2)


A folder called coverage-report will also have been generated with **86.05%** coverage.
![image](https://github.com/user-attachments/assets/7d066461-0c33-4e5d-bbc1-1c26a120de2e)

## 📡🌐 Christmas Toy Factory API

This API allows you to manage toy entries and provides CRUD (Create, Read, Update, Delete) operations for these.

###  Api Toy

#### 1 Get all toy entries

```http
  GET /api/elve
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a toy by ID

```http
  GET /api/elve/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new toy

```http
  POST /api/elve
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body:

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of toy    |
| `image` | `string` | **Required**. Company of toy |
| `description` | `string` | **Required**. Status of toy  |
| `minimum_age_id` | `string` | **Required**. Id of the minimum age of the toy  |

#### 4 Update an existing toy by ID

```http
  PUT /api/elve/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 201, 404
- **Content Type:** application/json

#### Body:

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name`    | `string` | Name of toy    |
| `image` | `string` | Company of toy |
| `description` | `string` | Status of toy  |
| `minimum_age_id` | `string` | Id of the minimum age of the toy  |

#### 5 Delete a toy by ID

```http
  DELETE /api/elve/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json

- ### Api Santa

#### 1 Get all toy entries

```http
  GET /api/santa
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a santa by ID

```http
  GET /api/santa/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Santa ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new santa

```http
  POST /api/santa
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body:

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of toy    |
| `image` | `string` | **Required**. Company of toy |
| `description` | `string` | **Required**. Status of toy  |
| `minimum_age_id` | `string` | **Required**. Id of the minimum age of the toy  |

#### 4 Update an existing toy by ID

```http
  PUT /api/santa/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Santa ID     |

#### Response:
- **Status Code:** 201, 404
- **Content Type:** application/json

#### Body:

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name`    | `string` | Name of toy    |
| `image` | `string` | Company of toy |
| `description` | `string` | Status of toy  |
| `minimum_age_id` | `string` | Id of the minimum age of the toy  |

#### 5 Delete a toy by ID

```http
  DELETE /api/santa/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Santa ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json



## ✍️🙍 Authors

- **Jonathan Torreblanca:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Leonkeneddy86)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/jonathantorreblanca)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:jonathan19.jtv@gmail.com)

- **Jenifer Moyano:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/soyJenifer)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/jenifer-moyano-sanrom%C3%A1-143788333)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:jenifermoyanosanroma@gmail.com)

- **Issam Chellaf:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/issamchlf)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/issam-chellaf-1099352bb)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:issamchellaf734@gmail.com)

- **Fran Muñoz:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Crudo7)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:franciscomgz11@gmail.com)

- **Matias Stadler:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Matias-Stadler)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:koutarcj@gmail.com)

- **Rene Barco:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/mrene42)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:mariarenebarco.969@gmail.com)

- **Álvaro Cervera Vigara:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Kalixto73a)


- **Miguel Ángel García López:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Mangel111111111)


- **Manuel Espinosa:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Manusitox360)


- **Antonio Guillén:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/AntonioGuillen123)


- **Santino Vigna:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/SantiVigna)
