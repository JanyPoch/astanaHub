_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/tags/{tag_id}

### Method
POST

### Parametrs
| Key          | Rules                     | Description       |
| -------------|:-------------------------:| -----------------:|
| `name`       | required, string, unique  | Tag name          |
| `active`     | nullable, integer         | active or not     |
| `weight`      | nullable, integer,       |Weight fro sorting |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "id": 1,
        "name": "tech garden",
        "active": "1",
        "weight": 0
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
            "Такое значение поля name уже существует."
        ]
    }
}
```

