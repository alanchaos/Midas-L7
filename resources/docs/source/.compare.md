---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_bd2777b2132db6c9cf93e928b5b5e44d -->
## api/v1/permissions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/permissions`


<!-- END_bd2777b2132db6c9cf93e928b5b5e44d -->

<!-- START_defb597dbd6eb21dee1f472ef6340873 -->
## api/v1/permissions
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/permissions`


<!-- END_defb597dbd6eb21dee1f472ef6340873 -->

<!-- START_2cbf87c71ec8fd9634996f224a875400 -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/permissions/{permission}`


<!-- END_2cbf87c71ec8fd9634996f224a875400 -->

<!-- START_102bcc89441658cf73bc3c85f82009fe -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/permissions/{permission}`

`PATCH api/v1/permissions/{permission}`


<!-- END_102bcc89441658cf73bc3c85f82009fe -->

<!-- START_a76ff06df82f5e7b38639608624548fe -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/permissions/{permission}`


<!-- END_a76ff06df82f5e7b38639608624548fe -->

<!-- START_d2f16357cb4ed36dbb0e9529ea4a460c -->
## api/v1/roles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/roles`


<!-- END_d2f16357cb4ed36dbb0e9529ea4a460c -->

<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## api/v1/roles
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/roles`


<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_ba05db58d706b9f94944b1ab79e1e4a2 -->
## api/v1/roles/{role}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/roles/{role}`


<!-- END_ba05db58d706b9f94944b1ab79e1e4a2 -->

<!-- START_81ac9047f8db2b92092c5a7f13e5d28d -->
## api/v1/roles/{role}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/roles/{role}`

`PATCH api/v1/roles/{role}`


<!-- END_81ac9047f8db2b92092c5a7f13e5d28d -->

<!-- START_04c524fc2f0ea8c793406426144b4c71 -->
## api/v1/roles/{role}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/roles/{role}`


<!-- END_04c524fc2f0ea8c793406426144b4c71 -->

<!-- START_1aff981da377ba9a1bbc56ff8efaec0d -->
## api/v1/users
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/users`


<!-- END_1aff981da377ba9a1bbc56ff8efaec0d -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## api/v1/users
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/users`


<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_cedc85e856362e0e3b46f5dcd9f8f5d0 -->
## api/v1/users/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/users/{user}`


<!-- END_cedc85e856362e0e3b46f5dcd9f8f5d0 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## api/v1/users/{user}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`


<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## api/v1/users/{user}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->

<!-- START_605f7ea8d6dc393b09185307f2aa286c -->
## api/v1/add-blocks
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-blocks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-blocks`


<!-- END_605f7ea8d6dc393b09185307f2aa286c -->

<!-- START_1ffb5864455c9e818bd24de8dd9e71f1 -->
## api/v1/add-blocks
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-blocks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-blocks`


<!-- END_1ffb5864455c9e818bd24de8dd9e71f1 -->

<!-- START_4c51e895dc6e3ce6665d1f77902d6498 -->
## api/v1/add-blocks/{add_block}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-blocks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-blocks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-blocks/{add_block}`


<!-- END_4c51e895dc6e3ce6665d1f77902d6498 -->

<!-- START_705bf7cf802ffe782578536fea04e946 -->
## api/v1/add-blocks/{add_block}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/add-blocks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-blocks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/add-blocks/{add_block}`

`PATCH api/v1/add-blocks/{add_block}`


<!-- END_705bf7cf802ffe782578536fea04e946 -->

<!-- START_47ef1af7b56dd453b908f4cee7078915 -->
## api/v1/add-blocks/{add_block}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/add-blocks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-blocks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/add-blocks/{add_block}`


<!-- END_47ef1af7b56dd453b908f4cee7078915 -->

<!-- START_e5797d6f6f304b19a26659c9c416229c -->
## api/v1/add-units
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-units"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-units`


<!-- END_e5797d6f6f304b19a26659c9c416229c -->

<!-- START_d2b8b4522812c0957127fb26dcc55c4a -->
## api/v1/add-units
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-units"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-units`


<!-- END_d2b8b4522812c0957127fb26dcc55c4a -->

<!-- START_4c4721634813ce8125d2f5a16fcabd18 -->
## api/v1/add-units/{add_unit}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-units/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-units/{add_unit}`


<!-- END_4c4721634813ce8125d2f5a16fcabd18 -->

<!-- START_bcc1c6d2089bcc06dac049b02d2e267e -->
## api/v1/add-units/{add_unit}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/add-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-units/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/add-units/{add_unit}`

`PATCH api/v1/add-units/{add_unit}`


<!-- END_bcc1c6d2089bcc06dac049b02d2e267e -->

<!-- START_e7c10a13660bb7b58f1348e0a8e91096 -->
## api/v1/add-units/{add_unit}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/add-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-units/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/add-units/{add_unit}`


<!-- END_e7c10a13660bb7b58f1348e0a8e91096 -->

<!-- START_c86cf9a9b88b2fb1defe29b6165a68ed -->
## api/v1/unit-managements/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/unit-managements/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/unit-managements/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/unit-managements/media`


<!-- END_c86cf9a9b88b2fb1defe29b6165a68ed -->

<!-- START_4a955adbab83016ecf7ac2909cda45f9 -->
## api/v1/unit-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/unit-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/unit-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/unit-managements`


<!-- END_4a955adbab83016ecf7ac2909cda45f9 -->

<!-- START_cf2e536c0c9bc52f9440571f107ddf51 -->
## api/v1/unit-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/unit-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/unit-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/unit-managements`


<!-- END_cf2e536c0c9bc52f9440571f107ddf51 -->

<!-- START_8078f8d35693368c1ea7d101e3bd2f6d -->
## api/v1/unit-managements/{unit_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/unit-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/unit-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/unit-managements/{unit_management}`


<!-- END_8078f8d35693368c1ea7d101e3bd2f6d -->

<!-- START_1c69dc6f8641b7bdfc900063034de6e8 -->
## api/v1/unit-managements/{unit_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/unit-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/unit-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/unit-managements/{unit_management}`

`PATCH api/v1/unit-managements/{unit_management}`


<!-- END_1c69dc6f8641b7bdfc900063034de6e8 -->

<!-- START_7bec75f029df59e2c5f7d765ae740ab0 -->
## api/v1/unit-managements/{unit_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/unit-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/unit-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/unit-managements/{unit_management}`


<!-- END_7bec75f029df59e2c5f7d765ae740ab0 -->

<!-- START_bf93ae10e1aee89198f92d82db9e8d6b -->
## api/v1/facility-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-categories`


<!-- END_bf93ae10e1aee89198f92d82db9e8d6b -->

<!-- START_7bd37a7c4432e9fe7fde3ab9a941c16e -->
## api/v1/facility-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/facility-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/facility-categories`


<!-- END_7bd37a7c4432e9fe7fde3ab9a941c16e -->

<!-- START_6e43c5e4a626fbe356e0cc5c1162bd5d -->
## api/v1/facility-categories/{facility_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-categories/{facility_category}`


<!-- END_6e43c5e4a626fbe356e0cc5c1162bd5d -->

<!-- START_305af41643c7ec850548bd8cb006d855 -->
## api/v1/facility-categories/{facility_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/facility-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/facility-categories/{facility_category}`

`PATCH api/v1/facility-categories/{facility_category}`


<!-- END_305af41643c7ec850548bd8cb006d855 -->

<!-- START_51d79c18035899f32d166fc946e4377a -->
## api/v1/facility-categories/{facility_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/facility-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/facility-categories/{facility_category}`


<!-- END_51d79c18035899f32d166fc946e4377a -->

<!-- START_6a643e39a5ad2959847c83f6f90a5dff -->
## api/v1/facility-managements/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/facility-managements/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-managements/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/facility-managements/media`


<!-- END_6a643e39a5ad2959847c83f6f90a5dff -->

<!-- START_fda43086de97b5282aafcdda79347ad6 -->
## api/v1/facility-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-managements`


<!-- END_fda43086de97b5282aafcdda79347ad6 -->

<!-- START_fdce3316fb0dcb6fbddf4a209c6ff007 -->
## api/v1/facility-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/facility-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/facility-managements`


<!-- END_fdce3316fb0dcb6fbddf4a209c6ff007 -->

<!-- START_bcdb8a2315475c3c693f20ff723e3e4e -->
## api/v1/facility-managements/{facility_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-managements/{facility_management}`


<!-- END_bcdb8a2315475c3c693f20ff723e3e4e -->

<!-- START_efcbcf8dd44beef11aee8098f8d84263 -->
## api/v1/facility-managements/{facility_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/facility-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/facility-managements/{facility_management}`

`PATCH api/v1/facility-managements/{facility_management}`


<!-- END_efcbcf8dd44beef11aee8098f8d84263 -->

<!-- START_72720ee34559073af9e57dc48272f064 -->
## api/v1/facility-managements/{facility_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/facility-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/facility-managements/{facility_management}`


<!-- END_72720ee34559073af9e57dc48272f064 -->

<!-- START_7b6d5ada9ed78e1cc4e7fb7d998a70bc -->
## api/v1/facility-books
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-books`


<!-- END_7b6d5ada9ed78e1cc4e7fb7d998a70bc -->

<!-- START_622f136161523da7341035923a400ba6 -->
## api/v1/facility-books
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/facility-books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/facility-books`


<!-- END_622f136161523da7341035923a400ba6 -->

<!-- START_37da7fdcee8ea2574510edffc737ed90 -->
## api/v1/facility-books/{facility_book}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-books/{facility_book}`


<!-- END_37da7fdcee8ea2574510edffc737ed90 -->

<!-- START_3bbcd780837b52acc81b187030d3b32e -->
## api/v1/facility-books/{facility_book}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/facility-books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/facility-books/{facility_book}`

`PATCH api/v1/facility-books/{facility_book}`


<!-- END_3bbcd780837b52acc81b187030d3b32e -->

<!-- START_3cf72cb210221cce89e24676478ea397 -->
## api/v1/facility-books/{facility_book}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/facility-books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/facility-books/{facility_book}`


<!-- END_3cf72cb210221cce89e24676478ea397 -->

<!-- START_4eb71269ac756a414ee3fbf6682617f4 -->
## api/v1/add-visitors
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-visitors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-visitors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-visitors`


<!-- END_4eb71269ac756a414ee3fbf6682617f4 -->

<!-- START_f50dea463c90ad36f86401c5452005ff -->
## api/v1/add-visitors
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-visitors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-visitors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-visitors`


<!-- END_f50dea463c90ad36f86401c5452005ff -->

<!-- START_546dbb79913ec1a436ac8ad6f13ebfef -->
## api/v1/add-visitors/{add_visitor}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-visitors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-visitors/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-visitors/{add_visitor}`


<!-- END_546dbb79913ec1a436ac8ad6f13ebfef -->

<!-- START_fe26272d2d51aa49d5fecead488b5359 -->
## api/v1/add-visitors/{add_visitor}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/add-visitors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-visitors/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/add-visitors/{add_visitor}`

`PATCH api/v1/add-visitors/{add_visitor}`


<!-- END_fe26272d2d51aa49d5fecead488b5359 -->

<!-- START_666b3db4d6487e3cf3156d0111f5148a -->
## api/v1/add-visitors/{add_visitor}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/add-visitors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-visitors/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/add-visitors/{add_visitor}`


<!-- END_666b3db4d6487e3cf3156d0111f5148a -->

<!-- START_ecf1ad8df953880c44b1d2d1d1f828cf -->
## api/v1/locations
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/locations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/locations`


<!-- END_ecf1ad8df953880c44b1d2d1d1f828cf -->

<!-- START_2a7b18b14a7304f286af447a290241db -->
## api/v1/locations
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/locations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/locations`


<!-- END_2a7b18b14a7304f286af447a290241db -->

<!-- START_c8fa13e7a27e0a2c9d739676eb5f9e6e -->
## api/v1/locations/{location}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/locations/{location}`


<!-- END_c8fa13e7a27e0a2c9d739676eb5f9e6e -->

<!-- START_b4f8b0edd6aa6eedab3bfc9510a4ed5d -->
## api/v1/locations/{location}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/locations/{location}`

`PATCH api/v1/locations/{location}`


<!-- END_b4f8b0edd6aa6eedab3bfc9510a4ed5d -->

<!-- START_d74b55bb0676b4b842b6afeddb3f626f -->
## api/v1/locations/{location}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/locations/{location}`


<!-- END_d74b55bb0676b4b842b6afeddb3f626f -->

<!-- START_0686b73b79f63ed1c14c3f420d914c33 -->
## api/v1/gates
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/gates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/gates`


<!-- END_0686b73b79f63ed1c14c3f420d914c33 -->

<!-- START_9df20268589b5467e3e619c729a967f6 -->
## api/v1/gates
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/gates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/gates`


<!-- END_9df20268589b5467e3e619c729a967f6 -->

<!-- START_9a682a555c722950d351738b4cbf559c -->
## api/v1/gates/{gate}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/gates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gates/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/gates/{gate}`


<!-- END_9a682a555c722950d351738b4cbf559c -->

<!-- START_a91c9711d2644218e35fe9d97889ff8e -->
## api/v1/gates/{gate}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/gates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gates/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/gates/{gate}`

`PATCH api/v1/gates/{gate}`


<!-- END_a91c9711d2644218e35fe9d97889ff8e -->

<!-- START_7315de3a4080ec7420d33e7b3a6accb8 -->
## api/v1/gates/{gate}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/gates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gates/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/gates/{gate}`


<!-- END_7315de3a4080ec7420d33e7b3a6accb8 -->

<!-- START_4503f091de76b39a93f04124c8411250 -->
## api/v1/histories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/histories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/histories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/histories`


<!-- END_4503f091de76b39a93f04124c8411250 -->

<!-- START_54e680a32001b32d9f840f32982b52df -->
## api/v1/histories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/histories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/histories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/histories`


<!-- END_54e680a32001b32d9f840f32982b52df -->

<!-- START_cbce7a599bf5ac1462c12e0a0dcd923c -->
## api/v1/histories/{history}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/histories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/histories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/histories/{history}`


<!-- END_cbce7a599bf5ac1462c12e0a0dcd923c -->

<!-- START_30fd6e5b6b9691f82a3a09d0a8403613 -->
## api/v1/histories/{history}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/histories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/histories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/histories/{history}`

`PATCH api/v1/histories/{history}`


<!-- END_30fd6e5b6b9691f82a3a09d0a8403613 -->

<!-- START_e1f5b220838f9e7595d0dca001af83d3 -->
## api/v1/histories/{history}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/histories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/histories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/histories/{history}`


<!-- END_e1f5b220838f9e7595d0dca001af83d3 -->

<!-- START_7dc37421b6354eea01ee1f6f98913740 -->
## api/v1/qrs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/qrs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/qrs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/qrs`


<!-- END_7dc37421b6354eea01ee1f6f98913740 -->

<!-- START_17cebbdc0a8ba4ec3d610fb13a1e8382 -->
## api/v1/qrs
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/qrs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/qrs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/qrs`


<!-- END_17cebbdc0a8ba4ec3d610fb13a1e8382 -->

<!-- START_6667a4af298e0623a3d7e609a2324c15 -->
## api/v1/qrs/{qr}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/qrs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/qrs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/qrs/{qr}`


<!-- END_6667a4af298e0623a3d7e609a2324c15 -->

<!-- START_01147935c5fdf172d3fd57e0f7276347 -->
## api/v1/qrs/{qr}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/qrs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/qrs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/qrs/{qr}`

`PATCH api/v1/qrs/{qr}`


<!-- END_01147935c5fdf172d3fd57e0f7276347 -->

<!-- START_87e2737868e9abb00f2f92ff24835563 -->
## api/v1/qrs/{qr}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/qrs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/qrs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/qrs/{qr}`


<!-- END_87e2737868e9abb00f2f92ff24835563 -->

<!-- START_5c140f75bcad8f356c800f3c8d3f96b6 -->
## api/v1/defect-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/defect-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/defect-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/defect-categories`


<!-- END_5c140f75bcad8f356c800f3c8d3f96b6 -->

<!-- START_dcae66ae7c170a120256f40611ba39ef -->
## api/v1/defect-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/defect-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/defect-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/defect-categories`


<!-- END_dcae66ae7c170a120256f40611ba39ef -->

<!-- START_2dabf46d6f6ce3055b09b0b4ea7816a7 -->
## api/v1/defect-categories/{defect_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/defect-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/defect-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/defect-categories/{defect_category}`


<!-- END_2dabf46d6f6ce3055b09b0b4ea7816a7 -->

<!-- START_73ca0911778ac779bd5af00a28733cca -->
## api/v1/defect-categories/{defect_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/defect-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/defect-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/defect-categories/{defect_category}`

`PATCH api/v1/defect-categories/{defect_category}`


<!-- END_73ca0911778ac779bd5af00a28733cca -->

<!-- START_c27298671f96ab03092dfbfcc45c40ba -->
## api/v1/defect-categories/{defect_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/defect-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/defect-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/defect-categories/{defect_category}`


<!-- END_c27298671f96ab03092dfbfcc45c40ba -->

<!-- START_12ba8f07308fba1fd2a187f418de6653 -->
## api/v1/status-controls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/status-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/status-controls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/status-controls`


<!-- END_12ba8f07308fba1fd2a187f418de6653 -->

<!-- START_d6215b8a28f02a05021f830042376a23 -->
## api/v1/status-controls
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/status-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/status-controls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/status-controls`


<!-- END_d6215b8a28f02a05021f830042376a23 -->

<!-- START_03dd2f9ad7a87c5628b4477023cc7ceb -->
## api/v1/status-controls/{status_control}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/status-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/status-controls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/status-controls/{status_control}`


<!-- END_03dd2f9ad7a87c5628b4477023cc7ceb -->

<!-- START_be2bcfaa424382add50810aed9ac3522 -->
## api/v1/status-controls/{status_control}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/status-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/status-controls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/status-controls/{status_control}`

`PATCH api/v1/status-controls/{status_control}`


<!-- END_be2bcfaa424382add50810aed9ac3522 -->

<!-- START_c378b9b89705ae53d7470380258ea8e1 -->
## api/v1/status-controls/{status_control}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/status-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/status-controls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/status-controls/{status_control}`


<!-- END_c378b9b89705ae53d7470380258ea8e1 -->

<!-- START_2dbe63df6ab1d4922872d4180c7a3d99 -->
## api/v1/add-defects/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-defects/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-defects/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-defects/media`


<!-- END_2dbe63df6ab1d4922872d4180c7a3d99 -->

<!-- START_389afba04003e625db4ce82108f86b33 -->
## api/v1/add-defects
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-defects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-defects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-defects`


<!-- END_389afba04003e625db4ce82108f86b33 -->

<!-- START_20310f0e4d552aec6fc37f04332c3651 -->
## api/v1/add-defects
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-defects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-defects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-defects`


<!-- END_20310f0e4d552aec6fc37f04332c3651 -->

<!-- START_70b1fa08ac12b43ad85e6af1e34c874f -->
## api/v1/add-defects/{add_defect}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-defects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-defects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-defects/{add_defect}`


<!-- END_70b1fa08ac12b43ad85e6af1e34c874f -->

<!-- START_ae1a1d96a1915a21736a0214f908a710 -->
## api/v1/add-defects/{add_defect}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/add-defects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-defects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/add-defects/{add_defect}`

`PATCH api/v1/add-defects/{add_defect}`


<!-- END_ae1a1d96a1915a21736a0214f908a710 -->

<!-- START_7314ff9381684f8f2224fe41bb22d49d -->
## api/v1/add-defects/{add_defect}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/add-defects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-defects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/add-defects/{add_defect}`


<!-- END_7314ff9381684f8f2224fe41bb22d49d -->

<!-- START_ce5ea251d489b24c48b46a0bd7256b37 -->
## api/v1/payment-methods
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/payment-methods" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/payment-methods"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/payment-methods`


<!-- END_ce5ea251d489b24c48b46a0bd7256b37 -->

<!-- START_8393eff2dde2a128c2ad1381e552284b -->
## api/v1/payment-methods
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/payment-methods" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/payment-methods"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/payment-methods`


<!-- END_8393eff2dde2a128c2ad1381e552284b -->

<!-- START_7fe55502f35ea192204e6892927ba252 -->
## api/v1/payment-methods/{payment_method}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/payment-methods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/payment-methods/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/payment-methods/{payment_method}`


<!-- END_7fe55502f35ea192204e6892927ba252 -->

<!-- START_27388425f76b3b2a03b9c2d1bd49066d -->
## api/v1/payment-methods/{payment_method}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/payment-methods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/payment-methods/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/payment-methods/{payment_method}`

`PATCH api/v1/payment-methods/{payment_method}`


<!-- END_27388425f76b3b2a03b9c2d1bd49066d -->

<!-- START_c1779f3303cafabca8a504854f0a3f38 -->
## api/v1/payment-methods/{payment_method}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/payment-methods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/payment-methods/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/payment-methods/{payment_method}`


<!-- END_c1779f3303cafabca8a504854f0a3f38 -->

<!-- START_5fb603de1c41f2f76b10b3bf2ce01695 -->
## api/v1/maintenances-payments/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/maintenances-payments/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/maintenances-payments/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/maintenances-payments/media`


<!-- END_5fb603de1c41f2f76b10b3bf2ce01695 -->

<!-- START_767a9919c46711c8bd08c5a88dfcce85 -->
## api/v1/maintenances-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/maintenances-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/maintenances-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/maintenances-payments`


<!-- END_767a9919c46711c8bd08c5a88dfcce85 -->

<!-- START_810fd97b255f244b84178242df0f8e7b -->
## api/v1/maintenances-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/maintenances-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/maintenances-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/maintenances-payments`


<!-- END_810fd97b255f244b84178242df0f8e7b -->

<!-- START_38874c27a1058e103418fae5eaba0fe6 -->
## api/v1/maintenances-payments/{maintenances_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/maintenances-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/maintenances-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/maintenances-payments/{maintenances_payment}`


<!-- END_38874c27a1058e103418fae5eaba0fe6 -->

<!-- START_9682dc820796d50b1d5efd42d8387411 -->
## api/v1/maintenances-payments/{maintenances_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/maintenances-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/maintenances-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/maintenances-payments/{maintenances_payment}`

`PATCH api/v1/maintenances-payments/{maintenances_payment}`


<!-- END_9682dc820796d50b1d5efd42d8387411 -->

<!-- START_436792992a141167a0ebe7c89d18ba5c -->
## api/v1/maintenances-payments/{maintenances_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/maintenances-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/maintenances-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/maintenances-payments/{maintenances_payment}`


<!-- END_436792992a141167a0ebe7c89d18ba5c -->

<!-- START_69c04aa3f0e733e8ddad61e8dbf85af4 -->
## api/v1/facility-payments/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/facility-payments/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-payments/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/facility-payments/media`


<!-- END_69c04aa3f0e733e8ddad61e8dbf85af4 -->

<!-- START_134dd7508db71e751a019db9a9a1a626 -->
## api/v1/facility-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-payments`


<!-- END_134dd7508db71e751a019db9a9a1a626 -->

<!-- START_ca40a2ed86d852550692bfbce49ef389 -->
## api/v1/facility-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/facility-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/facility-payments`


<!-- END_ca40a2ed86d852550692bfbce49ef389 -->

<!-- START_b9658e3e53590618f536b8f323d73039 -->
## api/v1/facility-payments/{facility_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/facility-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/facility-payments/{facility_payment}`


<!-- END_b9658e3e53590618f536b8f323d73039 -->

<!-- START_6db1116882f41b588728bcc0763d6ab2 -->
## api/v1/facility-payments/{facility_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/facility-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/facility-payments/{facility_payment}`

`PATCH api/v1/facility-payments/{facility_payment}`


<!-- END_6db1116882f41b588728bcc0763d6ab2 -->

<!-- START_8868dd7df72186a101254a387a211642 -->
## api/v1/facility-payments/{facility_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/facility-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/facility-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/facility-payments/{facility_payment}`


<!-- END_8868dd7df72186a101254a387a211642 -->

<!-- START_35f18fdf05f66bf917290a3b19a2a403 -->
## api/v1/notice-boards
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/notice-boards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/notice-boards"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/notice-boards`


<!-- END_35f18fdf05f66bf917290a3b19a2a403 -->

<!-- START_76ab98436d77f309df07d5fbe097978c -->
## api/v1/notice-boards
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/notice-boards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/notice-boards"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/notice-boards`


<!-- END_76ab98436d77f309df07d5fbe097978c -->

<!-- START_ec1e83939e8f289a661c5fb84f3526bf -->
## api/v1/notice-boards/{notice_board}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/notice-boards/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/notice-boards/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/notice-boards/{notice_board}`


<!-- END_ec1e83939e8f289a661c5fb84f3526bf -->

<!-- START_c6a2eb372d43d419e5f4015935fac767 -->
## api/v1/notice-boards/{notice_board}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/notice-boards/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/notice-boards/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/notice-boards/{notice_board}`

`PATCH api/v1/notice-boards/{notice_board}`


<!-- END_c6a2eb372d43d419e5f4015935fac767 -->

<!-- START_5c4f72d901c50f16b9826d0198eb6bfe -->
## api/v1/notice-boards/{notice_board}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/notice-boards/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/notice-boards/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/notice-boards/{notice_board}`


<!-- END_5c4f72d901c50f16b9826d0198eb6bfe -->

<!-- START_8d9c1c2893cb98868649772ed9b01121 -->
## api/v1/event-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-categories`


<!-- END_8d9c1c2893cb98868649772ed9b01121 -->

<!-- START_37814d1f64e94f95653255231f16f808 -->
## api/v1/event-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/event-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/event-categories`


<!-- END_37814d1f64e94f95653255231f16f808 -->

<!-- START_260e07092069fe85ced3c06e3624982e -->
## api/v1/event-categories/{event_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-categories/{event_category}`


<!-- END_260e07092069fe85ced3c06e3624982e -->

<!-- START_ba1b91ba28990a8072a6a4c5759fbe64 -->
## api/v1/event-categories/{event_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/event-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/event-categories/{event_category}`

`PATCH api/v1/event-categories/{event_category}`


<!-- END_ba1b91ba28990a8072a6a4c5759fbe64 -->

<!-- START_73bd16be5ed649792340727e12c3a30c -->
## api/v1/event-categories/{event_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/event-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/event-categories/{event_category}`


<!-- END_73bd16be5ed649792340727e12c3a30c -->

<!-- START_0c74564f8d269e0897076083354c3fdf -->
## api/v1/event-controls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-controls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-controls`


<!-- END_0c74564f8d269e0897076083354c3fdf -->

<!-- START_555bc0e473dd2dc5f5ae38a937d0ba01 -->
## api/v1/event-controls
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/event-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-controls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/event-controls`


<!-- END_555bc0e473dd2dc5f5ae38a937d0ba01 -->

<!-- START_ae38f96d8025385182f2bfe815ed605b -->
## api/v1/event-controls/{event_control}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-controls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-controls/{event_control}`


<!-- END_ae38f96d8025385182f2bfe815ed605b -->

<!-- START_a8b9878338b3c5b2071a2f5639c511c7 -->
## api/v1/event-controls/{event_control}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/event-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-controls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/event-controls/{event_control}`

`PATCH api/v1/event-controls/{event_control}`


<!-- END_a8b9878338b3c5b2071a2f5639c511c7 -->

<!-- START_b9eaf25c9259372fe8a69e1bc888219d -->
## api/v1/event-controls/{event_control}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/event-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-controls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/event-controls/{event_control}`


<!-- END_b9eaf25c9259372fe8a69e1bc888219d -->

<!-- START_2c864cf0b53544e13352aa84e89b9170 -->
## api/v1/event-enrolls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-enrolls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-enrolls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-enrolls`


<!-- END_2c864cf0b53544e13352aa84e89b9170 -->

<!-- START_e6f09a696890057f92ce24812e45cef8 -->
## api/v1/event-enrolls
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/event-enrolls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-enrolls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/event-enrolls`


<!-- END_e6f09a696890057f92ce24812e45cef8 -->

<!-- START_056fb44bb2c3f9d0732ff3d179d7e57c -->
## api/v1/event-enrolls/{event_enroll}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-enrolls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-enrolls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-enrolls/{event_enroll}`


<!-- END_056fb44bb2c3f9d0732ff3d179d7e57c -->

<!-- START_5d11a8ba905066678f60e80c350ac481 -->
## api/v1/event-enrolls/{event_enroll}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/event-enrolls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-enrolls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/event-enrolls/{event_enroll}`

`PATCH api/v1/event-enrolls/{event_enroll}`


<!-- END_5d11a8ba905066678f60e80c350ac481 -->

<!-- START_93dae174c3c9ee5856b20d4fa3cda9e9 -->
## api/v1/event-enrolls/{event_enroll}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/event-enrolls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-enrolls/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/event-enrolls/{event_enroll}`


<!-- END_93dae174c3c9ee5856b20d4fa3cda9e9 -->

<!-- START_3acb37cd9403161cfaf46dc5e710dacc -->
## api/v1/add-feedbacks/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-feedbacks/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-feedbacks/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-feedbacks/media`


<!-- END_3acb37cd9403161cfaf46dc5e710dacc -->

<!-- START_3f91255d1e4ea86a32dc3918c2e2eb0a -->
## api/v1/add-feedbacks
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-feedbacks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-feedbacks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-feedbacks`


<!-- END_3f91255d1e4ea86a32dc3918c2e2eb0a -->

<!-- START_23ec19e3a679462526c67ac13a394d76 -->
## api/v1/add-feedbacks
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-feedbacks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-feedbacks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-feedbacks`


<!-- END_23ec19e3a679462526c67ac13a394d76 -->

<!-- START_b3a3a0846b43acc5baf4ae4a56eca784 -->
## api/v1/add-feedbacks/{add_feedback}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-feedbacks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-feedbacks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-feedbacks/{add_feedback}`


<!-- END_b3a3a0846b43acc5baf4ae4a56eca784 -->

<!-- START_cb46a5ff643091b5da1dd82495e3088d -->
## api/v1/add-feedbacks/{add_feedback}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/add-feedbacks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-feedbacks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/add-feedbacks/{add_feedback}`

`PATCH api/v1/add-feedbacks/{add_feedback}`


<!-- END_cb46a5ff643091b5da1dd82495e3088d -->

<!-- START_be098f19be0449441fa7ababba7684b6 -->
## api/v1/add-feedbacks/{add_feedback}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/add-feedbacks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-feedbacks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/add-feedbacks/{add_feedback}`


<!-- END_be098f19be0449441fa7ababba7684b6 -->

<!-- START_b72fe3a7d35bfeaffebda937eb90dfd4 -->
## api/v1/feedback-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/feedback-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/feedback-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/feedback-categories`


<!-- END_b72fe3a7d35bfeaffebda937eb90dfd4 -->

<!-- START_940cad35f9d370662f629cc7515e02ce -->
## api/v1/feedback-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/feedback-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/feedback-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/feedback-categories`


<!-- END_940cad35f9d370662f629cc7515e02ce -->

<!-- START_2da712235b73cd6dc2a392fdc23a11b6 -->
## api/v1/feedback-categories/{feedback_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/feedback-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/feedback-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/feedback-categories/{feedback_category}`


<!-- END_2da712235b73cd6dc2a392fdc23a11b6 -->

<!-- START_fe2060049a0e8d6a75b078694f9c07c4 -->
## api/v1/feedback-categories/{feedback_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/feedback-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/feedback-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/feedback-categories/{feedback_category}`

`PATCH api/v1/feedback-categories/{feedback_category}`


<!-- END_fe2060049a0e8d6a75b078694f9c07c4 -->

<!-- START_ef41b9ba8a86bf8347c17dbf31c7c5f7 -->
## api/v1/feedback-categories/{feedback_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/feedback-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/feedback-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/feedback-categories/{feedback_category}`


<!-- END_ef41b9ba8a86bf8347c17dbf31c7c5f7 -->

<!-- START_649e64d64d2da73d2baf09e8d046869b -->
## api/v1/form-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/form-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/form-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/form-categories`


<!-- END_649e64d64d2da73d2baf09e8d046869b -->

<!-- START_2d59e09b49f20d5192a60d8cf1950cd5 -->
## api/v1/form-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/form-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/form-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/form-categories`


<!-- END_2d59e09b49f20d5192a60d8cf1950cd5 -->

<!-- START_caca1372975805076e337f7324cf13c3 -->
## api/v1/form-categories/{form_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/form-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/form-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/form-categories/{form_category}`


<!-- END_caca1372975805076e337f7324cf13c3 -->

<!-- START_4d46455ceafc99a012c271911563d01b -->
## api/v1/form-categories/{form_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/form-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/form-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/form-categories/{form_category}`

`PATCH api/v1/form-categories/{form_category}`


<!-- END_4d46455ceafc99a012c271911563d01b -->

<!-- START_04a5dd84e1bb6a676a80cd231444843f -->
## api/v1/form-categories/{form_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/form-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/form-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/form-categories/{form_category}`


<!-- END_04a5dd84e1bb6a676a80cd231444843f -->

<!-- START_8f169206cd351b112d7bc25fd77b3127 -->
## api/v1/membe-card-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/membe-card-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membe-card-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/membe-card-managements`


<!-- END_8f169206cd351b112d7bc25fd77b3127 -->

<!-- START_1b3589e9f6081cf9a21293240f55d3d3 -->
## api/v1/membe-card-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/membe-card-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membe-card-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/membe-card-managements`


<!-- END_1b3589e9f6081cf9a21293240f55d3d3 -->

<!-- START_fc9db0d0bdb1abad6dc6227e199a0ce2 -->
## api/v1/membe-card-managements/{membe_card_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/membe-card-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membe-card-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/membe-card-managements/{membe_card_management}`


<!-- END_fc9db0d0bdb1abad6dc6227e199a0ce2 -->

<!-- START_627ee285f070cd8d153a5f80c97d9694 -->
## api/v1/membe-card-managements/{membe_card_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/membe-card-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membe-card-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/membe-card-managements/{membe_card_management}`

`PATCH api/v1/membe-card-managements/{membe_card_management}`


<!-- END_627ee285f070cd8d153a5f80c97d9694 -->

<!-- START_20e589b0eba33459fcd1351c8929c05d -->
## api/v1/membe-card-managements/{membe_card_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/membe-card-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membe-card-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/membe-card-managements/{membe_card_management}`


<!-- END_20e589b0eba33459fcd1351c8929c05d -->

<!-- START_1e913b3bb819007a398303379723f85e -->
## api/v1/membership-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/membership-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membership-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/membership-managements`


<!-- END_1e913b3bb819007a398303379723f85e -->

<!-- START_0b9c8ff9c6320d850f8e2a10e1e14181 -->
## api/v1/membership-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/membership-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membership-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/membership-managements`


<!-- END_0b9c8ff9c6320d850f8e2a10e1e14181 -->

<!-- START_a8271c1a0e145df9be8f96c2f3973356 -->
## api/v1/membership-managements/{membership_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/membership-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membership-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/membership-managements/{membership_management}`


<!-- END_a8271c1a0e145df9be8f96c2f3973356 -->

<!-- START_f616ff9833f558f0fe517204185e44dc -->
## api/v1/membership-managements/{membership_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/membership-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membership-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/membership-managements/{membership_management}`

`PATCH api/v1/membership-managements/{membership_management}`


<!-- END_f616ff9833f558f0fe517204185e44dc -->

<!-- START_4f7763240e5ccca4ec21429be48a0fa6 -->
## api/v1/membership-managements/{membership_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/membership-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/membership-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/membership-managements/{membership_management}`


<!-- END_4f7763240e5ccca4ec21429be48a0fa6 -->

<!-- START_1e39d5305b6a59d49eca7392105ee590 -->
## api/v1/merchant-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-categories`


<!-- END_1e39d5305b6a59d49eca7392105ee590 -->

<!-- START_c9edeac5d9b1bda843b31499070a1f9b -->
## api/v1/merchant-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/merchant-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/merchant-categories`


<!-- END_c9edeac5d9b1bda843b31499070a1f9b -->

<!-- START_16a26cd3f6cf36f4842c949ddbf4ab66 -->
## api/v1/merchant-categories/{merchant_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-categories/{merchant_category}`


<!-- END_16a26cd3f6cf36f4842c949ddbf4ab66 -->

<!-- START_5ffd5e6ec3119917ce8871f25a2bbb7c -->
## api/v1/merchant-categories/{merchant_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/merchant-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/merchant-categories/{merchant_category}`

`PATCH api/v1/merchant-categories/{merchant_category}`


<!-- END_5ffd5e6ec3119917ce8871f25a2bbb7c -->

<!-- START_b9138318219d83eda53889bf19c276d9 -->
## api/v1/merchant-categories/{merchant_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/merchant-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/merchant-categories/{merchant_category}`


<!-- END_b9138318219d83eda53889bf19c276d9 -->

<!-- START_441917d18bd32a8f42fe1fa7c9f9aac4 -->
## api/v1/merchant-sub-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-sub-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-sub-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-sub-categories`


<!-- END_441917d18bd32a8f42fe1fa7c9f9aac4 -->

<!-- START_226c09ac0fb225484b1e6462a8d5c07f -->
## api/v1/merchant-sub-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/merchant-sub-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-sub-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/merchant-sub-categories`


<!-- END_226c09ac0fb225484b1e6462a8d5c07f -->

<!-- START_ad609ad39630be7df4b1c741eb9579cc -->
## api/v1/merchant-sub-categories/{merchant_sub_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-sub-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-sub-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-sub-categories/{merchant_sub_category}`


<!-- END_ad609ad39630be7df4b1c741eb9579cc -->

<!-- START_a73149799de7e314a1607a36feb1cd1a -->
## api/v1/merchant-sub-categories/{merchant_sub_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/merchant-sub-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-sub-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/merchant-sub-categories/{merchant_sub_category}`

`PATCH api/v1/merchant-sub-categories/{merchant_sub_category}`


<!-- END_a73149799de7e314a1607a36feb1cd1a -->

<!-- START_601f22394a86bc8b18a3c1e9dbc0dee2 -->
## api/v1/merchant-sub-categories/{merchant_sub_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/merchant-sub-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-sub-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/merchant-sub-categories/{merchant_sub_category}`


<!-- END_601f22394a86bc8b18a3c1e9dbc0dee2 -->

<!-- START_09fb824c7f4f59eda4f968d731a3929e -->
## api/v1/order-types
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-types`


<!-- END_09fb824c7f4f59eda4f968d731a3929e -->

<!-- START_c5d37ff5774473c2f2085671bc4f32fe -->
## api/v1/order-types
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/order-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/order-types`


<!-- END_c5d37ff5774473c2f2085671bc4f32fe -->

<!-- START_e4283c00600bb4ba0f29a733e629b9b8 -->
## api/v1/order-types/{order_type}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-types/{order_type}`


<!-- END_e4283c00600bb4ba0f29a733e629b9b8 -->

<!-- START_10cabb12d27f5f43d2b99b1a1b87bb34 -->
## api/v1/order-types/{order_type}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/order-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/order-types/{order_type}`

`PATCH api/v1/order-types/{order_type}`


<!-- END_10cabb12d27f5f43d2b99b1a1b87bb34 -->

<!-- START_c2faa6e60eac62b1210c0ae282b8ec39 -->
## api/v1/order-types/{order_type}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/order-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/order-types/{order_type}`


<!-- END_c2faa6e60eac62b1210c0ae282b8ec39 -->

<!-- START_9144adc0c7b6501d79d1e59e613ed775 -->
## api/v1/merchant-levels
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-levels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-levels"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-levels`


<!-- END_9144adc0c7b6501d79d1e59e613ed775 -->

<!-- START_5cc4f8329c118ba95a2741d5878959d0 -->
## api/v1/merchant-levels
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/merchant-levels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-levels"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/merchant-levels`


<!-- END_5cc4f8329c118ba95a2741d5878959d0 -->

<!-- START_4791d58b3735015641f11ca3599741e1 -->
## api/v1/merchant-levels/{merchant_level}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-levels/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-levels/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-levels/{merchant_level}`


<!-- END_4791d58b3735015641f11ca3599741e1 -->

<!-- START_59f00e96fb26869647b6ad86338f8902 -->
## api/v1/merchant-levels/{merchant_level}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/merchant-levels/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-levels/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/merchant-levels/{merchant_level}`

`PATCH api/v1/merchant-levels/{merchant_level}`


<!-- END_59f00e96fb26869647b6ad86338f8902 -->

<!-- START_f5d2fe37426262ca5e1e52e9987cd703 -->
## api/v1/merchant-levels/{merchant_level}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/merchant-levels/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-levels/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/merchant-levels/{merchant_level}`


<!-- END_f5d2fe37426262ca5e1e52e9987cd703 -->

<!-- START_edceddc2c9c62f1772dfb576a8c54c4d -->
## api/v1/merchant-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-managements`


<!-- END_edceddc2c9c62f1772dfb576a8c54c4d -->

<!-- START_3bb08195691b2036c2359fa8d86a5043 -->
## api/v1/merchant-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/merchant-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/merchant-managements`


<!-- END_3bb08195691b2036c2359fa8d86a5043 -->

<!-- START_d240342c4b300b7169fa8dfba1f8c6a2 -->
## api/v1/merchant-managements/{merchant_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/merchant-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/merchant-managements/{merchant_management}`


<!-- END_d240342c4b300b7169fa8dfba1f8c6a2 -->

<!-- START_e70d1eb9345e8a55704a4027f19c5c5c -->
## api/v1/merchant-managements/{merchant_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/merchant-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/merchant-managements/{merchant_management}`

`PATCH api/v1/merchant-managements/{merchant_management}`


<!-- END_e70d1eb9345e8a55704a4027f19c5c5c -->

<!-- START_feedf818918a80cf9c115d34b6e6bfd0 -->
## api/v1/merchant-managements/{merchant_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/merchant-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/merchant-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/merchant-managements/{merchant_management}`


<!-- END_feedf818918a80cf9c115d34b6e6bfd0 -->

<!-- START_eab9ffae6f676c8097e0042e634649d1 -->
## api/v1/member-card-settings/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/member-card-settings/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/member-card-settings/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/member-card-settings/media`


<!-- END_eab9ffae6f676c8097e0042e634649d1 -->

<!-- START_f9889bb684c369e9d83113f17e6186c4 -->
## api/v1/member-card-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/member-card-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/member-card-settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/member-card-settings`


<!-- END_f9889bb684c369e9d83113f17e6186c4 -->

<!-- START_cb658b17468ae96d2d91f676990d14a2 -->
## api/v1/member-card-settings
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/member-card-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/member-card-settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/member-card-settings`


<!-- END_cb658b17468ae96d2d91f676990d14a2 -->

<!-- START_2e6186f28b4ad3e3d981ebf8766fa56d -->
## api/v1/member-card-settings/{member_card_setting}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/member-card-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/member-card-settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/member-card-settings/{member_card_setting}`


<!-- END_2e6186f28b4ad3e3d981ebf8766fa56d -->

<!-- START_23bc4a99d610e2bc1845580c600bbdf3 -->
## api/v1/member-card-settings/{member_card_setting}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/member-card-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/member-card-settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/member-card-settings/{member_card_setting}`

`PATCH api/v1/member-card-settings/{member_card_setting}`


<!-- END_23bc4a99d610e2bc1845580c600bbdf3 -->

<!-- START_60bc809e7652233e053c0d9d27063ee9 -->
## api/v1/member-card-settings/{member_card_setting}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/member-card-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/member-card-settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/member-card-settings/{member_card_setting}`


<!-- END_60bc809e7652233e053c0d9d27063ee9 -->

<!-- START_88f81f07badcb384990f11cdafdfb4c8 -->
## api/v1/item-cateogries
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/item-cateogries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-cateogries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/item-cateogries`


<!-- END_88f81f07badcb384990f11cdafdfb4c8 -->

<!-- START_8c6b05e11922d682d0672ac2db77eff0 -->
## api/v1/item-cateogries
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/item-cateogries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-cateogries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/item-cateogries`


<!-- END_8c6b05e11922d682d0672ac2db77eff0 -->

<!-- START_bab936361036f16c4e43ac6d3d991716 -->
## api/v1/item-cateogries/{item_cateogry}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/item-cateogries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-cateogries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/item-cateogries/{item_cateogry}`


<!-- END_bab936361036f16c4e43ac6d3d991716 -->

<!-- START_1339be97d649d8d7a0a4988f61dd5c4a -->
## api/v1/item-cateogries/{item_cateogry}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/item-cateogries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-cateogries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/item-cateogries/{item_cateogry}`

`PATCH api/v1/item-cateogries/{item_cateogry}`


<!-- END_1339be97d649d8d7a0a4988f61dd5c4a -->

<!-- START_2c72a08c961a639c843eceed55ed8ca9 -->
## api/v1/item-cateogries/{item_cateogry}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/item-cateogries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-cateogries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/item-cateogries/{item_cateogry}`


<!-- END_2c72a08c961a639c843eceed55ed8ca9 -->

<!-- START_8e68d58b201fba10e67333d8fb669df7 -->
## api/v1/item-managements/media
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/item-managements/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-managements/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/item-managements/media`


<!-- END_8e68d58b201fba10e67333d8fb669df7 -->

<!-- START_94e1d1c88efddd0f7f763484672f4f5d -->
## api/v1/item-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/item-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/item-managements`


<!-- END_94e1d1c88efddd0f7f763484672f4f5d -->

<!-- START_b6e2a025e2e27f7b5d37603745536d0b -->
## api/v1/item-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/item-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/item-managements`


<!-- END_b6e2a025e2e27f7b5d37603745536d0b -->

<!-- START_d5ac3c9f4518c3103b1c531b30a7cd11 -->
## api/v1/item-managements/{item_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/item-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/item-managements/{item_management}`


<!-- END_d5ac3c9f4518c3103b1c531b30a7cd11 -->

<!-- START_cb5f412c2a14a807a5377649dae5ff7b -->
## api/v1/item-managements/{item_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/item-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/item-managements/{item_management}`

`PATCH api/v1/item-managements/{item_management}`


<!-- END_cb5f412c2a14a807a5377649dae5ff7b -->

<!-- START_1dd6384c216345f3010ff90eaa7e9dbf -->
## api/v1/item-managements/{item_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/item-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/item-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/item-managements/{item_management}`


<!-- END_1dd6384c216345f3010ff90eaa7e9dbf -->

<!-- START_60e41c59a3822665ec2d673aa0dfc868 -->
## api/v1/add-on-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-on-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-on-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-on-categories`


<!-- END_60e41c59a3822665ec2d673aa0dfc868 -->

<!-- START_d4951fea73e4122544abf042f60f6f80 -->
## api/v1/add-on-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/add-on-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-on-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/add-on-categories`


<!-- END_d4951fea73e4122544abf042f60f6f80 -->

<!-- START_b4f08a71229a2eeca699b0b5561fdfa4 -->
## api/v1/add-on-categories/{add_on_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/add-on-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-on-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/add-on-categories/{add_on_category}`


<!-- END_b4f08a71229a2eeca699b0b5561fdfa4 -->

<!-- START_4e9b193a1a8b1dae22510c1ef0f7583f -->
## api/v1/add-on-categories/{add_on_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/add-on-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-on-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/add-on-categories/{add_on_category}`

`PATCH api/v1/add-on-categories/{add_on_category}`


<!-- END_4e9b193a1a8b1dae22510c1ef0f7583f -->

<!-- START_d0ac664014e2b355680e8eb9ba3893da -->
## api/v1/add-on-categories/{add_on_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/add-on-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/add-on-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/add-on-categories/{add_on_category}`


<!-- END_d0ac664014e2b355680e8eb9ba3893da -->

<!-- START_a8555079fc6aa5afd4887584b4799197 -->
## api/v1/addon-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/addon-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/addon-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/addon-managements`


<!-- END_a8555079fc6aa5afd4887584b4799197 -->

<!-- START_6ef86cdce47cd46a8f9667b7c7c35add -->
## api/v1/addon-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/addon-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/addon-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/addon-managements`


<!-- END_6ef86cdce47cd46a8f9667b7c7c35add -->

<!-- START_6ad7c7f0445ae817cae26a837aee6c35 -->
## api/v1/addon-managements/{addon_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/addon-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/addon-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/addon-managements/{addon_management}`


<!-- END_6ad7c7f0445ae817cae26a837aee6c35 -->

<!-- START_649c94489ed371c885139259258a2286 -->
## api/v1/addon-managements/{addon_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/addon-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/addon-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/addon-managements/{addon_management}`

`PATCH api/v1/addon-managements/{addon_management}`


<!-- END_649c94489ed371c885139259258a2286 -->

<!-- START_2c865967ae6dabaa8d6cadf3eac7d91f -->
## api/v1/addon-managements/{addon_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/addon-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/addon-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/addon-managements/{addon_management}`


<!-- END_2c865967ae6dabaa8d6cadf3eac7d91f -->

<!-- START_da5b26e7a815921b8245083f907ba389 -->
## api/v1/order-statuses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-statuses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-statuses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-statuses`


<!-- END_da5b26e7a815921b8245083f907ba389 -->

<!-- START_ed4c02ad37989f896441cf39bee1d6fd -->
## api/v1/order-statuses
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/order-statuses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-statuses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/order-statuses`


<!-- END_ed4c02ad37989f896441cf39bee1d6fd -->

<!-- START_e68f5f271c36e4b365f357ddbc436b24 -->
## api/v1/order-statuses/{order_status}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-statuses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-statuses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-statuses/{order_status}`


<!-- END_e68f5f271c36e4b365f357ddbc436b24 -->

<!-- START_8d28af693be8147fb569449e9d4ab3f0 -->
## api/v1/order-statuses/{order_status}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/order-statuses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-statuses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/order-statuses/{order_status}`

`PATCH api/v1/order-statuses/{order_status}`


<!-- END_8d28af693be8147fb569449e9d4ab3f0 -->

<!-- START_841fd1bdf3f94e316cfc26b3c6936bb9 -->
## api/v1/order-statuses/{order_status}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/order-statuses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-statuses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/order-statuses/{order_status}`


<!-- END_841fd1bdf3f94e316cfc26b3c6936bb9 -->

<!-- START_0514ba5d9dea73595bef9063895476ba -->
## api/v1/order-items
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-items`


<!-- END_0514ba5d9dea73595bef9063895476ba -->

<!-- START_d288b2186b153f60b446973521c976cf -->
## api/v1/order-items
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/order-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/order-items`


<!-- END_d288b2186b153f60b446973521c976cf -->

<!-- START_6686a023ef6872dedd1749beb4a00d7a -->
## api/v1/order-items/{order_item}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-items/{order_item}`


<!-- END_6686a023ef6872dedd1749beb4a00d7a -->

<!-- START_2fd9845df376b08d8d108f563c8709c0 -->
## api/v1/order-items/{order_item}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/order-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/order-items/{order_item}`

`PATCH api/v1/order-items/{order_item}`


<!-- END_2fd9845df376b08d8d108f563c8709c0 -->

<!-- START_9981e7b68fd4e46d4bcd9670af7ad668 -->
## api/v1/order-items/{order_item}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/order-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/order-items/{order_item}`


<!-- END_9981e7b68fd4e46d4bcd9670af7ad668 -->

<!-- START_c69af638e45133fa63cda5377ad3245d -->
## api/v1/order-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-managements`


<!-- END_c69af638e45133fa63cda5377ad3245d -->

<!-- START_9e7bf37298de9e6274ab813e55bc89b9 -->
## api/v1/order-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/order-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/order-managements`


<!-- END_9e7bf37298de9e6274ab813e55bc89b9 -->

<!-- START_00a2c69c90140243f69cfe146c08cc89 -->
## api/v1/order-managements/{order_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/order-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/order-managements/{order_management}`


<!-- END_00a2c69c90140243f69cfe146c08cc89 -->

<!-- START_b5abebe3d25cbbe0579e69c6594c6444 -->
## api/v1/order-managements/{order_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/order-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/order-managements/{order_management}`

`PATCH api/v1/order-managements/{order_management}`


<!-- END_b5abebe3d25cbbe0579e69c6594c6444 -->

<!-- START_8e160fe336ba918166cb445e70ecdcca -->
## api/v1/order-managements/{order_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/order-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/order-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/order-managements/{order_management}`


<!-- END_8e160fe336ba918166cb445e70ecdcca -->

<!-- START_a6aaf5293c111eb4d5161138b36e6927 -->
## api/v1/voucher-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-categories`


<!-- END_a6aaf5293c111eb4d5161138b36e6927 -->

<!-- START_e3e7f10f3de94572c950e736cbc4e820 -->
## api/v1/voucher-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/voucher-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/voucher-categories`


<!-- END_e3e7f10f3de94572c950e736cbc4e820 -->

<!-- START_2535eaab2fdfed3e67721335a3def98e -->
## api/v1/voucher-categories/{voucher_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-categories/{voucher_category}`


<!-- END_2535eaab2fdfed3e67721335a3def98e -->

<!-- START_eb697012c03266135e5bd5fe15c2bfac -->
## api/v1/voucher-categories/{voucher_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/voucher-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/voucher-categories/{voucher_category}`

`PATCH api/v1/voucher-categories/{voucher_category}`


<!-- END_eb697012c03266135e5bd5fe15c2bfac -->

<!-- START_bde6dfaaeaf272f3d8c28d8b418be6b3 -->
## api/v1/voucher-categories/{voucher_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/voucher-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/voucher-categories/{voucher_category}`


<!-- END_bde6dfaaeaf272f3d8c28d8b418be6b3 -->

<!-- START_5a8c95aabe337ada7310eb5ed45a202c -->
## api/v1/voucher-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-managements`


<!-- END_5a8c95aabe337ada7310eb5ed45a202c -->

<!-- START_f3f746424a4cd58088d9e6203d9a6124 -->
## api/v1/voucher-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/voucher-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/voucher-managements`


<!-- END_f3f746424a4cd58088d9e6203d9a6124 -->

<!-- START_cf63be52cc318c733c4ee5b2b6453c65 -->
## api/v1/voucher-managements/{voucher_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-managements/{voucher_management}`


<!-- END_cf63be52cc318c733c4ee5b2b6453c65 -->

<!-- START_f9d5a5d2ce377212faf40140dbdda160 -->
## api/v1/voucher-managements/{voucher_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/voucher-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/voucher-managements/{voucher_management}`

`PATCH api/v1/voucher-managements/{voucher_management}`


<!-- END_f9d5a5d2ce377212faf40140dbdda160 -->

<!-- START_27a5f55ab96101527991039cf6d1dae9 -->
## api/v1/voucher-managements/{voucher_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/voucher-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/voucher-managements/{voucher_management}`


<!-- END_27a5f55ab96101527991039cf6d1dae9 -->

<!-- START_6fb696fa5011e58dd64a63d27084afaa -->
## api/v1/reward-catogeries
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/reward-catogeries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-catogeries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/reward-catogeries`


<!-- END_6fb696fa5011e58dd64a63d27084afaa -->

<!-- START_439a882d4b5c74953c5b93feeaac91da -->
## api/v1/reward-catogeries
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/reward-catogeries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-catogeries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/reward-catogeries`


<!-- END_439a882d4b5c74953c5b93feeaac91da -->

<!-- START_39b905f03893a337f8e0c77bc84d2918 -->
## api/v1/reward-catogeries/{reward_catogery}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/reward-catogeries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-catogeries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/reward-catogeries/{reward_catogery}`


<!-- END_39b905f03893a337f8e0c77bc84d2918 -->

<!-- START_b3a4c4228375ef5467df7fa770dbf001 -->
## api/v1/reward-catogeries/{reward_catogery}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/reward-catogeries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-catogeries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/reward-catogeries/{reward_catogery}`

`PATCH api/v1/reward-catogeries/{reward_catogery}`


<!-- END_b3a4c4228375ef5467df7fa770dbf001 -->

<!-- START_5130748ec2e4382f2fbbf2749c742598 -->
## api/v1/reward-catogeries/{reward_catogery}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/reward-catogeries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-catogeries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/reward-catogeries/{reward_catogery}`


<!-- END_5130748ec2e4382f2fbbf2749c742598 -->

<!-- START_87670ff9e098d763fe73e820624659c3 -->
## api/v1/reward-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/reward-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/reward-managements`


<!-- END_87670ff9e098d763fe73e820624659c3 -->

<!-- START_d475a38f14f321b6af7e1024817d205d -->
## api/v1/reward-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/reward-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-managements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/reward-managements`


<!-- END_d475a38f14f321b6af7e1024817d205d -->

<!-- START_27288cb607d2fd4ed6734669d0f95c91 -->
## api/v1/reward-managements/{reward_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/reward-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/reward-managements/{reward_management}`


<!-- END_27288cb607d2fd4ed6734669d0f95c91 -->

<!-- START_baf172167468b981e97642d9b51ed9e7 -->
## api/v1/reward-managements/{reward_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/reward-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/reward-managements/{reward_management}`

`PATCH api/v1/reward-managements/{reward_management}`


<!-- END_baf172167468b981e97642d9b51ed9e7 -->

<!-- START_7716ece955adab224b1c39845738fe74 -->
## api/v1/reward-managements/{reward_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/reward-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-managements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/reward-managements/{reward_management}`


<!-- END_7716ece955adab224b1c39845738fe74 -->

<!-- START_91e830b642fde492eb41ee26b2c9c2c9 -->
## api/v1/point-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/point-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/point-settings`


<!-- END_91e830b642fde492eb41ee26b2c9c2c9 -->

<!-- START_99c6b4e80c0e294bb682c94e9ae7a4c8 -->
## api/v1/point-settings
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/point-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/point-settings`


<!-- END_99c6b4e80c0e294bb682c94e9ae7a4c8 -->

<!-- START_d2fcca8c5782b6e0c783bbe1e0db295e -->
## api/v1/point-settings/{point_setting}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/point-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/point-settings/{point_setting}`


<!-- END_d2fcca8c5782b6e0c783bbe1e0db295e -->

<!-- START_177b7911ced07a807da26f12758ec21e -->
## api/v1/point-settings/{point_setting}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/point-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/point-settings/{point_setting}`

`PATCH api/v1/point-settings/{point_setting}`


<!-- END_177b7911ced07a807da26f12758ec21e -->

<!-- START_3e8a56bf41c646302f75cbe8b095b824 -->
## api/v1/point-settings/{point_setting}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/point-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/point-settings/{point_setting}`


<!-- END_3e8a56bf41c646302f75cbe8b095b824 -->

<!-- START_86e3bab5b3f8b832eaafd591ccb4175a -->
## api/v1/point-conditions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/point-conditions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-conditions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/point-conditions`


<!-- END_86e3bab5b3f8b832eaafd591ccb4175a -->

<!-- START_b7adcfe7edc60c8e2dc76faa59cf7168 -->
## api/v1/point-conditions
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/point-conditions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-conditions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/point-conditions`


<!-- END_b7adcfe7edc60c8e2dc76faa59cf7168 -->

<!-- START_fc15b245ef10f66ac4bfaf72b976058e -->
## api/v1/point-conditions/{point_condition}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/point-conditions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-conditions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/point-conditions/{point_condition}`


<!-- END_fc15b245ef10f66ac4bfaf72b976058e -->

<!-- START_1ea84ae9918b3c43d6c8b8f895e9ae88 -->
## api/v1/point-conditions/{point_condition}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/point-conditions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-conditions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/point-conditions/{point_condition}`

`PATCH api/v1/point-conditions/{point_condition}`


<!-- END_1ea84ae9918b3c43d6c8b8f895e9ae88 -->

<!-- START_dd0eae7a8471d6fcfb3eedcaed852cc1 -->
## api/v1/point-conditions/{point_condition}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/point-conditions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-conditions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/point-conditions/{point_condition}`


<!-- END_dd0eae7a8471d6fcfb3eedcaed852cc1 -->

<!-- START_248b31348a4230309275a588a8d863f9 -->
## api/v1/voucher-wallets
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-wallets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-wallets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-wallets`


<!-- END_248b31348a4230309275a588a8d863f9 -->

<!-- START_54bc068771911b3702b2015910b5006e -->
## api/v1/voucher-wallets
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/voucher-wallets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-wallets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/voucher-wallets`


<!-- END_54bc068771911b3702b2015910b5006e -->

<!-- START_de3751a653f97c99f1d151f622d66004 -->
## api/v1/voucher-wallets/{voucher_wallet}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-wallets/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-wallets/{voucher_wallet}`


<!-- END_de3751a653f97c99f1d151f622d66004 -->

<!-- START_04cf11aed4cf238e6457103943dfe0e7 -->
## api/v1/voucher-wallets/{voucher_wallet}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/voucher-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-wallets/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/voucher-wallets/{voucher_wallet}`

`PATCH api/v1/voucher-wallets/{voucher_wallet}`


<!-- END_04cf11aed4cf238e6457103943dfe0e7 -->

<!-- START_45055a152fa34041857048c812069625 -->
## api/v1/voucher-wallets/{voucher_wallet}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/voucher-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-wallets/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/voucher-wallets/{voucher_wallet}`


<!-- END_45055a152fa34041857048c812069625 -->

<!-- START_8f671b740cf5fd7497f82e54b1f3feee -->
## api/v1/reward-lists
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/reward-lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-lists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/reward-lists`


<!-- END_8f671b740cf5fd7497f82e54b1f3feee -->

<!-- START_d2ca027951ddd34e7b8864b59fa6acab -->
## api/v1/reward-lists
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/reward-lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-lists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/reward-lists`


<!-- END_d2ca027951ddd34e7b8864b59fa6acab -->

<!-- START_802901af0f900c811148bd070994b3b6 -->
## api/v1/reward-lists/{reward_list}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/reward-lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-lists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/reward-lists/{reward_list}`


<!-- END_802901af0f900c811148bd070994b3b6 -->

<!-- START_b535b9493585cfbaed5f086d18b1be1e -->
## api/v1/reward-lists/{reward_list}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/reward-lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-lists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/reward-lists/{reward_list}`

`PATCH api/v1/reward-lists/{reward_list}`


<!-- END_b535b9493585cfbaed5f086d18b1be1e -->

<!-- START_0912b6e98ab2a0733405821601a6cb02 -->
## api/v1/reward-lists/{reward_list}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/reward-lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/reward-lists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/reward-lists/{reward_list}`


<!-- END_0912b6e98ab2a0733405821601a6cb02 -->

<!-- START_17d91e0255495ca4c71d70b804ac76fe -->
## api/v1/point-logs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/point-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/point-logs`


<!-- END_17d91e0255495ca4c71d70b804ac76fe -->

<!-- START_b54403b3b650f716b43ab203c7f7c334 -->
## api/v1/point-logs
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/point-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/point-logs`


<!-- END_b54403b3b650f716b43ab203c7f7c334 -->

<!-- START_16a1135fc36a9dc8a21689a3c97b116b -->
## api/v1/point-logs/{point_log}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/point-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-logs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/point-logs/{point_log}`


<!-- END_16a1135fc36a9dc8a21689a3c97b116b -->

<!-- START_b2c1f7c799facc59b15490255a873dc4 -->
## api/v1/point-logs/{point_log}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/point-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-logs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/point-logs/{point_log}`

`PATCH api/v1/point-logs/{point_log}`


<!-- END_b2c1f7c799facc59b15490255a873dc4 -->

<!-- START_0e8bbe1e88703a1d704999690cd4d939 -->
## api/v1/point-logs/{point_log}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/point-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/point-logs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/point-logs/{point_log}`


<!-- END_0e8bbe1e88703a1d704999690cd4d939 -->

<!-- START_9423381469b7b3a64e86eec1a8947519 -->
## api/v1/vehicle-brands
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/vehicle-brands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-brands"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/vehicle-brands`


<!-- END_9423381469b7b3a64e86eec1a8947519 -->

<!-- START_4ea067227e55913f3f1400a1d7845771 -->
## api/v1/vehicle-brands
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/vehicle-brands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-brands"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/vehicle-brands`


<!-- END_4ea067227e55913f3f1400a1d7845771 -->

<!-- START_f57f9f8c807cfb928a8976db79571729 -->
## api/v1/vehicle-brands/{vehicle_brand}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/vehicle-brands/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-brands/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/vehicle-brands/{vehicle_brand}`


<!-- END_f57f9f8c807cfb928a8976db79571729 -->

<!-- START_7e6cf32b04aa477dcd8b96bb038a6ce8 -->
## api/v1/vehicle-brands/{vehicle_brand}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/vehicle-brands/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-brands/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/vehicle-brands/{vehicle_brand}`

`PATCH api/v1/vehicle-brands/{vehicle_brand}`


<!-- END_7e6cf32b04aa477dcd8b96bb038a6ce8 -->

<!-- START_2544005c5f2381ab2dc1498fc11a03bf -->
## api/v1/vehicle-brands/{vehicle_brand}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/vehicle-brands/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-brands/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/vehicle-brands/{vehicle_brand}`


<!-- END_2544005c5f2381ab2dc1498fc11a03bf -->

<!-- START_d212bab0c0a5db5a5257e9d631609f98 -->
## api/v1/vehicle-mangements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/vehicle-mangements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-mangements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/vehicle-mangements`


<!-- END_d212bab0c0a5db5a5257e9d631609f98 -->

<!-- START_776b565c18ff780c9397584674de8143 -->
## api/v1/vehicle-mangements
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/vehicle-mangements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-mangements"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/vehicle-mangements`


<!-- END_776b565c18ff780c9397584674de8143 -->

<!-- START_0b4446fe85c71a4ae68bb8b5064d7acf -->
## api/v1/vehicle-mangements/{vehicle_mangement}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/vehicle-mangements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-mangements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/vehicle-mangements/{vehicle_mangement}`


<!-- END_0b4446fe85c71a4ae68bb8b5064d7acf -->

<!-- START_41a7ea02aa37a156b0d0e1b471cd5f44 -->
## api/v1/vehicle-mangements/{vehicle_mangement}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/vehicle-mangements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-mangements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/vehicle-mangements/{vehicle_mangement}`

`PATCH api/v1/vehicle-mangements/{vehicle_mangement}`


<!-- END_41a7ea02aa37a156b0d0e1b471cd5f44 -->

<!-- START_cb0ab1cecf3b059b7e64437c04f90de4 -->
## api/v1/vehicle-mangements/{vehicle_mangement}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/vehicle-mangements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-mangements/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/vehicle-mangements/{vehicle_mangement}`


<!-- END_cb0ab1cecf3b059b7e64437c04f90de4 -->

<!-- START_ed13aa50bfe68b461db98977e5f2a80f -->
## api/v1/vehicle-models
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/vehicle-models" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-models"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/vehicle-models`


<!-- END_ed13aa50bfe68b461db98977e5f2a80f -->

<!-- START_7ec62ea7064011cc25b6d2ef79681349 -->
## api/v1/vehicle-models
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/vehicle-models" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-models"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/vehicle-models`


<!-- END_7ec62ea7064011cc25b6d2ef79681349 -->

<!-- START_83e984c28fe15a53bdd50e3546266a85 -->
## api/v1/vehicle-models/{vehicle_model}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/vehicle-models/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-models/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/vehicle-models/{vehicle_model}`


<!-- END_83e984c28fe15a53bdd50e3546266a85 -->

<!-- START_e8fbdd706663f5d550a8341d14930e15 -->
## api/v1/vehicle-models/{vehicle_model}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/vehicle-models/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-models/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/vehicle-models/{vehicle_model}`

`PATCH api/v1/vehicle-models/{vehicle_model}`


<!-- END_e8fbdd706663f5d550a8341d14930e15 -->

<!-- START_3dd55b6997ccf32a572617e1be25be31 -->
## api/v1/vehicle-models/{vehicle_model}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/vehicle-models/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/vehicle-models/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/vehicle-models/{vehicle_model}`


<!-- END_3dd55b6997ccf32a572617e1be25be31 -->

<!-- START_cc3c15f73c6ffd169399f5c31c16be00 -->
## api/v1/car-park-locations
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/car-park-locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/car-park-locations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/car-park-locations`


<!-- END_cc3c15f73c6ffd169399f5c31c16be00 -->

<!-- START_0a81ccb791214411f3b8e79ac2852481 -->
## api/v1/car-park-locations
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/car-park-locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/car-park-locations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/car-park-locations`


<!-- END_0a81ccb791214411f3b8e79ac2852481 -->

<!-- START_e7c9ddea87814b3e682248fd8f834c33 -->
## api/v1/car-park-locations/{car_park_location}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/car-park-locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/car-park-locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/car-park-locations/{car_park_location}`


<!-- END_e7c9ddea87814b3e682248fd8f834c33 -->

<!-- START_205258e6699301399e1f7dffbabc59fd -->
## api/v1/car-park-locations/{car_park_location}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/car-park-locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/car-park-locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/car-park-locations/{car_park_location}`

`PATCH api/v1/car-park-locations/{car_park_location}`


<!-- END_205258e6699301399e1f7dffbabc59fd -->

<!-- START_14546ed02ca05b10dabadc4dbfdbbade -->
## api/v1/car-park-locations/{car_park_location}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/car-park-locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/car-park-locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/car-park-locations/{car_park_location}`


<!-- END_14546ed02ca05b10dabadc4dbfdbbade -->

<!-- START_99ee2b83826d61099c23180795982135 -->
## api/v1/carpark-logs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/carpark-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/carpark-logs`


<!-- END_99ee2b83826d61099c23180795982135 -->

<!-- START_da660a509541d40b0ff74eeadc482b7d -->
## api/v1/carpark-logs
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/carpark-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/carpark-logs`


<!-- END_da660a509541d40b0ff74eeadc482b7d -->

<!-- START_47f5b59b65d4dce57f570d1ce2934601 -->
## api/v1/carpark-logs/{carpark_log}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/carpark-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-logs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/carpark-logs/{carpark_log}`


<!-- END_47f5b59b65d4dce57f570d1ce2934601 -->

<!-- START_e4ffed276dbe4741854c32f3179d16b2 -->
## api/v1/carpark-logs/{carpark_log}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/carpark-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-logs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/carpark-logs/{carpark_log}`

`PATCH api/v1/carpark-logs/{carpark_log}`


<!-- END_e4ffed276dbe4741854c32f3179d16b2 -->

<!-- START_e6b74968d112e95ba0b471e69fc691ba -->
## api/v1/carpark-logs/{carpark_log}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/carpark-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-logs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/carpark-logs/{carpark_log}`


<!-- END_e6b74968d112e95ba0b471e69fc691ba -->

<!-- START_0cddee93638ae56efd0732a1a9cd52b2 -->
## api/v1/event-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-payments`


<!-- END_0cddee93638ae56efd0732a1a9cd52b2 -->

<!-- START_a0fa1f0b6c7a969435b40761359a58e1 -->
## api/v1/event-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/event-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/event-payments`


<!-- END_a0fa1f0b6c7a969435b40761359a58e1 -->

<!-- START_a602f3ee429b4f394d7d108d84315d36 -->
## api/v1/event-payments/{event_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/event-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/event-payments/{event_payment}`


<!-- END_a602f3ee429b4f394d7d108d84315d36 -->

<!-- START_b2cdde57155d0719f6c3b212dec2684d -->
## api/v1/event-payments/{event_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/event-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/event-payments/{event_payment}`

`PATCH api/v1/event-payments/{event_payment}`


<!-- END_b2cdde57155d0719f6c3b212dec2684d -->

<!-- START_cf519f2f94b6d78e9caf39fe031ea9ef -->
## api/v1/event-payments/{event_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/event-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/event-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/event-payments/{event_payment}`


<!-- END_cf519f2f94b6d78e9caf39fe031ea9ef -->

<!-- START_917d5cb538d5d19ba05b85fd5922f74e -->
## api/v1/carpark-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/carpark-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/carpark-payments`


<!-- END_917d5cb538d5d19ba05b85fd5922f74e -->

<!-- START_66b1f2e3e90599e73a0e2903fe722289 -->
## api/v1/carpark-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/carpark-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/carpark-payments`


<!-- END_66b1f2e3e90599e73a0e2903fe722289 -->

<!-- START_3dbec9ddd9afed0c3bcfc5de08b8b2ec -->
## api/v1/carpark-payments/{carpark_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/carpark-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/carpark-payments/{carpark_payment}`


<!-- END_3dbec9ddd9afed0c3bcfc5de08b8b2ec -->

<!-- START_e77f4ca7d3150671ebcd3737bebf293e -->
## api/v1/carpark-payments/{carpark_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/carpark-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/carpark-payments/{carpark_payment}`

`PATCH api/v1/carpark-payments/{carpark_payment}`


<!-- END_e77f4ca7d3150671ebcd3737bebf293e -->

<!-- START_217ec82a4a3c8ed3fcc77d5db76eac54 -->
## api/v1/carpark-payments/{carpark_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/carpark-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/carpark-payments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/carpark-payments/{carpark_payment}`


<!-- END_217ec82a4a3c8ed3fcc77d5db76eac54 -->

<!-- START_3773a100551a6cd6a9af19965b30b6c4 -->
## api/v1/shop-rentals
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/shop-rentals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/shop-rentals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/shop-rentals`


<!-- END_3773a100551a6cd6a9af19965b30b6c4 -->

<!-- START_1dca82e9fd1eada5a2c75148de011d9d -->
## api/v1/shop-rentals
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/shop-rentals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/shop-rentals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/shop-rentals`


<!-- END_1dca82e9fd1eada5a2c75148de011d9d -->

<!-- START_fc4d61b4ba9ffc13327ca1aad35af8a2 -->
## api/v1/shop-rentals/{shop_rental}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/shop-rentals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/shop-rentals/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/shop-rentals/{shop_rental}`


<!-- END_fc4d61b4ba9ffc13327ca1aad35af8a2 -->

<!-- START_0b68c19708729f6b1562fca43ecb1b0e -->
## api/v1/shop-rentals/{shop_rental}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/shop-rentals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/shop-rentals/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/shop-rentals/{shop_rental}`

`PATCH api/v1/shop-rentals/{shop_rental}`


<!-- END_0b68c19708729f6b1562fca43ecb1b0e -->

<!-- START_31d3a0a6bc23139c090c9d62366d39dd -->
## api/v1/shop-rentals/{shop_rental}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/shop-rentals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/shop-rentals/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/shop-rentals/{shop_rental}`


<!-- END_31d3a0a6bc23139c090c9d62366d39dd -->

<!-- START_85acfd58e58baae2d29194bb7d287ec9 -->
## api/v1/mall-units
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/mall-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/mall-units"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/mall-units`


<!-- END_85acfd58e58baae2d29194bb7d287ec9 -->

<!-- START_08d359892e70456c785c554fe534be8e -->
## api/v1/mall-units
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/mall-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/mall-units"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/mall-units`


<!-- END_08d359892e70456c785c554fe534be8e -->

<!-- START_5b745736d6016ab6e19295d7d6162afd -->
## api/v1/mall-units/{mall_unit}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/mall-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/mall-units/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/mall-units/{mall_unit}`


<!-- END_5b745736d6016ab6e19295d7d6162afd -->

<!-- START_6670c0b9b69ef478fecb775949af6ee0 -->
## api/v1/mall-units/{mall_unit}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/mall-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/mall-units/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/mall-units/{mall_unit}`

`PATCH api/v1/mall-units/{mall_unit}`


<!-- END_6670c0b9b69ef478fecb775949af6ee0 -->

<!-- START_7c58294e537781b55e3b748d4c65988e -->
## api/v1/mall-units/{mall_unit}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/mall-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/mall-units/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/mall-units/{mall_unit}`


<!-- END_7c58294e537781b55e3b748d4c65988e -->

<!-- START_e0d3dd3af795fb1781f3f3a315784599 -->
## api/v1/voucher-redeems
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-redeems" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-redeems"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-redeems`


<!-- END_e0d3dd3af795fb1781f3f3a315784599 -->

<!-- START_b03a265cc9fe3b7aecd4efa6100bbce4 -->
## api/v1/voucher-redeems
> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/voucher-redeems" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-redeems"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/voucher-redeems`


<!-- END_b03a265cc9fe3b7aecd4efa6100bbce4 -->

<!-- START_5400be11de81ca7f62482edf46f05022 -->
## api/v1/voucher-redeems/{voucher_redeem}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/voucher-redeems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-redeems/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/voucher-redeems/{voucher_redeem}`


<!-- END_5400be11de81ca7f62482edf46f05022 -->

<!-- START_9ea97fc991b7321bbd7960e327a740e4 -->
## api/v1/voucher-redeems/{voucher_redeem}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/voucher-redeems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-redeems/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/voucher-redeems/{voucher_redeem}`

`PATCH api/v1/voucher-redeems/{voucher_redeem}`


<!-- END_9ea97fc991b7321bbd7960e327a740e4 -->

<!-- START_ec61803ecee4eede5506ec87ed36ab02 -->
## api/v1/voucher-redeems/{voucher_redeem}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/voucher-redeems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/voucher-redeems/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/voucher-redeems/{voucher_redeem}`


<!-- END_ec61803ecee4eede5506ec87ed36ab02 -->


