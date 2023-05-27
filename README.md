AE có thể sử dụng xampp để code như bình thường. nhớ chỉnh sửa file .env

Còn nếu ae muốn sử dụng docker:
B1: set up môi trường docker Desktop, wsl.Hướng dẫn trên mạng nhiều lắm tớ set up lâu rồi nên không nhớ nữa
B2: cái này khá quan trọng mặc dù chỉ là Note thôi: 
    Mở file .bashrc bằng lệnh sau:
        nano ~/.bashrc
    Cuộn xuống cuối file và thêm dòng sau vào:
        sudo su
    lúc này mặc định truy cập wsl bằng người dùng root
B2: vào terminal wsl clone code vào thư mục home/ ( nên như thế này vì nó sẽ đỡ lag hơn việc dùng ở trong mount )
B3: Mở docker Desktop lên để máy ảo docker start
B4: copy file .env.example sang file .env
    cp ./.env.example ./.env
B5: cd VietnameseFood 
    ./init
B6: Truy cap localhost:6969 de vao web nhe oki baby
    
    khi muốn sử dụng php artisan , composer ... thì ./connect.sh rồi sử dụng như bình thường

Chú ý: chỉ cần build lần đầu tiên, những lần sau chỉ cần mở docker-desktop run cái container VietnameseFood là được
