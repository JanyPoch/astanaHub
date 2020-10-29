_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/categories

### Method
GET

### Filters
| Key          | Rules            | Description       |
| -------------|:----------------:| -----------------:|
| `active`     | integer          | active or not     |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": [
        {
            "id": 1,
            "name": "Проекты",
            "alias": "projects",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "События",
            "alias": "events",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "name": "Услуги",
            "alias": "services",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "Вакансии",
            "alias": "vacancies",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "Новости",
            "alias": "news",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 6,
            "name": "Статьи",
            "alias": "articles",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 7,
            "name": "Пост",
            "alias": "post",
            "active": 1,
            "created_at": "2020-10-29T12:57:06.000000Z",
            "updated_at": "2020-10-29T12:57:06.000000Z"
        }
    ],
    "links": {
        "first": "http://astana_hub/api/categories?page=1",
        "last": "http://astana_hub/api/categories?page=1",
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
                "url": "http://astana_hub/api/categories?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://astana_hub/api/categories",
        "per_page": 20,
        "to": 7,
        "total": 7
    }
}
```

### Errors
**httpStatusCode**:401<br/>
**OAuthServerException **

**httpStatusCode**: 404<br/>
**"errors": "Not Found!"**


