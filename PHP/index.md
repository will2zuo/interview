#### PHP 是什么

> PHP（"PHP:Hypertext Preprocessor"，超文本预处理器），基于服务端创建动态网站的脚本语言

#### PHP数据类型

1. 基本类型
   - 布尔型（boolean）：true 和 false 两个值
   - 整型（integer）
   - 浮点型（float）
   - 字符串（string）
2. 复合类型
   - 数组（array）
   - 对象（object）
3. 特殊类型
   - 资源（resource）：存放 PHP 外部数据，比如数据库、文件等
   - Null 类型：只有一个值 null，不能运算

#### 常用的全局变量 $_SERVER

```php
// 目录根目录
$_SERVER['DOCUMENT_ROOT']
// 请求头部
$_SERVER['HTTP_HOST']
// 用户 ip 地址
$_SERVER['REMOTE_ADDR']
// 服务器的 ip 地址
$_SERVER['SERVER_ADDR']
// 服务器主机名称
$_SERVER['SERVER_NAME']
// 当前页面的前一页
$_SERVER['HTTP_REFERER']
```

#### PHP 常用的超全局变量

```php
// get 传送方式
  $_GET
// post 传送方式
  $_POST
// 可以接收到 get 和 post 两种方式的值
  $_REQUEST
// 引用全局作用域中可用的全部变量
  $_GLOBALS
// 上传文件使用
  $_FILE
// 系统环境变量
  $_SERVER
// 用于会话控制
  $_COOKIE
// 用于会话控制
  $_SESSION
// 服务器环境变量
  $_ENV
```

#### 比较 include 和 require 

- include 引用不存在的文件会产生一个警告但是程序会继续执行；require 引用不存在的文件会导致一个致命的错误，程序停止执行
- include 执行时文件吗每次都要进行读取；require 文件只处理一次，所以在引用的文件较大时，require 的效率更高

#### 比较 get 和 post 两种传输方式

