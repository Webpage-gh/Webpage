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
安卓端使用文件管理或终端等定位到<code>/etc/hosts</code>，修改保存即可。</details>

此方法结合更换网络环境可使用国际版bing，如无效可尝试<a href="https://www.bing.com/account/action?cc=clear" target="_blank">更改国家</a>。

### 使用 DoH
Chrome for Windows：  
打开`chrome://settings/security`，勾选使用安全DNS，使用您当前的服务提供商。  
Chrome for Android:
≥85:chrome://flags/#dns-over-https
点击“…”-设置-隐私-使用安全 DNS，勾选使用您当前的服务提供商
<85:打开`chrome://flags/#dns-over-https`,将Default改为Enabled，点击Relaunch。

### 更换网址
~~使用<a href="https://s.cn.bing.net">s.cn.bing.net</a>。~~

### 其它  
更换网络环境，方法不提供

使用 DoT(Android 私人 DNS,未测试)
