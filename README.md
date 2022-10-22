⇨ First clone the project. 

⇨ Create a database named "medium_db". 

⇨ Once that is done, open the command line and type "php artisan migrate".

⇨ Tables will be created in the database as a result.

⇨ After that, execute the following commands:

     "php artisan db:seed --class=TagSeeder" 

     "php artisan db:seed --class=ArticleSeeder" 

     "php atrisn serve"

⇨ You can add new articles by visiting http://127.0.0.1:8000/admin/articles in your browser

⇨ And click on the "Add Article" button.

⇨ Once the values are filled in, click on the save button. You'll see a list of articles.

⇨ Afterwards, you may go to http://127.0.0.1:8000 and see the articles there.
