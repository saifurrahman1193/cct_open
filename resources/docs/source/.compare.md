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


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
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
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/clockwork/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/clockwork/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_01a252c50bd17b20340dbc5a91cea4b7 -->
## _debugbar/telescope/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/telescope/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/telescope/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET _debugbar/telescope/{id}`


<!-- END_01a252c50bd17b20340dbc5a91cea4b7 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
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
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
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
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "http://localhost/_debugbar/cache/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/cache/1/"
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
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_6c3256ccb776586b79a2c91cb56e0197 -->
## Authenticate the request for channel access.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/broadcasting/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/broadcasting/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/broadcasting/auth`

`POST api/broadcasting/auth`


<!-- END_6c3256ccb776586b79a2c91cb56e0197 -->

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## api/auth/register
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/register"
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
`POST api/auth/register`


<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT via given credentials.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
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
`POST api/auth/login`


<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_c8ee75aaa55a5f8590dcdd50e070b26d -->
## api/auth/resetPassword
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/resetPassword" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/resetPassword"
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
`POST api/auth/resetPassword`


<!-- END_c8ee75aaa55a5f8590dcdd50e070b26d -->

<!-- START_4dabd719dee00d983c204094ad652b89 -->
## api/auth/dynamicChangepasswordFromEncryption
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/dynamicChangepasswordFromEncryption" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/dynamicChangepasswordFromEncryption"
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
`POST api/auth/dynamicChangepasswordFromEncryption`


<!-- END_4dabd719dee00d983c204094ad652b89 -->

<!-- START_d20d3bc6f1aeec95b2ced061348bcc14 -->
## api/auth/loginAdmin
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/loginAdmin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/loginAdmin"
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
`POST api/auth/loginAdmin`


<!-- END_d20d3bc6f1aeec95b2ced061348bcc14 -->

<!-- START_89dadc535d67afc7e31bf2e0773045d0 -->
## api/auth/getCurrentUserRoles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/getCurrentUserRoles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/getCurrentUserRoles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/getCurrentUserRoles`


<!-- END_89dadc535d67afc7e31bf2e0773045d0 -->

<!-- START_e61d1d7b929e8c824b813fd40882d1d8 -->
## api/auth/getCurrentUserModules
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/getCurrentUserModules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/getCurrentUserModules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/getCurrentUserModules`


<!-- END_e61d1d7b929e8c824b813fd40882d1d8 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## Log the user out (Invalidate the token).

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
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
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
## Refresh a token.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/refresh"
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
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## Get the authenticated User.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/me"
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
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_35a5f57a2ec56b3cdb46b49a93aecd63 -->
## api/auth/meAdmin
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/meAdmin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/meAdmin"
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
`POST api/auth/meAdmin`


<!-- END_35a5f57a2ec56b3cdb46b49a93aecd63 -->

<!-- START_246d3379f49221f111cbaeeb6b9bfeb3 -->
## api/auth/payload
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/payload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/payload"
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
`POST api/auth/payload`


<!-- END_246d3379f49221f111cbaeeb6b9bfeb3 -->

<!-- START_0da2ab246e9fccf093fed19f7388683c -->
## api/auth/changePassword
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/changePassword" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/changePassword"
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
`POST api/auth/changePassword`


<!-- END_0da2ab246e9fccf093fed19f7388683c -->

<!-- START_3b8e32991db5b3977168462149a3e6f0 -->
## api/getUsers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUsers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUsers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getUsers`


<!-- END_3b8e32991db5b3977168462149a3e6f0 -->

<!-- START_b3bc627269aaea0befb37733f4296642 -->
## api/getUsersWithRoles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUsersWithRoles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUsersWithRoles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getUsersWithRoles`


<!-- END_b3bc627269aaea0befb37733f4296642 -->

<!-- START_b57257d63df7fe103fa5bd95e3236dd0 -->
## api/getUser/{userId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUser/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getUser/{userId}`


<!-- END_b57257d63df7fe103fa5bd95e3236dd0 -->

<!-- START_9607ae1b84c548676e1a41bcda826277 -->
## api/addUser
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addUser"
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
`POST api/addUser`


<!-- END_9607ae1b84c548676e1a41bcda826277 -->

<!-- START_4017ea47476821a31b4c278040f2418d -->
## api/editUser
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editUser"
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
`POST api/editUser`


<!-- END_4017ea47476821a31b4c278040f2418d -->

<!-- START_121a5716fb5b5a124f6370c78a18a365 -->
## api/deleteUser/{userId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteUser/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteUser/1"
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
`POST api/deleteUser/{userId}`


<!-- END_121a5716fb5b5a124f6370c78a18a365 -->

<!-- START_f6d80b0da2840a887055e424e9532036 -->
## api/getRoles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRoles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRoles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getRoles`


<!-- END_f6d80b0da2840a887055e424e9532036 -->

<!-- START_ca9b0a5d40e98e857fbd09e9f897a598 -->
## api/getRole/{roleId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRole/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRole/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getRole/{roleId}`


<!-- END_ca9b0a5d40e98e857fbd09e9f897a598 -->

<!-- START_347e70db5565992fd98db0a41b66a4b6 -->
## api/addRole
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addRole" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addRole"
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
`POST api/addRole`


<!-- END_347e70db5565992fd98db0a41b66a4b6 -->

<!-- START_bf0e72798ea1aa59a4fdb48619433cb7 -->
## api/editRole
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editRole" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editRole"
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
`POST api/editRole`


<!-- END_bf0e72798ea1aa59a4fdb48619433cb7 -->

<!-- START_c9430ec0911759273b5845522a511bc6 -->
## api/deleteRole/{roleId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteRole/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteRole/1"
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
`POST api/deleteRole/{roleId}`


<!-- END_c9430ec0911759273b5845522a511bc6 -->

<!-- START_f6d5ad85681dee32ff60c702e0a20466 -->
## api/getModules
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getModules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getModules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getModules`


<!-- END_f6d5ad85681dee32ff60c702e0a20466 -->

<!-- START_62e9785dfe7a947dc87fe2b742659c2e -->
## api/getModule/{moduleId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getModule/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getModule/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getModule/{moduleId}`


<!-- END_62e9785dfe7a947dc87fe2b742659c2e -->

<!-- START_907c550e488cee534b30aa76070a52f1 -->
## api/getRoleModules
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRoleModules" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRoleModules"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getRoleModules`


<!-- END_907c550e488cee534b30aa76070a52f1 -->

<!-- START_ca2b96032bb00189869e9e217d3ffff0 -->
## api/storageBackup
> Example request:

```bash
curl -X POST \
    "http://localhost/api/storageBackup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/storageBackup"
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
`POST api/storageBackup`


<!-- END_ca2b96032bb00189869e9e217d3ffff0 -->

<!-- START_554a3fade8fa862e04e36eca252b9f0e -->
## api/storageBackupDelete
> Example request:

```bash
curl -X POST \
    "http://localhost/api/storageBackupDelete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/storageBackupDelete"
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
`POST api/storageBackupDelete`


<!-- END_554a3fade8fa862e04e36eca252b9f0e -->

<!-- START_f95813984a3abf2c781bcc2275995139 -->
## api/serverDBBackup
> Example request:

```bash
curl -X POST \
    "http://localhost/api/serverDBBackup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/serverDBBackup"
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
`POST api/serverDBBackup`


<!-- END_f95813984a3abf2c781bcc2275995139 -->

<!-- START_dfe66f0d453872a4c5cfdab69755e9bf -->
## api/getContacts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getContacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getContacts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getContacts`


<!-- END_dfe66f0d453872a4c5cfdab69755e9bf -->

<!-- START_818c6e3c9ebe138fdcf7b12143a86e98 -->
## api/getAdminContacts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAdminContacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAdminContacts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getAdminContacts`


<!-- END_818c6e3c9ebe138fdcf7b12143a86e98 -->

<!-- START_cc368c718faaa0d3c005da2467ff7edd -->
## api/getMessages
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getMessages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getMessages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getMessages`


<!-- END_cc368c718faaa0d3c005da2467ff7edd -->

<!-- START_14f49ae6e0e138b7a04b74149f7c2fba -->
## api/getAContactMessages/{userId1}/{userId2}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAContactMessages/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAContactMessages/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getAContactMessages/{userId1}/{userId2}`


<!-- END_14f49ae6e0e138b7a04b74149f7c2fba -->

<!-- START_0b7f6240bbdcc1d229cf476d88a26cdf -->
## api/sendMessage
> Example request:

```bash
curl -X POST \
    "http://localhost/api/sendMessage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/sendMessage"
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
`POST api/sendMessage`


<!-- END_0b7f6240bbdcc1d229cf476d88a26cdf -->

<!-- START_3705d6a245da5ba680349393af4c80eb -->
## api/profileUpdate
> Example request:

```bash
curl -X POST \
    "http://localhost/api/profileUpdate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/profileUpdate"
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
`POST api/profileUpdate`


<!-- END_3705d6a245da5ba680349393af4c80eb -->

<!-- START_f0a3f1fa8f33cc713c94acfa903d544a -->
## api/addService
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addService" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addService"
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
`POST api/addService`


<!-- END_f0a3f1fa8f33cc713c94acfa903d544a -->

<!-- START_c945c7ea4c2ed7001b77166c6bd92a7e -->
## api/editService
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editService" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editService"
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
`POST api/editService`


<!-- END_c945c7ea4c2ed7001b77166c6bd92a7e -->

<!-- START_f52efd12333e3bda4302e7a29308a9b0 -->
## api/deleteService/{serviceId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteService/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteService/1"
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
`POST api/deleteService/{serviceId}`


<!-- END_f52efd12333e3bda4302e7a29308a9b0 -->

<!-- START_2332befd073727c6cd079d02fd3964e8 -->
## api/getDeliveryAddresses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDeliveryAddresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDeliveryAddresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getDeliveryAddresses`


<!-- END_2332befd073727c6cd079d02fd3964e8 -->

<!-- START_a7fbcf18c2e7813309cd351009dfe1fa -->
## api/getCurrentUserDeliveryAddresses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserDeliveryAddresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserDeliveryAddresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCurrentUserDeliveryAddresses`


<!-- END_a7fbcf18c2e7813309cd351009dfe1fa -->

<!-- START_bf25202f48e03e2fc1c002e9e2a92c24 -->
## api/getDeliveryAddress/{deliveryAddressId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDeliveryAddress/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDeliveryAddress/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getDeliveryAddress/{deliveryAddressId}`


<!-- END_bf25202f48e03e2fc1c002e9e2a92c24 -->

<!-- START_d967b4db51cb0d56cb53d2684daf0378 -->
## api/addCurrentUserDeliveryAddress
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addCurrentUserDeliveryAddress" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addCurrentUserDeliveryAddress"
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
`POST api/addCurrentUserDeliveryAddress`


<!-- END_d967b4db51cb0d56cb53d2684daf0378 -->

<!-- START_29f4bf75e3c9acb8605b244bb99a0835 -->
## api/editDeliveryAddress
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editDeliveryAddress" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editDeliveryAddress"
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
`POST api/editDeliveryAddress`


<!-- END_29f4bf75e3c9acb8605b244bb99a0835 -->

<!-- START_51795e4da28bcbe865e30c8bf5e8e138 -->
## api/deleteDeliveryAddress/{deliveryAddressId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDeliveryAddress/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDeliveryAddress/1"
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
`POST api/deleteDeliveryAddress/{deliveryAddressId}`


<!-- END_51795e4da28bcbe865e30c8bf5e8e138 -->

<!-- START_d5f79f7cb4598c75987cc3df2b027a9c -->
## api/getProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "productId": "1",
            "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
            "description": null,
            "created_at": "2020-09-21 12:28:30",
            "updated_at": "2020-09-21 12:28:30",
            "shortDescription": null,
            "uomId": null,
            "sku": null,
            "uom": null,
            "qty": null,
            "brandId": null,
            "brand": null,
            "brandSlug": null,
            "countryId": null,
            "country": null,
            "formulationId": null,
            "formulation": null,
            "productTypeId": null,
            "productType": null,
            "skinTypeId": null,
            "skinType": null,
            "genderId": null,
            "gender": null,
            "applicationAreaId": null,
            "applicationArea": null,
            "searchTags": null,
            "productPicturePath": "\/uploads\/products\/product-1_5381675.png",
            "sellingPrice": "700",
            "batchProductId": "1",
            "categories": null,
            "categorySlugs": null,
            "isNewArrival": "0",
            "isLimitedEdition": "0",
            "purchaseQty": "1000",
            "sellingQty": "26",
            "inStockQty": "974",
            "outOfStock": "0",
            "rating": null
        }
    ]
}
```

### HTTP Request
`GET api/getProducts`


<!-- END_d5f79f7cb4598c75987cc3df2b027a9c -->

<!-- START_63caedbf26328a2659731397fabde9fe -->
## api/getRandomProducts/{numberOfProductReturn}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRandomProducts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRandomProducts/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "productId": "1",
            "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
            "description": null,
            "created_at": "2020-09-21 12:28:30",
            "updated_at": "2020-09-21 12:28:30",
            "shortDescription": null,
            "uomId": null,
            "sku": null,
            "uom": null,
            "qty": null,
            "brandId": null,
            "brand": null,
            "brandSlug": null,
            "countryId": null,
            "country": null,
            "formulationId": null,
            "formulation": null,
            "productTypeId": null,
            "productType": null,
            "skinTypeId": null,
            "skinType": null,
            "genderId": null,
            "gender": null,
            "applicationAreaId": null,
            "applicationArea": null,
            "searchTags": null,
            "productPicturePath": "\/uploads\/products\/product-1_5381675.png",
            "sellingPrice": "700",
            "batchProductId": "1",
            "categories": null,
            "categorySlugs": null,
            "isNewArrival": "0",
            "isLimitedEdition": "0",
            "purchaseQty": "1000",
            "sellingQty": "26",
            "inStockQty": "974",
            "outOfStock": "0",
            "rating": null
        }
    ]
}
```

### HTTP Request
`GET api/getRandomProducts/{numberOfProductReturn}`


<!-- END_63caedbf26328a2659731397fabde9fe -->

<!-- START_d967ba6c288e8f9e5ac2821f7a052b61 -->
## api/getRelatedProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRelatedProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRelatedProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "productId": "1",
            "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
            "description": null,
            "created_at": "2020-09-21 12:28:30",
            "updated_at": "2020-09-21 12:28:30",
            "shortDescription": null,
            "uomId": null,
            "sku": null,
            "uom": null,
            "qty": null,
            "brandId": null,
            "brand": null,
            "brandSlug": null,
            "countryId": null,
            "country": null,
            "formulationId": null,
            "formulation": null,
            "productTypeId": null,
            "productType": null,
            "skinTypeId": null,
            "skinType": null,
            "genderId": null,
            "gender": null,
            "applicationAreaId": null,
            "applicationArea": null,
            "searchTags": null,
            "productPicturePath": "\/uploads\/products\/product-1_5381675.png",
            "sellingPrice": "700",
            "batchProductId": "1",
            "categories": null,
            "categorySlugs": null,
            "isNewArrival": "0",
            "isLimitedEdition": "0",
            "purchaseQty": "1000",
            "sellingQty": "26",
            "inStockQty": "974",
            "outOfStock": "0",
            "rating": null
        }
    ]
}
```

### HTTP Request
`GET api/getRelatedProducts`


<!-- END_d967ba6c288e8f9e5ac2821f7a052b61 -->

<!-- START_f17674dd81c9b26c0ec1006a5dbb20a9 -->
## api/getProductPictures
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductPictures" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductPictures"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "productPictureId": "1",
            "productPicturePath": "\/uploads\/products\/product-1_5381675.png",
            "description": null,
            "productId": "1",
            "isDefault": "1",
            "created_at": "2020-09-21 12:29:20",
            "updated_at": "2020-09-27 18:13:50"
        }
    ]
}
```

### HTTP Request
`GET api/getProductPictures`


<!-- END_f17674dd81c9b26c0ec1006a5dbb20a9 -->

<!-- START_1d55a0161f672b8f55d3f56f862efdd1 -->
## api/getProduct/{productId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProduct/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "productId": "1",
        "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
        "description": null,
        "shortDescription": null,
        "uomId": null,
        "qty": null,
        "youtube": null,
        "sku": null,
        "brandId": null,
        "genderId": null,
        "applicationAreaId": null,
        "productTypeId": null,
        "countryId": null,
        "formulationId": null,
        "skinTypeId": null,
        "searchTags": null,
        "created_at": "2020-09-21 12:28:30",
        "updated_at": "2020-09-21 12:28:30"
    }
}
```

### HTTP Request
`GET api/getProduct/{productId}`


<!-- END_1d55a0161f672b8f55d3f56f862efdd1 -->

<!-- START_44a1eeb8b98e4e62409f4f1c1ad13e37 -->
## api/getProductAllData/{productId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductAllData/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductAllData/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "productId": "1",
        "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
        "description": null,
        "created_at": "2020-09-21 12:28:30",
        "updated_at": "2020-09-21 12:28:30",
        "shortDescription": null,
        "uomId": null,
        "sku": null,
        "uom": null,
        "qty": null,
        "brandId": null,
        "brand": null,
        "brandSlug": null,
        "countryId": null,
        "country": null,
        "formulationId": null,
        "formulation": null,
        "productTypeId": null,
        "productType": null,
        "skinTypeId": null,
        "skinType": null,
        "genderId": null,
        "gender": null,
        "applicationAreaId": null,
        "applicationArea": null,
        "searchTags": null,
        "productPicturePath": "\/uploads\/products\/product-1_5381675.png",
        "sellingPrice": "700",
        "batchProductId": "1",
        "categories": null,
        "categorySlugs": null,
        "isNewArrival": "0",
        "isLimitedEdition": "0",
        "purchaseQty": "1000",
        "sellingQty": "26",
        "inStockQty": "974",
        "outOfStock": "0",
        "rating": null
    }
}
```

### HTTP Request
`GET api/getProductAllData/{productId}`


<!-- END_44a1eeb8b98e4e62409f4f1c1ad13e37 -->

<!-- START_7beae16414bf0b6d46dd5bef603ee1c5 -->
## api/getFeaturedProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getFeaturedProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getFeaturedProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getFeaturedProducts`


<!-- END_7beae16414bf0b6d46dd5bef603ee1c5 -->

<!-- START_005a1b08e65cf3a47c7bf56375a4b354 -->
## api/getLimitedEditions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getLimitedEditions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getLimitedEditions"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getLimitedEditions`


<!-- END_005a1b08e65cf3a47c7bf56375a4b354 -->

<!-- START_f328e99dede979e595422efb04457611 -->
## api/getNewArrivals
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getNewArrivals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getNewArrivals"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "newArrivalId": "1",
            "productId": null,
            "productName": null,
            "description": null,
            "created_at": null,
            "updated_at": null,
            "shortDescription": null,
            "uomId": null,
            "sku": null,
            "uom": null,
            "qty": null,
            "brandId": null,
            "brand": null,
            "countryId": null,
            "country": null,
            "formulationId": null,
            "formulation": null,
            "productTypeId": null,
            "productType": null,
            "skinTypeId": null,
            "skinType": null,
            "genderId": null,
            "gender": null,
            "applicationAreaId": null,
            "applicationArea": null,
            "searchTags": null,
            "productPicturePath": null
        },
        {
            "newArrivalId": "2",
            "productId": "12",
            "productName": null,
            "description": null,
            "created_at": null,
            "updated_at": null,
            "shortDescription": null,
            "uomId": null,
            "sku": null,
            "uom": null,
            "qty": null,
            "brandId": null,
            "brand": null,
            "countryId": null,
            "country": null,
            "formulationId": null,
            "formulation": null,
            "productTypeId": null,
            "productType": null,
            "skinTypeId": null,
            "skinType": null,
            "genderId": null,
            "gender": null,
            "applicationAreaId": null,
            "applicationArea": null,
            "searchTags": null,
            "productPicturePath": null
        }
    ]
}
```

### HTTP Request
`GET api/getNewArrivals`


<!-- END_f328e99dede979e595422efb04457611 -->

<!-- START_e69f0cfbc994f38385922372641a59bd -->
## api/getProductCategories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductCategories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductCategories"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getProductCategories`


<!-- END_e69f0cfbc994f38385922372641a59bd -->

<!-- START_62f088d991097553a261d46960162623 -->
## api/getLatestProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getLatestProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getLatestProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getLatestProducts`


<!-- END_62f088d991097553a261d46960162623 -->

<!-- START_9d1b338a845926a58248285da260a09c -->
## api/getBestsellingProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBestsellingProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBestsellingProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getBestsellingProducts`


<!-- END_9d1b338a845926a58248285da260a09c -->

<!-- START_c3092f9981e8f90d3bc73b2e3ed16625 -->
## api/getTopratedProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getTopratedProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getTopratedProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getTopratedProducts`


<!-- END_c3092f9981e8f90d3bc73b2e3ed16625 -->

<!-- START_974493bb38c9b7df32b94d6ee5c43393 -->
## api/addProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addProduct"
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
`POST api/addProduct`


<!-- END_974493bb38c9b7df32b94d6ee5c43393 -->

<!-- START_6037779650a1fb634637036a46a62c37 -->
## api/addProductPicture
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addProductPicture" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addProductPicture"
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
`POST api/addProductPicture`


<!-- END_6037779650a1fb634637036a46a62c37 -->

<!-- START_baf8755d8edee3a27de699c60ecf3f9a -->
## api/editProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editProduct"
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
`POST api/editProduct`


<!-- END_baf8755d8edee3a27de699c60ecf3f9a -->

<!-- START_ee3624512777fc7c77187c591b681a5a -->
## api/deleteProduct/{productId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteProduct/1"
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
`POST api/deleteProduct/{productId}`


<!-- END_ee3624512777fc7c77187c591b681a5a -->

<!-- START_c16275d382c06fc7373a8a079d1f6fbe -->
## api/deleteProductPicture/{productPictureId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteProductPicture/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteProductPicture/1"
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
`POST api/deleteProductPicture/{productPictureId}`


<!-- END_c16275d382c06fc7373a8a079d1f6fbe -->

<!-- START_acaeffce5da1843daddf4d4c7a815c57 -->
## api/setProductPictureDefault/{productPictureId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/setProductPictureDefault/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/setProductPictureDefault/1"
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
`POST api/setProductPictureDefault/{productPictureId}`


<!-- END_acaeffce5da1843daddf4d4c7a815c57 -->

<!-- START_67f7d538c5359d5ed64ae184790bb6d9 -->
## api/addFeaturedProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addFeaturedProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addFeaturedProduct"
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
`POST api/addFeaturedProduct`


<!-- END_67f7d538c5359d5ed64ae184790bb6d9 -->

<!-- START_61e118246a73623aa7a928d6ad234cd9 -->
## api/deleteFeaturedProduct/{featuredProductId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteFeaturedProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteFeaturedProduct/1"
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
`POST api/deleteFeaturedProduct/{featuredProductId}`


<!-- END_61e118246a73623aa7a928d6ad234cd9 -->

<!-- START_0cc60321ae5adee045aa4c5bffa4f52f -->
## api/addLatestProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addLatestProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addLatestProduct"
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
`POST api/addLatestProduct`


<!-- END_0cc60321ae5adee045aa4c5bffa4f52f -->

<!-- START_eb903afe6cdc8d291a1ab1ff6da242fe -->
## api/deleteLatestProduct/{latestProductId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteLatestProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteLatestProduct/1"
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
`POST api/deleteLatestProduct/{latestProductId}`


<!-- END_eb903afe6cdc8d291a1ab1ff6da242fe -->

<!-- START_08a92704473157701b0b29b6f3656128 -->
## api/addBestsellingProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addBestsellingProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addBestsellingProduct"
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
`POST api/addBestsellingProduct`


<!-- END_08a92704473157701b0b29b6f3656128 -->

<!-- START_b954186238e677efdd5996374b762178 -->
## api/deleteBestsellingProduct/{bestsellingProductId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteBestsellingProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteBestsellingProduct/1"
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
`POST api/deleteBestsellingProduct/{bestsellingProductId}`


<!-- END_b954186238e677efdd5996374b762178 -->

<!-- START_ecc5bb58fb74297b126ec96f1e25ad9a -->
## api/addTopratedProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addTopratedProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addTopratedProduct"
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
`POST api/addTopratedProduct`


<!-- END_ecc5bb58fb74297b126ec96f1e25ad9a -->

<!-- START_53028985699e03a6ca46be062ccc8764 -->
## api/deleteTopratedProduct/{topratedProductId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteTopratedProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteTopratedProduct/1"
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
`POST api/deleteTopratedProduct/{topratedProductId}`


<!-- END_53028985699e03a6ca46be062ccc8764 -->

<!-- START_a8d078f99ef4b83593b1418ae6b0c997 -->
## api/addLimitedEdition
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addLimitedEdition" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addLimitedEdition"
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
`POST api/addLimitedEdition`


<!-- END_a8d078f99ef4b83593b1418ae6b0c997 -->

<!-- START_70004b046f3bb9cdd1262c3a9cfb0eb0 -->
## api/deleteLimitedEdition/{limitedEditionId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteLimitedEdition/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteLimitedEdition/1"
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
`POST api/deleteLimitedEdition/{limitedEditionId}`


<!-- END_70004b046f3bb9cdd1262c3a9cfb0eb0 -->

<!-- START_c02902b12b11ae24e2621de40b98ecd4 -->
## api/addNewArrival
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addNewArrival" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addNewArrival"
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
`POST api/addNewArrival`


<!-- END_c02902b12b11ae24e2621de40b98ecd4 -->

<!-- START_92a2729d97b7c9777931334a16c9549d -->
## api/deleteNewArrival/{newArrivalId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteNewArrival/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteNewArrival/1"
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
`POST api/deleteNewArrival/{newArrivalId}`


<!-- END_92a2729d97b7c9777931334a16c9549d -->

<!-- START_736acd255a9d124e0c80b88d95ac01cb -->
## api/verifiedReviewer/{productId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/verifiedReviewer/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/verifiedReviewer/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/verifiedReviewer/{productId}`


<!-- END_736acd255a9d124e0c80b88d95ac01cb -->

<!-- START_b4ef680741ffc24386f89aa8bc76573c -->
## api/getProductTypes
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductTypes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductTypes"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getProductTypes`


<!-- END_b4ef680741ffc24386f89aa8bc76573c -->

<!-- START_e4bc46383b0783dc530fd3b032c30941 -->
## api/getProductType/{productTypeId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductType/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getProductType/{productTypeId}`


<!-- END_e4bc46383b0783dc530fd3b032c30941 -->

<!-- START_576ef095183252851b84df1cbf78ee36 -->
## api/addProductType
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addProductType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addProductType"
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
`POST api/addProductType`


<!-- END_576ef095183252851b84df1cbf78ee36 -->

<!-- START_d1441d0540a8f306501b641856a68d28 -->
## api/editProductType
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editProductType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editProductType"
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
`POST api/editProductType`


<!-- END_d1441d0540a8f306501b641856a68d28 -->

<!-- START_fbc8a0e53b085a75c019e301879cd91f -->
## api/deleteProductType/{productTypeId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteProductType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteProductType/1"
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
`POST api/deleteProductType/{productTypeId}`


<!-- END_fbc8a0e53b085a75c019e301879cd91f -->

<!-- START_d084d2ee9f2ba137c08fb1306f398915 -->
## api/getSkinTypes
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSkinTypes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSkinTypes"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "skinTypeId": "1",
            "skinType": "All types",
            "created_at": "2020-05-10 17:37:24",
            "updated_at": "2020-05-10 17:37:24",
            "isDeletable": "1"
        },
        {
            "skinTypeId": "2",
            "skinType": "dry",
            "created_at": "2020-08-10 19:50:32",
            "updated_at": "2020-08-10 19:50:32",
            "isDeletable": "1"
        },
        {
            "skinTypeId": "3",
            "skinType": "oily",
            "created_at": "2020-08-10 19:50:40",
            "updated_at": "2020-08-10 19:50:40",
            "isDeletable": "1"
        },
        {
            "skinTypeId": "4",
            "skinType": "combination",
            "created_at": "2020-08-10 19:50:52",
            "updated_at": "2020-08-10 19:50:52",
            "isDeletable": "1"
        },
        {
            "skinTypeId": "5",
            "skinType": "normal",
            "created_at": "2020-08-10 19:51:01",
            "updated_at": "2020-08-10 19:51:01",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getSkinTypes`


<!-- END_d084d2ee9f2ba137c08fb1306f398915 -->

<!-- START_d997f8703411a760fa2b532cb301e646 -->
## api/getSkinType/{skinTypeId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSkinType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSkinType/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "skinTypeId": "1",
        "skinType": "All types",
        "created_at": "2020-05-10 17:37:24",
        "updated_at": "2020-05-10 17:37:24",
        "isDeletable": "1"
    }
}
```

### HTTP Request
`GET api/getSkinType/{skinTypeId}`


<!-- END_d997f8703411a760fa2b532cb301e646 -->

<!-- START_de81ea6630f9d9c9e098676e59171900 -->
## api/addSkinType
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addSkinType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addSkinType"
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
`POST api/addSkinType`


<!-- END_de81ea6630f9d9c9e098676e59171900 -->

<!-- START_7bef0611936961a6c69a5172858bd079 -->
## api/editSkinType
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editSkinType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editSkinType"
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
`POST api/editSkinType`


<!-- END_7bef0611936961a6c69a5172858bd079 -->

<!-- START_79520765327a3f938d3506181102757f -->
## api/deleteSkinType/{skinTypeId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteSkinType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteSkinType/1"
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
`POST api/deleteSkinType/{skinTypeId}`


<!-- END_79520765327a3f938d3506181102757f -->

<!-- START_6709cafa532330db4e3903f37b12e71c -->
## api/getApplicationAreas
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getApplicationAreas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getApplicationAreas"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "applicationAreaId": "1",
            "applicationArea": "Hair",
            "created_at": "2020-05-10 19:12:43",
            "updated_at": "2020-05-10 19:12:43",
            "isDeletable": "1"
        },
        {
            "applicationAreaId": "2",
            "applicationArea": "Skin",
            "created_at": "2020-08-10 19:53:29",
            "updated_at": "2020-08-10 19:53:29",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getApplicationAreas`


<!-- END_6709cafa532330db4e3903f37b12e71c -->

<!-- START_351c4b16a93e86bfc445126f0472eade -->
## api/getApplicationArea/{applicationAreaId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getApplicationArea/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getApplicationArea/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "applicationAreaId": "1",
        "applicationArea": "Hair",
        "created_at": "2020-05-10 19:12:43",
        "updated_at": "2020-05-10 19:12:43",
        "isDeletable": "1"
    }
}
```

### HTTP Request
`GET api/getApplicationArea/{applicationAreaId}`


<!-- END_351c4b16a93e86bfc445126f0472eade -->

<!-- START_c6ee637ecd11d1a26f116815c5ad9c92 -->
## api/addApplicationArea
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addApplicationArea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addApplicationArea"
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
`POST api/addApplicationArea`


<!-- END_c6ee637ecd11d1a26f116815c5ad9c92 -->

<!-- START_65a2c2c02c1b60cac7d4cad5c889fbf1 -->
## api/editApplicationArea
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editApplicationArea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editApplicationArea"
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
`POST api/editApplicationArea`


<!-- END_65a2c2c02c1b60cac7d4cad5c889fbf1 -->

<!-- START_d76c8d4dc378e16e84ecb53a6907ee85 -->
## api/deleteApplicationArea/{applicationAreaId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteApplicationArea/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteApplicationArea/1"
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
`POST api/deleteApplicationArea/{applicationAreaId}`


<!-- END_d76c8d4dc378e16e84ecb53a6907ee85 -->

<!-- START_4a53bdc492e019ab9445c9a2861fcb16 -->
## api/getGenders
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getGenders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getGenders"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "genderId": "1",
            "gender": "Men",
            "created_at": null,
            "updated_at": null
        },
        {
            "genderId": "2",
            "gender": "Women",
            "created_at": null,
            "updated_at": null
        },
        {
            "genderId": "3",
            "gender": "Unisex",
            "created_at": null,
            "updated_at": null
        }
    ]
}
```

### HTTP Request
`GET api/getGenders`


<!-- END_4a53bdc492e019ab9445c9a2861fcb16 -->

<!-- START_8fab0a79ddbf6b613484d0eeac35d912 -->
## api/getGender/{genderId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getGender/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getGender/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "genderId": "1",
        "gender": "Men",
        "created_at": null,
        "updated_at": null
    }
}
```

### HTTP Request
`GET api/getGender/{genderId}`


<!-- END_8fab0a79ddbf6b613484d0eeac35d912 -->

<!-- START_9463fc962c8a98b132daf3b90ab0b04f -->
## api/getFormulations
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getFormulations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getFormulations"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "formulationId": "1",
            "formulation": "Liquid",
            "created_at": "2020-05-10 19:58:07",
            "updated_at": "2020-05-10 19:58:07",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getFormulations`


<!-- END_9463fc962c8a98b132daf3b90ab0b04f -->

<!-- START_ef557895a0849affe6c58b1e98d0e567 -->
## api/getFormulation/{formulationId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getFormulation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getFormulation/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "formulationId": "1",
        "formulation": "Liquid",
        "created_at": "2020-05-10 19:58:07",
        "updated_at": "2020-05-10 19:58:07",
        "isDeletable": "1"
    }
}
```

### HTTP Request
`GET api/getFormulation/{formulationId}`


<!-- END_ef557895a0849affe6c58b1e98d0e567 -->

<!-- START_cd2f9df0d7d105d695d796ad5e5fe3ae -->
## api/addFormulation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addFormulation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addFormulation"
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
`POST api/addFormulation`


<!-- END_cd2f9df0d7d105d695d796ad5e5fe3ae -->

<!-- START_1880d24b8c6d4cdf9c1124240a7440bb -->
## api/editFormulation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editFormulation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editFormulation"
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
`POST api/editFormulation`


<!-- END_1880d24b8c6d4cdf9c1124240a7440bb -->

<!-- START_fcd03cb3e7030a2d2ddfcd19c4a7ae2f -->
## api/deleteFormulation/{formulationId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteFormulation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteFormulation/1"
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
`POST api/deleteFormulation/{formulationId}`


<!-- END_fcd03cb3e7030a2d2ddfcd19c4a7ae2f -->

<!-- START_8758baf6f9fff2ef7af2611eaac02944 -->
## api/getCategories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCategories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCategories"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getCategories`


<!-- END_8758baf6f9fff2ef7af2611eaac02944 -->

<!-- START_8b670bc0abecb85090f659413df049b0 -->
## api/getCategory/{categoryId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCategory/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCategory/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getCategory/{categoryId}`


<!-- END_8b670bc0abecb85090f659413df049b0 -->

<!-- START_870eaff7489d863da3640f0131a8ef6b -->
## api/getCategoryWithSlug/{categorySlug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCategoryWithSlug/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCategoryWithSlug/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getCategoryWithSlug/{categorySlug}`


<!-- END_870eaff7489d863da3640f0131a8ef6b -->

<!-- START_15f4a2d209193fad13960ef6a198870c -->
## api/addCategory
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addCategory" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addCategory"
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
`POST api/addCategory`


<!-- END_15f4a2d209193fad13960ef6a198870c -->

<!-- START_b83a1cc9cbe7fa396880ff341984acbf -->
## api/editCategory
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editCategory" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editCategory"
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
`POST api/editCategory`


<!-- END_b83a1cc9cbe7fa396880ff341984acbf -->

<!-- START_84768a89f29480acf0487378ac13e6c2 -->
## api/deleteCategory/{categoryId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteCategory/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteCategory/1"
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
`POST api/deleteCategory/{categoryId}`


<!-- END_84768a89f29480acf0487378ac13e6c2 -->

<!-- START_b18a409768fa07f8e6b5d6174a5a436c -->
## api/getUoms
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUoms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUoms"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "uomId": "1",
            "uom": "kg",
            "created_at": null,
            "updated_at": null,
            "isDeletable": "1"
        },
        {
            "uomId": "2",
            "uom": "pc",
            "created_at": null,
            "updated_at": null,
            "isDeletable": "1"
        },
        {
            "uomId": "3",
            "uom": "dozen",
            "created_at": "2020-04-24 15:57:27",
            "updated_at": "2020-04-24 15:57:27",
            "isDeletable": "1"
        },
        {
            "uomId": "4",
            "uom": "ltr",
            "created_at": "2020-04-24 16:47:28",
            "updated_at": "2020-04-24 16:47:28",
            "isDeletable": "1"
        },
        {
            "uomId": "5",
            "uom": "Capsules",
            "created_at": "2020-05-10 19:16:08",
            "updated_at": "2020-05-10 19:16:08",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getUoms`


<!-- END_b18a409768fa07f8e6b5d6174a5a436c -->

<!-- START_e12dd5401a35009f64d529352d81c205 -->
## api/getUom/{uomId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUom/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUom/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "uomId": "1",
        "uom": "kg",
        "created_at": null,
        "updated_at": null,
        "isDeletable": "1"
    }
}
```

### HTTP Request
`GET api/getUom/{uomId}`


<!-- END_e12dd5401a35009f64d529352d81c205 -->

<!-- START_a6b1bb9f0714a0149856ba5987f9002e -->
## api/addUom
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addUom" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addUom"
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
`POST api/addUom`


<!-- END_a6b1bb9f0714a0149856ba5987f9002e -->

<!-- START_eec04107761381a7cc60c7b1de48fd99 -->
## api/editUom
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editUom" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editUom"
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
`POST api/editUom`


<!-- END_eec04107761381a7cc60c7b1de48fd99 -->

<!-- START_031168eaaec4877ae93c61db05952e17 -->
## api/deleteUom/{uomId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteUom/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteUom/1"
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
`POST api/deleteUom/{uomId}`


<!-- END_031168eaaec4877ae93c61db05952e17 -->

<!-- START_5f7ff796afce02a72083c4add0cc30c9 -->
## api/getBrands
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBrands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBrands"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getBrands`


<!-- END_5f7ff796afce02a72083c4add0cc30c9 -->

<!-- START_3bd35a0a4098ddce231cce9d502ed3fd -->
## api/getBrand/{brandId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBrand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBrand/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getBrand/{brandId}`


<!-- END_3bd35a0a4098ddce231cce9d502ed3fd -->

<!-- START_a0d7f6c9d387babbbf7fb9b9e8dce836 -->
## api/getBrandWithSlug/{brandSlug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBrandWithSlug/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBrandWithSlug/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getBrandWithSlug/{brandSlug}`


<!-- END_a0d7f6c9d387babbbf7fb9b9e8dce836 -->

<!-- START_9bfcc16d0fb6c23f5e10e152574f96e0 -->
## api/addBrand
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addBrand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addBrand"
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
`POST api/addBrand`


<!-- END_9bfcc16d0fb6c23f5e10e152574f96e0 -->

<!-- START_dad30e90eea429ff14632b1aa8551acd -->
## api/editBrand
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editBrand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editBrand"
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
`POST api/editBrand`


<!-- END_dad30e90eea429ff14632b1aa8551acd -->

<!-- START_70f02b8c909b63993915005c36c2bc48 -->
## api/deleteBrand/{brandId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteBrand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteBrand/1"
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
`POST api/deleteBrand/{brandId}`


<!-- END_70f02b8c909b63993915005c36c2bc48 -->

<!-- START_9d2c09662b8cabbf6ef39351e319f721 -->
## api/getGiftTypes
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getGiftTypes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getGiftTypes"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "giftTypeId": "1",
            "giftType": "Gifts for Men",
            "giftTypeSlug": "gifts-for-men",
            "created_at": "2020-09-30 20:10:06",
            "updated_at": "2020-09-30 20:10:06"
        },
        {
            "giftTypeId": "2",
            "giftType": "Gifts for Women",
            "giftTypeSlug": "gifts-for-women",
            "created_at": "2020-09-30 20:44:22",
            "updated_at": "2020-09-30 20:44:22"
        },
        {
            "giftTypeId": "3",
            "giftType": "Gift for Kids",
            "giftTypeSlug": "gift-for-kids",
            "created_at": "2020-09-30 21:00:28",
            "updated_at": "2020-09-30 21:00:28"
        }
    ]
}
```

### HTTP Request
`GET api/getGiftTypes`


<!-- END_9d2c09662b8cabbf6ef39351e319f721 -->

<!-- START_0a4dc232c6dcef09cd2266a4b4bcea8a -->
## api/getGiftType/{giftTypeId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getGiftType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getGiftType/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "giftTypeId": "1",
        "giftType": "Gifts for Men",
        "giftTypeSlug": "gifts-for-men",
        "created_at": "2020-09-30 20:10:06",
        "updated_at": "2020-09-30 20:10:06"
    }
}
```

### HTTP Request
`GET api/getGiftType/{giftTypeId}`


<!-- END_0a4dc232c6dcef09cd2266a4b4bcea8a -->

<!-- START_82f10e664ceb26c436df89d6601466e5 -->
## api/addGiftType
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addGiftType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addGiftType"
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
`POST api/addGiftType`


<!-- END_82f10e664ceb26c436df89d6601466e5 -->

<!-- START_ee0cabdf0d888e5ed8ea55d8fca77587 -->
## api/editGiftType
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editGiftType" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editGiftType"
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
`POST api/editGiftType`


<!-- END_ee0cabdf0d888e5ed8ea55d8fca77587 -->

<!-- START_e8408375920384712743675a2bfb8f54 -->
## api/deleteGiftType/{giftTypeId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteGiftType/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteGiftType/1"
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
`POST api/deleteGiftType/{giftTypeId}`


<!-- END_e8408375920384712743675a2bfb8f54 -->

<!-- START_5e83e913d99cc0798dbe5179b38c8161 -->
## api/getAdvertisementSliders
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAdvertisementSliders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAdvertisementSliders"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "advertisementSliderId": "1",
            "picPath": "\/uploads\/advertisementslider\/1.png",
            "created_at": "2020-02-11 09:41:30",
            "updated_at": "2020-06-15 08:29:46"
        },
        {
            "advertisementSliderId": "2",
            "picPath": "\/uploads\/advertisementslider\/2.png",
            "created_at": "2020-02-11 09:41:30",
            "updated_at": "2020-06-15 08:29:46"
        },
        {
            "advertisementSliderId": "3",
            "picPath": "\/uploads\/advertisementslider\/3.png",
            "created_at": "2020-02-11 09:41:30",
            "updated_at": "2020-06-15 08:29:46"
        }
    ]
}
```

### HTTP Request
`GET api/getAdvertisementSliders`


<!-- END_5e83e913d99cc0798dbe5179b38c8161 -->

<!-- START_78bf2d275d7b7d1304c7e6772295e3af -->
## api/getAdvertisementSlider/{advertisementSliderId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAdvertisementSlider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAdvertisementSlider/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "advertisementSliderId": "1",
        "picPath": "\/uploads\/advertisementslider\/1.png",
        "created_at": "2020-02-11 09:41:30",
        "updated_at": "2020-06-15 08:29:46"
    }
}
```

### HTTP Request
`GET api/getAdvertisementSlider/{advertisementSliderId}`


<!-- END_78bf2d275d7b7d1304c7e6772295e3af -->

<!-- START_338b19b3e713ccc1f9205a4d247d6b18 -->
## api/addAdvertisementSlider
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addAdvertisementSlider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addAdvertisementSlider"
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
`POST api/addAdvertisementSlider`


<!-- END_338b19b3e713ccc1f9205a4d247d6b18 -->

<!-- START_62201dba8b8ec94719389d42c5bea73d -->
## api/deleteAdvertisementSlider/{advertisementSliderId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteAdvertisementSlider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteAdvertisementSlider/1"
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
`POST api/deleteAdvertisementSlider/{advertisementSliderId}`


<!-- END_62201dba8b8ec94719389d42c5bea73d -->

<!-- START_e25813400d2a781bec95e2a9948b08b3 -->
## api/getCountries
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCountries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCountries"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "countryId": "1",
            "country": "Bangladesh",
            "created_at": "2020-05-09 19:42:08",
            "updated_at": "2020-05-09 19:42:08",
            "isDeletable": "1"
        },
        {
            "countryId": "2",
            "country": "United States",
            "created_at": "2020-05-09 19:43:49",
            "updated_at": "2020-05-09 19:43:49",
            "isDeletable": "1"
        },
        {
            "countryId": "3",
            "country": "United Kingdom",
            "created_at": "2020-05-09 19:44:00",
            "updated_at": "2020-05-09 19:44:00",
            "isDeletable": "1"
        },
        {
            "countryId": "4",
            "country": "Hungary",
            "created_at": "2020-05-09 19:44:21",
            "updated_at": "2020-05-09 19:44:21",
            "isDeletable": "1"
        },
        {
            "countryId": "5",
            "country": "India",
            "created_at": "2020-05-10 16:21:53",
            "updated_at": "2020-05-10 16:21:53",
            "isDeletable": "1"
        },
        {
            "countryId": "6",
            "country": "Germany",
            "created_at": "2020-05-10 17:21:15",
            "updated_at": "2020-05-10 17:21:15",
            "isDeletable": "1"
        },
        {
            "countryId": "7",
            "country": "Italy",
            "created_at": "2020-05-10 17:21:23",
            "updated_at": "2020-05-10 17:21:23",
            "isDeletable": "1"
        },
        {
            "countryId": "8",
            "country": "Spain",
            "created_at": "2020-05-10 17:21:31",
            "updated_at": "2020-05-10 17:21:31",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getCountries`


<!-- END_e25813400d2a781bec95e2a9948b08b3 -->

<!-- START_c75b0feee56976d4cc7347eb4b5c2e82 -->
## api/getCountry/{countryId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCountry/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCountry/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "countryId": "1",
        "country": "Bangladesh",
        "created_at": "2020-05-09 19:42:08",
        "updated_at": "2020-05-09 19:42:08",
        "isDeletable": "1"
    }
}
```

### HTTP Request
`GET api/getCountry/{countryId}`


<!-- END_c75b0feee56976d4cc7347eb4b5c2e82 -->

<!-- START_30f9f48a511c27d725faab1f28600b5b -->
## api/addCountry
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addCountry" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addCountry"
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
`POST api/addCountry`


<!-- END_30f9f48a511c27d725faab1f28600b5b -->

<!-- START_86cf846a515f80333a8a7800202398ad -->
## api/editCountry
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editCountry" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editCountry"
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
`POST api/editCountry`


<!-- END_86cf846a515f80333a8a7800202398ad -->

<!-- START_04233c3466ab782d83a50fa1d28ddaf9 -->
## api/deleteCountry/{countryId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteCountry/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteCountry/1"
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
`POST api/deleteCountry/{countryId}`


<!-- END_04233c3466ab782d83a50fa1d28ddaf9 -->

<!-- START_b60ea5890b7d47276d52af812f86706f -->
## api/getSuppliers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSuppliers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSuppliers"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "supplierId": "2",
            "supplier": "Amin Traders",
            "phone": "01703188752",
            "description": "Amin Traders",
            "address": "banani",
            "email": "amin.traders@mail.com",
            "logoPath": "\/uploads\/suppliers\/logo\/supplier-2_4505716.png",
            "created_at": "2020-04-24 19:10:49",
            "updated_at": "2020-04-24 19:18:23",
            "isDeletable": "0"
        }
    ]
}
```

### HTTP Request
`GET api/getSuppliers`


<!-- END_b60ea5890b7d47276d52af812f86706f -->

<!-- START_09ae7353ff43b8c11926581f11f829e2 -->
## api/getSupplier/{supplierId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSupplier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSupplier/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getSupplier/{supplierId}`


<!-- END_09ae7353ff43b8c11926581f11f829e2 -->

<!-- START_c1338913b2d70e477b2a66d2afd7795a -->
## api/addSupplier
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addSupplier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addSupplier"
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
`POST api/addSupplier`


<!-- END_c1338913b2d70e477b2a66d2afd7795a -->

<!-- START_a4d5637c23a256be5f2139460852feeb -->
## api/editSupplier
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editSupplier" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editSupplier"
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
`POST api/editSupplier`


<!-- END_a4d5637c23a256be5f2139460852feeb -->

<!-- START_c4e4f2b11c6e38d77409f52c1ef83194 -->
## api/deleteSupplier/{supplierId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteSupplier/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteSupplier/1"
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
`POST api/deleteSupplier/{supplierId}`


<!-- END_c4e4f2b11c6e38d77409f52c1ef83194 -->

<!-- START_65fe1631e2040ef2215e8721c1504b9a -->
## api/getAreas
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAreas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAreas"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "areaId": "1",
            "area": "Dhaka Metro CIty",
            "created_at": "2020-02-11 16:00:40",
            "updated_at": "2020-02-11 16:00:40",
            "isDeletable": "0"
        },
        {
            "areaId": "14",
            "area": "Gazipur",
            "created_at": "2020-08-22 12:47:50",
            "updated_at": "2020-08-22 12:47:50",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getAreas`


<!-- END_65fe1631e2040ef2215e8721c1504b9a -->

<!-- START_feb0615d58dd1fef79b7362835a807b1 -->
## api/getArea/{areaId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getArea/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getArea/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "areaId": "1",
        "area": "Dhaka Metro CIty",
        "created_at": "2020-02-11 16:00:40",
        "updated_at": "2020-02-11 16:00:40",
        "isDeletable": "0"
    }
}
```

### HTTP Request
`GET api/getArea/{areaId}`


<!-- END_feb0615d58dd1fef79b7362835a807b1 -->

<!-- START_c91f9df7d0ca104282738767b9524a8c -->
## api/addArea
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addArea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addArea"
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
`POST api/addArea`


<!-- END_c91f9df7d0ca104282738767b9524a8c -->

<!-- START_6a2c72b4fda430a1f8967bed32c13a1a -->
## api/editArea
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editArea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editArea"
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
`POST api/editArea`


<!-- END_6a2c72b4fda430a1f8967bed32c13a1a -->

<!-- START_d89db746477e5cd317d2ae118eda7430 -->
## api/deleteArea/{areaId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteArea/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteArea/1"
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
`POST api/deleteArea/{areaId}`


<!-- END_d89db746477e5cd317d2ae118eda7430 -->

<!-- START_9c04869f5aa812b76dea19d7266f9a92 -->
## api/getBatchProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBatchProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBatchProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "batchProductId": "1",
            "productId": "1",
            "sellingPrice": "700",
            "purchasePrice": "500",
            "created_at": "2020-09-28 02:10:18",
            "updated_at": "2020-09-28 02:10:18",
            "supplierId": "2",
            "supplier": "Amin Traders",
            "batchDate": null,
            "contact": null,
            "representative": null,
            "purchaseQty": "1000",
            "isStockOut": "0",
            "manufactureDate": null,
            "expireDate": null,
            "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
            "shortDescription": null,
            "productQty": null,
            "uomId": null,
            "uom": null,
            "sku": null,
            "brandId": null,
            "brand": null
        }
    ]
}
```

### HTTP Request
`GET api/getBatchProducts`


<!-- END_9c04869f5aa812b76dea19d7266f9a92 -->

<!-- START_243ce7e2ca568b0362c633281c7ad543 -->
## api/getBatchProduct/batchProductId
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBatchProduct/batchProductId" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBatchProduct/batchProductId"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getBatchProduct/batchProductId`


<!-- END_243ce7e2ca568b0362c633281c7ad543 -->

<!-- START_3cb602359e04ad5bb67ea17c2947501b -->
## api/addBatchProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addBatchProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addBatchProduct"
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
`POST api/addBatchProduct`


<!-- END_3cb602359e04ad5bb67ea17c2947501b -->

<!-- START_282e6d93faf773afdd7dbaee6a42d0f0 -->
## api/editBatchProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editBatchProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editBatchProduct"
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
`POST api/editBatchProduct`


<!-- END_282e6d93faf773afdd7dbaee6a42d0f0 -->

<!-- START_3dd83c542be689016fb4f132e1b41c19 -->
## api/deleteBatchProduct/{batchProductId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteBatchProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteBatchProduct/1"
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
`POST api/deleteBatchProduct/{batchProductId}`


<!-- END_3dd83c542be689016fb4f132e1b41c19 -->

<!-- START_0925da43be6a80a743d391dca9bbe2ab -->
## api/getDeliverySetting
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDeliverySetting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDeliverySetting"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "deliverySettingId": "1",
        "deliverySettingPrice": "80",
        "outsideDahakeDeliveryPrice": "120",
        "updated_at": "2020-08-22 12:36:48"
    }
}
```

### HTTP Request
`GET api/getDeliverySetting`


<!-- END_0925da43be6a80a743d391dca9bbe2ab -->

<!-- START_e648cf137cacbbffe4869b6393614953 -->
## api/editDeliverySetting
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editDeliverySetting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editDeliverySetting"
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
`POST api/editDeliverySetting`


<!-- END_e648cf137cacbbffe4869b6393614953 -->

<!-- START_0c12f354e6d5aacd0ab9ca316b6955d6 -->
## api/getCarts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCarts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCarts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCarts`


<!-- END_0c12f354e6d5aacd0ab9ca316b6955d6 -->

<!-- START_0c1287c940b99c6a4019885180f4045a -->
## api/getCartDetails
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCartDetails" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCartDetails"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCartDetails`


<!-- END_0c1287c940b99c6a4019885180f4045a -->

<!-- START_d9a9de7ce6e0fe431fd58acc52aa3ab7 -->
## api/getAllReviews
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAllReviews" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAllReviews"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getAllReviews`


<!-- END_d9a9de7ce6e0fe431fd58acc52aa3ab7 -->

<!-- START_8bcf56acca6ce9d190cd6fb5d43f5589 -->
## api/getProductReviews/{productId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductReviews/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductReviews/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getProductReviews/{productId}`


<!-- END_8bcf56acca6ce9d190cd6fb5d43f5589 -->

<!-- START_7356050e9d459b031d6882f7918aeb7b -->
## api/getProductReviewsWithPaginate/{productId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductReviewsWithPaginate/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductReviewsWithPaginate/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "current_page": 1,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/getProductReviewsWithPaginate\/1?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/getProductReviewsWithPaginate\/1?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/getProductReviewsWithPaginate\/1",
        "per_page": 5,
        "prev_page_url": null,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/getProductReviewsWithPaginate/{productId}`


<!-- END_7356050e9d459b031d6882f7918aeb7b -->

<!-- START_f260f89c389ec18fcfb417fa32736109 -->
## api/addReview
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addReview" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addReview"
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
`POST api/addReview`


<!-- END_f260f89c389ec18fcfb417fa32736109 -->

<!-- START_b066bff42fccae7d7dc0c407cced4db2 -->
## api/getDiscountAlls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountAlls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountAlls"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getDiscountAlls`


<!-- END_b066bff42fccae7d7dc0c407cced4db2 -->

<!-- START_fefcc894a3a9a5d4c90b676b876d2815 -->
## api/getDiscountAll/{discountAllId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountAll/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountAll/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getDiscountAll/{discountAllId}`


<!-- END_fefcc894a3a9a5d4c90b676b876d2815 -->

<!-- START_84c0cd98db6ea8c37138e68d9b4f14f4 -->
## api/getDiscountProducts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountProducts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountProducts"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getDiscountProducts`


<!-- END_84c0cd98db6ea8c37138e68d9b4f14f4 -->

<!-- START_142c3b233787cc67788e22f59b00d802 -->
## api/getDiscountProduct/{discountProductId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountProduct/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getDiscountProduct/{discountProductId}`


<!-- END_142c3b233787cc67788e22f59b00d802 -->

<!-- START_e2451aa2f7c4b8acf3b7230d7b62e910 -->
## api/getDiscountCustomers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountCustomers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountCustomers"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getDiscountCustomers`


<!-- END_e2451aa2f7c4b8acf3b7230d7b62e910 -->

<!-- START_db6c6c9c117169b27c01ec025aa77e1f -->
## api/getDiscountCustomer/{discountCustomerId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountCustomer/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountCustomer/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getDiscountCustomer/{discountCustomerId}`


<!-- END_db6c6c9c117169b27c01ec025aa77e1f -->

<!-- START_3bbcc2759406679847a3dffa400f8475 -->
## api/getDiscountProductCustomers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountProductCustomers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountProductCustomers"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "discountProductCustomerId": "1",
            "productId": "1",
            "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
            "customerId": "15",
            "customerName": "Saifur Rahman",
            "customerEmail": "1193saifur@gmail.com",
            "qty": null,
            "uomId": null,
            "uom": null,
            "discountProductCustomerPercent": "5",
            "discountProductCustomerAmount": null,
            "discountProductCustomerExpireDate": "2020-09-30",
            "created_at": "2020-09-29 01:39:47",
            "updated_at": "2020-09-29 01:39:47"
        }
    ]
}
```

### HTTP Request
`GET api/getDiscountProductCustomers`


<!-- END_3bbcc2759406679847a3dffa400f8475 -->

<!-- START_e15df7ee1740878fbae17507775ca83b -->
## api/getDiscountProductCustomer/{discountProductCustomerId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountProductCustomer/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountProductCustomer/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "discountProductCustomerId": "1",
        "productId": "1",
        "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
        "customerId": "15",
        "customerName": "Saifur Rahman",
        "customerEmail": "1193saifur@gmail.com",
        "qty": null,
        "uomId": null,
        "uom": null,
        "discountProductCustomerPercent": "5",
        "discountProductCustomerAmount": null,
        "discountProductCustomerExpireDate": "2020-09-30",
        "created_at": "2020-09-29 01:39:47",
        "updated_at": "2020-09-29 01:39:47"
    }
}
```

### HTTP Request
`GET api/getDiscountProductCustomer/{discountProductCustomerId}`


<!-- END_e15df7ee1740878fbae17507775ca83b -->

<!-- START_3a5b1e0bb83992e7b80d84f2db5c069e -->
## api/getDiscountCalculation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/getDiscountCalculation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountCalculation"
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
`POST api/getDiscountCalculation`


<!-- END_3a5b1e0bb83992e7b80d84f2db5c069e -->

<!-- START_06209cb9855b76908df4675ec55a919c -->
## api/getProductsWithDiscountCalculation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/getProductsWithDiscountCalculation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductsWithDiscountCalculation"
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
`POST api/getProductsWithDiscountCalculation`


<!-- END_06209cb9855b76908df4675ec55a919c -->

<!-- START_cb90d4247ae52cc81d54c2fc3772b303 -->
## api/addDiscountAll
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addDiscountAll" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addDiscountAll"
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
`POST api/addDiscountAll`


<!-- END_cb90d4247ae52cc81d54c2fc3772b303 -->

<!-- START_6fb137bc0c636e072e01f27a98673ec5 -->
## api/editDiscountAll
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editDiscountAll" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editDiscountAll"
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
`POST api/editDiscountAll`


<!-- END_6fb137bc0c636e072e01f27a98673ec5 -->

<!-- START_eb32319877be65f47065a70a6fe97fd6 -->
## api/deleteDiscountAll/{discountAllId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountAll/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountAll/1"
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
`POST api/deleteDiscountAll/{discountAllId}`


<!-- END_eb32319877be65f47065a70a6fe97fd6 -->

<!-- START_27be298bdee31a0d10dd97a8e0aed13d -->
## api/addDiscountProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addDiscountProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addDiscountProduct"
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
`POST api/addDiscountProduct`


<!-- END_27be298bdee31a0d10dd97a8e0aed13d -->

<!-- START_9514c2c8588f6131d0d84998dd2e9e5d -->
## api/editDiscountProduct
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editDiscountProduct" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editDiscountProduct"
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
`POST api/editDiscountProduct`


<!-- END_9514c2c8588f6131d0d84998dd2e9e5d -->

<!-- START_093c5bd97b06b782324b87b4f44e7ab8 -->
## api/deleteDiscountProduct/{discountProductId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountProduct/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountProduct/1"
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
`POST api/deleteDiscountProduct/{discountProductId}`


<!-- END_093c5bd97b06b782324b87b4f44e7ab8 -->

<!-- START_6465ac03477f48acfe8749944f0e091c -->
## api/addDiscountCustomer
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addDiscountCustomer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addDiscountCustomer"
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
`POST api/addDiscountCustomer`


<!-- END_6465ac03477f48acfe8749944f0e091c -->

<!-- START_a2f3ed93da922b2b9f732e781a1d8698 -->
## api/editDiscountCustomer
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editDiscountCustomer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editDiscountCustomer"
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
`POST api/editDiscountCustomer`


<!-- END_a2f3ed93da922b2b9f732e781a1d8698 -->

<!-- START_4d1e6ef27c0a82de150c0098c7ba7493 -->
## api/deleteDiscountCustomer/{discountCustomerId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountCustomer/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountCustomer/1"
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
`POST api/deleteDiscountCustomer/{discountCustomerId}`


<!-- END_4d1e6ef27c0a82de150c0098c7ba7493 -->

<!-- START_bc3ebcd253670da52f4e8281e5a9172b -->
## api/addDiscountProductCustomer
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addDiscountProductCustomer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addDiscountProductCustomer"
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
`POST api/addDiscountProductCustomer`


<!-- END_bc3ebcd253670da52f4e8281e5a9172b -->

<!-- START_21f0fa30e803f1e8624ee3d16cd580f7 -->
## api/editDiscountProductCustomer
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editDiscountProductCustomer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editDiscountProductCustomer"
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
`POST api/editDiscountProductCustomer`


<!-- END_21f0fa30e803f1e8624ee3d16cd580f7 -->

<!-- START_d9ff2b5f1ae5f14b3f4fb9dbfd9829e4 -->
## api/deleteDiscountProductCustomer/{discountProductCustomerId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountProductCustomer/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountProductCustomer/1"
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
`POST api/deleteDiscountProductCustomer/{discountProductCustomerId}`


<!-- END_d9ff2b5f1ae5f14b3f4fb9dbfd9829e4 -->

<!-- START_980d9b5cf660d0877af5d32ec53885e4 -->
## api/getPaymentMethods
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPaymentMethods" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPaymentMethods"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "paymentMethodId": "1",
            "paymentMethod": "Rocket",
            "accountNumber": null,
            "accountType": null,
            "option": null,
            "instruction": null,
            "isVisible": "0",
            "qrCode": null,
            "created_at": "2020-08-09 13:52:23",
            "updated_at": "2020-08-09 13:52:23",
            "isDeletable": "1"
        },
        {
            "paymentMethodId": "2",
            "paymentMethod": "bKash Transaction Id Method",
            "accountNumber": "01703188752",
            "accountType": "Merchant Payment",
            "option": "Payment (Not send money)",
            "instruction": "Please select 'Payment' option and enter the Transaction Id or Tax Id provided to you by bkash after your payment.",
            "isVisible": "1",
            "qrCode": "\/uploads\/paymentmethods\/qrCode\/paymentmethodid-2_8987822.png",
            "created_at": "2020-08-09 13:53:23",
            "updated_at": "2020-09-17 18:31:09",
            "isDeletable": "1"
        },
        {
            "paymentMethodId": "3",
            "paymentMethod": "Cash on delivery",
            "accountNumber": null,
            "accountType": null,
            "option": null,
            "instruction": null,
            "isVisible": "1",
            "qrCode": null,
            "created_at": "2020-08-09 14:55:16",
            "updated_at": "2020-09-17 01:48:09",
            "isDeletable": "1"
        },
        {
            "paymentMethodId": "4",
            "paymentMethod": "Nagad",
            "accountNumber": null,
            "accountType": null,
            "option": null,
            "instruction": null,
            "isVisible": "0",
            "qrCode": null,
            "created_at": "2020-08-09 15:08:49",
            "updated_at": "2020-08-09 15:08:49",
            "isDeletable": "1"
        }
    ]
}
```

### HTTP Request
`GET api/getPaymentMethods`


<!-- END_980d9b5cf660d0877af5d32ec53885e4 -->

<!-- START_6063058dd82ed16aea0731a87590b7a2 -->
## api/getPaymentMethod/{paymentMethodId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPaymentMethod/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPaymentMethod/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "paymentMethodId": "1",
        "paymentMethod": "Rocket",
        "accountNumber": null,
        "accountType": null,
        "option": null,
        "instruction": null,
        "isVisible": "0",
        "qrCode": null,
        "created_at": "2020-08-09 13:52:23",
        "updated_at": "2020-08-09 13:52:23",
        "isDeletable": "1"
    }
}
```

### HTTP Request
`GET api/getPaymentMethod/{paymentMethodId}`


<!-- END_6063058dd82ed16aea0731a87590b7a2 -->

<!-- START_8c0af903221edb1ac82c168abd4caa5b -->
## api/addPaymentMethod
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addPaymentMethod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addPaymentMethod"
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
`POST api/addPaymentMethod`


<!-- END_8c0af903221edb1ac82c168abd4caa5b -->

<!-- START_54355c0363556e620910769e735a97ff -->
## api/editPaymentMethod
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editPaymentMethod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editPaymentMethod"
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
`POST api/editPaymentMethod`


<!-- END_54355c0363556e620910769e735a97ff -->

<!-- START_7eb2fc73b6d91c1f069e73d10a61c17f -->
## api/deletePaymentMethod/{paymentMethodId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deletePaymentMethod/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deletePaymentMethod/1"
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
`POST api/deletePaymentMethod/{paymentMethodId}`


<!-- END_7eb2fc73b6d91c1f069e73d10a61c17f -->

<!-- START_2fd23a5083577366a3fd33eff580222f -->
## api/getTransaction/{transactionId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getTransaction/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getTransaction/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getTransaction/{transactionId}`


<!-- END_2fd23a5083577366a3fd33eff580222f -->

<!-- START_ac096fef7f438761402da7ddb961d100 -->
## api/getTransactions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getTransactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getTransactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getTransactions`


<!-- END_ac096fef7f438761402da7ddb961d100 -->

<!-- START_cd6cce8d3abe575eac9939793894edce -->
## api/addTransaction
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addTransaction" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addTransaction"
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
`POST api/addTransaction`


<!-- END_cd6cce8d3abe575eac9939793894edce -->

<!-- START_2c099a91e5031abc0bf54dc81f51e0e9 -->
## api/editTransaction
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editTransaction" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editTransaction"
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
`POST api/editTransaction`


<!-- END_2c099a91e5031abc0bf54dc81f51e0e9 -->

<!-- START_2c3270190a168640d06eb76dfe93963a -->
## api/deleteTransaction/{transactionId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteTransaction/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteTransaction/1"
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
`POST api/deleteTransaction/{transactionId}`


<!-- END_2c3270190a168640d06eb76dfe93963a -->

<!-- START_eac567cd508e771860c080d6e0ee5bc0 -->
## api/addProductVisit
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addProductVisit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addProductVisit"
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
`POST api/addProductVisit`


<!-- END_eac567cd508e771860c080d6e0ee5bc0 -->

<!-- START_81115c100a90db8457c5e2dc155be4d1 -->
## api/addWishlistall
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addWishlistall" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addWishlistall"
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
`POST api/addWishlistall`


<!-- END_81115c100a90db8457c5e2dc155be4d1 -->

<!-- START_583fb324f88e8de0d31a9ed89eb36531 -->
## api/addComparelist
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addComparelist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addComparelist"
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
`POST api/addComparelist`


<!-- END_583fb324f88e8de0d31a9ed89eb36531 -->

<!-- START_dd88c2fc67078b3458609e72a3992d60 -->
## api/getProductVisits
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductVisits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductVisits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getProductVisits`


<!-- END_dd88c2fc67078b3458609e72a3992d60 -->

<!-- START_739a4ad682d514322a188daede4459c0 -->
## api/getCurrentUserProductVisits
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserProductVisits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserProductVisits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCurrentUserProductVisits`


<!-- END_739a4ad682d514322a188daede4459c0 -->

<!-- START_240fe911aea6b31fe973795c0095bd3d -->
## api/getYearlyProductVisitsReport/{productId?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getYearlyProductVisitsReport/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getYearlyProductVisitsReport/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getYearlyProductVisitsReport/{productId?}`


<!-- END_240fe911aea6b31fe973795c0095bd3d -->

<!-- START_f242fcb43029ef2cdaa84d7ba7f87ffc -->
## api/getPorductVisitsYears/{productId?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPorductVisitsYears/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPorductVisitsYears/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getPorductVisitsYears/{productId?}`


<!-- END_f242fcb43029ef2cdaa84d7ba7f87ffc -->

<!-- START_20932218e3e79fab9a38c568defda045 -->
## api/getMonthlyProductVisitsReport/{year}/{productId?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getMonthlyProductVisitsReport/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getMonthlyProductVisitsReport/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getMonthlyProductVisitsReport/{year}/{productId?}`


<!-- END_20932218e3e79fab9a38c568defda045 -->

<!-- START_c65c60518db6221e0db0a4ac3800f025 -->
## api/getProductVisitsMonths/{year}/{productId?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductVisitsMonths/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductVisitsMonths/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getProductVisitsMonths/{year}/{productId?}`


<!-- END_c65c60518db6221e0db0a4ac3800f025 -->

<!-- START_e8f7a773ed0971127e2adf67163fc5ba -->
## api/getDailyProductVisitsReport/{year}/{monthNumber}/{productId?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDailyProductVisitsReport/1/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDailyProductVisitsReport/1/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getDailyProductVisitsReport/{year}/{monthNumber}/{productId?}`


<!-- END_e8f7a773ed0971127e2adf67163fc5ba -->

<!-- START_f66224a5cfe690e25a86be9742013513 -->
## api/getWishlistall
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getWishlistall" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getWishlistall"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getWishlistall`


<!-- END_f66224a5cfe690e25a86be9742013513 -->

<!-- START_45f0496920e2a5864c2000c33fce309e -->
## api/getComparelist
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getComparelist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getComparelist"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getComparelist`


<!-- END_45f0496920e2a5864c2000c33fce309e -->

<!-- START_7bde2d4d7bf711425c299ff3da7f7e4d -->
## api/getMonthlySalesReport
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getMonthlySalesReport" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getMonthlySalesReport"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getMonthlySalesReport`


<!-- END_7bde2d4d7bf711425c299ff3da7f7e4d -->

<!-- START_bbda2b11fe17499070af10827cde46ca -->
## api/getMonthlySalesReport/{year}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getMonthlySalesReport/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getMonthlySalesReport/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getMonthlySalesReport/{year}`


<!-- END_bbda2b11fe17499070af10827cde46ca -->

<!-- START_e1a41b62b7164fa0799757952e2a6f9a -->
## api/getCartYears
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCartYears" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCartYears"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCartYears`


<!-- END_e1a41b62b7164fa0799757952e2a6f9a -->

<!-- START_edf1c24668b85398cbfddc41e329f5cb -->
## api/getYearlySalesReport
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getYearlySalesReport" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getYearlySalesReport"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getYearlySalesReport`


<!-- END_edf1c24668b85398cbfddc41e329f5cb -->

<!-- START_f522efc1302160b35494cabd59c02046 -->
## api/getCartMonths/{year}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCartMonths/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCartMonths/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCartMonths/{year}`


<!-- END_f522efc1302160b35494cabd59c02046 -->

<!-- START_ea4e8633a4147fce9a9b733b61022a20 -->
## api/getDailySalesReport/{year}/{monthNumber}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDailySalesReport/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDailySalesReport/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getDailySalesReport/{year}/{monthNumber}`


<!-- END_ea4e8633a4147fce9a9b733b61022a20 -->

<!-- START_710cdd0518db3e09d8a41be17f2bff6f -->
## api/getService/{serviceId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getService/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getService/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getService/{serviceId}`


<!-- END_710cdd0518db3e09d8a41be17f2bff6f -->

<!-- START_cecd2a25becd050f6b4248411338af3c -->
## api/getServices
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getServices" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getServices"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getServices`


<!-- END_cecd2a25becd050f6b4248411338af3c -->

<!-- START_e5a65ab56a9886615b0d035f60db6dfc -->
## api/getSubServices/{serviceId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSubServices/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSubServices/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getSubServices/{serviceId}`


<!-- END_e5a65ab56a9886615b0d035f60db6dfc -->

<!-- START_ebd3983afc9e4bf5a438dd0078a30abd -->
## api/getSubService/{subServiceId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSubService/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSubService/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getSubService/{subServiceId}`


<!-- END_ebd3983afc9e4bf5a438dd0078a30abd -->

<!-- START_5416903eac3432673c6ef706f2b1de87 -->
## api/getPackages/{subServiceId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPackages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPackages/1"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getPackages/{subServiceId}`


<!-- END_5416903eac3432673c6ef706f2b1de87 -->

<!-- START_9b5239c385302327739a74b5540e1442 -->
## api/getCompanyInfo
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCompanyInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCompanyInfo"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "companyId": "1",
        "name": "BellasRouge",
        "address": "bashundhara",
        "phone": "01515635072",
        "email": "info@bellasrouge.com",
        "facebookIconClass": "fab fa-facebook",
        "facebookLink": "https:\/\/www.facebook.com\/BellasRouge\/",
        "linkedinIconClass": "fab fa-linkedin",
        "linkedinLink": "https:\/\/www.linkedin.com\/",
        "googlePlusIconClass": "fab fa-google-plus",
        "googlePlusLink": "http:\/\/www.plus.google.com",
        "instagramIconClass": "fab fa-instagram",
        "instagramLink": "https:\/\/www.instagram.com\/",
        "twitterIconClass": "fab fa-twitter",
        "twitterLink": "https:\/\/twitter.com\/?lang=en",
        "logoPath": "\/uploads\/company\/logo\/company_logo.png",
        "about": "It's the easiest way to hire verified and professional serviceman for all household services, electronics & appliance repair, car rent and shifting services.",
        "aboutPicPath": "\/uploads\/company\/about\/company_about.png",
        "mailSenderEmail": "info@bellasrouge.com",
        "mailSenderName": "BellasRouge",
        "created_at": "2020-02-11 09:16:08",
        "updated_at": "2020-07-08 05:46:12",
        "website": "https:\/\/bellasrouge.com\/",
        "contactMails": "1193saifur@gmail.com, saifuroracle@gmail.com",
        "numberTitle": "Phone:",
        "number": "01703-188-752",
        "topSystemQuote": "Buy 100% Original Beauty Products & Cosmetics Online"
    }
}
```

### HTTP Request
`GET api/getCompanyInfo`


<!-- END_9b5239c385302327739a74b5540e1442 -->

<!-- START_8408b3f1da0cd148ca926c1752042cb2 -->
## api/updateCompanyInfo
> Example request:

```bash
curl -X POST \
    "http://localhost/api/updateCompanyInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/updateCompanyInfo"
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
`POST api/updateCompanyInfo`


<!-- END_8408b3f1da0cd148ca926c1752042cb2 -->

<!-- START_287a07a94f4331c8bf3b308536e44b2d -->
## api/getSearchProducts/{searchInput}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSearchProducts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchProducts/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "productId": "1",
            "productName": "HUGO BOSS XY EDT 100ML FOR MEN",
            "description": null,
            "created_at": "2020-09-21 12:28:30",
            "updated_at": "2020-09-21 12:28:30",
            "shortDescription": null,
            "uomId": null,
            "sku": null,
            "uom": null,
            "qty": null,
            "brandId": null,
            "brand": null,
            "brandSlug": null,
            "countryId": null,
            "country": null,
            "formulationId": null,
            "formulation": null,
            "productTypeId": null,
            "productType": null,
            "skinTypeId": null,
            "skinType": null,
            "genderId": null,
            "gender": null,
            "applicationAreaId": null,
            "applicationArea": null,
            "searchTags": null,
            "productPicturePath": "\/uploads\/products\/product-1_5381675.png",
            "sellingPrice": "700",
            "batchProductId": "1",
            "categories": null,
            "categorySlugs": null,
            "isNewArrival": "0",
            "isLimitedEdition": "0",
            "purchaseQty": "1000",
            "sellingQty": "26",
            "inStockQty": "974",
            "outOfStock": "0",
            "rating": null
        }
    ]
}
```

### HTTP Request
`GET api/getSearchProducts/{searchInput}`


<!-- END_287a07a94f4331c8bf3b308536e44b2d -->

<!-- START_b174029e5fd24504c14209ebe7467d7b -->
## api/getSearchProductsWithDiscountCalculation/{searchInput}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/getSearchProductsWithDiscountCalculation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchProductsWithDiscountCalculation/1"
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
`POST api/getSearchProductsWithDiscountCalculation/{searchInput}`


<!-- END_b174029e5fd24504c14209ebe7467d7b -->

<!-- START_5862279361e19fb2cb4672027fa80736 -->
## api/getSearchCategoryProducts/{category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSearchCategoryProducts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchCategoryProducts/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": []
}
```

### HTTP Request
`GET api/getSearchCategoryProducts/{category}`


<!-- END_5862279361e19fb2cb4672027fa80736 -->

<!-- START_7d9e20dfcd5ab5ef58a1902c3fc576d9 -->
## api/getSearchCategoryProductsWithDiscountCalculation/{category}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/getSearchCategoryProductsWithDiscountCalculation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchCategoryProductsWithDiscountCalculation/1"
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
`POST api/getSearchCategoryProductsWithDiscountCalculation/{category}`


<!-- END_7d9e20dfcd5ab5ef58a1902c3fc576d9 -->

<!-- START_93cfa114d75deb1b5ab4bd57b5a21d70 -->
## api/getCurrentUserWishLists
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserWishLists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserWishLists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCurrentUserWishLists`


<!-- END_93cfa114d75deb1b5ab4bd57b5a21d70 -->

<!-- START_916bb74d1daaacc43d0c9e855ca0d34e -->
## api/addCurrentUserProductToWishlist/{productId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/addCurrentUserProductToWishlist/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addCurrentUserProductToWishlist/1"
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
`POST api/addCurrentUserProductToWishlist/{productId}`


<!-- END_916bb74d1daaacc43d0c9e855ca0d34e -->

<!-- START_06097f7329c2ba4c3f0660ca8802e1d0 -->
## api/removeCurrentUserProductFromWishlist/{productId}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/removeCurrentUserProductFromWishlist/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/removeCurrentUserProductFromWishlist/1"
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
`POST api/removeCurrentUserProductFromWishlist/{productId}`


<!-- END_06097f7329c2ba4c3f0660ca8802e1d0 -->

<!-- START_4c198a7936235d1f0d4993574f5bdeae -->
## api/confirmOrder
> Example request:

```bash
curl -X POST \
    "http://localhost/api/confirmOrder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/confirmOrder"
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
`POST api/confirmOrder`


<!-- END_4c198a7936235d1f0d4993574f5bdeae -->

<!-- START_cce8aaa15c0a097e69da9390271810f7 -->
## api/getCurrentUserCarts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserCarts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserCarts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCurrentUserCarts`


<!-- END_cce8aaa15c0a097e69da9390271810f7 -->

<!-- START_ec8d9d93d9cf3229e6492b6d7322501b -->
## api/getCurrentUserCart/{cartId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserCart/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserCart/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCurrentUserCart/{cartId}`


<!-- END_ec8d9d93d9cf3229e6492b6d7322501b -->

<!-- START_4139425bd414739779adbb7e31393d53 -->
## api/getCurrentUserCartDetails
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserCartDetails" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserCartDetails"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/getCurrentUserCartDetails`


<!-- END_4139425bd414739779adbb7e31393d53 -->

<!-- START_1ce629c2a3c9c03bac5f14dcfe292b4e -->
## api/cusotomerGivingCartRating
> Example request:

```bash
curl -X POST \
    "http://localhost/api/cusotomerGivingCartRating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cusotomerGivingCartRating"
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
`POST api/cusotomerGivingCartRating`


<!-- END_1ce629c2a3c9c03bac5f14dcfe292b4e -->

<!-- START_30113367f27245685c813d4938538848 -->
## api/cartUpdate
> Example request:

```bash
curl -X POST \
    "http://localhost/api/cartUpdate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cartUpdate"
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
`POST api/cartUpdate`


<!-- END_30113367f27245685c813d4938538848 -->

<!-- START_a9574d9fafbf3d57a21b9ed8fbc230c2 -->
## api/getPages
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPages"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": [
        {
            "pageId": "1",
            "pageTitle": "About Us",
            "pageDesc": "<ul><li><p>description<\/p><\/li><li><p>description<\/p><\/li><li><p>description<\/p><\/li><li><p>description<\/p><\/li><li><p>description<br><\/p><p><br><\/p><\/li><\/ul>",
            "pageSlug": "about-us",
            "created_at": null,
            "updated_at": null
        },
        {
            "pageId": "2",
            "pageTitle": "Branches",
            "pageDesc": "<p>branch description<\/p>",
            "pageSlug": "branches",
            "created_at": null,
            "updated_at": null
        },
        {
            "pageId": "3",
            "pageTitle": "Order Procedures",
            "pageDesc": null,
            "pageSlug": "ourprocedures",
            "created_at": null,
            "updated_at": null
        },
        {
            "pageId": "4",
            "pageTitle": "Payment Method",
            "pageDesc": null,
            "pageSlug": "paymentmethod",
            "created_at": null,
            "updated_at": null
        },
        {
            "pageId": "5",
            "pageTitle": "Terms & Conditions",
            "pageDesc": null,
            "pageSlug": "termsandconditions",
            "created_at": null,
            "updated_at": null
        },
        {
            "pageId": "6",
            "pageTitle": "Privacy Policy",
            "pageDesc": null,
            "pageSlug": "privacypolicy",
            "created_at": null,
            "updated_at": null
        }
    ]
}
```

### HTTP Request
`GET api/getPages`


<!-- END_a9574d9fafbf3d57a21b9ed8fbc230c2 -->

<!-- START_5160cb37147be194ceedb41f31b303a3 -->
## api/getPage/{pageId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPage/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPage/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "pageId": "1",
        "pageTitle": "About Us",
        "pageDesc": "<ul><li><p>description<\/p><\/li><li><p>description<\/p><\/li><li><p>description<\/p><\/li><li><p>description<\/p><\/li><li><p>description<br><\/p><p><br><\/p><\/li><\/ul>",
        "pageSlug": "about-us",
        "created_at": null,
        "updated_at": null
    }
}
```

### HTTP Request
`GET api/getPage/{pageId}`


<!-- END_5160cb37147be194ceedb41f31b303a3 -->

<!-- START_b164fb374cb517d1aac1c2b3637ce833 -->
## api/getPageWithSlug/{pageSlug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPageWithSlug/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPageWithSlug/1"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": null
}
```

### HTTP Request
`GET api/getPageWithSlug/{pageSlug}`


<!-- END_b164fb374cb517d1aac1c2b3637ce833 -->

<!-- START_5ac4110e6c53d0b0c4b58ab087f8785b -->
## api/editPage
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editPage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editPage"
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
`POST api/editPage`


<!-- END_5ac4110e6c53d0b0c4b58ab087f8785b -->

<!-- START_0f57d6d424f7809eec4dacbc28461312 -->
## api/getSeoDefault
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSeoDefault" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSeoDefault"
);

let headers = {
    "Content-Type": "application/json",
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
{
    "status": "Success",
    "data": {
        "seodefaultId": "1",
        "meta_title": "Bella's Rouge",
        "meta_keywords": "bella rouge, ecommerce",
        "meta_description": "This is online best cosmetics shop in bd.",
        "created_at": null,
        "update_at": null,
        "meta_author": "Md. Saifur Rahman"
    }
}
```

### HTTP Request
`GET api/getSeoDefault`


<!-- END_0f57d6d424f7809eec4dacbc28461312 -->

<!-- START_29ee629e18f016589681b0df75821e59 -->
## api/editSeoDefault
> Example request:

```bash
curl -X POST \
    "http://localhost/api/editSeoDefault" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/editSeoDefault"
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
`POST api/editSeoDefault`


<!-- END_29ee629e18f016589681b0df75821e59 -->

<!-- START_699f5a698d1d5de6e9ea2740de71611f -->
## api/printInvoice/{cartId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/printInvoice/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/printInvoice/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/printInvoice/{cartId}`


<!-- END_699f5a698d1d5de6e9ea2740de71611f -->

<!-- START_147686418efe0e4b991c18a3cab2e414 -->
## api/getImage
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getImage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getImage"
);

let headers = {
    "Content-Type": "application/json",
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
`GET api/getImage`


<!-- END_147686418efe0e4b991c18a3cab2e414 -->

<!-- START_d2a6eae62224e78780ca1277a19e3790 -->
## notes
> Example request:

```bash
curl -X GET \
    -G "http://localhost/notes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/notes"
);

let headers = {
    "Content-Type": "application/json",
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
`GET notes`


<!-- END_d2a6eae62224e78780ca1277a19e3790 -->

<!-- START_d57867d683933ef07fd9ea8a130501e1 -->
## webLogout
> Example request:

```bash
curl -X GET \
    -G "http://localhost/webLogout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/webLogout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET webLogout`


<!-- END_d57867d683933ef07fd9ea8a130501e1 -->

<!-- START_31d1239caa165154c98172998eb2464e -->
## getServices
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getServices" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/getServices"
);

let headers = {
    "Content-Type": "application/json",
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
`GET getServices`


<!-- END_31d1239caa165154c98172998eb2464e -->


