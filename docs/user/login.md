### Scopes
not yet

### URL
/api/login

### Method
POST

### Parametrs
| Key          | Rules                     |
| -------------|-------------------------:|
| `phone`      | required, numeric |
| `password`   | required, string |  


### Success
returns updated doctor proffesional data
**httpStatusCode**: 200<br/>
**Response exapmle**:<br/>
 ```
{
    "data": {
        "id": 6,
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOGMxZjA3YWRhMjAxYWQxM2Y5MDViZmQ1ZDQ3MGE1ZWQ4ZjFmMGQ1MzYzYjA0YjBiNzUzZThiNmYxYTM1ZmZhNmY3MjA1MmU5NWI2ZTdhODciLCJpYXQiOjE2MDM3MDE5MjEsIm5iZiI6MTYwMzcwMTkyMSwiZXhwIjoxNjM1MjM3OTIxLCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.IAT3nJTuWjdopQqrLb4kNrkD-zuwxSAUFxhF_8r687cSu7tWw_aI0cwL-xXt7dGDv3MB39hsEqyD3ukB527sjkHI4cRzzwxgsJPITIMIsVDCrKb145KOBcAyKAZ4CkUgsU1ZlUsvi_hIc6mYVz2UhTO0VMCRR_6Ya-JhZ-mW-_yWgpnvJYY2f6lpM815WthfSMGS7fhEK8MaK0AMKEn3NwviNQvZroyQ82Pggf6vtGXYxVfuaNCDNq9dtDgLtNAYb3U7uSkATe4pRNa1pz8D94FOE9QJiNyL4bsJ0NoZVaFXjnBdLekjOxbFcHVbA0tLy3mY13nik2gZYb44LfnWmdjA4-YJhfvoarY2bnXtxorJJBsmdethqRmGKFRmy6iKX90MeJ9fHH2Kiij_XTPqA6DlmbBk-cXOrlYp-W2YfRTaHPLZtaHKXOIz9umoSd2dJSiL66JAYOsrxZuXrLohCqEsLNJUmYR7YEGT1SC5M3yLHUyAHAXJNfFbMr6BoMgQd6lTIMOM9OzEcWT-tDJOflvGh5S7uQxrkA9PDRkCXWLlEsyPNxumBE11ZhSWQmrLspMAXu8IYGHBwEmiVOxN1jSOTv4DM_uHiiHOlB61cx8GnnXrnPevsT6SSZQhDUmukE1f5x6CV41_nUbntqy7BPhP924n6iPG_32-QababsM"
    }
}
```

### Errors

**httpStatusCode**: 401<br/>
**Example:**
```
{
    "common": [
        "Логин или пароль введен не верно"
    ]
}
```

