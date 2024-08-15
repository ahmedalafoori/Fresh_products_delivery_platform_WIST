# Fresh_products_delivery_platform

2. تثبيت الاعتماديات
قم بتثبيت جميع الاعتماديات المطلوبة للمشروع باستخدام Composer:
composer install

3. نسخ ملف البيئة
نسخ ملف البيئة .env.example إلى .env:
cp .env.example .env
ثم قم بتحديث ملف .env لإعداد معلومات الاتصال بقاعدة البيانات وأي إعدادات أخرى حسب الحاجة.



4. توليد مفتاح التطبيق
قم بتوليد مفتاح التطبيق باستخدام الأمر التالي:
php artisan key:generate

 5. تشغيل الترحيلات
قم بتشغيل الترحيلات لإنشاء الجداول في قاعدة البيانات:
php artisan migrate

6. تشغيل التعداد
بعد تشغيل الترحيلات، قم بتشغيل التعداد لملء قاعدة البيانات بالبيانات الافتراضية:
php artisan db:seed

7. تشغيل Seeder خاص
إذا كان لديك Seeder خاص بالجداول الإدارية، قم بتشغيله باستخدام الأمر التالي:
php artisan db:seed --class=AdminTablesSeeder


8. تشغيل خادم الويب
ابدأ خادم الويب المدمج في Laravel:
php artisan serve

username :admin
password:admin


![Screenshot (264)](https://github.com/user-attachments/assets/371250a3-6920-49ae-8f0d-e7307c298c25)
![Screenshot (263)](https://github.com/user-attachments/assets/bc37d59a-9860-4633-9568-8d4f14c696c6)
![Screenshot (262)](https://github.com/user-attachments/assets/3be4d6b3-7573-4781-8805-b7e3ae92cb28)
![Screenshot (261)](https://github.com/user-attachments/assets/faef7d79-67a1-44ca-8d59-0241f609c4df)
![Screenshot (260)](https://github.com/user-attachments/assets/55685927-6906-4757-a907-a165c149daa8)
![Screenshot (259)](https://github.com/user-attachments/assets/08d4ccfe-be35-4e23-b934-80aaadbe4a2e)
![Screenshot (258)](https://github.com/user-attachments/assets/8380c2d6-c023-44a7-b2f8-1b0d387be36d)
![Screenshot (257)](https://github.com/user-attachments/assets/c18947db-c6ce-4026-8d3e-578802448a97)
![Screenshot (277)](https://github.com/user-attachments/assets/6c776cc5-08a1-4aea-bd53-13f197bf2aed)
![Screenshot (276)](https://github.com/user-attachments/assets/d666f59f-14ef-4706-8104-cdbcc30a2e06)
![Screenshot (275)](https://github.com/user-attachments/assets/6938bd25-df19-44bc-96c0-c317077b7b01)
![Screenshot (274)](https://github.com/user-attachments/assets/d8b17c8b-b987-4170-91b9-32031ae9b5b4)
![Screenshot (273)](https://github.com/user-attachments/assets/9663072d-0365-4cb6-880c-ebd416ea3eb1)
![Screenshot (272)](https://github.com/user-attachments/assets/86a44250-c093-40ac-9757-0a44bdce75b2)
![Screenshot (271)](https://github.com/user-attachments/assets/d8d207ef-3d0f-4570-965e-3d9d48c245b3)
![Screenshot (270)](https://github.com/user-attachments/assets/cb9f471f-e63d-4794-9a15-4a89a0a3240c)
![Screenshot (269)](https://github.com/user-attachments/assets/2a31ebae-7ae9-4973-8900-7bd6f5d0a3ae)
![Screenshot (268)](https://github.com/user-attachments/assets/c7eb9ab8-6e91-4fa8-992c-29bef2a7dd35)
![Screenshot (267)](https://github.com/user-attachments/assets/e47d0372-b76c-48a5-9944-d575cba63617)
![Screenshot (266)](https://github.com/user-attachments/assets/e8391580-ac96-42c7-9d10-dce723fa0596)
![Screenshot (265)](https://github.com/user-attachments/assets/3fb8c2db-0c95-47bd-8f8f-a250a9c19680)


