#### Linux 的压缩和解压

- .tar.gz 和 .tgz 文件

  解压：tar zxvf filename

  压缩：tar zcvf filename

- .tar 文件

  解压：tar xvf filename

  压缩：tar cvf filename

```php
x:解压
v:显示全部过程
f:后面接文件
c:建立压缩文档
```

#### Linux 的基本命令

- ls 列表

- ln 软链

- touch 创建文件

- mkdir 创建文件夹

- mv 移动

- cp 复制

- cat 用于标准输出上查看文件内容

- vim 打开文件

- rm 删除

- cd 切换文件路径

- free 查看内存

  free -m 单位为兆

- top 查看 cpu 占用情况

- pwd 显示当前工作目录

- tail 标准输出默认显示文件的最后10行

- grep 在给定文件中搜寻指定的字符串

- ps 显示系统的运行进程

#### Linux 的文件权限

![image-20200322180100901](/Users/will.zuo/Library/Application Support/typora-user-images/image-20200322180100901.png)

- 权限的粒度有 拥有者(u)/群组(g)/其他组(o) 三种
- 权限类型包括 读/写/执行 权限
- 读（r）：4；写（w）：2；执行（x）：1
- chmod u+rwx filename or chmod 700 filename

