_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/cities

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
            "name": "Алматы",
            "country_id": 1,
            "alias": "almaty",
            "active": 1
        },
        {
            "id": 2,
            "name": "Нур-Султан (Астана)",
            "country_id": 1,
            "alias": "astana",
            "active": 1
        },
        {
            "id": 3,
            "name": "Актау",
            "country_id": 1,
            "alias": "aktau",
            "active": 1
        },
        {
            "id": 4,
            "name": "Шымкент",
            "country_id": 1,
            "alias": "shymkent",
            "active": 1
        },
        {
            "id": 5,
            "name": "Караганда",
            "country_id": 1,
            "alias": "karaganda",
            "active": 1
        },
        {
            "id": 6,
            "name": "Талдыкорган",
            "country_id": 1,
            "alias": "taldykorgan",
            "active": 1
        },
        {
            "id": 7,
            "name": "Атырау",
            "country_id": 1,
            "alias": "atirau",
            "active": 1
        },
        {
            "id": 8,
            "name": "Кызылорда",
            "country_id": 1,
            "alias": "kyzylorda",
            "active": 1
        },
        {
            "id": 9,
            "name": "Семей",
            "country_id": 1,
            "alias": "semey",
            "active": 1
        },
        {
            "id": 10,
            "name": "Костанай",
            "country_id": 1,
            "alias": "kostanay",
            "active": 1
        },
        {
            "id": 11,
            "name": "Темиртау",
            "country_id": 1,
            "alias": "temirtau",
            "active": 1
        },
        {
            "id": 12,
            "name": "Петропавловск",
            "country_id": 1,
            "alias": "petropavlovsk",
            "active": 1
        },
        {
            "id": 13,
            "name": "Уральск",
            "country_id": 1,
            "alias": "uralsk",
            "active": 1
        },
        {
            "id": 14,
            "name": "Кокшетау",
            "country_id": 1,
            "alias": "kokshetau",
            "active": 1
        },
        {
            "id": 15,
            "name": "Актобе",
            "country_id": 1,
            "alias": "aktobe",
            "active": 1
        },
        {
            "id": 16,
            "name": "Тараз",
            "country_id": 1,
            "alias": "taraz",
            "active": 1
        },
        {
            "id": 17,
            "name": "Павлодар",
            "country_id": 1,
            "alias": "pavlodar",
            "active": 1
        },
        {
            "id": 18,
            "name": "Туркестан",
            "country_id": 1,
            "alias": "turkestan",
            "active": 1
        },
        {
            "id": 19,
            "name": "Усть-Каменогорск",
            "country_id": 1,
            "alias": "ust-kamenogorsk",
            "active": 1
        },
        {
            "id": 20,
            "name": "Экибастуз",
            "country_id": 1,
            "alias": "ekibastuz",
            "active": 1
        }
    ],
    "links": {
        "first": "http://astana_hub/api/cities?page=1",
        "last": "http://astana_hub/api/cities?page=3",
        "prev": null,
        "next": "http://astana_hub/api/cities?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://astana_hub/api/cities?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": "http://astana_hub/api/cities?page=2",
                "label": 2,
                "active": false
            },
            {
                "url": "http://astana_hub/api/cities?page=3",
                "label": 3,
                "active": false
            },
            {
                "url": "http://astana_hub/api/cities?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://astana_hub/api/cities",
        "per_page": 20,
        "to": 20,
        "total": 42
    }
}
```

### Errors
**httpStatusCode**:401<br/>
**OAuthServerException **

**httpStatusCode**: 404<br/>
**"errors": "Not Found!"**

```

