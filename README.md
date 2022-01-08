#### How to install

```
- $ git clone <url>
- $ cp .env.example .env
- $ composer install
- $ php artisan key:generate
- Create database and Update credentials in .env
- $ php artisan migrate
- $ php artisan serve
- $ php artisan dispatch:get-post-office-job
- $ php artisan queue:work
```

#### Endpoints

- http://localhost:8000/post-offices/ajax
- http://localhost:8000/post-offices/simple
- http://localhost:8000/api/post-offices


#### Features Used

- Migrations
    - Created separate tables for most of the fields to implement Normalization
- Seeders
    - To add given api in database
- Eloquent
    - Querying, Pagination & Eager Loading
- Relationships
    - To create associations between post office and related tables
- Queues
    - To process job asynchronously
- Custom Command
    - Created to dispatch job to get data from given api
- Created custom 404 for HTTP Not Found Exception

#### Note

- Used PHP 7.4
- I have used [Lumen Generator](https://github.com/flipboxstudio/lumen-generator) to get missing artisan commands of laravel here.
