# API 接口文档

## 1、接口说明

#### 1.1. API V1 接口说明

- 接口基准地址：`http://127.0.0.1:8000/api/`
- 服务端已开启 CORS 跨域支持
- 使用 HTTP Status Code 标识状态
- 数据返回格式统一使用 JSON
- 不会有下一次，太麻烦了，我居然写了API文档，天啊。(`03-26补充`)
- 我想不会再写了这个了，算了，还是把请求方法补充详细点（`03-27补充`）

#### 1.1.1. 支持的请求方法

- GET（SELECT）：从服务器`获取`资源（一项或多项）。
  - http://127.0.0.1:8000/api/goods/:id
- POST（CREATE）：在服务器`创建`一个资源。

  - http://127.0.0.1:8000/api/goods?`参数`
- PUT（UPDATE）：在服务器`修改`资源（客户端提供改变后的完整资源）。
  - http://127.0.0.1:8000/api/goods/:id?`参数`
- PATCH（UPDATE）：在服务器更新资源（客户端提供改变的属性）。
- DELETE（DELETE）：从服务器删除资源。
  - http://127.0.0.1:8000/api/goods/:id
- HEAD：获取资源的元数据。
- OPTIONS：获取信息，关于资源的哪些属性是客户端可以改变的。

#### 1.1.2. 通用返回状态说明

| *状态码* | *含义*                | *说明*                                              |
| -------- | --------------------- | --------------------------------------------------- |
| 200      | OK                    | 请求成功                                            |
| 201      | CREATED               | 创建成功                                            |
| 204      | DELETED               | 删除成功                                            |
| 400      | BAD REQUEST           | 请求的地址不存在或者包含不支持的参数                |
| 401      | UNAUTHORIZED          | 未授权                                              |
| 403      | FORBIDDEN             | 被禁止访问                                          |
| 404      | NOT FOUND             | 请求的资源不存在                                    |
| 422      | Unprocesable entity   | [POST/PUT/PATCH] 当创建一个对象时，发生一个验证错误 |
| 500      | INTERNAL SERVER ERROR | 内部错误                                            |

------

## 2、管理员接口

#### 2.1 用户数据列表

- 请求路径：admin

- 请求方式：get

- 请求参数

- 响应参数

  | 参数名         | 参数说明  | 备注            |
  | -------------- | --------- | --------------- |
  | id             | 用户ID    |                 |
  | role_id        | 角色ID    |                 |
  | username       | 用户名称  |                 |
  | password       | 用户密码  |                 |
  | mobile         | 手机号    |                 |
  | email          | 邮箱      |                 |
  | gender         | 性别      | 1男，2女，3隐藏 |
  | status         | 状态      | 1异常，2正常    |
  | remember_token | 识别TOKEN |                 |

- 返回数据

  ```json
  {
      "status": true,
      "code": 200,
      "msg": "查询成功"
      "data": {
          "id": 1,
      	"role_id": 1
          "username": "admin",
          "password": "admin",
          "mobile": null,
          "email": null,
      	"gender": 1,
      	"status": 2,
      	"remember_token": null
      },
  	{
          "id": 2,
      	"role_id": 1
          "username": "nian",
          "password": "nian",
          "mobile": null,
          "email": null,
      	"gender": 1,
      	"status": 2,
      	"remember_token": null
      }
  	....
  }
  ```

#### 2.2 查询用户

- 请求路径：admin/:id

- 请求方式：get

- 请求参数

  | 参数名 | 参数说明 | 备注       |
  | ------ | -------- | ---------- |
  | id     | 用户ID   | `不能为空` |

- 响应参数

  | 参数名         | 参数说明  | 备注            |
  | -------------- | --------- | --------------- |
  | id             | 用户ID    |                 |
  | role_id        | 角色ID    |                 |
  | username       | 用户名称  |                 |
  | password       | 用户密码  |                 |
  | mobile         | 手机号    |                 |
  | email          | 邮箱      |                 |
  | gender         | 性别      | 1男，2女，3隐藏 |
  | status         | 状态      | 1异常，2正常    |
  | remember_token | 识别TOKEN |                 |

- 返回数据

  ```json
  {
      "status": true,
      "code": 200,
      "msg": "查询成功"
      "data": {
          "id": 1,
      	"role_id": 1
          "username": "admin",
          "password": "admin",
          "mobile": null,
          "email": null,
      	"gender": 1,
      	"status": 2,
      	"remember_token": null
      }
  }
  ```

#### 2.3创建用户

- 请求路径：admin/create
- 请求方法：post
- 请求参数

*太难了，不写了，太麻烦了！*



