## Bing打不开已知解决方法
### 更改DNS
更改为`8.8.8.8` `8.8.4.4`即可。如再次被屏蔽，考虑撰写详细教程。

### 修改hosts(Android 需 root)
```
204.79.197.200 cn.bing.com
204.79.197.200 www.bing.com
204.79.197.200 bing.com
```
<details>Windows：按下Win+R打开运行，输入<code>%windir%\system32\drivers\etc\hosts</code>，勾选使用管理权限创建此任务，如当前账户为管理员帐户可忽略。点击确定后在弹出的窗口中选择默认文本编辑器，点击确定。输入以上内容后按下Ctrl+S进行保存。  
安卓端使用文件管理或终端等定位到/etc/hosts，修改保存即可。</details>

此方法结合更换网络环境可使用国际版bing，如无效可尝试[点此解决](https://www.bing.com/?mkt=zh-TW)。

### 使用 DoH
Chrome for Windows：
打开 "chrome://settings/security"，勾选使用安全DNS，使用 OpenDNS。

### 更换网址
使用<a href="https://s.cn.bing.net" target="_blank">s.cn.bing.net</a>。

### 其它  
更换网络环境，方法不提供

使用 DoT(Android 私人 DNS,未测试)
