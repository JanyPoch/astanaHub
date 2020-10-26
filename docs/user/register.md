### Scopes
not yet

### URL
/api/register

### Method
POST

### Parametrs
| Key          | Rules                     | Description       |
| -------------|:-------------------------:| -----------------:|
| `firstname`  | required, string          | Name              |
| `lastname`   | required, string          | Last Name         |
| `phone`      | required, numeric, unique |field has to start from 7 and has 11 numeric symbols|
| `email`      | required, string , unique |     email         |
| `password`   | required, string , min:8  |    password       |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "id": 6,
        "firstname": "zhenya",
        "lastname": "polyukhovich",
        "phone": "77772090301",
        "email": "zhenya5@gmail.com"
    }
}
```

### Errors
**httpStatusCode**:401<br/>
**OAuthServerException **

**httpStatusCode**: 404<br/>
**"errors": "Not Found!"**

**httpStatusCode**: 422<br/>
**Example:**
```
{
    "message": "The given data was invalid.",
    "errors": {
        "user_id": [
            "Такое значение поля phone уже существует."
        ]
    }
}
```

