
## Lendo Code Challange

I've made a structure where every filter has a class and to add new filter it's only needed to add a new class, the core of this functionality is located in [app/Filter](app%2FFilter)  directory. 

To add a new filter for a model all that needed is to add a directory in [app/Filter](app%2FFilter) with this pattern `{Model}Filters` and add a class for your filter implementing the [FilterContract](app%2FFilter%2FFilterContract.php) interface and use the [HasFilter](app%2FFilter%2FHasFilter.php) trait on the model, then you can filter the model using the `filterBy` method on the model.

I have also made a factory: [OrderFactory](database%2Ffactories%2FOrderFactory.php) to add dummy data. All needed is to run 
```shell
 php artisan seed
 ```
There is also a postman collection which contains one request to test the `/api/backoffice/orders` api.
[lendocode.postman_collection.json](lendocode.postman_collection.json)
