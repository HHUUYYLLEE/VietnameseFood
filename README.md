# VietnameseFood
ITSS in Japanese (1) project
# AE có thể sử dụng xampp để code như bình thường. nhớ chỉnh sửa file .env

# Còn nếu ae muốn sử dụng docker:

* set up môi trường docker Desktop, wsl.Hướng dẫn trên mạng nhiều lắm tớ set up lâu rồi nên không nhớ nữa

  Để bỏ qua các thay đổi về quyền của file trong khi commit trong Visual Studio Code, bạn có thể sử dụng câu lệnh git sau đây trên Terminal:
  
        git config core.fileMode false

* cái này khá quan trọng mặc dù chỉ là Note thôi: 
    Mở file .bashrc bằng lệnh sau:

        nano ~/.bashrc
        
    Cuộn xuống cuối file và thêm dòng sau vào:

        sudo su
        
    lúc này mặc định truy cập wsl bằng người dùng root
* vào terminal wsl clone code vào thư mục home/ ( nên như thế này vì nó sẽ đỡ lag hơn việc dùng ở trong mount )
* Mở docker Desktop lên để máy ảo docker start
* copy file .env.example sang file .env

        cp ./.env.example ./.env
        
*       cd VietnameseFood 

        chmod -R 777 ./

        ./init.sh

* checkout sang nhánh master
* tạo branch mới từ nhánh này
* exec vào bash : 

        ./connect.sh

  cấp quyền cho var/www/code : 

        chmod -R 777 ./


* Truy cap localhost:6969 de vao web nhe oki baby
    
   
Khi muốn sử dụng php artisan , composer ... thì ./connect.sh rồi sử dụng như bình thường

Chú ý: chỉ cần build lần đầu tiên, những lần sau chỉ cần mở docker-desktop run cái container VietnameseFood là được
