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
// 判断接收的数据是 post 还是 get
	$_SERVER['REQUEST_METHOD']
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

#### 比较 get 和 post 两种传输方式（常规答案）

- 数据传输大小： get 传输数据的大小是 2kb，而 post 一般是没有限制的，但是会受内存大小影响，一般通过修改 php.ini 配置文件来修改
- 数据传输方式： get 是通过 url 传递参数的，在 url 中可以看到参数；post 是在表单中使用 post 方法提交
- 数据安全性：get 参数可见，容易被攻击
- 缓存： get 可以被缓存， post 不能被缓存

#### echo、print、print_r 的区别

- echo 可以输出一个或者多个变量
- print 只能打印一个变量
- print_r 是一个函数，打印的是复合类型的变量，比如 数组、对象

#### 传值赋值和引用赋值的区别

- 传值赋值是将变量里的内容赋值一份，被赋值的变量不会被影响
- 引用赋值是将两个变量指向同一个内存空间，只要其中一个变量改变就会影响到另一个变量

#### 将 1234567890 改为 1,234,567,890

```php
<?php
	$str = '1234567890';
	$strrev = strrev($str);
	$chunk = chunk_split($strrev, 3, ',');
	$result = strrev($chunk);
	$result = substr($result, 1);
	echo $result;
```

#### session 和 cookie 的区别

- cookie 的数据存放在客户端，session 的数据存放在服务器
- cookie 安全性较差，别人可以分析放在本地的 cookie 进行 cookie 欺骗（CSRF，跨站伪造请求攻击）
- session 会在一定时间内保存在服务器上，当大量的 session 存在，会影响服务器的性能
- 单个 cookie 保存的数据长度不能超过 4kb ，很多浏览器都限制一个网址最多能保存 20 个 cookie

#### 如何设置 session 的过期时间

```php
session_set_cookie_params()
```

#### PHP 常见的设计模型

1. 策略模式
   - 是对象的行为模式，是对一组算法的封装，动态的选择需要的算法使用
2. 工厂模式
   - 最常用的实例化对象模式，是用工厂的方法代替 new 操作的一种方式
3. 单例模式
   - 保证某个类只有一个实例，而且自动实例化并向整个系统提供这个实例
   - 只实例化一次，避免大量的 new 操作，消耗系统和内存资源
   - 饿汉模式：在类初始化就自行实例化
   - 懒汉模式：只是在第一次调用的时候进行实例化
4. 适配器模式
   - 将各种截然不同的函数接口封装成一个统一的 API
5. 注册模式
   - 解决全局共享和交换对象
6. 观察者模式
   - 当一个对象发生变化时，依赖它的对象都会收到小心，并自动更新（比如 事件）

#### 数组常用的函数

```php
array_merge(); // 合并数组
array_push(); // 往数组后追加
array_unique(); // 去重
array_keys(); // 获取数组的 key 值
array_values(); // 获取数据的 value 值
array_filter(); // 去空
in_array(); // 数组包含
count(); // 计算数组的长度
```

#### 面对对象的特征

1. **封装**：只需要知道这个类是做什么的，不需要关心怎么实现
2. **继承**：子类可以继承父类的属性和方法，也可以重写或者新增属性和方法，增加了代码的可重用
3. **多态**：同一个类的不同对象使用同一个方法可以得到不同的结果，增加了灵活性和重用性

#### 面对对象的五大原则

1. **单一职责原则**：一个类的功能单一
2. **开放封闭原则**：在扩展上是开放的，在更改性能方面是封闭的
3. **替换原则**：子类可以替换父类出现在父类可以出现的地方
4. **依赖原则**：具体依赖抽象，上层依赖下层
5. **接口隔离原则**：模块间要通过接口隔离开，而不是通过具体的类强耦合



