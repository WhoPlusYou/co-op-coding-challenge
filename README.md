# coding-challenge

Welcome to the WPY Coding Challenge Repository!  

This repository is intended to be a challenge representative of a task that you may encounter on a day to day basis while coding for WPY.  For those of you who may be interviewing or looking at this after an interview, there is no time limit for this challenge.  How far into the laravel featureset you want to go is up to you, all this challenge intends to do is lay out a foundation for you to build upon, and set some goals.

Estimated time: 2-4 hours.

Challenge:

The development team working on an online store application was suddenly surprised by their very excellent boss with all inclusive tickets for a dream vacation! The only catch was they have to leave right away! You've been hired to fill in and finish the work that they started, and by the looks of it they didn't get very far :(

Don't worry! There's no pressure to make the next amazon, the development team lead has just left you with a list of tasks to get started and tie up a few loose ends while the team is away. Once they return you can all get rich together, but in the mean time there are a number of items to work on. A sample laravel project has already been created with some starter files. Please clone the repository using your favourite source control (github, sourceTree, etc) create a new branch from this branch "challenge-level-1" and commit your changes to your working branch. Once you've completed as much as you can make a pull request so your team lead can review!

Please feel free to use the php documentation: https://www.php.net/manual/en/
And also the Laravel documentation: https://laravel.com/docs/master

If you'd like to run your website locally please follow the install instructions from Laravel https://laravel.com/docs/master/installation
You can use any editor you'd like, and if you install mySql you can even create the database so you can run your migrations!

Good luck!

Tasks to do:

1. In the ShoppingCartController please define a constant for the maximum amount of items we can add to a cart and set it to 10.

2. In the ShoppingCartController please create a function that accepts a collection of items and returns the total price of all the items including tax (assume tax is 13%). All items have a price which is a decimal value. Please note that if an item is out of stock (number_stocked is 0) then it shouldn't be counted.

3. Again, in the ShoppingCartController there is an unfinished function called addToCart that takes an Item as input and tries to add it to the user's cart. Finish the function by adding an additional check to make sure the Item passed in has stock (number_stocked isn't 0) and to make sure the cart doesn't have more than 10 items.

4. There is a file named store.blade.php (located in "resources/views/") - Please use this blade template to create an HTML form that will collect the information for a new Store and submit it to the backend. Stores have: Name, Email, Phone Number, Address, Postal Code, Province, and Country. Please Validate the input accordingly, you can use javascript or jQuery as you wish.

BONUS: Update the StoreController's store function to save the input from the form in the previous task. If you send your form's POST request to "/stores" you'll end up in the Store controller!
** Hint : Check Laravel's Documentation on using Models to save objects to the database! The Store model has already been created for you.


