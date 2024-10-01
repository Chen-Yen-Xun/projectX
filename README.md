# 主題
**長平粉體塗裝**   
結合課程所學，以粉體塗裝設備公司官方網站呈現，著重於會員管理系統，前台具有會員註冊、登入/登出功能；後台則有會員管理、資料修改、刪除功能。

## 功能
- 會員登入、登出
- 會員列表管理
- 會員資料修改
- 會員資料刪除
- 會員分級呈現頁面
- 圖表分析  
  會員等級組成、會員居住地分布、會員註冊時間
- 地圖功能  
  會員居住地標記

## 專案貢獻
### 三層架構的產品列表
- **問題**  
  如何具體呈現父選單 > 子選單 > 明細的結構  
  非對稱性的父子選單數量
- **解決方法**  
  使用 jQuery 語法監聽各選單按鈕，配合 Bootstrap 語法，達到各階層選單正常呈現。

### 會員系統如何與前台結合
- **問題**  
  使用 Laravel 框架下應如何分辨會員登入資料
- **解決方法**  
  使用 session 紀錄與資料庫符合的帳號、會員等級，渲染至對應區塊。

## 技術
- Laravel 8
- Font Awesome Free - v6.5.2
- aos - v2.3.1
- jQuery v3.7.1
- jQuery UI - v1.13.0
- Bootstrap v5.2.3
- chart.js - v4.4.4
- sweetalert2 v11.12.2
- wow - v1.3.0
- AdminLTE - v3.2.0
- Leaflet - v1.9.4
- Leaflet.markercluster - v1.0.0
- 台灣 縣市，鄉鎮，地址 中英文 JSON
- mews/captcha

## 聯絡方式
E-mail: [norush5566@gmail.com](mailto:norush5566@gmail.com)
