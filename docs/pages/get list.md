_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/pages

### Method
GET

### Filters
| Key                  | Rules          | Description                    |
| ----------------------|:-------------:| ---------------------- -------:|
| `category`         |  integer         | category id                    |
| `user`             |  integer         | user id                        |
| `locale`           |  integer         |locale id                       |
| `startup`          |  integer         |startup id                      |
| `domain`           |  string          | domain                         |
| `active`           |  integer         |Is published (1/0)              | 
| `commentable`      |  integer         |Is comments available  (1/0)    |
| `tags.*`           |  array of integer|Tags ids                        |


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": [
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [
                {
                    "ui_component_id": null,
                    "page_id": 3,
                    "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                    "active": 1,
                    "weight": 1
                },
                {
                    "ui_component_id": null,
                    "page_id": 3,
                    "body": "{\"type\": \"text\", \" value\": \"<p>Описание 1</p>\"}",
                    "active": 1,
                    "weight": 2
                }
            ],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [
                {
                    "ui_component_id": null,
                    "page_id": 4,
                    "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                    "active": 1,
                    "weight": 1
                },
                {
                    "ui_component_id": null,
                    "page_id": 4,
                    "body": "{\"type\": \"text\", \" value\": \"<p>Описание 1</p>\"}",
                    "active": 1,
                    "weight": 2
                }
            ],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [
                {
                    "ui_component_id": null,
                    "page_id": 5,
                    "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                    "active": 1,
                    "weight": 1
                },
                {
                    "ui_component_id": null,
                    "page_id": 5,
                    "body": "{\"type\": \"text\", \" value\": \"<p>Описание 1</p>\"}",
                    "active": 1,
                    "weight": 2
                }
            ],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [
                {
                    "ui_component_id": null,
                    "page_id": 6,
                    "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                    "active": 1,
                    "weight": 1
                },
                {
                    "ui_component_id": null,
                    "page_id": 6,
                    "body": "{\"type\": \"text\", \" value\": \"<p>Описание 1</p>\"}",
                    "active": 1,
                    "weight": 2
                }
            ],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [
                {
                    "ui_component_id": null,
                    "page_id": 7,
                    "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                    "active": 1,
                    "weight": 1
                },
                {
                    "ui_component_id": null,
                    "page_id": 7,
                    "body": "{\"type\": \"text\", \" value\": \"<p>Описание 1</p>\"}",
                    "active": 1,
                    "weight": 2
                }
            ],
            "tags": []
        },
        {
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
            "active": 1,
            "commentable": 1,
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
        },
        {
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
            "active": 1,
            "commentable": 1,
            "publish_at": null,
            "components": [
                {
                    "ui_component_id": null,
                    "page_id": 9,
                    "body": "{\"type\": \"text\", \"value\": \"<h1>Заголовок 1</h1>\"}",
                    "active": 1,
                    "weight": 1
                },
                {
                    "ui_component_id": null,
                    "page_id": 9,
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
    ],
    "links": {
        "first": "http://astana_hub/api/pages?page=1",
        "last": "http://astana_hub/api/pages?page=1",
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
                "url": "http://astana_hub/api/pages?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://astana_hub/api/pages",
        "per_page": 20,
        "to": 9,
        "total": 9
    }
}
```

### Errors
**httpStatusCode**:401<br/>
**OAuthServerException **

**httpStatusCode**: 404<br/>
**"errors": "Not Found!"**


