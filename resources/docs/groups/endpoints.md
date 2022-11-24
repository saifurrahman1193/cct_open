# Endpoints


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

### Request
<small class="badge badge-green">GET</small>
 **`_debugbar/open`**



## Return Clockwork output




> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/clockwork/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/clockwork/{id}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`_debugbar/clockwork/{id}`**



## _debugbar/telescope/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/telescope/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/telescope/{id}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`_debugbar/telescope/{id}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`_debugbar/assets/stylesheets`**



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

### Request
<small class="badge badge-green">GET</small>
 **`_debugbar/assets/javascript`**



## Forget a cache key




> Example request:

```bash
curl -X DELETE \
    "http://localhost/_debugbar/cache/{key}/{tags?}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/cache/{key}/{tags?}"
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



### Request
<small class="badge badge-red">DELETE</small>
 **`_debugbar/cache/{key}/{tags?}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/broadcasting/auth`**

<small class="badge badge-black">POST</small>
 **`api/broadcasting/auth`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/auth/logout`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/auth/refresh`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/auth/me`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/auth/meAdmin`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/auth/payload`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/auth/changePassword`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getUsers`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getUsersWithRoles`**



## api/getUser/{userId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUser/{userId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUser/{userId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getUser/{userId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addUser`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editUser`**



## api/deleteUser/{userId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteUser/{userId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteUser/{userId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteUser/{userId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getRoles`**



## api/getRole/{roleId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRole/{roleId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRole/{roleId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getRole/{roleId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addRole`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editRole`**



## api/deleteRole/{roleId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteRole/{roleId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteRole/{roleId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteRole/{roleId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getModules`**



## api/getModule/{moduleId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getModule/{moduleId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getModule/{moduleId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getModule/{moduleId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getRoleModules`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/storageBackup`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/storageBackupDelete`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/serverDBBackup`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getContacts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getAdminContacts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getMessages`**



## api/getAContactMessages/{userId1}/{userId2}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAContactMessages/{userId1}/{userId2}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAContactMessages/{userId1}/{userId2}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getAContactMessages/{userId1}/{userId2}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/sendMessage`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/profileUpdate`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addService`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editService`**



## api/deleteService/{serviceId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteService/{serviceId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteService/{serviceId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteService/{serviceId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDeliveryAddresses`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCurrentUserDeliveryAddresses`**



## api/getDeliveryAddress/{deliveryAddressId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDeliveryAddress/{deliveryAddressId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDeliveryAddress/{deliveryAddressId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getDeliveryAddress/{deliveryAddressId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addCurrentUserDeliveryAddress`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editDeliveryAddress`**



## api/deleteDeliveryAddress/{deliveryAddressId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDeliveryAddress/{deliveryAddressId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDeliveryAddress/{deliveryAddressId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteDeliveryAddress/{deliveryAddressId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProducts`**



## api/getRandomProducts/{numberOfProductReturn}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getRandomProducts/{numberOfProductReturn}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getRandomProducts/{numberOfProductReturn}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getRandomProducts/{numberOfProductReturn}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getRelatedProducts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductPictures`**



## api/getProduct/{productId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProduct/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProduct/{productId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProduct/{productId}`**



## api/getProductAllData/{productId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductAllData/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductAllData/{productId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductAllData/{productId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getFeaturedProducts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getLimitedEditions`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getNewArrivals`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductCategories`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getLatestProducts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getBestsellingProducts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getTopratedProducts`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addProduct`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addProductPicture`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editProduct`**



## api/deleteProduct/{productId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteProduct/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteProduct/{productId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteProduct/{productId}`**



## api/deleteProductPicture/{productPictureId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteProductPicture/{productPictureId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteProductPicture/{productPictureId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteProductPicture/{productPictureId}`**



## api/setProductPictureDefault/{productPictureId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/setProductPictureDefault/{productPictureId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/setProductPictureDefault/{productPictureId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/setProductPictureDefault/{productPictureId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addFeaturedProduct`**



## api/deleteFeaturedProduct/{featuredProductId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteFeaturedProduct/{featuredProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteFeaturedProduct/{featuredProductId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteFeaturedProduct/{featuredProductId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addLatestProduct`**



## api/deleteLatestProduct/{latestProductId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteLatestProduct/{latestProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteLatestProduct/{latestProductId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteLatestProduct/{latestProductId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addBestsellingProduct`**



## api/deleteBestsellingProduct/{bestsellingProductId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteBestsellingProduct/{bestsellingProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteBestsellingProduct/{bestsellingProductId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteBestsellingProduct/{bestsellingProductId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addTopratedProduct`**



## api/deleteTopratedProduct/{topratedProductId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteTopratedProduct/{topratedProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteTopratedProduct/{topratedProductId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteTopratedProduct/{topratedProductId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addLimitedEdition`**



## api/deleteLimitedEdition/{limitedEditionId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteLimitedEdition/{limitedEditionId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteLimitedEdition/{limitedEditionId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteLimitedEdition/{limitedEditionId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addNewArrival`**



## api/deleteNewArrival/{newArrivalId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteNewArrival/{newArrivalId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteNewArrival/{newArrivalId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteNewArrival/{newArrivalId}`**



## api/verifiedReviewer/{productId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/verifiedReviewer/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/verifiedReviewer/{productId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/verifiedReviewer/{productId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductTypes`**



## api/getProductType/{productTypeId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductType/{productTypeId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductType/{productTypeId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductType/{productTypeId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addProductType`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editProductType`**



## api/deleteProductType/{productTypeId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteProductType/{productTypeId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteProductType/{productTypeId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteProductType/{productTypeId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSkinTypes`**



## api/getSkinType/{skinTypeId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSkinType/{skinTypeId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSkinType/{skinTypeId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSkinType/{skinTypeId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addSkinType`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editSkinType`**



## api/deleteSkinType/{skinTypeId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteSkinType/{skinTypeId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteSkinType/{skinTypeId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteSkinType/{skinTypeId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getApplicationAreas`**



## api/getApplicationArea/{applicationAreaId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getApplicationArea/{applicationAreaId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getApplicationArea/{applicationAreaId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getApplicationArea/{applicationAreaId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addApplicationArea`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editApplicationArea`**



## api/deleteApplicationArea/{applicationAreaId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteApplicationArea/{applicationAreaId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteApplicationArea/{applicationAreaId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteApplicationArea/{applicationAreaId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getGenders`**



## api/getGender/{genderId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getGender/{genderId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getGender/{genderId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getGender/{genderId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getFormulations`**



## api/getFormulation/{formulationId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getFormulation/{formulationId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getFormulation/{formulationId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getFormulation/{formulationId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addFormulation`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editFormulation`**



## api/deleteFormulation/{formulationId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteFormulation/{formulationId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteFormulation/{formulationId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteFormulation/{formulationId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCategories`**



## api/getCategory/{categoryId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCategory/{categoryId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCategory/{categoryId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCategory/{categoryId}`**



## api/getCategoryWithSlug/{categorySlug}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCategoryWithSlug/{categorySlug}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCategoryWithSlug/{categorySlug}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCategoryWithSlug/{categorySlug}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addCategory`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editCategory`**



## api/deleteCategory/{categoryId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteCategory/{categoryId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteCategory/{categoryId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteCategory/{categoryId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getUoms`**



## api/getUom/{uomId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getUom/{uomId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getUom/{uomId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getUom/{uomId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addUom`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editUom`**



## api/deleteUom/{uomId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteUom/{uomId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteUom/{uomId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteUom/{uomId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getBrands`**



## api/getBrand/{brandId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBrand/{brandId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBrand/{brandId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getBrand/{brandId}`**



## api/getBrandWithSlug/{brandSlug}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getBrandWithSlug/{brandSlug}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getBrandWithSlug/{brandSlug}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getBrandWithSlug/{brandSlug}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addBrand`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editBrand`**



## api/deleteBrand/{brandId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteBrand/{brandId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteBrand/{brandId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteBrand/{brandId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getGiftTypes`**



## api/getGiftType/{giftTypeId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getGiftType/{giftTypeId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getGiftType/{giftTypeId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getGiftType/{giftTypeId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addGiftType`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editGiftType`**



## api/deleteGiftType/{giftTypeId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteGiftType/{giftTypeId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteGiftType/{giftTypeId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteGiftType/{giftTypeId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getAdvertisementSliders`**



## api/getAdvertisementSlider/{advertisementSliderId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getAdvertisementSlider/{advertisementSliderId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getAdvertisementSlider/{advertisementSliderId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getAdvertisementSlider/{advertisementSliderId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addAdvertisementSlider`**



## api/deleteAdvertisementSlider/{advertisementSliderId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteAdvertisementSlider/{advertisementSliderId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteAdvertisementSlider/{advertisementSliderId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteAdvertisementSlider/{advertisementSliderId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCountries`**



## api/getCountry/{countryId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCountry/{countryId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCountry/{countryId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCountry/{countryId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addCountry`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editCountry`**



## api/deleteCountry/{countryId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteCountry/{countryId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteCountry/{countryId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteCountry/{countryId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSuppliers`**



## api/getSupplier/{supplierId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSupplier/{supplierId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSupplier/{supplierId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSupplier/{supplierId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addSupplier`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editSupplier`**



## api/deleteSupplier/{supplierId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteSupplier/{supplierId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteSupplier/{supplierId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteSupplier/{supplierId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getAreas`**



## api/getArea/{areaId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getArea/{areaId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getArea/{areaId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getArea/{areaId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addArea`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editArea`**



## api/deleteArea/{areaId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteArea/{areaId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteArea/{areaId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteArea/{areaId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getBatchProducts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getBatchProduct/batchProductId`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addBatchProduct`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editBatchProduct`**



## api/deleteBatchProduct/{batchProductId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteBatchProduct/{batchProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteBatchProduct/{batchProductId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteBatchProduct/{batchProductId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDeliverySetting`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editDeliverySetting`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCarts`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCartDetails`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getAllReviews`**



## api/getProductReviews/{productId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductReviews/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductReviews/{productId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductReviews/{productId}`**



## api/getProductReviewsWithPaginate/{productId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductReviewsWithPaginate/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductReviewsWithPaginate/{productId}"
);

let headers = {
    "Content-Type": "application/json",
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
        "first_page_url": "http:\/\/localhost\/api\/getProductReviewsWithPaginate\/{productId}?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/getProductReviewsWithPaginate\/{productId}?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/getProductReviewsWithPaginate\/{productId}",
        "per_page": 5,
        "prev_page_url": null,
        "to": null,
        "total": 0
    }
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductReviewsWithPaginate/{productId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addReview`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountAlls`**



## api/getDiscountAll/{discountAllId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountAll/{discountAllId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountAll/{discountAllId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountAll/{discountAllId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountProducts`**



## api/getDiscountProduct/{discountProductId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountProduct/{discountProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountProduct/{discountProductId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountProduct/{discountProductId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountCustomers`**



## api/getDiscountCustomer/{discountCustomerId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountCustomer/{discountCustomerId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountCustomer/{discountCustomerId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountCustomer/{discountCustomerId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountProductCustomers`**



## api/getDiscountProductCustomer/{discountProductCustomerId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDiscountProductCustomer/{discountProductCustomerId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDiscountProductCustomer/{discountProductCustomerId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getDiscountProductCustomer/{discountProductCustomerId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/getDiscountCalculation`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/getProductsWithDiscountCalculation`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addDiscountAll`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editDiscountAll`**



## api/deleteDiscountAll/{discountAllId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountAll/{discountAllId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountAll/{discountAllId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteDiscountAll/{discountAllId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addDiscountProduct`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editDiscountProduct`**



## api/deleteDiscountProduct/{discountProductId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountProduct/{discountProductId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountProduct/{discountProductId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteDiscountProduct/{discountProductId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addDiscountCustomer`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editDiscountCustomer`**



## api/deleteDiscountCustomer/{discountCustomerId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountCustomer/{discountCustomerId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountCustomer/{discountCustomerId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteDiscountCustomer/{discountCustomerId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addDiscountProductCustomer`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editDiscountProductCustomer`**



## api/deleteDiscountProductCustomer/{discountProductCustomerId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteDiscountProductCustomer/{discountProductCustomerId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteDiscountProductCustomer/{discountProductCustomerId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteDiscountProductCustomer/{discountProductCustomerId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getPaymentMethods`**



## api/getPaymentMethod/{paymentMethodId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPaymentMethod/{paymentMethodId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPaymentMethod/{paymentMethodId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getPaymentMethod/{paymentMethodId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addPaymentMethod`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editPaymentMethod`**



## api/deletePaymentMethod/{paymentMethodId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deletePaymentMethod/{paymentMethodId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deletePaymentMethod/{paymentMethodId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deletePaymentMethod/{paymentMethodId}`**



## api/getTransaction/{transactionId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getTransaction/{transactionId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getTransaction/{transactionId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getTransaction/{transactionId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getTransactions`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addTransaction`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editTransaction`**



## api/deleteTransaction/{transactionId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/deleteTransaction/{transactionId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/deleteTransaction/{transactionId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/deleteTransaction/{transactionId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addProductVisit`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addWishlistall`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/addComparelist`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductVisits`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCurrentUserProductVisits`**



## api/getYearlyProductVisitsReport/{productId?}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getYearlyProductVisitsReport/{productId?}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getYearlyProductVisitsReport/{productId?}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getYearlyProductVisitsReport/{productId?}`**



## api/getPorductVisitsYears/{productId?}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPorductVisitsYears/{productId?}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPorductVisitsYears/{productId?}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getPorductVisitsYears/{productId?}`**



## api/getMonthlyProductVisitsReport/{year}/{productId?}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getMonthlyProductVisitsReport/{year}/{productId?}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getMonthlyProductVisitsReport/{year}/{productId?}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getMonthlyProductVisitsReport/{year}/{productId?}`**



## api/getProductVisitsMonths/{year}/{productId?}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getProductVisitsMonths/{year}/{productId?}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getProductVisitsMonths/{year}/{productId?}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getProductVisitsMonths/{year}/{productId?}`**



## api/getDailyProductVisitsReport/{year}/{monthNumber}/{productId?}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDailyProductVisitsReport/{year}/{monthNumber}/{productId?}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDailyProductVisitsReport/{year}/{monthNumber}/{productId?}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getDailyProductVisitsReport/{year}/{monthNumber}/{productId?}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getWishlistall`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getComparelist`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getMonthlySalesReport`**



## api/getMonthlySalesReport/{year}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getMonthlySalesReport/{year}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getMonthlySalesReport/{year}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getMonthlySalesReport/{year}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCartYears`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getYearlySalesReport`**



## api/getCartMonths/{year}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCartMonths/{year}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCartMonths/{year}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getCartMonths/{year}`**



## api/getDailySalesReport/{year}/{monthNumber}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getDailySalesReport/{year}/{monthNumber}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getDailySalesReport/{year}/{monthNumber}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getDailySalesReport/{year}/{monthNumber}`**



## api/getService/{serviceId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getService/{serviceId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getService/{serviceId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getService/{serviceId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getServices`**



## api/getSubServices/{serviceId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSubServices/{serviceId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSubServices/{serviceId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSubServices/{serviceId}`**



## api/getSubService/{subServiceId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSubService/{subServiceId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSubService/{subServiceId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSubService/{subServiceId}`**



## api/getPackages/{subServiceId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPackages/{subServiceId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPackages/{subServiceId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getPackages/{subServiceId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCompanyInfo`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/updateCompanyInfo`**



## api/getSearchProducts/{searchInput}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSearchProducts/{searchInput}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchProducts/{searchInput}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSearchProducts/{searchInput}`**



## api/getSearchProductsWithDiscountCalculation/{searchInput}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/getSearchProductsWithDiscountCalculation/{searchInput}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchProductsWithDiscountCalculation/{searchInput}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/getSearchProductsWithDiscountCalculation/{searchInput}`**



## api/getSearchCategoryProducts/{category}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getSearchCategoryProducts/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchCategoryProducts/{category}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSearchCategoryProducts/{category}`**



## api/getSearchCategoryProductsWithDiscountCalculation/{category}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/getSearchCategoryProductsWithDiscountCalculation/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getSearchCategoryProductsWithDiscountCalculation/{category}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/getSearchCategoryProductsWithDiscountCalculation/{category}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCurrentUserWishLists`**



## api/addCurrentUserProductToWishlist/{productId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/addCurrentUserProductToWishlist/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/addCurrentUserProductToWishlist/{productId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/addCurrentUserProductToWishlist/{productId}`**



## api/removeCurrentUserProductFromWishlist/{productId}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/removeCurrentUserProductFromWishlist/{productId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/removeCurrentUserProductFromWishlist/{productId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/removeCurrentUserProductFromWishlist/{productId}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/confirmOrder`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCurrentUserCarts`**



## api/getCurrentUserCart/{cartId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getCurrentUserCart/{cartId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getCurrentUserCart/{cartId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getCurrentUserCart/{cartId}`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getCurrentUserCartDetails`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/cusotomerGivingCartRating`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/cartUpdate`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getPages`**



## api/getPage/{pageId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPage/{pageId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPage/{pageId}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getPage/{pageId}`**



## api/getPageWithSlug/{pageSlug}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getPageWithSlug/{pageSlug}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getPageWithSlug/{pageSlug}"
);

let headers = {
    "Content-Type": "application/json",
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

### Request
<small class="badge badge-green">GET</small>
 **`api/getPageWithSlug/{pageSlug}`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editPage`**



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

### Request
<small class="badge badge-green">GET</small>
 **`api/getSeoDefault`**



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



### Request
<small class="badge badge-black">POST</small>
 **`api/editSeoDefault`**



## api/printInvoice/{cartId}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/printInvoice/{cartId}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/printInvoice/{cartId}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/printInvoice/{cartId}`**



## api/cacheRemove




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cacheRemove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cacheRemove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-green">GET</small>
 **`api/cacheRemove`**



## api/getToday




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getToday" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/getToday"
);

let headers = {
    "Content-Type": "application/json",
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

2020-10-03
```

### Request
<small class="badge badge-green">GET</small>
 **`api/getToday`**



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



### Request
<small class="badge badge-green">GET</small>
 **`api/getImage`**



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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="7jZWU7eKU5TOZzezv0nlbtCAJB7elcMJq5xIvhgI">

    <title>Bellas Rouge</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app" >
        


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Bellas Rouge
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li class="nav-item">
                                <a class="nav-link" href="http://localhost/api/auth/login">Login</a>
                            </li>
                                                                        </ul>
                </div>
            </div>
        </nav>

        
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

                <note-component></note-component>
                

            </div>
        </div>
    </div>
</div>
        
    </div>

</body>
</html>

```

### Request
<small class="badge badge-green">GET</small>
 **`notes`**



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

### Request
<small class="badge badge-green">GET</small>
 **`webLogout`**



## {any}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/{any}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/{any}"
);

let headers = {
    "Content-Type": "application/json",
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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="7jZWU7eKU5TOZzezv0nlbtCAJB7elcMJq5xIvhgI">

    
    <title>E-Commerce</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <maincontainer/>
    </div>
</body>
</html>

```

### Request
<small class="badge badge-green">GET</small>
 **`{any}`**



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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="7jZWU7eKU5TOZzezv0nlbtCAJB7elcMJq5xIvhgI">

    
    <title>E-Commerce</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <maincontainer/>
    </div>
</body>
</html>

```

### Request
<small class="badge badge-green">GET</small>
 **`getServices`**




