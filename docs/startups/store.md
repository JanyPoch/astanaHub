_Authorization is required (you have to send authorization  header with success token)_<br/>

### Scopes
not yet

### URL
/api/startups

### Method
POST

### Parametrs
| Key                | Rules                     | Description       |
| -------------------|:-------------------------:| -----------------:|
| `name`             | required, string, unique  |                   |
| `start_capital`    | nullable, numeric         |                   |
| `investments`      | nullable, integer,        |                   |
| `investments_sum`  | nullable, numeric         |                   |
| `city_id`          | required, integer,        |                   |
| `foundation_year`  | required, integer,        |                   |
| `description`      | required, string,         |                   |
| `problem_solution` | required, string,         |                   |
| `sales_sum`        | nullable, numeric,        |                   |
| `income`           | nullable, numeric,        |                   |
| `locales.*`        | nullable, integer,        |                   |
| `industries.*`     | nullable, integer,        |                   |
| `status`           | nullable, integer,        |                   |



### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "id": 3,
        "name": "Zoyd",
        "city": {
            "id": 1,
            "name": "Алматы",
            "alias": "almaty",
            "active": 1,
            "country_id": 1,
            "created_at": null,
            "updated_at": null
        },
        "foundation_year": "2019",
        "description": "Крутой конструктор процессов",
        "problem_solution": "Управление процессами",
        "locales": [
            {
                "id": 1,
                "name": "Русский",
                "short_name": "рус",
                "key": "ru",
                "created_at": null,
                "updated_at": null,
                "pivot": {
                    "startup_id": 3,
                    "locale_id": 1
                }
            }
        ],
        "industries": [
            {
                "id": 1,
                "name": "Информационные технологии, системная интеграция, интернет",
                "alias": "IT",
                "active": 1,
                "created_at": null,
                "updated_at": null,
                "pivot": {
                    "startup_id": 3,
                    "industry_id": 1
                }
            }
        ],
        "start_capital": "5000",
        "investments": "Да",
        "investments_sum": "10000",
        "sales_sum": "10000",
        "income": "2000"
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
            "The name has already been taken."
        ]
    }
}
```

