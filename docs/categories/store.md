_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/categories

### Method
POST

### Parametrs
| Key          | Rules                     | Description       |
| -------------|:-------------------------:| -----------------:|
| `name`       | required, string, unique  | Category name     |
| `active`     | nullable, integer         | active or not     |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "name": "Пост",
        "active": "1",
        "alias": "post",
        "updated_at": "2020-10-29T12:57:06.000000Z",
        "created_at": "2020-10-29T12:57:06.000000Z",
        "id": 7
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
        "name": [
            "Такое значение поля name уже существует."
        ]
    }
}
```

