# Laravel 8 將已發送的電子郵件儲存到磁碟

引入 themsaid 的 laravel-mail-preview 套件來擴增將已發送的電子郵件儲存到磁碟的郵件驅動，每次發送電子郵件時，都會在`storage/email-previews`中生成一個 .html 和 .eml 檔案，其名稱包括第一個收件人和主題。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/send-mail` 來進行發送電子郵件。

----

## 畫面截圖
![](https://i.imgur.com/oAdPk0e.png)
> 在網路瀏覽器中打開 .html 檔案時，將能夠看到電子郵件的外觀，但是不同的電子郵件客戶端可能會有一些差異