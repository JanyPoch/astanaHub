_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/countries

### Method
GET

### Parametrs for filter
| Key          | Rules     | Description                     |
| -------------|:---------:| -------------------------------:|
| `active`     | integer   | Filter by active ( if sent 1) or not  (if 0)   |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": [
        {
            "id": 1,
            "name": "Казахстан",
            "alias": "kazakhstan",
            "active": 1
        },
        {
            "id": 2,
            "name": "Россия",
            "alias": "russia",
            "active": 1
        }
    ]
}
```

### Errors
**httpStatusCode**:401<br/>
**OAuthServerException **

**httpStatusCode**: 404<br/>
**"errors": "Not Found!"**

```

