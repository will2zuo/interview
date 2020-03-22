#### 如何处理高并发

- 使用缓存
- 优化数据库，提高数据使用效率
- 负载均衡
- 静态页面
- 分布式部署，业务分离
- 防盗链
- 限制大文件下载
- cdn 加速

#### 怎么解决商品超卖和秒杀的问题

- 加锁
- 队列

#### API 安全接口解决方案

- 非对称加密 rsa

    利用公钥和密钥，公钥传递数据，密钥解密获取数据

- Md5 加密

- 令牌 access_token

#### web 安全

- XSS 攻击，跨站脚本攻击：往 web 页面插入可以执行的脚本代码，达到盗取用户信息或者侵犯用户隐私的目的
    - 攻击方式
        - 非持久型：诱骗点击 url 链接
        - 持久型：一般是表单提交
    - 防范
        - web 渲染的页面必须是来自服务端，做转义
        - 不要相信前端传递过来的数据，将所有字段转义后处理
- CSRF 跨站伪造请求攻击
    - 攻击方式
        - 被攻击者登录了网站并保留了 cookie 信息
        - 访问了危险网站，并受引诱登录了之前的网站
        - 被攻击者没有做 csrf 防范
    - 防范
        - 正确的使用 get、post请求和cookie
        - 在非 get 中使用 token加密
        - 渲染表单加上 csrfToken，后端验证
- SQL 注入：没有有效的过滤用户的输入，使攻击者向服务端提交了恶意的 sql 查询代码，导致原 sql 查询逻辑改变
    - 防范
        - 数据库最小操作权限
        - 内容必须转义
        - 尽量不要使用拼接 sql 语句
        - 不要将 sql 错误暴露给用户
- DDOS 攻击，分布式拒绝服务，使用大量的请求资源导致资源过载，服务不可用
    - 防范
        - 网络上做好架构，负载均衡
        - 限制单个 ip 的访问次数
        - 关闭不必要的服务
        - 防火墙
        - 堆机器
- dns 和 http 劫持
    - dns：被篡改访问的地址
    - http：被篡改被访问的内容