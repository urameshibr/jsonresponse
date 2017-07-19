# jsonresponse
A simple helper for json response in laravel projects

### how to install

``` composer require urameshibr/jsonresponse ```

### How to use

The helper need 4 parameters: 
- status

- http code

- message

- data (optional)

### Example

```
<?php
// Any controller
public function show($id)
{
  $customer = $this->repository->showCustomerData($id);
  
  return $customer-isEmpty()
    ? json_response(false, 404, "Customer not found")
    : json_response(true, 200, "Customer info", $customer);
}
```

This will return a json:

```
{
  "status": "true",
  "code": 200,
  "message": "Customer info",
  "data": {
  // customer data
  }
}
```

or

```
{
  "status": "false",
  "code": 404,
  "message": "Customer not found.",
  "data": null
}
```

* Note: * This package use the helper "response()" from Illuminate.

* Note: * You can use 404 for "not found data" or 422. (or 666)
