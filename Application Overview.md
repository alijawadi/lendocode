# Lendo Code Challenge
In this code challenge, we want to apply filter[s] on our models.
For example, suppose we have an `Order` model. Also there is an API to list orders as below address:

```sh
api.lendo.local/api/backoffice/orders
```
Now, we need to filter the `order` model based on incoming request parameters.

Currently, we have 3 filters here:

- filter by order status.
- filter by customer national code.
- filter by amount. The value of amount can have a min value, a max value or both. 
  ['min'=> null/0, 'max'=> null/0]

There is another requirement. If your filter runs into an exception you should send an `SMS` and `e-mail` to the admin system.
```
email: admin@lendo.ir
mobile: 0910000000
```
> Note: You don't need to implement a real SMS service. It can be a service mock.


What if our filters grow during the project process?
In other words, the business will need more filters and also complex queries in the future.

What is your solution for this situation?


## Notes
- Please do not use any extra packages.
- Use the Laravel framework.
- Please follow clean code, software principles and design patterns.
- Writing test(unit/feature) is an advantage.
- You have 24/48H to do it.
- After finishing the task, please upload the code to your GitHub repository and send your repo to us.
- If you have any questions, please feel free to ask via this email address: `m.fouladgar@lendo.ir`

Thank you in advance for your valuable time.
