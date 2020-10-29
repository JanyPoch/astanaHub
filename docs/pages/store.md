_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/pages

### Method
POST

### Parametrs
| Key                  | Rules                     | Description                        |
| ----------------------|:-------------------------:| ---------------------------------:|
| `category_id`         | required, integer         | page category                     |
| `user_id`             | required, integer         | user, who publish page            |
| `locale_id`           | required, integer         |Page language                      |
| `startup_id`          | nullable, integer         |If publication from startup        |
| `title`               | required, string          |Page title                         |
| `domain`              | nullable, string          |Page domain                        |
| `alias`               | nullable, string          |Page url                           |
| `active`              | required, integer         |Is published                       | 
| `commentable`         | required, integer         |Is comments available              |
| `publish_at`          | nullable, timestamp       |If page should be published later  |
| `components.*`        | required, array           |Components                         |
| `components.*.body`   | required, json            |               |
| `components.*.active` | required, integer         |If component has to be shown       |
| `components.*.weight` | required, integer         |For order                          |
| `tags.*`              | required, array of integer|Tags ids                           |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "category": {
            "id": 1,
            "name": "Проекты",
            "alias": "projects",
            "active": 1,
            "created_at": null,
            "updated_at": null
        },
        "user": {
            "id": 1,
            "firstname": "Zhenya",
            "lastname": "Polyukhovich",
            "phone": "77772090306",
            "email": "el.viento.de.plata@gmail.com",
            "image": null,
            "phone_verified_at": null,
            "created_at": "2020-10-25T14:04:58.000000Z",
            "updated_at": "2020-10-25T14:04:58.000000Z"
        },
        "locale": {
            "id": 1,
            "name": "Русский",
            "short_name": "рус",
            "key": "ru",
            "created_at": null,
            "updated_at": null
        },
        "startup_id": null,
        "title": "Tach Garden",
        "domain": "tech-garden",
        "alias": null,
        "active": "1",
        "commentable": "1",
        "publish_at": null,
        "components": [
            {
                "ui_component_id": null,
                "page_id": 8,
                "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                "active": 1,
                "weight": 1
            },
            {
                "ui_component_id": null,
                "page_id": 8,
                "body": "{\"type\": \"text\", \" value\": \"<p>Описание 1</p>\"}",
                "active": 1,
                "weight": 2
            }
        ],
        "tags": [
            {
                "id": 1,
                "name": "tech garden",
                "active": 1,
                "weight": 0
            }
        ]
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
        "category_id": [
            "The category id field is required."
        ]
    }
}
```

