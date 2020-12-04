# think-crypt
The ThinkPHP5 or ThinkPHP6 html2x

## 安装

### 一、执行命令安装
```
composer require dh2y/think-html2x
```

或者

### 二、require安装
```
"require": {
        "dh2y/think-html2x":"*"
},
```

或者
###  三、autoload psr-4标准安装
```
   a) 进入vendor/dh2y目录 (没有dh2y目录 mkdir dh2y)
   b) git clone 
   c) 修改 git clone下来的项目名称为think-html2x
   d) 添加下面配置
   "autoload": {
        "psr-4": {
            "dh2y\\html2x\\": "vendor/dh2y/think-html2x/src"
        }
    },
    e) php composer.phar update
```
##需安装扩展phantomjs
    cd /www/server
    wget -c https://npm.taobao.org/mirrors/phantomjs//phantomjs-2.1.1-linux-x86_64.tar.bz2
    tar -xjvf phantomjs-2.1.1-linux-x86_64.tar.bz2
    mv phantomjs-2.1.1-linux-x86_64 phantomjs
    ln -s /www/server/phantomjs/bin/phantomjs /usr/local/bin/phantomjs
    yum install fontconfig freetype2
    
>在终端下测试Phantomjs
~~~  
 phantomjs -v
 #2.1.1
~~~

## 使用


