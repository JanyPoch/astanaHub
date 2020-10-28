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
            "name": "Информационные технологии, системная интеграция, интернет",
            "alias": "IT",
            "active": 1
        },
        {
            "id": 2,
            "name": "Автомобильный бизнес",
            "alias": "car_business",
            "active": 1
        },
        {
            "id": 3,
            "name": "Гостиницы, рестораны, общепит, кейтеринг, развлечения",
            "alias": "hotels",
            "active": 1
        },
        {
            "id": 4,
            "name": "Государственные организации",
            "alias": "state_organizations",
            "active": 1
        },
        {
            "id": 5,
            "name": "Добывающая отрасль",
            "alias": "mining_industry",
            "active": 1
        },
        {
            "id": 6,
            "name": "ЖКХ",
            "alias": "department_of_housing_and_utilities",
            "active": 1
        },
        {
            "id": 7,
            "name": "Здравоохранение",
            "alias": "medicine",
            "active": 1
        },
        {
            "id": 8,
            "name": "Искусство, культура",
            "alias": "art",
            "active": 1
        },
        {
            "id": 9,
            "name": "Лесная промышленность, деревообработка",
            "alias": "wood_industry",
            "active": 1
        },
        {
            "id": 10,
            "name": "Медицина, фармацевтика, аптеки",
            "alias": "pharmaceuticals",
            "active": 1
        },
        {
            "id": 11,
            "name": "Металлургия, металлообработка",
            "alias": "metallurgy",
            "active": 1
        },
        {
            "id": 12,
            "name": "Нефть и газ",
            "alias": "oil_gas",
            "active": 1
        },
        {
            "id": 13,
            "name": "Образование",
            "alias": "education",
            "active": 1
        },
        {
            "id": 14,
            "name": "Общественная деятельность, партии, благотворительность, НКО",
            "alias": "social_activity",
            "active": 1
        },
        {
            "id": 15,
            "name": "Перевозки, логистика, склад, ВЭД",
            "alias": "logistics",
            "active": 1
        },
        {
            "id": 16,
            "name": "Продукты питания",
            "alias": "food",
            "active": 1
        },
        {
            "id": 17,
            "name": "Промышленное оборудование, техника, станки и комплектующие",
            "alias": "equipment",
            "active": 1
        },
        {
            "id": 18,
            "name": "Розничная торговля",
            "alias": "b2c",
            "active": 1
        },
        {
            "id": 19,
            "name": "СМИ, медиа, маркетинг, реклама, BTL, PR, дизайн, продюсирование",
            "alias": "marketing",
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

