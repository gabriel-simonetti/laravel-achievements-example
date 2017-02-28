# Laravel Achievements Example
## Instructions

1. Clone the repo
2. Install dependencies via composer by running `composer install`
3. Check database settings on the `.env` file. The default settings are:
   - Host: localhost
   - User: root with no password
   - Database: laravel_achievements
4. Run migrations with the command `php artisan migrate`
5. Seed the database with a user by running `php artisan db:seed`
6. Run the server with the command `php artisan serve`
7. Navigate to `http://localhost:8000/posts`
8. Make a post
9. Navigate to `http://localhost:8000/achievements`
10. This page should track your progress on the achievements related to creating a post.

