## 项目简介
dolphin 是一个的资产风险分析系统,用户仅需将一个主域名添加到系统中,dolphin会自动抓取与该域名相关的信息进行分析;

例如同ICP域名,子域名,对应IP,端口,URL地址,站点截图,端口协议,邮箱地址,泄露信息等.

前端使用了bootstrap框架,控制台使用的ThinkPHP; 底层数据来自于蜻蜓平台的数据聚合系统,调用了各类框架和API. 


## 安装方法
1. 下载代码:`git clone --depth=1 https://github.com/StarCrossPortal/dolphin.git && cd dolphin`
2. 启动docker`docker run -it -d -p 80:80 -v $(pwd):/root/code  --name dolphin  daxia/qingting:dolphin`
3. 安装依赖`docker exec -it dolphin bash -c 'cd /root/code && composer install'`
4. 新建MySQL数据库,把`xinxishouji.sql`文件导入进去
5. 复制`.example.env`为`.env`,并修改数据库地址信息
6. 浏览器打开地址:`http://xxxx/admin/home/index`

## 联系我们

微信:songboy8888
![](http://oss.songboy.site/blog/1_587402316_171_85_3_671325813_37a2c7491bd38a3a01c1fe0c1f35c886.png)

## 感谢
1. 项目UI体验,灵感来自于0xbug大佬的biu系统`https://github.com/0xbug/Biu`
2. 底层由蜻蜓驱动,地址`http://qingting.starcross.cn/scenario/detail?id=2054`


## 效果图

![](http://oss.songboy.site/blog/20230307120424.png)

![](http://oss.songboy.site/blog/20230307120714.png)

![](http://oss.songboy.site/blog/20230307120735.png)

![](http://oss.songboy.site/blog/20230307121407.png)

![](http://oss.songboy.site/blog/20230307120802.png)

![](http://oss.songboy.site/blog/20230307120821.png)

![](http://oss.songboy.site/blog/20230307120831.png)

![](http://oss.songboy.site/blog/20230307120841.png)

![](http://oss.songboy.site/blog/20230307121110.png)


----


## Stargazers over time

[![Stargazers over time](https://starchart.cc/StarCrossPortal/dolphin.svg)](https://starchart.cc/StarCrossPortal/dolphin)
