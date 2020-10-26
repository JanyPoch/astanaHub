_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/users/{user_id}

### Method
PATCH

### Parametrs
| Key          | Rules                     | Description       |
| -------------|:-------------------------:| -----------------:|
| `firstname`  | required, string          | Name              |
| `lastname`   | required, string          | Last Name         |
| `phone`      | required, numeric, unique |field has to start from 7 and has 11 numeric symbols|
| `email`      | required, string , unique |     email         |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "id": 6,
        "firstname": "Женя",
        "lastname": "Ололош",
        "phone": "77772090301",
        "email": "zhenya5@gmail.com",
        "image": "images/users/1/6/qOoTrDI6husE8NDhN4lXGdjY9QUEsMiNIh64ywJf.png"
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

