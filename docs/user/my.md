### Scopes
not yet

### URL
/api/my

### Method
GET

### Parametrs


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
        "image": "images/users/1/6/qOoTrDI6husE8NDhN4lXGdjY9QUEsMiNIh64ywJf.png",
        "phone_verified_at": null,
        "roles": [
            {
                "id": 2,
                "name": "user",
                "key": "user",
                "created_at": "2020-10-26T07:50:21.000000Z",
                "updated_at": null,
                "pivot": {
                    "user_id": 6,
                    "role_id": 2
                }
            },
            {
                "id": 1,
                "name": "admin",
                "key": "admin",
                "created_at": "2020-10-26T07:50:21.000000Z",
                "updated_at": null,
                "pivot": {
                    "user_id": 6,
                    "role_id": 1
                }
            }
        ]
    }
}
```

### Errors

**httpStatusCode**: 401<br/>
**Example:**
```

```

