# Dcat Admin 表单生成密钥组件
<!-- TOC -->
* [预览](#)
* [环境](#)
* [安装](#)
  * [安装扩展](#)
  * [启用扩展](#)
* [配置/使用](#)
  * [全局参数配置](#)
  * [表单中使用](#)
    * [使用全局配置参数](#)
    * [使用自定义参数](#)
    * [参数说明](#)
* [TODO](#todo)
* [开源协议](#)
<!-- TOC -->
## 预览
![](https://raw.githubusercontent.com/liumenggit/pictureBed/main/bear.test_admin_auth_extensions.png)
## 环境

- PHP >= ^7.1.0
- Dcat-admin ^2.0

## 安装

### 安装扩展

下载`zip`压缩包，打开`开发工具->扩展`页面，点击`本地安装`按钮，选择本插件的 `.zip` 文件。

### 启用扩展

在菜单 `开发工具->扩展` 中启用 `liumenggit.generate-key` 扩展

## 配置/使用

### 全局参数配置

- 插件`设置`可以进行全局参数配置。
- 设置项 `密钥长度` 密钥长度可设置为4-32位。
- 设置项 `密钥组成` 密钥组成可选择 `小写字母` `大写字母` `数字` `符号`。

### 表单中使用

#### 使用全局配置参数

```php
$form->generateKey('key', '密钥');
```

#### 使用自定义参数

```php
$form->generateKey('key', '密钥')->combinedKey(['length'=>10,'lower'=>true,'upper'=>true,'number'=>true,'symbol'=>true]);
```

#### 参数说明

| 参数     | 类型   | 描述     |
|--------|------|--------|
| length | int  | 生成长度   |
| lower  | bool | 开关小写字母 |
| upper  | bool | 开关大写字母 |
| number | bool | 开关数字   |
| symbol | bool | 开关符号   |

## TODO

- `combinedKey`参数会覆盖`全局配置参数`。
- `combinedKey`没有进行配置的参数使用`全局配置参数`值。

## 开源协议

Dcat Plus 遵循 MIT 开源协议。
