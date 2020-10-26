_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/tags

### Method
GET

### Parametrs for filter
| Key          | Rules     | Description                     |
| -------------|:---------:| -------------------------------:|
| `name`       | string    | Returns tags with current name  |
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
            "name": "tech garden",
            "active": 1,
            "weight": 0
        }
    ],
    "links": {
        "first": "http://astana_hub/api/tags?page=1",
        "last": "http://astana_hub/api/tags?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://astana_hub/api/tags?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://astana_hub/api/tags",
        "per_page": 20,
        "to": 1,
        "total": 1
    }
}
```

### Errors
**httpStatusCode**:401<br/>
**OAuthServerException **

**httpStatusCode**: 404<br/>
**"errors": "Not Found!"**

```

