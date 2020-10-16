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


<!-- START_41d2f7697c6118f36f8b676e5bd19ea0 -->
## Login using the given user ID / email.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_dusk/login/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_dusk/login/1/"
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
`GET _dusk/login/{userId}/{guard?}`


<!-- END_41d2f7697c6118f36f8b676e5bd19ea0 -->

<!-- START_6375e7300024aae0f6af283b4a72cb1b -->
## Log the user out of the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_dusk/logout/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_dusk/logout/"
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



### HTTP Request
`GET _dusk/logout/{guard?}`


<!-- END_6375e7300024aae0f6af283b4a72cb1b -->

<!-- START_09dcf3e9a9b6585fa40e4ead6c3c858a -->
## Retrieve the authenticated user identifier and class name.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_dusk/user/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_dusk/user/"
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


> Example response (200):

```json
[]
```

### HTTP Request
`GET _dusk/user/{guard?}`


<!-- END_09dcf3e9a9b6585fa40e4ead6c3c858a -->

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

<!-- START_3340c681e1d077cb3238cfcd9aad8f90 -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
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


> Example response (302):

```json
null
```

### HTTP Request
`GET /`

`POST /`

`PUT /`

`PATCH /`

`DELETE /`

`OPTIONS /`


<!-- END_3340c681e1d077cb3238cfcd9aad8f90 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
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
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
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
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
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


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
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
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_2372327199865eb4d9726702a5c3f886 -->
## userVerification/{token}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/userVerification/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/userVerification/1"
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


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET userVerification/{token}`


<!-- END_2372327199865eb4d9726702a5c3f886 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_b6d160cd7627e3f014cdd0952c7e2166 -->
## admin/user-alerts/read
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user-alerts/read" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts/read"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/read`


<!-- END_b6d160cd7627e3f014cdd0952c7e2166 -->

<!-- START_8f583347cc741210524d7e2829645ea5 -->
## admin/permissions/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/permissions/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions/destroy"
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
`DELETE admin/permissions/destroy`


<!-- END_8f583347cc741210524d7e2829645ea5 -->

<!-- START_507ea499e1f258d23592f36d68e679c8 -->
## admin/permissions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions`


<!-- END_507ea499e1f258d23592f36d68e679c8 -->

<!-- START_8af39b8b8467d71aafdf675eab809e47 -->
## admin/permissions/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/permissions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions/create`


<!-- END_8af39b8b8467d71aafdf675eab809e47 -->

<!-- START_f1b0f0143b42a05f7de260e9489a48a8 -->
## admin/permissions
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions"
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
`POST admin/permissions`


<!-- END_f1b0f0143b42a05f7de260e9489a48a8 -->

<!-- START_52941ce4d55aac10ab700af19c6cf7fd -->
## admin/permissions/{permission}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions/{permission}`


<!-- END_52941ce4d55aac10ab700af19c6cf7fd -->

<!-- START_263860a5fe135afe0dfb6ece84279f62 -->
## admin/permissions/{permission}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/permissions/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions/{permission}/edit`


<!-- END_263860a5fe135afe0dfb6ece84279f62 -->

<!-- START_84a298099551f7e3b7a4167dbb77f79c -->
## admin/permissions/{permission}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions/1"
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
`PUT admin/permissions/{permission}`

`PATCH admin/permissions/{permission}`


<!-- END_84a298099551f7e3b7a4167dbb77f79c -->

<!-- START_26cd27653b91a7f60ca8666929159078 -->
## admin/permissions/{permission}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/permissions/1"
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
`DELETE admin/permissions/{permission}`


<!-- END_26cd27653b91a7f60ca8666929159078 -->

<!-- START_9a3494b330f2468d48a283465528dd7d -->
## admin/roles/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/roles/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles/destroy"
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
`DELETE admin/roles/destroy`


<!-- END_9a3494b330f2468d48a283465528dd7d -->

<!-- START_879622c0ac94a4a0f4d364d46a42bc7e -->
## admin/roles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->

<!-- START_d29246d3a43660bb5210bf9aff91c85a -->
## admin/roles/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles/create`


<!-- END_d29246d3a43660bb5210bf9aff91c85a -->

<!-- START_9117e54780cf55c5071dfb91b33aaef6 -->
## admin/roles
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles"
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
`POST admin/roles`


<!-- END_9117e54780cf55c5071dfb91b33aaef6 -->

<!-- START_13b678fa4fec2b2a37ef8510c152dc44 -->
## admin/roles/{role}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles/{role}`


<!-- END_13b678fa4fec2b2a37ef8510c152dc44 -->

<!-- START_beee0bc2c2bf5945907dc7735ae5abfc -->
## admin/roles/{role}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/roles/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles/{role}/edit`


<!-- END_beee0bc2c2bf5945907dc7735ae5abfc -->

<!-- START_c7dcda79da31b26bc24750dc109d9724 -->
## admin/roles/{role}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles/1"
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
`PUT admin/roles/{role}`

`PATCH admin/roles/{role}`


<!-- END_c7dcda79da31b26bc24750dc109d9724 -->

<!-- START_bf3def166f3885500f81b51b4c2bd978 -->
## admin/roles/{role}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/roles/1"
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
`DELETE admin/roles/{role}`


<!-- END_bf3def166f3885500f81b51b4c2bd978 -->

<!-- START_638699da87953aa0482969b25e4fc4c6 -->
## admin/users/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/users/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users/destroy"
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
`DELETE admin/users/destroy`


<!-- END_638699da87953aa0482969b25e4fc4c6 -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## admin/users
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_5480f74e868e50a30ac924242a423503 -->
## admin/users/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/create`


<!-- END_5480f74e868e50a30ac924242a423503 -->

<!-- START_84cdb3581c8df106c62233f1ebb35d8b -->
## admin/users
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users"
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
`POST admin/users`


<!-- END_84cdb3581c8df106c62233f1ebb35d8b -->

<!-- START_efce1b78e6391078c4024f200af60be8 -->
## admin/users/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/{user}`


<!-- END_efce1b78e6391078c4024f200af60be8 -->

<!-- START_f8b3cec767336a1c2280a2a3173678d9 -->
## admin/users/{user}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/{user}/edit`


<!-- END_f8b3cec767336a1c2280a2a3173678d9 -->

<!-- START_d7f417f614d8614811f624203f4e63cd -->
## admin/users/{user}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users/1"
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
`PUT admin/users/{user}`

`PATCH admin/users/{user}`


<!-- END_d7f417f614d8614811f624203f4e63cd -->

<!-- START_d5165e9382f90b24649e6ea2a27ea85d -->
## admin/users/{user}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/users/1"
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
`DELETE admin/users/{user}`


<!-- END_d5165e9382f90b24649e6ea2a27ea85d -->

<!-- START_97e3615326309c20672a3e930c352f5a -->
## admin/audit-logs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/audit-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/audit-logs"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/audit-logs`


<!-- END_97e3615326309c20672a3e930c352f5a -->

<!-- START_efad7b7340f2e1b19c41a8fb40ccb7cf -->
## admin/audit-logs/{audit_log}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/audit-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/audit-logs/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/audit-logs/{audit_log}`


<!-- END_efad7b7340f2e1b19c41a8fb40ccb7cf -->

<!-- START_53f89f8c3963e9c3602d95b9ad4d3dee -->
## admin/user-alerts/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user-alerts/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts/destroy"
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
`DELETE admin/user-alerts/destroy`


<!-- END_53f89f8c3963e9c3602d95b9ad4d3dee -->

<!-- START_c4322b0d4bee989af5882b6a516acada -->
## admin/user-alerts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user-alerts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts`


<!-- END_c4322b0d4bee989af5882b6a516acada -->

<!-- START_84e356ea0832422c3edb84563ebdc0ab -->
## admin/user-alerts/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user-alerts/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/create`


<!-- END_84e356ea0832422c3edb84563ebdc0ab -->

<!-- START_3cfff5bc99c00727709980ee00dbe942 -->
## admin/user-alerts
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/user-alerts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts"
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
`POST admin/user-alerts`


<!-- END_3cfff5bc99c00727709980ee00dbe942 -->

<!-- START_62464daaa614a91fdeb3685c5d090e98 -->
## admin/user-alerts/{user_alert}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/{user_alert}`


<!-- END_62464daaa614a91fdeb3685c5d090e98 -->

<!-- START_789a8e9ad4c1fa45999f9a56f0236a7e -->
## admin/user-alerts/{user_alert}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-alerts/1"
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
`DELETE admin/user-alerts/{user_alert}`


<!-- END_789a8e9ad4c1fa45999f9a56f0236a7e -->

<!-- START_5a2703406522119632781f7be24ba9ad -->
## admin/add-blocks/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-blocks/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks/destroy"
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
`DELETE admin/add-blocks/destroy`


<!-- END_5a2703406522119632781f7be24ba9ad -->

<!-- START_e6e054ae7fb31eae5dcf7d7c7c5db630 -->
## admin/add-blocks
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-blocks`


<!-- END_e6e054ae7fb31eae5dcf7d7c7c5db630 -->

<!-- START_4aeccfee1adab3cfd5ef767886260e40 -->
## admin/add-blocks/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-blocks/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-blocks/create`


<!-- END_4aeccfee1adab3cfd5ef767886260e40 -->

<!-- START_72cbb798d6309cc1ef2eb6bad3f7a607 -->
## admin/add-blocks
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks"
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
`POST admin/add-blocks`


<!-- END_72cbb798d6309cc1ef2eb6bad3f7a607 -->

<!-- START_dbe1a22f00e42da812546e3b3e584a23 -->
## admin/add-blocks/{add_block}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-blocks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-blocks/{add_block}`


<!-- END_dbe1a22f00e42da812546e3b3e584a23 -->

<!-- START_adba1038b313b857d09d63b6146b4682 -->
## admin/add-blocks/{add_block}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-blocks/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-blocks/{add_block}/edit`


<!-- END_adba1038b313b857d09d63b6146b4682 -->

<!-- START_936a3061383c0caf2c7d56b576983aeb -->
## admin/add-blocks/{add_block}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/add-blocks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks/1"
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
`PUT admin/add-blocks/{add_block}`

`PATCH admin/add-blocks/{add_block}`


<!-- END_936a3061383c0caf2c7d56b576983aeb -->

<!-- START_ab7c05e3d562fc2efbdde331d58237bc -->
## admin/add-blocks/{add_block}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-blocks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-blocks/1"
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
`DELETE admin/add-blocks/{add_block}`


<!-- END_ab7c05e3d562fc2efbdde331d58237bc -->

<!-- START_c03de2c64d719ead73ac0a05d9f7468d -->
## admin/add-units/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-units/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/destroy"
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
`DELETE admin/add-units/destroy`


<!-- END_c03de2c64d719ead73ac0a05d9f7468d -->

<!-- START_b4024ebb762d3233f396e2cb2866207e -->
## admin/add-units/parse-csv-import
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-units/parse-csv-import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/parse-csv-import"
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
`POST admin/add-units/parse-csv-import`


<!-- END_b4024ebb762d3233f396e2cb2866207e -->

<!-- START_8aad5e4b3da4b6c750afdcc6806c0699 -->
## admin/add-units/process-csv-import
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-units/process-csv-import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/process-csv-import"
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
`POST admin/add-units/process-csv-import`


<!-- END_8aad5e4b3da4b6c750afdcc6806c0699 -->

<!-- START_80d8d96b49cebd7592659ebea65293f9 -->
## admin/add-units
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-units`


<!-- END_80d8d96b49cebd7592659ebea65293f9 -->

<!-- START_7fdf6a26909fa6bfd4068a44beebadcd -->
## admin/add-units/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-units/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-units/create`


<!-- END_7fdf6a26909fa6bfd4068a44beebadcd -->

<!-- START_e7ef884be24f723061f294b1facb2ed9 -->
## admin/add-units
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units"
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
`POST admin/add-units`


<!-- END_e7ef884be24f723061f294b1facb2ed9 -->

<!-- START_5225108acb8b03465772376515346cb0 -->
## admin/add-units/{add_unit}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-units/{add_unit}`


<!-- END_5225108acb8b03465772376515346cb0 -->

<!-- START_31cf213c182d5101369f8e21e7e82b36 -->
## admin/add-units/{add_unit}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-units/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-units/{add_unit}/edit`


<!-- END_31cf213c182d5101369f8e21e7e82b36 -->

<!-- START_029e02e63085731e445c182bb5d991d0 -->
## admin/add-units/{add_unit}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/add-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/1"
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
`PUT admin/add-units/{add_unit}`

`PATCH admin/add-units/{add_unit}`


<!-- END_029e02e63085731e445c182bb5d991d0 -->

<!-- START_db97ebeff8c5849e1ad4b45997cf03f1 -->
## admin/add-units/{add_unit}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-units/1"
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
`DELETE admin/add-units/{add_unit}`


<!-- END_db97ebeff8c5849e1ad4b45997cf03f1 -->

<!-- START_5a72a09a1e84ca2356fc5546bc51e737 -->
## admin/unit-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/unit-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/destroy"
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
`DELETE admin/unit-managements/destroy`


<!-- END_5a72a09a1e84ca2356fc5546bc51e737 -->

<!-- START_0d6254c3b4bb4dcd8f87381257b090fb -->
## admin/unit-managements/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/unit-managements/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/media"
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
`POST admin/unit-managements/media`


<!-- END_0d6254c3b4bb4dcd8f87381257b090fb -->

<!-- START_786f80ac6324af5a4ce285de2eb1ae89 -->
## admin/unit-managements/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/unit-managements/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/ckmedia"
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
`POST admin/unit-managements/ckmedia`


<!-- END_786f80ac6324af5a4ce285de2eb1ae89 -->

<!-- START_e074d56d63e4e7f4a709b823d910ca17 -->
## admin/unit-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/unit-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/unit-managements`


<!-- END_e074d56d63e4e7f4a709b823d910ca17 -->

<!-- START_a95e24f9bbf589b398a5823d5b12909c -->
## admin/unit-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/unit-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/unit-managements/create`


<!-- END_a95e24f9bbf589b398a5823d5b12909c -->

<!-- START_9f64eed98d512af16ae5d6895b194e4c -->
## admin/unit-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/unit-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements"
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
`POST admin/unit-managements`


<!-- END_9f64eed98d512af16ae5d6895b194e4c -->

<!-- START_0de61786ef02884013f410715007d2ef -->
## admin/unit-managements/{unit_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/unit-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/unit-managements/{unit_management}`


<!-- END_0de61786ef02884013f410715007d2ef -->

<!-- START_0b8174507cda9ed63f87d667c784369c -->
## admin/unit-managements/{unit_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/unit-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/unit-managements/{unit_management}/edit`


<!-- END_0b8174507cda9ed63f87d667c784369c -->

<!-- START_f1dfbde842ca7802916916f6cfe1675c -->
## admin/unit-managements/{unit_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/unit-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/1"
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
`PUT admin/unit-managements/{unit_management}`

`PATCH admin/unit-managements/{unit_management}`


<!-- END_f1dfbde842ca7802916916f6cfe1675c -->

<!-- START_de453871a59484a3a48c38455aa2e29c -->
## admin/unit-managements/{unit_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/unit-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/unit-managements/1"
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
`DELETE admin/unit-managements/{unit_management}`


<!-- END_de453871a59484a3a48c38455aa2e29c -->

<!-- START_defc1145d829b1704cfaadb6accb343d -->
## admin/add-family-members
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-family-members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-family-members"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-family-members`


<!-- END_defc1145d829b1704cfaadb6accb343d -->

<!-- START_194ba1087a89942fe1376d278908f66e -->
## admin/activity-logs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/activity-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/activity-logs"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/activity-logs`


<!-- END_194ba1087a89942fe1376d278908f66e -->

<!-- START_606d46af834f6650876a13b0223d5ae3 -->
## admin/facility-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/destroy"
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
`DELETE admin/facility-categories/destroy`


<!-- END_606d46af834f6650876a13b0223d5ae3 -->

<!-- START_2a82462376193085d1c18deed44cf78b -->
## admin/facility-categories/parse-csv-import
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-categories/parse-csv-import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/parse-csv-import"
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
`POST admin/facility-categories/parse-csv-import`


<!-- END_2a82462376193085d1c18deed44cf78b -->

<!-- START_4cc44a1a469deea6d27288d1d4523649 -->
## admin/facility-categories/process-csv-import
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-categories/process-csv-import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/process-csv-import"
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
`POST admin/facility-categories/process-csv-import`


<!-- END_4cc44a1a469deea6d27288d1d4523649 -->

<!-- START_092dd671f6fbc3d19344545ea85985b3 -->
## admin/facility-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-categories`


<!-- END_092dd671f6fbc3d19344545ea85985b3 -->

<!-- START_e12683a777401bce316a4cda293a3fc9 -->
## admin/facility-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-categories/create`


<!-- END_e12683a777401bce316a4cda293a3fc9 -->

<!-- START_21001b1b374a71231411f27e2cf1412c -->
## admin/facility-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories"
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
`POST admin/facility-categories`


<!-- END_21001b1b374a71231411f27e2cf1412c -->

<!-- START_da2b6b1d0bbb5bf090a5defa2e029930 -->
## admin/facility-categories/{facility_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-categories/{facility_category}`


<!-- END_da2b6b1d0bbb5bf090a5defa2e029930 -->

<!-- START_bdcdf017f7bc17d9b06dea22f3693f3d -->
## admin/facility-categories/{facility_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-categories/{facility_category}/edit`


<!-- END_bdcdf017f7bc17d9b06dea22f3693f3d -->

<!-- START_19426d59b68e836377c88165c8911e51 -->
## admin/facility-categories/{facility_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/facility-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/1"
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
`PUT admin/facility-categories/{facility_category}`

`PATCH admin/facility-categories/{facility_category}`


<!-- END_19426d59b68e836377c88165c8911e51 -->

<!-- START_42b7187cf889ddba6189672279337614 -->
## admin/facility-categories/{facility_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-categories/1"
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
`DELETE admin/facility-categories/{facility_category}`


<!-- END_42b7187cf889ddba6189672279337614 -->

<!-- START_30fcb64f99f17e7ee6eb73432f8563d1 -->
## admin/facility-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/destroy"
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
`DELETE admin/facility-managements/destroy`


<!-- END_30fcb64f99f17e7ee6eb73432f8563d1 -->

<!-- START_e6fdd69153ace8a0b9b6666ba1991635 -->
## admin/facility-managements/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-managements/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/media"
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
`POST admin/facility-managements/media`


<!-- END_e6fdd69153ace8a0b9b6666ba1991635 -->

<!-- START_e21dc1d4b63ca00d4aa396b68bbcb0b1 -->
## admin/facility-managements/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-managements/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/ckmedia"
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
`POST admin/facility-managements/ckmedia`


<!-- END_e21dc1d4b63ca00d4aa396b68bbcb0b1 -->

<!-- START_f0c3b7fdc58a482ed89c031ef21ecb29 -->
## admin/facility-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-managements`


<!-- END_f0c3b7fdc58a482ed89c031ef21ecb29 -->

<!-- START_08a388d2c81e8b4a2ad530e6f07caed4 -->
## admin/facility-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-managements/create`


<!-- END_08a388d2c81e8b4a2ad530e6f07caed4 -->

<!-- START_787acc38c09202b0209332e6499a7d17 -->
## admin/facility-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements"
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
`POST admin/facility-managements`


<!-- END_787acc38c09202b0209332e6499a7d17 -->

<!-- START_0280a3a9d8597490f211d7b5fb49afaf -->
## admin/facility-managements/{facility_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-managements/{facility_management}`


<!-- END_0280a3a9d8597490f211d7b5fb49afaf -->

<!-- START_c95b01959adac511e348fe4e12457b5a -->
## admin/facility-managements/{facility_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-managements/{facility_management}/edit`


<!-- END_c95b01959adac511e348fe4e12457b5a -->

<!-- START_2b41133792eddc100456330edb323efb -->
## admin/facility-managements/{facility_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/facility-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/1"
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
`PUT admin/facility-managements/{facility_management}`

`PATCH admin/facility-managements/{facility_management}`


<!-- END_2b41133792eddc100456330edb323efb -->

<!-- START_04a0a402a3454916e909bc49468101e5 -->
## admin/facility-managements/{facility_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-managements/1"
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
`DELETE admin/facility-managements/{facility_management}`


<!-- END_04a0a402a3454916e909bc49468101e5 -->

<!-- START_ff9b87d8b59ca70893cae8f846606f75 -->
## admin/add-tenants
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-tenants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-tenants"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-tenants`


<!-- END_ff9b87d8b59ca70893cae8f846606f75 -->

<!-- START_04a790b663df23c460518b9c6d2847cf -->
## admin/family-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/family-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/family-settings"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/family-settings`


<!-- END_04a790b663df23c460518b9c6d2847cf -->

<!-- START_b55a9adbc520a2631f50d861bb8719a1 -->
## admin/tenant-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/tenant-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/tenant-settings"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/tenant-settings`


<!-- END_b55a9adbc520a2631f50d861bb8719a1 -->

<!-- START_b5d0f9f3c1b3da2e495ce48e6a11bc7e -->
## admin/facility-books/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-books/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books/destroy"
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
`DELETE admin/facility-books/destroy`


<!-- END_b5d0f9f3c1b3da2e495ce48e6a11bc7e -->

<!-- START_f4b75ba5eeec9c492257845810fcfa75 -->
## admin/facility-books
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-books`


<!-- END_f4b75ba5eeec9c492257845810fcfa75 -->

<!-- START_4e9c9014025e90953b12fb405b35cc5d -->
## admin/facility-books/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-books/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-books/create`


<!-- END_4e9c9014025e90953b12fb405b35cc5d -->

<!-- START_b4a532ada4946a942b2634ad1c21a60d -->
## admin/facility-books
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books"
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
`POST admin/facility-books`


<!-- END_b4a532ada4946a942b2634ad1c21a60d -->

<!-- START_83e2f2400708934b0e22424fd4d8e257 -->
## admin/facility-books/{facility_book}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-books/{facility_book}`


<!-- END_83e2f2400708934b0e22424fd4d8e257 -->

<!-- START_4b0d35d5591d0a10d213dc1978b5d3c6 -->
## admin/facility-books/{facility_book}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-books/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-books/{facility_book}/edit`


<!-- END_4b0d35d5591d0a10d213dc1978b5d3c6 -->

<!-- START_58543f60c7c564a1c92a88c7ec44bf5e -->
## admin/facility-books/{facility_book}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/facility-books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books/1"
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
`PUT admin/facility-books/{facility_book}`

`PATCH admin/facility-books/{facility_book}`


<!-- END_58543f60c7c564a1c92a88c7ec44bf5e -->

<!-- START_0c824e55100e68119f47aa0799e3bf30 -->
## admin/facility-books/{facility_book}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-books/1"
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
`DELETE admin/facility-books/{facility_book}`


<!-- END_0c824e55100e68119f47aa0799e3bf30 -->

<!-- START_e8e76d03c209a4c2edf1c86dbd08e38b -->
## admin/check-facilities
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/check-facilities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/check-facilities"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/check-facilities`


<!-- END_e8e76d03c209a4c2edf1c86dbd08e38b -->

<!-- START_d6265ac5092139d82bdfa4c6d2c730ad -->
## admin/add-visitors/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-visitors/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors/destroy"
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
`DELETE admin/add-visitors/destroy`


<!-- END_d6265ac5092139d82bdfa4c6d2c730ad -->

<!-- START_e9ee8a2241f5fe1b819dd5dfee713861 -->
## admin/add-visitors
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-visitors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-visitors`


<!-- END_e9ee8a2241f5fe1b819dd5dfee713861 -->

<!-- START_921f09cdf0998ac3c27f2e1bcc391029 -->
## admin/add-visitors/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-visitors/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-visitors/create`


<!-- END_921f09cdf0998ac3c27f2e1bcc391029 -->

<!-- START_819f8732e7dda80525e125e87c478c52 -->
## admin/add-visitors
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-visitors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors"
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
`POST admin/add-visitors`


<!-- END_819f8732e7dda80525e125e87c478c52 -->

<!-- START_0034d3b316b49873932b036e0b46b850 -->
## admin/add-visitors/{add_visitor}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-visitors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-visitors/{add_visitor}`


<!-- END_0034d3b316b49873932b036e0b46b850 -->

<!-- START_f838ad4f222454e8b2b90d6e5009242f -->
## admin/add-visitors/{add_visitor}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-visitors/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-visitors/{add_visitor}/edit`


<!-- END_f838ad4f222454e8b2b90d6e5009242f -->

<!-- START_06762b6c3b55f275198709030ca08fa5 -->
## admin/add-visitors/{add_visitor}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/add-visitors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors/1"
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
`PUT admin/add-visitors/{add_visitor}`

`PATCH admin/add-visitors/{add_visitor}`


<!-- END_06762b6c3b55f275198709030ca08fa5 -->

<!-- START_a052a4a37d574bbfc5457f689cfeabc1 -->
## admin/add-visitors/{add_visitor}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-visitors/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-visitors/1"
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
`DELETE admin/add-visitors/{add_visitor}`


<!-- END_a052a4a37d574bbfc5457f689cfeabc1 -->

<!-- START_15fb6c8b2cf2c886f4cd43952c800dd0 -->
## admin/locations/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/locations/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations/destroy"
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
`DELETE admin/locations/destroy`


<!-- END_15fb6c8b2cf2c886f4cd43952c800dd0 -->

<!-- START_b4419d01f964c1f904108144da890c04 -->
## admin/locations
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/locations`


<!-- END_b4419d01f964c1f904108144da890c04 -->

<!-- START_d7b191060db80f628b2f805dec0c51fe -->
## admin/locations/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/locations/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/locations/create`


<!-- END_d7b191060db80f628b2f805dec0c51fe -->

<!-- START_eeb96ee2cef75fb53608a8012e4bdb4a -->
## admin/locations
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations"
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
`POST admin/locations`


<!-- END_eeb96ee2cef75fb53608a8012e4bdb4a -->

<!-- START_3ebdb129b591c1865b6f4910feda36b0 -->
## admin/locations/{location}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/locations/{location}`


<!-- END_3ebdb129b591c1865b6f4910feda36b0 -->

<!-- START_fdb8e508e706d0d8920f7d058d9af5be -->
## admin/locations/{location}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/locations/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/locations/{location}/edit`


<!-- END_fdb8e508e706d0d8920f7d058d9af5be -->

<!-- START_6d25250a0dcedecf8e3b8088687fb59f -->
## admin/locations/{location}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations/1"
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
`PUT admin/locations/{location}`

`PATCH admin/locations/{location}`


<!-- END_6d25250a0dcedecf8e3b8088687fb59f -->

<!-- START_39b9ab0f9a2e222381728838228adc63 -->
## admin/locations/{location}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/locations/1"
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
`DELETE admin/locations/{location}`


<!-- END_39b9ab0f9a2e222381728838228adc63 -->

<!-- START_651ad0d2f2244a6dd5abfacb258d4d2c -->
## admin/gates/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/gates/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates/destroy"
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
`DELETE admin/gates/destroy`


<!-- END_651ad0d2f2244a6dd5abfacb258d4d2c -->

<!-- START_b1d8247824a0b70afde9f5af1482ea60 -->
## admin/gates
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/gates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/gates`


<!-- END_b1d8247824a0b70afde9f5af1482ea60 -->

<!-- START_9aecd7563c43f6d24f11e93c0e72d88d -->
## admin/gates/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/gates/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/gates/create`


<!-- END_9aecd7563c43f6d24f11e93c0e72d88d -->

<!-- START_9157cb022706a7164c39cc530281f7f5 -->
## admin/gates
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/gates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates"
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
`POST admin/gates`


<!-- END_9157cb022706a7164c39cc530281f7f5 -->

<!-- START_006e891ef6a3b3c2e6d0d82337a0e098 -->
## admin/gates/{gate}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/gates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/gates/{gate}`


<!-- END_006e891ef6a3b3c2e6d0d82337a0e098 -->

<!-- START_bb4239fa7809ee7393ddf9f8477d3d64 -->
## admin/gates/{gate}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/gates/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/gates/{gate}/edit`


<!-- END_bb4239fa7809ee7393ddf9f8477d3d64 -->

<!-- START_cef2aa20ba72ae94ebcb5ab461b7a176 -->
## admin/gates/{gate}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/gates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates/1"
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
`PUT admin/gates/{gate}`

`PATCH admin/gates/{gate}`


<!-- END_cef2aa20ba72ae94ebcb5ab461b7a176 -->

<!-- START_5a99b58583f00a77ba800d4d85bdfbdc -->
## admin/gates/{gate}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/gates/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/gates/1"
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
`DELETE admin/gates/{gate}`


<!-- END_5a99b58583f00a77ba800d4d85bdfbdc -->

<!-- START_c1749d439cc212b11cc7a7037ccefb85 -->
## admin/histories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/histories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories/destroy"
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
`DELETE admin/histories/destroy`


<!-- END_c1749d439cc212b11cc7a7037ccefb85 -->

<!-- START_c4da24b1d2b9caa5cb67557cfcab6430 -->
## admin/histories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/histories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/histories`


<!-- END_c4da24b1d2b9caa5cb67557cfcab6430 -->

<!-- START_ce097452ac2a63daa64db93ff19ac209 -->
## admin/histories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/histories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/histories/create`


<!-- END_ce097452ac2a63daa64db93ff19ac209 -->

<!-- START_b963935921d6be5377c56197d2016292 -->
## admin/histories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/histories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories"
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
`POST admin/histories`


<!-- END_b963935921d6be5377c56197d2016292 -->

<!-- START_f86c26e8d34fc6d9874c5ad7bae97eca -->
## admin/histories/{history}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/histories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/histories/{history}`


<!-- END_f86c26e8d34fc6d9874c5ad7bae97eca -->

<!-- START_360b27fd5466c341c46533a10e685d88 -->
## admin/histories/{history}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/histories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/histories/{history}/edit`


<!-- END_360b27fd5466c341c46533a10e685d88 -->

<!-- START_9303f95769d710981e4ec2c8d7dded02 -->
## admin/histories/{history}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/histories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories/1"
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
`PUT admin/histories/{history}`

`PATCH admin/histories/{history}`


<!-- END_9303f95769d710981e4ec2c8d7dded02 -->

<!-- START_9bab57d787be2b6771f9a6d71988ce2f -->
## admin/histories/{history}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/histories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/histories/1"
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
`DELETE admin/histories/{history}`


<!-- END_9bab57d787be2b6771f9a6d71988ce2f -->

<!-- START_844598d82205c052b87ba78867f9891c -->
## admin/qrs/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/qrs/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs/destroy"
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
`DELETE admin/qrs/destroy`


<!-- END_844598d82205c052b87ba78867f9891c -->

<!-- START_d38758d2b587c82c4681a821587a3853 -->
## admin/qrs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/qrs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/qrs`


<!-- END_d38758d2b587c82c4681a821587a3853 -->

<!-- START_cc28d604d21fd626d497d5ea05c744d1 -->
## admin/qrs/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/qrs/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/qrs/create`


<!-- END_cc28d604d21fd626d497d5ea05c744d1 -->

<!-- START_fc4eca30bb62b3c4579d44d92d7f6bb4 -->
## admin/qrs
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/qrs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs"
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
`POST admin/qrs`


<!-- END_fc4eca30bb62b3c4579d44d92d7f6bb4 -->

<!-- START_16bea81c7722fd1b34c355e4c15d909e -->
## admin/qrs/{qr}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/qrs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/qrs/{qr}`


<!-- END_16bea81c7722fd1b34c355e4c15d909e -->

<!-- START_2ba75b01847f5b20ff8d891267a7df3a -->
## admin/qrs/{qr}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/qrs/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/qrs/{qr}/edit`


<!-- END_2ba75b01847f5b20ff8d891267a7df3a -->

<!-- START_3ef120483ca026e66d8c379520ec3e6e -->
## admin/qrs/{qr}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/qrs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs/1"
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
`PUT admin/qrs/{qr}`

`PATCH admin/qrs/{qr}`


<!-- END_3ef120483ca026e66d8c379520ec3e6e -->

<!-- START_1c6c9565c33f82b089fe7fd15a181299 -->
## admin/qrs/{qr}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/qrs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/qrs/1"
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
`DELETE admin/qrs/{qr}`


<!-- END_1c6c9565c33f82b089fe7fd15a181299 -->

<!-- START_a3a8093cd044623a1f24929594b5b02a -->
## admin/defect-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/defect-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories/destroy"
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
`DELETE admin/defect-categories/destroy`


<!-- END_a3a8093cd044623a1f24929594b5b02a -->

<!-- START_260a47e8b97a41583896dc0035ef930f -->
## admin/defect-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/defect-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/defect-categories`


<!-- END_260a47e8b97a41583896dc0035ef930f -->

<!-- START_59ef82f7b37c1eaf677c200b9f62cebf -->
## admin/defect-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/defect-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/defect-categories/create`


<!-- END_59ef82f7b37c1eaf677c200b9f62cebf -->

<!-- START_8a3b09bc29c8b32f01b751b6d9330e80 -->
## admin/defect-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/defect-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories"
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
`POST admin/defect-categories`


<!-- END_8a3b09bc29c8b32f01b751b6d9330e80 -->

<!-- START_dc9490ce6d2b59fed014f1ccd8a28da4 -->
## admin/defect-categories/{defect_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/defect-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/defect-categories/{defect_category}`


<!-- END_dc9490ce6d2b59fed014f1ccd8a28da4 -->

<!-- START_3e1ee2b9959ebf46f838fffbd555bc9a -->
## admin/defect-categories/{defect_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/defect-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/defect-categories/{defect_category}/edit`


<!-- END_3e1ee2b9959ebf46f838fffbd555bc9a -->

<!-- START_088ed7383054fc2165d7dc0351e8de53 -->
## admin/defect-categories/{defect_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/defect-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories/1"
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
`PUT admin/defect-categories/{defect_category}`

`PATCH admin/defect-categories/{defect_category}`


<!-- END_088ed7383054fc2165d7dc0351e8de53 -->

<!-- START_0a00f73fbbcdd0c7fa195d4c78d77cf0 -->
## admin/defect-categories/{defect_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/defect-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/defect-categories/1"
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
`DELETE admin/defect-categories/{defect_category}`


<!-- END_0a00f73fbbcdd0c7fa195d4c78d77cf0 -->

<!-- START_9c14a1c8c3c0e6155ca8e6a7aa515a07 -->
## admin/status-controls/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/status-controls/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls/destroy"
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
`DELETE admin/status-controls/destroy`


<!-- END_9c14a1c8c3c0e6155ca8e6a7aa515a07 -->

<!-- START_dc6ce6716ba16d759f4cda720b333f6b -->
## admin/status-controls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/status-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/status-controls`


<!-- END_dc6ce6716ba16d759f4cda720b333f6b -->

<!-- START_d79cdc967e62ede975e6b5c5f4bd636c -->
## admin/status-controls/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/status-controls/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/status-controls/create`


<!-- END_d79cdc967e62ede975e6b5c5f4bd636c -->

<!-- START_689ae263fe781d6d427f41182e7f4747 -->
## admin/status-controls
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/status-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls"
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
`POST admin/status-controls`


<!-- END_689ae263fe781d6d427f41182e7f4747 -->

<!-- START_7f894a2d3537827b28ad42cb83a8ff8d -->
## admin/status-controls/{status_control}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/status-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/status-controls/{status_control}`


<!-- END_7f894a2d3537827b28ad42cb83a8ff8d -->

<!-- START_11f004eb7f7126a968d02270144d65d1 -->
## admin/status-controls/{status_control}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/status-controls/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/status-controls/{status_control}/edit`


<!-- END_11f004eb7f7126a968d02270144d65d1 -->

<!-- START_ba7f649d54e67e3a885e87c8fd1ef7c5 -->
## admin/status-controls/{status_control}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/status-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls/1"
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
`PUT admin/status-controls/{status_control}`

`PATCH admin/status-controls/{status_control}`


<!-- END_ba7f649d54e67e3a885e87c8fd1ef7c5 -->

<!-- START_b49aa9fc0db70508dbe45b1a7e809dc4 -->
## admin/status-controls/{status_control}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/status-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/status-controls/1"
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
`DELETE admin/status-controls/{status_control}`


<!-- END_b49aa9fc0db70508dbe45b1a7e809dc4 -->

<!-- START_0e31892b301e31815dc4639b16bee7e3 -->
## admin/add-defects/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-defects/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/destroy"
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
`DELETE admin/add-defects/destroy`


<!-- END_0e31892b301e31815dc4639b16bee7e3 -->

<!-- START_3911ae38fe71c6b6fb4f93d9c2b848bc -->
## admin/add-defects/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-defects/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/media"
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
`POST admin/add-defects/media`


<!-- END_3911ae38fe71c6b6fb4f93d9c2b848bc -->

<!-- START_8c23284f3997bd0b50cd00a7b6dc1c1c -->
## admin/add-defects/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-defects/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/ckmedia"
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
`POST admin/add-defects/ckmedia`


<!-- END_8c23284f3997bd0b50cd00a7b6dc1c1c -->

<!-- START_d5dfd219e159bb4b8eaef6df028b630c -->
## admin/add-defects
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-defects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-defects`


<!-- END_d5dfd219e159bb4b8eaef6df028b630c -->

<!-- START_10b0597322660ccd426aec24ddb5fae8 -->
## admin/add-defects/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-defects/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-defects/create`


<!-- END_10b0597322660ccd426aec24ddb5fae8 -->

<!-- START_2d2c80473e12aa08eddf2742d850e49f -->
## admin/add-defects
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-defects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects"
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
`POST admin/add-defects`


<!-- END_2d2c80473e12aa08eddf2742d850e49f -->

<!-- START_2a9dfc4de571ddedd5e8e1f02c20536e -->
## admin/add-defects/{add_defect}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-defects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-defects/{add_defect}`


<!-- END_2a9dfc4de571ddedd5e8e1f02c20536e -->

<!-- START_0c99499548065a4530310a53ecbc08ce -->
## admin/add-defects/{add_defect}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-defects/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-defects/{add_defect}/edit`


<!-- END_0c99499548065a4530310a53ecbc08ce -->

<!-- START_52cbcad23cd618887d6293252001aa81 -->
## admin/add-defects/{add_defect}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/add-defects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/1"
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
`PUT admin/add-defects/{add_defect}`

`PATCH admin/add-defects/{add_defect}`


<!-- END_52cbcad23cd618887d6293252001aa81 -->

<!-- START_7735ac4074ec88be13591ca4988690a1 -->
## admin/add-defects/{add_defect}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-defects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-defects/1"
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
`DELETE admin/add-defects/{add_defect}`


<!-- END_7735ac4074ec88be13591ca4988690a1 -->

<!-- START_e441c6b400d018eb45cfe8e5b244e2bc -->
## admin/payment-methods/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/payment-methods/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods/destroy"
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
`DELETE admin/payment-methods/destroy`


<!-- END_e441c6b400d018eb45cfe8e5b244e2bc -->

<!-- START_4cbd26a98a31db52cdf953f2670ab5c3 -->
## admin/payment-methods
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/payment-methods" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/payment-methods`


<!-- END_4cbd26a98a31db52cdf953f2670ab5c3 -->

<!-- START_5bebc539f6a6d815ec325f3821f5d6f6 -->
## admin/payment-methods/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/payment-methods/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/payment-methods/create`


<!-- END_5bebc539f6a6d815ec325f3821f5d6f6 -->

<!-- START_122c16f9b1220bb955c8e95b46afd35a -->
## admin/payment-methods
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/payment-methods" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods"
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
`POST admin/payment-methods`


<!-- END_122c16f9b1220bb955c8e95b46afd35a -->

<!-- START_a57a7c6f6c07649d0f89ca44eba0e9e7 -->
## admin/payment-methods/{payment_method}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/payment-methods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/payment-methods/{payment_method}`


<!-- END_a57a7c6f6c07649d0f89ca44eba0e9e7 -->

<!-- START_ab788bd57f40a117bf9bc9ce20184674 -->
## admin/payment-methods/{payment_method}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/payment-methods/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/payment-methods/{payment_method}/edit`


<!-- END_ab788bd57f40a117bf9bc9ce20184674 -->

<!-- START_e2b04356f0701f5025a933aff0a9e2ab -->
## admin/payment-methods/{payment_method}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/payment-methods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods/1"
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
`PUT admin/payment-methods/{payment_method}`

`PATCH admin/payment-methods/{payment_method}`


<!-- END_e2b04356f0701f5025a933aff0a9e2ab -->

<!-- START_2056b447a94c817b9503ca37711b1df4 -->
## admin/payment-methods/{payment_method}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/payment-methods/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/payment-methods/1"
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
`DELETE admin/payment-methods/{payment_method}`


<!-- END_2056b447a94c817b9503ca37711b1df4 -->

<!-- START_b093d6161ceffe7aedf099d2c3fedf8b -->
## admin/maintenances-payments/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/maintenances-payments/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/destroy"
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
`DELETE admin/maintenances-payments/destroy`


<!-- END_b093d6161ceffe7aedf099d2c3fedf8b -->

<!-- START_e8b92cc7a1f7d820b36b456b862236bb -->
## admin/maintenances-payments/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/maintenances-payments/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/media"
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
`POST admin/maintenances-payments/media`


<!-- END_e8b92cc7a1f7d820b36b456b862236bb -->

<!-- START_8f4db87c786a559eda6a8254539daa93 -->
## admin/maintenances-payments/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/maintenances-payments/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/ckmedia"
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
`POST admin/maintenances-payments/ckmedia`


<!-- END_8f4db87c786a559eda6a8254539daa93 -->

<!-- START_e5ae19b485ed3132c86aa3b913b2827b -->
## admin/maintenances-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/maintenances-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/maintenances-payments`


<!-- END_e5ae19b485ed3132c86aa3b913b2827b -->

<!-- START_c2e4133fd87e110e2fdb4ed6415f1bce -->
## admin/maintenances-payments/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/maintenances-payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/maintenances-payments/create`


<!-- END_c2e4133fd87e110e2fdb4ed6415f1bce -->

<!-- START_c228e5501830b099893384a10f9d488a -->
## admin/maintenances-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/maintenances-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments"
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
`POST admin/maintenances-payments`


<!-- END_c228e5501830b099893384a10f9d488a -->

<!-- START_22f9af701101b766a256fbd4c995360c -->
## admin/maintenances-payments/{maintenances_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/maintenances-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/maintenances-payments/{maintenances_payment}`


<!-- END_22f9af701101b766a256fbd4c995360c -->

<!-- START_835cce191d22908b135172f93ae5fd66 -->
## admin/maintenances-payments/{maintenances_payment}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/maintenances-payments/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/maintenances-payments/{maintenances_payment}/edit`


<!-- END_835cce191d22908b135172f93ae5fd66 -->

<!-- START_e056059ac4bccfa13905c25540f4dd74 -->
## admin/maintenances-payments/{maintenances_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/maintenances-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/1"
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
`PUT admin/maintenances-payments/{maintenances_payment}`

`PATCH admin/maintenances-payments/{maintenances_payment}`


<!-- END_e056059ac4bccfa13905c25540f4dd74 -->

<!-- START_c1836d453af0d94ba699ae8abd103e82 -->
## admin/maintenances-payments/{maintenances_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/maintenances-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/maintenances-payments/1"
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
`DELETE admin/maintenances-payments/{maintenances_payment}`


<!-- END_c1836d453af0d94ba699ae8abd103e82 -->

<!-- START_af0ed49750a29ec3e104eb6e8e172f62 -->
## admin/facility-payments/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-payments/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/destroy"
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
`DELETE admin/facility-payments/destroy`


<!-- END_af0ed49750a29ec3e104eb6e8e172f62 -->

<!-- START_14f78359bbdf64135d878232f8c49620 -->
## admin/facility-payments/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-payments/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/media"
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
`POST admin/facility-payments/media`


<!-- END_14f78359bbdf64135d878232f8c49620 -->

<!-- START_f7a7c23e372d3474de6389161d88ee74 -->
## admin/facility-payments/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-payments/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/ckmedia"
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
`POST admin/facility-payments/ckmedia`


<!-- END_f7a7c23e372d3474de6389161d88ee74 -->

<!-- START_f142c06003903b651b585db3e32859ef -->
## admin/facility-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-payments`


<!-- END_f142c06003903b651b585db3e32859ef -->

<!-- START_060a29a3dd77969c69ebebaa678054b7 -->
## admin/facility-payments/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-payments/create`


<!-- END_060a29a3dd77969c69ebebaa678054b7 -->

<!-- START_71dbe69ef0d5d0542b2e187a23d3f3ac -->
## admin/facility-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/facility-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments"
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
`POST admin/facility-payments`


<!-- END_71dbe69ef0d5d0542b2e187a23d3f3ac -->

<!-- START_06733038d1cec74f3403ecd1e90624e9 -->
## admin/facility-payments/{facility_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-payments/{facility_payment}`


<!-- END_06733038d1cec74f3403ecd1e90624e9 -->

<!-- START_ba362f9bae6ab3da4d4c67e70582bbf4 -->
## admin/facility-payments/{facility_payment}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/facility-payments/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/facility-payments/{facility_payment}/edit`


<!-- END_ba362f9bae6ab3da4d4c67e70582bbf4 -->

<!-- START_14caed2cbacfb2a0f1c897a9320b75ad -->
## admin/facility-payments/{facility_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/facility-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/1"
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
`PUT admin/facility-payments/{facility_payment}`

`PATCH admin/facility-payments/{facility_payment}`


<!-- END_14caed2cbacfb2a0f1c897a9320b75ad -->

<!-- START_09b961bb580478fc532f3b056c57c46c -->
## admin/facility-payments/{facility_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/facility-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/facility-payments/1"
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
`DELETE admin/facility-payments/{facility_payment}`


<!-- END_09b961bb580478fc532f3b056c57c46c -->

<!-- START_e21d624ec809768d1754ecf3da9f60a0 -->
## admin/notice-boards/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/notice-boards/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards/destroy"
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
`DELETE admin/notice-boards/destroy`


<!-- END_e21d624ec809768d1754ecf3da9f60a0 -->

<!-- START_b709cf0209760f7ba4c4112731272a9d -->
## admin/notice-boards
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/notice-boards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notice-boards`


<!-- END_b709cf0209760f7ba4c4112731272a9d -->

<!-- START_077377b6103e3997054738426dbed901 -->
## admin/notice-boards/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/notice-boards/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notice-boards/create`


<!-- END_077377b6103e3997054738426dbed901 -->

<!-- START_c33d723a5aa971c9dc486e107ad2332b -->
## admin/notice-boards
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/notice-boards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards"
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
`POST admin/notice-boards`


<!-- END_c33d723a5aa971c9dc486e107ad2332b -->

<!-- START_156e7502506c110163ac9a85a10016cb -->
## admin/notice-boards/{notice_board}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/notice-boards/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notice-boards/{notice_board}`


<!-- END_156e7502506c110163ac9a85a10016cb -->

<!-- START_c58508513f4d6991edd147513848c15f -->
## admin/notice-boards/{notice_board}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/notice-boards/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notice-boards/{notice_board}/edit`


<!-- END_c58508513f4d6991edd147513848c15f -->

<!-- START_677cd444e691a421618f8d31a544f3e8 -->
## admin/notice-boards/{notice_board}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/notice-boards/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards/1"
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
`PUT admin/notice-boards/{notice_board}`

`PATCH admin/notice-boards/{notice_board}`


<!-- END_677cd444e691a421618f8d31a544f3e8 -->

<!-- START_cd12bc052d3dc6013dd264f78aed2b25 -->
## admin/notice-boards/{notice_board}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/notice-boards/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/notice-boards/1"
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
`DELETE admin/notice-boards/{notice_board}`


<!-- END_cd12bc052d3dc6013dd264f78aed2b25 -->

<!-- START_d487db07cb2eac3a716814cf2512102a -->
## admin/event-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories/destroy"
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
`DELETE admin/event-categories/destroy`


<!-- END_d487db07cb2eac3a716814cf2512102a -->

<!-- START_ace60f16f2ee92819e33dca2312bae32 -->
## admin/event-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-categories`


<!-- END_ace60f16f2ee92819e33dca2312bae32 -->

<!-- START_48df99e9874eabc0c51371ff98c93a99 -->
## admin/event-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-categories/create`


<!-- END_48df99e9874eabc0c51371ff98c93a99 -->

<!-- START_b2b6fa71029263be3677cec8bc3dc41d -->
## admin/event-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/event-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories"
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
`POST admin/event-categories`


<!-- END_b2b6fa71029263be3677cec8bc3dc41d -->

<!-- START_88d3f45aa334ae6eb5b2464755930a26 -->
## admin/event-categories/{event_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-categories/{event_category}`


<!-- END_88d3f45aa334ae6eb5b2464755930a26 -->

<!-- START_bc51a4ad2a64b57f5606868737730ef1 -->
## admin/event-categories/{event_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-categories/{event_category}/edit`


<!-- END_bc51a4ad2a64b57f5606868737730ef1 -->

<!-- START_b40afd25feb94e17c62ba9007926381c -->
## admin/event-categories/{event_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/event-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories/1"
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
`PUT admin/event-categories/{event_category}`

`PATCH admin/event-categories/{event_category}`


<!-- END_b40afd25feb94e17c62ba9007926381c -->

<!-- START_f85a225454bf00b3c1c0eea8cc6846bf -->
## admin/event-categories/{event_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-categories/1"
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
`DELETE admin/event-categories/{event_category}`


<!-- END_f85a225454bf00b3c1c0eea8cc6846bf -->

<!-- START_f55af017f9a40632afbd0ba39054f196 -->
## admin/event-controls/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-controls/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls/destroy"
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
`DELETE admin/event-controls/destroy`


<!-- END_f55af017f9a40632afbd0ba39054f196 -->

<!-- START_73b5c1c83bc9c5fae21c217e843c9fdc -->
## admin/event-controls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-controls`


<!-- END_73b5c1c83bc9c5fae21c217e843c9fdc -->

<!-- START_2a5c41228c2a06e29786197f90834e9b -->
## admin/event-controls/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-controls/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-controls/create`


<!-- END_2a5c41228c2a06e29786197f90834e9b -->

<!-- START_57ecdd4d52101becf6e589aeec662c28 -->
## admin/event-controls
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/event-controls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls"
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
`POST admin/event-controls`


<!-- END_57ecdd4d52101becf6e589aeec662c28 -->

<!-- START_19620fad111e05f1345befe920265028 -->
## admin/event-controls/{event_control}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-controls/{event_control}`


<!-- END_19620fad111e05f1345befe920265028 -->

<!-- START_20308da5b769638d2b1aba4290951cff -->
## admin/event-controls/{event_control}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-controls/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-controls/{event_control}/edit`


<!-- END_20308da5b769638d2b1aba4290951cff -->

<!-- START_1100c899799ce54c63f8c352b55ad77c -->
## admin/event-controls/{event_control}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/event-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls/1"
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
`PUT admin/event-controls/{event_control}`

`PATCH admin/event-controls/{event_control}`


<!-- END_1100c899799ce54c63f8c352b55ad77c -->

<!-- START_46d586ce99e33e77f093aaf52f2ca4ec -->
## admin/event-controls/{event_control}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-controls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-controls/1"
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
`DELETE admin/event-controls/{event_control}`


<!-- END_46d586ce99e33e77f093aaf52f2ca4ec -->

<!-- START_f0b7cdd736255567b8d5a6286066d526 -->
## admin/event-enrolls/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-enrolls/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls/destroy"
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
`DELETE admin/event-enrolls/destroy`


<!-- END_f0b7cdd736255567b8d5a6286066d526 -->

<!-- START_89ca4186e555c9485d86fe497c8530d4 -->
## admin/event-enrolls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-enrolls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-enrolls`


<!-- END_89ca4186e555c9485d86fe497c8530d4 -->

<!-- START_c23ad5c4f7d991499fd1ac54a18f6c0c -->
## admin/event-enrolls/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-enrolls/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-enrolls/create`


<!-- END_c23ad5c4f7d991499fd1ac54a18f6c0c -->

<!-- START_6b8874625e2dd09240c3291027f43f72 -->
## admin/event-enrolls
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/event-enrolls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls"
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
`POST admin/event-enrolls`


<!-- END_6b8874625e2dd09240c3291027f43f72 -->

<!-- START_4c7017087cb2ef8bb7ef07c4c64ea364 -->
## admin/event-enrolls/{event_enroll}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-enrolls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-enrolls/{event_enroll}`


<!-- END_4c7017087cb2ef8bb7ef07c4c64ea364 -->

<!-- START_b1242f2abcd0e4622d7f692d8f62a0ee -->
## admin/event-enrolls/{event_enroll}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-enrolls/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-enrolls/{event_enroll}/edit`


<!-- END_b1242f2abcd0e4622d7f692d8f62a0ee -->

<!-- START_ac10a3032037762a633db25d04f6a4c3 -->
## admin/event-enrolls/{event_enroll}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/event-enrolls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls/1"
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
`PUT admin/event-enrolls/{event_enroll}`

`PATCH admin/event-enrolls/{event_enroll}`


<!-- END_ac10a3032037762a633db25d04f6a4c3 -->

<!-- START_50bf4a38993e865cd9cee0f47a9e9585 -->
## admin/event-enrolls/{event_enroll}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-enrolls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-enrolls/1"
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
`DELETE admin/event-enrolls/{event_enroll}`


<!-- END_50bf4a38993e865cd9cee0f47a9e9585 -->

<!-- START_2958d1367a678b04d571c5574d7e4b07 -->
## admin/add-feedbacks/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-feedbacks/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/destroy"
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
`DELETE admin/add-feedbacks/destroy`


<!-- END_2958d1367a678b04d571c5574d7e4b07 -->

<!-- START_0116d92171f4367cf162f2df844af7a4 -->
## admin/add-feedbacks/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-feedbacks/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/media"
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
`POST admin/add-feedbacks/media`


<!-- END_0116d92171f4367cf162f2df844af7a4 -->

<!-- START_0ccffeeb7381f67b80136bf97aff6f8d -->
## admin/add-feedbacks/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-feedbacks/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/ckmedia"
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
`POST admin/add-feedbacks/ckmedia`


<!-- END_0ccffeeb7381f67b80136bf97aff6f8d -->

<!-- START_6196f87351c4643b1c29f0f73f5f66ee -->
## admin/add-feedbacks
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-feedbacks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-feedbacks`


<!-- END_6196f87351c4643b1c29f0f73f5f66ee -->

<!-- START_d9de20d30f03bf6ba39a7cdb677f5a6b -->
## admin/add-feedbacks/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-feedbacks/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-feedbacks/create`


<!-- END_d9de20d30f03bf6ba39a7cdb677f5a6b -->

<!-- START_925f66347ff5b0c91fe176d49d525c0d -->
## admin/add-feedbacks
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-feedbacks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks"
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
`POST admin/add-feedbacks`


<!-- END_925f66347ff5b0c91fe176d49d525c0d -->

<!-- START_5554e8583e253317816fbd1c0612eb53 -->
## admin/add-feedbacks/{add_feedback}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-feedbacks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-feedbacks/{add_feedback}`


<!-- END_5554e8583e253317816fbd1c0612eb53 -->

<!-- START_c15993fef41fe59f9f13985cc20ccbda -->
## admin/add-feedbacks/{add_feedback}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-feedbacks/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-feedbacks/{add_feedback}/edit`


<!-- END_c15993fef41fe59f9f13985cc20ccbda -->

<!-- START_9ce2ce2529dcb35ec0baacbf9b6d354a -->
## admin/add-feedbacks/{add_feedback}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/add-feedbacks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/1"
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
`PUT admin/add-feedbacks/{add_feedback}`

`PATCH admin/add-feedbacks/{add_feedback}`


<!-- END_9ce2ce2529dcb35ec0baacbf9b6d354a -->

<!-- START_37392f10ad32f1cd5e25bdfb4aa079d5 -->
## admin/add-feedbacks/{add_feedback}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-feedbacks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-feedbacks/1"
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
`DELETE admin/add-feedbacks/{add_feedback}`


<!-- END_37392f10ad32f1cd5e25bdfb4aa079d5 -->

<!-- START_3d2c9ff749c78de4d9cb614a8ada8d89 -->
## admin/feedback-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/feedback-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories/destroy"
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
`DELETE admin/feedback-categories/destroy`


<!-- END_3d2c9ff749c78de4d9cb614a8ada8d89 -->

<!-- START_0cd6d7aa0df0b1eae5468910f017068a -->
## admin/feedback-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/feedback-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feedback-categories`


<!-- END_0cd6d7aa0df0b1eae5468910f017068a -->

<!-- START_7899b1136739dcfcb5f48fe8fcd2f1e0 -->
## admin/feedback-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/feedback-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feedback-categories/create`


<!-- END_7899b1136739dcfcb5f48fe8fcd2f1e0 -->

<!-- START_83013ae3d03927c0b1adfb43e9a0d495 -->
## admin/feedback-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/feedback-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories"
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
`POST admin/feedback-categories`


<!-- END_83013ae3d03927c0b1adfb43e9a0d495 -->

<!-- START_6eb1ba30e54ccd157a01384485d60067 -->
## admin/feedback-categories/{feedback_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/feedback-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feedback-categories/{feedback_category}`


<!-- END_6eb1ba30e54ccd157a01384485d60067 -->

<!-- START_8c499c17d28eb6269898e2f1d8b7def3 -->
## admin/feedback-categories/{feedback_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/feedback-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/feedback-categories/{feedback_category}/edit`


<!-- END_8c499c17d28eb6269898e2f1d8b7def3 -->

<!-- START_6b2c72b21d3892317b7868ea6cf9e2b6 -->
## admin/feedback-categories/{feedback_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/feedback-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories/1"
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
`PUT admin/feedback-categories/{feedback_category}`

`PATCH admin/feedback-categories/{feedback_category}`


<!-- END_6b2c72b21d3892317b7868ea6cf9e2b6 -->

<!-- START_789b97eae53a131418e103ffaa52f4fb -->
## admin/feedback-categories/{feedback_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/feedback-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/feedback-categories/1"
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
`DELETE admin/feedback-categories/{feedback_category}`


<!-- END_789b97eae53a131418e103ffaa52f4fb -->

<!-- START_824a6b619dc7889d692419ea3fb993b8 -->
## admin/form-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/form-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories/destroy"
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
`DELETE admin/form-categories/destroy`


<!-- END_824a6b619dc7889d692419ea3fb993b8 -->

<!-- START_498339bf706fc3a7a685ac86a85748a7 -->
## admin/form-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/form-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/form-categories`


<!-- END_498339bf706fc3a7a685ac86a85748a7 -->

<!-- START_79184c41901c27c40bac4bd511fe4ea3 -->
## admin/form-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/form-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/form-categories/create`


<!-- END_79184c41901c27c40bac4bd511fe4ea3 -->

<!-- START_5ec45266b8d41d1b0adc8629c1b2bbdc -->
## admin/form-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/form-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories"
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
`POST admin/form-categories`


<!-- END_5ec45266b8d41d1b0adc8629c1b2bbdc -->

<!-- START_41bed33fb3d9f44362846eac99137f69 -->
## admin/form-categories/{form_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/form-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/form-categories/{form_category}`


<!-- END_41bed33fb3d9f44362846eac99137f69 -->

<!-- START_afed4eb251c4ef9eb06e1fe11ef337fa -->
## admin/form-categories/{form_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/form-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/form-categories/{form_category}/edit`


<!-- END_afed4eb251c4ef9eb06e1fe11ef337fa -->

<!-- START_2d549dfff1f1cfe4517745cbc92ebfbf -->
## admin/form-categories/{form_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/form-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories/1"
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
`PUT admin/form-categories/{form_category}`

`PATCH admin/form-categories/{form_category}`


<!-- END_2d549dfff1f1cfe4517745cbc92ebfbf -->

<!-- START_8fe37ed98874872416c42422f22d7901 -->
## admin/form-categories/{form_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/form-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/form-categories/1"
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
`DELETE admin/form-categories/{form_category}`


<!-- END_8fe37ed98874872416c42422f22d7901 -->

<!-- START_0b17c9274cef60f8fc3dd20a377eaaf7 -->
## admin/membe-card-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/membe-card-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements/destroy"
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
`DELETE admin/membe-card-managements/destroy`


<!-- END_0b17c9274cef60f8fc3dd20a377eaaf7 -->

<!-- START_2420dafa99115d2c03d30470be31d9fa -->
## admin/membe-card-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membe-card-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membe-card-managements`


<!-- END_2420dafa99115d2c03d30470be31d9fa -->

<!-- START_d0c0252d9d0e4d7fe6b9281b75427931 -->
## admin/membe-card-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membe-card-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membe-card-managements/create`


<!-- END_d0c0252d9d0e4d7fe6b9281b75427931 -->

<!-- START_68f075c243f04d669ff7c26ce90a123a -->
## admin/membe-card-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/membe-card-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements"
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
`POST admin/membe-card-managements`


<!-- END_68f075c243f04d669ff7c26ce90a123a -->

<!-- START_3a2256a209c78bf83d9cf9b0b4134b67 -->
## admin/membe-card-managements/{membe_card_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membe-card-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membe-card-managements/{membe_card_management}`


<!-- END_3a2256a209c78bf83d9cf9b0b4134b67 -->

<!-- START_ee674b1fa2de84fcdc5da0552eb859fe -->
## admin/membe-card-managements/{membe_card_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membe-card-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membe-card-managements/{membe_card_management}/edit`


<!-- END_ee674b1fa2de84fcdc5da0552eb859fe -->

<!-- START_a532a053d0c6fbbc335de6df31559ad0 -->
## admin/membe-card-managements/{membe_card_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/membe-card-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements/1"
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
`PUT admin/membe-card-managements/{membe_card_management}`

`PATCH admin/membe-card-managements/{membe_card_management}`


<!-- END_a532a053d0c6fbbc335de6df31559ad0 -->

<!-- START_4269d804d61664f350c805ab1fcf6464 -->
## admin/membe-card-managements/{membe_card_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/membe-card-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membe-card-managements/1"
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
`DELETE admin/membe-card-managements/{membe_card_management}`


<!-- END_4269d804d61664f350c805ab1fcf6464 -->

<!-- START_a494b283327a9a6a819d94880a56c497 -->
## admin/membership-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/membership-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements/destroy"
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
`DELETE admin/membership-managements/destroy`


<!-- END_a494b283327a9a6a819d94880a56c497 -->

<!-- START_ab8390dfa328b4ad45da5c01173c8b8d -->
## admin/membership-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membership-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membership-managements`


<!-- END_ab8390dfa328b4ad45da5c01173c8b8d -->

<!-- START_55618a40ed808fa71c31314c6c9fd537 -->
## admin/membership-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membership-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membership-managements/create`


<!-- END_55618a40ed808fa71c31314c6c9fd537 -->

<!-- START_32b38b0c9b48642cad60cf2bdface52c -->
## admin/membership-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/membership-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements"
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
`POST admin/membership-managements`


<!-- END_32b38b0c9b48642cad60cf2bdface52c -->

<!-- START_5b7c94a0c3a326bb026cc4bccde9ee57 -->
## admin/membership-managements/{membership_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membership-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membership-managements/{membership_management}`


<!-- END_5b7c94a0c3a326bb026cc4bccde9ee57 -->

<!-- START_6046ffcc0fda7b065b7c6359d69b2e91 -->
## admin/membership-managements/{membership_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/membership-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/membership-managements/{membership_management}/edit`


<!-- END_6046ffcc0fda7b065b7c6359d69b2e91 -->

<!-- START_9b475120bb55fa9d6e8bc14a2972ef92 -->
## admin/membership-managements/{membership_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/membership-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements/1"
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
`PUT admin/membership-managements/{membership_management}`

`PATCH admin/membership-managements/{membership_management}`


<!-- END_9b475120bb55fa9d6e8bc14a2972ef92 -->

<!-- START_fd70ae17d15c9bc8f2e5d24a15af1d63 -->
## admin/membership-managements/{membership_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/membership-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/membership-managements/1"
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
`DELETE admin/membership-managements/{membership_management}`


<!-- END_fd70ae17d15c9bc8f2e5d24a15af1d63 -->

<!-- START_e1186a1760bf42a0867a4a0700142b60 -->
## admin/user-groups
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user-groups" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user-groups"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-groups`


<!-- END_e1186a1760bf42a0867a4a0700142b60 -->

<!-- START_cc886f960ccc494f072001aebae3240b -->
## admin/merchant-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories/destroy"
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
`DELETE admin/merchant-categories/destroy`


<!-- END_cc886f960ccc494f072001aebae3240b -->

<!-- START_f142eaa5f67d2c9e709d103dfc570a8b -->
## admin/merchant-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-categories`


<!-- END_f142eaa5f67d2c9e709d103dfc570a8b -->

<!-- START_62a90720efdabf5216ef0c3e555e3976 -->
## admin/merchant-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-categories/create`


<!-- END_62a90720efdabf5216ef0c3e555e3976 -->

<!-- START_23d32cd968065f8b628bb4fba3965fd2 -->
## admin/merchant-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/merchant-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories"
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
`POST admin/merchant-categories`


<!-- END_23d32cd968065f8b628bb4fba3965fd2 -->

<!-- START_39803a740504024302f4f91ee68b9cda -->
## admin/merchant-categories/{merchant_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-categories/{merchant_category}`


<!-- END_39803a740504024302f4f91ee68b9cda -->

<!-- START_a75301a8be023ae90a96237dd3bcaddb -->
## admin/merchant-categories/{merchant_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-categories/{merchant_category}/edit`


<!-- END_a75301a8be023ae90a96237dd3bcaddb -->

<!-- START_8e154a31f089d91fb916bf7a0b5eef69 -->
## admin/merchant-categories/{merchant_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/merchant-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories/1"
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
`PUT admin/merchant-categories/{merchant_category}`

`PATCH admin/merchant-categories/{merchant_category}`


<!-- END_8e154a31f089d91fb916bf7a0b5eef69 -->

<!-- START_3c92f6db4b04e90936be282387a7a862 -->
## admin/merchant-categories/{merchant_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-categories/1"
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
`DELETE admin/merchant-categories/{merchant_category}`


<!-- END_3c92f6db4b04e90936be282387a7a862 -->

<!-- START_b0b891e5fd80c4beab7d437b2f084b2f -->
## admin/merchant-sub-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-sub-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories/destroy"
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
`DELETE admin/merchant-sub-categories/destroy`


<!-- END_b0b891e5fd80c4beab7d437b2f084b2f -->

<!-- START_78a2f4da20d1ef615e3c70133109df3b -->
## admin/merchant-sub-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-sub-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-sub-categories`


<!-- END_78a2f4da20d1ef615e3c70133109df3b -->

<!-- START_0a703e2a8233557d2fb60666cedd66ae -->
## admin/merchant-sub-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-sub-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-sub-categories/create`


<!-- END_0a703e2a8233557d2fb60666cedd66ae -->

<!-- START_96f2be8f4d2f1dcef67780404e8db127 -->
## admin/merchant-sub-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/merchant-sub-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories"
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
`POST admin/merchant-sub-categories`


<!-- END_96f2be8f4d2f1dcef67780404e8db127 -->

<!-- START_f4ff6505c327b04b80e9c9f3487ab420 -->
## admin/merchant-sub-categories/{merchant_sub_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-sub-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-sub-categories/{merchant_sub_category}`


<!-- END_f4ff6505c327b04b80e9c9f3487ab420 -->

<!-- START_5776ce060b775245497226e78561181c -->
## admin/merchant-sub-categories/{merchant_sub_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-sub-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-sub-categories/{merchant_sub_category}/edit`


<!-- END_5776ce060b775245497226e78561181c -->

<!-- START_3d10bf30f786c1c1912d50c1a44cdbb4 -->
## admin/merchant-sub-categories/{merchant_sub_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/merchant-sub-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories/1"
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
`PUT admin/merchant-sub-categories/{merchant_sub_category}`

`PATCH admin/merchant-sub-categories/{merchant_sub_category}`


<!-- END_3d10bf30f786c1c1912d50c1a44cdbb4 -->

<!-- START_e424c49d2631626ef0848539f62c19f0 -->
## admin/merchant-sub-categories/{merchant_sub_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-sub-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-sub-categories/1"
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
`DELETE admin/merchant-sub-categories/{merchant_sub_category}`


<!-- END_e424c49d2631626ef0848539f62c19f0 -->

<!-- START_ee64920263ec1bb0b54e862ff0e21760 -->
## admin/order-types/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-types/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types/destroy"
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
`DELETE admin/order-types/destroy`


<!-- END_ee64920263ec1bb0b54e862ff0e21760 -->

<!-- START_6481e5cc6be94c2f1db5cfebf5970fef -->
## admin/order-types
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-types`


<!-- END_6481e5cc6be94c2f1db5cfebf5970fef -->

<!-- START_eac5a0f317bb7422ae8d979d7270c7a9 -->
## admin/order-types/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-types/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-types/create`


<!-- END_eac5a0f317bb7422ae8d979d7270c7a9 -->

<!-- START_2ca219a3b243bf91f2aa7a312896653c -->
## admin/order-types
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types"
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
`POST admin/order-types`


<!-- END_2ca219a3b243bf91f2aa7a312896653c -->

<!-- START_2a3ab45cc3657b9c220476bc6999ba1f -->
## admin/order-types/{order_type}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-types/{order_type}`


<!-- END_2a3ab45cc3657b9c220476bc6999ba1f -->

<!-- START_7c3d97c9127bebd63569d72258dfea05 -->
## admin/order-types/{order_type}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-types/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-types/{order_type}/edit`


<!-- END_7c3d97c9127bebd63569d72258dfea05 -->

<!-- START_6959e865c55dad4790e258fea946cdd1 -->
## admin/order-types/{order_type}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/order-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types/1"
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
`PUT admin/order-types/{order_type}`

`PATCH admin/order-types/{order_type}`


<!-- END_6959e865c55dad4790e258fea946cdd1 -->

<!-- START_a2ce0ec0b97726aa3b73d39e5b48cef8 -->
## admin/order-types/{order_type}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-types/1"
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
`DELETE admin/order-types/{order_type}`


<!-- END_a2ce0ec0b97726aa3b73d39e5b48cef8 -->

<!-- START_4d3090bc76add926f3d18ba9edcf779c -->
## admin/merchant-levels/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-levels/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels/destroy"
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
`DELETE admin/merchant-levels/destroy`


<!-- END_4d3090bc76add926f3d18ba9edcf779c -->

<!-- START_1ae4611b341cbcacf665c59105986dac -->
## admin/merchant-levels
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-levels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-levels`


<!-- END_1ae4611b341cbcacf665c59105986dac -->

<!-- START_aa701df2061b387fcf5c07421390be9e -->
## admin/merchant-levels/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-levels/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-levels/create`


<!-- END_aa701df2061b387fcf5c07421390be9e -->

<!-- START_5c9003123970abc76e6e3b0e8f85c546 -->
## admin/merchant-levels
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/merchant-levels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels"
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
`POST admin/merchant-levels`


<!-- END_5c9003123970abc76e6e3b0e8f85c546 -->

<!-- START_b55c8ae04f41c1776c6dc3b4ee6ee11f -->
## admin/merchant-levels/{merchant_level}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-levels/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-levels/{merchant_level}`


<!-- END_b55c8ae04f41c1776c6dc3b4ee6ee11f -->

<!-- START_266205c16087ecb0e3d26647cc385769 -->
## admin/merchant-levels/{merchant_level}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-levels/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-levels/{merchant_level}/edit`


<!-- END_266205c16087ecb0e3d26647cc385769 -->

<!-- START_f297762f36c821cf38a6daf75d103ea5 -->
## admin/merchant-levels/{merchant_level}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/merchant-levels/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels/1"
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
`PUT admin/merchant-levels/{merchant_level}`

`PATCH admin/merchant-levels/{merchant_level}`


<!-- END_f297762f36c821cf38a6daf75d103ea5 -->

<!-- START_d3bfd690a3e03cf3339edae620a15ca0 -->
## admin/merchant-levels/{merchant_level}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-levels/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-levels/1"
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
`DELETE admin/merchant-levels/{merchant_level}`


<!-- END_d3bfd690a3e03cf3339edae620a15ca0 -->

<!-- START_be3e0e438c250299661d26a4f34e6f0d -->
## admin/merchant-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements/destroy"
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
`DELETE admin/merchant-managements/destroy`


<!-- END_be3e0e438c250299661d26a4f34e6f0d -->

<!-- START_6e892c1b2c7a89ed60e582482388a7a1 -->
## admin/merchant-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-managements`


<!-- END_6e892c1b2c7a89ed60e582482388a7a1 -->

<!-- START_6aae436051a2394529d99a26bf5df16f -->
## admin/merchant-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-managements/create`


<!-- END_6aae436051a2394529d99a26bf5df16f -->

<!-- START_e51a9f946a5e67f0ed7d888cbf8f444a -->
## admin/merchant-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/merchant-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements"
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
`POST admin/merchant-managements`


<!-- END_e51a9f946a5e67f0ed7d888cbf8f444a -->

<!-- START_c7f471d2f1a394896e0a61fcf70e1026 -->
## admin/merchant-managements/{merchant_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-managements/{merchant_management}`


<!-- END_c7f471d2f1a394896e0a61fcf70e1026 -->

<!-- START_6a91562e9ce09ccce9a10e5f6ca7eca5 -->
## admin/merchant-managements/{merchant_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/merchant-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/merchant-managements/{merchant_management}/edit`


<!-- END_6a91562e9ce09ccce9a10e5f6ca7eca5 -->

<!-- START_c90c1e02528df01d799767a5061ed874 -->
## admin/merchant-managements/{merchant_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/merchant-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements/1"
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
`PUT admin/merchant-managements/{merchant_management}`

`PATCH admin/merchant-managements/{merchant_management}`


<!-- END_c90c1e02528df01d799767a5061ed874 -->

<!-- START_01cc054541e5a886d688b6e1ce43b5d0 -->
## admin/merchant-managements/{merchant_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/merchant-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/merchant-managements/1"
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
`DELETE admin/merchant-managements/{merchant_management}`


<!-- END_01cc054541e5a886d688b6e1ce43b5d0 -->

<!-- START_b1dcdf0337ab666c263d19a6ddebd131 -->
## admin/member-card-settings/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/member-card-settings/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/destroy"
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
`DELETE admin/member-card-settings/destroy`


<!-- END_b1dcdf0337ab666c263d19a6ddebd131 -->

<!-- START_0ed3f403b598a8d28c5aade68bf17425 -->
## admin/member-card-settings/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/member-card-settings/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/media"
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
`POST admin/member-card-settings/media`


<!-- END_0ed3f403b598a8d28c5aade68bf17425 -->

<!-- START_4216433d559689394f8be2b076c131ef -->
## admin/member-card-settings/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/member-card-settings/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/ckmedia"
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
`POST admin/member-card-settings/ckmedia`


<!-- END_4216433d559689394f8be2b076c131ef -->

<!-- START_e2f2c10a5c61e8e8109d9639062382f0 -->
## admin/member-card-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/member-card-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/member-card-settings`


<!-- END_e2f2c10a5c61e8e8109d9639062382f0 -->

<!-- START_fcb696f1ef4f14ef5399fbfff285389a -->
## admin/member-card-settings/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/member-card-settings/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/member-card-settings/create`


<!-- END_fcb696f1ef4f14ef5399fbfff285389a -->

<!-- START_fd23e2d5b2b56f6e21dd3a03af81f689 -->
## admin/member-card-settings
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/member-card-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings"
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
`POST admin/member-card-settings`


<!-- END_fd23e2d5b2b56f6e21dd3a03af81f689 -->

<!-- START_91d9516205ad0e8188d39a01961dad11 -->
## admin/member-card-settings/{member_card_setting}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/member-card-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/member-card-settings/{member_card_setting}`


<!-- END_91d9516205ad0e8188d39a01961dad11 -->

<!-- START_6d528a164af137cf2a9cd08bdf7ec478 -->
## admin/member-card-settings/{member_card_setting}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/member-card-settings/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/member-card-settings/{member_card_setting}/edit`


<!-- END_6d528a164af137cf2a9cd08bdf7ec478 -->

<!-- START_c20520734c97931a826c0678fd5433ba -->
## admin/member-card-settings/{member_card_setting}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/member-card-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/1"
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
`PUT admin/member-card-settings/{member_card_setting}`

`PATCH admin/member-card-settings/{member_card_setting}`


<!-- END_c20520734c97931a826c0678fd5433ba -->

<!-- START_e4c150c4861deff90d306accfddf2808 -->
## admin/member-card-settings/{member_card_setting}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/member-card-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/member-card-settings/1"
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
`DELETE admin/member-card-settings/{member_card_setting}`


<!-- END_e4c150c4861deff90d306accfddf2808 -->

<!-- START_98c60fd8a57c37b8dc304fa51add97dd -->
## admin/item-cateogries/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/item-cateogries/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries/destroy"
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
`DELETE admin/item-cateogries/destroy`


<!-- END_98c60fd8a57c37b8dc304fa51add97dd -->

<!-- START_3e0137ebe1d9f6e231fb584ae36dcc63 -->
## admin/item-cateogries
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-cateogries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-cateogries`


<!-- END_3e0137ebe1d9f6e231fb584ae36dcc63 -->

<!-- START_652b3b73e9ff485791080243cbe935bc -->
## admin/item-cateogries/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-cateogries/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-cateogries/create`


<!-- END_652b3b73e9ff485791080243cbe935bc -->

<!-- START_e7290c6800ce12fac311711ba4791a72 -->
## admin/item-cateogries
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/item-cateogries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries"
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
`POST admin/item-cateogries`


<!-- END_e7290c6800ce12fac311711ba4791a72 -->

<!-- START_ef2809811b8eb7b78408b9734f635c2d -->
## admin/item-cateogries/{item_cateogry}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-cateogries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-cateogries/{item_cateogry}`


<!-- END_ef2809811b8eb7b78408b9734f635c2d -->

<!-- START_27252aab53cdfe7b298634ddc816df76 -->
## admin/item-cateogries/{item_cateogry}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-cateogries/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-cateogries/{item_cateogry}/edit`


<!-- END_27252aab53cdfe7b298634ddc816df76 -->

<!-- START_cebe14c133a8ce41e102a25ce7607bb2 -->
## admin/item-cateogries/{item_cateogry}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/item-cateogries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries/1"
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
`PUT admin/item-cateogries/{item_cateogry}`

`PATCH admin/item-cateogries/{item_cateogry}`


<!-- END_cebe14c133a8ce41e102a25ce7607bb2 -->

<!-- START_cb588b8485b91158c92cd7a328cd5747 -->
## admin/item-cateogries/{item_cateogry}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/item-cateogries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-cateogries/1"
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
`DELETE admin/item-cateogries/{item_cateogry}`


<!-- END_cb588b8485b91158c92cd7a328cd5747 -->

<!-- START_bf8bd4320b3cc1b8416ef8da50f553a1 -->
## admin/item-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/item-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/destroy"
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
`DELETE admin/item-managements/destroy`


<!-- END_bf8bd4320b3cc1b8416ef8da50f553a1 -->

<!-- START_0251b8572a0beb5eabdbc033be36b987 -->
## admin/item-managements/media
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/item-managements/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/media"
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
`POST admin/item-managements/media`


<!-- END_0251b8572a0beb5eabdbc033be36b987 -->

<!-- START_cf83bffcaa496c51541d22e5c0a41a56 -->
## admin/item-managements/ckmedia
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/item-managements/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/ckmedia"
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
`POST admin/item-managements/ckmedia`


<!-- END_cf83bffcaa496c51541d22e5c0a41a56 -->

<!-- START_9d3129a6a70eb35b86fc3cae05c58166 -->
## admin/item-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-managements`


<!-- END_9d3129a6a70eb35b86fc3cae05c58166 -->

<!-- START_2768c243fc63073590cbc61e9e3fea33 -->
## admin/item-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-managements/create`


<!-- END_2768c243fc63073590cbc61e9e3fea33 -->

<!-- START_f1f9a926b9e3f2d632d1a7ab1cb3a6cb -->
## admin/item-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/item-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements"
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
`POST admin/item-managements`


<!-- END_f1f9a926b9e3f2d632d1a7ab1cb3a6cb -->

<!-- START_a9d2bacbfd03e9aad766ebf5041efaab -->
## admin/item-managements/{item_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-managements/{item_management}`


<!-- END_a9d2bacbfd03e9aad766ebf5041efaab -->

<!-- START_628afddad6c49e88ddab36ab50197e5d -->
## admin/item-managements/{item_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/item-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/item-managements/{item_management}/edit`


<!-- END_628afddad6c49e88ddab36ab50197e5d -->

<!-- START_f56bb018f0ce824a886be54c96ca8fa5 -->
## admin/item-managements/{item_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/item-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/1"
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
`PUT admin/item-managements/{item_management}`

`PATCH admin/item-managements/{item_management}`


<!-- END_f56bb018f0ce824a886be54c96ca8fa5 -->

<!-- START_d5a00330c3bbbc77bc84bd23fce44d88 -->
## admin/item-managements/{item_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/item-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/item-managements/1"
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
`DELETE admin/item-managements/{item_management}`


<!-- END_d5a00330c3bbbc77bc84bd23fce44d88 -->

<!-- START_18b475d41e482e7c1044de343c036a31 -->
## admin/add-on-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-on-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories/destroy"
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
`DELETE admin/add-on-categories/destroy`


<!-- END_18b475d41e482e7c1044de343c036a31 -->

<!-- START_9913f3a4dbc403d2c63b040073b574ba -->
## admin/add-on-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-on-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-on-categories`


<!-- END_9913f3a4dbc403d2c63b040073b574ba -->

<!-- START_21fb27630acc463650329a6c1449c642 -->
## admin/add-on-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-on-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-on-categories/create`


<!-- END_21fb27630acc463650329a6c1449c642 -->

<!-- START_28b997e7d97631b818d4f179e8305dcc -->
## admin/add-on-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/add-on-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories"
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
`POST admin/add-on-categories`


<!-- END_28b997e7d97631b818d4f179e8305dcc -->

<!-- START_d0db35663590b07bf2692897d16dd31e -->
## admin/add-on-categories/{add_on_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-on-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-on-categories/{add_on_category}`


<!-- END_d0db35663590b07bf2692897d16dd31e -->

<!-- START_58f9c0b1ecbc254495b1128ab2c4bd23 -->
## admin/add-on-categories/{add_on_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-on-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/add-on-categories/{add_on_category}/edit`


<!-- END_58f9c0b1ecbc254495b1128ab2c4bd23 -->

<!-- START_86b7462ec7d8888452bdfd271b47f8c6 -->
## admin/add-on-categories/{add_on_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/add-on-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories/1"
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
`PUT admin/add-on-categories/{add_on_category}`

`PATCH admin/add-on-categories/{add_on_category}`


<!-- END_86b7462ec7d8888452bdfd271b47f8c6 -->

<!-- START_d2007fc80912852dd099b42db16a8e22 -->
## admin/add-on-categories/{add_on_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/add-on-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/add-on-categories/1"
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
`DELETE admin/add-on-categories/{add_on_category}`


<!-- END_d2007fc80912852dd099b42db16a8e22 -->

<!-- START_483be7d87fffe623b471cc06e44cf437 -->
## admin/addon-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/addon-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements/destroy"
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
`DELETE admin/addon-managements/destroy`


<!-- END_483be7d87fffe623b471cc06e44cf437 -->

<!-- START_d71d5c67c726c6cbc9b8253fe124555e -->
## admin/addon-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/addon-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/addon-managements`


<!-- END_d71d5c67c726c6cbc9b8253fe124555e -->

<!-- START_1f17f3b3f871a8ff81b1332f67ef74a4 -->
## admin/addon-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/addon-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/addon-managements/create`


<!-- END_1f17f3b3f871a8ff81b1332f67ef74a4 -->

<!-- START_bb69826d7593ddcd258454ffa6ff394b -->
## admin/addon-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/addon-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements"
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
`POST admin/addon-managements`


<!-- END_bb69826d7593ddcd258454ffa6ff394b -->

<!-- START_bd6c717e457babe5d2f1e03e4e35fd24 -->
## admin/addon-managements/{addon_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/addon-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/addon-managements/{addon_management}`


<!-- END_bd6c717e457babe5d2f1e03e4e35fd24 -->

<!-- START_2b38b14bb55ef6a176253a6755656102 -->
## admin/addon-managements/{addon_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/addon-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/addon-managements/{addon_management}/edit`


<!-- END_2b38b14bb55ef6a176253a6755656102 -->

<!-- START_35929a869ac520d681522de363b23416 -->
## admin/addon-managements/{addon_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/addon-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements/1"
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
`PUT admin/addon-managements/{addon_management}`

`PATCH admin/addon-managements/{addon_management}`


<!-- END_35929a869ac520d681522de363b23416 -->

<!-- START_b766050dadc296cea8fa1e23e9663fe9 -->
## admin/addon-managements/{addon_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/addon-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/addon-managements/1"
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
`DELETE admin/addon-managements/{addon_management}`


<!-- END_b766050dadc296cea8fa1e23e9663fe9 -->

<!-- START_2855c6ab3c628a829e337e3bf4044f24 -->
## admin/order-statuses/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-statuses/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses/destroy"
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
`DELETE admin/order-statuses/destroy`


<!-- END_2855c6ab3c628a829e337e3bf4044f24 -->

<!-- START_1f0ffbd8c9aec555da3aadd19023072d -->
## admin/order-statuses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-statuses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-statuses`


<!-- END_1f0ffbd8c9aec555da3aadd19023072d -->

<!-- START_3b9c20f6b8aba4b7afce6699327986c7 -->
## admin/order-statuses/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-statuses/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-statuses/create`


<!-- END_3b9c20f6b8aba4b7afce6699327986c7 -->

<!-- START_15a8381ecc28fd87b9f4a47f5f1b89f1 -->
## admin/order-statuses
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order-statuses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses"
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
`POST admin/order-statuses`


<!-- END_15a8381ecc28fd87b9f4a47f5f1b89f1 -->

<!-- START_508291bb5a8535a56ed90d0377c43106 -->
## admin/order-statuses/{order_status}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-statuses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-statuses/{order_status}`


<!-- END_508291bb5a8535a56ed90d0377c43106 -->

<!-- START_b5f190ff258e4d2c51142bc10ed0f2b3 -->
## admin/order-statuses/{order_status}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-statuses/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-statuses/{order_status}/edit`


<!-- END_b5f190ff258e4d2c51142bc10ed0f2b3 -->

<!-- START_db3b490202a87802822adac9c9d983e6 -->
## admin/order-statuses/{order_status}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/order-statuses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses/1"
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
`PUT admin/order-statuses/{order_status}`

`PATCH admin/order-statuses/{order_status}`


<!-- END_db3b490202a87802822adac9c9d983e6 -->

<!-- START_a0a9b0af1ac767a2d99345f82b8efe98 -->
## admin/order-statuses/{order_status}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-statuses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-statuses/1"
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
`DELETE admin/order-statuses/{order_status}`


<!-- END_a0a9b0af1ac767a2d99345f82b8efe98 -->

<!-- START_0ad099c4ce8c0984a831692594eab6cd -->
## admin/order-items/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-items/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items/destroy"
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
`DELETE admin/order-items/destroy`


<!-- END_0ad099c4ce8c0984a831692594eab6cd -->

<!-- START_24af1dcf1e30e77388ec68cff4e21f29 -->
## admin/order-items
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-items`


<!-- END_24af1dcf1e30e77388ec68cff4e21f29 -->

<!-- START_f03723d6a0aac860faf861471f532aef -->
## admin/order-items/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-items/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-items/create`


<!-- END_f03723d6a0aac860faf861471f532aef -->

<!-- START_0a28f6df152dc0f5c60476fa2a9f1b03 -->
## admin/order-items
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items"
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
`POST admin/order-items`


<!-- END_0a28f6df152dc0f5c60476fa2a9f1b03 -->

<!-- START_740584dc52aad4f6b4eb1489c1b4dde2 -->
## admin/order-items/{order_item}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-items/{order_item}`


<!-- END_740584dc52aad4f6b4eb1489c1b4dde2 -->

<!-- START_1719902efac61dad58b4943e7b505fb0 -->
## admin/order-items/{order_item}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-items/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-items/{order_item}/edit`


<!-- END_1719902efac61dad58b4943e7b505fb0 -->

<!-- START_281c61dd932294f1be624f1688616056 -->
## admin/order-items/{order_item}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/order-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items/1"
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
`PUT admin/order-items/{order_item}`

`PATCH admin/order-items/{order_item}`


<!-- END_281c61dd932294f1be624f1688616056 -->

<!-- START_6aef3aea569062b9f0ae6b5412691317 -->
## admin/order-items/{order_item}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-items/1"
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
`DELETE admin/order-items/{order_item}`


<!-- END_6aef3aea569062b9f0ae6b5412691317 -->

<!-- START_17f514ec35ed455b7a59003031383fc1 -->
## admin/order-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements/destroy"
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
`DELETE admin/order-managements/destroy`


<!-- END_17f514ec35ed455b7a59003031383fc1 -->

<!-- START_32c626d5446db28ca3c323d0134e0ec2 -->
## admin/order-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-managements`


<!-- END_32c626d5446db28ca3c323d0134e0ec2 -->

<!-- START_752545e02c8ac7b4cab7a0178f838a54 -->
## admin/order-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-managements/create`


<!-- END_752545e02c8ac7b4cab7a0178f838a54 -->

<!-- START_7a910620b1927a4634b8c5e0365a2e3c -->
## admin/order-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements"
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
`POST admin/order-managements`


<!-- END_7a910620b1927a4634b8c5e0365a2e3c -->

<!-- START_ac0828f1bcc175526b7a6d5e0b2d5d0c -->
## admin/order-managements/{order_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-managements/{order_management}`


<!-- END_ac0828f1bcc175526b7a6d5e0b2d5d0c -->

<!-- START_bd95788e1504a81c0c6967e665be62d4 -->
## admin/order-managements/{order_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order-managements/{order_management}/edit`


<!-- END_bd95788e1504a81c0c6967e665be62d4 -->

<!-- START_37a0ac5301460631dcc95a6fc6dd035c -->
## admin/order-managements/{order_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/order-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements/1"
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
`PUT admin/order-managements/{order_management}`

`PATCH admin/order-managements/{order_management}`


<!-- END_37a0ac5301460631dcc95a6fc6dd035c -->

<!-- START_49a9c3c927736a402dea3223b4f42b3d -->
## admin/order-managements/{order_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order-managements/1"
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
`DELETE admin/order-managements/{order_management}`


<!-- END_49a9c3c927736a402dea3223b4f42b3d -->

<!-- START_96cc3facbe20db631ffb1d3330ca1571 -->
## admin/voucher-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories/destroy"
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
`DELETE admin/voucher-categories/destroy`


<!-- END_96cc3facbe20db631ffb1d3330ca1571 -->

<!-- START_60ff8a8bc4ec1230f59a7f64d760409a -->
## admin/voucher-categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-categories`


<!-- END_60ff8a8bc4ec1230f59a7f64d760409a -->

<!-- START_60939434af49ec227f0f240c7d58f14d -->
## admin/voucher-categories/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-categories/create`


<!-- END_60939434af49ec227f0f240c7d58f14d -->

<!-- START_c679ca2d1cfa5b494a66048c50292c35 -->
## admin/voucher-categories
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/voucher-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories"
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
`POST admin/voucher-categories`


<!-- END_c679ca2d1cfa5b494a66048c50292c35 -->

<!-- START_d64d6fb774c2ed204a4d717b33f54861 -->
## admin/voucher-categories/{voucher_category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-categories/{voucher_category}`


<!-- END_d64d6fb774c2ed204a4d717b33f54861 -->

<!-- START_e5c9aa05d54823fff31625b68d0e9e36 -->
## admin/voucher-categories/{voucher_category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-categories/{voucher_category}/edit`


<!-- END_e5c9aa05d54823fff31625b68d0e9e36 -->

<!-- START_86a586bd6ccf96f702c6ee0c138e3d65 -->
## admin/voucher-categories/{voucher_category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/voucher-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories/1"
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
`PUT admin/voucher-categories/{voucher_category}`

`PATCH admin/voucher-categories/{voucher_category}`


<!-- END_86a586bd6ccf96f702c6ee0c138e3d65 -->

<!-- START_bd7cc4cef713e0c6ecd2dc50b1372861 -->
## admin/voucher-categories/{voucher_category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-categories/1"
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
`DELETE admin/voucher-categories/{voucher_category}`


<!-- END_bd7cc4cef713e0c6ecd2dc50b1372861 -->

<!-- START_1b820570f95366e00826e7b1de897519 -->
## admin/voucher-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements/destroy"
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
`DELETE admin/voucher-managements/destroy`


<!-- END_1b820570f95366e00826e7b1de897519 -->

<!-- START_621eeb1897588010b2debee20f83a406 -->
## admin/voucher-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-managements`


<!-- END_621eeb1897588010b2debee20f83a406 -->

<!-- START_13299bdd70ad78fa871c217134bfbaf5 -->
## admin/voucher-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-managements/create`


<!-- END_13299bdd70ad78fa871c217134bfbaf5 -->

<!-- START_a30c7e48c511bf9d3d8be2ec8858f647 -->
## admin/voucher-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/voucher-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements"
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
`POST admin/voucher-managements`


<!-- END_a30c7e48c511bf9d3d8be2ec8858f647 -->

<!-- START_b0af95d7803e6bf1f0553b414a2cf96b -->
## admin/voucher-managements/{voucher_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-managements/{voucher_management}`


<!-- END_b0af95d7803e6bf1f0553b414a2cf96b -->

<!-- START_e021633d9b3a825f5f70d6fec715c629 -->
## admin/voucher-managements/{voucher_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-managements/{voucher_management}/edit`


<!-- END_e021633d9b3a825f5f70d6fec715c629 -->

<!-- START_aebc1d2d2ee364bb11891f9547959eb9 -->
## admin/voucher-managements/{voucher_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/voucher-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements/1"
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
`PUT admin/voucher-managements/{voucher_management}`

`PATCH admin/voucher-managements/{voucher_management}`


<!-- END_aebc1d2d2ee364bb11891f9547959eb9 -->

<!-- START_03f299c9261fdbf26e33439b2f5a64d8 -->
## admin/voucher-managements/{voucher_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-managements/1"
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
`DELETE admin/voucher-managements/{voucher_management}`


<!-- END_03f299c9261fdbf26e33439b2f5a64d8 -->

<!-- START_6df06036ff4160fb70000f1eef491644 -->
## admin/reward-catogeries/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/reward-catogeries/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries/destroy"
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
`DELETE admin/reward-catogeries/destroy`


<!-- END_6df06036ff4160fb70000f1eef491644 -->

<!-- START_83b41dc2e5141ae25dcb162187871f89 -->
## admin/reward-catogeries
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-catogeries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-catogeries`


<!-- END_83b41dc2e5141ae25dcb162187871f89 -->

<!-- START_b00c935b7cb8dd2454f8091f5b5a65f0 -->
## admin/reward-catogeries/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-catogeries/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-catogeries/create`


<!-- END_b00c935b7cb8dd2454f8091f5b5a65f0 -->

<!-- START_78d5ec24fb5d86d19c2c4787a2ed7566 -->
## admin/reward-catogeries
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/reward-catogeries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries"
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
`POST admin/reward-catogeries`


<!-- END_78d5ec24fb5d86d19c2c4787a2ed7566 -->

<!-- START_ea17335fbdcd16849c81a0729e7887cc -->
## admin/reward-catogeries/{reward_catogery}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-catogeries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-catogeries/{reward_catogery}`


<!-- END_ea17335fbdcd16849c81a0729e7887cc -->

<!-- START_7f547213652320b4327eb73dbf57e6ae -->
## admin/reward-catogeries/{reward_catogery}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-catogeries/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-catogeries/{reward_catogery}/edit`


<!-- END_7f547213652320b4327eb73dbf57e6ae -->

<!-- START_8750b5969b64431de71dee573e288aeb -->
## admin/reward-catogeries/{reward_catogery}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/reward-catogeries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries/1"
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
`PUT admin/reward-catogeries/{reward_catogery}`

`PATCH admin/reward-catogeries/{reward_catogery}`


<!-- END_8750b5969b64431de71dee573e288aeb -->

<!-- START_35a2259829ef15a8c6939bd38ab2e3a5 -->
## admin/reward-catogeries/{reward_catogery}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/reward-catogeries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-catogeries/1"
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
`DELETE admin/reward-catogeries/{reward_catogery}`


<!-- END_35a2259829ef15a8c6939bd38ab2e3a5 -->

<!-- START_aeb047fe39eccc5aab78818bf496f6cc -->
## admin/reward-managements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/reward-managements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements/destroy"
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
`DELETE admin/reward-managements/destroy`


<!-- END_aeb047fe39eccc5aab78818bf496f6cc -->

<!-- START_db3d91604407b45ca3d56600e5212dff -->
## admin/reward-managements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-managements`


<!-- END_db3d91604407b45ca3d56600e5212dff -->

<!-- START_a167438426a44ae2179eb4cf36844cb1 -->
## admin/reward-managements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-managements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-managements/create`


<!-- END_a167438426a44ae2179eb4cf36844cb1 -->

<!-- START_f27d5291241a6608c8c2fe1586b12d3b -->
## admin/reward-managements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/reward-managements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements"
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
`POST admin/reward-managements`


<!-- END_f27d5291241a6608c8c2fe1586b12d3b -->

<!-- START_d1502a6a8ae2510c6eb272c02344458f -->
## admin/reward-managements/{reward_management}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-managements/{reward_management}`


<!-- END_d1502a6a8ae2510c6eb272c02344458f -->

<!-- START_705fdd1e7828cf6d043802eaeeadf525 -->
## admin/reward-managements/{reward_management}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-managements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-managements/{reward_management}/edit`


<!-- END_705fdd1e7828cf6d043802eaeeadf525 -->

<!-- START_710de2866c955e2f6abf645f20c27c91 -->
## admin/reward-managements/{reward_management}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/reward-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements/1"
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
`PUT admin/reward-managements/{reward_management}`

`PATCH admin/reward-managements/{reward_management}`


<!-- END_710de2866c955e2f6abf645f20c27c91 -->

<!-- START_2e3205e44c88479983cc13a3d704e03a -->
## admin/reward-managements/{reward_management}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/reward-managements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-managements/1"
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
`DELETE admin/reward-managements/{reward_management}`


<!-- END_2e3205e44c88479983cc13a3d704e03a -->

<!-- START_51caa288a6c7bb7cecb60244dab7ef20 -->
## admin/point-settings/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/point-settings/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings/destroy"
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
`DELETE admin/point-settings/destroy`


<!-- END_51caa288a6c7bb7cecb60244dab7ef20 -->

<!-- START_4171209caf8f261bf439390e2ea387da -->
## admin/point-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-settings`


<!-- END_4171209caf8f261bf439390e2ea387da -->

<!-- START_96b80febbb24925971a638316d05fa00 -->
## admin/point-settings/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-settings/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-settings/create`


<!-- END_96b80febbb24925971a638316d05fa00 -->

<!-- START_396ab35430c884b64d6b5bc603719118 -->
## admin/point-settings
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/point-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings"
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
`POST admin/point-settings`


<!-- END_396ab35430c884b64d6b5bc603719118 -->

<!-- START_a2d72005fb4e9a32b7dcc05e25416f2f -->
## admin/point-settings/{point_setting}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-settings/{point_setting}`


<!-- END_a2d72005fb4e9a32b7dcc05e25416f2f -->

<!-- START_bfeed2327e778b887f2ed02bf6b03fdb -->
## admin/point-settings/{point_setting}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-settings/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-settings/{point_setting}/edit`


<!-- END_bfeed2327e778b887f2ed02bf6b03fdb -->

<!-- START_1d598321d2d4aa5024c72b5ccc6f9288 -->
## admin/point-settings/{point_setting}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/point-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings/1"
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
`PUT admin/point-settings/{point_setting}`

`PATCH admin/point-settings/{point_setting}`


<!-- END_1d598321d2d4aa5024c72b5ccc6f9288 -->

<!-- START_cab3fe14dfeb1debf5b63d45875fc471 -->
## admin/point-settings/{point_setting}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/point-settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-settings/1"
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
`DELETE admin/point-settings/{point_setting}`


<!-- END_cab3fe14dfeb1debf5b63d45875fc471 -->

<!-- START_79dfd0e5b4f83e64fefbf290f35ee776 -->
## admin/point-conditions/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/point-conditions/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions/destroy"
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
`DELETE admin/point-conditions/destroy`


<!-- END_79dfd0e5b4f83e64fefbf290f35ee776 -->

<!-- START_969cea41e2041f60da0748e758e7c3c0 -->
## admin/point-conditions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-conditions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-conditions`


<!-- END_969cea41e2041f60da0748e758e7c3c0 -->

<!-- START_6d6c534b16613989557e8cbf8c601c14 -->
## admin/point-conditions/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-conditions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-conditions/create`


<!-- END_6d6c534b16613989557e8cbf8c601c14 -->

<!-- START_c61ed5c57731313be6e8ace01474324a -->
## admin/point-conditions
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/point-conditions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions"
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
`POST admin/point-conditions`


<!-- END_c61ed5c57731313be6e8ace01474324a -->

<!-- START_4d2d59c3996eaf064ba3f50856fd593d -->
## admin/point-conditions/{point_condition}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-conditions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-conditions/{point_condition}`


<!-- END_4d2d59c3996eaf064ba3f50856fd593d -->

<!-- START_cf3cb885ab3ff995d75c770138501196 -->
## admin/point-conditions/{point_condition}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-conditions/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-conditions/{point_condition}/edit`


<!-- END_cf3cb885ab3ff995d75c770138501196 -->

<!-- START_0b660fa237ee16e0d5ff4a4c89e7027a -->
## admin/point-conditions/{point_condition}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/point-conditions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions/1"
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
`PUT admin/point-conditions/{point_condition}`

`PATCH admin/point-conditions/{point_condition}`


<!-- END_0b660fa237ee16e0d5ff4a4c89e7027a -->

<!-- START_157ae258beec307c13ed86dcf1ad18df -->
## admin/point-conditions/{point_condition}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/point-conditions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-conditions/1"
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
`DELETE admin/point-conditions/{point_condition}`


<!-- END_157ae258beec307c13ed86dcf1ad18df -->

<!-- START_b749eb05e5735149e06afccaa0a442f3 -->
## admin/voucher-wallets/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-wallets/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets/destroy"
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
`DELETE admin/voucher-wallets/destroy`


<!-- END_b749eb05e5735149e06afccaa0a442f3 -->

<!-- START_55d68c601c805a7f8f2a7d47110ed489 -->
## admin/voucher-wallets
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-wallets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-wallets`


<!-- END_55d68c601c805a7f8f2a7d47110ed489 -->

<!-- START_36fb6f9df2bd7370a17ac3150ae2e068 -->
## admin/voucher-wallets/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-wallets/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-wallets/create`


<!-- END_36fb6f9df2bd7370a17ac3150ae2e068 -->

<!-- START_98f9d456c6b4e49ef2331f35173b1fc6 -->
## admin/voucher-wallets
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/voucher-wallets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets"
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
`POST admin/voucher-wallets`


<!-- END_98f9d456c6b4e49ef2331f35173b1fc6 -->

<!-- START_473ad40e237a2b54642c9d0d9011d04a -->
## admin/voucher-wallets/{voucher_wallet}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-wallets/{voucher_wallet}`


<!-- END_473ad40e237a2b54642c9d0d9011d04a -->

<!-- START_46f042d36638a249a72f5dc028f89417 -->
## admin/voucher-wallets/{voucher_wallet}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-wallets/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-wallets/{voucher_wallet}/edit`


<!-- END_46f042d36638a249a72f5dc028f89417 -->

<!-- START_ba9bd22de2e8ab99d99c13ba7b803a6a -->
## admin/voucher-wallets/{voucher_wallet}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/voucher-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets/1"
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
`PUT admin/voucher-wallets/{voucher_wallet}`

`PATCH admin/voucher-wallets/{voucher_wallet}`


<!-- END_ba9bd22de2e8ab99d99c13ba7b803a6a -->

<!-- START_7a740ff7b654d87e128f2904429db04a -->
## admin/voucher-wallets/{voucher_wallet}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-wallets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-wallets/1"
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
`DELETE admin/voucher-wallets/{voucher_wallet}`


<!-- END_7a740ff7b654d87e128f2904429db04a -->

<!-- START_8af4438de1447357774e44e3a859acbb -->
## admin/reward-lists/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/reward-lists/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists/destroy"
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
`DELETE admin/reward-lists/destroy`


<!-- END_8af4438de1447357774e44e3a859acbb -->

<!-- START_11d6a4091e4d83ceda6b6aaae0f4350e -->
## admin/reward-lists
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-lists`


<!-- END_11d6a4091e4d83ceda6b6aaae0f4350e -->

<!-- START_e3dfd7517e32aacf5c2a29288a178e97 -->
## admin/reward-lists/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-lists/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-lists/create`


<!-- END_e3dfd7517e32aacf5c2a29288a178e97 -->

<!-- START_1213d3a44c1f2bf4c15594949646150f -->
## admin/reward-lists
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/reward-lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists"
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
`POST admin/reward-lists`


<!-- END_1213d3a44c1f2bf4c15594949646150f -->

<!-- START_0e833ff3b7f8e8e83460192547abbd7e -->
## admin/reward-lists/{reward_list}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-lists/{reward_list}`


<!-- END_0e833ff3b7f8e8e83460192547abbd7e -->

<!-- START_ac0e31a026f34b56d7946ec5fee8d75d -->
## admin/reward-lists/{reward_list}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reward-lists/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reward-lists/{reward_list}/edit`


<!-- END_ac0e31a026f34b56d7946ec5fee8d75d -->

<!-- START_169f65d56f57740779b377ee09a07631 -->
## admin/reward-lists/{reward_list}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/reward-lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists/1"
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
`PUT admin/reward-lists/{reward_list}`

`PATCH admin/reward-lists/{reward_list}`


<!-- END_169f65d56f57740779b377ee09a07631 -->

<!-- START_24e67e81bd145a1ecb6550d187b07417 -->
## admin/reward-lists/{reward_list}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/reward-lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reward-lists/1"
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
`DELETE admin/reward-lists/{reward_list}`


<!-- END_24e67e81bd145a1ecb6550d187b07417 -->

<!-- START_2ae06381b4647b062fb9178d48208dea -->
## admin/point-logs/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/point-logs/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs/destroy"
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
`DELETE admin/point-logs/destroy`


<!-- END_2ae06381b4647b062fb9178d48208dea -->

<!-- START_52d128897ea72a72061f845317d0d8d9 -->
## admin/point-logs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-logs`


<!-- END_52d128897ea72a72061f845317d0d8d9 -->

<!-- START_550dfb09564e8b6fdf04dc3a087ef855 -->
## admin/point-logs/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-logs/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-logs/create`


<!-- END_550dfb09564e8b6fdf04dc3a087ef855 -->

<!-- START_96a77a0bd628d3dee9aed2c2b6d1a1fd -->
## admin/point-logs
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/point-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs"
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
`POST admin/point-logs`


<!-- END_96a77a0bd628d3dee9aed2c2b6d1a1fd -->

<!-- START_1cdb8299306f1586bdcccca6d224aeb3 -->
## admin/point-logs/{point_log}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-logs/{point_log}`


<!-- END_1cdb8299306f1586bdcccca6d224aeb3 -->

<!-- START_9f030cfc61b36414fd7abf8f21320c72 -->
## admin/point-logs/{point_log}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/point-logs/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/point-logs/{point_log}/edit`


<!-- END_9f030cfc61b36414fd7abf8f21320c72 -->

<!-- START_2f440899b6930dd14a29b6825335b28f -->
## admin/point-logs/{point_log}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/point-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs/1"
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
`PUT admin/point-logs/{point_log}`

`PATCH admin/point-logs/{point_log}`


<!-- END_2f440899b6930dd14a29b6825335b28f -->

<!-- START_f6e0f70f204155e65d664cf4dd163c55 -->
## admin/point-logs/{point_log}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/point-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/point-logs/1"
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
`DELETE admin/point-logs/{point_log}`


<!-- END_f6e0f70f204155e65d664cf4dd163c55 -->

<!-- START_19278a4ef20ab69ef1dacefa78c7381b -->
## admin/vehicle-brands/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/vehicle-brands/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands/destroy"
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
`DELETE admin/vehicle-brands/destroy`


<!-- END_19278a4ef20ab69ef1dacefa78c7381b -->

<!-- START_58ab474cb892aebc7de4e37263a0792b -->
## admin/vehicle-brands
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-brands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-brands`


<!-- END_58ab474cb892aebc7de4e37263a0792b -->

<!-- START_62bd2969491437c518166e1d048dc5bc -->
## admin/vehicle-brands/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-brands/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-brands/create`


<!-- END_62bd2969491437c518166e1d048dc5bc -->

<!-- START_2180a4b732a329ff7ec7cc1c4c6c7320 -->
## admin/vehicle-brands
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/vehicle-brands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands"
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
`POST admin/vehicle-brands`


<!-- END_2180a4b732a329ff7ec7cc1c4c6c7320 -->

<!-- START_b14dc65e712b3406e1b591942a6414ab -->
## admin/vehicle-brands/{vehicle_brand}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-brands/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-brands/{vehicle_brand}`


<!-- END_b14dc65e712b3406e1b591942a6414ab -->

<!-- START_d2233d639846afaf47783899c8ce41c9 -->
## admin/vehicle-brands/{vehicle_brand}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-brands/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-brands/{vehicle_brand}/edit`


<!-- END_d2233d639846afaf47783899c8ce41c9 -->

<!-- START_9561f82145413c950da74c744e1f42cc -->
## admin/vehicle-brands/{vehicle_brand}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/vehicle-brands/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands/1"
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
`PUT admin/vehicle-brands/{vehicle_brand}`

`PATCH admin/vehicle-brands/{vehicle_brand}`


<!-- END_9561f82145413c950da74c744e1f42cc -->

<!-- START_e2827c341880b9bed7e232b8808915af -->
## admin/vehicle-brands/{vehicle_brand}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/vehicle-brands/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-brands/1"
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
`DELETE admin/vehicle-brands/{vehicle_brand}`


<!-- END_e2827c341880b9bed7e232b8808915af -->

<!-- START_1d27aabf2c882338b1592ba2c8e3d2ff -->
## admin/vehicle-mangements/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/vehicle-mangements/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements/destroy"
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
`DELETE admin/vehicle-mangements/destroy`


<!-- END_1d27aabf2c882338b1592ba2c8e3d2ff -->

<!-- START_c48c43435275d01e810f5916a0c75e56 -->
## admin/vehicle-mangements
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-mangements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-mangements`


<!-- END_c48c43435275d01e810f5916a0c75e56 -->

<!-- START_86301c22c858c6e5e2caa226beaf988e -->
## admin/vehicle-mangements/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-mangements/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-mangements/create`


<!-- END_86301c22c858c6e5e2caa226beaf988e -->

<!-- START_2eb0662488b3a5740d0e3d4f1c41d941 -->
## admin/vehicle-mangements
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/vehicle-mangements" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements"
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
`POST admin/vehicle-mangements`


<!-- END_2eb0662488b3a5740d0e3d4f1c41d941 -->

<!-- START_8aa7c6efe1f1291737b0795fc953cef1 -->
## admin/vehicle-mangements/{vehicle_mangement}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-mangements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-mangements/{vehicle_mangement}`


<!-- END_8aa7c6efe1f1291737b0795fc953cef1 -->

<!-- START_f70baab3602c5c59156b72ab86400989 -->
## admin/vehicle-mangements/{vehicle_mangement}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-mangements/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-mangements/{vehicle_mangement}/edit`


<!-- END_f70baab3602c5c59156b72ab86400989 -->

<!-- START_33d7c2bc05ba1952a2655d8ac432b1c1 -->
## admin/vehicle-mangements/{vehicle_mangement}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/vehicle-mangements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements/1"
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
`PUT admin/vehicle-mangements/{vehicle_mangement}`

`PATCH admin/vehicle-mangements/{vehicle_mangement}`


<!-- END_33d7c2bc05ba1952a2655d8ac432b1c1 -->

<!-- START_2c20ba8ef94ca2ef58fcb96ab12403ee -->
## admin/vehicle-mangements/{vehicle_mangement}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/vehicle-mangements/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-mangements/1"
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
`DELETE admin/vehicle-mangements/{vehicle_mangement}`


<!-- END_2c20ba8ef94ca2ef58fcb96ab12403ee -->

<!-- START_2918154db42ff85cbbe863883193ca0c -->
## admin/vehicle-models/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/vehicle-models/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models/destroy"
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
`DELETE admin/vehicle-models/destroy`


<!-- END_2918154db42ff85cbbe863883193ca0c -->

<!-- START_49fedf351b3bc32d63cb781a6bdc432d -->
## admin/vehicle-models
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-models" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-models`


<!-- END_49fedf351b3bc32d63cb781a6bdc432d -->

<!-- START_b43b93a496cf6964eee67d94fe32b80d -->
## admin/vehicle-models/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-models/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-models/create`


<!-- END_b43b93a496cf6964eee67d94fe32b80d -->

<!-- START_a54d1116138be3a56fd4c1d391be5b2b -->
## admin/vehicle-models
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/vehicle-models" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models"
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
`POST admin/vehicle-models`


<!-- END_a54d1116138be3a56fd4c1d391be5b2b -->

<!-- START_c4f7814c45e08832cb1c095c85ba5a46 -->
## admin/vehicle-models/{vehicle_model}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-models/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-models/{vehicle_model}`


<!-- END_c4f7814c45e08832cb1c095c85ba5a46 -->

<!-- START_e48f6e9f223e71dddc156c6030e5cd48 -->
## admin/vehicle-models/{vehicle_model}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/vehicle-models/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/vehicle-models/{vehicle_model}/edit`


<!-- END_e48f6e9f223e71dddc156c6030e5cd48 -->

<!-- START_09c253dc28e067d41ffaa5501248177d -->
## admin/vehicle-models/{vehicle_model}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/vehicle-models/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models/1"
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
`PUT admin/vehicle-models/{vehicle_model}`

`PATCH admin/vehicle-models/{vehicle_model}`


<!-- END_09c253dc28e067d41ffaa5501248177d -->

<!-- START_b5a60e4dea62c7516ae82ffcb1e3c36e -->
## admin/vehicle-models/{vehicle_model}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/vehicle-models/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/vehicle-models/1"
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
`DELETE admin/vehicle-models/{vehicle_model}`


<!-- END_b5a60e4dea62c7516ae82ffcb1e3c36e -->

<!-- START_9bf007410de7a4f910c85673e31b6ced -->
## admin/car-park-locations/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/car-park-locations/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations/destroy"
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
`DELETE admin/car-park-locations/destroy`


<!-- END_9bf007410de7a4f910c85673e31b6ced -->

<!-- START_c4d62019e68aa99d89a942a57e855c85 -->
## admin/car-park-locations
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/car-park-locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/car-park-locations`


<!-- END_c4d62019e68aa99d89a942a57e855c85 -->

<!-- START_507b67a42a0e872fc8205209bcb62485 -->
## admin/car-park-locations/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/car-park-locations/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/car-park-locations/create`


<!-- END_507b67a42a0e872fc8205209bcb62485 -->

<!-- START_358032ab2f166668fd969f0819f6958b -->
## admin/car-park-locations
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/car-park-locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations"
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
`POST admin/car-park-locations`


<!-- END_358032ab2f166668fd969f0819f6958b -->

<!-- START_d2f35bf5e6b07e40ae9c5bcbb9129c60 -->
## admin/car-park-locations/{car_park_location}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/car-park-locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/car-park-locations/{car_park_location}`


<!-- END_d2f35bf5e6b07e40ae9c5bcbb9129c60 -->

<!-- START_2727b303e0e1703357b506e91b056362 -->
## admin/car-park-locations/{car_park_location}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/car-park-locations/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/car-park-locations/{car_park_location}/edit`


<!-- END_2727b303e0e1703357b506e91b056362 -->

<!-- START_cf2a62e52e2a6fefbfb9380c089a2d1e -->
## admin/car-park-locations/{car_park_location}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/car-park-locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations/1"
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
`PUT admin/car-park-locations/{car_park_location}`

`PATCH admin/car-park-locations/{car_park_location}`


<!-- END_cf2a62e52e2a6fefbfb9380c089a2d1e -->

<!-- START_18a504fa77de6b6083b50ba73302cb42 -->
## admin/car-park-locations/{car_park_location}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/car-park-locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/car-park-locations/1"
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
`DELETE admin/car-park-locations/{car_park_location}`


<!-- END_18a504fa77de6b6083b50ba73302cb42 -->

<!-- START_9220c7daa2328e6dec7b1bb6db6f2ae6 -->
## admin/carpark-logs/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/carpark-logs/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs/destroy"
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
`DELETE admin/carpark-logs/destroy`


<!-- END_9220c7daa2328e6dec7b1bb6db6f2ae6 -->

<!-- START_e0475d4aa8003d6ff4d2ae91cdf1a469 -->
## admin/carpark-logs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-logs`


<!-- END_e0475d4aa8003d6ff4d2ae91cdf1a469 -->

<!-- START_0219343b980c5699fe9ae0d80e0b12c2 -->
## admin/carpark-logs/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-logs/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-logs/create`


<!-- END_0219343b980c5699fe9ae0d80e0b12c2 -->

<!-- START_efc8e5c1ddeb88853a1d02812c79c7ca -->
## admin/carpark-logs
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/carpark-logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs"
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
`POST admin/carpark-logs`


<!-- END_efc8e5c1ddeb88853a1d02812c79c7ca -->

<!-- START_c4321d55e9d077f5de6eb6672cd8252c -->
## admin/carpark-logs/{carpark_log}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-logs/{carpark_log}`


<!-- END_c4321d55e9d077f5de6eb6672cd8252c -->

<!-- START_4c751de9e110ae812aac8f3e5a8a6105 -->
## admin/carpark-logs/{carpark_log}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-logs/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-logs/{carpark_log}/edit`


<!-- END_4c751de9e110ae812aac8f3e5a8a6105 -->

<!-- START_2088e0198dc2301511acec11a3bd99bf -->
## admin/carpark-logs/{carpark_log}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/carpark-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs/1"
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
`PUT admin/carpark-logs/{carpark_log}`

`PATCH admin/carpark-logs/{carpark_log}`


<!-- END_2088e0198dc2301511acec11a3bd99bf -->

<!-- START_3a679b9c2d6eaf98af9795c4f2393629 -->
## admin/carpark-logs/{carpark_log}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/carpark-logs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-logs/1"
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
`DELETE admin/carpark-logs/{carpark_log}`


<!-- END_3a679b9c2d6eaf98af9795c4f2393629 -->

<!-- START_52640aa56e4226369d49746946a7e67c -->
## admin/rate-settings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/rate-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/rate-settings"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/rate-settings`


<!-- END_52640aa56e4226369d49746946a7e67c -->

<!-- START_9ba53a6a43c278789133276e8cde4168 -->
## admin/event-payments/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-payments/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments/destroy"
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
`DELETE admin/event-payments/destroy`


<!-- END_9ba53a6a43c278789133276e8cde4168 -->

<!-- START_b7dcc19cdcc80cea1930d95c37ce33b1 -->
## admin/event-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-payments`


<!-- END_b7dcc19cdcc80cea1930d95c37ce33b1 -->

<!-- START_fe7010d69d1ff724359d6f32e23fb819 -->
## admin/event-payments/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-payments/create`


<!-- END_fe7010d69d1ff724359d6f32e23fb819 -->

<!-- START_bbb7e445c3a944b3ec220d9f8bdff14f -->
## admin/event-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/event-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments"
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
`POST admin/event-payments`


<!-- END_bbb7e445c3a944b3ec220d9f8bdff14f -->

<!-- START_c9635379b49fb8f3be1303c7f73e3a91 -->
## admin/event-payments/{event_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-payments/{event_payment}`


<!-- END_c9635379b49fb8f3be1303c7f73e3a91 -->

<!-- START_07e9f89c7fde984e153cb929301a1fec -->
## admin/event-payments/{event_payment}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/event-payments/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/event-payments/{event_payment}/edit`


<!-- END_07e9f89c7fde984e153cb929301a1fec -->

<!-- START_621c008f5eb028f6e791bdc3a30d27cd -->
## admin/event-payments/{event_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/event-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments/1"
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
`PUT admin/event-payments/{event_payment}`

`PATCH admin/event-payments/{event_payment}`


<!-- END_621c008f5eb028f6e791bdc3a30d27cd -->

<!-- START_e3d6a84fd8611e0be91e874504eba89f -->
## admin/event-payments/{event_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/event-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/event-payments/1"
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
`DELETE admin/event-payments/{event_payment}`


<!-- END_e3d6a84fd8611e0be91e874504eba89f -->

<!-- START_1f7b6e07d7ad7829350357c14aec7be5 -->
## admin/carpark-payments/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/carpark-payments/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments/destroy"
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
`DELETE admin/carpark-payments/destroy`


<!-- END_1f7b6e07d7ad7829350357c14aec7be5 -->

<!-- START_7f0bbf61428638c2269747296527cc54 -->
## admin/carpark-payments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-payments`


<!-- END_7f0bbf61428638c2269747296527cc54 -->

<!-- START_daddf36e4b234792513defa92e0633bf -->
## admin/carpark-payments/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-payments/create`


<!-- END_daddf36e4b234792513defa92e0633bf -->

<!-- START_46d577361c9a6a1caa3bef0a0915ccef -->
## admin/carpark-payments
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/carpark-payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments"
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
`POST admin/carpark-payments`


<!-- END_46d577361c9a6a1caa3bef0a0915ccef -->

<!-- START_e8b7e471b8b4cb59bc39d5cb180d2bfa -->
## admin/carpark-payments/{carpark_payment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-payments/{carpark_payment}`


<!-- END_e8b7e471b8b4cb59bc39d5cb180d2bfa -->

<!-- START_c8b87c34aa259ca6b831e04b21b99e17 -->
## admin/carpark-payments/{carpark_payment}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/carpark-payments/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/carpark-payments/{carpark_payment}/edit`


<!-- END_c8b87c34aa259ca6b831e04b21b99e17 -->

<!-- START_fc3938810162df74b164ffe70bb82628 -->
## admin/carpark-payments/{carpark_payment}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/carpark-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments/1"
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
`PUT admin/carpark-payments/{carpark_payment}`

`PATCH admin/carpark-payments/{carpark_payment}`


<!-- END_fc3938810162df74b164ffe70bb82628 -->

<!-- START_024f5964de40524ef0593a6b1c091096 -->
## admin/carpark-payments/{carpark_payment}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/carpark-payments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/carpark-payments/1"
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
`DELETE admin/carpark-payments/{carpark_payment}`


<!-- END_024f5964de40524ef0593a6b1c091096 -->

<!-- START_5289fc6c978e00b568526bcd2870edd4 -->
## admin/shop-rentals/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/shop-rentals/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals/destroy"
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
`DELETE admin/shop-rentals/destroy`


<!-- END_5289fc6c978e00b568526bcd2870edd4 -->

<!-- START_41c0da4b94fc751f1826c7a2a5067365 -->
## admin/shop-rentals
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/shop-rentals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/shop-rentals`


<!-- END_41c0da4b94fc751f1826c7a2a5067365 -->

<!-- START_4a4b57fffbabd99ae01239b5d4e6a707 -->
## admin/shop-rentals/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/shop-rentals/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/shop-rentals/create`


<!-- END_4a4b57fffbabd99ae01239b5d4e6a707 -->

<!-- START_4feec536c636e3ad5ffbec22a8b11801 -->
## admin/shop-rentals
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/shop-rentals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals"
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
`POST admin/shop-rentals`


<!-- END_4feec536c636e3ad5ffbec22a8b11801 -->

<!-- START_284d02bf510e66034a6f59216d60c903 -->
## admin/shop-rentals/{shop_rental}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/shop-rentals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/shop-rentals/{shop_rental}`


<!-- END_284d02bf510e66034a6f59216d60c903 -->

<!-- START_f33828ef56e0bb834ffb85a8934cd1ed -->
## admin/shop-rentals/{shop_rental}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/shop-rentals/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/shop-rentals/{shop_rental}/edit`


<!-- END_f33828ef56e0bb834ffb85a8934cd1ed -->

<!-- START_77b9ab3d8ae4fa5790e171a89faa1381 -->
## admin/shop-rentals/{shop_rental}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/shop-rentals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals/1"
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
`PUT admin/shop-rentals/{shop_rental}`

`PATCH admin/shop-rentals/{shop_rental}`


<!-- END_77b9ab3d8ae4fa5790e171a89faa1381 -->

<!-- START_c15739efeccee51db64c3ed913bd3dbc -->
## admin/shop-rentals/{shop_rental}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/shop-rentals/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/shop-rentals/1"
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
`DELETE admin/shop-rentals/{shop_rental}`


<!-- END_c15739efeccee51db64c3ed913bd3dbc -->

<!-- START_4e1b3ce6eccefbdbd6e4c6780cf70f94 -->
## admin/mall-units/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/mall-units/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units/destroy"
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
`DELETE admin/mall-units/destroy`


<!-- END_4e1b3ce6eccefbdbd6e4c6780cf70f94 -->

<!-- START_6ff75b8484402a3f59c2518a4f14bd94 -->
## admin/mall-units
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/mall-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/mall-units`


<!-- END_6ff75b8484402a3f59c2518a4f14bd94 -->

<!-- START_d5acc2f0daa811f2faa6427ffb6581b5 -->
## admin/mall-units/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/mall-units/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/mall-units/create`


<!-- END_d5acc2f0daa811f2faa6427ffb6581b5 -->

<!-- START_0dd979f80cc5121756f54d8e0fe28d59 -->
## admin/mall-units
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/mall-units" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units"
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
`POST admin/mall-units`


<!-- END_0dd979f80cc5121756f54d8e0fe28d59 -->

<!-- START_da65a042ee92dd9c2ed63974a96250d5 -->
## admin/mall-units/{mall_unit}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/mall-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/mall-units/{mall_unit}`


<!-- END_da65a042ee92dd9c2ed63974a96250d5 -->

<!-- START_68c0a5574003fc1eb7899bc58c3f5185 -->
## admin/mall-units/{mall_unit}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/mall-units/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/mall-units/{mall_unit}/edit`


<!-- END_68c0a5574003fc1eb7899bc58c3f5185 -->

<!-- START_af1a82353b8adb3ee9fd3d2ef5723a3b -->
## admin/mall-units/{mall_unit}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/mall-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units/1"
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
`PUT admin/mall-units/{mall_unit}`

`PATCH admin/mall-units/{mall_unit}`


<!-- END_af1a82353b8adb3ee9fd3d2ef5723a3b -->

<!-- START_c7fede1476272ee8a1b35f5f67917c1a -->
## admin/mall-units/{mall_unit}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/mall-units/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/mall-units/1"
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
`DELETE admin/mall-units/{mall_unit}`


<!-- END_c7fede1476272ee8a1b35f5f67917c1a -->

<!-- START_8a362d6080ee22d2a35c58f843987ac8 -->
## admin/voucher-redeems/destroy
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-redeems/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems/destroy"
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
`DELETE admin/voucher-redeems/destroy`


<!-- END_8a362d6080ee22d2a35c58f843987ac8 -->

<!-- START_29e44a9e89498fa4010318c3741986ae -->
## admin/voucher-redeems
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-redeems" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-redeems`


<!-- END_29e44a9e89498fa4010318c3741986ae -->

<!-- START_9319ba8540ce3e631dee46b8c1dc9b92 -->
## admin/voucher-redeems/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-redeems/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-redeems/create`


<!-- END_9319ba8540ce3e631dee46b8c1dc9b92 -->

<!-- START_3f48bd037fe6b1fc9c229c375fb56251 -->
## admin/voucher-redeems
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/voucher-redeems" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems"
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
`POST admin/voucher-redeems`


<!-- END_3f48bd037fe6b1fc9c229c375fb56251 -->

<!-- START_b57060a5d02567f3f1b2001151157d31 -->
## admin/voucher-redeems/{voucher_redeem}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-redeems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-redeems/{voucher_redeem}`


<!-- END_b57060a5d02567f3f1b2001151157d31 -->

<!-- START_eb00c87e1621b18b582ef17726b930dc -->
## admin/voucher-redeems/{voucher_redeem}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/voucher-redeems/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems/1/edit"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/voucher-redeems/{voucher_redeem}/edit`


<!-- END_eb00c87e1621b18b582ef17726b930dc -->

<!-- START_5bdae3ac29c04d09e7f2755f33f00abf -->
## admin/voucher-redeems/{voucher_redeem}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/voucher-redeems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems/1"
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
`PUT admin/voucher-redeems/{voucher_redeem}`

`PATCH admin/voucher-redeems/{voucher_redeem}`


<!-- END_5bdae3ac29c04d09e7f2755f33f00abf -->

<!-- START_e72642df7cbef23c69437024ff709fde -->
## admin/voucher-redeems/{voucher_redeem}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/voucher-redeems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/voucher-redeems/1"
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
`DELETE admin/voucher-redeems/{voucher_redeem}`


<!-- END_e72642df7cbef23c69437024ff709fde -->

<!-- START_6f7db82f19c91477a452b7bf51eba9c3 -->
## admin/messenger
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/messenger" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/messenger`


<!-- END_6f7db82f19c91477a452b7bf51eba9c3 -->

<!-- START_e0a6d3f16380f9a32a063e1b22195e6b -->
## admin/messenger/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/messenger/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/create"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/messenger/create`


<!-- END_e0a6d3f16380f9a32a063e1b22195e6b -->

<!-- START_33b4135977751e8410c1ac685a67e9dd -->
## admin/messenger
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/messenger" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger"
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
`POST admin/messenger`


<!-- END_33b4135977751e8410c1ac685a67e9dd -->

<!-- START_3db063178cdaa2d7c75477a0dfed1b22 -->
## admin/messenger/inbox
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/messenger/inbox" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/inbox"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/messenger/inbox`


<!-- END_3db063178cdaa2d7c75477a0dfed1b22 -->

<!-- START_1f767de9756a5082f171f52ad3c3c894 -->
## admin/messenger/outbox
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/messenger/outbox" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/outbox"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/messenger/outbox`


<!-- END_1f767de9756a5082f171f52ad3c3c894 -->

<!-- START_5eee1fa9245552774e206aef885ce899 -->
## admin/messenger/{topic}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/messenger/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/1"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/messenger/{topic}`


<!-- END_5eee1fa9245552774e206aef885ce899 -->

<!-- START_b9e936903205696c97e84782f8a14129 -->
## admin/messenger/{topic}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/messenger/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/1"
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
`DELETE admin/messenger/{topic}`


<!-- END_b9e936903205696c97e84782f8a14129 -->

<!-- START_6c19af0a9d736167a7f4ee8ff121e2fa -->
## admin/messenger/{topic}/reply
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/messenger/1/reply" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/1/reply"
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
`POST admin/messenger/{topic}/reply`


<!-- END_6c19af0a9d736167a7f4ee8ff121e2fa -->

<!-- START_6b68e286332bf5f0fb6c03f0253c3213 -->
## admin/messenger/{topic}/reply
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/messenger/1/reply" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/messenger/1/reply"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/messenger/{topic}/reply`


<!-- END_6b68e286332bf5f0fb6c03f0253c3213 -->

<!-- START_8af0be67d64a139573b3a0d49ca43122 -->
## profile/password
> Example request:

```bash
curl -X GET \
    -G "http://localhost/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/profile/password"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/password`


<!-- END_8af0be67d64a139573b3a0d49ca43122 -->

<!-- START_f101e7069fe48709ac3f6d2c7da0fc03 -->
## profile/password
> Example request:

```bash
curl -X POST \
    "http://localhost/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/profile/password"
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
`POST profile/password`


<!-- END_f101e7069fe48709ac3f6d2c7da0fc03 -->

<!-- START_6870500bdf295998a989328bfd82c760 -->
## profile/profile
> Example request:

```bash
curl -X POST \
    "http://localhost/profile/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/profile/profile"
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
`POST profile/profile`


<!-- END_6870500bdf295998a989328bfd82c760 -->

<!-- START_6990e14b965af9495dc7661e55ed1786 -->
## profile/profile/destroy
> Example request:

```bash
curl -X POST \
    "http://localhost/profile/profile/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/profile/profile/destroy"
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
`POST profile/profile/destroy`


<!-- END_6990e14b965af9495dc7661e55ed1786 -->


